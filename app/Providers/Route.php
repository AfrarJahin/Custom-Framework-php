<?php

namespace Afra\App\Providers;

class Route
{
    private $routeList;

    public function __construct()
    {
        $this->routeList = [];
    }

    public function get($uri, $handler)
    {
        $this->routeList[] = ['method' => 'get', 'uri' => $uri, 'handler' => $handler];
    }

    public function dispatch()
    {
        $route = $_GET['r'];

        foreach ($this->routeList as $list) {
            if ($list['uri'] === $route) {
                $handler = $list['handler'];
                $instance = new $handler[0];
                return $instance->{$handler[1]}();
                break;
            }
        }

        return 'Done';
    }
}