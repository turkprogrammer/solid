<?php
/*
* the principle of sole responsibility, which provides for only one specific task, one specific class.
* Or, to rephrase somewhat, a class should have only one reason to change
*/

namespace App\S;

class Report
{
    public function  getDoctor()
    {
        return "Doctor";
    }

    public function getPatient()
    {
        return "Patient";
    }

    public function getData()
    {
        return "Data";
    }
    /*
    * нарушение 1 принципа солид
    */
    public function renderReport()
    {
        return $this->getDoctor() . '<br/>' . $this->getPatient() . '<br/>' . $this->getData();
    }
    /*
    * нарушение 1 принципа солид
    */
    public function save()
    {
        $filename = 'report' . $this->getDoctor() . ' - ' . $this->getPatient() . '.txt';
        file_put_contents($filename, $this->renderReport()); // записываем содержимое отчета
    }

    public function export()
    {
        //
    }
}
/*
$obj = new Report;
echo $obj->getDoctor();*/
