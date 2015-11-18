<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TimeSheet {

    public $id = "";
    public $search = "";
    public $startDate = "";
    public $endDate = "";
    public $startTime = "";
    public $endTime = "";
    public $totalHours = "";
    public $comment = "";

    public function validate() {
        if ($this->search != "") {
            return true;
        } else {
            return false;
        }
    }

    public function toString() {

        return "search: $search";
    }

}

?>