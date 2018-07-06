<?php
 /*
 段洪杰  qq:19512448
 
 */
namespace service;

use dao\MysqliDAO;

if (!defined('DOCUMENT_ROOT')) {
    exit("No permission resources");
}
require(DOCUMENT_ROOT . "/dao/MysqliDAO.php");

class Service {

    private $mysqliDAO;

    function __construct() {
        $this->mysqliDAO = new MysqliDAO();
    }

    public function isLogin($adminModel) {

        $username = $adminModel->username;
        $password = $adminModel->password;

        $sql = "select * from admin where username=?";
        $admins = $this->mysqliDAO->select($sql, 1, 0, array($username), $adminModel);
        $adminEntity = null;
        if ($admins != null) {
            $adminEntity = $admins[0];
            $passwd = $adminEntity->password;
            if (!password_verify($password, $passwd)) {
                $adminEntity = null; //密码不对，设为空值
            }
        }
        return $adminEntity;
    }

    public function updatePassword($admin) {

        $password = $admin->password;
        $id = $admin->id;
        $passwordBcrypt = password_hash($password, PASSWORD_BCRYPT);
        $sql = "update admin set password=? where id=?";
        $isUpdate = $this->mysqliDAO->update($sql, array($passwordBcrypt, $id));
        return $isUpdate;
    }

}
