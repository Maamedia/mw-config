<?php
include('/var/www/privateinfo.php');
# Site language code, should be one of the list in ./languages/data/Names.php
if ( $wikiId == 'datawiki' ) {
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
    'zhwiki',
    'officewiki',
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
    'zhwiki',
    'officewiki',
    ];
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
    'zhwiki',
    'officewiki',
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
    'zhwiki',
    'officewiki',
    ];
    include('/var/www/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'testwiki' ) {  
    $wgSecretKey = $wgSecretKeytestwiki;
    $wgUpgradeKey = $wgUpgradeKeytestwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'testwiki';
    include('/var/www/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'enwiki' ) {  
    $wgSecretKey = $wgSecretKeyenwiki;
    $wgUpgradeKey = $wgUpgradeKeyenwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'enwiki';
    include('/var/www/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'idwiki' ) {  
    $wgSecretKey = $wgSecretKeyidwiki;
    $wgUpgradeKey = $wgUpgradeKeyidwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'idwiki';
    include('/var/www/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'fiwiki' ) {  
    $wgSecretKey = $wgSecretKeyfiwiki;
    $wgUpgradeKey = $wgUpgradeKeyfiwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'fiwiki';
    include('/var/www/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'zhwiki' ) {  
    $wgSecretKey = $wgSecretKeyzhwiki;
    $wgUpgradeKey = $wgUpgradeKeyzhwiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'zhwiki';
    include('/var/www/mediawiki/GlobalConfig.php');
} elseif ( $wikiId == 'officewiki' ) {  
    $wgSecretKey = $wgSecretKeyofficewiki;
    $wgUpgradeKey = $wgUpgradeKeyofficewiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'officewiki';
    include('/var/www/mediawiki/GlobalConfig.php');
} else { #metawiki  
    $wgSecretKey = $wgSecretKeymetawiki;
    $wgUpgradeKey = $wgUpgradeKeymetawiki;
    // Wikibase
    $wgEnableWikibaseRepo = false;
    $wgEnableWikibaseClient = true;
    require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
    require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";
    $wgWBClientSettings['siteGlobalID'] = 'metawiki';
    include('/var/www/mediawiki/GlobalConfig.php');
}
