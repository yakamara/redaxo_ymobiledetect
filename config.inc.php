<?php

/**
 * ymobiledetect
 *
 * @author jan@kristinus.de
 *
 * @package redaxo4
 * @version svn:$Id$
 */

/**
 * Little piece of PHP to make Mobile_Detect auto-loadable in PSR-0 compatible PHP autoloaders like
 * the Symfony Universal ClassLoader by Fabien Potencier. Since PSR-0 handles an underscore in
 * classnames (on the filesystem) as a slash, "Mobile_Detect.php" autoloaders will try to convert
 * the classname and path to "Mobile\Detect.php". This script will ensure autoloading with:
 * - Namespace: Detection
 * - Classname: MobileDetect
 * - Namespased: \Detection\MobileDetect
 * - Autoload path: ./namespaced
 * - Converted path: ./namespaced/Detection/MobileDetect.php
 *
 * Don't forget to use MobileDetect (instead of Mobile_Detect) as class in code when autoloading.
 *
 * Thanks to @WietseWind.
 * For details please check: https://github.com/serbanghita/Mobile-Detect/pull/120
 */

$mypage = 'ymobiledetect';
$REX['ADDON']['version'][$mypage] = '1.0';
$REX['ADDON']['author'][$mypage] = 'Jan Kristinus, https://github.com/serbanghita/Mobile-Detect';

include_once rex_path::addon('ymobiledetect','vendor/mobile-detect/Mobile_Detect.php');
$REX["MOBILE"] = new Mobile_Detect();

if ($REX['REDAXO']) {
  $I18N->appendFile($REX['INCLUDE_PATH'] . '/addons/' . $mypage . '/lang/');
  $REX['ADDON']['name'][$mypage] = $I18N->msg('ymobiledetect');



}






