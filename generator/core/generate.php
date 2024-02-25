<?php

$version = [
    '2.5.28' => [
        'tag'     => '2.5.28',
    ],
    '3.1.3' => [
        'tag'     => '3.1.3',
    ],
    '3.2.7' => [
        'tag'     => '3.2.7',
    ],
    '3.5.1' => [
        'tag'     => '3.5.1',
        'infourl' => 'https://www.joomla.org/announcements/release-news/5655-joomla-3-5-1-released.html',
    ],
    '3.6' => [
        'tag'     => '3.6.5',
    ],
    '3.10' => [
        'tag'     => '3.10.12',
        'infourl' => 'https://www.joomla.org/announcements/release-news/5888-joomla-4-3-3-and-3-10-12-bug-fix-release.html',
        'durl'    => 'joomla3/3-10-12',
        'sha256'  => 'ef2abc9226cb7102375bbed60706983798f7493d1ffd4c3ab7e79c5f1dd2f9f8',
        'sha384'  => '3c9e504c18af00fe429f3bbb932d853784d2223eb4570be58359010e4049e5c9201e4e591cd27a6d6989cc54dddd5ca9',
        'sha512'  => '59752424113d340d0c7ee38df84f71d13c952b7ee0093abc66915fc5ec113bb9db206595adab77272e80cc2f341eecf77a383137ebb25dd3414faf2e7be4c23d',
        'php'     => '5.3.10',
    ],
    '4.0.4' => [
        'tag'     => '4.0.4',
        'infourl' => 'https://www.joomla.org/announcements/release-news/5849-joomla-4-0-4-and-joomla-3-10-3-are-here.html',
        'durl'    => 'joomla4/4-0-4',
        'sha256'  => '34a34e1ad2fdee76372d956cfe2353f033cf170fd80eb856ce01034d0ffc6503',
        'sha384'  => '4d0f765cdebb0a8e0bf3e005c8de4366a4520e629b54945686c53c9995470e272e71e92c96636151239ee116c47b6016',
        'sha512'  => '02fd1e464ce5543464cbf1c7ae270ee2afa1238eb1f92d2cfeac12154e782d0a56884d8a21dd5781b3b15a729922b7a2589db4a8718122961579a3aa8accd53f',
        'mysql'   => '5.6',
        'mariadb' => '10.1',
        'pgsql'   => '11.0',
        'php'     => '7.2.5',
    ],
    '4.4' => [
        'tag'     => '4.4.3',
        'infourl' => 'https://www.joomla.org/announcements/release-news/5904-joomla-5-0-3-and-4-4-3-security-and-bug-fix-release.html',
        'durl'    => 'joomla4/4-4-3',
        'sha256'  => 'd5652421ed4f2578f58195013bad8fcc605f439c4b0da11740f3cb5b164e5a2a',
        'sha384'  => 'b65903af19956415f22e50f4ff91c9a422cde587295bca68d60fbb92759ed882c1402765a7f014986fe457a78a6b7b56',
        'sha512'  => '2fcf5c1751a12f8c40929af78f8491e1a76cd8fbc2af3522e97dd84f928316253697455c1eff8b767e28c08dca365dc014c2f41b876e9c903aac18c332f399cf',
        'mysql'   => '5.6',
        'mariadb' => '10.1',
        'pgsql'   => '11.0',
        'php'     => '7.2.5',
    ],
    '5.0' => [
        'tag'     => '5.0.3',
        'infourl' => 'https://www.joomla.org/announcements/release-news/5904-joomla-5-0-3-and-4-4-3-security-and-bug-fix-release.html',
        'durl'    => 'joomla5/5-0-3',
        'sha256'  => 'ab3d2aa8f937f92f1954c2dd15eb24e67b91fe93e531a97c30738ae2a63e1112',
        'sha384'  => '0eccde774894fe1f2243d160954ae1f0a1c5ffe5a41fa9f123b92987f3a8753b0880b172f4cb06f0060ef20d43601da8',
        'sha512'  => '05a5bae178487cd1b5e3a9fdf2bf10ce9a882e3c5e8ffef44fdb8ad6979b5057202bce0da6f5628e8d0448d03cce345bbd8f5f181dc4e7139a342d64594bdb74',
        'mysql'   => '8.0.13',
        'mariadb' => '10.4',//0
        'pgsql'   => '12.0',
        'php'     => '8.1.0',
    ],
];

