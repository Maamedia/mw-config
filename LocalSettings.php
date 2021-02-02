<?php 
$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;
include('Privateinformation.php');

switch($_SERVER['SERVER_NAME'])
{
case
'test.maantietaja.org':
require_once 'wikitest.php';
break;
case
'beta.maantietaja.org':
require_once 'wikibeta.php';
break;
default:
header(
'HTTP/1.1 404 Not Found'
);
echo
'This wiki is not available. Check configuration.';
exit(
0
);
}

$wgCentralAuthDatabase = 'maantiet_centralauth';
$wgDBuser = $DBuser;

$wgLocalDatabases = array(
    'maantiet_test',
    'maantiet_beta',
);
require_once 'InitialiseSettings.php';

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
