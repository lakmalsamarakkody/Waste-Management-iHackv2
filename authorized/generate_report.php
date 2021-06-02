<?php
include("connection.php");
$deleteQuery=mysqli_query($conn,"DELETE FROM division_garbage");
$deleteQuery=mysqli_query($conn,"DELETE FROM schedule");
$lowEmmissionPerPerson=0.0;//
$midEmmissionPerPerson=0.0;//
$highEmmissionPerPerson=0.0;//

$lowIndustryEmmission=0.0;
$midIndustryEmmission=0.0;
$highIndustryEmmission=0.0;

$divisionId=0;
$population=0;
$standard=0;

$divisionPriority=0;

$totalWasteDivision=0.0;
$currentDate=$_POST['stdate'];
$currentDate=date("Y-m-d", strtotime($currentDate));
$lastDate= date('Y-m-d', strtotime($currentDate. ' + 6 days'));

$query=mysqli_query($conn,"SELECT emmission_per_person,s_id FROM standard");
while($row=mysqli_fetch_assoc($query))
{
		if($row["s_id"]=="1")
		{
			$lowEmmissionPerPerson=$row["emmission_per_person"];	
			
		}
		else if($row["s_id"]=="2")
		{
				$midEmmissionPerPerson=$row["emmission_per_person"];	
		}
		else
		{
				$highEmmissionPerPerson=$row["emmission_per_person"];	
		}
	
}
$query=mysqli_query($conn,"SELECT emmi_id,emmission FROM industry_standard");
while($row=mysqli_fetch_assoc($query))
{
		if($row["emmi_id"]=="1")
		{
			$highIndustryEmmissio=$row["emmission"];	
	
		}
		else if($row["emmi_id"]=="2")
		{
			$midIndustryEmmission=$row["emmission"];	
			
		}
		else
		{
			$lowIndustryEmmission=$row["emmission"];	
		}
}
$query=mysqli_query($conn,"SELECT  d_id,population,standard,weather FROM division");
while($row=mysqli_fetch_assoc($query))
{
	$totalWasteDivision=0.0;
	
	$divisionId=$row["d_id"];
	$population=$row["population"];	
	$standard=$row["standard"];
	if($row["weather"]==1)
	{
		$divisionPriority=1;	
	}
	else if($row["weather"]==2)
	{
		$divisionPriority=2;	
	}
	else
	{
		$divisionPriority=3;	
	}
	
	if($standard==1)
	{
		 $totalWasteDivision=$lowEmmissionPerPerson*$population;	
		 
	}
	else if($standard==2)
	{
		$totalWasteDivision=$midEmmissionPerPerson*$population;
	}
	else
	{
		 
		$totalWasteDivision=$highEmmissionPerPerson*$population;	
	}
		
		$totalWasteDivision*=7;
		
		
		$query2=mysqli_query($conn,"SELECT DISTINCT i_id,grade FROM industry WHERE d_id='$divisionId'");
		while($row2=mysqli_fetch_assoc($query2))
		{
				$grade=$row2["grade"];
				if($grade==1)
				{
					$totalWasteDivision+=$highIndustryEmmissio;	
					
				}
				else if($grade==2)
				{
					$totalWasteDivision+=$midIndustryEmmission;
				}
				else
				{
					$totalWasteDivision+=$lowIndustryEmmission;	
				}
			
			
		}
		$query2=mysqli_query($conn,"SELECT DISTINCT re_id,grading FROM religious_place WHERE d_id='$divisionId'");
		while($row2=mysqli_fetch_assoc($query2))
		{
				$grade=$row2["grading"];
					
				if($grade==1)
				{
					$totalWasteDivision+=15.00;	
				}
				else if($grade==2)
				{
					$totalWasteDivision+=10.00;		
				}
				else
				{
					$totalWasteDivision+=5.00;	
				}
			
		}
	
		$query2=mysqli_query($conn,"SELECT DISTINCT e_id,r_id,significance FROM event WHERE e_date BETWEEN '$currentDate' AND '$lastDate'");
		while($row2=mysqli_fetch_assoc($query2))
		{
			$religionId=$row2["r_id"];
			$significance=$row2["significance"];
				$query3=mysqli_query($conn,"SELECT ratio FROM diversity_ratio WHERE d_id='$divisionId' AND r_id='$religionId'");
					while($row3=mysqli_fetch_assoc($query3))
					{
						$diversitypopulation=0.0;
						$diversityRation=$row3["ratio"];
						$diversitypopulation=$diversityRation*($population/100);
						if($standard==1)
						{
							$diversityEmmission= $lowEmmissionPerPerson*$diversitypopulation;
						}
						else if($standard==2)
						{
								
							$diversityEmmission= $midEmmissionPerPerson*$diversitypopulation;
						}
						else
						{
							$diversityEmmission= $highEmmissionPerPerson*$diversitypopulation;	
						}
						
						if($significance==1)
						{
							$diversityEmmission+=1.2;	
						}
						else if($significance==2)
						{
							$diversityEmmission+=1.4;	
						}
						else
						{
							$diversityEmmission+=1.6;	
						}
						$totalWasteDivision+=$diversityEmmission;
						
					}
					
		
					$query3=mysqli_query($conn,"SELECT re_id,grading,r_id FROM religious_place WHERE d_id='$divisionId' AND r_id='$religionId'");
					while($row3=mysqli_fetch_assoc($query3))
					{
						$placeGrading=$row3["grading"];
						if($placeGrading==1)
						{
							$totalWasteDivision+=7.0;	
							
						}
						else if($placeGrading==2)
						{
							$totalWasteDivision+=3.0;	
							
						}
						else
						{
							$totalWasteDivision+=1.0;
							
						}
						
					}
	
		}
			
		
	$insertQuery=mysqli_query($conn,"INSERT INTO division_garbage(d_id,total_waster,priority)VALUES('$divisionId','$totalWasteDivision',$divisionPriority)");
}


