<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--************************************************************************-->
<!--* Tabs Demo                                                            *-->
<!--*                                                                      *-->
<!--* Copyright 2002 by Mike Hall                                          *-->
<!--* Please see http://www.brainjar.com for terms of use.                 *-->
<!--*                                                                      *-->
<!--* Note: A transitional DTD is needed due to the use of link targets.   *-->
<!--************************************************************************-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Tabs para tattersal</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link href="css/default.css" rel="stylesheet" type="text/css" />
<link href="css/predifinido.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/******************************************************************************
* Additional styles.                                                          *
******************************************************************************/

#tabs-mev {
	width: 760px;
}
div.tabArea {
	background: url("images/bg_wrap_tabs.jpg") repeat-y scroll 0 0 transparent;
	padding-bottom: 0px;
	padding-top: 7px;
}
/*reescritura*/
a.tab, a.tab:visited {
	background: url("images/bg_tab_inactive.jpg") repeat-x scroll 0 3px #BCBCBC;
	color: #FFFFFF;
	display: inline-block;
	font-family: 'Arial Narrow','Nimbus Sans L',sans-serif;
	font-size: 18px;
	height: 40px;
	line-height: 36px;
	margin: 0 5px;
	padding: 0;
	text-align: center;
	width: 240px;
}
a.tab.activeTab {
    padding-bottom: 4px;
    top: 1px;
    z-index: 102;
}
a.tab.activeTab, a.tab.activeTab:hover, a.tab.activeTab:visited {
	background: url("images/bg_tab_active.jpg") repeat-x scroll 0 3px transparent;
	height: 45px;
    border-color: #B090E0 #7050A0 #7050A0 #B090E0;
    color: #FFFFFF;
}

div.tabMain {
	background-color: transparent;
	border-top: 4px solid #ABC700;
	border-right: 2px solid #EDEDED;
	border-left: 2px solid #EDEDED;
	border-bottom: 2px solid #EDEDED;
	height: 890px;
	padding: 0;
}
div.tabMain h4 {
	margin: 0;
}
a.tab {
	border-width: 0;
}

iframe.tabContent {
    -moz-border-bottom-colors: none;
    -moz-border-left-colors: none;
    -moz-border-right-colors: none;
    -moz-border-top-colors: none;
    background-color: #9070C0;
    border-color: #7050A0 #B090E0 #B090E0 #7050A0;
    border-image: none;
    border-style: solid;
    border-width: 0px;
    height: 890px;
    width: 100%;
}
</style>
<script type="text/javascript" src="js/activo.js" ></script>
</head>
<body>
<div id="tabs-mev" class="tabBox" style="clear:both;">
	<div class="tabArea">
		<a class="tab" href="tabs-paginas/action.html" target="tabIframe2">Remates</a>
		<a class="tab" href="tabs-paginas/simulation.html" target="tabIframe2">Venta Directa</a>
		<a class="tab" href="tabs-paginas/sports.html" target="tabIframe2">Remate On-Line</a>
	</div>
	<div class="tabMain">
	<div class="tabIframeWrapper">
		<iframe class="tabContent" name="tabIframe2" src="tabs-paginas/action.html" marginheight="8" marginwidth="8" frameborder="0"></iframe>
	</div>
	</div>
</div>

</body>
</html>