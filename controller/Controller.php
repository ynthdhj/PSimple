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
 �κ��  qq:19512448
 
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

    public function viewTmp($file, $s) {

        $tmp = new Tmp();
        $tmp->template_dir = DOCUMENT_ROOT . "/template"; //����ģ��Ŀ¼
        $tmp->compile_dir = DOCUMENT_ROOT . "/template_c"; //���ñ���Ŀ¼
        for ($i = 0; $i < count($s); $i++) {
            $keys = array_key($s);
            $tmp->assign($keys[$i], $s[$i]);
            $tmp->display(DOCUMENT_ROOT . $file);
        }
    }

}
