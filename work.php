<html>
  <body>
    <p> 
      <?php
        $E=floatval($_POST["E"]);
        $A=floatval($_POST["A"]);
        $H=floatval($_POST["Z"]);
        $Xl=40.6;
        $Yl=-106;
        $Zl=0;
        $B=deg2rad(61);
        /* $Rr=((($Xl-(($H/(tan(deg2rad(90-$E))))*(sin(deg2rad(90-$A)))))**2)+(($Yl-(($H/(tan(deg2rad(90-$E))))*(sin(deg2rad($A)))))**2)+(($Zl-($H-$B))**2))**(1/2);
        $ELEV=90-rad2deg(asin(($H-61)/$Rr));
        $Xp=(($H/(tan(deg2rad(90-$E))))*(sin(deg2rad(90-$A))));
        $Yp=(($H/(tan(deg2rad(90-$E))))*(sin(deg2rad($A))));
        if ($Xp > $Xl and $Yp > $Yl) {
            $AZIM=rad2deg(atan((Yl-Yp)/(Xl-Xp)));
        } elseif ($Xp < $Xl and $Yp < $Yl) {
            $AZIM=(rad2deg((atan((Yl-Yp)/(Xl-Xp)))))+180;
        } elseif ($Xp < $Xl and $Yp > $Yl) {
            $AZIM=180-(rad2deg((atan((Yl-Yp)/(Xl-Xp)))));
        } elseif ($Xp > $Xl and $Yp < $Yl) {
            $AZIM=360-(rad2deg((atan((Yl-Yp)/(Xl-Xp)))));
        } elseif ($Yp == $Yl) {
            $AZIM="Undefined";
         } elseif ($Xp == $Xl) {
            $AZIM="0";
        } */
      ?>
      
      The measure of the vertical angle of the beacon relative to the antenna: <?php echo $B; ?> &deg; <br>
      The azimuth of the beacon relative to the antenna: <?php echo $B; ?> &deg; <br>
      The range of the beacon relative to the antenna: <?php echo $B; ?> meters
    </p>
  </body>
</html>
