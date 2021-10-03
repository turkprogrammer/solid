<?php

use App\O\DataBaseSave;
use App\O\FileSave;
use App\O\Report as OReport;
use App\O\ReportRepository;
use App\S\HtmlTemplate;
use App\S\PhpTemplate;
use App\S\Report;

require "vendor/autoload.php";

//$report = new Report;
//$template = new PhpTemplate;

//$template->render($report->renderReport());

//создаем обьект репозитория
$report = new OReport();
//$repository = new ReportRepository($report, new FileSave('file.txt'));
//Выбираем стратигию сохранение данных либо через FileSave || DataBaseSave, испоьзуем активный интерфейс
/*$repository = new ReportRepository($report, new DataBaseSave("localhost", 'root', 'root', 'solid'));
$repository->save();*/

/*
 * SOLID principles.  Liskov Substitution Principle
 */
/*
$rect = new App\L\Rectangle();
$rect ->setWidth(5);
$rect->setHeight(4);
echo $rect->area();
 * 
 */

/*
 * Нарушение 3 принципа СОЛИД Б.Лисков:
 * скрытое нарушение открытости/закрытости 
 * обьекты в любом приложении должны быть заменяемы их наследника без изменения их клиентского кода!
 * 
 */
/*
define("TEMPLATE", __DIR__);
$layout = new App\L\Ex\CompositeView();///Error add views ,inherited classes can override the methods of the parent class, but only so as not to change the existing functionality in the client code.

$header = new \App\L\Ex\PartialView('header.php');
$header->content = "Header content";

$body = new \App\L\Ex\PartialView('body.php');
$body->content = "Body content";

$footer = new \App\L\Ex\PartialView('footer.php');
$footer->content = "Footer content";

$layout->addViews([
    $header,
    $body,
    $footer,
]);

echo $layout->render();
*/
$order = new App\I\B\QuickOrder();
echo $order->getClientInfo();