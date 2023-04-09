<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.png">

    <title>Rashmi</title>
</head>
<body>
<h2>Axe Search</h2>
  <a href="home.php">
     <button type="submit" class="button" name="button">home</button>
  </a>

<table>
    <tr>
        <td>Name</td>
        <td>Rashmi</td>
    </tdr>
    <tr>
        <td>school</td>
        <td>southaland college galle</td>
    </tr>
    <tr>
        <td>phone number</td>
        <td>+94 74 049 1669 <br> +94 76 090 4744</td>
    </tr>
    <tr>
        <td>photos</td>
        <td><img src="images/rashmi1.jpg"  style="width:200px;height:250px;" > <img src="images/rashmi2.png" style="width:300px;height:250px;"></td>
    </tr>
</table>
<style type="text/css">
          button{
      background: #003B00;         
      bottom: -20%;
      right: 10%;
      color: white;
      padding: 14px 28px;
      font-size: 16px;
      cursor: pointer;
      text-align: center;
      position: absolute;    
          }
     </style>

</body>
</html>


 <?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>