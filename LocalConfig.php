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
    $wgWBRepoSettings['siteLinkGroups'] = [ 'datawiki' ];
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
    // Wikibase
    $wgWBClientSettings['siteGlobalID'] = 'en';

} elseif ( $wikiId == 'eswiki' ) {  
    $wgSecretKey = $wgSecretKeyeswiki;
    $wgUpgradeKey = $wgUpgradeKeyeswiki;
} elseif ( $wikiId == 'dewiki' ) {  
    $wgSecretKey = $wgSecretKeydewiki;
    $wgUpgradeKey = $wgUpgradeKeydewiki;
} elseif ( $wikiId == 'idwiki' ) {  
    $wgSecretKey = $wgSecretKeyidwiki;
    $wgUpgradeKey = $wgUpgradeKeyidwiki;
    // Wikibase
    $wgWBClientSettings['siteGlobalID'] = 'id';

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
    $wgWBClientSettings['siteGlobalID'] = 'meta';
}
