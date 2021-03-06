<?php
 /*
 段洪杰  qq:19512448
 
 */
use model\AdminModel;
use action\ActionImpl;
use service\AdminService;
use session\Session2;

require($_SERVER['DOCUMENT_ROOT'] . "/config/config.php");
require(DOCUMENT_ROOT . "/lib/dao.php");
require(DOCUMENT_ROOT . "/lib/tmp.php");

require(DOCUMENT_ROOT . "/model/AdminModel.php");
require(DOCUMENT_ROOT . "/action/ActionImpl.php");
require(DOCUMENT_ROOT . "/service/AdminService.php");
require(DOCUMENT_ROOT . "/session/Session2.php");

class UpdatePasswordAction extends ActionImpl {

    var $userModel;

    function __construct() {
        $adminModel = new AdminModel();
        parent::__construct($adminModel);

        $this->userModel = parent::isLogin($adminModel, ADMIN_TYPE, ADMIN_LOGIN_PAGE);  //此页认证,通不过认证在父类中退出
    }

    public function execute() {

        $adminService = new AdminService();
        $adminModel = parent::getModel();

        $adminModel->id = $this->userModel->id;

        $isUpdate = $adminService->updatePassword($adminModel);
        if (!$isUpdate) {
            $message = "密码修改错误！";
            parent::getController()->viewInclude("/admin/errorBack.php", array("message" => $message));
        } else {
            $message = "密码修改成功！";
            parent::getController()->viewInclude("/admin/successBack.php", array("message" => $message));
        }
    }

}

$updatePasswordAction = new UpdatePasswordAction();
$updatePasswordAction->execute();
?>