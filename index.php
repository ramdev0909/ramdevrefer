
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://kit.fontawesome.com/3ea3574147.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title>Hidden Coder</title>
   <link rel="stylesheet" href="hidden.css">
</head>
<body>
   <div class="content">
      <h1>ADDER</h1><br>
<center>
<?php
error_reporting(0);
function RandomNumber($length){
   $str="";
   for($i=0;$i<$length;$i++){
      $str.=mt_rand(0,9);
   }
   return $str;
}


echo "<form method='GET' action='account.php'>

<input type='text' name='refer' class='input' placeholder='Enter Refer code.' required>

<input type='submit' class='formBtn shine' name='submit' value='Submit'>
</form>
";




?>
<a href="https://telegram.dog/loot_1970" class="telBtn shine">
         <i class="fa-regular fa-paper-plane"></i>
         <span>Join telegram channel</span>
      </a>
   