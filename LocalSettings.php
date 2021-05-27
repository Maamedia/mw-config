<?php
# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}
include('/var/www/html/privateinfo.php');
$wgShowSQLErrors = true;
$wgDebugDumpSql  = true;
$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;
# Choose the right wiki to show
if ( defined( 'MW_DB' ) ) {
    $wikiId = MW_DB;
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'commons.maamedia.org') {
    $wikiId = 'commonswiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'data.maamedia.org') {
    $wikiId = 'datawiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'meta.maamedia.org') {
    $wikiId = 'metawiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'en.masymanwiki.org') {
    $wikiId = 'enwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'fi.masymanwiki.org') {
    $wikiId = 'fiwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'id.masymanwiki.org') {
    $wikiId = 'idwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'zh.masymanwiki.org') {
    $wikiId = 'zhwiki';
} elseif (isset($_SERVER['SERVER_NAME']) && $_SERVER['SERVER_NAME'] == 'office.maamedia.org') {
    $wikiId = 'officewiki';
} else {
    echo 'Unable to determine $wikiId'."\n";
    exit(1);
}

$wgSitename = $wikiId;
$wgScriptPath = "";
$wgArticlePath = "/wiki/$1";

## The protocol and server name to use in fully-qualified URLs
$wgServer = [
    // if you want to allow also usage of https, just use '//localhost'
    // and set 'http://localhost' at 'wgCanonicalServer'
    'default' => 'https://localhost',
    'commonswiki' => 'https://commons.maamedia.org',
    'datawiki' => 'https://data.maamedia.org',
    'metawiki' => 'https://meta.maamedia.org',
    'enwiki' => 'https://en.masymanwiki.org',
    'fiwiki' => 'https://fi.masymanwiki.org',
    'idwiki' => 'https://id.masymanwiki.org',
    'zhwiki' => 'https://zh.masymanwiki.org',
    'officewiki' => 'https://office.maamedia.org',
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

# Experimental charset support for MySQL 5.0.
$wgDBmysql5 = false;

# Read wiki lists
$wgLocalDatabases = array(
    'commonswiki',
    'datawiki',
    'metawiki',
    'enwiki',
    'fiwiki',
    'idwiki',
    'zhwiki',
    'officewiki',
);

// require_once( '/srv/mediawiki/config/LocalExtensions.php' );
include('LocalConfig.php');
$wgCentralAuthDatabase = 'centralauth';

$conf = new SiteConfiguration;
$wgConf->wikis = $wgLocalDatabases;
$wgConf->suffixes = [ 'wiki' ];
$wgConf->localVHosts = [ 'localhost', $wgHostCentral ];
$wgLocalVirtualHosts = array( $wgHostCentral );
$wmgHostname = isset( $_SERVER['HTTP_HOST'] ) ? $_SERVER['HTTP_HOST'] : 'undefined';
include('cachesystem.php');
include('GlobalSkins.php');
include('GlobalConfig.php');
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
