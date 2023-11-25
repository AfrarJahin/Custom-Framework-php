<?php
namespace Afra\Test;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
class HelloWorld{

    public function greetings(){
        echo "Hello greetings";
        $log = new Logger('name');
        $log->pushHandler(new StreamHandler(__DIR__.'/monolog.log', Level::Warning));

        $log->warning('Foo');
        $log->error('Bar');
    }
}

