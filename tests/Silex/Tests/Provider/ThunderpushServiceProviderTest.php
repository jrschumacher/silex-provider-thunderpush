<?php

namespace Silex\Tests\Provider;

use Silex\Application;
use Silex\Provider\SerializerServiceProvider;
use Silex\Provider\THunderpushServiceProvider;
use ReflectionClass;
/*
 * MongodmServiceProviderTest
 */
class ThunderpushServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    /*
     * testRegister
     */
    public function testRegister()
    {
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

        $this->assertInstanceOf("\Thunder", $tp);
    }
}
