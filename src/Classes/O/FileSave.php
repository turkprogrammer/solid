<?php

namespace App\O;

class FileSave implements Saver
{
    private $filepath;

    public function __construct($filepath)
    {
        $this->filepath = $filepath;
    }
    public function save($data)
    {
        file_put_contents($this->filepath, $data);
    }
}
