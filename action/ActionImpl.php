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

use controller\Controller;
use action\IAction;
use session\Session2;

if (!defined('DOCUMENT_ROOT')) {
    exit("No permission resources");
}
/**
 * Description of newPHPClass
 *
 * @author Administrator
 */
require(DOCUMENT_ROOT . "/controller/Controller.php");
require(DOCUMENT_ROOT . "/action/IAction.php");
require(DOCUMENT_ROOT . "/util/Util.php");

//require(DOCUMENT_ROOT . "/session/Session2.php");

abstract class ActionImpl implements IAction {

    private $model;
    private $controller;

    function __construct($model) {
        \util\Util::copyProperties($_REQUEST, $model);
        $this->model = $model;
        //
        $this->controller = new Controller();
    }

    function isLogin($userModel, $type, $loginPage) {

        $userEntity = Session2::isLogin($userModel, $type, $loginPage);
        if ($userEntity == null) {
            echo("<script>window.location.href='" . $loginPage . "';</script>");
            exit();
        }
        return $userEntity;
    }

    function getModel() {
        return $this->model;
    }

    function getController() {
        return $this->controller;
    }

}
