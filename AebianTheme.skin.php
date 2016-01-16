<link href="https://aebian.org/combine/9f313cbdef6f75c260c1abea921ce9d6-1452301313" rel="stylesheet">
<link href="https://aebian.org/combine/cb05de13446f11fe7fc47ccc7a08837b-1439902022" rel="stylesheet">
<link href="https://aebian.org/combine/1024557a2e3695abe7527b9757f3ac6c-1439902022" rel="stylesheet">

<div class="topbar animated fadeInLeftBig"></div>
<div class="navbar-wrapper">
        <div class="navbar navbar-default" role="navigation" id="top-nav">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="https://Aebian.org"><img src="https://assets-cdn.aebian.org/aebian.org/logo.png" alt="logo"></a>
              <!-- #Logo Ends -->
            </div>
            <!-- Nav Starts -->
              <ul class="nav navbar-nav navbar-right">
                 <li><a href="https://Aebian.org"><b>Home</b></a></li>
                 <li><a href="#"><b>Blog</b></a></li>
                  <li class="active hidden-md"><a href="https://wiki.aebian.org"><b>Wiki</b></a></li>
                  <li><a href="#"><b>Partners</b></a></li>
                 <li><a href="#"><b>Media</b></a></li>
              </ul>
            </div>
        </div>
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
	 * Initializes output page and sets up skin-specific parameters
	 * @param OutputPage $out Object to initialize
	 */
	public function initPage( OutputPage $out ) {
		parent::initPage( $out );
		$out->addModules( array( 'skins.AebianTheme.js' ) );
	}

	/**
	 * Loads skin and user CSS files.
	 * @param OutputPage $out
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( array( 'skins.AebianTheme.bootstrap', 'skins.AebianTheme.font-awesome', 'skins.AebianTheme' ) );
	}

}
