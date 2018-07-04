<?php

use model\AdminModel;
use action\ActionImpl;
use service\AdminService;
use session\Session2;

require($_SERVER['DOCUMENT_ROOT'] . "/config/config.php");
require(DOCUMENT_ROOT . "/lib/adodb5/adodb.inc.php");
require(DOCUMENT_ROOT . "/lib/smarty-3.1.30/libs/Smarty.class.php");

require(DOCUMENT_ROOT . "/model/AdminModel.php");
require(DOCUMENT_ROOT . "/action/ActionImpl.php");
require(DOCUMENT_ROOT . "/service/AdminService.php");
require(DOCUMENT_ROOT . "/session/Session2.php");

class UpdatePasswordAction extends ActionImpl {

    var $userModel;

    function __construct() {
        $adminModel = new AdminModel();
        parent::__construct($adminModel);

        $this->userModel = parent::isLogin($adminModel, ADMIN_TYPE, ADMIN_LOGIN_PAGE);  //��ҳ��֤,ͨ������֤�ڸ������˳�
    }

    public function execute() {

        $adminService = new AdminService();
        $adminModel = parent::getModel();

        $adminModel->id = $this->userModel->id;

        $isUpdate = $adminService->updatePassword($adminModel);
        if (!$isUpdate) {
            $message = "�����޸Ĵ���";
            parent::getController()->viewInclude("/admin/errorBack.php", array("message" => $message));
        } else {
            $message = "�����޸ĳɹ���";
            parent::getController()->viewInclude("/admin/successBack.php", array("message" => $message));
        }
    }

}

$updatePasswordAction = new UpdatePasswordAction();
$updatePasswordAction->execute();
?>