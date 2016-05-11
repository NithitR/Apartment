<?php
/**
 * Created by PhpStorm.
 * User: Thomas
 * Date: 19.03.16
 * Time: 19:28
 */
return [
    'sourcePath' => __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR,
    'languages' => ['th-TH','de-DE'], //Add languages to the array for the language files to be generated.
    'translator' => 'Yii::t',
    'sort' => false,
    'removeUnused' => false,
    'only' => ['*.php'],
    'except' => [
        '.svn',
        '.git',
        '.gitignore',
        '.gitkeep',
        '.hgignore',
        '.hgkeep',
        '/messages',
        '/vendor',
    ],
    'format' => 'php',
    'messagePath' => __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'messages',
    'overwrite' => true,
];