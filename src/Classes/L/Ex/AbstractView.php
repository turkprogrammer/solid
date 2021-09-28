<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\L\Ex;

use Exception;

/**
 * Description of AbstractView
 *
 * @author Yunus
 */
abstract class AbstractView {
    
    public $content; //public чтобы получить доступ
    protected $_template;

    /** @var AbstractView $this */
    public function __construct($template = null) {
       $this->content = $content;
        $this->template = $template;

        if ($template !== null) {
            $this->setTemplate($template);
        }
    }

    /*
     *  @var $template template name 
     */

    public function setTemplate($template) {
        $template = TEMPLATE . '/templates' . DIRECTORY_SEPARATOR . $template;
        if (!file_exists($template)) {
            throw new Exception('Invalid template');
        }
        $this->_template = $template;
    }

    /** @var AbstractView $this */
    public function getTemplate() {
        return $this->_template;
    }

    /** @var AbstractView $this */
    protected function _render() {
        if ($this->_template !== null) {//ксли свойстово не содржит null
            extract(['content' => $this->content]); //
            ob_start(); //буферизируем вывод
            include $this->_template; //подключаем шаблон
            return ob_get_clean(); //все что хранится в буфере возвращаем
        }

        return '';
    }

    /** @var AbstractView $this */
    abstract public function addView(AbstractView $view);

    abstract public function addViews(array $views); //список шаблонов

    abstract public function render(); //для обработки видов
}
