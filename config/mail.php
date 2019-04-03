<?php

/*
MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=7dd7c803364543
MAIL_PASSWORD=e75b5ad9e99d6e
MAIL_ENCRYPTION=tls



return [
  "driver" => "smtp",
  "host" => "smtp.mailtrap.io",
  "port" => 2525,
  "from" => array(
      "address" => "from@example.com",
      "name" => "Example"
  ),
  "username" => "7dd7c803364543",
  "password" => "e75b5ad9e99d6e",
  "sendmail" => "/usr/sbin/sendmail -bs"
];

*/   // mailtrap configration


return [



    'driver' => env('MAIL_DRIVER', 'smtp'),


    'host' => env('MAIL_HOST', 'smtp.mailgun.org'),



    'port' => env('MAIL_PORT', 587),



    'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'hello@example.com'),
        'name' => env('MAIL_FROM_NAME', 'Example'),
    ],



    'encryption' => env('MAIL_ENCRYPTION', 'tls'),



    'username' => env('MAIL_USERNAME'),

    'password' => env('MAIL_PASSWORD'),



    'sendmail' => '/usr/sbin/sendmail -bs',



    'markdown' => [
        'theme' => 'default',

        'paths' => [
            resource_path('views/vendor/mail'),
        ],
    ],

];
