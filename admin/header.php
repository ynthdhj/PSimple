<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>管理系统</title>
<link href="images/css0.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.line {
	border-bottom-width: 1px;
	border-bottom-style: dotted;
	border-bottom-color: #FFFFFF;
}
-->
</style>
<script type="text/javascript" src="jquery-1.8.2.min.js"></script>

</head>

<body leftmargin="0" topmargin="0">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="images/Admin_BgTop.gif" class="line">
  <tr> 
    <td width="46" height="56">&nbsp; </td>
    <td width="732">
	<!--
	<a href="mainPage.jsp" target=_top>资讯中心</a>  |  <a href="vodImageMainPage.jsp" target=_top>视频、图片</a> | 
	-->
	<b>
	<a href="mainPage.php" target=_top>资讯中心</a>  |  <a href="tranMainPage.php" target=_top>业务中心</a>
    </b>
    </td>
    
    <td width="558"><table width="0" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col"><img src="images/time/space.gif" name="one"><img src="images/time/space.gif" name="two"><img src="images/time/dgon.gif" name="three"><img src="images/time/space.gif" name="four"><img src="images/time/space.gif" name="five"><script language="javascript">
<!--//
img = new Array()
for(var i=0; i <= 14; i++) {
img[i] = new Image()
}
img[1].src = "images/time/dg0.gif"
img[2].src = "images/time/dg1.gif"
img[3].src = "images/time/dg2.gif"
img[4].src = "images/time/dg3.gif"
img[5].src = "images/time/dg4.gif"
img[6].src = "images/time/dg5.gif"
img[7].src = "images/time/dg6.gif"
img[8].src = "images/time/dg7.gif"
img[9].src = "images/time/dg8.gif"
img[10].src = "images/time/dg9.gif"
img[11].src = "images/time/dgon.gif"
img[12].src = "images/time/dgoff.gif"
img[13].src = "images/time/dgam.gif"
img[14].src = "images/time/dgpm.gif"
var base = "images/time/dg"
var space = "images/time/space.gif" 
var per = false

function go() {
per = true
start()
}

function start() {
if(per == true) {
var now = new Date()
var hours = now.getHours();
hours = (hours > 12) ? hours + "" : hours + ""
hours = (hours < 10) ? "0" + hours : hours + ""
var minutes = now.getMinutes();
minutes = (minutes < 10) ? "0" + minutes : minutes + ""
var seconds = now.getSeconds();
seconds = (seconds < 10) ? "0" + seconds : seconds + ""
document.one.src = (hours.charAt(0)=="0") ? space : add(hours.charAt(0))
document.two.src = add(hours.charAt(1))
document.four.src = add(minutes.charAt(0))
document.five.src = add(minutes.charAt(1))
setTimeout("start()",1000)
}
}

secflag=1;
function secondgo()
{
document.three.src = (secflag % 2) ? add("on") : add("off")
if (secflag==1)
{	secflag=2;}
else
{	secflag=1;}
setTimeout("secondgo()",500);
}

function add(it) {
return base + it + ".gif"
}
go();
secondgo();
//-->
//-->
</script></th>
    <th scope="col">&nbsp;</th>
  </tr>
</table>
</td>
  </tr>
</table>
</body>
</html>
