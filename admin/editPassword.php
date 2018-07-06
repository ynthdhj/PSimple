<?php
 /*
 段洪杰  qq:19512448
 
 */
require("../config/config.php");
require("../auth/adminAuthPage.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/css0.css" rel="stylesheet" type="text/css">
<title></title>

<script language="javascript">

function checkdata(aform)
	{
	
	if(aform.password.value=="")
		{aform.password.focus();
		alert("请录入密码！");
		return false;
		}	

	
	return true;
	}
</script>

</head>

<body>
<form name="form1" method="post" action="UpdatePasswordAction.php" onSubmit="return checkdata(this)">

  <table width="600" height="115" border=1 align=left cellpadding=3 cellspacing=1 bordercolor="#CCCCCC" bordercolordark="#ffffff">
    <tbody>
      <tr class=S4> 
        <td width="40%" height="22" bgcolor="#6FB7B7"> <div align="center"><font color="#FFFFFF">修改超级用户密码</font></div></td>
      </tr>
      <tr class=S2> 
        <td height="88" valign=top><br> 
          <table width="100%"  border="0" align="center" cellspacing="0">
                 <tr> 
              <td width="142" valign="top"> <div align="right">密 &nbsp;&nbsp;码:</div></td>
              <td valign="top"><input name="password" type="text" id="password"></td>
            </tr>
            <tr> 
              <td height="24" valign="top">&nbsp;</td>
              <td valign="top">&nbsp;</td>
            </tr>
            <tr>
              <td valign="top">&nbsp;</td>
              <td valign="top"><input name="submit"  type="submit" value="修改"> 
                &nbsp; <input name="reset" type="reset"  value="重置"> </td>
            </tr>
          </table>
          <div align="left"><br>
            <br>
          </div>
      </table>

  <div align="center"> </div>
</form>
</body>
</html>

