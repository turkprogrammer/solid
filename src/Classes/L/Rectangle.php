<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\L;

/**
 * Description of Rectangle
 *
 * @author Yunus
 */
class Rectangle {
    
    protected $width;
    protected $height;
    public function __construct($width = 0, $height = 0) {
        $this->width = $width;
        $this->height = $height;
    }
    public function setWidth($width): void {
        $this->width = $width;
    }

    public function setHeight($height): void {
        $this->height = $height;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function area(){
        return $this->width*$this->height;
    }

}
