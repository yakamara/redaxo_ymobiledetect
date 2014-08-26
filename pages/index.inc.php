<?php

/**
 * Ymobiledetect Addon
 * @package redaxo4
 */

require $REX['INCLUDE_PATH'] . '/layout/top.php';

rex_title($I18N->msg('ymobiledetect'));

$mdl_ex = '<?php

if ($REX["MOBILE"]->isMobile()) {
  echo "Mobile";
}

if ($REX["MOBILE"]->isTablet()) {
  echo "IsTablet";
}

if ($REX["MOBILE"]->isIOs()) {
  echo "isIOs";
}

if ($REX["MOBILE"]->is("BlackBerry")) {
  echo "isBlackBerry";
}

/* .... */

?>';

?>

<div class="rex-addon-output">
    <h2 class="rex-hl2"><?php echo $I18N->msg('ymobiledetect_usage'); ?></h2>

    <div class="rex-addon-content">
        <p class="rex-tx1"><?php echo $I18N->msg('ymobiledetect_help'); ?></p>
        <?php rex_highlight_string($mdl_ex); ?>
    </div>
</div>

<?php
require $REX['INCLUDE_PATH'] . '/layout/bottom.php';
