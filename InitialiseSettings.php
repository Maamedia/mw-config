<?php
include('GlobalExtensions.php');
include('GlobalSkins.php');
// require_once 'ex.php';

$conf = new SiteConfiguration;
$wgConf->wikis = $wgLocalDatabases;
$wgConf->suffixes = [ 'wiki' ];
$wgConf->localVHosts = [ 'localhost' ];
$wgConf->settings = [
'wgServer' => [
    // if you want to allow also usage of https, just use '//localhost'
    // and set 'http://localhost' at 'wgCanonicalServer'
    'default' => 'https://localhost',
    'maantiet_test' => 'https://test.maantietaja.org',
    'maantiet_beta' => 'https://beta.maantietaja.org',
    'maantiet_community' => 'https://community.maantietaja.org',
],

'wgCanonicalServer' => [
    'default' => 'https://localhost',
    'maantiet_test' => 'https://test.maantietaja.org',
    'maantiet_beta' => 'https://beta.maantietaja.org',
    'maantiet_community' => 'https://community.maantietaja.org',
],

'wgScriptPath' => [
    'default' => '',
],

'wgArticlePath' => [
    'default' => '/wiki/$1',
],

'wgDefaultSkin' => [
    'default' => 'vector',
],

'wgSitename' => [
    'default' => '',
    'maantiet_test' => 'Test Wiki - Deployment',
    'maantiet_beta' => 'Beta Wiki - Deployment',
    'maantiet_community' => 'Community Wiki - Deployment',
],

'wgLanguageCode' => [
    'default' => 'en',
],

'wgLocalInterwiki' => [
    'default' => '$lang',
],

// DB Conf //

'wgDBserver' => [
    'default' => 'localhost',
],

'wgDBuser' => [
    'default' => 'maantiet_mw',
],

'wgAuthenticationTokenVersion' => [
    'default' => '1',
],

'wgDBprefix' => [
    'default' => '',
],

'wgDBTableOptions' => [
    'default' => 'ENGINE=InnoDB, DEFAULT CHARSET=binary',
],

'wgDBmysql5' => [
    'default' => false,
],

'wgDBtype' => [
    'default' => 'mysql',
],

'wgMainCacheType' => [
    'default' => CACHE_MEMCACHED,
],

'wgParserCacheType' => [
    'default' => CACHE_MEMCACHED,
],

'wgMessageCacheType' => [
    'default' => CACHE_MEMCACHED,
],

'wgSessionsInObjectCache ' => [
    'default' => true,
],

'wgSessionCacheType' => [
    'default' => CACHE_MEMCACHED,
],

'wgMemCachedServers' => [
    'default' => [ '127.0.0.1:23946' ],
],

'wgResourceBasePath' => [
    'default' => $wgScriptPath,
],

'wgSharedDB' => [
    'default' => 'maantiet_centralauth',
],

'wgSharedTables' => [
    'default' => [  'maantiet_test' , 'cn_notices',
                                    'abuse_filter',
                                    'abuse_filter_action',
                                    'abuse_filter_history',
                                    'abuse_filter_log',
                                    'cn_notices',
                                    'cn_notice_countries',
                                    'cn_assignments',
                                    'cn_notice_languages',
                                    'nl_notice_id_language',
                                    'cn_notice_regions',
                                    'cn_template_mixins',
                                    'cn_notice_mixins',
                                    'cn_notice_projects',
                                    'cn_template_log',
                                    'cn_notice_log',
                                    'cn_notice_mobile_carriers',
                                    'cn_known_mobile_carriers',
                                    'cn_template_devices',
                                    'cn_known_devices',
                                    'cn_templates',  
                                    'echo_event',  
                                    'echo_notification',  
                                    'echo_target_page',  
                                    'echo_unread_wikis',  
                                    'flaggedpages',  
                                    'flaggedpage_config',   
                                    'flaggedrevs',  
                                    'flaggedrevs_statistics',  
                                    'flaggedrevs_tracking', 
                                    'globalblocking', 
                                    'globalblocks',
                                    'global_block_whitelist',
                                    'globalnames',
                                    'globaluser',
                                    'global_preferences', 
                                    'global_group_permissions',  
                                    'global_group_restrictions',  
                                    'localnames',  
                                    'localuser',  
                                    'oauth2_access_tokens',
                                    'oauth_accepted_consumer',
                                    'renameuser_queue',
                                    'renameuser_status',
                                    'translate_groupreviews',
                                    'translate_groupstats',
                                    'translate_messageindex',
                                    'translate_metadata',
                                    'translate_reviews',
                                    'translate_sections',
                                    'translate_stash',
                                    'translate_tmf',
                                    'translate_tmf',
                                    'translate_tms',
                                    'translate_tmt',
                                    'wikiset',
                ],
],

/*
'wgSharedTables' => [
    'default' => [  'maantiet_test' ,  'globalblocks'  ],
],

*/

// GlobalUserPage //
'wgGlobalUserPageDBname' => [
    'default' => 'maantiet_test'
],

'wgGlobalUserPageAPIUrl' => [
    'default' => 'https://test.maantietaja.org/api.php'
],

// GlobalCssJs //
'wgUseGlobalSiteCssJs' => [
    'default' => true,
],

'wgAllowUserCss' => [
   'default' => true, 
],

'wgAllowUserJs' => [
   'default' => true, 
],

'wgGlobalCssJsConfig' => [
   'wiki' => 'maantiet_test', 
   'source' => 'maantiet_test'
],

// Echo //

'wgEchoCrossWikiNotifications' => [
    'default' => true,
],

'wgEchoSharedTrackingDB' => [
    'default' => 'maantiet_test'
],

'wgEchoUseCrossWikiBetaFeature' => [
    'default' => true,
],
// CentralAuth //

'wgCentralAuthDatabase' => [
    'default' => 'maantiet_centralauth',
],

'wgCentralAuthAutoNew' => [
    'default' => true,
],

'wgCentralAuthAutoMigrate' => [
    'default' => true,
],

'wgCentralAuthAutoMigrateNonGlobalAccounts' => [
    'default' => true,
],

'wgCentralAuthCookies' => [
    'default' => true,
],

'wgCentralAuthCookieDomain' => [
    'default' => '.maantietaja.org',
],

'wgCentralAuthCreateOnView' => [
    'default' =>  true,
],

'wgCentralAuthEnableGlobalRenameRequest' => [
    'default' =>  true,
],

'wgCentralAuthEnableUserMerge' => [
    'default' =>  true,
],

'wgCentralAuthLoginWiki' => [
    'default' =>  'maantiet_test',
],

'wgCentralAuthPreventUnattached' => [
    'default' =>  true,
],

'wgCentralAuthLoginIcon' => [
    'default' => true,
],

'wgCentralAuthSilentLogin' => [
    'default' =>  true,
],

// Global Blocking //

'wgGlobalBlockingDatabase' => [
    'default' =>  'maantiet_centralauth',
],

'wgGlobalBlockingBlockXFF' => [
    'default' =>  true,
],

'wgApplyGlobalBlocks' => [
    'default' => true,
    'maantiet_test' => false,
],

// Massmessage //

'wgMassMessageAccountUsername' => [
    'default' =>  'MessengerBot',
],

'wgAllowGlobalMessaging' => [
    'default' =>  true,
],

// CentralNotice //
'wgNoticeInfrastructure' => [
    'default' => false,
    'maantiet_test' => true,
],

// Logo //

'wgLogo' => [
    'default' => '$wgResourceBasePath/resources/assets/wiki.png',
],

// Copyright //
'wgRightsPage' => [
    'default' => '',
],

'wgRightsUrl' => [
    'default' => 'https://creativecommons.org/licenses/by-sa/4.0/',
],

'wgRightsText' => [
    'default' => 'Creative Commons Atribusi Berbagi Serupa',
],

'wgRightsIcon' => [
    'default' => '$wgResourceBasePath/resources/assets/licenses/cc-by-sa.png',
],

'wgDiff3' => [
    'default' => '/usr/bin/diff3',
],

'wgDefaultSkin' => [
    'default' => 'vector',
],

'wgEnableUploads' => [
    'default' => true,
],

'wgUploadDirectory' => [
    'default' => '$IP/images',
],

'wgUseImageMagick' => [
    'default' => true,
],

'wgImageMagickConvertCommand' => [
    'default' => '/usr/bin/convert',
],

'wgUseInstantCommons' => [
    'default' => true,
],

'wgPingback' => [
    'default' => true,
],

'wgShellLocale' => [
    'default' => 'en_US.utf8',
],

// Translate //

'wgTranslationNotificationsContactMethods' => [
    'default' => '',
    'email' => true,
	'talkpage' => true,
	'talkpage-elsewhere' => false,
],

'+wgGroupPermissions' => [
    'default' => [
                      '*' => [
                                        'read' => true,
                                        'edit' => true,
                                         ],
                      'bureaucrat' => [
                                        'userrights' => true,
                                        'renameuser' => false,
                      ],
    ],
],

];
