<!DOCTYPE html>
<html>
  <head>
    <title>PHP 01</title>
  </head>
  <body>
    <h1>My First PHP assignment</h1>
    <h2>Name: Raghad Alsharafi ID:201722200</h2>
    
    <p>
      <?php echo date("d, F Y"); ?>
    </p>

  <?php

  echo $n = 1;
  echo $s = "1";
  echo $n1 = $n + $s;
  echo $n2 = $n1 + "10 little penguins";
  echo $n3 = "hello";
  echo $n4 = " world";
  echo $n5 = $n3+$n4;
  echo $n6 = $n3.$n4;

  // Q1: what is the output ?
  //A1: 11212hello world0hello world

  // Q2: what does "+" do ?
  //A2: to perform addition operation  

  // Q3: what does "." do ?
  //A3: to concat two strings or more

  // Q4: explain the reason of the output of printing $n2 ?
  //A4: it will not printed because additon sign is used to calculate the sum of numbers and in this cas there is a string and therefore it will not be printed

  // Q5: explain the output of printing $n5 ?
  //A5: the output is zero and the reason is when performing arthimetic operation on strings php will return zero

  //create an array
  $myarray = [1,2,3,4,5];
  //print the first element
  echo $myarray[0];
  //print the count of the array 
  echo count($myarray);
  //print all elements in a loop
  $certain_value = 0;
  for($i=0;$i<count($myarray);$i++){
    echo $myarray[$i];
    //print if certain element has a certain value
    if($myarray[$i] == $certain_value){
      echo '<p>this element has certain value</p>';
    }
  }
  ?>

  </body>
</html>
