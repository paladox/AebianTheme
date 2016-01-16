<?php
/**
* Skin file for Aebian Wiki Theme.
*
* @file
* @ingroup Skins
*/

/**
 * SkinTemplate class for My Skin skin
 * @ingroup Skins
 */
class SkinAebianTheme extends SkinVector {

	public $skinname = 'aebiantheme';
	public $stylename = 'AebianTheme';

	/**
	 * @param $out OutputPage object
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( 'skins.AebianTheme' );
	}

}
