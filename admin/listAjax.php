<?php
 /*
 �κ��  qq:19512448
 
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
  <script language="JavaScript" src="ajaxpage.js" type="text/JavaScript"></script>
<script language="JavaScript">
<!--
<!-- ȫѡ���ж� -->
function CheckAll()
{
	var val=document.form1.checkall.checked;
	for (var i=0;i<document.form1.elements.length;i++)
	{
		var e = document.form1.elements[i];
		if  (e.name != 'checkall')
			e.checked = val;
	}
}
<!-- ѡ��δѡ�ж� -->
function check()
{
	var RecordsCount=0;
	for (var i=0;i<document.form1.elements.length;i++)
	{
		var e = document.form1.elements[i];
	if (e.name != 'checkall' && e.checked)
	RecordsCount++;
	}
	if(!RecordsCount)
	{
	alert("�㻹ûѡ��Ҫɾ���ļ�¼��");
	return false;
	}
	return confirm("��ȷ��Ҫɾ����ѡ��ļ�¼��");
}
// -->
</script>

</head>

<body>
<table width="800"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr> 
    <td height="73"><br> 
      <h1><font color="#408080">HTML����Ϣ�б�</font> </h1></td>
  </tr>
</table>
<hr width="800" size="1" noshade>
<form name="form1" method="post" action="deleteHtmlProxy!check.action" target="_blank">
  <table width="800"  border=1 align=center cellpadding=3 cellspacing=1 bordercolor="#CCCCCC" bordercolordark="#ffffff">
    <tbody>
      <tr class=S4> 
        <td height="20" colspan="7" bgcolor="#6FB7B7"> <div align="center"><font color="#FFFFFF">�����Ϣ</font></div></td>
      </tr>
      <tr> 
        <td width="31" height="20"> <div align="center">���</div></td>
		 <td width="93"> <div align="center">��ǩ</div></td>
        <td width="198"> <div align="center">����</div></td>
	    <td width="56"> <div align="center">���ú�</div></td>
        <td width="100"><div align="center">¼��ʱ��</div></td>

        <td width="30"><div align="center">�޸�</div></td>
        <td width="26"center">ɾ��</div></td>
      </tr>
      <s:iterator id="info" value="infos" status="status"> 
      <tr  onMouseOver=this.style.backgroundColor="#FFCC99" onMouseOut=this.style.backgroundColor="#ffffff"> 
        <td width="31" height="22"><div align="center">&nbsp;<s:property value="#status.count" /></div></td>
		<td> <div align="center">&nbsp;<a href="viewHtmlProxy.action?id=<s:property value='id' />" target=_blank><s:property value="tag" /> 
            </a> </div></td>
        <td> <div align="center">&nbsp;<a href="viewHtmlProxy.action?id=<s:property value='id' />" target=_blank><s:property value="title" /> 
            </a> </div></td>
		<td> <div align="center">&nbsp;<a href="viewHtmlProxy.action?id=<s:property value='id' />" target=_blank><s:property value="no" /> 
            </a> </div></td>
        <!--  yyyy-MM-dd HH:mm:ss -->
        <td width="100"><div align="center">&nbsp;<s:date name="createDate"  format="yyyy-MM-dd"/></div></td>

        <td width="30"><div align="center"><a href="editHtmlProxy.action?id=<s:property value='id' />" target=_blank>�޸�</a></div></td>
        <td width="26"><div align="center"> 
            <input type="checkbox" name="delete" value="<s:property value='id'/>">
          </div></td>
      </tr>
      </s:iterator> 
  </table>
  <table border="1" cellspacing="1" height="30" bordercolor="#CCCCCC" align="center" width="308">
    <tr>
	  <td height="19" width="85" > 
		<input type="checkbox" name="checkall" value="yes" onClick="CheckAll();">
	  ȫѡ</td>
	  <td  height="19" width="101" > 
		<input type="submit" value="ɾ����ѡ��¼" onClick="return check();" name="Submit" >
	</td>
	  <td  height="19" width="104"> 
		<input type="reset" value="ȡ����ѡ��¼" >
      </td>
    </tr>
  </table> 
</form>

<div align="center">�� <s:property value='page.maxPage' /> ҳ (<s:property value='page.count' /> 
  ����¼) ��<s:property value='page.curPage' />ҳ <s:property value='page.backPage' escape="false"/> 
  <s:property value="page.getLinkPage(10)" escape="false"/>��<s:property value='page.nextPage' escape="false"/> 
</div>

  
</body>
</html>
 
