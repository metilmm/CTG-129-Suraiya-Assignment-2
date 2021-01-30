<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Assignment 2-1</title>
  <!--এমন একটি ফাংসন বানান যাকে কি না একটা বয়স দিলে একজন কি বৃদ্ধ, যুবক, কিশো, ছেলে , বাচ্ছা রিটান করবে-->


</head>
<body>
  <?php

    function age($age){
      if($age <= 10){
        echo "This person is a child who is $age year's old.";
      }
      elseif($age >10 and $age<= 20){
        echo "This person is a young human who is $age year's old.";
      }
      elseif($age >20 AND $age<= 60){
        echo "This human is an adult who is $age year's old.";
      }
      elseif($age > 60){
        echo "This is an old person who is $age year's old";
      }
      else{
        echo "Invalid number.";
      }
    }

    age(22);
  ?>
</body>
</html>