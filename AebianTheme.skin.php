<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
	 * @param $out OutputPage object
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( 'skins.AebianTheme' );
	}

}
