<?php

$wgExtensionCredits['wikidiff2'][] = array(
    'name' => 'Wikidiff2',
    'version' => '',
    'author' => 'Tim Starling',
    'description' => 'external diff engine for MediaWiki',
    'url' => 'https://www.mediawiki.org/wiki/Extension:Wikidiff2'
);

$wgExternalDiffEngine = 'wikidiff2';
