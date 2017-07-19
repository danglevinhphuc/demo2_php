<?php
$language = isset($_GET['language']) ? $_GET['language'] : "";
$menu = $row["menu"];
$tab = $row["tab"];
?>
<div class="topbg">
 <script type="text/javascript" src="http://hq.sinajs.cn/list=hk02722" charset="gb2312"></script>
 <div class="top01">
  <span class="welcome">WELCOME：<strong></strong> hk02722</span>
  <samp class="gp"><samp  class="bpjg"><dl>0.00</dl><span>0.00   +0.00%</span></samp ></samp>
  <a class="language" href="contact.html">Contact</a>
  <a class="language" href="index.html">中文</a>
  <form class="topform" action="search.html" method="post" class="form2"  name="f">
    <span>| Search：</span>
    <input type="text" value="Please enter information" id="searchtexts" name="searchtext"  />
    <input ID="Submit2" type="submit" name="s" class="btn1" value="" />
  </form>
  <a class="home" href="?c=trangchu">HOME</a>
  <div class="clearfix"></div>
</div>
<div class="top02">
  <a href="?c=trangchu" class="logo"><img src="img/logo.jpg" width="240" height="70" /></a>

  <ul class="nav">
    <?php
    for($i = 0 ; $i < count($menu) ;$i++){
     if($language == "tt"){
      echo "<li><a href='?c=trangchu&a=tabpage&language=tt&id=".$menu[$i]->id_menu."'>".$menu[$i]->tenmenu_tt."</a></li>";
    }else if($language == "ta"){
      echo "<li><a href='?c=trangchu&a=tabpage&language=ta&id=".$menu[$i]->id_menu."'>".$menu[$i]->tenmenu_ta."</a></li>";
    }else{
      echo "<li><a href='?c=trangchu&a=tabpage&id=".$menu[$i]->id_menu."'>".$menu[$i]->tenmenu_tv."</a></li>";
    }
  }
  ?>
</ul>

</div> 
<script type="text/javascript">
  var elements = hq_str_hk02722.split(",");
  var num = elements[6];
  var num1 = new Number(num);
  var num2 = num1.toFixed(2);
  var numzt = elements[7];
  var numzt1 = new Number(numzt);
  var numzt2 = numzt1.toFixed(2);
  var bff = elements[8];
  var bff1 = new Number(bff);
  var bff2 = bff1.toFixed(2);
  if (bff2 > 0) {
    $(".bpjg").find("dl").css("color", "red");
    $(".bpjg").find("dl").html(num2);
    $(".bpjg").find("span").css("color", "red");
    $(".bpjg").find("span").html(numzt2 + "&nbsp;&nbsp;+" + bff2 + "%");
  }
  else {
    $(".bpjg").find("dl").css("color", "#006600");
    $(".bpjg").find("dl").html(num2);
    $(".bpjg").find("span").css("color", "#006600");
    $(".bpjg").find("span").html(numzt2 + "&nbsp;&nbsp;" + bff2 + "%");
  }
