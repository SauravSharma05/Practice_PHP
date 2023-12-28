<?php

// interface 
// trait 

// multiple inheritance 

// ==> trait ==> using use keyword 

// Interface :

// 1 interface can (extends) interface 
// 1 class can (implements) multiple interface

// in interface function can not have body (Abstract method)
// just the function declaration

// and you must have to implement those methods in class which you have declared in Interfaces


trait A 
{
    function t1()
    {
        echo "fun 1 <br/>";
    }
}

trait B 
{
    function t2()
    {
        echo "fun 2 <br/>";
    }
}


class C 
{
    // use A;
    // use B;
    use A,B;
    function t3()
    {
        echo "fun 3<br/>";
    }
}

$ob = new C;
$ob->t3();
$ob->t1();
$ob->t2();

// $ob1 = new B;
// $ob1->t2();
// $ob1->t3();
// $ob1->t1();


?>