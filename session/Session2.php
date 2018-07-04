<?php

namespace session;

if (!defined('DOCUMENT_ROOT')) {
    exit("No permission resources");
}

require_once (DOCUMENT_ROOT . "/lib/adodb5/session/adodb-session2.php");
\ADOdb_Session::config("mysqli", DB_HOSTNAME, DB_USER, DB_PASSWORD, DB_DATABASE, "sessions2", $options = false);

class Session2 {

    public static function login($userModel, $type, $authAll = NULL) {
        session_start();
        $_SESSION[$type . '_islogin'] = true; //登录后,将登录状态设为真
        $_SESSION[$type . '_id'] = $userModel->id;
        $_SESSION[$type . '_username'] = $userModel->username;  //保存用户名
        $_SESSION[$type . '_authAll'] = $authAll; //为NULL 所有模块访问权限
    }

    public static function loginOut($type) {
        session_start();
        $_SESSION[$type . '_islogin'] = false;
        $_SESSION[$type . '_id'] = NULL;
        $_SESSION[$type . '_username'] = NULL;  
        $_SESSION[$type . '_authAll'] = NULL;
    }

    public static function isLogin($userModel, $type, $auth = NULL) {
        session_start();
        $islogin = @$_SESSION[$type . '_islogin'];
        $id = @$_SESSION[$type . '_id'];
        $name = @$_SESSION[$type . '_username'];
        $authAll = @$_SESSION[$type . '_authAll'];
        if ($islogin) {
            if ($authAll != NULL) {
                if (strpos($authAll, $auth)==false) //是否有分级权限
                    return null;
            }
            $userModel->islogin=$islogin;
            $userModel->id=$id;
            $userModel->name=$name;
            $userModel->authAll=$authAll;
            return $userModel;
        } else {
            return null;
        }
    }

}

?>