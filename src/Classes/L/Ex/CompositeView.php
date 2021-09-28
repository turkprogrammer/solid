<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\L\Ex;

/**
 * Description of CompositeView
 *
 * @author Yunus
 */
class CompositeView extends AbstractView {

    protected $_views = array(); //набор обьектов другого вида

    public function addView(AbstractView $view) {
        $this->_views[] = $view;
        return true;
    }

    public function addViews(array $views) {
        foreach ($views as $view) {
            $this->addView($view);
        }
    }

    public function render() {
        $output = "";
        if(!empty($this->_views)){
            foreach ($this->_views as $view) {
               $output .= $view->render(); 
            }
        }
        $output .= $this->_render();
        return $output;
    }

}
