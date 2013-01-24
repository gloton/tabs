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
<title>BrainJar.com: Tabs Demo</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<link href="css/default.css" rel="stylesheet" type="text/css" />
<link href="css/predifinido.css" rel="stylesheet" type="text/css" />
<style type="text/css">
/******************************************************************************
* Additional styles.                                                          *
******************************************************************************/

h4#title {
  background-color: #503080;
  border: 1px solid #000000;
  border-color: #7050a0 #b090e0 #b090e0 #7050a0;
  color: #d0b0ff;
  font-weight: bold;
  margin-top: 0em;
  margin-bottom: .5em;
  padding: 2px .5em 2px .5em;
}

</style>
<script type="text/javascript" src="js/activo.js" ></script>
</head>
<body>
<div class="tabBox" style="clear:both;">
  <div class="tabArea">
    <a class="tab" href="tabs-paginas/action.html" target="tabIframe2">Action</a>
    <a class="tab" href="tabs-paginas/simulation.html" target="tabIframe2">Simulation</a>
    <a class="tab" href="tabs-paginas/sports.html" target="tabIframe2">Sports</a>
    <a class="tab" href="tabs-paginas/roleplaying.html" target="tabIframe2">Role-Playing</a>
  </div>
  <div class="tabMain">
    <h4 id="title">Top Picks</h4>
    <div class="tabIframeWrapper">
    	<iframe class="tabContent" name="tabIframe2" src="tabs-paginas/action.html" marginheight="8" marginwidth="8" frameborder="0"></iframe>
    </div>
  </div>
</div>

</body>
</html>