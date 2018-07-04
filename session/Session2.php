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
        $_SESSION[$type . '_islogin'] = true; //��¼��,����¼״̬��Ϊ��
        $_SESSION[$type . '_id'] = $userModel->id;
        $_SESSION[$type . '_username'] = $userModel->username;  //�����û���
        $_SESSION[$type . '_authAll'] = $authAll; //ΪNULL ����ģ�����Ȩ��
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
                if (strpos($authAll, $auth)==false) //�Ƿ��зּ�Ȩ��
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