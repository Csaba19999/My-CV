<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tablazat_php
 *
 * @author Csabi
 */
class Tablazat {
    function __construct() {
        $this->alma=("alma");
    }

    public function alma($alma) {
        echo 'Ez egy PHP-s parancs '.$alma;
    }
}
