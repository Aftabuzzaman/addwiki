<?php
/**
 * This file makes a simple edit
 *
 * @author Addshore
 *
 **/

use Addframe\Globals;
use Addframe\Mediawiki\Family;
use Addframe\Mediawiki\UserLogin;

require_once( dirname( __FILE__ ) . '/../../Init.php' );

$wm = new Family(
	new UserLogin( Globals::$config['wikiuser']['username'],
		Globals::$config['wikiuser']['password'] ), Globals::$config['wikiuser']['home'] );

$enwiki = $wm->getSite( 'en.wikipedia.org' );
$sandbox = $enwiki->newPageFromTitle( 'Wikipedia:Sandbox' );
$sandbox->wikiText->appendText( "\nThis is a simple edit to this page!" );
$sandbox->save( 'This is a simply summary');

