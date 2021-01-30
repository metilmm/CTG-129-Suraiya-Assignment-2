<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Assignment 2-11</title>
  <!--একটি ইমেজ আপলোডিং ফাংসন বানান যেথানে ছবির নাম, হাইট, ওইদ দিয়ে ছবিটাকে মেনেজ কার যাবে-->


</head>
<body>
  <?php
    function pic($imo,int $h,int $w,$name){
      echo "<img src='$imo' height='$h' width='$w' ><br>";
      echo "<h2 >$name</h2>";
    }
    pic('image1.png',450,250,'image');
  ?>
</body>
</html>