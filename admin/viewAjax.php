<?php
 /*
 段洪杰  qq:19512448
 
 */
header ( " Expires: Mon, 26 Jul 1970 05:00:00 GMT " );
header ( " Last-Modified:" . gmdate ( " D, d M Y H:i:s " ). "GMT " );
header ( " Cache-Control: no-cache, must-revalidate " );
header ( " Pragma: no-cache " );
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/css0.css" rel="stylesheet" type="text/css">
<title></title>
<script charset="utf-8" src="/kindeditor/kindeditor.js"></script>
		<script>


			KE.show({
				id : 'message',
				resizeMode : 0,
				afterCreate : function(id) {
					KE.toolbar.disable(id, []);
					KE.readonly(id);
					KE.g[id].newTextarea.disabled = true;
				}
			});
		</script>
</head>

<body>
<h1><font color="#408080">显示HTML块</font></h1>
<hr align="left" width="500" size="1" noshade color="#C0C0C0">
<br>
<TABLE width="617" height="223" border=0 align=left cellPadding=3 cellSpacing=1>
  <TBODY>
    <TR> 
      <TD width="50%" height="219" vAlign=top> 
	  <table width="108%"  border="0" align="center" cellspacing="0">
	    
	            <tr> 
            <td width="103" height="29" valign="top"> <div align="right">标签:</div></td>
            <td valign="top"><input  type="text" class="INPUT3" value="<s:property value='info.tag' />" size="40" readonly></td>
          </tr>
		      <tr> 
            <td width="103" height="29" valign="top"> <div align="right">名称:</div></td>
            <td valign="top"><input  type="text" class="INPUT3" value="<s:property value='info.title' />" size="40" readonly></td>
          </tr>

    <tr> 
            <td width="103" height="29" valign="top"> <div align="right">调用号:</div></td>
            <td valign="top"><input  type="text" class="INPUT3" value="<s:property value='info.no' />" size="40" readonly></td>
          </tr>


                <tr> 
            <td width="103" valign="top"> <div align="right">内容:</div></td>
            <td valign="top"> 
		
         <textarea id="message" name="message" style="width:550px;height:400px;visibility:hidden;">
				<s:property value='info.message'  escape="false" />
		</textarea>      </td>
          </tr>
                   
        </table>
        <p align="center"><a href="javascript:window.close()">〖 关闭 〗</a> </p>
	  </td></tr>
</table>
<p></p>
</body>
</html>


