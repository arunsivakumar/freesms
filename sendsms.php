<HTML>
<HEAD>
</HEAD>
<BODY>
 <font face="verdana">
<?php
if(isset($_POST["btn_submit"])){
	require_once('classSms.php');
     $ob = new Sms($_POST["txt_username"],$_POST["txt_password"]);
    $message=$ob->sendSMSToMany($_POST["txt_mobno"],$_POST["ta_msg"]);
    echo "<div style=\"color:red;\">$message</div>";
    }
<p id="tagline" style="font-size: 30px" align="center"><font color="grey">SMS India</font></p>
<p id="tagline" style="font-size: 12px" align="center"> <font color="grey">Free SMS service to cell phones in India</font></p>
<form method="post" name="InstantSMS" style="" action="http://www.aswinanand.com/sendsms.php">
<BR>
<BR>
<table align="center" >
	<tr>
		<td><input type="hidden" name="txt_username" value="8940338740"/></td>
	</tr>
	<tr>
		<td><input type="hidden" name="txt_password" value="arun"/></td>
	</tr>
	<tr>
		<td>Cell Number (+91):</td>
		<td><input type="text" name="txt_mobno"/></td>
	</tr>
	<tr>
		<td>Message : </td>
		<td><textarea name="ta_msg"></textarea></td>
	</tr>
	<tr>     <td></td>
		<td colspan="67"> <input type="submit" value="Send SMS" name="btn_submit"/></td>
	</tr>
</table>
</form>
</font>
<br><br><br><br>
  <hr>
<font face="arial" size="2">
  <div id="footer">
<p align="center">
  Disclaimer: This web application has been built as a lab exercise using <a href="http://code.google.com/webtoolkit/">GWT</a> and <a href="http://code.google.com/appengine/">Google App Engine</a>.It uses <a href="http://www1.way2sms.com/">Way2SMS</a> as an SMS gateway. Please do not use if you are vary of privacy issues.
</p>  
<br>
<p align="center">� 2012 <a href="http://facebook.com/aruns.nos">Arun Sivakumar.</a> </p> 
  </div> 
</font>
</BODY>
</HTML>
