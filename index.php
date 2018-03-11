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
echo "#EXTM3U" ."\n";
switch ($aki){
case "premium":
foreach ($json_a as $k => $v) {
if(!preg_match($reg_exUrl, $v[3], $data)){
}else{
  echo "#EXTINF:-1 ," . $v[1] ."\n";
  echo "http://104.18.38.47:80/streaming/" .$v[3] . "?ZGtkYwV2YwR1ZwN3ZwR=|User-Agent=Lavf/57.71.100|Accept=*/*|Connection=close|Host=app.playerlatino.net|Token=ZGtkYwV2YwR1ZwN3ZwR=" ."\n";
}
}
break;
case "normal":
foreach ($json_a as $k => $v) {
if(!preg_match($reg_exUrl, $v[3], $data)){
  echo "#EXTINF:-1 ," . $v[1] ."\n";
  echo $v[3] ."\n";
}
}
break;
case "all":
foreach ($json_a as $k => $v) {
if(!preg_match($reg_exUrl, $v[3], $data)){
  echo "#EXTINF:-1 ," . $v[1] . "  ";
  echo "http://104.18.38.47:80/streaming/" .$v[3] . "?ZGtkYwV2YwR1ZwN3ZwR=HTTP/1.1" . "  ";
}else{
  echo "#EXTINF:-1 ," . $v[1] . "  ";
  echo $v[3];
}
}
}
?>
