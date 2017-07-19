
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
                <li><a href="index.php?com=info&amp;act=man&amp;typechild=gioithieu"><span>Menu</span></a></li>
                <li class="current"><a href="#" onclick="return false;">Tạo tab mới</a></li>
            </ul>
            <div class="clear"></div>
        </div>
        <form name="supplier" id="validate" class="form" action="?c=admin&a=sendtaotab" method="post" >         
            <div class="widget">
                <div class="title"><img src="img/list.png" alt="" class="titleIcon">
                    <h6>Tạo tab</h6>
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
                            <label>Tên tab</label>
                            <div class="formRight">
                                <input type="text" placeholder="tên menu..." name="nametv" id="username" class="tipS" original-title="">
                            </div>
                            <div class="clear"></div>
                        </div> 
                    </div>
                    <div id="tabta" class="tab_content" style="display: block;">
                        <div class="formRow">
                            <label>Tab name</label>
                            <div class="formRight">
                                <input type="text" placeholder="menu name..." name="nameta" id="username" class="tipS" original-title="">
                            </div>
                            <div class="clear"></div>
                        </div> 
                    </div>
                    <div id="tabtt" class="tab_content" style="display: block;">
                        <div class="formRow">
                            <label>标签名称</label>
                            <div class="formRight">
                                <input type="text" placeholder="标签名称" name="namett" id="username" class="tipS" original-title="">
                            </div>
                            <div class="clear"></div>
                        </div> 
                    </div>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                    <input type="hidden" name="token" value="<?php echo $row ?>">
                    <input type="submit" class="blueB"  value="Hoàn tất">
                </div>         
            </div>
        </form>
    </div>
</div>