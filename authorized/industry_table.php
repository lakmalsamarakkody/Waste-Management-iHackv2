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
                	Industry ID
                </td>
                <td>
                	 Name
                </td>
                <td>
                	Grade
                </td>
                <td>
                	Garbage Type
                </td>
                <td>
                	Division
                </td>
                <td>
                	Action
                </td>
            </tr>
            <?php
				if($conn)
				{
					$query=mysqli_query($conn,"SELECT i.i_id,i.i_name,i.grade,d.d_name,t.type_name FROM industry i, division d,garbage_type t WHERE i.d_id=d.d_id AND i.g_id=t.type_id");
					while($row=mysqli_fetch_assoc($query))
					{
					?>
                <tr bgcolor="#339933" height="30px" align="center">
                	<td>
                    	<?php echo $row["i_id"] ?>
                    </td>
                    <td>
                    	<?php echo $row["i_name"] ?>
                    </td>
                    <td>
                    	<?php echo $row["grade"] ?>
                    </td>
                    <td>
                    	<?php echo $row["type_name"] ?>
                    </td>
                     <td>
                    	<?php echo $row["d_name"] ?>
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