$paths = [
    // Default
    [
        'from'    => '',
        'fromext' => [
            '2.5',
        ],
        'to'      => '2.5.28',
        'channel' => 'default',
        'file'    => 'extension',
    ],
    [
        'from'    => '',
        'fromext' => [
            '2.5',
        ],
        'to'      => '3.5.1',
        'channel' => 'next',
        'file'    => 'sts/extension_sts',
    ],
    [
        'from'    => '',
        'fromext' => [
            '3.1.2',
        ],
        'to'      => '3.1.3',
        'channel' => ['default', 'next'],
        'file'    => 'extension',
    ],
    [
        'from'    => '',
        'fromext' => [
            '3.0',
            '3.1',
            '3.2',
        ],
        'to'      => '3.2.7',
        'channel' => ['default', 'next'],
        'file'    => 'extension',
    ],
    [
        'from'    => '',
        'fromext' => [
            '3.2.7',
            '3.3',
            '3.4',
            '3.5',
            '3.6',
        ],
        'to'      => '3.6',
        'channel' => ['default', 'next'],
        'file'    => 'extension',
    ],
    [
        'from'    => '',
        'fromext' => [
            '3.6.5',
        ],
        'to'      => '3.10',
        'channel' => ['default', 'next'],
        'file'    => 'extension',
    ],
    [
        'from'    => '',
        'fromext' => [
            '3.7',
            '3.8',
            '3.9',
            '3.10',
        ],
        'to'      => '3.10',
        'channel' => ['default', 'next'],
        'file'    => 'extension',
    ],
    [
        'from'    => '4.0',
        'fromext' => [
            '4.0',
        ],
        'to'      => '4.0.4',
        'channel' => ['default', 'next'],
        'file'    => 'j4/default',
    ],
    [
        'from'    => '4.0.[456]',
        'fromext' => [
            '4.0.4',
            '4.0.5',
            '4.0.6',
        ],
        'to'      => '4.4',
        'channel' => ['default', 'next'],
        'file'    => 'j4/default',
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
        'channel' => ['default', 'next'],
        'file'    => 'j4/default',
    ],
    [
        'from'    => '5.0',
        'fromext' => [
            '5.0',
        ],
        'to'      => '5.0',
        'channel' => 'default',
        'file'    => 'j5/default',
    ],
    // Next
    [
        'from'    => '3.10',
        'fromext' => [
            '3.10.12',
            '3.10.15',
        ],
        'to'      => '4.4',
        'channel' => 'next',
        'file'    => 'sts/extension_sts',
    ],
    [
        'from'    => '4.4.3',
        'fromext' => [
            '4.4.3',
        ],
        'to'      => '5.0',
        'channel' => 'next',
        'file'    => 'j4/next',
    ],
    [
        'from'    => '5.0',
        'fromext' => [
            '5.0',
        ],
        'to'      => '5.0',
        'channel' => 'next',
        'file'    => 'j5/next',
    ],
];

$extension      = file_get_contents(__DIR__ . '/template_extension.xml');
$extension_item = file_get_contents(__DIR__ . '/template_extension_item.xml');
$list           = file_get_contents(__DIR__ . '/template_list.xml');
$list_item      = file_get_contents(__DIR__ . '/template_list_item.xml');

$extension_items = [];
$list_items      = [];
foreach ($paths as $path) {
    $tmp = $extension_item;

    if (!isset($version[$path['to']])) {
        continue;
    }

    foreach ($version[$path['to']] as $key => $item) {
        $tmp = str_replace('{' . $key . '}', $item, $tmp);
    }
    preg_match('/^\d+\.\d+/', $path['to'], $match);
    $tmp = str_replace('{to}', $match[0], $tmp);
    $tmp = str_replace('{from}', $path['from'], $tmp);

    if (isset($extension_items[$path['file']])) {
        $extension_items[$path['file']] .= $tmp;
    } else {
        $extension_items[$path['file']] = $tmp;
    }

    foreach ($path['fromext'] as $from) {
        $tmp = $list_item;

        $tmp = str_replace('{tag}', $version[$path['to']]['tag'], $tmp);
        $tmp = str_replace('{from}', $from, $tmp);
        $tmp = str_replace('{file}', $path['file'], $tmp);

        $fromv = explode('.', $from);
        $key   = $fromv[0] * 10000 + $fromv[1] * 100 + ($fromv[2] ?? 99);

        if (is_array($path['channel'])) {
            foreach ($path['channel'] as $channel) {
                $list_items[$channel][$key] = $tmp;
            }
        } else {
            $list_items[$path['channel']][$key] = $tmp;
        }
    }
}

ksort($list_items['default']);
ksort($list_items['next']);

$list_default = str_replace('{extension}', implode('', $list_items['default']), $list);
$list_next    = str_replace('{extension}', implode('', $list_items['next']), $list);
file_put_contents(__DIR__ . '/../../www/core/list.xml', $list_default);
file_put_contents(__DIR__ . '/../../www/core/sts/list_sts.xml', $list_next);

foreach ($extension_items as $file => $data) {
    $output = str_replace('{updates}', $data, $extension);
    file_put_contents(__DIR__ . '/../../www/core/' . $file . '.xml', $output);
}
