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
        'tag'     => '4.4.10',
        'infourl' => 'https://www.joomla.org/announcements/release-news/5919-joomla-5-2-3-security-bugfix-release.html',
        'durl'    => 'joomla4/4-4-10',
        'sha256'  => 'b617ff56b041069a4e7e4d2ff85ff733e908a12d3d42c2a632e7df76be2e1a16',
        'sha384'  => 'ef89e86ca4c6d50b9bd59ec236f27ea0d4d512f78257a6f04b66f39877d467c680dee5a7c365bea204f0cc33ddac9bb8',
        'sha512'  => '565bf1f1cfd1a6dc9ed5aae1792dee4febb21b1d04ac0547cf67cb7cb7328c0de737acb32f3859332fd8ed55017c288801e6b561f2f2c9e7552e22762dbdd480',
        'mysql'   => '5.6',
        'mariadb' => '10.1',
        'pgsql'   => '11.0',
        'php'     => '7.2.5',
    ],
    '5.2' => [
        'tag'     => '5.2.3',
        'infourl' => 'https://www.joomla.org/announcements/release-news/5919-joomla-5-2-3-security-bugfix-release.html',
        'durl'    => 'joomla5/5-2-3',
        'sha256'  => '54cf26299d185c8022b4a074c20e6202e0aca8d7d3655fbf2a6d386a5553f4a5',
        'sha384'  => '1487febb4e71770aa72ec6c89dd81af08a1add9e40447099d33f0bc3d11829723653473902568d4829d2aaeeaaf6d3e3',
        'sha512'  => 'db43965d63a6cf688f0ca8206fa31753e9e789ae029a6d3be95fb38c803bc1ad45dc528c38542faf9f1663659e646d87cf18cab9d848edbd49b05f897e2fb893',
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
        'from'    => '5.[012]',
        'fromext' => [
            '5.0',
            '5.1',
            '5.2',
        ],
        'to'      => '5.2',
        'channel' => 'default',
        'file'    => 'j5/default',
    ],
    // Next
    [
        'from'    => '3.10',
        'fromext' => [
            '3.10.12',
            '3.10.19',
        ],
        'to'      => '4.4',
        'channel' => 'next',
        'file'    => 'sts/extension_sts',
    ],
    [
        'from'    => '4.4.10',
        'fromext' => [
            '4.4.10',
        ],
        'to'      => '5.2',
        'channel' => 'next',
        'file'    => 'j4/next',
    ],
    [
        'from'    => '5.[012]',
        'fromext' => [
            '5.0',
            '5.1',
            '5.2',
        ],
        'to'      => '5.2',
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
