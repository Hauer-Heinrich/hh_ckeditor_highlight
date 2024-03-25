<?php

$extensionKey = 'hh_ckeditor_highlight';

return [
    'dependencies' => [
        'backend',
    ],
    'tags' => [
        'backend.form',
    ],
    'imports' => [
        '@HauerHeinrich/ckeditor5-highlight' => 'EXT:hh_ckeditor_highlight/Resources/Public/JavaScript/@ckeditor/ckeditor5-highlight.js',
    ],
];
