<?php
namespace App\Patterns\Structural\Flyweight;

use App\Patterns\Structural\Flyweight\Postman;

class Post
{
    protected array $toDelivery = [];
    protected Postman $postman;

    public function __construct(Postman $postman)
    {
        $this->postman = $postman;
    }

    function takePackage(string $content, string $address)
    {
        $this->toDelivery[$address][] = $this->postman->make($content);
    }

    function deliver()
    {
        foreach ($this->toDelivery as $name => $address) {
            echo 'На адрес ' . $name . ' были доставлены посылки: ';
            foreach ($address as $package) {
                /**@var Package $package */
                echo $package->unpack() . ', ';
            }
            echo '<br>';
        }
    }
}