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

    <title>Oshadhi</title>
</head>
<body>
<h2>Axe Search</h2>
  <a href="home.php">
     <button type="submit" class="button" name="button">home</button>
  </a>

<table>
    <tr>
        <td>Name</td>
        <td>Oshadhi</td>
    </tdr>
    <tr>
        <td>school</td>
        <td>Sangamitha Vidyalaya</td>
    </tr>
    <tr>
        <td>phone number</td>
        <td>+94718208595</td>
    </tr>
    <tr>
        <td>photos</td>
        <td><img src="images/oshadhi.jpg"  style="width:200px;height:250px;" > </td>
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