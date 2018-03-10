<?php
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
foreach ($json_a as $k => $v) {
$ou =  preg_match('@^(?:http://)?([^/]+)@i', $v[3], $matches);
if($ou = true)
{   
}else{
 echo $v[3];
};
}
?>
