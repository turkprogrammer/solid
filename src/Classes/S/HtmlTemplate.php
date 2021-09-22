<?php

namespace App\S;

class HtmlTemplate implements Template{

    /*
    * принимает данные в виде строки,1 прична для изменения, изменение вывода формата
    */
    function render($data){
        echo '<h1>'.$data.'</h1>';
    }
}