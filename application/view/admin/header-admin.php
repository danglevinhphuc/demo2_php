
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Administrator - Hệ thống quản trị nội dung</title>

	<!-- Font Awesome -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<link href="css/main.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
	<script type="text/javascript" src="js/external.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<link href="css/datepicker.css" rel="stylesheet" type="text/css" />
	<script src="js/ckeditor/ckeditor/ckeditor.js" type="text/javascript" ></script>
	<style type="text/css">
		.menu-2 a{
			color: #fff !important;
		}
	</style>


</head>

<body >




	<!-- Left side content -->    
	<script type="text/javascript">
		$(function(){
			var num = $('#menu').children(this).length;
			for (var index=0; index<=num; index++)
			{
				var id = $('#menu').children().eq(index).attr('id');
				$('#'+id+' strong').html($('#'+id+' .sub').children(this).length);
				$('#'+id+' .sub li:last-child').addClass('last');
			}
			$('#menu .activemenu .sub').css('display', 'block');
			$('#menu .activemenu a').removeClass('inactive');
		})
	</script>


	<script language="javascript">
		$(document).ready(function(){
    //  When user clicks on tab, this code will be executed
    $("#tabs li").click(function() {
        //  First remove class "active" from currently active tab
        $("#tabs li").removeClass('active');

        //  Now add class "active" to the selected/clicked tab
        $(this).addClass("active");

        //  Hide all tab content
        $(".tab_content").hide();

        //  Here we get the href value of the selected tab
        var selected_tab = $(this).find("a").attr("href");

        //  Show the selected tab content
        $(selected_tab).fadeIn();

        //  At the end, we add return false so that the click on the link is not executed
        return false;
    });
    
    
    
    $("#tabs_seo li").click(function() {
        //  First remove class "active" from currently active tab
        $("#tabs_seo li").removeClass('active');

        //  Now add class "active" to the selected/clicked tab
        $(this).addClass("active");

        //  Hide all tab content
        $(".tab_seo_content").hide();

        //  Here we get the href value of the selected tab
        var selected_tab = $(this).find("a").attr("href");

        //  Show the selected tab content
        $(selected_tab).fadeIn();

        //  At the end, we add return false so that the click on the link is not executed
        return false;
    });
    
});
</script>


<!-- MultiUpload -->
<link href="css/jquery.filer.css" type="text/css" rel="stylesheet" />
<link href="css/jquery.filer-dragdropbox-theme.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.filer.min.js"></script>