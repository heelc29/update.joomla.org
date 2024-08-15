<?php

$version = [
    '4.4' => [
        'tag'     => '4.4.6-rc1',
        'sha256'  => '28e1d4b01921025baeac36596f9d7a47cafcda3b9ee08ba835dd85d06859ec13',
        'sha384'  => '0dd60c6806e8692c7a9063f43731465bf2cea14e7ec7019a50c64f40d5309bcca832f3cf0cbfb31fecbb200cef73dc3c',
        'sha512'  => '2ab94d73df69340bb1c571beeb9b057e5b05796d09cb321e3dc53ee2b659773001b21c2e0677c1b700c53430cc0e6209b8b029d797a551a2354e10481508bf7d',
        'mysql'   => '5.6',
        'mariadb' => '10.1',
        'pgsql'   => '11.0',
        'php'     => '7.2.5',
    ],
    '5.1' => [
        'tag'     => '5.1.2-rc2',
        'sha256'  => '899ba6551a56e7754c08f969643ed663e777622bf859d9a91e9863bd6778fd97',
        'sha384'  => '2dea7b10db57c392f992868f474928777e7204b7eca0cb087702779e20d5a6431a28142588179548d0ff5ac433404a9d',
        'sha512'  => '9662b2827e4488ad4e45c91583958a9ac8c3362baefe33d5da8b50b4f20fb277586de8eccfd7de4540da57f95f988bb4e41287fbbe3c21116590a900566199ce',
        'mysql'   => '8.0.13',
        'mariadb' => '10.4.0',
        'pgsql'   => '12.0',
        'php'     => '8.1.0',
    ],
];

$paths = [
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
        'from'    => '5.0.[1234]',
        'fromext' => [
            '5.0',
        ],
        'to'      => '5.1',
    ],
    [
        'from'    => '5.1',
        'fromext' => [
            '5.1',
        ],
        'to'      => '5.1',
    ],
];

foreach ($version as $v => $item) {
    if (strpos($item['tag'], 'rc') !== false) {
        $version[$v]['stability_long'] = 'Release_Candidate';
        $version[$v]['stability']      = 'stable';
    } elseif (strpos($item['tag'], 'beta') !== false) {
        $version[$v]['stability_long'] = 'Beta';
        $version[$v]['stability'] = 'beta';
    } elseif (strpos($item['tag'], 'alpha') !== false) {
        $version[$v]['stability_long'] = 'Alpha';
        $version[$v]['stability'] = 'alpha';
    }
}

$extension      = file_get_contents(__DIR__ . '/template_extension.xml');
$extension_item = file_get_contents(__DIR__ . '/template_extension_item.xml');
$list           = file_get_contents(__DIR__ . '/template_list.xml');
$list_item      = file_get_contents(__DIR__ . '/template_list_item.xml');

$extension_items = '';
$list_items      = '';
foreach ($paths as $path) {
    $tmp = $extension_item;

    if (!isset($version[$path['to']])) {
        continue;
    }

    foreach ($version[$path['to']] as $key => $item) {
        $tmp = str_replace('{' . $key . '}', $item, $tmp);
    }
    $tmp = str_replace('{to}', $path['to'], $tmp);
    $tmp = str_replace('{from}', $path['from'], $tmp);

    $extension_items .= $tmp;

    foreach ($path['fromext'] as $from) {
        $tmp = $list_item;

        $tmp = str_replace('{tag}', $version[$path['to']]['tag'], $tmp);
        $tmp = str_replace('{from}', $from, $tmp);

        $list_items .= $tmp;
    }
}

$extension = str_replace('{updates}', $extension_items, $extension);
$list      = str_replace('{extension}', $list_items, $list);

file_put_contents(__DIR__ . '/../../www/core/test/extension_test.xml', $extension);
file_put_contents(__DIR__ . '/../../www/core/test/list_test.xml', $list);
