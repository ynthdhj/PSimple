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

class LoginAction extends ActionImpl {

    function __construct() {
        $adminModel = new AdminModel();
        parent::__construct($adminModel);
    }

    public function execute() {

        $adminService = new AdminService();
        $adminModel = parent::getModel();

        $adminEntity = $adminService->isLogin($adminModel);
        if ($adminEntity == null) {
            $message = '<div align="center">用户名和密码错误！<A HREF="login.php"><font color="red"> 请重新登录！</font></A> </div>';
            parent::getController()->viewInclude(ADMIN_LOGIN_PAGE, array("message" => $message));
        } else {
            Session2::login($adminEntity, ADMIN_TYPE);
            parent::getController()->viewGoto(ADMIN_MAIN_PAGE);
        }
    }

}

$loginAction = new LoginAction();
$loginAction->execute();

//echo password_hash("123456", PASSWORD_BCRYPT);
?>