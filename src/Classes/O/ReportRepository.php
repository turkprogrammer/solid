<?php

/*
*   the principle of Open-Closed principle will be considered, 
*   which says - "project classes should be open for extension,
*   but closed for modification."
*/

namespace App\O;

class ReportRepository
{

    private $report, $saver;

    public function __construct(Report $report, Saver $saver) //вызов класса который реализует интерфейс, гарантия передачи нужного обьекта!
    {
        $this->report = $report;
        $this->saver = $saver;
    }

    public function save()
    {
        $this->saver->save($this->report->renderReport()); // вызов метода из интерфейса
    }
}
