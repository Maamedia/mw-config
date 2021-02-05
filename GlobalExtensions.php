<?php

// Global Extensions //
wfLoadExtensions( [
	'AbuseFilter',
	'AdvancedMeta',
	'AdvancedSearch',
	'BetaFeatures',
	'CategoryTree',
	'Babel',
	'CentralAuth',
	'CentralNotice', 
	'CheckUser',
	'CodeEditor',
	'CodeMirror',
	'CodeReview',
	'InputBox', 
	'ImageMap', 
	'Interwiki', 
	'CharInsert', 
	'CirrusSearch',
	'Cite',
	'CiteThisPage', 
	'ConfirmEdit', 
	'Echo', 
	'Elastica', 
	'FlaggedRevs',
	'GlobalBlocking', 
	'GlobalCssJs', 
	'GlobalPreferences', 
	'GlobalUserPage', 
	'Gadgets',
	'LocalisationUpdate', 
	'MassMessage', 
	'MultimediaViewer',
	'Nuke',
	'NewsTicker',
	'TemplateData',
	'TemplateStyles',
	'Poem',
	'OATHAuth',
	'OAuth',
	'ParserFunctions', 
	'ProtectSite',
	'ReplaceText',
	'Translate', 
	'UniversalLanguageSelector',
	'UserMerge',
	'WikiEditor',
	'VisualEditor',
	'MobileFrontend',
    'JsonConfig',
    'mediawiki-extensions-Scribunto-master',
    'mediawiki-extensions-MassEditRegex-master',
] );

// Wikibase //
$wgEnableWikibaseRepo = false;
$wgEnableWikibaseClient = true;
require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";

$wgWBClientSettings['repoUrl'] = 'https://data.maantietaja.org';
$wgWBClientSettings['repoScriptPath'] = '';
$wgWBClientSettings['repoArticlePath'] = '/wiki/$1';
$wgWBClientSettings['repositories']['']['repoDatabase'] = 'maantiet_mw19416';
$wgWBClientSettings['repositories']['']['changesDatabase'] = 'maantiet_mw19416';
$wgWBClientSettings['siteLinkGroups'] = [ 'maantiet_test', 'maantiet_community', 'maantiet_beta' ];
$wgWBClientSettings['siteGlobalID'] = 'en';
