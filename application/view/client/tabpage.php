<?php
$language = isset($_GET['language']) ? $_GET['language'] : "";
$menu = $row["menu"];
$data = $row["data"];
?>
<script language="javascript">
  function request(paras) {
    var url = location.href;
    var paraString = url.substring(url.indexOf("?") + 1, url.length).split("&");
    var paraObj = { };
    for (i = 0; j = paraString[i]; i++) {
      paraObj[j.substring(0, j.indexOf("=")).toLowerCase()] = j.substring(j.indexOf("=") + 1, j.length);
    }
    var returnValue = paraObj[paras.toLowerCase()];
    if (typeof (returnValue) == "undefined") {
      return "";
    } else {
      return returnValue;
    }
  }
  var De =decodeURI(request("id"));
  if(!De)
  {
    De=1;
  }
  else
  {
    De=decodeURI(request("id"));
  }
</script>
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
  <a class="home" href="index-e.html">HOME</a>
  <div class="clearfix"></div>
</div>
<div class="top02">
  <a href="index-e.html" class="logo"><img src="img/logo.jpg" width="240" height="70" /></a>
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
</div><!--顶部和导航栏-->
<div class="all">
  <div class="banner2"><img src="img/inban03.jpg" width="980" height="185" /></div>
  <h1 class="all_h1">
   <a class="sy" href="index-e.html">HOME </a>
   &nbsp;&nbsp;>&nbsp;&nbsp;Products
 </h1>
 <ul class="nav2">
   <?php
   for($j = 0 ;$j <count($data) ;$j++){
    if($language == "tt"){
      echo '<li class="li_w192"><a>'.$data[$j]->content_tt.'</a></li>';
    }else if($language == "ta"){
      echo '<li class="li_w192"><a>'.$data[$j]->content_ta.'</a></li>';
    }else{
      echo '<li class="li_w192"><a>'.$data[$j]->content_tv.'</a></li>';
    }

  }
  ?>
</ul>
<?php
for($m = 0; $m < count($data) ;$m++){
  if($language == "tt"){
    echo '<div class="products">';
    echo '<div class="proos">';
    echo '<p>'.$data[$m]->text_tt.'</p></div>     
    <div style="clear:both"></div>
  </div>';
}else if($language == "ta"){
  echo '<div class="products">';
  echo '<div class="proos">';
  echo '<p>'.$data[$m]->text_ta.'</p></div>     
  <div style="clear:both"></div>
</div>';
}else{
  echo '<div class="products">';
  echo '<div class="proos">';
  echo '<p>'.$data[$m]->text_tv.'</p></div>     
  <div style="clear:both"></div>
</div>';
}

}
?>

<script>
 $(function () {
          $('.products').addClass('Hide');
           //$('.nav2 li').eq(0).addClass('chat');

           $("#"+De+"").addClass('chat');
           $('.products').eq(De-1).removeClass('Hide');
           $('.nav2 li').mouseenter(function () {
             var index = $(this).parent().children().index(this);
             $(this).parent().children().addClass('1');
             $(this).parent().children().each(function () {
               if ($(this).hasClass('chat')) {
                 $(this).removeClass('chat');
               }
             })
             $(this).addClass('1');
             $('.products').each(function () {
               if (!$(this).hasClass('Hide')) {
                 $(this).addClass('Hide');
               }
             });
             $(this).removeClass('1');
             $(this).addClass('chat');
             $('.products').eq(index).removeClass('Hide');
           });
         })
       </script>
       <div class="clearfix"></div>