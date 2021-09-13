<?php

namespace App\S;

class Report{
    public function  getDoctor(){
        return "Doctor";
    }

    public function getPatient(){
        return "Patient";
    }

    public function getData(){
        return "Data";
    }

    public function renderReport(){
        echo $this->getDoctor().'<br/>'. $this->getPatient().'<br/>'. $this->getData().'<br/>'
    }
}