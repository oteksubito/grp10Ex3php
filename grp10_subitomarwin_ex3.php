<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<style>
  * {
     margin: 0; 
     padding: 0; 
  }
  body {
    width: 100%;
    height: 100%;
    font-family: Arial;
    position: relative;
  }
  .container {
    width: 400px;
    height: 400px;
    border: 1px solid #000;
    margin: auto;
    text-align: center;
    line-height: 50px;
    padding-top: 120px;
    margin-top: 150px;

  }
</style>

</head>
<body>



<div class = "container">
<?php

  echo file_exists("sample.txt"); 
  echo "</br>"; //add a new line
  echo file_put_contents("sample.txt", "Hello World."); 
  echo "</br>"; 
  echo file_get_contents("sample.txt"); 
  echo "</br>"; 
  print_r(file("sample.txt")); 
  echo "</br>"; 
  echo "</br>"; 
  echo "</br>"; 

  ?>
  
</div>

</body>
</html>