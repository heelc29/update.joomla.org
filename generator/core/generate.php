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
        'tag'     => '4.4.13',
        'infourl' => 'https://www.joomla.org/announcements/release-news/5925-joomla-5-2-6-security-release.html',
        'durl'    => 'joomla4/4-4-13',
        'sha256'  => 'e19da978ed5f87564f7dbe5366311dfbd3f5ee01b21b34183fb7cae2765cff9e',
        'sha384'  => '805ca270dad5d081ff7dd6bc4bf99cdb1c879876f218956434dd70d7068a95ff9f9790be87bc4f2479211b22a8324b35',
        'sha512'  => 'cc86945c7ba2fdb34835e685f33cc02574561a6d68838c973a32ea374cb240c4fe03f746444957eeea16aa1264ff4115628d4e9bdf0d65e0273b2c4869ece905',
        'mysql'   => '5.6',
        'mariadb' => '10.1',
        'pgsql'   => '11.0',
        'php'     => '7.2.5',
    ],
    '5.3' => [
        'tag'     => '5.3.2',
        'infourl' => 'https://www.joomla.org/announcements/release-news/5929-joomla-5-3-2-bugfix-release.html',
        'durl'    => 'joomla5/5-3-2',
        'sha256'  => '1bd479e964aea2def292141c7c9e4b78990fd5e064f6daf8ea7df38aa33b2b6f',
        'sha384'  => 'b81a764c0360bf578616d8242d20ccfb85691621cea8e6e1c6fa1940b2fcdfea91bd73cc6fa95419529883415e73c928',
        'sha512'  => '619f9ea172307be664ea83ade797204464ab0abe7a9d3f695aa3e29eab986b5ec0c04075fb7131451da98dda6ae2d5580d11043e1212963f6942e56cb42c2efb',
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
        'from'    => '5.[0123]',
        'fromext' => [
            '5.0',
            '5.1',
            '5.2',
            '5.3',
        ],
        'to'      => '5.3',
        'channel' => 'default',
        'file'    => 'j5/default',
    ],
    // Next
    [
        'from'    => '3.10',
        'fromext' => [
            '3.10.12',
            '3.10.20',
        ],
        'to'      => '4.4',
        'channel' => 'next',
        'file'    => 'sts/extension_sts',
    ],
    [
        'from'    => '4.4.13',
        'fromext' => [
            '4.4.13',
        ],
        'to'      => '5.3',
        'channel' => 'next',
        'file'    => 'j4/next',
    ],
    [
        'from'    => '5.[0123]',
        'fromext' => [
            '5.0',
            '5.1',
            '5.2',
            '5.3',
        ],
        'to'      => '5.3',
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
