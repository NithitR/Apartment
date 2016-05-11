<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
      'bootstrap'  => [
        'admin',
        'adminextend',
        'LanguageSwitcher',
    ],
    'components' => [
          'formatter'        => [
            'class'       => 'yii\i18n\Formatter',
            'nullDisplay' => '',
        ],
        'LanguageSwitcher' => [
            'class' => 'app\LanguageSwitcher\LanguageSwitcher',
        ],
        'i18n'             => [
            'translations'          => [
                'frontend*' => [
                    'class'          => 'yii\i18n\PhpMessageSource',
                    'basePath'       => '@common/messages',
                    'sourceLanguage' => 'en-US',
                    'on missingTranslation' => ['common\events\TranslationEventHandler', 'handleMissingTranslation'],
                ],
                'backend*'  => [
                    'class'          => 'yii\i18n\PhpMessageSource',
                    'basePath'       => '@common/messages',
                    'sourceLanguage' => 'en-US',
                    'on missingTranslation' => ['common\events\TranslationEventHandler', 'handleMissingTranslation'],
                ],
                'app*'   => [
                    'class'    => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                    'sourceLanguage' => 'en-US',
                    'on missingTranslation' => ['common\events\TranslationEventHandler', 'handleMissingTranslation'],
                ],
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
   'gridview' =>  [
        'class' => '\kartik\grid\Module'
        // enter optional module parameters below - only if you need to  
        // use your own export download action or custom translation 
        // message source
        // 'downloadAction' => 'gridview/export/download',
        // 'i18n' => []
        ]
    ]
];
