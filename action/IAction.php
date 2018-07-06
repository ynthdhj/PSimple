<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 /*
 ¶Îºé½Ü  qq:19512448
 
 */

namespace action;

if (!defined('DOCUMENT_ROOT')) {
    exit("No permission resources");
}
/**
 *
 * @author abc
 */
interface IAction {
    //put your code here
    public function execute();
}
