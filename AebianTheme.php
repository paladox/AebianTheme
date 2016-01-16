<?php
/**
 * Aebian Wiki Theme
 *
 * @file
 * @ingroup Skins
 * @author Alexander Knight (https://Aebian.org/)
 * @license https://Aebian.org/licenses/nm
 */
 
 

if ( function_exists( 'wfLoadSkin' ) ) {
	wfLoadSkin( 'AebianTheme' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['AebianTheme'] = __DIR__ . '/i18n';
	/* wfWarn(
		'Deprecated PHP entry point used for AebianTheme skin. ' .
		'Please use wfLoadSkin instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	); */
	return true;
} else {
	die( 'This version of the AebianTheme skin requires MediaWiki 1.25+' );
}
