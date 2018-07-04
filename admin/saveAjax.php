<?php
//header ( " Expires: Mon, 26 Jul 1970 05:00:00 GMT " );
//header ( " Last-Modified:" . gmdate ( " D, d M Y H:i:s " ). "GMT " );
//header ( " Cache-Control: no-cache, must-revalidate " );
//header ( " Pragma: no-cache " );
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>录入信息</title>
<script type="text/javascript" src="jscolor/jscolor.js"></script>
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
	if(aform.no.value=="")
		{aform.no.focus();
		alert("请录入编号！");
		return false;
		}	
	if (aform.no.value!=""&&!isNumberStr(aform.no.value))
		{aform.no.focus();
	    alert("编号只能为数字！");
		return false;
		}
	
	return true;
	}
</script>

<link href="images/css0.css" rel="stylesheet" type="text/css">

</head>

<body>

<table width="90%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="89"> <h1><font color="#408080">　<br>
        录入HTML块信息</font></h1>
      <hr align="left" width="600" size="1" noshade color="#C0C0C0"></td>
  </tr>
  <tr>
    <td height="50"><form action="saveAjaxAction.php" method="post" enctype="multipart/form-data" name="form1"  onsubmit="return checkdata(this)">
        <p> 
          标签: 
          <input id="tag" name="tag" type="text" size="50">
        </p>
		<p> 
          名称: 
          <input id="title" name="title" type="text" size="50">
        </p>
		<p> 
		
          调用号: 
          <input id="no" name="no" type="text" size="50">
        </p>
        <p>
          
          内容(注意代码中不要有body html 代码，不要有不完整的table div等代码):<br>
		  <textarea id="message" name="message" style="width:600px;height:300px;visibility:hidden;"> </textarea>
         </p>
         <p>
          
          本栏目样式，如果更新有问题，请参考下面的样式 :<br>
		  <textarea id="note" name="note" style="width:600px;height:300px;"> </textarea>
         </p>
		   <p> 
          <input name="submit" type="submit" value="提交">
          <input name="reset" type="reset" value="重置">
        </p>
         
      </form></td>
  </tr>
</table>


</body>
</html>
