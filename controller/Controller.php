<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Administrator
 */
 /*
 段洪杰  qq:19512448
 
 */
namespace controller;

if (!defined('DOCUMENT_ROOT')) {
    exit("No permission resources");
}

class Controller {



    public function viewGoto($file) {
        echo("<script>window.location.href='$file';</script>");
    }
    
       public function viewInclude($file, $s=null) {
        include(DOCUMENT_ROOT . $file);
    }

    public function viewSmarty($file, $s) {

        $smarty = new Smarty();
        $smarty->template_dir = DOCUMENT_ROOT . "/template"; //设置模板目录
        $smarty->compile_dir = DOCUMENT_ROOT . "/template_c"; //设置编译目录
        for ($i = 0; $i < count($s); $i++) {
            $keys = array_key($s);
            $smarty->assign($keys[$i], $s[$i]);
            $smarty->display(DOCUMENT_ROOT . $file);
        }
    }

}
