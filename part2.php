<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Strict//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en'>
<head>
<title>Part2</title>
<meta http-equiv='Content-Type' content='text/html' charset='UTF-8' />
<link rel='stylesheet' type='text/css' href='part2.css'></link>
</head>
<body>
<div class="div1">
<h1>part2<br/> Calendar
<?php date_default_timezone_set("America/New_York"); echo date("M-d-Y h:i:s A"); ?></h1>
<table id="table1">
	<tr class="header1">
		<td id="td1">Hours</td><td>Thiru</td><td>Hemanth</td><td>Avinash</td>
	</tr>
<?php
	date_default_timezone_set("America/New_York");
	$hours_to_show=12;
	$hourCounter=0;
	$counter = 0;
	$b=true; 
	$functionDay=date("D", strtotime('+'.$counter.' days'));
function get_hour_string($timestamp){
		$timeStr="";
		if($timestamp>=12&&$timestamp<=23){
			$timeStr.=$timestamp-12;
			$timeStr.=" p.m.";
		}elseif($timestamp==0){
			$timeStr.=12;
			$timeStr.=" a.m.";
		}else{
		$timeStr.=$timestamp;
		$timeStr.=" a.m.";
		}
		return $timeStr;
	}

	?>
<?php
$hours_to_show=12;
	for($j=1;$j<=$hours_to_show;$j++)
		{
		if($b){
			echo "<tr class='even'>";
		}else{
			echo "<tr class='odd'>";
		}
		echo "<td class='td1'>".get_hour_string(date("G", strtotime('+'.$hourCounter.' hours')))."</td>";
		echo "<td class='td1' </td>";
		echo "<td class='td1' </td>";
		echo "<td class='td1' </td>";
		echo "</tr>";
		$hourCounter++;
		$b=!$b;
	}
	
	date_default_timezone_set("America/New_York");
?>
</table>	
</div>	
<p>
<a href="http://jigsaw.w3.org/css-validator/check/referer">
    <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="Valid CSS!" />
    </a>
</p>
<p>

								<a href="http://validator.w3.org/check/referer">
									<img src="http://www.w3.org/Icons/valid-xhtml11" alt="Valid XHTML" />
								</a>
							</p>
       

</body>
</html>


