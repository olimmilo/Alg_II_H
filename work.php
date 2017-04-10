<html>
  <body>
    <p> 
      <?php
        $E=floatval($_POST["E"]);
        $A=floatval($_POST["A"]);
        $H=floatval($_POST["H"]);
        $Xl=40.6;
        $Yl=-106;
        $Zl=0;
        $B=61;
        $Zp=$H-$B;
        $Xp=(($H/(tan(deg2rad(90-$E))))*(sin(deg2rad(90-$A))));
        $Yp=(($H/(tan(deg2rad(90-$E))))*(sin(deg2rad($A))));
        $Zpl=pow(($Zl-$Zp),2);
        $Ypl=pow(($Yl-$Yp),2);
        $Xpl=pow(($Xl-$Xp),2);
        $Rr=pow((($Xpl)+($Ypl)+($Zpl)),0.5);
        $ELEV=90-rad2deg(asin(($H-61)/$Rr));
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
        }
      ?>
      
      The measure of the vertical angle of the beacon relative to the antenna: <?php echo $ELEV; ?> &deg; <br>
      The azimuth of the beacon relative to the antenna: <?php echo $AZIM; ?> &deg; <br>
      The range of the beacon relative to the antenna: <?php echo $Rr; ?> meters
    </p>
  </body>
</html>
