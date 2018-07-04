<?php
namespace service;
if (!defined('DOCUMENT_ROOT')) {
    exit("No permission resources");
}

require(DOCUMENT_ROOT ."/service/Service.php");


class AdminService extends Service{
}
?>