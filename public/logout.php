<?php
	include_once("/www/vagrant/shared/core/vagrant/sp2.local/simplesamlphp/lib/_autoload.php");
	$as = new SimpleSAML_Auth_Simple('default-sp');
	$as->logout("http://saml-idp.local/idp/module.php/themeKentSSO/loggedout.php");
