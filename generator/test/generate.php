<?php

$version = [
    '4.4' => [
        'tag'     => '4.4.3-rc1',
        'sha256'  => '7caa7e90750667fb7acada74c906ec7191b2862b126772005d78806e51b3fe63',
        'sha384'  => '5a48a33b740c24e749e7f95bd33ba0566b86692392dc28b3bb20f50014802ecf808e5df3235dabe0d6200d84a0ba7d72',
        'sha512'  => '6f781d48fce7e1aa7a66c70d05a5b03a8cd556ec3a35744141f07c5176ac447e15a91800ddfe80a41d0ec73f450896efb06f1f059130655c4e2787820e9fd108',
        'mysql'   => '5.6',
        'mariadb' => '10.1',
        'pgsql'   => '11.0',
        'php'     => '7.2.5',
    ],
    '5.0' => [
        'tag'     => '5.0.3-rc1',
        'sha256'  => 'df05248db1bc270791ce8ea34178ae4dc9cf8f2edb8bba4b28cbaa6fe9b36b89',
        'sha384'  => '70849de3ad4266232362781e264f6dbc2e8e475bf9b3ef276499fd5bbb8835577d2be412551bf8293a33cf0545c5a02d',
        'sha512'  => '903ad1da6164626e97fadb95b47f3a7fe8a9f5ba8506de6c4329e0e156df8e3fc3a6263eda8a2b375809691f2d9cc902f264489bb89c4c8d1bbd40be99cbe280',
        'mysql'   => '8.0.13',
        'mariadb' => '10.4.0',
        'pgsql'   => '12.0',
        'php'     => '8.1.0',
    ],
    '5.1' => [
        'tag'     => '5.1.0-alpha4',
        'sha256'  => '0b6dd460618d777b86eddabe223eb7853763280c824577d087818a41d1008852',
        'sha384'  => '032523dab46e85dcf18e968b852e1499e729a6910a4c9b1eb19972090baac5cc708fe276a1dd41e9b2b2f4c0b4a7e3a3',
        'sha512'  => 'bb9c7cfa2317023001f8635c23b7f3db9786cc300ff639845f4a9faf3c3b8eac8d2854530bbde831b80164ec57b0721508d0ab8c47057e0dfedc0d4b6998b731',
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
        'from'    => '5.0',
        'fromext' => [
            '5.0',
        ],
        'to'      => '5.0',
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
