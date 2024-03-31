
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
error_reporting(0);
function RandomNumber($length){
   $str="";
   for($i=0;$i<$length;$i++){
      $str.=mt_rand(0,9);
   }
   return $str;
}
$number=RandomNumber(8);
$device=RandomNumber(17);
$ddd=mt_rand(1,30);
$password=RandomNumber(6);
$code=mt_rand(66,99);
$code1=mt_rand(0,999);
$code2=mt_rand(0,100);
$code3=mt_rand(1,9);
$code4=mt_rand(10,99);
$gmail=mt_rand(2,1000000);
$ip=long2ip(mt_rand());
$ttt=md5($number);



$na=array("abhishek","mukesh","shivam","lokesh","aarati","yamini","nirma","seema","reena","teena","ajay",
"mayank","akshit","hemant","ajay","pinki","anuj","manoj","ritk","akash","ankush","love","yash","jatin","kundan","monika","nitika",
"mohit","pal","yudur","earnfast","mm");
$name=$na[mt_rand(0,30)];
$refer=$_GET['refer'];
$captcha=$_GET['captcha'];
$url1='https://true5g.top/member/member/sendVCode';
$data1='{"v_code":"dd2139734f6fc74ee50810cf5607b502"}';
$headers1[]='Host: true5g.top';
$headers1[]='Cookie: PHPSESSID=7rqarhodlvpmdnia4988f3kc7h';
$headers1[]='Thinklang: en';
$headers1[]='Authorization: kaadon eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzUxMiJ9.eyJpc3MiOiJrYWFkb24iLCJpYXQiOjE3MTE4NjAyMjgsImV4cCI6MTcxMjQ2NTAyOCwiZGF0YSI6eyJ0eXBlIjoibWVtYmVyIiwiaWQiOjU5OSwiYWdlbnRfbGluZSI6WyIxIl0sImludml0ZV9saW5lIjpbIjMiLCIxNiIsIjM4MyJdLCJ1dWlkIjoiVTQwUjQyTjU2IiwiaWRlbnRpZmljYXRpb24iOiJVNDBSNDJONTYiLCJpcCI6IjE1Mi41OS4xMDMuNTkifX0.uMHCP_ZnE_EZLn6pKfVRJRXJ5NuZCy1hhM7Js0P-YL1IBSjocui1_lPChvnZ1buzxz8TNVFGTHMRcNLjKTk6ydXOuDA1ccR6_LnvKmUqm5jL6M4Kkr0oixgwCPqqrThi0ethIphtFz06lhKF5yfjbIUogwZdiXBaQdEkoiNCWlU';
$headers1[]='Origin: https://true5g.top';
$headers1[]='User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; G011A Build/N2G48H;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/68.0.3440.70 Mobile Safari/537.36';
$headers1[]='Content-Type: application/json';
$headers1[]='Accept: */*';
$headers1[]='Referer: https://true5g.top/';
$headers1[]='Accept-Encoding: gzip, deflate';
$headers1[]='Accept-Language: en-US';
$headers1[]='X-Requested-With: mark.via.gp';


$ch1=curl_init($url1);
curl_setopt($ch1,CURLOPT_URL,$url1);
curl_setopt($ch1,CURLOPT_POST,1);
curl_setopt($ch1,CURLOPT_POSTFIELDS,$data1);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch1,CURLOPT_HTTPHEADER,$headers1);
curl_setopt($ch1, CURLOPT_ENCODING,'gzip');

curl_setopt($ch1,CURLOPT_SSL_VERIFYPEER,false);  
$output1=curl_exec($ch1);
$json1=json_decode($output1,true);
////////////////////////////////////////////////////////////////////////////////



$url='https://true5g.top/member/member/register';
$data='{"username":"91'.$code.''.$number.'","password":"123456","code":"","cap_vcode":"6146","inviter":"'.$refer.'"}';
$headers[]='Host: true5g.top';
$headers[]='Cookie: PHPSESSID=7rqarhodlvpmdnia4988f3kc7h';
$headers[]='Thinklang: en';
$headers[]='Origin: https://true5g.top';
$headers[]='User-Agent: Mozilla/5.0 (Linux; Android 7.1.2; G011A Build/N2G48H;) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/68.0.3440.70 Mobile Safari/537.36';
$headers[]='Content-Type: application/json';
$headers[]='Accept: */*';
$headers[]='Referer: https://true5g.top/';
$headers[]='Accept-Encoding: gzip, deflate';
$headers[]='Accept-Language: en-US';
$headers[]='X-Requested-With: mark.via.gp';
$headers[]='';
$headers[]='';
$headers[]='Content-Length: '.strlen($data).'';
$ch=curl_init($url);
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch, CURLOPT_ENCODING,'gzip, deflate');

curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);  
$output=curl_exec($ch);
$json=json_decode($output,true);
$msg=$json['msg'];
if($msg=='Registration success!'){
   echo"<div class='success'>REFER DONE</div>";
}else{
   echo"<div class='error'>$msg</div>";
}
///////////////////////////////////////////

?>
<a href="https://telegram.dog/loot_1970" class="telBtn shine">
         <i class="fa-regular fa-paper-plane"></i>
         <span>Join telegram channel</span>
      </a>      <meta http-equiv='refresh' content='1.001'>



      