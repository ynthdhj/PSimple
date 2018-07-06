<?php
 /*
 ¶Îºé½Ü  qq:19512448
 
 */
use model\AdminModel;
use session\Session2;

if (!defined('DOCUMENT_ROOT')) {
    exit("No permission resources");
}
require(DOCUMENT_ROOT . "/model/AdminModel.php");
require(DOCUMENT_ROOT . "/session/Session2.php");

$adminModel = new AdminModel();
$adminEntity = Session2::isLogin($adminModel,ADMIN_TYPE);  
if ($adminEntity==null) {
    echo("<script>window.location.href='".ADMIN_LOGIN_PAGE."';</script>");
    exit();
}
?>