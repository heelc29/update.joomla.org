<?php

$version = [
    '4.0.4' => [
        'tag'          => '4.0.4',
        'release-news' => 'https://www.joomla.org/announcements/release-news/5849-joomla-4-0-4-and-joomla-3-10-3-are-here.html',
        'downloadlink' => 'https://downloads.joomla.org/cms/joomla4/4-0-4/Joomla_4.0.4-Stable-Update_Package.zip',
        'mysql'        => '5.6',
        'mariadb'      => '10.1',
        'pgsql'        => '11.0',
        'php'          => '7.2.5',
    ],
    '4.4' => [
        'tag'     => '4.4.7-dev',
        'mysql'   => '5.6',
        'mariadb' => '10.1',
        'pgsql'   => '11.0',
        'php'     => '7.2.5',
    ],
    '5.1' => [
        'tag'     => '5.1.3-dev',
        'mysql'   => '8.0.13',
        'mariadb' => '10.4.0',
        'pgsql'   => '12.0',
        'php'     => '8.1.0',
    ],
    '5.2' => [
        'tag'     => '5.2.0-alpha4-dev',
        'mysql'   => '8.0.13',
        'mariadb' => '10.4.0',
        'pgsql'   => '12.0',
        'php'     => '8.1.0',
    ],
    '6.0' => [
        'tag'     => '6.0.0-alpha1-dev',
        'mysql'   => '8.0.13',
        'mariadb' => '10.4.0',
        'pgsql'   => '12.0',
        'php'     => '8.1.0',
    ],
];

$types = [
    'patch' => [
        [
            'from'    => '4.0',
            'fromext' => [
                '4.0',
            ],
            'to'      => '4.0.4',
        ],
        [
            'from'    => '4.0.[456]',
            'fromext' => [
                '4.0.4',
                '4.0.5',
                '4.0.6',
            ],
            'to'      => '4.4',
        ],
        [
            'from'    => '4.[1234]',
            'fromext' => [
                '4.1',
                '4.2',
                '4.3',
                '4.4',
            ],
            'to'      => '4.4',
        ],
        [
            'from'    => '5.[01]',
            'fromext' => [
                '5.0',
                '5.1',
            ],
            'to'      => '5.1',
        ],
    ],
    'minor' => [
        [
            'from'    => '4.4.[67]',
            'fromext' => [
                '4.4.6',
                '4.4.7',
            ],
            'to'      => '5.2',
        ],
        [
            'from'    => '5.[012]',
            'fromext' => [
                '5.0',
                '5.1',
                '5.2',
            ],
            'to'      => '5.2',
        ],
    ],
    'major' => [
        [
            'from'    => '5.2',
            'fromext' => [
                '5.2',
            ],
            'to'      => '6.0',
        ],
        [
            'from'    => '6.0',
            'fromext' => [
                '6.0',
            ],
            'to'      => '6.0',
        ],
    ],
];

$descriptions = [
    'patch' => 'Joomla! Core Next Patch Nightly Builds',
    'minor' => 'Joomla! Core Next Minor Nightly Builds',
    'major' => 'Joomla! Core Next Major Nightly Builds',
];

$extension      = file_get_contents(__DIR__ . '/template_extension.xml');
$extension_item = file_get_contents(__DIR__ . '/template_extension_item.xml');
$extension_item_stable = file_get_contents(__DIR__ . '/template_extension_item_stable.xml');
$list           = file_get_contents(__DIR__ . '/template_list.xml');
$list_item      = file_get_contents(__DIR__ . '/template_list_item.xml');

$extension_out = [];
$list_out      = [];
foreach ($types as $type => $paths) {
    $extension_out[$type] = $extension;
    $list_out[$type]      = $list;

    $extension_items = '';
    $list_items      = '';
    foreach ($paths as $path) {
        if (!isset($version[$path['to']])) {
            continue;
        }

        if (strpos($version[$path['to']]['tag'], '-') === false) {
            $tmp = $extension_item_stable;
        } else {
            $tmp = $extension_item;
        }

        foreach ($version[$path['to']] as $key => $item) {
            $tmp = str_replace('{' . $key . '}', $item, $tmp);
        }

        preg_match('/^\d+\.\d+/', $path['to'], $match);
        $tmp = str_replace('{to}', $match[0], $tmp);
        $tmp = str_replace('{from}', $path['from'], $tmp);

        $extension_items .= $tmp;

        foreach ($path['fromext'] as $from) {
            $tmp = $list_item;
    
            $tmp = str_replace('{tag}', $version[$path['to']]['tag'], $tmp);
            $tmp = str_replace('{from}', $from, $tmp);
            $tmp = str_replace('{type}', $type, $tmp);
    
            $list_items .= $tmp;
        }
    }

    $extension_out[$type] = str_replace('{updates}', $extension_items, $extension_out[$type]);
    $list_out[$type]      = str_replace('{description}', $descriptions[$type], $list_out[$type]);
    $list_out[$type]      = str_replace('{extension}', $list_items, $list_out[$type]);
}

file_put_contents(__DIR__ . '/../../www/core/nightlies/next_patch_extension.xml', $extension_out['patch']);
file_put_contents(__DIR__ . '/../../www/core/nightlies/next_minor_extension.xml', $extension_out['minor']);
file_put_contents(__DIR__ . '/../../www/core/nightlies/next_major_extension.xml', $extension_out['major']);
file_put_contents(__DIR__ . '/../../www/core/nightlies/next_patch_list.xml', $list_out['patch']);
file_put_contents(__DIR__ . '/../../www/core/nightlies/next_minor_list.xml', $list_out['minor']);
file_put_contents(__DIR__ . '/../../www/core/nightlies/next_major_list.xml', $list_out['major']);
