<?php
include('/var/www/privateinfo.php');
# Site language code, should be one of the list in ./languages/data/Names.php
if ( $wikiId == 'loginwiki' ) {
    $wgSecretKey = $wgSecretKeyloginwiki;
    $wgUpgradeKey = $wgUpgradeKeyloginwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'loginwiki';
} elseif ( $wikiId == 'datawiki' ) {
    $wgSecretKey = $wgSecretKeydatawiki;
    $wgUpgradeKey = $wgUpgradeKeydatawiki;
    wfLoadExtension( 'WikibaseCirrusSearch' );
    wfLoadExtension( 'WikibaseLexeme' );
    wfLoadExtension( 'WikibaseQualityConstraints' );
    $wgEnableWikibaseRepo = true;
    $wgEnableWikibaseClient = false;
    require_once "$IP/extensions/Wikibase/repo/Wikibase.php";
    require_once "$IP/extensions/Wikibase/repo/ExampleSettings.php";
    $wgWBRepoSettings['siteLinkGroups'] = [ 'Datawiki' ];
    $wgWBClientSettings['siteGlobalID'] = 'datawiki';
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
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'testwiki';
} elseif ( $wikiId == 'codewiki' ) {  
    $wgSecretKey = $wgSecretKeycodewiki;
    $wgUpgradeKey = $wgUpgradeKeycodewiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'codewiki';
} elseif ( $wikiId == 'commonswiki' ) {  
    $wgSecretKey = $wgSecretKeycommonswiki;
    $wgUpgradeKey = $wgUpgradeKeycommonswiki;
    $wgWBClientSettings['siteGlobalID'] = 'commonswiki';
    wfLoadExtension( 'WikibaseMediaInfo' );
    wfLoadExtension( 'WikibaseCirrusSearch' );
    wfLoadExtension( 'WikibaseLexeme' );
    wfLoadExtension( 'WikibaseQualityConstraints' );
    $wgEnableWikibaseRepo = true;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    require_once "$IP/extensions/Wikibase/repo/Wikibase.php";
    require_once "$IP/extensions/Wikibase/repo/ExampleSettings.php";
    $wgWBRepoSettings['siteLinkGroups'] = [ 'Datawiki' ];
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
} elseif ( $wikiId == 'enwiki' ) {  
    $wgSecretKey = $wgSecretKeyenwiki;
    $wgUpgradeKey = $wgUpgradeKeyenwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'enwiki';

} elseif ( $wikiId == 'eswiki' ) {  
    $wgSecretKey = $wgSecretKeyeswiki;
    $wgUpgradeKey = $wgUpgradeKeyeswiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'eswiki';
} elseif ( $wikiId == 'dewiki' ) {  
    $wgSecretKey = $wgSecretKeydewiki;
    $wgUpgradeKey = $wgUpgradeKeydewiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'dewiki';
} elseif ( $wikiId == 'idwiki' ) {  
    $wgSecretKey = $wgSecretKeyidwiki;
    $wgUpgradeKey = $wgUpgradeKeyidwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'idwiki';
} elseif ( $wikiId == 'fiwiki' ) {  
    $wgSecretKey = $wgSecretKeyfiwiki;
    $wgUpgradeKey = $wgUpgradeKeyfiwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'fiwiki';
} elseif ( $wikiId == 'svwiki' ) {  
    $wgSecretKey = $wgSecretKeysvwiki;
    $wgUpgradeKey = $wgUpgradeKeysvwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'svwiki';
} elseif ( $wikiId == 'nowiki' ) {  
    $wgSecretKey = $wgSecretKeynowiki;
    $wgUpgradeKey = $wgUpgradeKeynowiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'nowiki';
} elseif ( $wikiId == 'stewardwiki' ) {  
    $wgSecretKey = $wgSecretKeystewardwiki;
    $wgUpgradeKey = $wgUpgradeKeystewardwiki;
} else { #metawiki  
    $wgSecretKey = $wgSecretKeymetawiki;
    $wgUpgradeKey = $wgUpgradeKeymetawiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'metawiki';
}
