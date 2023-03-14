<?php

class Books
{

    var $price;
    var $title;
    function __construct($price, $title)
    {
        $this->price = $price;
        $this->title = $title;
    }


    function getPrice()
    {
        echo $this->price . "<br />";
    }

    function getTitle()
    {
        echo $this->title . "<br />";
    }
}

$javascript = new Books(10, "Javasript");
$javascript->getPrice();
$javascript->getTitle();

$physics = new Books(15, "Physics");
$physics->getPrice();
$physics->getTitle();



class Subject extends Books
{

    var $subject;
    function setSubject($subject)
    {
        $this->subject = $subject;
    }
    function getSubject()
    {
        echo $this->subject . "<br />";
    }
}

$math = new Subject(20, "Math 101 ");
$math->setSubject("Mathematics");
$math->getSubject();
$math->getPrice();
