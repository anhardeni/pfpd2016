<?php
$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],

     'as access' => [
                'class' => '\hscstudio\mimin\components\AccessControl',
                'allowActions' => [
                 // add wildcard allowed action here!
                'site/*',
                'reportico/*',
                'dataentry/*',
                'ims-master/*',
                'ttpermohonan/*',
                'datakeberatan2016/*',
                'debug/*',
                'namapemeriksa/*',
                'mimin/*', // only in dev mode
                ],
            ],

     'modules' => [



               
                              
                'gridview' => [
                        'class' => '\kartik\grid\Module',
          // see settings on http://demos.krajee.com/grid#module
                                    ],
                'datecontrol' => [
                        'class' => '\kartik\datecontrol\Module',



          // see settings on http://demos.krajee.com/datecontrol#module

// format settings for displaying each date attribute
        'displaySettings' => [
            'date' => 'd-M-yyyy',
            'time' => 'H:i:s A',
            'datetime' => 'd-m-Y H:i:s A',
        ],
 
        // format settings for saving each date attribute
        'saveSettings' => [
            'date' => 'yyyy-M-d', 
            'time' => 'H:i:s',
            'datetime' => 'yyyy-m-dd H:i:s',
        ],
 
        // automatically use kartik\widgets for each of the above formats
        'autoWidget' => true,





                                     ],
      // If you use tree table
                'treemanager' =>  [
                        'class' => '\kartik\tree\Module',
          // see settings on http://demos.krajee.com/tree-manager#module
      ],
                     'mimin' => [
                    'class' => '\hscstudio\mimin\Module',
                    ],
    

     'reportico' => [
                        'class' => 'reportico\reportico\Module' ,
                        'controllerMap' => [
                            'reportico' => 'reportico\reportico\controllers\ReporticoController',
                            'mode' => 'reportico\reportico\controllers\ModeController',
                            'ajax' => 'reportico\reportico\controllers\AjaxController',
                                        ]
                                ],
                ],




    'components' => [

        'authManager'  => [
            'class'        => 'yii\rbac\DbManager',
        ],

        'view' => [
         'theme' => [
             'pathMap' => [
                '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
                     ],
                         ],
                    ],

       
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'qwert2016',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            //'enableAutoLogin' => true,
            'enableSession' => true,
            'authTimeout' => 60*30, 
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
			/*
			// if using Gmail
			// turn on at less secure apps
			// https://www.google.com/settings/security/lesssecureapps
			// please set in params.php too
			'viewPath' => '@app/mail',
			'transport'=>[
				'class'=>'Swift_SmtpTransport',
				'host'=>'smtp.gmail.com',
				'username'=>'youremail@gmail.com',
				'password'=>'your password',
				'port'=>'587',
				'encryption'=>'tls',
			],
			*/
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;

