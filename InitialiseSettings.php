<?php
// MW-Setting //
include('cachesystem.php');
require_once( '/var/www/mediawiki/GlobalExtensions.php' );
$wgConf->settings = [
	'wgServer' => [
		// if you want to allow also usage of https, just use '//localhost'
		// and set 'http://localhost' at 'wgCanonicalServer'
		'default' => 'https://localhost',
		'commonswiki' => 'https://commons.maamedia.org',
		'datawiki' => 'https://data.maamedia.org',
		'metawiki' => 'https://meta.maamedia.org',
		'testwiki' => 'https://test.maamedia.org',
		'enwiki' => 'https://en.masymanwiki.org',
		'fiwiki' => 'https://fi.masymanwiki.org',
		'idwiki' => 'https://id.masymanwiki.org',
		],
	'wgCanonicalServer' => [
		'default' => 'https://localhost',
		'commonswiki' => 'https://commons.maamedia.org',
		'datawiki' => 'https://data.maamedia.org',
		'metawiki' => 'https://meta.maamedia.org',
		'testwiki' => 'https://test.maamedia.org',
		'enwiki' => 'https://en.masymanwiki.org',
		'fiwiki' => 'https://fi.masymanwiki.org',
		'idwiki' => 'https://id.masymanwiki.org',
	],
	'wgSitename' => [
		'default' => '',
		'commonswiki' => 'Commons Wiki',
		'datawiki' => 'DataWiki',
		'metawiki' => 'Meta',
		'testwiki' => 'Test Wiki',
		'enwiki' => 'Masymanwiki',
		'fiwiki' => 'Masymanwiki',
		'idwiki' => 'Masymanwiki',
	],
	'wgLanguageCode' => [
		'default' => 'en',
		'fiwiki' => 'fi',
		'idwiki' => 'id',
	],
	'wgLocalInterwiki' => [
		'default' => '$lang',
	], 
	'wgInterwikiMagic' => [
		'default' => true,
		'metawiki' => false,
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
		'default' => '127.0.0.1',
	],
	'wgDBuser' => [
		'default' => 'wikiuser',
	],
	'wgAuthenticationTokenVersion' => [
		'default' => '1',
	],
	'wgDBprefix' => [
		'default' => '',
	],
	'wgAllowSchemaUpdates' => [
		'default' => false,
	],
	'wgCompressRevisions' => [
		'default' => false,
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
	'wgMemCachedServers' => [
		'default' => [ $wgMemCachedServersIP ],
	],
	
	# Shared memory settings
	'wgCacheDirectory' => [
		'default' => 'cache',
	],
	'wgFileCacheDirectory' => [
		'default' => 'cache',
	],
	'wgShowIPinHeader' => [
		'default' => false,
	],
	'wgEnableParserCache' => [
		'default' => true,
	],
	'wgCachePages' => [
		'default' => true,
	],
	'wgUseLocalMessageCache' => [
		'default' => true,
	],
	'wgUseFileCache' => [
		'default' => true,
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
	'wgHitcounterUpdateFreq' => [
		'default' => 500,
	],
	'wgEnableSidebarCache ' => [
		'default' => true,
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
		'default' => 'centralauth',
	],
	'wgSharedTables' => [
		'default' => [ 'wikiuser',  'abuse_filter',
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
			      'interwiki',
			      'renameuser_queue',
			      'renameuser_status',
			      'spoofuser',
			      'wikiset',
			     ],
	],
	// extensions
	'wmgUseTranslate' => [ 
		'default' => false,
		'metawiki' => true,
	],
	'wmgUseTranslationNotifications' => [ 
		'default' => false,
		'metawiki' => true,
	],
	// Namespaces
	'wgExtraNamespaces' => [
		'metawiki' => [
			200 => 'Grants', 
			201 => 'Grants_talk',
			202 => 'Research',
			203 => 'Research_talk',
			206 => 'Iberocoop',
			207 => 'Iberocoop_talk',
			208 => 'Meta',
			209 => 'Meta_talk',
			210 => 'Bug',
			211 => 'Bug_talk',
			212 => 'Feedback',
			213 => 'Feedback_talk',
		],
		'fiwiki' => [
			222 => 'Aihe',
			223 => 'Keskustelu_aiheesta',
		],
	],
	'wgMetaNamespace' => [
		// Defaults
		'metawiki' => 'Meta',
	],
	// Skin //
	'wgUseCombinedLoginLink' => [
		'default' => true,
	],
	'wgVectorUseIconWatch' => [
		'default' => true,
	],
	'wgVectorUseSimpleSearch' => [
		'default' => true,
	],
	'wgAdvancedSearchHighlighting' => [
		'default' => true,
	],
	// Images //
	'wgSharedUploadBaseUrl' => [
		'default' => 'https://commons.maamedia.org',
	],
	'wgUseSharedUploads' => [
		'default' => true,
	],
	'wgSharedUploadPath' => [
		'default' => 'https://commons.maamedia.org/images',
	],
	'wgSharedUploadDBname' => [
		'default' => 'commonswiki',
	],
	'wgSharedUploadDirectory' => [
		'default' => 'images',
	],
	'wgRepositoryBaseUrl' => [
		'default' => 'https://commons.maamedia.org/wiki/File:',
	],
	'wgFileExtensions' => [
		'default' => [
			'svg',
			'png',
			'jpg',
			'jpeg',
			'pdf',
		],
	],
	'wgUploadNavigationUrl' => [
		'default' => false,
		'commonswiki' => 'https://commons.maamedia.org/wiki/Special:UploadWizard?uselang=$lang',
	],
	// Recent Changes
	'wgUseRCPatrol' => [
		'default' => true,
	],
	
	// All Extensions Started bellow
	'wmgUse3D' => [
		'default' => true,
		'idwiki' => false,
	],
	'wmgUseAdvancedMeta' => [
		'default' => false,
		'commonswiki' => true,
		'datawiki' => true,
		'enwiki' => true,
	],
	'wmgUseAdvancedSearch' => [
		'default' => false,
		'commonswiki' => true,
		'datawiki' => true,
		'enwiki' => true,
		'metawiki' => true,
	],
	'wmgUseBabel' => [
		'default' => false,
		'commonswiki' => true,
		'datawiki' => true,
		'enwiki' => true,
		'metawiki' => true,
	],
	'wmgUseContentTranslation' => [
		'default' => false,
		'enwiki' => true,
	],
	'wmgUseUniversalLanguageSelector' => [
		'default' => false,
		'metawiki' => true,
	],
	'wmgUseUploadWizard' => [
		'default' => false,
		'commonswiki' => true,
	],
	
	
	// AbuseFilter
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
		'default' => 'metawiki',
	],
	'wgAbuseFilterIsCentral' => [
		'default' => false,
		'metawiki' => true,
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
	'wgAbuseFilterDefaultWarningMessage' => [
		'default' => 'abusefilter-warning',
	],
	
	// AdvancedMeta
	'wgDefaultRobotPolic' => [
		'default' => 'index,follow',
	],
	'wgNamespaceRobotPolicies' => [
		NS_TALK => 'noindex',
	],
	'wgArticleRobotPolicies ' => [
		'Main Page' => 'index',
	],
	// AdvancedSearch
	'wgUseBabel' => [
		'default' => true,
	],
	'wgBabelCategoryNames' => [
		'default' => [ // T6616
			'0' => 'User %code%-0',
			'1' => 'User %code%-1',
			'2' => 'User %code%-2',
			'3' => 'User %code%-3',
			'4' => 'User %code%-4',
			'5' => 'User %code%-5',
			'N' => 'User %code%-N',
		],
	],
	'wgBabelMainCategory' => [
		'default' => false,
	'metawiki' => 'User %code%',
	],
	'wgBabelDefaultLevel' => [
		'default' => 'N',
	],
	'wgRightsText' => [
		'default' => ''
	],

	// RatePage //
	'wgRPAddSidebarSection' => [
		'default' => true,
	],
	
	'wgVisualEditorEnableWikitext' => [
		'default' => true,
	],
	
	// BetaFeatures //
	'wgVisualEditorEnableWikitextBetaFeature' => [
		'default' => true,
	],
	
	'wgDiscussionToolsBeta' => [
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
	'wgMediaViewerIsInBeta' => [
		'default' => true,
	],
	
	// CentralNotice
	'wgNoticeInfrastructure' => [ 
		'default' => true,
	],
	'wgNoticeProjects' => [ 
		'centralnoticeproject' => true,
	],
	'wgNoticeProject' => [ 
		'centralnoticeproject' => true,
	],
	'wgCentralHost' => [ 
		'default' => 'localhost',
	],
	'wgCentralDBname' => [ 
		'default' => 'metawiki',
	],
	'wgCentralSelectedBannerDispatcher' => [ 
		'default' => 'https://meta.maamedia.org/index.php?title=Special:BannerLoader',
	],

	// Checkuser
	'wgCUDMaxAge' => [
		'default' => 7776000, //in seconds (default = 3 months)
	],
	'wgCheckUserGBtoollink' => [
		'centralDB' => 'metawiki',
		'groups' => [ 'steward', 'staff' ],
	],
	'wgCheckUserForceSummary' => [
		'default' => true,
	],
	'wgCheckUserCIDRLimit' => [ 
		'IPv4' => 16,
		'IPv6' => 32
	],
	'wgCheckUserCAMultiLock' => [
		'centralDB' => 'metawiki',
		'groups' => [ 'steward' ]
	],
	'wgCheckUserCAtoollink ' => [ 
		'default' => 'metawiki',
	],
	'wgCheckUserEnableSpecialInvestigate' => [
		'default' => true,
	],

	// Timezone //
	'wgLocaltimezone' => [
		'default' => 'UTC',
		
		'fiwiki' => 'Europe/Helsinki', // T31
		'idwiki' => 'Asia/Jakarta', // T31
	],
	
	//UniversalLanguageSelector //
	'wgULSPosition' => [
		'default' => 'interlanguage',
	],
	
	// CirrusSearch
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
			],
		],
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
		],
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
	'wgCirrusSearchInterwikiProv' => [
		'default' => true,
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
		'metawiki' => 0.6,
	],
	'wgCirrusSearchWeights' => [
		'default' => [],
		'codewiki' => [
		'title' => 25.0,
		],
	],
	'wgCirrusSearchConnectionAttempts' => [
		'default' => 3
	],
	'wgCirrusSearchMoreLikeThisTTL' => [
		'default' => 86400
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
		'default' => 10, 
	],
	
	'wgCirrusSearchEnableRegex' => [
		'default' => true, //T31
	],

	// CodeEditor
	'wgCodeEditorEnableCore' => [
		'default' => true,
	],
	'wgScribuntoUseCodeEditor' => [
		'default' => true,
	],

	// CodeReview
	'wgSubversionUser' => [
		'default' => false,
	],
	'wgSubversionProxy' => [
		'default' => false,
	],
	// ContentTranslation
	'wgContentTranslationDatabase ' => [
		'default' => 'metawiki'
	],
	
	// DismissableSiteNotice
	'wgDismissableSiteNoticeForAnons' => [
		'default' => true,
	],
	
	// Delete
	'wgDeleteRevisionsLimit' => [
		'default' => '1000',
	],
	
	// Echo
	'wgNotifyTypeAvailabilityByCategory' => [
	// Otherwise, a user->user email could trigger an additional redundant notification email.
		'emailuser' => [
			'web' => true,
			'email' => false,
		],
		'mention-failure' => [
			'web' => true,
			'email' => false,
		],
		'mention-success' => [
			'web' => true,
			'email' => false,
		],
	],
	'wgEchoDefaultUserSubscriptions' => [
		'default' => [],
	],
	'wgEchoEnableEmailBatch' => [
		'default' => true,
	],
	'wgEchoCrossWikiNotifications' => [
		'default' => true,
	],
	'wgEchoSharedTrackingDB' => [
		'default' => 'metawiki'
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
	
	// Global Blocking //
	'wgGlobalBlockingDatabase' => [
		'default' =>  'centralauth',
	],
	'wgGlobalBlockingBlockXFF' => [
		'default' =>  true,
	],
	'wgApplyGlobalBlocks' => [
		'default' => true,
		'metawiki' => false,
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

	// GlobalContributions
	'wgGUCWikis' => [
		'default' => $wgLocalDatabases,
	],
	// GlobalUsage //
	'wgGlobalUsageDatabase' => [
		'default' => 'metawiki',
	],

	// GlobalUserPage //
	'wgGlobalUserPageDBname' => [
		'default' => 'metawiki',
	],
	'wgGlobalUserPageAPIUrl' => [
		'default' => 'https://meta.maamedia.org/api.php',
	],

	// MobileFrontend and MinervaNeue
	// T31 start
	'wgMFEnableBeta' => [
		'default' => true,
	],

	'wgMFBetaFeedbackLink' => [
		'default' => 'https://meta.maamedia.org/wiki/Feedback/MobileFrontend_Beta',
	], //T31 end
	
	'wgMFManifestBackgroundColor' => [
		'default' => '#008000',
 	],
	
	'wgMFManifestThemeColor' => [
		'default' => '#008000',
	],
	
	// CentralAuth // !becarefull
	
	'wgCentralAuthDatabase' => [
		'default' => 'centralauth',
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
		'default' => '',
	],
	'wgCentralAuthCreateOnView' => [
		'default' =>  true,
	],

	'wgCentralAuthAutoLoginWikis' => [
		'commons.maamedia.org' => 'commonswiki',
		'data.maamedia.org' => 'datawiki',
		'meta.maamedia.org' => 'metawiki',
		'test.maamedia.org' => 'testwiki',
		'en.masymanwiki.org' => 'enwiki',
		'fi.masymanwiki.org' => 'fiwiki',
		'id.masymanwiki.org' => 'idwiki',
	],

	/*
	'wgCentralAuthAutoLoginWikis' => [
	],
	*/
	
	'wgCentralAuthEnableGlobalRenameRequest' => [
		'default' =>  true,
	],

	'wgCentralAuthEnableUserMerge' => [
		'default' =>  true,
	],
	
	/*
	'wgCentralAuthLoginWiki' => [
	'default' =>  'loginwiki',
	],
	*/
	
	'wgCentralAuthLoginIcon' => [
		'default' => true,
	],

	'wgCentralAuthSilentLogin' => [
		'default' =>  true,
	],

	'wgGlobalRenameBlacklistRegex' => [
		'default' => true
	],

	// Scribunto //
	'wgScribuntoDefaultEngine' => [
		'default' => 'luastandalone',
	],
	'wgScribuntoEngineConf' => [
		'luastandalone' => [ 'memoryLimit' => 209715200, ],
	],
	'wgScribuntoUseGeSHi' => [
		'default' => true,
	],
	'wgScribuntoUseCodeEditor' => [
		'default' => true,
	],
	'wgPygmentizePath' => [
		'default' => 'extensions/SyntaxHighlight_GeSHi/pygments/pygmentize',
	],
	
	// Interwiki //
	'wgInterwikiCentralDB' => [
		'default' => 'metawiki',
	],

	// SpamBlacklist //
	'wgBlacklistSettings' => [
		'spam' => [
			'files' => [
				"https://meta.maamedia.org/w/index.php?title=Spam_blacklist&action=raw&sb_ver=1",
			],
		],
	],

	// Kartographer // 

	'wgKartographerWikivoyageMode' => [
		'default' => false,
		'metawiki' => true,
	],
	'wgKartographerUseMarkerStyle' => [
		'default' => false,
		'metawiki' => true,
	],
	'wgKartographerStaticMapframe' => [
		'default' => false,
		'metawiki' => true,
	],
	'wgKartographerEnableMapFrame' => [
		'default' => true,
		'metawiki' => false,
	],
	'wgKartographerUsePageLanguage' => [
		'default' => true,
	],
	'wgUseMediaModeration' => [
		'default' => true,
	],

	'wgUseKartographer' => [
		'default' => true,
		'metawiki' => false,
	],
	'wgUseMapSources' => [
		'default' => false,
		'metawiki' => true,
	],
	
	// RelatedArticles //
	'wgRelatedArticlesUseCirrusSearch' => [
		'default' => true,
	],
	'wgRelatedArticlesOnlyUseCirrusSearch' => [
		'default' => true,
	],
	'wgRelatedArticlesDescriptionSource' => [
		'default' => 'metawiki',
	],
	
	// TitleBlacklist //
	'wgBlacklistSettings' => [
		[
			'type' => 'localpage',
			'src'  => 'MediaWiki:Titleblacklist'
		],
	],
	
	// Translate
	
	'wgTranslateUseSandbox' => [
		'default' => true,
	],
	'wgTranslateDocumentationLanguageCode' => [
		'default' => true,
	],
	'wgNoticeUseTranslateExtension' => [
		'default' => true,  
	],
	'wgTranslateNewsletterPreference' => [
		'default' => true,
	],
	
	'wgContentTranslationTranslateInTarget' => [
		'default' => true,
	],
	
	'wgTranslateTranslationDefaultService' => [
		'default' => true,
	],
	
	'wgTranslationNotificationsContactMethods' => [
		'email' => true,
		'talkpage' => true,
		'talkpage-elsewhere' => false,
	],
	'wgTranslateCheckBlacklist' => [
		'default' => true,
	],
	'wgTranslateWorkflowStates' => [
		'default' => true,
	],
	'wgTranslateDelayedMessageIndexRebuild' => [
		'default' => true,
	],
	'wgTranslateUsePreSaveTransform' => [
		'default' => true,
	],
	

	// VisualEditor //
	'wgVisualEditorEnableDiffPage' => [
		'default' => true,
	],
	'wgVisualEditorEnableWikitext' => [
		'default' => true,
	],
	// WikiEditor //
	'wgHiddenPrefs' => [
		'usebetatoolbar' => true,
	],
	// Logo //
	'wgLogo' => [
		'default' => '/images/1/1a/Maamedia_Logo.png',
		'commonswiki' => '/images/c/cb/Maamedia_Commons_Logo.png',
		'datawiki' => '/images/6/62/Maamedia_Data-Wiki_Logo.png',
		'metawiki' => '/images/b/bc/Wiki.png',
		'enwiki' => '/images/b/b0/Masymanwiki_Logo.png',
		'fiwiki' => '/images/b/b0/Masymanwiki_Logo.png',
		'idwiki' => '/images/b/b0/Masymanwiki_Logo.png',
			'wordmark' => [
			'src' => "/images/b/b0/Masymanwiki_Logo.png",
			'1x' => "/images/b/b0/Masymanwiki_Logo.png", // optional if you want to support browsers with SVG support with an SVG logo.
			'width' => 135,
			'height' => 20,
	],
			'tagline' => [
			'src' => "/images/b/b0/Masymanwiki_Logo.png",
			'width' => 135,
			'height' => 15,
		],

	],
	'wgSiteLogoWordmark' => [
		'fiwiki' => [
			'src' => '/images/b/b0/Masymanwiki_Logo.png',
			'width' => 119,
			'height' => 18,
	],
	],
	'wgFavicon' => [
		'default' => '/images/7/75/Maamedia_Meta-Wiki_logo-n.png',
		'commonswiki' => '/images/4/4a/Maamedia_Commons_Logo-2.png',
		'datawiki' => '/images/6/62/Maamedia_Data-Wiki_Logo.png',
		'metawiki' => '/images/7/75/Maamedia_Meta-Wiki_logo-n.png',
		'enwiki' => '/images/b/b0/Masymanwiki_Logo.png',
		'fiwiki' => '/images/b/b0/Masymanwiki_Logo.png',
		'idwiki' => '/images/b/b0/Masymanwiki_Logo.png',
	],

	// Copyright
	'wgRightsPage' => [
		'default' => '',
	],
	'wgDiff3' => [
		'default' => '/usr/bin/diff3',
	],

	'wgEnableUploads' => [
		'default' => true,
	],
	'wgUploadDirectory' => [
		'default' => 'images',
	],
	'wgUseImageMagick' => [
		'default' => true,
	],
	'wgImageMagickConvertCommand' => [
		'default' => '/usr/bin/convert',
	],
	'wgSVGConverter' => [
		'default' => 'ImageMagick',
	],
	'wgUseImageResize' => [
		'default' => true,
	],
	'wgMemoryLimit' => [
		'default' => '50M',
	],
	'wgMaxImageArea' => [
		'default' => 1.25e7,
	],
	'wgGenerateThumbnailOnParse' => [
		'default' => true,
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
	// Thumbnail prerendering at upload time
	'wgUploadThumbnailRenderMap' => [
		'default' => [ 320, 640, 800, 1024, 1280, 1920 ],
		'private' => [],
	],
	'wgUploadThumbnailRenderMethod' => [
		'default' => 'http',
	],
	'wgWPBEnablePageImagesBanners' => [
		'default' => false,
	],
	'wgWPBEnableHeadingOverride' => [
		'default' => true,
	],
	// Email //
	'wgEnableEmail' => [
		'default' => true,
	],
	'wgEnableUserEmail' => [
		'default' => true,
	],
	'wgEmergencyContact' => [
		'default' => 'stewards@maamedia.org',
	],
	'wgPasswordSender' => [
		'default' => 'noreply@maamedia.org',
	],
	'wgNoReplyAddress' => [
		'default' => 'noreply@maamedia.org',
	],
	'wgEnotifUserTalk' => [
		'default' => true,
	],
	'wgEnotifWatchlist' => [
		'default' => true,
	],
	'wgEmailAuthentication' => [
		'default' => true,
	],
	'wgUserEmailUseReplyTo' => [
		'default' => true,
	],
	'wgEnableUserEmailBlacklist' => [
		'default' => true,
	],
	'wgEnotifUserTalk' => [
		'default' => true,
	],
	'wgEnotifRevealEditorAddress' => [
		'default' => true,
	],
	'wgEnotifFromEditor' => [
		'default' => true,
	],
	'wgEnotifImpersonal' => [
		'default' => true,
	],
	
	'wgCapitalLinks' => [ //T31
		'default' => true,
	],
	
	'wgLegacyEncoding' => [
		'default' => false,
		'enwiki' => 'windows-1252',
	],
	
	'wgEnableAsyncUploads' => [
		'default' => false,
		'commonswiki' => true,
	],
	
	'wgAllowCrossOrigin' => [
		'default' => true,
	],
	
	'wgWatchlistExpiry' => [
		'default' => true,
	],
	// Namespace //
	'wgSiteNotice' => [
		'default' => '',
	],
	// Permissions
	'wgAddGroups' => [
	// The '+' in front of the DB name means 'add to the default'. It saves us duplicating
	// changes to the default across all overrides --Andrew 2009-04-28
		'default' => [
			'bureaucrat' => [ 'accountcreator', 'sysop', 'interface-admin', 'bureaucrat', 'bot', 'confirmed', 'reviewer', 'editor', 'flow-bot' , 'ipblock-exempt', 'translation-admin'],
			'sysop' => [ 'rollbacker', 'editor', 'reviewer', 'confirmed', 'autoreview', 'patroller', 'transwiki', 'ipblock-exempt' ],
		],
		'+idwiki' => [
			'bureaucrat' => [ 'sysop' ],
		],
		'+commonswiki' => [
			'checkuser' => [ 'ipblock-exempt' ],
			'bureaucrat' => [ 'accountcreator', 'sysop', 'interface-admin', 'bureaucrat', 'bot', 'confirmed', 'reviewer', 'editor', 'flow-bot', 'image-reviewer', 'ipblock-exempt' ],
			'image-reviewer' => [ 'image-reviewer' ],
		],
	],
	'wgRemoveGroups' => [
	// The '+' in front of the DB name means 'add to the default'. It saves us duplicating
	// changes to the default across all overrides --Andrew 2009-04-28
		'default' => [
			'bureaucrat' => [ 'accountcreator', 'sysop', 'interface-admin', 'bot', 'confirmed', 'flow-bot', 'editor', 'reviewer', 'ipblock-exempt', 'translation-admin' ],
			'sysop' => [ 'autoreview', 'editor', 'rollbacker', 'confirmed' ]
		],
		'commonswiki' => [
			'bureaucrat' => [ 'accountcreator', 'sysop', 'interface-admin', 'bot', 'confirmed', 'flow-bot', 'editor', 'reviewer', 'ipblock-exempt', 'image-reviewer' ],
			'checkuser' => [ 'ipblock-exempt' ],
		],
	],
	'+wgGroupPermissions' => [
		'default' => [
			'*' => [
				'autocreateaccount' => true,
				'move' => false,
				'abusefilter-log' => false,
				'abusefilter-hide-log' => false,
				'abusefilter-hidden-log' => false,
				'flow-hide' => false,
				'centralauth-merge' => false,
				'writeapi' => false,
				'codereview-use' => false,
				'move' => false,
				'createtalk' => false,
				'abusefilter-view' => false,
			],
			'user' => [
				'codereview-add-tag' => false,
				'reupload-shared' => false,
				'changetags' => false,
				'editcontentmodel' => false,
				'torunblocked' => false,
				'codereview-set-status' => false,
				'move-rootuserpages' => false,
				'move-categorypages' => false,
				'reupload' => false,
				'mwoauthmanagemygrants' => false,
				'codereview-link-user' => false,
				'codereview-remove-tag' => false,
				'movefile' => false,
				'flow-lock' => false,
				'codereview-signoff' => false,
				'move' => false,
				'autocreateaccount' => true,
				'createaccount' => false,
				'noratelimit' => false,
				'noratelimit' => false,
				'noratelimit' => false,
				'noratelimit' => false,
			],
			'autoconfirmed' => [
				'autoconfirmed' => true,
				'abusefilter-log-detail' => true,
				'transcode-reset' => true,
				'skipcaptcha' => true,
				'autopatrol' => true,
				
			],
			'rollbacker' => [
				'rollback' => true,
			],
			
			'transwiki' => [
				'import' => true,
			],

			'bot' => [
				'autoreview' => false,
				'noratelimit' => true,
				'changetags' => true,
				'move-rootuserpages' => true,
			],
			'rollbacker' => [
				'rollback' => true,
			],
			'checkuser' => [
				'oathauth-enable' => true,
				'abusefilter-privatedetails' => true,
				'abusefilter-privatedetails-log' => true,
				'checkuser-log' => true,
				'checkuser' => true,
			],
			'sysop' => [
				'abusefilter-log' => true,
				'oathauth-verify-user' => false,
				'unblockself' => false,
				'newsletter-restore' => false,
				'newsletter-create' => true,
				'reupload-own' => true,
				'edituser-exempt' => false,
				'override-antispoof' => true,
				'newsticker' => false,
				'advancedmeta-edit' => false,
				'centralnotice-admin' => false,
				'oathauth-disable-for-user' => false,
			],
			'bureaucrat' => [
				'override-antispoof' => true,
				'renameuser' => false,
				'userrights' => false,
				'edituser' => false,
				'protectsite' => false,
				'advancedmeta-edit' => false,
			],
			'ipblock-exempt' => [
				'ipblock-exempt' => true,
				'torunblocked' => true,
			],
		],
		'metawiki' => [
			'centralnoticeadmin' => [
				'centralnotice-admin' => true,
				'autoreview' => true,
				'editinterface' => true,
				'noratelimit' => true,
				'protect' => true,
				'oathauth-enable' => true,
				'banner-protect' => true,
			],
			'transwiki' => [
				'oathauth-enable' => true,
				'import' => true,
			],
			'steward' => [
				'renameuser' => true,
				'globalblock' => true,
				'globalgrouppermissions' => true,
				'globalgroupmembership' => true,
				'centralauth-lock' => true,
				'browsearchive' => true,
				'centralauth-usermerge' => true,
				'centralauth-rename' => true,
				'centralauth-unmerge' => true,
				'centralauth-merge' => true,
				'centralauth-oversight' => true,
				'userrights' => true,
				'userrights-interwiki' => true,
				'centralauth-createlocal' => true,
				'noratelimit' => true,
				'oathauth-verify-user' => true,
				'abusefilter-privatedetails' => true,
				'bigdelete' => true,
				'abusefilter-modify-global' => true,
				'oathauth-view-log' => true,
			],
			
			'massmessage-sender' => [
				'autopatrol' => true,
				'massmessage' => true,
			],
			'ipblock-exempt' => [
				'ipblock-exempt' => true,
				'torunblocked' => true,
			], 
			'checkuser' => [
				'oathauth-enable' => true,
				'abusefilter-privatedetails' => true,
				'abusefilter-privatedetails-log' => true
			],
			'autopatroller' => [
				'autopatrol' => true,
			],
			'translation-admin' => [
				'pagelang' => true,
				'translate-manage' => true,
				'oathauth-enable' => true,
				'autopatrol' => true,
				'translate-import' => true,
				'pagetranslation' => true,
				'banner-protect' => true,
			],
			'confirmed' => [
				'editsemiprotected' => true,
				'move' => true,
				'autoconfirmed' => true,
				'skipcaptcha' => true,
				'transcode-reset' => true,
				'abusefilter-log-detail' => true,
			],
			'interface-admin' => [
				'oathauth-enable' => true,
			],
			'oauthadmin' => [
				'oathauth-enable' => true,
				'autopatrol' => true,
				'mwoauthmanageconsumer' => true,
			],
			'suppress' => [
				'oathauth-enable' => true,
			],
			'patroller' => [
				'autopatrol' => true,
				'patrol' => true,
				'rollback' => true,
				'patrolmarks' => true,
			],
		],
		'commonswiki' => [
			'filemover' => [
				'movefile' => true,
				'suppressredirect' => true,
			],
			'autopatrolled' => [
				'mass-upload' => true,
				'move-rootuserpages' => true,
			],
			'image-reviewer' => [
				'mass-upload' => true,
				'move-rootuserpages' => true,
				'autopatrol' => true,
				'patrol' => true,
			],
			'confirmed' => [
				'flow-edit-post' => true,
				'editsemiprotected' => true,
				'move' => true,
				'autoconfirmed' => true,
				'reupload' => true,
				'skipcaptcha' => true,
				'transcode-reset' => true,
				'upload' => true,
				'abusefilter-log-detail' => true,
			],
		],
		'enwiki' => [
			'transwiki' => [
				'oathauth-enable' => true,
				'import' => true,
			],
		],
		'idwiki' => [
			'user' => [
				'createaccount' => false,
				'edit' => false,
			],
		],
	],
	'+wgRevokePermissions' => [
		'default' => [],
	],
	'wgRestrictionLevels' => [
		'default' => [
			'',
			'autoconfirmed', // semi-protection level on
			'sysop',
		],
		'metawiki' => [ '', 'autoconfirmed', 'autopatrol', 'patrol', 'rollback', 'bot', 'sysop' ],
	],
];
$wgInternalServer = str_replace( 'https://', 'http://', $wgServer );
require_once( '/var/www/mediawiki/LocalExtensions.php' );
