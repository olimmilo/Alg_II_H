<!DOCTYPE html>
<html>
<body>

<?php
	import math;
	function rad2deg(radians){
		pi = math.pi;
		degrees = 180 * radians / pi;
		return degrees;
	}
	function deg2rad(degrees){
		pi = math.pi;
		radians = pi * degrees / 180;
		return radians;
	}
	$E=float(input("Input the measure of the vertical angle (E): "));
	$A=float(input("Input the measure of the azimuth angle (A): "));
	$H=float(input("Input the height (Z): "));
	$Xl=40.6;
	$Yl=-106;
	$Zl=0;
	$B=61;
	$Rr=((($Xl-(($H/(math.tan(deg2rad(90-$E))))*(math.sin(deg2rad(90-$A)))))**2)+(($Yl-(($H/(math.tan(deg2rad(90-$E))))*(math.sin(deg2rad($A)))))**2)+(($Zl-($H-$B))**2))**(1/2);
	$ELEV=90-rad2deg(math.asin(($H-61)/$Rr));
	$Xp=(($H/(math.tan(deg2rad(90-$E))))*(math.sin(deg2rad(90-$A))));
	$Yp=(($H/(math.tan(deg2rad(90-$E))))*(math.sin(deg2rad($A))));
	if ($Xp > 0 and $Yp > 0) {
	    $QUAD="First";
	    $AZIM=rad2deg(math.atan((Yl-Yp)/(Xl-Xp)));
	}
	elseif ($Xp > 0 and $Yp < 0) {
	    $QUAD="Fourth";
	    $AZIM=rad2deg((math.atan((Yl-Yp)/(Xl-Xp))))+360;
	}
	elseif ($Xp < 0 and $Yp < 0) {
	    $QUAD="Third";
	    $AZIM=(rad2deg(math.atan((Yl-Yp)/(Xl-Xp))))-180;
	}
	elseif ($Xp < 0 and $Yp > 0) {
	    $QUAD="Second";
	    $AZIM=(rad2deg(math.atan((Yl-Yp)/(Xl-Xp))))+180;
	}
	elseif ($Xp == 0 and $Yp > 0) {
	    $QUAD="Special";
	    $AZIM=90;
	}
	elseif ($Xp == 0 and $Yp < 0) {
	    $QUAD="Special";
	    $AZIM=90;
	}
	elseif ($Xp == 0 and $Yp == 0) {
	    $QUAD="Special";
	    $AZIM=Undefined;
	}
	elseif ($Xp > 0 and $Yp == 0) {
	    $QUAD="Special";
	    $AZIM=0;
	}
	elseif ($Xp < 0 and $Yp == 0) {
	    $QUAD="Special";
	    $AZIM=0;
	else:
	    $QUAD="Undetermined";
	    $AZIM="Undetermined";
	}
	
	echo "The quadrant in which the projection point falls is the".$QUAD
	echo "The measure of the vertical angle of the beacon relative to the antenna:".$ELEV."\u00b0";
	echo "The azimuth of the beacon relative to the antenna:".$AZIM."\u00b0";
	echo "The range of the beacon relative to the antenna:".$Rr."meters";
?>

</body>
</html>
