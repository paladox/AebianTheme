<div class="topbar animated fadeInLeftBig"></div>
<div class="navbar-wrapper" style="margin-bottom: -1.8em;">
	<div class="navbar navbar-default" role="navigation" id="top-nav" style="z-index: 5;">
		<div class="navbar-header">
			<!-- Logo Starts -->
			<a class="navbar-brand" href="https://Aebian.org"><img src="https://assets-cdn.aebian.org/aebian.org/logo.png" alt="logo"></a>
			<!-- #Logo Ends -->
		</div>
		<!-- Nav Starts -->
		<ul class="nav navbar-nav navbar-right">
			<li><a href="https://Aebian.org"><b>Home</b></a></li>
			<li><a href="https://aebian.org/stories/default"><b>Blog</b></a></li>
			<li class="active hidden-md"><a href="https://wiki.aebian.org"><b>Wiki</b></a></li>
			<li><a href="https://aebian.org/partners"><b>Partners</b></a></li>
			<li><a href="https://aebian.org/media"><b>Media</b></a></li>
		</ul>
	</div>
</div>
<div style="margin-bottom: 100px; background-color: #F0F0F0;"><br></div>
<div class="clampo"></div>

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
