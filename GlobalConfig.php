<?php
include('/var/www/privateinfo.php');
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['repoUrl'] = 'https://data.maamedia.org';
    $wgWBClientSettings['repoScriptPath'] = '';
    $wgWBClientSettings['repoArticlePath'] = '/wiki/$1';
    $wgWBClientSettings['repositories']['']['repoDatabase'] = 'datawiki';
    $wgWBClientSettings['repositories']['']['changesDatabase'] = 'datawiki';
    $wgWBClientSettings['siteLinkGroups'] = [ 'datawiki' ];
    $wgWBClientSettings['TOOLBAR'] = [ 'Wiki' ];
$wgLocalDatabases = $wgWBRepoSettings['localClientDatabases'] = [
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
];
$wgExtraInterlanguageLinkPrefixes = [
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
];

