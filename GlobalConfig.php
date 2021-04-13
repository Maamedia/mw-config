<?php
$wgWBClientSettings['repoUrl'] = 'https://data.maamedia.org';
$wgWBClientSettings['repoScriptPath'] = '';
$wgWBClientSettings['repoArticlePath'] = '/wiki/$1';
$wgWBClientSettings['repositories']['']['repoDatabase'] = 'datawiki';
$wgWBClientSettings['repositories']['']['changesDatabase'] = 'datawiki';
$wgWBClientSettings['siteLinkGroups'] = [ 'Datawiki' ];
$wgWBClientSettings['TOOLBAR'] = [ 'Wiki' ];
$wgWBClientSettings['repoSiteName'] = 'DataWiki';


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
$wgDefaultUserOptions['visualeditor-newwikitext'] = 0;
