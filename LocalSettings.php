<?php
# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}
include('/var/www/privateinfo.php');
$wgShowSQLErrors = true;
$wgDebugDumpSql  = true;
$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;
# Choose the right wiki to show
if ( defined( 'MW_DB' ) ) {
    $wikiId = MW_DB;
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'meta.maamedia.org') {
    $wikiId = 'metawiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'steward.maamedia.org') {
    $wikiId = 'stewardwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'fi.masymanwiki.org') {
    $wikiId = 'fiwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'data.maamedia.org') {
    $wikiId = 'datawiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'login.maamedia.org') {
    $wikiId = 'loginwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'test.maamedia.org') {
    $wikiId = 'testwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'code.maamedia.org') {
    $wikiId = 'codewiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'commons.maamedia.org') {
    $wikiId = 'commonswiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'en.masymanwiki.org') {
    $wikiId = 'enwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'es.masymanwiki.org') {
    $wikiId = 'eswiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'de.masymanwiki.org') {
    $wikiId = 'dewiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'fi.masymanwiki.org') {
    $wikiId = 'fiwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'id.masymanwiki.org') {
    $wikiId = 'idwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'sv.masymanwiki.org') {
    $wikiId = 'svwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'no.masymanwiki.org') {
    $wikiId = 'nowiki';
} else {
    echo 'Unable to determine $wikiId'."\n";
    exit(1);
}

$wgSitename = $wikiId;
$wgScriptPath = "";
$wgArticlePath = "/wiki/$1";

## The protocol and server name to use in fully-qualified URLs
/*
$wgServer = "https://" . str_replace("wiki", "", $wikiId) . ".maamedia.org";
*/
$wgServer = [
    // if you want to allow also usage of https, just use '//localhost'
    // and set 'http://localhost' at 'wgCanonicalServer'
    'default' => 'https://localhost',
    'metawiki' => 'https://meta.maamedia.org',
    'loginwiki' => 'https://login.maamedia.org',
    'stewardwiki' => 'https://steward.maamedia.org',
    'testwiki' => 'https://test.maamedia.org',
    'codewiki' => 'https://code.maamedia.org',
    'commonswiki' => 'https://commons.maamedia.org',
    'datawiki' => 'https://data.maamedia.org',
    'enwiki' => 'https://en.masymanwiki.org',
    'eswiki' => 'https://es.masymanwiki.org',
    'dewiki' => 'https://de.masymanwiki.org',
    'idwiki' => 'https://id.masymanwiki.org',
    'fiwiki' => 'https://fi.masymanwiki.org',
    'svwiki' => 'https://sv.masymanwiki.org',
    'nowiki' => 'https://no.masymanwiki.org',
];

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = "";
$wgIncludeLegacyJavaScript = true;
$wgResourceLoaderMaxQueryLength = 5000;
## The URL path to the logo.  Make sure you change this from the default,

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "localhost";
$wgDBname = $wikiId;
$wgDBuser = $DBuser;
$wgDBpassword = $DBpassword;

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

$wgObjectCaches["redis"] = [
		'class'	   => 'RedisBagOStuff',
		'servers'	 => [ "/var/run/redis/redis.sock" ],
		// 'password'	=> $wmgRedisPassword,
		'loggroup'	=> 'redis',
		'reportDupes' => false
];


# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

# Read wiki lists
$wgLocalDatabases = array(
    'metawiki',
    'loginwiki',
    'stewardwiki',
    'testwiki',
    'codewiki',
    'commonswiki',
    'datawiki',
    'enwiki',
    'eswiki',
    'dewiki',
    'idwiki',
    'fiwiki',
    'svwiki',
    'nowiki',
);

include('LocalConfig.php');
$wgCentralAuthDatabase = 'centralauth';

$conf = new SiteConfiguration;
$wgConf->wikis = $wgLocalDatabases;
$wgConf->suffixes = [ 'wiki' ];
$wgConf->localVHosts = [ 'localhost', $wgHostCentral ];
$wmgHostname = isset( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : 'undefined';
include('GlobalSkins.php');
include('GlobalExtensions.php');
// include('GlobalConfig.php');
include('InitialiseSettings.php');
function efGetSiteParams( $conf, $wiki ) {
    $site = null;
    $lang = null;
    foreach( $conf->suffixes as $suffix ) {
        if ( substr( $wiki, -strlen( $suffix ) ) == $suffix ) {
            $site = $suffix;
            $lang = substr( $wiki, 0, -strlen( $suffix ) );
            break;
        }
    }
    return array(
        'suffix' => $site,
        'lang' => $lang,
        'params' => array(
            'lang' => $lang,
            'site' => $site,
            'wiki' => $wiki,
        ),
        'tags' => array(),
    );
}
$wgConf->suffixes = $wgLocalDatabases;
$wgConf->siteParamsCallback = 'efGetSiteParams';
$wgConf->extractAllGlobals( $wgDBname );
## Error reporting
error_reporting( -1 );
ini_set( 'display_errors', 1 );
$wgShowSQLErrors = true;
$wgDebugDumpSql  = true;
$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;

## Group rights
$wgGroupPermissions['steward']['userrights'] = true;
$wgGroupPermissions['steward']['userrights-interwiki'] = true;
$wgGroupPermissions['steward']['interwiki'] = true;
# $wgGroupPermissions['steward']['centralauth-lock'] = true;
