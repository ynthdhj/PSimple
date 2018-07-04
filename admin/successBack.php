<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/css0.css" rel="stylesheet" type="text/css">
<script language="javascript">
function RefreshOpener() {
    if (opener){   
	opener.window.location.reload();
	}

	}
</script>
<title>信息提示</title>
</head>

<BODY onunload="RefreshOpener();">
<TABLE width="438" height="126" border=1 align=center cellPadding=3 cellSpacing=1 bordercolor="#CCCCCC" bordercolordark="#ffffff">
  <TBODY>
    <TR class=S4> 
      <TD width="40%" height="22" bgcolor="#6FB7B7"> <div align="center"><font color="#FFFFFF">信息提示</font></DIV></TD>
    </TR>
    <TR class=S2> 
      <TD height="99" vAlign=top><br>
	  
          <table width="257" border="0" align="center" cellspacing="0">
            <tr>
              <td width="255"><div align="center"><?php if(isset($s)) echo $s["message"]; ?> </div></td>
            </tr>
          </table>

        <p align="center"><a href="javascript:history.back()">〖 返回 〗</a> </p></TD>
    </TR>
  </TBODY>
</TABLE>
<p>&nbsp;</p>
</body>
</html>
