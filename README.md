Thunderpush Silex Provider
================================

Thunderpush service provider for silex micro-framework. Check here: https://github.com/thunderpush/php-thunderclient

Example
=======

``` php
<?php
use Silex\Application;

$host = 'localhost';
$port = '8080';
$key = 'key';
$secret = 'secret';
$app = new Application();
$app->register(new ThunderpushServiceProvider(), array(
            "thunderpush.host" => $host,
            "thunderpush.port" => $port,
            "thunderpush.key" => $key,
            "thunderpush.secret" => $secret
         ));
$tp = $app['thunderpush'];
$tp->get_user_count();
```

Install with Composer
=====================

``` js
{
require: {
             "jrschumacher/silex-provider-thunderpush": "dev-master"
         }
}
```
