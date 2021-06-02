<!DOCTYPE>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#000000" onLoad="document.body.classList.add('loaded')">
	<div id="mainSections" style="background:url(images/colombo-sri-lanka.jpg)">	
    	<header align="center"><h2>Garbage Management System</h2></header>
    	<table width="800px" height="400px" id="loginTable">
        	<form action="authorized/staff_home.php" method="post">
        	<tr>
            	<td colspan="2" align="left" style="font-size:22px" valign="top">Staff Log-in</td>
            	
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
                </td>
            </tr>
            </form>
        </table>
    </div>
</body>
</html>