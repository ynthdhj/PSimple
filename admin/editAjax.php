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
		alert("请录入标签！");
		return false;
		}
	if(aform.title.value=="")
		{aform.title.focus();
		alert("请录入名称！");
		return false;
		}

	
	return true;
	}
</script>

</head>

<body>
<div style="margin-left:40px;">
<h1><font color="#408080">修改HTML块信息</font></h1>
<hr align="left" width="600" size="1" noshade color="#C0C0C0">
<form name="form1" method="post" action="updateHtmlProxy.action" enctype="multipart/form-data" onSubmit="return checkdata(this)">
 
    <input name="info.id" type="hidden" value="<s:property value='info.id' />">
		  
        <p> 
          标签: 
          <input id="tag" name="info.tag" type="text" size="50" value="<s:property value='info.tag' />">
        </p>
		<p> 
          名称: 
          <input id="title" name="info.title" type="text"  size="50" value="<s:property value='info.title' />">
        </p>
		<p> 
          调用号: 
          <input id="title" name="info.no" type="text"  size="50" value="<s:property value='info.no' />">
        </p>
        <p>
          
          内容(注意代码中不要有body html 代码，不要有不完整的table div等代码):<br>
		  <textarea id="message" name="info.message" style="width:600px;height:300px;visibility:hidden;"> <s:property value='info.message'  escape="false" /></textarea>
         </p>
         <lable>
           <p>本栏目样式，如果更新有问题，请参考下面的样式
           </p>
           <p>
             <textarea id="note" name="info.note" style="width:600px;height:300px;"><s:property value='info.note' />
             </textarea>
           </p>
         </lable>

    <input name="submit" type="submit" value="提交">
    <input name="reset" type="reset" value="重置">

</form>
</div>
</body>
</html>

