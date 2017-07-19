<?php
$token = $row['token'];
$data = $row['data'];
?>
<?php if(isset($_COOKIE['flash-menu'])){ ?>
<div class="alert alert-success" style="background-color:#F58120">
    <?php echo $_COOKIE['flash-menu'] ?>
</div>
<?php
}
?>
<div class="wrapper">
    <div class="control_frm" style="margin-top:25px;">
        <div class="bc">
            <ul id="breadcrumbs" class="breadcrumbs">
                <a href="?c=admin&a=xoatab&id=<?php echo $_GET['id']?>" style="float: right;padding: 10px 18px 10px 20px ;"  title="" class="smallButton tipS" original-title="Xóa" onClick="javascript:return confirm('Bạn có muốn chắc muốn xoá bài viết không' );"><img src="img/close.png" alt=""></a> 
                <li><a href="index.php?com=info&amp;act=man&amp;typechild=gioithieu"><span>Menu</span></a></li>
                <li class="current"><a href="#" onclick="return false;">Tạo mới nội dung cho tab</a></li>
            </ul>
            <div class="clear"></div>

        </div>
        <form name="supplier" id="validate" class="form" action="?c=admin&a=sendtaobaiviet" method="post" >         
            <div class="widget">
                <div class="title"><img src="img/list.png" alt="" class="titleIcon">
                    <h6>Tạo menu</h6>
                </div>     
                <div class="tabs_container">
                    <ul id="tabs">
                        <li class="active"><a href="#tabtv">Tiếng việt</a></li>
                        <li ><a href="#tabta">Tiếng anh</a></li>
                        <li ><a href="#tabtt">Tiếng trung</a></li>
                    </ul>
                </div>     
                <div class="tabs_content_container">
                    <div id="tabtv" class="tab_content" style="display: block;">
                        <div class="formRow">
                            <label>Nội dung vi: <img src="img/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Viết nội dung chính"> </label>
                            <div class="clear"></div>
                            <div class="formRight-full">
                                <textarea id="noidungtv" name="noidungtv" rows="8" cols="60" style=""><?php echo $data->text_tv ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="tabta" class="tab_content" style="display: block;">
                        <div class="formRow">
                            <label>Nội dung eg: <img src="img/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Viết nội dung chính"> </label>
                            <div class="clear"></div>
                            <div class="formRight-full">
                                <textarea id="noidungta" name="noidungta" rows="8" cols="60" style=""><?php echo $data->text_ta ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div id="tabtt" class="tab_content" style="display: block;">
                        <div class="formRow">
                            <label>Nội dung cn: <img src="img/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Viết nội dung chính"> </label>
                            <div class="clear"></div>
                            <div class="formRight-full">
                                <textarea id="noidungtt" name="noidungtt" rows="8" cols="60" style=""><?php echo $data->text_tt ?></textarea>
                            </div>
                        </div>
                    </div>
                    <!---->

                </div>         
            </div> 
            <div class="widget">
                <div class="title"><img src="img/record.png" alt="" class="titleIcon">
                    <h6>Nội dung seo</h6>
                </div>


                <div class="formRow">
                    <label>Tạo SEO <img src="img/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Bấm TẠO SEO để tạo Tiêu đề, Mô tả, Từ khoá cho danh mục sản phẩm"> </label>
                    <div class="formRight">
                        <input type="button" class="blueB"  value="Tạo SEO">
                    </div>
                    <div class="clear"></div>
                </div>      


                <div class="tab_gaconit">      

                    <div id="tabs_seo_container">
                        <ul id="tabs_seo">

                        <li class="active"><a href="#tabvi_seo">Tiếng Việt</a></li><li class=""><a href="#taben_seo">Tiếng Anh</a></li> 
                        <li class=""><a href="#tabtn_seo">Tiếng Trung</a></li>  

                        </ul><!--tabs_seo-->
                    </div><!--tabs_container-->



                    <div id="tabs_seo_content_container">




                        <div id="tabvi_seo" class="tab_seo_content" style="display: block;">


                            <div class="formRow">
                              <label>H1 vi</label>
                              <div class="formRight">
                                <input type="text" value="<?php echo $data->H1_tv ?>" name="h1_vi" class="tipS" original-title="Nội dung thẻ meta h1 vi dùng để SEO">
                            </div>
                            <div class="clear"></div>
                        </div>


                        <div class="formRow">
                          <label>H2 vi</label>
                          <div class="formRight">
                            <input type="text" value="<?php echo $data->H1_tv ?>" name="h2_vi" class="tipS" original-title="Nội dung thẻ meta h2 vi dùng để SEO">
                        </div>
                        <div class="clear"></div>
                    </div>


                    <div class="formRow">
                      <label>Title vi</label>
                      <div class="formRight">
                        <input type="text" value="<?php echo $data->title_tv ?>" name="title_vi" class="tipS" original-title="Nội dung thẻ meta Title vi dùng để SEO">
                    </div>
                    <div class="clear"></div>
                </div>



                <div class="formRow">
                  <label>Alt vi</label>
                  <div class="formRight">
                    <input type="text" value="<?php echo $data->alt_tv ?>" name="alt_vi" class="tipS" original-title="Nội dung thẻ meta Alt vi dùng để SEO">
                </div>
                <div class="clear"></div>
            </div>



            <div class="formRow">
              <label>Từ khóa vi</label>
              <div class="formRight">
                <input type="text" value="<?php echo $data->tukhoa_tv ?>" name="keyword_vi" class="tipS" original-title="Từ khóa chính VI cho sản phẩm">
            </div>
            <div class="clear"></div>
        </div>
        
        
        
        <div class="formRow">
          <label>Description vi:</label>
          <div class="formRight">
            <textarea rows="8" cols="" class="tipS" name="description_vi" original-title="Nội dung thẻ meta Description vi dùng để SEO"><?php echo $data->des_tv ?></textarea>
            <input readonly="readonly" type="text" style="width:25px; margin-top:10px; text-align:center;" name="deschar_vi" value="0"> ký tự <b>(Tốt nhất là 160 ký tự)</b>
        </div>
        <div class="clear"></div>
    </div>


