<script type="text/javascript">
    var arrayMenu = [];
    $.get("?c=admin&a=getmenu",data =>{
        $("#menu-sql").html(data);
    });
</script>
<div id="leftSide">
	<div class="logo"> <a href="../" target="_blank" > <img src="" style="width:100%;"  alt="" /> </a></div>
	<div class="sidebarSep mt0"></div>
	<!-- Left navigation -->
	<ul id="menu" class="nav">
		<li class="dash" id="menu1"><a class=" active" title="" href="index.php"><span>Trang chủ</span></a></li>
		<li class="categories_li" id="menu_danhmucsanpham"><a href="" title="" class="exp"><span>Danh Mục Menu</span><strong></strong></a>
            
			<ul class="sub">
				<li><a href="?c=admin&a=taomoimenu">Tạo mới menu</a></li>
                <li><a href="?c=admin&a=danhsachmenu">Danh sách menu</a></li>
                    <div id="menu-sql"></div>
				<!--<li ><a  href="" title="" class="exp">News</a>
					<ul class="menu-2">
						<li><a href="#">News</a></li>
						<li><a href="#">News1</a></li>
					</ul>
				</li> -->
            </ul>
    </li>
    <li class="article_li" id="menu_baiviet"><a href="#" title="" class="exp"><span>Danh Mục Bài Viết</span><strong></strong></a>
    	<ul class="sub">
    		<li  ><a href="index.php?com=info&act=capnhat&typechild=gioithieu">Giới thiệu</a></li>
    		<li  ><a href="index.php?com=info&act=capnhat&typechild=chinhsach">Chính sách</a></li>   
    		<li  ><a href="index.php?com=info&act=capnhat&typechild=quydinh">Quy Định</a></li>   
    		<li  ><a href="index.php?com=info&act=capnhat&typechild=congnghe">Công nghệ</a></li> 

    		<li  ><a href="index.php?com=info&act=capnhat&typechild=giaiphap">Giai pháp</a></li> 
    		<li  ><a href="index.php?com=info&act=capnhat&typechild=baohanh">Bảo hành</a></li> 
    		<li  ><a href="index.php?com=info&act=capnhat&typechild=khuyenmai">Khuyến mãi</a></li> 
    		<li  ><a href="index.php?com=info&act=capnhat&typechild=kinhnghiem">Kinh nghiệm</a></li> 
    		<li  ><a href="index.php?com=news&act=man&typechild=news">Tin tức</a></li>
    		<li  ><a href="index.php?com=news&act=man&typechild=dichvu">Dịch vụ</a></li>
            <!--  <li  ><a href="index.php?com=news&act=man&typechild=tvdd">Tư vấn dinh dưỡng</a></li>
          
              <li  ><a href="index.php?com=news&act=man&typechild=amthuc">Ẩm thực</a></li>
                <li  ><a href="index.php?com=news&act=man&typechild=ktsk">Kiểm tra sức khỏe</a></li>
            <li  ><a href="index.php?com=news&act=man&typechild=tanman">Tản mạn</a></li>
            <li  ><a href="index.php?com=video&act=man&typechild=video">Video Clip</a></li>
            <li  ><a href="index.php?com=video&act=man&typechild=tag">Tag</a></li> -->


        </ul>

    </li>









    <li class="template_li" id="menu_trangtinh"><a href="#" title="" class="exp"><span>Trang tĩnh</span><strong></strong></a>
    	<ul class="sub">


    		<li  ><a href="index.php?com=info&act=capnhat&typechild=footer">Footer</a></li>    





    		<li  ><a href="index.php?com=info&act=capnhat&typechild=lienhe">Liên hệ</a></li> 
    		<li  ><a href="index.php?com=info&act=capnhat&typechild=slogan">Slogan</a></li> 



    	</ul>
    </li>



