<?php

class book {
	
	var $title;
	var $author;
	var $publisher;
	var $loudName;

	function __construct()
    {
        $this->loudName = $this->makeNameLoud('Carlos');
    }

    function makeNameLoud($name)
    {
        return strtoupper($name);
    }

	function summary ()
    {
        echo 'Title: '      . $this->title        . PHP_EOL;
        echo 'Author: '     . $this->author       . PHP_EOL;
        echo 'Publisher: '  . $this->publisher    . PHP_EOL;
    }	
}

$book = new Book;

echo $book->loudName;