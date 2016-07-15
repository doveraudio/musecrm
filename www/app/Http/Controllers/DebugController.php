<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

Class DebugController extends BaseController {
    
    
    public static function excecute(){
        
        $results = [];
        
        $text = "";
        
        $text = eval(Input::Get('code'));
        return $text."<br />";
    }
    
}