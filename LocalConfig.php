<?php
include('/var/www/privateinfo.php');
# Site language code, should be one of the list in ./languages/data/Names.php
if ( $wikiId == 'loginwiki' ) {
    $wgSecretKey = $wgSecretKeyloginwiki;
    $wgUpgradeKey = $wgUpgradeKeyloginwiki;
} elseif ( $wikiId == 'datawiki' ) {
    $wgSecretKey = $wgSecretKeydatawiki;
    $wgUpgradeKey = $wgUpgradeKeydatawiki;
    $wgEnableWikibaseRepo = true;
    $wgEnableWikibaseClient = false;
    require_once "$IP/extensions/Wikibase/repo/Wikibase.php";
    require_once "$IP/extensions/Wikibase/repo/ExampleSettings.php";
} elseif ( $wikiId == 'testwiki' ) {  
    $wgSecretKey = $wgSecretKeytestwiki;
    $wgUpgradeKey = $wgUpgradeKeytestwiki;
} elseif ( $wikiId == 'codewiki' ) {  
    $wgSecretKey = $wgSecretKeycodewiki;
    $wgUpgradeKey = $wgUpgradeKeycodewiki;
} elseif ( $wikiId == 'commonswiki' ) {  
    $wgSecretKey = $wgSecretKeycommonswiki;
    $wgUpgradeKey = $wgUpgradeKeycommonswiki;
} elseif ( $wikiId == 'enwiki' ) {  
    $wgSecretKey = $wgSecretKeyenwiki;
    $wgUpgradeKey = $wgUpgradeKeyenwiki;
} elseif ( $wikiId == 'eswiki' ) {  
    $wgSecretKey = $wgSecretKeyeswiki;
    $wgUpgradeKey = $wgUpgradeKeyeswiki;
} elseif ( $wikiId == 'dewiki' ) {  
    $wgSecretKey = $wgSecretKeydewiki;
    $wgUpgradeKey = $wgUpgradeKeydewiki;
} elseif ( $wikiId == 'idwiki' ) {  
    $wgSecretKey = $wgSecretKeyidwiki;
    $wgUpgradeKey = $wgUpgradeKeyidwiki;
} elseif ( $wikiId == 'fiwiki' ) {  
    $wgSecretKey = $wgSecretKeyfiwiki;
    $wgUpgradeKey = $wgUpgradeKeyfiwiki;
} elseif ( $wikiId == 'svwiki' ) {  
    $wgSecretKey = $wgSecretKeysvwiki;
    $wgUpgradeKey = $wgUpgradeKeysvwiki;
} elseif ( $wikiId == 'nowiki' ) {  
    $wgSecretKey = $wgSecretKeynowiki;
    $wgUpgradeKey = $wgUpgradeKeynowiki;
} elseif ( $wikiId == 'stewardwiki' ) {  
    $wgSecretKey = $wgSecretKeystewardwiki;
    $wgUpgradeKey = $wgUpgradeKeystewardwiki;
} else { #metawiki  
    $wgSecretKey = $wgSecretKeymetawiki;
    $wgUpgradeKey = $wgUpgradeKeymetawiki;

    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['repoUrl'] = 'https://data.maamedia.org';
    $wgWBClientSettings['repoScriptPath'] = '';
    $wgWBClientSettings['repoArticlePath'] = '/wiki/$1';
    $wgWBClientSettings['repositories']['']['repoDatabase'] = 'datawiki';
    $wgWBClientSettings['repositories']['']['changesDatabase'] = 'datawiki';
    $wgWBClientSettings['siteLinkGroups'] = [ 'Wikidata' ];
    $wgWBClientSettings['siteGlobalID'] = 'en';
}
