<?php
/**
 * Aebian Wiki Theme
 *
 * @file
 * @ingroup Skins
 * @author Alexander Knight (https://Aebian.org/)
 * @license https://Aebian.org/licenses/nm
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array (
	'path' => __FILE__,
	'name' => 'Aebian Wiki Theme',
	'url' => "https://Aebian.org/",
	'author' => 'Alexander Knight',
	'descriptionmsg' => 'mywiki-desc',
);

$wgValidSkinNames['AebianTheme'] = 'AebianTheme';
$wgAutoloadClasses['SkinAebianTheme'] = dirname(__FILE__).'/AebianTheme.skin.php';
$wgExtensionMessagesFiles['AebianTheme'] = dirname(__FILE__).'/AebianTheme.i18n.php';

$wgResourceModules['skins.AebianTheme'] = array(
	'styles' => array(
		'AebianTheme/css/screen.css' => array( 'media' => 'screen' ),
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath' => &$GLOBALS['wgStyleDirectory'],
);
?>
