<!DOCTYPE html>
<head>
    <title>查看留言</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/tp/minecraft-creeper-face.jpg" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <style>
div.fixed {
  position: fixed;
  bottom: 25px;
  right: 25px;
  width: 30px;
  height: 30px;
  border-radius: 5px;
  border: 3px solid #73AD21;
  display: flex;
  align-items: center;
  justify-content: center;
}
div.fixed2 {
  position: fixed;
  bottom: 25px;
  right: 80px;
  width: 30px;
  height: 30px;
  border-radius: 5px;
  border: 3px solid #73AD21;
  display: flex;
  align-items: center;
  justify-content: center;
}
div.fixed3 {
  position: fixed;
  bottom: 80px;
  right: 25px;
  width: 30px;
  height: 30px;
  border-radius: 5px;
  border: 3px solid #73AD21;
  display: flex;
  align-items: center;
  justify-content: center;
}
.bc{
    margin-top: 35px;
    background-color: rgba(240, 248, 255, 0.562);
    background-size: cover;
    border-radius: 10px;
    max-width: 620px;
    width:100%;
    text-align: center;
    margin: auto;
}
div:hover.cd{
  position: fixed;
  overflow: hidden;
  height: 76px;
  width: 320px;
  opacity: 1;
}
div.cd{
  position: fixed;
  overflow: hidden;
  height: 76px;
  width: 76px;
  opacity: 0.6;
}
img{
  width: 80%;
}
</style>
<link rel="stylesheet" href="/fill/css/style.css">
</head>
<body style="text-align: center;">
<div class="cd">
<?php
include("connect.php");
echo "<iframe frameborder='no' border='0' marginwidth='0' marginheight='0' width=330 height=86 src='//music.163.com/outchain/player?type=2&id=".music()."&auto=1&height=66'></iframe>"
?>
</div>
<div class="bc">
<h2><a href="admin" style="color:black;"><i class="bi bi-chat-left-dots"></i></a>留言记录~</h2><br>
<?php
//error_reporting(0);
//if($_POST['txt'] != ""){
main();
function main(){
    $sql = "SELECT txt, name, time ,uid FROM ly";
    $result = mysqli_query($GLOBALS['connect'], $sql);
    if (mysqli_num_rows($result) > 0) {
        // 输出数据
        while($row = mysqli_fetch_assoc($result)) {
            echo "<a style='font-size: 8px;' title='".$row["uid"]."';>".$row["uid"]."楼 ID: " . $row["name"]." Time：". $row["time"]."</a><br>" . $row["txt"]."<br>";
        }
    } else {
        echo "还没有留言呢，快来留言吧";
    }
}
function music(){
  $sql = "SELECT id FROM music";
  $re = mysqli_query($GLOBALS['connect'], $sql);
  $uuid = mysqli_fetch_assoc($re);
  $id = $uuid['id'];
  //$url = "//music.163.com/outchain/player?type=2&id=".$id."&auto=1&height=66";
  return $id;
}
mysqli_close($connect);
echo "<h2><a id='end'>-----~到这里就结束了呢~-----</a></h2><br>";
//}else{
//    echo "错误，没有收到内容";
//}
?>
</div> 
<a href="#end" title="回到底部"><div class="fixed">
<i class="bi bi-arrow-down"></i>
</div></a>
</div> 
<a href="" title="刷新"><div class="fixed3">
<i class="bi bi-arrow-clockwise"></i>
</div></a>
<a href="/" title="点我返回"><div class="fixed2">
<i class="bi bi-arrow-return-left"></i>
</div></a>
</body>
