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

	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#000000" onLoad="document.body.classList.add('loaded')">
	
	<div id="mainSections" style="background:url(images/colombo-sri-lanka.jpg)">	
    	<header align="center"><h2>Garbage Management System</h2></header>
    	<table width="800px" height="400px" id="loginTable">
        	<form action="authorized/public_home.php" method="post">
        	<tr>
            	<td colspan="2" align="left" style="font-size:22px" valign="top">General Log-in</td>
            	
            </tr>
            <tr>
            	<td style="font-size:20px">
                <span style="padding-left:20px">Username</span>
                </td>
                <td>
                	<input type="text" name="uname" required id="txtbx"/>
                </td>
            </tr>
            <tr>
            	<td style="font-size:20px">
                <span style="padding-left:20px">Password</span>
                </td>
              <td>
               	<input type="password" name="pass" id="txtbx" required/>
                </td>
            </tr>
            <tr>
           	  <td colspan="2" align="right">
                	<input type="submit" name="submit" value="Log-in" id="loginbtn"/>
                    <br>
                    <a href="#register">Register Now!!!</a>
                </td>
            </tr>
            </form>
        </table>
    	
    </div>
    <div id="mainSections" style="background-color:#B9BBB5">
    	<header align="center" style="color:#000"><span style="font-size:24px">Register Now...</span></header>
        <a name="register"]></a>
        <form action="" method="post">
        <table width="800px" height="500px" align="center">
        	<tr>
            	<td>First Name</td><td><input type="text" name="fname" required id="txtbx"/></td>
            </tr>
            <tr>
            	<td>Last Name</td><td><input type="text" name="lname" required id="txtbx"/></td>
            </tr>
            <tr>
            	<td>NIC No</td><td><input type="text" name="nic" required id="txtbx" size="10" pattern="^\d{9}(X|V)$"/></td>
            </tr>
            <tr>
            	<td>Email *(will be used as your username)</td><td><input type="email" name="email" required id="txtbx"/></td>
            </tr>
            <tr>
            	<td>Password</td><td><input type="password" name="pass" id="txtbx" main="7"/></td>
            </tr>
              <tr>
            	<td>Confirm Password</td><td><input type="password" name="cpass" id="txtbx" min="7"/></td>
            </tr>
             <tr>
            	<td>Suburb</td><td> <select required id="txtbx">
                					<option value="">----</option>
                                    </select></td>
            </tr>
            <tr>
            	<td colspan="2" align="center"><input type="submit" name="reg" value="Register" id="loginbtn"/>&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset Feilds" id="loginbtn"/></td>
            </tr>
            
        </table>
       
        </form>
        <br>
        *Please Note that you will be sent to your email for verification you will be registered to the system only after the mentioned e-mail is verified. 
    </div>
</body>
</html>