</div><!--end tab_content-->




<div id="taben_seo" class="tab_seo_content" style="display: none;">


    <div class="formRow">
      <label>H1 en</label>
      <div class="formRight">
        <input type="text" value="<?php echo $data->H1_ta ?>" name="h1_en" class="tipS" original-title="Nội dung thẻ meta h1 en dùng để SEO">
    </div>
    <div class="clear"></div>
</div>


<div class="formRow">
  <label>H2 en</label>
  <div class="formRight">
    <input type="text" value="<?php echo $data->H2_ta ?>" name="h2_en" class="tipS" original-title="Nội dung thẻ meta h2 en dùng để SEO">
</div>
<div class="clear"></div>
</div>


<div class="formRow">
  <label>Title en</label>
  <div class="formRight">
    <input type="text" value="<?php echo $data->title_ta ?>" name="title_en" class="tipS" original-title="Nội dung thẻ meta Title en dùng để SEO">
</div>
<div class="clear"></div>
</div>



<div class="formRow">
  <label>Alt en</label>
  <div class="formRight">
    <input type="text" value="<?php echo $data->alt_ta ?>" name="alt_en" class="tipS" original-title="Nội dung thẻ meta Alt en dùng để SEO">
</div>
<div class="clear"></div>
</div>



<div class="formRow">
  <label>Từ khóa en</label>
  <div class="formRight">
    <input type="text" value="<?php echo $data->tukhoa_ta ?>" name="keyword_en" class="tipS" original-title="Từ khóa chính VI cho sản phẩm">
</div>
<div class="clear"></div>
</div>



<div class="formRow">
  <label>Description en:</label>
  <div class="formRight">
    <textarea rows="8" cols="" class="tipS" name="description_en" original-title="Nội dung thẻ meta Description en dùng để SEO"><?php echo $data->des_ta ?></textarea>
    <input readonly="readonly" type="text" style="width:25px; margin-top:10px; text-align:center;" name="deschar_en" value="0"> ký tự <b>(Tốt nhất là 160 ký tự)</b>
</div>
<div class="clear"></div>
</div>


</div><!--end tab_content-->
<div id="tabtn_seo" class="tab_seo_content" style="display: none;">
    
    
    <div class="formRow">
      <label>H1 cn</label>
      <div class="formRight">
        <input type="text" value="<?php echo $data->H1_tt ?>" name="h1_cn" class="tipS" original-title="Nội dung thẻ meta h1 cn dùng để SEO">
    </div>
    <div class="clear"></div>
</div>


<div class="formRow">
  <label>H2 cn</label>
  <div class="formRight">
    <input type="text" value="<?php echo $data->H2_tt ?>" name="h2_cn" class="tipS" original-title="Nội dung thẻ meta h2 cn dùng để SEO">
</div>
<div class="clear"></div>
</div>


<div class="formRow">
  <label>Title cn</label>
  <div class="formRight">
    <input type="text" value="<?php echo $data->title_tt ?>" name="title_cn" class="tipS" original-title="Nội dung thẻ meta Title cn dùng để SEO">
</div>
<div class="clear"></div>
</div>



<div class="formRow">
  <label>Alt cn</label>
  <div class="formRight">
    <input type="text" value="<?php echo $data->alt_tt ?>" name="alt_cn" class="tipS" original-title="Nội dung thẻ meta Alt cn dùng để SEO">
</div>
<div class="clear"></div>
</div>



<div class="formRow">
  <label>Từ khóa cn</label>
  <div class="formRight">
    <input type="text" value="<?php echo $data->tukhoa_tt ?>" name="keyword_cn" class="tipS" original-title="Từ khóa chính cn cho sản phẩm">
</div>
<div class="clear"></div>
</div>



<div class="formRow">
  <label>Description cn:</label>
  <div class="formRight">
    <textarea rows="8" cols="" class="tipS" name="description_cn" original-title="Nội dung thẻ meta Description cn dùng để SEO"><?php echo $data->des_tt ?></textarea>
    <input readonly="readonly" type="text" style="width:25px; margin-top:10px; text-align:center;" name="deschar_en" value="0"> ký tự <b>(Tốt nhất là 160 ký tự)</b>
</div>
<div class="clear"></div>
</div>


</div><!--end tab_content-->
</div><!--end tabs_content_container-->   


</div><!--end tab_gaconit-->   




</div>
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                    <input type="hidden" name="token" value="<?php echo $token ?>">
                    <input type="submit" class="blueB"  value="Hoàn tất"> 
</form>

</div>
</div>
<script type="text/javascript">
    CKEDITOR.replace( 'noidungtv' );
</script>
<script type="text/javascript">
    CKEDITOR.replace( 'noidungta' );
</script>
<script type="text/javascript">
    CKEDITOR.replace( 'noidungtt' );
</script>