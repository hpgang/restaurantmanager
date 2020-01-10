<!DOCTYPE html>
<html lang="de" >
<head>
  <meta charset="UTF-8">
  <title>Table Plan</title>
  <link rel="stylesheet" href="<?php echo Config::get('URL'); ?>css/tischreservierung/tischreservierung.css" />
</head>
<body>
<form action="/html/reservieren/tabledatabase/" method="post" id="tischreservierung"> </form>
<table class="tisch1" width=90% height=100%>
  <tr>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
  </tr>
  <tr>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch4" colspan="4" rowspan="2" class="tisch">
    <?php
        $tischnummer="4";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?>     
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch6" colspan="4" rowspan="2" class="tisch">
    <?php
        $tischnummer="6";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
  </tr>
  <tr>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch1" colspan="2" class="tisch">
    <?php
        $tischnummer="1";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch 2" colspan="2" class="tisch">
    <?php
        $tischnummer="2";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?>
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch3" colspan="2" class="tisch">
    <?php
        $tischnummer="3";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch5" colspan="2" class="tisch">
    <?php
        $tischnummer="5";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch7" colspan="2" class="tisch" >
    <?php
        $tischnummer="7";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch8" colspan="2" class="tisch">
    <?php
        $tischnummer="8";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch9" colspan="2" class="tisch">
    <?php
        $tischnummer="9";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>

  </tr>
  <tr>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    
  </tr>
  <tr>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch10" colspan="2" class="tisch">
    <?php
        $tischnummer="10";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch12" colspan="2" rowspan="2" class="tisch">
    <?php
        $tischnummer="12";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch13" colspan="2" rowspan="2" class="tisch">
    <?php
        $tischnummer="13";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="res" id="bar" colspan="10" rowspan="2">Bar</td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch14" colspan="2" rowspan="2" class="tisch">
    <?php
        $tischnummer="14";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch 15" colspan="2" rowspan="2"class="tisch">
    <?php
        $tischnummer="15";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch16" colspan="2" class="tisch">
    <?php
        $tischnummer="16";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
  </tr>
  <tr>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="tisch11" class="tisch" colspan="2">
    <?php
        $tischnummer="11";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td id="Tisch17" colspan="2" class="tisch">
    <?php
        $tischnummer="17";
        $tischname="Tisch ".$tischnummer;
        $pdo = new mysqli("localhost", "root", "lbs2019", "huge");

        mysqli_select_db($pdo, "huge");
        $tischresult = mysqli_query($pdo, "SELECT * FROM tisch1 WHERE tisch1.`tisch-nummer` = '$tischnummer'");  
        $row = mysqli_fetch_array($tischresult);
        $result = $row['reserviert'];

        if($result=='0'){
          ?>
          <button type="submit" name="tischnummer" value="<?php $tischnummer;?>" form="tischreservierung" class="inv"><?php echo $tischname;?></button>
          <?php
        }
        elseif($result=='1'){
          ?>
          <button type="button" class="inv"><?php echo $tischname." reserviert";?></button>
          <?php
        }
        mysqli_close($pdo);
        $tischnummer = NULL;
        $tischname = NULL;
    ?> 
    </td>
  </tr>
  <tr>
    <td class="inv"></td> 
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
  </tr>
  <tr>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
    <td class="inv"></td>
  </tr>

 

</table>
  <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>-->
<!--  <script type="text/javascript" src="<?php echo Config::get('URL'); ?>js/tischreservierung.min.js"></script>
  <script>
  $( ".tisch" ).click(function() {
    $(this).toggleClass("reserviert");
});
  </script>-->
</body>
</html>