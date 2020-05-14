<?php
$numbers = range(9, 110);
foreach ($numbers as $number){
if ($number%9==0 || $number%19==0){
echo "<div class='even'>$number</div>";
}else{
echo "<div class='odd'>$number</div>";
}
}
?>
<style>
		.even{
				width: 70px;
				height: 70px;
				background-color:green;
				color:black;
				text-align: center;
				display: inline-block;
				line-height: 50px;
				font-size: 150%;
				margin:10px;
				border-radius: 50%;
		}
		.odd{
				width: 70px;
				height: 70px;
				background-color:navajowhite;
				color:black;
				text-align: center;
				display: inline-block;
				line-height: 50px;
				font-size: 150%;
				margin:10px;
				border-radius: 50%;
		}
</style>
