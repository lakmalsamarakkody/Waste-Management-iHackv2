<!DOCTYPE>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
</script>
	<link rel="stylesheet" type="text/css" href="../css/styles.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#000000" onLoad="document.body.classList.add('loaded')">
	<div id="mainSections" style="background:url(../images/green_image.png)">	
    	
    	<table width="100%" height="100%" border="1px">
        	<tr>
            	<td width="300px">
                
                <table width="100%" height="500px" align="center">
                    	<tr height="200px" align="center">
                        	<td>
                            <a href="#event">
                    	<div id="btn">
                        ADD EVENT<br>
                        <img src="../images/add_image.png" width="80px" height="90px" style="margin-top:25px"/>
                        </div></a>
                            </td>
                        </tr>
                        <tr height="200px" align="center">
                        	<td>
                            <a href="#industry">
                    	<div id="btn" style="background-color:#75B465">
                        MAKE REQUEST
                         <img src="../images/request.png" width="80px" height="90px" style="margin-top:25px"/>
                        </div></a>
                            </td>
                        </tr>
                        <tr height="200px" align="center">
                        	<td>
                            <a href="">
                    	<div id="btn">
                        VIEW SCHEDULE
                        </div></a>
                            </td>
                        </tr>
                    </table>
                
                </td>
                <td valign="top" align="center">
                	<span id="welcome " style="color:#FFF">
                    	Welcome Yehen Tennakoon
                    </span><br><br><br>
                    <span style="font-size:18px;color:#FFF">Garbage Collection schedule for 23rd September 2016 2016 to  1st October 2016 </span>
                    <br>
                    <table width="600px" border="0" cellpadding="1" cellspacing="1" height="100px" style="background-color:rgba(32,174,43,0.6);color:#FFF">
                    	 <tr align="center" height="40px" style="background-color:rgba(0,0,0,0.6)">
                        	<td width="200px">Date</td>
                            <td width="200px">Session</td>
                            <td width="200px">Division</td>
                        </tr>
                         <tr align="center" height="40px" style="background-color:rgba(0,0,0,0.6)">
                        	<td width="200px">12/03/2016</td>
                            <td width="200px">8.00AM</td>
                            <td width="200px">Watarappola</td>
                        </tr>
                        <tr align="center" height="40px" bgcolor="#009933" style="background-color:rgba(0,0,0,0.6)">
                        	<td width="200px">12/03/2016</td>
                            <td width="200px">10.00PM</td>
                            <td width="200px">Dakshinarama</td>
                        </tr>
                        <tr align="center" height="40px" style="background-color:rgba(0,0,0,0.6)">
                        	<td width="200px">13/03/2016</td>
                            <td width="200px">8.00PM</td>
                            <td width="200px">Hill Street</td>
                        </tr>
                    </table>
                	
                
                </td>
                <td width="350px" valign="top">
                <?php
				include("../calendar.php");
				?>
                <br>
                <div id="msg_btn">
                <span id="notification">
                1
                </span>
                </div>
                </td>
            </tr>
        </table>
    </div>
    <div id="mainSections" style="background:url(../images/perehara.png)">
    	 <a name="event"></a>
        <header align="center"><span style="font-size:22px">ADD EVENT</span></header>
    
   
    	<table width="800px" height="auto" style="background-color:rgba(0,0,0,0.8);border 3px inset;font-size:16px;color:#FFF;border-radius:15px" align="center">
        <form action="" method="post">
        <tr height="100px" align="center">
        	<td>
            EVENT NAME
            </td>
            <td>
            <input type="text" name="event" id="txtbx" required/>
            </td>
        </tr>
         <tr height="100px" align="center">
        	<td>
            EVENT DATE
            </td>
            <td>
            <input type="date" name="date" id="txtbx" required/>
            </td>
        </tr>
         <tr height="100px" align="center">
        	<td>
           RELIGION
            </td>
            <td>
            <select required name="religion" id="txtbx">
            	<option value="1">Buddhist</option>
                <option value="2">Hindu</option>
                <option value="3">Islam</option>
                <option value="4">Christian</option>
            </select>
            </td>
        </tr>
        <tr>
        	<td colspan="2" align="right">
            	<input type="submit" name="addEvent" id="loginbtn"/><input type="reset" id="loginbtn"/>
            </td>
        </tr>
        </form>
        </table>
    </div>
    <div id="mainSections" style="background-color:#CACED0">
    <a name="industry"></a>
    <header align="center"><span style="font-size:22px">INDUSTRY REQUESTS</span></header>
    	<table width="600px" align="center" style="background-color:rgba(23,23,23,0.8);border-radius:15px" >
        <form action="" method="post">
        <tr height="100px">
        	<td>
            INDUSTRY NAME
            </td>
            <td>
            	<input type="text" name="iname" id="txtbx" required/>
            </td>
        </tr>
        <td>
            COLLECTION DATE
            </td>
            <td>
            	<input type="date" name="cdate" id="txtbx" required/>
            </td>
        </tr>
         <tr height="100px">
        <td>
            GARBAGE TYPE
            </td>
            <td>
            	<select required id="txtbx">
                	<option value="1">Solid</option>
                    <option value="2">Liquid</option>
                    <option value="3">Celemic</option>
                </select>
            </td>
        </tr>
         <tr height="100px">
        <td>
            CONTACT NUMBER
            </td>
            <td>
            	<input type="number" name="cnumber" id="txtbx" required/>
            </td>
        </tr>
          <tr height="100px">
        <td>
            Approximate Amount of Garbage
            </td>
            <td>
            	<input type="text" name="cnumber" id="txtbx" required/>
            </td>
        </tr>
        <tr height="100px">
        	<td colspan="2" align="right">
            	<input type="submit" name="resquesSubmit" value="SUBMIT" id="loginbtn"/><input type="reset" value="RESET" id="loginbtn"/>
            </td>
        </tr>
        </form>
        </table>
    </div>
</body>
</html>