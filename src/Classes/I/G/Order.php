<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\I\G;

/**
 * Description of Order
 *
 * @author Yunus
 */
class Order implements Orderinterface, Paymentinterface, Shipmentinterface, Discountinterface {

    /** Клиент не должен зависить от методов, которые он не использует! */
    public function getClientInfo() {
        
    }
    /** Клиент не должен зависить от методов, которые он не использует! */
    public function getTotlaPrice() {
        
    }

    public function getDiscount() {
        
    }

    public function getPaymentMethod() {
        
    }

    public function getShipmentMethod() {
        
    }

}
