<?php
include_once('./_common.php');

define("_INDEX_", TRUE);

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
?>

<script src="<?php echo G5_JS_URL; ?>/swipe.js"></script>
<script src="<?php echo G5_JS_URL; ?>/shop.mobile.main.js"></script>

<?php echo display_banner('메인', 'mainbanner.10.skin.php'); ?>
<?php echo display_banner('왼쪽', 'boxbanner.skin.php'); ?>



      <?php if($default['de_mobile_type1_list_use']) { ?>
      <div class="div" style="width:50%; height:60px; margin-top: 50px; float:left; text-align:center;">
        <a href="/Neo/theme/basic/mobile/shop/list/sightseeing.php">
        <div class="sct_wrap" style="width : 40%;  height: 50px; line-height: 50px; vertical-align: middle; border-radius: 50%; background-color: white; display:inline-block; ">
            <h2>관광</h2>
        </div>
        </a>
      </div>
      <?php } ?>


      <?php if($default['de_mobile_type2_list_use']) { ?>
      <div class="div" style="width:50%; height:60px;  margin-top: 50px; float:left; text-align:center;">
        <a href="/Neo/theme/basic/mobile/shop/list/food.php">
        <div class="sct_wrap" style="width : 40%; height: 50px; line-height: 50px; vertical-align: middle; border-radius: 50%; background-color: white;  display:inline-block;">
            <h2>맛집</h2>
        </div>
        </a>
      </div>
      <?php } ?>

      <?php if($default['de_mobile_type3_list_use']) { ?>
      <div class="div" style="width:50%; height:60px; margin-top: 50px; float:left; text-align:center;">
        <a href="#">
        <div class="sct_wrap" style="width : 40%;  height: 50px; line-height: 50px; vertical-align: middle; border-radius: 50%; background-color: white;  display:inline-block;" >
            <h2>숙소</h2>
        </div>
        </a>
      </div>
      <?php } ?>

      <?php if($default['de_mobile_type4_list_use']) { ?>
      <div class="div" style="width:50%; height:60px; margin-top: 50px; float:left; text-align:center;">
        <a href="#">
        <div class="sct_wrap" style="width : 40%; height: 50px; line-height: 50px; vertical-align: middle; border-radius: 50%; background-color: white;  display:inline-block;">
            <h2>일정</h2>
        </div>
        </a>
      </div>
      <?php } ?>
