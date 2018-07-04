<HTML><HEAD><TITLE></TITLE>
<META http-equiv=Content-Type content="text/html; charset=gb2312">
<SCRIPT language=javascript>
function switchSysBar(){
	if (parent.document.getElementById('attachucp').cols=="160,10,*"){	
		document.getElementById('leftbar').style.display="";
		parent.document.getElementById('attachucp').cols="0,10,*";		
	}
	else{
		parent.document.getElementById('attachucp').cols="160,10,*";		
		document.getElementById('leftbar').style.display="none"
	}
}
function load(){
    if (parent.document.getElementById('attachucp').cols=="0,10,*"){	
		document.getElementById('leftbar').style.display="";		
	}
}
</SCRIPT>

<META content="MSHTML 6.00.2800.1595" name=GENERATOR></HEAD>
<BODY bgColor=#000000 leftMargin=0 topMargin=0 onload=load() marginheight="0" 
marginwidth="0">
<CENTER>
<TABLE height="100%" cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR>
    <TD width=1 bgColor=#009fef><IMG height=1 src="main_left.images/ccc.gif" 
      width=1></TD>
    <TD id=leftbar style="DISPLAY: none" bgColor=#f5f4f4><A 
      onclick=switchSysBar() href="javascript:void(0);"><IMG height=90 
      alt=展开左侧菜单 src="main_left.images/pic24.gif" width=9 border=0></A></TD>
    <TD id=rightbar bgColor=#f5f4f4><A onclick=switchSysBar() 
      href="javascript:void(0);"><IMG height=90 alt=隐藏左侧菜单 
      src="main_left.images/pic23.gif" width=9 
border=0></A></TD></TR></TBODY></TABLE></CENTER></BODY></HTML>
