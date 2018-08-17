<style media="screen">
  html{margin:0; padding: 0; border: 0;}
  body{margin:0;padding:0;height:100%; min-width:320px}
  a{color: black; text-decoration: none;}
  .head{width: 100%; height: 100px; background-color: black; position: relative;}
  .datalist{border: 1px solid; margin: 0 auto; width: 95%;}
  #ul{list-style: none; padding: 0;}
  #back{position: absolute; width: 100px; height: 90px; background-image: url('/Neo/theme/basic/img/mobile/back2.PNG'); background-repeat: no-repeat; background-size: 100% 100%; float: left;}
  #nav ul li{}
  .menu a{cursor:pointer;}
  .menu .hide{display:none;}
  .content{width: 100%; height: 100%; background-image: url('/Neo/theme/basic/img/mobile/food.PNG');background-repeat: no-repeat; background-size: 100% 100%;}
  #area{width: 100%; height: 90px; background-color: black;}
  #area ul{list-style: none; text-align: center;}
  #area ul li{color: white; float: left; margin-left: 1px; margin-top: 8.5px;font-size: 30px; border: 1px solid white;}
  .area2{width: 100%; margin :0; padding: 0;}
  .area2 li{width: 16.3%; height: 50px;}
  .area2 a{color: white;}
</style>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
<script src="/Neo/theme/basic/js/head.js" ></script>

<!--로고부분-->
<div class="top">
  <div class="head">
    <a href="/Neo/theme/basic/mobile/shop/index.php"><div id="back"></div></a>
    <span style="text-align:center;"><h1 style="color : white; padding-top:30px;">neo internet</h1></span>
  </div>
  <div id="area">
    <ul class="area2">
      <a href="/Neo/theme/basic/mobile/shop/restaurant_data/cafe.php"><li>카페</li></a>
      <a href="/Neo/theme/basic/mobile/shop/restaurant_data/korean.php"><li>한식</li></a>
      <a href="/Neo/theme/basic/mobile/shop/restaurant_data/chinese.php"><li>중식</li></a>
      <a href="/Neo/theme/basic/mobile/shop/restaurant_data/japanese.php"><li>일식</li></a>
      <a href="/Neo/theme/basic/mobile/shop/restaurant_data/western.php"><li>양식</li></a>
      <a href="/Neo/theme/basic/mobile/shop/restaurant_data/snackbar.php"><li>분식</li></a>
    </ul>
  </div>
</div>

<?php
$conn = new mysqli("localhost", "jejunulab", "jejunu!!", "jejunulab");
if($conn->connect_errno){
  print("Connection Error:".$conn->connect_errno);
}else {
  $response = $conn->query("select * from `japanesefood`");
  if($response){
    while($row = $response->fetch_assoc()){
      ?>
      <ul id="ul">
        <a href="#">
          <li class="datalist">
            <span><?php echo $row["name"]?></span>
            <p style="font-size:12px"><?php echo $row["address"]?></p>
            <p style="font-size:12px"><?php echo $row["PhoneNumber"]?></p>
            <p style="font-size:12px"><?php echo $row["worktime"]?></p>
          </li>
        </a>
      </ul>
      <?
    }
  }else {
    print("failed\n");
    print("error:".$conn->error);
  }
}
?>
