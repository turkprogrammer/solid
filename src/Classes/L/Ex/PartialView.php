<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\L\Ex;

/**
 * Description of PartialView
 *
 * @author Yunus
 */
class PartialView extends AbstractView {

    //put your code here
    public function addView(AbstractView $view) {
        throw new \Exception("Error add view");
    }

    public function addViews(array $views) {
        throw new \Exception("Error add views array"); ///Error add views ,inherited classes can override the methods of the parent class, but only so as not to change the existing functionality in the client code.
    }

    public function render() {
        return $this->_render();
    }

}
