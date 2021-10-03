<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\I\B;

interface Orderable {

    function getPaymentMethod();

    function getShipmentMethod();

    function getDiscount();

    function getTotlaPrice();

    function getClientInfo();

    function getComment();
}
