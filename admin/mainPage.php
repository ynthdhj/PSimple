<?PHP
 /*
 �κ��  qq:19512448
 
 */
require($_SERVER['DOCUMENT_ROOT'] . "/config/config.php");
require(DOCUMENT_ROOT . "/auth/adminAuthPage.php");
?>
<FRAMESET 
id=attachucp border=0 frameSpacing=0 rows=* frameBorder=no cols=160,10,*>
  <FRAME 
name=leftFrame src="main_left.php" frameBorder=no noResize 
scrolling=yes><FRAME id=leftbar name=switchFrame 
src="mainswitch.php" noResize scrolling=no>
  <frameset rows="57,*" cols="*" framespacing="0" frameborder="0" border="false" scrolling="yes">
    <frame src="header.php" name="top" scrolling="no">
    <FRAME border=0 
name=mainFrame src="../infoManage/saveInfoPageProxy.action" noResize 
scrolling=yes>
  </frameset>
</frameset>
<noframes>
  <body leftmargin="2" topmargin="0" marginwidth="0" marginheight="0" >
  <p>���������汾���ͣ�������ϵͳҪ��IE5�����ϰ汾����ʹ�ñ�ϵͳ��</p>
  </body>
  </noframes>