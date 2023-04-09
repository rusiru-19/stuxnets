<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Isumi</title>
   <link rel="icon" type="image/x-icon" href="/images/favicon.png">
   <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <h2>Axe Search</h2>
<table>
    <tr>
        <td>Name</td>
        <td>Isumi pehansa Senavirathne</td>
    </tr>
    <tr>
        <td>school</td>
        <td>Sangamithya Vidyalaya</td>
    </tr>
    <tr>
        <td>phone number</td>
        <td>+94 77 996 6044</td>
    </tr>
    <tr>
        <td>Instagram acc</td>
        <td>isumi_pehansa <br> te.ssa3380 <br> eliieee23 </td>
    </tr>
    <tr>
        <td>besta</td>
        <td>Chanul Dandeniya(RCG)</td>
    </tr>
    <tr>
        <td>videos</td>
        <td>
            <video width="320" height="240" controls>
        <source src="/images/movie.mp4" type="video/mp4">
        Your browser does not support the video tag.
            </video>

        </td>
    </tr>
</table>
  <a href="home.php">
     <button type="submit" class="button" name="button">home</button>
  </a>



<style type="text/css">
          button{
      background: #003B00;         
      bottom: -30%;
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