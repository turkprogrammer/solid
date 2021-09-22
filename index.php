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
$repository = new ReportRepository($report, new DataBaseSave("localhost", 'root', 'root', 'solid'));
$repository->save();
