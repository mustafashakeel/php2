<?php

class Books
{

    var $price;
    var $title;

    function setPrice($price)
    {
        $this->price = $price;
    }
    function getPrice()
    {
        echo $this->price . "<br />";
    }
    function setTitle($title)
    {
        $this->title = $title;
    }
    function getTitle()
    {
        echo $this->title . "<br />";
    }
}

$javascript = new Books;
$javascript->setPrice(10);
$javascript->getPrice();
$javascript->setTitle("JavaScript");
$javascript->getTitle();

$physics = new Books;
$physics->setPrice(15);
$physics->getPrice();
$physics->setTitle("Physics");
$physics->getTitle();
