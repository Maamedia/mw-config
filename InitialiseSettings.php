<?php
// MediaWiki Configuration Set Up by Maantietaja and Symanpuma //

// Include Global Extensions //
include('GlobalExtensions.php');
include('GlobalSkins.php');
include('GlobalUserPreferences.php');
// require_once 'ex.php';

// Site Configuration  //

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
    'maantiet_mainwiki' => 'https://wiki.maantietaja.org',
],

'wgCanonicalServer' => [
    'default' => 'https://localhost',
    'maantiet_test' => 'https://test.maantietaja.org',
    'maantiet_beta' => 'https://beta.maantietaja.org',
    'maantiet_community' => 'https://community.maantietaja.org',
    'maantiet_mainwiki' => 'https://wiki.maantietaja.org',
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
    'maantiet_mainwiki' => 'Main Wiki - Deployment',
],

'wgLanguageCode' => [
    'default' => 'en',
],

'wgLocalInterwiki' => [
    'default' => '$lang',
],

// Debugging //
'wgShowExceptionDetails' => [
    'default' => true,
],

'wgShowDBErrorBacktrace' => [
    'default' => true,
],

'wgShowDebug' => [
    'default' => false,
],

// Database Configuration //

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
    'default' => [ '127.0.0.1:23946', 
	[ '127.0.0.1:21169', 2 ]
],
],

# Shared memory settings

'wgCacheDirectory' => [
    'default' => '$IP/cache',
],

'wgUseLocalMessageCache' => [
    'default' => true,
],

'wgParserCacheType' => [
    'default' => CACHE_MEMCACHED,
],

'wgUseGzip' => [
    'default' => true,
],

'wgJobRunRate ' => [
    'default' => 0.01,
],

'wgDisableCounters ' => [
    'default' => true,
],

'wgMiserMode ' => [
    'default' => true,
],

'wgEnableSidebarCache ' => [
    'default' => false,
],

'wgResourceLoaderMaxage' => [
	'default' => [
	'versioned' => 12 * 60 * 60,
	'unversioned' => 5 * 60,
	],
],
	
# config cache
'wgResourceBasePath' => [
    'default' => $wgScriptPath,
],

'wgSharedDB' => [
    'default' => 'maantiet_centralauth',
],

'wgSharedTables' => [
    'default' => [  'maantiet_mw' , 'abuse_filter',
                                    'abuse_filter_action',
                                    'abuse_filter_history',
                                    'abuse_filter_log',
                                    'cu_changes',
                                    'cu_log',
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
                                    'globalblocking', 
                                    'globalblocks',
                                    'global_block_whitelist',
                                    'globalnames',
                                    'globaluser',
                                    'global_preferences', 
                                    'global_group_permissions',  
                                    'global_group_restrictions',
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

// Extensions Config starterd //

// AbuseFilter //
'wgAbuseFilterActions' => [
    'default' => [
    	'block' => true,
    	'blockautopromote' => true,
    	'degroup' => true,
    	'disallow' => true,
    	'rangeblock' => false,
    	'tag' => true,
    	'throttle' => true,
    	'warn' => true,
],
],

'wgAbuseFilterCentralDB' => [
	'default' => 'maantiet_test',
],
'wgAbuseFilterIsCentral' => [
	'default' => false,
	'maantiet_test' => true,
],
'wgAbuseFilterBlockDuration' => [
	'default' => 'indefinte',
],
'wgAbuseFilterAnonBlockDuration' => [
	'default' => 2592000,
],
'wgAbuseFilterRestrictions' => [
	'default' => [
	'blockautopromote' => true,
	'block' => true,
	'degroup' => true,
	'rangeblock' => true,
	],
],
'wgAbuseFilterNotifications' => [
	'default' => 'udp',
],
'wgAbuseFilterLogPrivateDetailsAccess' => [
	'default' => true,
],
'wgAbuseFilterPrivateDetailsForceReason' => [
	'default' => true,
],

// Delete
'wgDeleteRevisionsLimit' => [
	'default' => '1000', // databases don't have much memory - let's not overload them in future - set to 1k T5287
],


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

/////////////////// Mediawiki Gap FOR error ///////////////////

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
// CentralNotice //
'wgNoticeInfrastructure' => [
    'default' => false,
    'maantiet_test' => true,
],

// VisualEditor //
'wgVisualEditorEnableDiffPage' => [
    'default' => true,
],

'wgVisualEditorEnableWikitext' => [
    'default' => true,
],
// Logo //

'wgLogo' => [
    'default' => '/resources/assets/wiki.png',
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
    'default' => '/resources/assets/cc.png',
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

// Others //
'wgEdititis' => [
    'default' => true,
],

// Translate //

'+wgGroupPermissions' => [
    'default' => [
                      '*' => [
                                        'read' => true,
                                        'edit' => true,
                                        'globalgroupmembership' => true,
                                        'userrights' => true,
                                        
                                         ],
                      'bureaucrat' => [
                                        'userrights' => true,
                                        'renameuser' => false,
                      ],
    ],
],

'wgSiteNotice' => [
    'default' => 'Hello All Visitor, We have a new Development [[:wiki:|wiki]], [[:community:|community]], [[:beta:|beta]], [[:test:|test]]',
],
];
