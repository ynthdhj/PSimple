<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gbk">
<title>管理登陆</title>
<style type="text/css">
.style2 {font-size: 12px}
.style3 {font-size: 14px}
.STYLE4 {color: #FFFFFF}
a:link {
	color: #FFFFFF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #FFFFFF;
}
a:hover {
	text-decoration: underline;
	color: #FFFFFF;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.001 {
	height: 20px;
	border: 1px solid #CCCCCC;
	font-size: 12px;
}
body,td,th {
	font-size: 12px;
}
</style>
<script language="JavaScript">
<!--
//功能：去掉字符串前后空格
//返回值：去掉空格后的字符串
function fnRemoveBrank(strSource)
{
 return strSource.replace(/^\s*/,'').replace(/\s*$/,'');
}
function check(myform)
{
if (fnRemoveBrank(myform.username.value)=="")
{
alert("请输入用户名！");
myform.username.focus();
return(false);
}
if(myform.password.value=="")
{
alert("请输入密码！");
myform.password.focus();
return(false);
}
}
-->
</script>

</head>
<body>
  <br>
  <br>
  <br>
<form name="form1" method="post" action="loginAction.php" onSubmit="return check(this)">
  <table width="653" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td width="13"></td>
      <td width="640" valign="bottom"><table width="98%" border="0" cellspacing="0" cellpadding="0">
          <tr> 
            <td width="50%" height="22" align="center" bgcolor="f5f5f5"><strong>　后台管理系统 </strong></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <table width="653" height="283" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr> 
      <td height="283" valign="top" background="images/bjj.gif"><p><br>
      </p>
        <table width="63%" border="0" align="center" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF" style="border:1px #cccccc solid">
          <tr align="center"> 
            <td width="105" rowspan="2"><img src="images/123.jpg" width="115" height="85"></td>
            <td width="89" height="42"><span class="style2">管理员帐号</span></td>
            <td width="195"><div align="left"> 
                <input name="username" type="text" id="username">
              </div></td>
          </tr>
          <tr align="center"> 
            <td width="89" height="37"><span class="style2">管理员密码</span></td>
                      <td><div align="left"> 
                <input name="password" type="password" id="password">
              </div></td>

          </tr>
          <tr> 
            <td colspan="3" align="center" height=28> <input type="submit" name="Submit3" value=" 确 认 " class="input1" > 
              &nbsp;&nbsp;&nbsp; <input type="reset" name="Submit2" value=" 重 填 " class="input1"></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
<?php
if(isset($s)) echo $s["message"]; 
?>
</body>
</html>
