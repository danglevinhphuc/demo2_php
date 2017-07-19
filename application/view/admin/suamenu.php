<?php 
    $token = $row['token'];
    $data= $row['data'];
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
            <a href="?c=admin&a=xoamenu&id=<?php echo $_GET['id'] ?>" style="float: right;padding: 10px 18px 10px 20px ;"  title="" class="smallButton tipS" original-title="Xóa" onClick="javascript:return confirm('Bạn có muốn chắc muốn xoá bài viết không' );"><img src="img/close.png" alt=""></a> 
                <li><a href="index.php?com=info&amp;act=man&amp;typechild=gioithieu"><span>Menu</span></a></li>
                <li class="current"><a href="#" onclick="return false;">Sửa lại menu</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <form name="supplier" id="validate" class="form" action="?c=admin&a=sendsuamenu" method="post" >         
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
                            <label>Tên menu</label>
                            <div class="formRight">
                                <input type="text" placeholder="tên menu..." name="nametv" id="username" class="tipS" original-title="" value="<?php echo $data->tenmenu_tv ?>">
                            </div>
                            <div class="clear"></div>
                            
                        </div> 
                    </div>
                    <div id="tabta" class="tab_content" style="display: block;">
                        <div class="formRow">
                            <label>Menu name</label>
                            <div class="formRight">
                                <input type="text" placeholder="menu name..." name="nameta" id="username" class="tipS" original-title="" value="<?php echo $data->tenmenu_ta ?>">
                            </div>
                            <div class="clear"></div>
                        </div> 
                    </div>
                    <div id="tabtt" class="tab_content" style="display: block;">
                        <div class="formRow">
                            <label>菜单名称</label>
                            <div class="formRight">
                                <input type="text" placeholder="菜单名称" name="namett" id="username" class="tipS" original-title="" value="<?php echo $data->tenmenu_tt ?>">
                            </div>
                            <div class="clear"></div>
                        </div> 
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                    <input type="hidden" name="token" value="<?php echo $token ?>">
                    <input type="submit" class="blueB"  value="Hoàn tất">
                </div>         
                
            </div>

            
        </form>
    </div>
</div>