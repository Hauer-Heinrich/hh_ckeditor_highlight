<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "hh_tt_address_places".
 *
 * Auto generated 13-03-2024 11:21
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF['hh_ckeditor_highlight'] = [
    'title' => 'Hauer-Heinrich - ck_editor hightlight plugin',
    'description' => 'Same as the original ck_editor highlight plugin but output "span"-tag instead of "mark".',
    'category' => 'plugin',
    'version' => '1.0.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'clearcacheonload' => false,
    'author' => 'Christian Hackl',
    'author_email' => 'web@hauer-heinrich.de',
    'author_company' => 'www.hauer-heinrich.de',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'suggests' => [
        ],
        'conflicts' => [
        ],
    ],
    // 'autoload' => [
    //     'psr-4' => [
    //         'HauerHeinrich\\HhCkeditorHighlight\\' => 'Classes'
    //     ],
    // ],
];
