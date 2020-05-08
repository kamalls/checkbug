<?php
$read = file_get_contents("proxy.txt");
$pisah = explode("\n", $read);
echo "proxy checker dengan url/bug\nmasukan bug :";
$url = trim(fgets(STDIN));

$i=1;
foreach($pisah as $p){
    $proxy = str_replace("\r", "", $p);
    echo "[$i]TEST URL $url PROXY:PORT ".$proxy." max time out 20sec\n";
    system("curl -I ".$url." -x ".$proxy." --max-time 20");
    echo "\n\n";
    $i++;
}
?>