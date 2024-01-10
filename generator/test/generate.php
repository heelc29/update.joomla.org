<?php

$version = [
    '4.4' => [
        'tag'     => '4.4.2-rc1',
        'sha256'  => 'cbce487062024fca9e6d435b6a10294d2692db774d11a7789eb25800ee450d70',
        'sha384'  => '4771e9b0a83f075d50e077773d24958ff2d6a1da57624ee7f31c656dbe9399e2bc52e06b42983b025795b06358f4b451',
        'sha512'  => '75fc6e00c22ee1720b356b810454ac4acb8aacc47cf4cbef781be2bae6dcace04b9a51fc4c36bc9219ba5f00b9ebf38f8d750bb0259c996890d51899085ac664',
        'mysql'   => '5.6',
        'mariadb' => '10.1',
        'pgsql'   => '11.0',
        'php'     => '7.2.5',
    ],
    '5.0' => [
        'tag'     => '5.0.2-rc2',
        'sha256'  => '9b3264ea2b7acf896047cdccf45a32e9666a03aa6cedf3ea2a58aefd78fde9d1',
        'sha384'  => 'c1758c41051554b86d528539b30545236ac03786eb959f04c1022fef370ceb7555f98bc94ab84fa119eeab1f8ea1fc60',
        'sha512'  => '8e179848f302024c922cd56cc51ec85bf57cecfe36e10d5e9ad2141117371655b6ced3cbc2bdb74ada5c655d78209d001373576bd3854b2c850b3da8dfe44e03',
        'mysql'   => '8.0.13',
        'mariadb' => '10.4.0',
        'pgsql'   => '12.0',
        'php'     => '8.1.0',
    ],
    '5.1' => [
        'tag'     => '5.1.0-alpha2',
        'sha256'  => '62cf1c002609a70a19ddd18977b5cb6115e657e258de5f6b603150090f0f1d6c',
        'sha384'  => 'f6c763e10264a66325d1e9650a49a9ef367e88e5cec6fc69dd8517083eb1233238e87af90a0a41e8b5ff4b0ee6885906',
        'sha512'  => 'f1bf7aaee264fa8bf7cc71ce58b0c641aace0d616d4ce4ecd65faaba9bd1c35c3a37b0c31929d06badd0e750c294c2ef8ce19aaadf75904022960655c1caffdf',
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
        'from'    => '5.0.[12]',
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
