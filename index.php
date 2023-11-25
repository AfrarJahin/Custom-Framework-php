<?php
require 'vendor/autoload.php';

use Afra\Test\Models\User as ModelUser;
use Afra\Test\Codels\User;
use Afra\Test\HelloWorld;


$user1 = new ModelUser();
echo $user1->getName();

$user2 = new User();

echo $user2->getName();

$hello = new HelloWorld();
$hello->greetings();