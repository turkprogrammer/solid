<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\I\B;

/**
 * Description of QuickOrder
 *
 * @author Yunus
 */
class QuickOrder implements Orderable {

    //put your code here
    public function getClientInfo() {
        return "Phone";
    }

    /** Клиент не должен зависить от методов, которые он не использует! */
    public function getComment() {
        throw new \Exception("Error comment");
    }

    /** Клиент не должен зависить от методов, которые он не использует! */
    public function getDiscount() {
        throw new \Exception("Error discount");
    }

    /** Клиент не должен зависить от методов, которые он не использует! */
    public function getPaymentMethod() {
        throw new \Exception("Error payment");
    }

    /** Клиент не должен зависить от методов, которые он не использует! */
    public function getShipmentMethod() {
        throw new \Exception("Error shipment");
    }

    public function getTotlaPrice() {
        return 100;
    }

}