<!--    <li class="template_li" id="menu_trangtinh"><a href="#" title="" class="exp"><span>Thống kê lượt xem</span><strong></strong></a>
        <ul class="sub">
            <li><a href="index.php?com=thongke&act=luotxem_cap1">Thống kê lượt xem danh mục 1</a></li>
            <li><a href="index.php?com=thongke&act=luotxem_cap2">Thống kê lượt xem danh mục 2</a></li>
            <li><a href="index.php?com=thongke&act=luotxem">Thống kê lượt xem sản phẩm</a></li>
        </ul>
    </li>-->




    <li class="gallery_li" id="menu6"><a href="#" title="" class="exp"><span>Hình Ảnh - Support </span><strong></strong></a>
    	<ul class="sub">




    		<!--            <li ><a href="index.php?com=background&act=capnhat&typechild=bg_footer">Background Footer</a></li>-->




    		<!--            <li ><a href="index.php?com=banner&act=man_banner">Cập nhật Banner Top </a></li>-->
    		<li ><a href="index.php?com=banner&act=capnhat">Cập nhật Logo bot </a></li>

    		<li ><a href="index.php?com=background&act=capnhat">Cập nhật background </a></li>



    		<!--   <li ><a href="index.php?com=image_url&act=man_photo&typechild=slider">Slide Show </a></li> -->


    		<li ><a href="index.php?com=image_url&act=man_photo&typechild=doitac">Đối tác </a></li>


    		<!-- <li ><a href="index.php?com=support_online&act=man&typechild=support_online">Hỗ trợ trực tuyến</a></li> -->


    		<!--  <li ><a href="index.php?com=image_url&act=man_photo&typechild=mangxahoi">Mạng xã hội</a></li>-->

    		<li  ><a href="index.php?com=bando&act=man&typechild=bando">Bản đồ</a></li>


    		<!--   <li ><a href="index.php?com=image_url&act=man_photo&typechild=quangcao">Quảng Cáo</a></li> -->


    		<!--  <li ><a href="index.php?com=support_online&act=man&typechild=support_online">Hỗ trợ trực tuyến </a></li> -->


    		<!--<li  ><a href="index.php?com=quangcaobody&act=man_photo">Quảng cáo 2 bên</a></li>  -->




    	</ul>
    </li>


    <li class="setting_li" id="menu8"><a href="#" title="" class="exp"><span>Cấu hình website</span><strong></strong></a>

    	<ul class="sub">

    		<!-- <li><a href="../ajax/sitemap.php" title="">Tạo sitemap</a></li>-->

    		<li><a href="index.php?com=newsletter&act=man" title="">Tư vấn mua hàng</a></li>

    		<li><a href="index.php?com=setting&act=capnhat" title="">Cấu hình chung</a></li>

    		<li class="this"><a href="index.php?com=user&act=admin_edit">Thông tin Tài khoản</a></li>
    	</ul>
    </li>
</ul></div>
<!-- Right side -->
<div id="rightSide">
	<!-- Top fixed navigation -->
	<div class="topNav">
		<div class="wrapper">
			<div class="welcome"><a href="#" title=""><img src="img/userPic.png" alt="" /></a><span>Xin chào, admin!</span></div>
			<div class="userNav">
				<ul>
					<li><a href="http://demo1.chonhadatviet.com/voxe" title="" target="_blank"><img src="img/mainWebsite.png" alt="" /><span>Vào trang web</span></a></li>
					<li><a href="index.php?com=user&act=admin_edit" title=""><img src="img/profile.png" alt="" /><span>Thông tin tài khoản</span></a></li>
					<li class="ddnew hidden-an"><a title=""><img src="img/messages.png" alt="" /><span>Thông báo</span><span class="numberTop">0</span></a>
						<ul class="userMessage">
							<li><a href="admin.php?do=orders" title="" class="sInbox"><span>Đơn hàng</span> <span class="numberTop" style="float:none; display:inline-block">0</span></a></li>
							<li><a href="admin.php?do=comments" title="" class="sInbox"><span>Bình luận</span> <span class="numberTop" style="float:none; display:inline-block">0</span></a></li>
							<li><a href="admin.php?do=contact_logs" title="" class="sInbox"><span>Liên hệ</span> <span class="numberTop" style="float:none; display:inline-block">0</span></a></li>
						</ul>
					</li>
					<li><a href="index.php?com=user&act=logout" id="userLogout" title=""><img src="img/logout.png" alt="" /><span>Đăng xuất</span></a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
   