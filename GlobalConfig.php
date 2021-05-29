<?php

$wgWBClientSettings['repoUrl'] = 'https://data.maamedia.org';
$wgWBClientSettings['repoScriptPath'] = '';
$wgWBClientSettings['repoArticlePath'] = '/wiki/$1';
$wgWBClientSettings['repositories']['']['repoDatabase'] = 'datawiki';
$wgWBClientSettings['repositories']['']['changesDatabase'] = 'datawiki';
$wgWBClientSettings['siteLinkGroups'] = [ 'Datawiki' ];
$wgWBClientSettings['TOOLBAR'] = [ 'Wiki' ];
$wgWBClientSettings['repoSiteName'] = 'DataWiki';
$wgWBRepoSettings['entityNamespaces']['item'] = 120;
$wgWBRepoSettings['entityNamespaces']['property'] = 122;
$wgWBClientSettings['repositories'] = [
		'' => [
			'repoDatabase' => 'datawiki',
			'baseUri' => $wgWBClientSettings['repoUrl'] . '/entity',
			'entityNamespaces' => [
				'item' => NS_MAIN,
				'property' => NS_MAIN
			],
			'prefixMapping' => [ '' => '' ],
		]
	]
];
/* 'wgWikibaseRepoForeignRepositories' => [
	'default' => [],
	'commonswiki' => [
		'd' => [
			'repoDatabase' => 'datawiki',
			'baseUri' => 'https://data.maamedia.org/entity/',
			'supportedEntityTypes' => [ 'item', 'property' ],
			'prefixMapping' => [],
			'entityNamespaces' => [ 'item' => 0, 'property' => 120 ]
		],
	],
],
*/
// WIKIBASE END //

$wgLocalisationCacheConf['storeClass'] = LCStoreCDB::class;
$wgLocalisationCacheConf['storeDirectory'] = "$IP/cache/l10n";
$wgLocalisationCacheConf['manualRecache'] = true;


$wgResourceLoaderSources['metawiki'] = [
	'apiScript' => '//meta.maamedia.org/api.php',
	'loadScript' => '//meta.maamedia.org/load.php',
];

$wgGroupPermissions['bureaucrat']['userrights'] = false;
$wgRightsText = "our special license";
$wgEnableUploads = true;

// MaamediaTags //
$wgMaamediaTagsAttributes['a'] = [ 'href', 'class' ];
$wgMaamediaTagsAttributes['img'] = [ 'src', 'style' ];

$wgGlobalCssJsConfig = [
	'wiki' => 'metawiki', // database name
	'source' => 'metawiki', // ResourceLoader source name
];
$wgAdvancedSearchHighlighting = true;
$wgCirrusSearchWikimediaExtraPlugin[ 'regex' ] = [
	'build',
	'use',
	'use_extra_timeout',
];



$wgCirrusSearchUseExperimentalHighlighter = true;
$wgCirrusSearchOptimizeIndexForExperimentalHighlighter = true;
$wgCirrusSearchElasticQuirks = [
	'query_string_max_determinized_states' => true,
];
$wgAddGroups['bureaucrat'] = true;
$wgAddGroups['bureaucrat'] = [ 'sysop', 'bot' ];
$wgAddGroups['sysop'][] = 'bot';



// Documentation for Wikibase: https://www.mediawiki.org/wiki/Wikibase/Installation/Advanced_configuration#Configuration

// You should only need to set $wgWBClientSettings['repoUrl'], $wgWBClientSettings['repoDatabase'] and $wgWBClientSettings['changesDatabase']
// on the wiki.
/*
$wgWBRepoSettings['entityNamespaces']['item'] = 860;
$wgWBRepoSettings['entityNamespaces']['property'] = 862;
$wgWBRepoSettings['sharedCacheKeyPrefix'] = $wgConf->dbname . ':WBL/' . rawurlencode( $wgVersion );
$wgWBRepoSettings['allowEntityImport'] = $wmgAllowEntityImport;
$wgWBRepoSettings['enableEntitySearchUI'] = $wmgEnableEntitySearchUI;
$wgWBRepoSettings['federatedPropertiesEnabled'] = $wmgFederatedPropertiesEnabled;
$wgWBRepoSettings['siteLinkGroups'] = [
	'Datawiki'
];
$wgWBRepoSettings['specialSiteLinkGroups'] = [];

$wgWBClientSettings['repoUrl'] = $wmgWikibaseRepoUrl;
$wgWBClientSettings['repoDatabase'] = $wmgWikibaseRepoDatabase;
$wgWBClientSettings['changesDatabase'] = $wmgWikibaseRepoDatabase;
$wgWBClientSettings['repositories'] = [
	'' => [
		'repoDatabase' => $wmgWikibaseRepoDatabase,
		'baseUri' => $wmgWikibaseRepoUrl . '/entity/',
		'entityNamespaces' => [
			'item' => $wmgWikibaseItemNamespaceID,
			'property' => $wmgWikibasePropertyNamespaceID
		],
		'prefixMapping' => [
			'' => ''
		]
	]
];
$wgWBClientSettings['siteGlobalID'] = $wgConf->dbname;
$wgWBClientSettings['repoScriptPath'] = '';
$wgWBClientSettings['repoArticlePath'] = '/wiki/$1';
$wgWBClientSettings['siteGroup'] = 'Datawiki';
$wgWBClientSettings['repoNamespaces'] = [
	'wikibase-item' => 'Item',
	'wikibase-property' => 'Property'
];
$wgWBClientSettings['siteLinksGroups'] = [
	'miraheze'
];
$wgWBClientSettings['purgeCacheBatchSize'] = 100;
$wgWBClientSettings['recentChangesBatchSize'] = 100;


// Per-wiki
if ( $wgDBname === 'datawiki' ) {
	$wgWBRepoSettings['formatterUrlProperty'] = 'P1';
}
*/

$wgVisualEditorEnableWikitext = true;
# $wgDefaultUserOptions['visualeditor-newwikitext'] = 0;
