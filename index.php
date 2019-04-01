<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Dept {
    
    private $dept = [
        1 => 'Finance',
        2 => 'Sales',
        3 => 'Software Development',
        4 => 'Software Testing'
    ];

    public function deptCount() {
        return count($this->dept);
    }
}