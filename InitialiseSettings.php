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
    'maantiet_loginwiki' => 'https://login.maantietaja.org',
    'maantiet_codewiki' => 'https://code.maantietaja.org',
    'maantiet_mw19416' => 'https://data.maantietaja.org', // mode testing for global SUL
    'maantiet_dts' => 'https://dts.maantietaja.org', // mode testing for global SUL
],

'wgCanonicalServer' => [
    'default' => 'https://localhost',
    'maantiet_test' => 'https://test.maantietaja.org',
    'maantiet_beta' => 'https://beta.maantietaja.org',
    'maantiet_community' => 'https://community.maantietaja.org',
    'maantiet_mainwiki' => 'https://wiki.maantietaja.org',
    'maantiet_loginwiki' => 'https://login.maantietaja.org',
    'maantiet_codewiki' => 'https://code.maantietaja.org',
    'maantiet_mw19416' => 'https://data.maantietaja.org', // mode testing for global SUL
    'maantiet_dts' => 'https://dts.maantietaja.org', // mode testing for global SUL
],

'wgScript' => [
    'default' => '../',
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
    'maantiet_loginwiki' => 'Login Maamedia', 
    'maantiet_codewiki' => 'Code Wiki - Deployment',
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
    'default' => [ '127.0.0.1:25583' ],
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
    'default' => '',
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
                                    'spoofuser',
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

'wgUseGlobalAbuseFilters' => [
	'default' => true,
	
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
'wgBetaFeaturesWhitelist' => [
	'default' => [
		'visualeditor-enable',			   // [Editing] On-going (special permission) – VisualEditor
		'beta-feature-flow-user-talk-page',  // [Growth*] On-going (special permission) – Flow opt-in
		'visualeditor-newwikitext',		  // [Editing] On-going (special permission) – New wikitext editor
		'uls-compact-links',				 // [LangEng] 2018-09-13 – Compact language links (Wikisource only)
		'popups',							// [WebTeam] 2019-10-04 – Page Previews
		'popupsreferencepreviews',		   // [WMDE TW] 2019-10-04 – Reference Previews
		'cx',								// [LangEng] 2019-11-07 - ContentTranslation
		'twocolconflict',					// [WMDE TW] 2019-10-30 – New edit conflict view
		'visualeditor-visualdiffpage',	   // [Editing] 2019-11-06 – Visual diffs
		'tmh-videojs',					   // [Readers] 2019-12-12 - New video player
		'discussiontools-betaenable',		// [Editing] 2020-09-12 – Reply tool
	],
],

// BetaFeatures //
'wgVisualEditorEnableWikitextBetaFeature' => [
    'default' => true,
],

'wgVisualEditorEnableWikitext' => [
    'default' => true,
],

'wgVisualEditorEnableBetaFeature' => [
    'default' => true,
],

'wgVisualEditorEnableDiffPageBetaFeature' => [
    'default' => true,
],

'wgFlowEnableOptInBetaFeature' => [
    'default' => true,
],

'wgContentTranslationAsBetaFeature' => [
    'default' => true,
],

'wgFileExporterBetaFeature' => [
    'default' => true,
],

'wgFileImporterInBeta' => [
    'default' => true,
],

'wgMediaViewerIsInBeta' => [
    'default' => true,
],
// VisualEditor //
'wgVisualEditorEnableDiffPage' => [
    'default' => true,
],
// Delete
'wgDeleteRevisionsLimit' => [
	'default' => '1000',
],

// CodeReview //
'wgSubversionUser' => [
    'default' => false,
],
'wgSubversionProxy' => [
    'default' => false,
],

// GlobalUsage //
'wgGlobalUsageDatabase' => [
    'default' => 'maantiet_test',
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
    'maantiet_test' => true,
    'maantiet_loginwiki' => false,
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
    'default' =>  'maantiet_loginwiki',
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

'wgEchoPerUserBlacklist' => [
    'default' => true,
],

'wgEchoMentionStatusNotifications' => [
    'default' => true,
],

'wgEchoEnableEmailBatch' => [
	'default' => true,
],
'wgEchoDefaultUserSubscriptions' => [
	'default' => [],
	'officewiki' => [
		'email' => [
			// edit-user-talk already defaults to true because enotifusertalkpages does
			'flow-discussion' => true,
			'mention' => true
		]
	],
],
// ContentTranslation //
'wgContentTranslationDatabase ' => [
    'default' => 'maantiet_test'
],

// CirrusSearch //
'wgCirrusSearchWikimediaExtraPlugin' => [
	'default' => [
		'regex' => [
			'build',
			'use',
		],
		'super_detect_noop' => true,
		'documentVersion' => true,
		'token_count_router' => true,
		'term_freq' => true
	]
],

'wgCirrusSearchWMFExtraFeatures' => [
	'default' => [
		'ores_articletopics' => [
			'build' => true,
			'use' => true,
		]
	]
],

'wgCirrusSearchDropDelayedJobsAfter' => [
	'default' => 60 * 60 * 2
],

'wgCirrusSearchUseExperimentalHighlighter' => [
	'default' => true
],

'wgCirrusSearchOptimizeIndexForExperimentalHighlighter' => [
	'default' => true
],

'wgCirrusSearchTextcatConfig' => [
	'default' => [
		'maxNgrams' => 9000,
		'maxReturnedLanguages' => 1,
		'resultsRatio' => 1.06,
		'minInputLength' => 3,
		'maxProportion' => 0.85,
		'langBoostScore' => 0.14,
		'numBoostedLangs' => 2,
	],
],

'wgCirrusSearchFiletypeAliases' => [
	'default' => [
		"pdf" => "office",
		"ppt" => "office",
		"doc" => "office",
		"jpg" => "bitmap",
		"image" => "bitmap",
		"webp" => "bitmap",
		"mp3" => "audio",
		"svg" => "drawing"
	]
],

'wgCirrusSearchNewCrossProjectPage' => [
	'default' => true
],

'wgCirrusSearchNumCrossProjectSearchResults' => [
	'default' => 1
],

'wgCirrusSearchFetchConfigFromApi' => [
	'default' => true
],

'wgCirrusSearchRescoreProfiles' => [
	'default' => []
],

'wgCirrusSearchMasterTimeout' => [
	'default' => '5m'
],

'wgCirrusSearchSearchShardTimeout' => [
	'default' => [
		"comp_suggest" => "5s",
		"prefix" => "5s",
		"default" => "10s",
		"regex" => "15s",
	],
],


'wgCirrusSearchClientSideSearchTimeout' => [
	'default' => [
		"comp_suggest" => 10,
		"prefix" => 10,
		// GET requests timeout at 60s, give some room to treat request timeout (T216860)
		"default" => 40,
		"regex" => 50,
	],
],


'wgCirrusSearchCrossClusterSearch' => [
	'default' => true
],

'wgCirrusSearchSanityCheck' => [
	'default' => true
],

'wgCirrusSearchClusterOverrides' => [
	'default' => [],
],

'wgCirrusSearchWriteClusters' => [
	'default' => [ 'eqiad', 'codfw', 'cloudelastic' ],
	'private' => [ 'eqiad', 'codfw' ],
],

'wgCirrusSearchReplicaGroup' => [
	'default' => [
		'type' => 'roundrobin',
		'groups' => [ 'psi', 'omega' ]
	],
	'cirrussearch-big-indices' => 'chi',
],

'wgCirrusSearchPreferRecentDefaultDecayPortion' => [
	'default' => 0,
	'maantiet_test' => 0.6,
],

'wgCirrusSearchWeights' => [
	'default' => [],
	'maantiet_codewiki' => [
		'title' => 25.0,
	],
	'maantiet_community' => [
		'title' => 25.0,
	],
],

'wgCirrusSearchConnectionAttempts' => [
	'default' => 3
],

'wgCirrusSearchMoreLikeThisTTL' => [
	'default' => 86400
],

'wgGlobalRenameBlacklistRegex' => [
	'default' => true
],

'wgGlobalRenameBlacklist' => [
	'default' => 'https://meta.wikimedia.org/w/index.php?title=Global_rename_blacklist&action=raw'
],

'wgCirrusSearchRefreshInterval' => [
	'default' => 30,
],

'wgCirrusSearchMaxPhraseTokens' => [
	'default' => 10,
],

'wgCirrusSearchUseIcuFolding' => [
	'default' => 'default',
],

'wgCirrusSearchAllFields' => [
	'default' => [ 'build' => true, 'use' => true ],
],

'wgCirrusSearchNearMatchWeight' => [
	'default' => 10, //T257922
],


// Translate //
'wgTranslateUseSandbox' => [
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

'wgFooterIcons' => [
    'poweredby' => [ 
        'mediawiki' => [
            'src' => '../resources/assets/poweredby_mediawiki_88x31.png',
            'srcset' => '../resources/assets/poweredby_mediawiki_88x31.png',
            'height' => '31',
            'width' => '88',
        ],
    ],
],

'wgGenerateThumbnailOnParse' => [
    'default' => true,
],

// UPO means: this is also a user preference option
'wgEnableEmail' => [
    'default' => true,
],

'wgEnableUserEmail' => [
    'default' => true,
],

'wgEmergencyContact' => [
    'default' => 'stewards@maantietaja.org',
],

'wgPasswordSender' => [
    'default' => 'wiki@maantietaja.org',
],

'wgEnotifUserTalk' => [
    'default' => true,
],

'wgEnotifWatchlist' => [
    'default' => false,
],

'wgEmailAuthentication' => [
    'default' => true,
],

'wgThumbnailScriptPath' => [
    'default' => 'thumb.php',
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

'wgWatchlistExpiry' => [
	'default' => true,
],


'wgUseCodeReview' => [
	'default' => false,
	'maantiet_test' => true,
],

'wgCodeReviewMaxDiffPaths' => [
    'default' => 100,
],

'wgMinervaAlwaysShowLanguageButton' => [
    'default' => true,
],

'wgVisualEditorEnableVisualSectionEditing' => [
    'default' => true,
],

// Translate //

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
    'maantiet_loginwiki' => [
                      '*' => [
                                        'autocreateaccount' => true,
                                         ],
    ],
],


'wgSiteNotice' => [
    'default' => 'Hello All Visitor, We have a new Development [[:wiki:|wiki]], [[:community:|community]], [[:beta:|beta]], [[:test:|test]]',
],
];
