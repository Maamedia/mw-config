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
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'en';

} elseif ( $wikiId == 'eswiki' ) {  
    $wgSecretKey = $wgSecretKeyeswiki;
    $wgUpgradeKey = $wgUpgradeKeyeswiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'es';
} elseif ( $wikiId == 'dewiki' ) {  
    $wgSecretKey = $wgSecretKeydewiki;
    $wgUpgradeKey = $wgUpgradeKeydewiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'de';
} elseif ( $wikiId == 'idwiki' ) {  
    $wgSecretKey = $wgSecretKeyidwiki;
    $wgUpgradeKey = $wgUpgradeKeyidwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'id';
} elseif ( $wikiId == 'fiwiki' ) {  
    $wgSecretKey = $wgSecretKeyfiwiki;
    $wgUpgradeKey = $wgUpgradeKeyfiwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'fi';
} elseif ( $wikiId == 'svwiki' ) {  
    $wgSecretKey = $wgSecretKeysvwiki;
    $wgUpgradeKey = $wgUpgradeKeysvwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'fi';
} elseif ( $wikiId == 'nowiki' ) {  
    $wgSecretKey = $wgSecretKeynowiki;
    $wgUpgradeKey = $wgUpgradeKeynowiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'no';
} elseif ( $wikiId == 'stewardwiki' ) {  
    $wgSecretKey = $wgSecretKeystewardwiki;
    $wgUpgradeKey = $wgUpgradeKeystewardwiki;
} else { #metawiki  
    $wgSecretKey = $wgSecretKeymetawiki;
    $wgUpgradeKey = $wgUpgradeKeymetawiki;
    $wgWBClientSettings['siteGlobalID'] = 'meta';
}
