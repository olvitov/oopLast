<?php

include 'interface.php';

class Human
{

    public $user = 'Olvit';
     protected $user1 = 'Serg';


    public function myFierstMethod()
    {

        echo $this->user . 'say Hello';

    }

    public function mySecondMethod() {

        echo $this->user1 . 'say Hello 2';

    }


}

class Humans extends Human {

    public function  myThirdMethod() {

        echo $this->user1 . ' Я в третьем методе';

    }

    
}
    $admin = new Human();
    $tip = new Human();
    $tips= new Humans();

 echo 'свойство ' . $admin->user;

// echo $admin->user1;
echo '<br />';
// echo $tip->user1;

echo '<br />';
echo '1 метод' . $admin->myFierstMethod();

echo '<br />';

 echo $tip->mySecondMethod();

echo '<br />';

 echo $tips->myThirdMethod();


class MyFirstClass implements MyInterface
{

    public function Hi()
    {

        echo 'Hi First!';

    }

    public function Hello()
    {
        echo 'Hi Hello';

    }
}

class MySecondClass implements MyInterface {

    public function Hi() {

        echo 'Hi First!';

    }

    public function Hello()
    {
        echo 'Hi Hello';

    }



}

$first = new MyFirstClass();

$second = new MySecondClass();

$first->Hi();
$second->Hello();































