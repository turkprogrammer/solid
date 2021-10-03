<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\I\B;

/**
 * Description of Order
 *
 * @author Yunus
 */
class Order implements Orderable{
    //put your code here
    public function getClientInfo() {
        return "Email, Phone";
    }

    public function getComment() {
        return "Comment";
    }

    public function getDiscount() {
        return 50;
    }

    public function getPaymentMethod() {
        return "Webmoney";
    }

    public function getShipmentMethod() {
        return "Post";
    }

    public function getTotlaPrice() {
        return 100;
    }

}
