<?php
	include("connection.php")
?>
<html>
	<head>
    	
    </head>
    <body>
    	<table width="600px" height="auto" style="color:#FFF" border="0" cellspacing="1" bgcolor="#CCCC00">
        	<tr height="30px" align="center"> 
            	<td>
                	Place ID
                </td>
                <td>
                	 Name
                </td>
                <td>
                	Division
                </td>
                <td>
                	Religion
                </td>
                <td>
                	Grade
                </td>
                <td>
                	Action
                </td>
            </tr>
            <?php
				if($conn)
				{
					$query=mysqli_query($conn,"SELECT p.re_id,p.place,p.grading,r.r_name,d.d_name FROM religious_place p,division d,race r WHERE p.r_id=r.r_id AND p.d_id=d.d_id");
					while($row=mysqli_fetch_assoc($query))
					{
					?>
                <tr bgcolor="#339933" height="30px" align="center">
                	<td>
                    	<?php echo $row["re_id"] ?>
                    </td>
                    <td>
                    	<?php echo $row["place"] ?>
                    </td>
                    <td>
                    	<?php echo $row["d_name"] ?>
                    </td>
                    <td>
                    	<?php echo $row["r_name"] ?>
                    </td>
                     <td>
                    	<?php echo $row["grading"] ?>
                    </td>
                     <td>
                    	
                    </td>
                </tr>
                    <?php	
					}	
					
				}
			?>
        </table>
    </body>
</html>