<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Theme{
    public $theme = "";
    public function validate(){
        if($this->theme !=""){
            return true;
        } else{
            return false;
        }
    }
    public function toString(){
        return "Theme: $this->theme";
    }
}

?>