<?php
header ( " Expires: Mon, 26 Jul 1970 05:00:00 GMT " );
header ( " Last-Modified:" . gmdate ( " D, d M Y H:i:s " ). "GMT " );
header ( " Cache-Control: no-cache, must-revalidate " );
header ( " Pragma: no-cache " );
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/css0.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="jscolor/jscolor.js"></script>
<title></title>
 <script language="JavaScript" src="ajaxpage.js" type="text/JavaScript"></script>
<SCRIPT type="text/javascript" src="uplaodImage.js"></SCRIPT>

<script charset="utf-8" src="/kindeditor/kindeditor.js"></script>
<script>

		
			KE.show({
				id : 'message',
				imageUploadJson : '/kindeditor/jsp/upload_json_indexManage.jsp',
		    	fileManagerJson : '/kindeditor/jsp/file_manager_json_indexManage.jsp',
				cssPath : '/kindeditor/index.css',
				allowFileManager : true,
				afterCreate : function(id) {
					KE.event.ctrl(document, 13, function() {
						KE.sync(id);
						document.forms['form1'].submit();
					});
					KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
						KE.sync(id);
						document.forms['form1'].submit();
					});
				}
			});
	</script>

<script language="javascript">

function isNumberStr(s)
{  
 var n = "0123456789.";
 var i;
 var j = 0;
 if ((s == null) || (s.length == 0 )){
  return false;
 }

 for (i = 0 ; i < s.length ; i++){
  if ( s.charAt(i) == "." )j++;
  var c = s.charAt(i);
  if ( ( n.indexOf(c) == -1) || (j > 1) ){
   return false;
  }
 }
 return true;
}
function checkdata(aform)
	{
	if(aform.tag.value=="")
		{aform.tag.focus();
		alert("��¼���ǩ��");
		return false;
		}
	if(aform.title.value=="")
		{aform.title.focus();
		alert("��¼�����ƣ�");
		return false;
		}

	
	return true;
	}
</script>

</head>

<body>
<div style="margin-left:40px;">
<h1><font color="#408080">�޸�HTML����Ϣ</font></h1>
<hr align="left" width="600" size="1" noshade color="#C0C0C0">
<form name="form1" method="post" action="updateHtmlProxy.action" enctype="multipart/form-data" onSubmit="return checkdata(this)">
 
    <input name="info.id" type="hidden" value="<s:property value='info.id' />">
		  
        <p> 
          ��ǩ: 
          <input id="tag" name="info.tag" type="text" size="50" value="<s:property value='info.tag' />">
        </p>
		<p> 
          ����: 
          <input id="title" name="info.title" type="text"  size="50" value="<s:property value='info.title' />">
        </p>
		<p> 
          ���ú�: 
          <input id="title" name="info.no" type="text"  size="50" value="<s:property value='info.no' />">
        </p>
        <p>
          
          ����(ע������в�Ҫ��body html ���룬��Ҫ�в�������table div�ȴ���):<br>
		  <textarea id="message" name="info.message" style="width:600px;height:300px;visibility:hidden;"> <s:property value='info.message'  escape="false" /></textarea>
         </p>
         <lable>
           <p>����Ŀ��ʽ��������������⣬��ο��������ʽ
           </p>
           <p>
             <textarea id="note" name="info.note" style="width:600px;height:300px;"><s:property value='info.note' />
             </textarea>
           </p>
         </lable>

    <input name="submit" type="submit" value="�ύ">
    <input name="reset" type="reset" value="����">

</form>
</div>
</body>
</html>

