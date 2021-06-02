<!DOCTYPE>
<html>
<head>
<?php
	include("connection.php");
?>
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
    	<a name="topsection"></a>
    	<table width="100%" height="100%" border="1px">
        	<tr>
            	<td width="300px">
                
                <table width="100%" height="500px" align="center">
                    	<tr height="200px" align="center">
                        	<td>
                            <a href="#event">
                    	<div id="btn">
                        DIVISION<br>
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
                            <a href="#report">
                    	<div id="btn">
                        Generate Schedule
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
     <header align="center"><span style="font-size:22px"> ADD DIVISION</span></header>
    	<table width="500px" height="300px" align="center">
            <tr height="300px">
            	<td colspan="3" align="center">
                <object data="division_table.php" width="600px" height="200px"> <embed src="division_table.php" width="600px" height="200px"> </embed> Error: Embedded data could not be displayed. </object>
                </td>
            </tr>
        </table>
        <table width="800px" height="auto" style="color:#FFF" align="center">
        <form action="add_division.php" method="post">
        	<tr>
            	<td>Division Name</td>
                <td><input type="text" name="dName" id="txtbx"/></td>
                <td>Population</td>
                <td><input type="number" name="population" id="txtbx"/></td>
            </tr>
            <tr>
            	<td>Standard</td>
                <td><select id="txtbx" required name="standard">
                		<option value="1">Low</option>
                        <option value="2">Medium</option>
                        <option value="3">High</option>
                	</select>
                   
                </td>
               
            </tr>
            <tr align="center">
            	 
          	<td colspan="4">
            	<fieldset>
                    	<legend>Diversity Ratio</legend>
            
                        Buddhist<input type="number" name="budratio" id="txtbx"/>% 
                        Hindu<input type="number" name="hidratio" id="txtbx"/>% 	
                        <br><br>
                        Islam &nbsp;&nbsp;&nbsp;&nbsp;<input type="number" name="islratio" id="txtbx"/>% 
                        Christian<input type="number" name="chrratio" id="txtbx"/>% 
             	</fieldset>
            </td>
            </tr>
            <tr align="right">
            	<td colspan="4">
                	<input type="submit" value="ADD" id="loginbtn" name="addDivision"/><input type="reset" value="RESET" id="loginbtn"/>
                </td>
            </tr>
            </form>
        </table>
        <a href="#topsection">
         <table align="right" style="background-color:rgba(240,240,240,0.3);width:60px;height:60px;color:#FFF;font-size:35px;border-radius:60px">
        	<tr>
            	<td align="center">
                	^
                </td>
            </tr>
        </table>
        </a>
       
    </div>
    <div id="mainSections" style="background-color:#CACED0">
    <a name="industry"></a>
    <header align="center"><span style="font-size:22px"> ADD INDUSTRY</span></header>
    	<table width="600px" height="auto" align="center">
        <tr>
        	<td>
    	  <object data="industry_table.php" width="600px" height="150px"> <embed src="industry_table.php" width="600px" height="150px"> </embed> Error: Embedded data could not be displayed. </object>
         	</td>
         </tr>
         </table>
    	<table width="600px" align="center" style="background-color:rgba(23,23,23,0.8);border-radius:15px" >
        <form action="" method="post">
        <tr height="100px">
        	<td>
            DIVISION
            </td>
            <td>
            	<select name="industry_div" id="txtbx">
            	<?php
					$query=mysqli_query($conn,"SELECT DISTINCT d_id,d_name FROM division");
					while($row=mysqli_fetch_assoc($query))
					{
						
				?>
                	<option value="<?php echo $row["d_id"];?>"><?php echo $row['d_name']; ?></option>
                <?php
					}
				?>
            	
                	
                </select>
            </td>
        </tr>
        <td>
            INDUSTRY NAME
            </td>
            <td>
            	<input type="ind_name" name="cdate" id="txtbx" required/>
            </td>
        </tr>
         <tr height="100px">
        <td>
            GARBAGE TYPE
            </td>
            <td>
            	<select required id="txtbx">
                	<?php
						$query=mysqli_query($conn,"SELECT DISTINCT type_id,type_name FROM garbage_type");
						while($row=mysqli_fetch_assoc($query))
						{
					?>
                	<option value="<?php echo $row["type_id"];?>">S</option>
                    
                	<?php
						}
					?>
                </select>
            </td>
        </tr>
         <tr height="100px">
        <td>
            EMMISSION GRADE
            </td>
            <td>
            	<select required name="i_grade" id="txtbx">
                	<option value="1">High</option>
                    <option value="2">Medium</option>
                    <option value="3">Low</option>
                    
                	
                </select>
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
    <div id="mainSections" style="background:url(../images/perehara.png)">
     <header align="center"><span style="font-size:22px"> ADD RELIGIOUS PLACE</span></header>
     	<table width="700px" align="center">
        	<tr>
            	<td>
                	 <object data="religious_place_table.php" width="600px" height="200px"> <embed src="religious_place_table.php" width="600px" height="200px"> </embed> Error: Embedded data could not be displayed. </object>
                </td>
            </tr>
        </table>
        <table width="800px" height="auto" align="center" style="background-color:rgba(0,0,0,0.6);border-radius:15px;color:#FFF">
        	<form action="" method="post">
            <tr height="20px" align="center">
            	<td>
                	DIVISION
                </td>
                <td>
                	<select required name="division" id="txtbx">
                    	<option value=""></option>
                        <option>Mount Lavinia</option>
                        <option>Dakshinarama</option>
                        <option>Hill Street</option>
                    </select>
                </td>
            </tr>
            <tr height="20px" align="center">
            	<td>
                	NAME
                </td>
                <td>
                	<input type="text" name="place_name" id="txtbx" required/>
                </td>
            </tr>
            <tr height="20px" align="center">
            	<td>
                	RELIGION
                </td>
                <td>
                	<select required name="religion_place" id="txtbx">
  						<option value="">---</option>
                        <option>Buddhism</option>
                        <option>Hinduism</option>
                        <option>Islam</option>
                       	<option value="">Christianity</option>
                    </select>
                </td>
            </tr>
            <tr height="20px" align="center">
            	<td>
                	EMMISSION GRADE
                </td>
                <td>
                	<select required name="division" id="txtbx">
                    	<option value=""></option>
                        <option>Mount Lavinia</option>
                        <option>Dakshinarama</option>
                        <option>Hill Street</option>
                    </select>
                </td>
            </tr>
            <tr>
            	<td colspan="2" align="right">
                	<input type="submit" id="loginbtn" value="Submit"/>
                    <input type="reset" id="loginbtn" value="RESET"/>
                </td>
            </tr>
            </form>
        </table>
     
    
    </div>
    <div id="mainSections" style="background-color:#999">
    <a name="report"></a>
     <header align="center"><span style="font-size:22px">GENERATE SCHEDULE</span></header>
    	<table width="700px" align="center">
        	<tr>
            	<td>
                	 <object data="religious_place_table.php" width="600px" height="200px"> <embed src="religious_place_table.php" width="600px" height="200px"> </embed> Error: Embedded data could not be displayed. </object>
                    
                    
                </td>
            </tr>
        </table>
        <table width="800px" height="auto" align="center" style="background-color:rgba(0,0,0,0.7);color:#FFF;border-radius:15px">
        	<tr height="40px">
            	<td>
                SELECT DIVISION
                </td>
                <td>
                <?php
				$query=mysqli_query($conn,"SELECT DISTINCT d_id,d_name FROM division");
				?>
                	<select required name="division" id="txtbx">
                    	<?php
						while($row=mysqli_fetch_assoc($query))
						{
							?>
                            <option value="<?php echo $row["d_id"];?>"><?php echo $row["d_name"] ?></option>
                            
							<?php
						}
						?>
                    </select>
                </td>
               
            </tr>
            <tr>
            	<td>
                	WEATHER CONDITION
                </td>
                <td>
                	<select name="weather" id="txtbx">
                    	<option value="1">RAINY</option>
                        <option value="2">WET</option>
                    </select>
                </td>
            </tr>
            <tr align="right">
            	<td colspan="2"><input type="submit" value="Submit" id="loginbtn"/></td>
            </tr>
        </table>
        <form action="generate_report.php" method="post">
        <table width="800px" height="150px" align="center" >
        	<tr align="center">
            	<td>
                	START DATE<input type="date" id="txtbx" name="stdate"/>
                	<input type="submit" name="report" value="GENERATE SCHEDULE" id="loginbtn"/>
                </td>
            </tr>
        </table>
        </form>
    </div>
</body>
</html>