$dayArray =array($currentDate,date('Y-m-d', strtotime($currentDate. ' + 1 days')),date('Y-m-d', strtotime($currentDate. ' + 2 days')),date('Y-m-d', strtotime($currentDate. ' + 3 days')),date('Y-m-d', strtotime($currentDate. ' + 4 days')),date('Y-m-d', strtotime($currentDate. ' + 5 days')),date('Y-m-d', strtotime($currentDate. ' + 6 days')),date('Y-m-d', strtotime($currentDate. ' + 7 days')));
	
	$availabledaycounter=7;
	$collectionarr=array();
	$availableArraypostion=0;

		for($i=0;$i<7;$i++)
		{
			$counter=0;
			$checkdatedate=$dayArray[$i];
			
			$query=mysqli_query($conn,"SELECT 1 FROM event WHERE e_date='$checkdatedate' AND is_holiday='yes'");
			while($row=mysqli_fetch_assoc($query))
			{
				$counter++;	
			}	
			if($counter>0)
			{
				$availabledaycounter--;					
			}
			else
			{
				$collectionarr[$availableArraypostion]=$checkdatedate;
				$availableArraypostion++;
			}
			
		}
		
		$sumoftotalwaste=0.0;
	
		$query=mysqli_query($conn,"SELECT SUM(total_waster) as sumwaste FROM division_garbage");
		while($row=mysqli_fetch_assoc($query))
		{
			$sumoftotalwaste=$row["sumwaste"];
			
			
		}
		
		
		
			foreach( $collectionarr as $dat)
			{
				$maximumwasteperday=($sumoftotalwaste/count($collectionarr))+1;
				$remainingCollectableforDay=$maximumwasteperday;
				$collectionsSegment=0;
				$query=mysqli_query($conn,"SELECT * FROM division_garbage ORDER BY priority ASC ,total_waster DESC");
					while($row=mysqli_fetch_assoc($query))
					{
						$collectionsSegment++;
						$divisiontotalwaste=$row["total_waster"];
						
						$did=$row["d_id"];
						
						
						$remainingCollectableforDay=$maximumwasteperday-$divisiontotalwaste;
						
						if($remainingCollectableforDay<=0)
						{
							$divisiontotalwaste=0-$remainingCollectableforDay;
							
							$updatequery=mysqli_query($conn,"UPDATE division_garbage SET total_waster='$divisiontotalwaste',priority=3 WHERE d_id='$did'");
							$insertQuery=mysqli_query($conn,"INSERT INTO schedule(sdate,time,d_id,tot_waste)VALUES('$dat','$collectionsSegment','$did','$maximumwasteperday')");
							
							break;	
							
						}
						else
						{
							
							$deleteQuery=mysqli_query($conn,"DELETE FROM division_garbage WHERE d_id='$did'");
							$insertQuery=mysqli_query($conn,"INSERT INTO schedule(sdate,time,d_id,tot_waste)VALUES('$dat','$collectionsSegment','$did','$divisiontotalwaste')");
							$maximumwasteperday=$remainingCollectableforDay;
							
						}
						
			
					}
				
				
			}
			
$workerQuery=mysqli_query($conn,"SELECT s_id,tot_waste FROM schedule")or die(mysqli_error($conn));

while($row=mysqli_fetch_assoc($workerQuery))
{
	$amountOfWaste=$row["tot_waste"];
	
	$sid=$row['s_id'];
	$workerCapacity=150;
	$numberOfWorkers=$amountOfWaste/$workerCapacity;
		$updateQuery=mysqli_query($conn,"UPDATE schedule SET workers_req='$numberOfWorkers' WHERE s_id='$sid'") or die(mysqli_error($conn));
	
}


		
include("fpdf181/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image('../images/images.jpg',10,10,-300);
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Domestic Garbage Collection Schedule",0,1,"C");
$pdf->Cell(60,10,"Scheduled Date",0,0);
$pdf->Cell(20,10,"Time",0,0);
$pdf->Cell(50,10,"No of Workers",0,0);
$pdf->Cell(50,10,"Division",0,1);
$pdf->SetFont("Arial","B",14);
$query=mysqli_query($conn,"SELECT * FROM Schedule s, division d WHERE s.d_id=d.d_id ORDER BY sdate ASC");
while($row=mysqli_fetch_assoc($query))
{
	$date=$row['sdate'];
	$time=$row['time'];
	$workers_req=$row['workers_req'];
	if($time=="1")
	{
		$time="8.00AM";	
	}
	else if($time=="2")
	{
		$time="10.00AM";	
	}
	else if($time=="3")
	{
		$time="11.00AM";	
	}
	else if($time=="4")
	{
		$time="12.00 noon";	
	}
	else
	{
		$time="12.00-1.00pm";
	}
	
	$division=$row['d_name'];
	
	$pdf->Cell(60,10,"{$date}",0,0);
	$pdf->Cell(20,10,"{$time}",0,0);
	$pdf->Cell(50,10,"{$workers_req}",0,0,"C");
	$pdf->Cell(50,10,"{$division}",0,1);		
	
}


$pdf->Output();
		
		
		
		
	



?>