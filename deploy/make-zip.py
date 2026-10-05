"""Portable equivalent of make-zip.sh for Windows; no production access."""
import argparse
from datetime import date
from pathlib import Path
import shutil
import os
import stat
import zipfile

parser = argparse.ArgumentParser()
parser.add_argument('--date', default=date.today().isoformat())
args = parser.parse_args()
date.fromisoformat(args.date)
root = Path(__file__).resolve().parent.parent
dist = root / 'dist'
name = 'electricidad-' + args.date
stage = dist / name
archive = dist / (name + '.zip')
dist.mkdir(exist_ok=True)
# Only replace the generated stage for this precise build, inside this repo.
assert stage.resolve().parent == dist.resolve() and stage.name == name
if stage.exists():
    def remove_readonly(function, path, error):
        # OneDrive can mark copied directories read-only on Windows.
        target = Path(path).resolve()
        assert target == stage.resolve() or stage.resolve() in target.parents
        os.chmod(path, stat.S_IWRITE | stat.S_IREAD)
        function(path)
    shutil.rmtree(stage, onexc=remove_readonly)
stage.mkdir()
files = ['index.php', '404.php', 'enviar.php', 'sitemap.php', 'robots.php',
         'router.php', '.htaccess', 'config.example.php']
dirs = ['assets', 'content', 'lib', 'partials', 'templates']
routes = ['blog', 'checklist-electrico', 'contacto', 'electricista', 'guias',
          'herramientas', 'precios', 'privacidad', 'profesionales', 'segmentos',
          'servicios', 'temporada-de-cortes', 'terminos']
for item in files:
    shutil.copy2(root / item, stage / item)
for item in dirs + routes:
    shutil.copytree(root / item, stage / item)
shutil.copy2(root / 'assets/css/site.min.css', stage / 'assets/css/site.css')
(stage / 'assets/css/site.min.css').unlink()
(stage / 'logs').mkdir()
(stage / 'logs/.htaccess').write_text('Require all denied\n', encoding='utf-8')
for forbidden in ['docs', 'prompts', 'tests', 'deploy', '.git', 'config.php', 'node_modules']:
    assert not (stage / forbidden).exists(), forbidden
with zipfile.ZipFile(archive, 'w', zipfile.ZIP_DEFLATED) as output:
    for path in sorted(stage.rglob('*')):
        if path.is_file():
            output.write(path, path.relative_to(stage).as_posix())
print(f'{archive}: {archive.stat().st_size} bytes, {len(list(stage.rglob("*")))} entries')
