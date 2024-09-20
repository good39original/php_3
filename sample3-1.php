<!DOCTYPE html> 
<html>
  <head>
    <title>Sample3-1</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <h1>3日目</h1>
    <?php 
      $data = false;

      if($data) {
        print "Hello";
      } else {
        print "bye";
      }
      echo "<br>";    #Question1 final

      $data = '10';

      if($data == 10) {
        print "1";
      } else {
        print "2";
      }

      echo "<br>"; #Question2 final

      if(abs(-100) > abs(-50)) {
        print "AAA";
      }

      if("abc" > "xyz") {
          print "BBB";
      }elseif("567" < "890"){
          print "CCC"; 
      }

      echo "<br>";   #Question3 final

      if('5member' < 44) {
        print "44";
      }else{
        print "5member";
      }

      echo "<br>"; #Question4 final

      if(strcmp("54321" , "6789") > 0) {
        print "Over";
      }else{
        print "Under";
      }

      echo "<br>"; #Question5 final

      $ans = 2 <=> 22.5;
      if ($ans > 0) {
        print "Over";
      }else{
        print "Under";
      }

      echo "<br>";

      $data = 60;
      
      if(($data > 70) && ($data <= 100)) {
        print "Success";
      }elseif(($data >= 30) && ($data < 70)){
        print "Fail";
      }

      echo "<br>";

      $data = 70;
      
      if((!$data >= 70) || ($data > 100)) {
        print "Success";
      }elseif(($data >= 30) && ($data < 70)){
        print "Fail";
      }

      echo "<br>";

      $data = 80;
      
      if(($data >= 70) && ($data <= 100)) {
        print "Success";
      }elseif(($data >= 30) && ($data < 70)){
        print "Fail";
      }

      echo "<br>";

      $data = 90;

      if(($data <= 70) || ($data = 100)){ 
        print "Success";
      }elseif(($data >= 30) && ($data < 70)){
        print "Fail";
      }

      echo "<br>"; #Question6 final

      $i = 1;
      $add = 0;
      while(++$i < 10) {
        $add += $i;
      }

      print $add;

      echo "<br>"; #Question7 final

      for($k = 0; $k <= 10; $k++){
        if($k % 3 == 0){
          print "3";
        }elseif($k % 4 == 0){
          print "4";
        }else{
          print "0";
        }
      }
    ?>
  </body>
</html>