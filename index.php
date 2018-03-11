<?php
$aki = $_GET['aki'];
$url = "http://104.18.39.47/apiv2/tv/0/1/0";

$options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Host: app.playerlatino.net"
  )
);

$context = stream_context_create($options);
$json = file_get_contents($url, false, $context);
$json_a = json_decode($json);
$reg_exUrl = "/src/i";
$pre = !preg_match($reg_exUrl, $v[3], $data);
switch ($aki){
case "premium":
foreach ($json_a as $k => $v) {
if($pre){
}else{
  echo "<div>" . $v[1] . " - " . "http://104.18.38.47:80/streaming/" .$v[3] . "?ZGtkYwV2YwR1ZwN3ZwR=" . "</div>";
}
}
break;
case "normal":
foreach ($json_a as $k => $v) {
if($pre){
  echo "<div>" . $v[1] . " - " . $v[3] . "</div>";
}
}
break;
case "all":
foreach ($json_a as $k => $v) {
if($pre){
  echo "<div>" . $v[1] . " - " . $v[3] . "</div>";
}else{
  echo "<div>" . $v[1] . " - " . "http://104.18.38.47:80/streaming/" .$v[3] . "?ZGtkYwV2YwR1ZwN3ZwR=" . "</div>";
}
}
}
?>
