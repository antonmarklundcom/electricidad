<?php
/**
 * The outage-season strip above the header. Renders only in the months listed
 * in content/ui.php 'season.months' (Paraguay's summer: more outages, voltage
 * drops and AC load), and never on the campaign page itself. Off-season it
 * renders nothing, so nobody has to remember to switch it on or off.
 */

declare(strict_types=1);

$seasonUi   = content('ui')['season'];
$seasonShow = in_array((int) date('n'), $seasonUi['months'], true)
    && ($page['path'] ?? '/') !== $seasonUi['path'];
?>
<?php if ($seasonShow): ?>
  <div class="season-banner">
    <div class="container season-banner__inner">
      <span><?= e($seasonUi['text']) ?></span>
      <a href="<?= e($seasonUi['path']) ?>"><?= e($seasonUi['cta']) ?> &rarr;</a>
    </div>
  </div>
<?php endif; ?>
<?php unset($seasonUi, $seasonShow); ?>
