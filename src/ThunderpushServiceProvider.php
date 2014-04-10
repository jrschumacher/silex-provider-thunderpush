<?php

namespace Silex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;

/*
 * ThunderpushServiceProvider
 */
class ThunderpushServiceProvider implements ServiceProviderInterface
{
    /*
     * register
     */
    public function register(Application $app)
    {
        $app['thunderpush'] = $app->share(function() use ($app) {
            if(!isset($app['thunderpush.host'])) throw new \Exception('thunderpush.host undefined');
            if(!isset($app['thunderpush.port'])) throw new \Exception('thunderpush.port undefined');
            if(!isset($app['thunderpush.key'])) throw new \Exception('thunderpush.key undefined');
            if(!isset($app['thunderpush.secret'])) throw new \Exception('thunderpush.secret undefined');

            $thunderpush = new \Thunder(
                $app['thunderpush.key'],
                $app['thunderpush.secret'],
                $app['thunderpush.host'],
                $app['thunderpush.port']
            );

            return $thunderpush;
        });
    }

    /*
     * boot
     */
    public function boot(Application $app)
    {
    }
}