</script>
<div class="all">
  <div class="banner">
    <img src="img/2014092402413456608.jpg" width="100%">
  </div>  
  <div class="intro">
    <div class="intro_title"><a href="cme.html">CME Brief</a></div>
    <p>
      Chongqing Machinery &amp; Electronics Holding (Group) Co. Ltd. (CME) is a state-owned holding group corporation by Chongqing Municipal...<a href="childindex.html" style="color:#1367A7">[detailed]</a>
    </div>
    <div class="pro_list">
      <ul class="List1">
        <?php
        for($j = 0 ; $j <count($tab) ;$j++){ 
          if($j < 4){
            if($language == "tt"){
              echo "<li><a href=''>".$tab[$j]->content_tt."</a></li>";
            }else if($language == "ta"){
              echo "<li><a href=''>".$tab[$j]->content_ta."</a></li>";
            }else{
              echo "<li><a href=''>".$tab[$j]->content_tv."</a></li>";
            }  
          }else{
            break;
          }
        }
        ?>
      </ul>
      <?php for($k = 0 ; $k <count($tab) ;$k++){  
        if($language == "tt"){
         echo ' <div class="Menu2">';
         echo '<div class="jtys">';
         echo '  <p style="width:50px; overflow:hidden">'.$tab[$k]->des_tt.'</p><a href "childindex.html" style="color:#1367A7">[detailed]</a>';
         echo ' </div>';
         echo '</div>';
       }else if($language == "ta"){
         echo ' <div class="Menu2">';
         echo '<div class="jtys">';
         echo '  <p style="width:50px; overflow:hidden">'.$tab[$k]->des_ta.'</p><a href "childindex.html"  style="color:#1367A7">[detailed]</a>';
         echo ' </div>';
         echo '</div>';
       }else{
         echo ' <div class="Menu2">';
         echo '<div class="jtys">';
         echo '  <p style="width:50px; overflow:hidden">'.$tab[$k]->des_tv.'</p><a href "childindex.html" style="color:#1367A7">[detailed]</a>';
         echo ' </div>';
         echo '</div>';
       }  
     }?>

   </div>
   <script type="text/javascript" src="js/jquery.js"></script>
   <script type="text/javascript" src="js/scroll.js"></script>
   <script>
    function zs(id) {
      $(".list_lh").hide();
      $("#list_lh" + id + "").show();
    }
  </script>
  <div class="clearfix"></div>
  <div class="group">
    <h1><span onclick="zs(1);" style="cursor:pointer">Subsidiary</span></h1>
    <div id="list_lh1" class="list_lh" style="display:block">
      <ul class="group_ul" id="group_ul1" >
        <?php
        for($m = 0 ; $m < count($tab) ;$m++){

         if($language == "tt"){
           echo '<li> <a href="">'.$tab[$m]->des_tt.'
         </a>';
         echo "</li> ";
       }else if($language == "ta"){
         echo '<li> <a href="">'.$tab[$m]->des_ta.'
       </a>';
       echo "</li> ";
     }else{
       echo '<li> <a href="">'.$tab[$m]->des_tt.'
     </a>';
     echo "</li> ";
   }  
 } 
 ?>

</ul>
</div>
<div id="list_lh2" class="list_lh" style="display:none">
  <ul class="group_ul">
   <?php
   for($m = count($tab)-1 ; $m >= 0 ;$m--){
     if($language == "tt"){
       echo '<li> <a href="">'.$tab[$m]->des_tt.'
     </a>';
     echo "</li> ";
   }else if($language == "ta"){
     echo '<li> <a href="">'.$tab[$m]->des_ta.'
   </a>';
   echo "</li> ";
 }else{
   echo '<li> <a href="">'.$tab[$m]->des_tt.'
 </a>';
 echo "</li> ";
}  
} 
?>
</ul>
</div>
<h1><span onclick="zs(2);"  style="cursor:pointer">LINK</span></h1>
</div><!--集团企业-->
<div class="news_spe">
  <div class="newsplate">
    <h1 class="news_spe_h1"><a href="Javascript:;">News</a></h1>
    <div class="newscon">
      <div class="newspic1">
       <img src="img/2016112203275864587.png" width="250" height="175" />
     </div>
     <div class="newsli">
      <h1><?php 
        if($language == "tt"){
         echo $tab[0]->H1_tt;
       }else if($language == "ta"){
         echo $tab[0]->H1_ta;
       }else{
         echo $tab[0]->H1_tt;
       } 
       ?></h1>
       <p> <a href="#">[detailed]</a></p>
       <ul class="news_plateul">
        <?php
        $check = 0;
        for($m = count($tab)-1 ; $m >= 0 ;$m--){
          $check++;
          if($check < 4){
            if($language == "tt"){
              echo "<li><a href='#' title='".$tab[$m]->title_tt."'>".$tab[$m]->H2_tt."...</a><span>".$tab[$m]->today."</span></li>";
           }else if($language == "ta"){
              echo "<li><a href='#' title='".$tab[$m]->title_ta."'>".$tab[$m]->H2_ta."...</a><span>".$tab[$m]->today."</span></li>";
           }else{
              echo "<li><a href='#' title='".$tab[$m]->title_tv."'>".$tab[$m]->H2_tv."...</a><span>".$tab[$m]->today."</span></li>";
           } 
         }
       }
       ?>
     </ul></div>
   </div>
   <div class="clearfix"></div>
   <div class="pointmore"><a href="news.html"><img src="img/more.jpg" width="32" height="11" /></a></div>
 </div><!--新闻资讯-->
 <div class="clearfix"></div>
</div><!--新闻资讯和专题专栏-->
<div class="clearfix"></div>