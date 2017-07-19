<div class="wrapper">
	<div class="control_frm" style="margin-top:25px;">
		<div class="bc">
			<ul id="breadcrumbs" class="breadcrumbs">

				<li><a href="index.php?com=bando&amp;act=add&amp;typechild=bando&amp;curPage="><span>Menu</span></a></li>
				<li class="current"><a href="#" onclick="return false;">Quản lý danh sách menu</a></li>

			</ul>
			<div class="clear"></div>
		</div>
	</div>
	<form name="f" id="f" method="post">
		<div class="control_frm" style="margin-top:0;">
			<div style="float:left;">




				<input type="button" class="blueB" value="Thêm" onclick="location.href='index.php?com=bando&amp;act=add&amp;typechild=bando&amp;curPage='"> 


				<input type="button" class="blueB" value="Hiện" onclick="ChangeAction('index.php?com=bando&amp;act=man&amp;typechild=bando&amp;curPage=&amp;multi=show');return false;">



				<input type="button" class="blueB" value="Ẩn" onclick="ChangeAction('index.php?com=bando&amp;act=man&amp;typechild=bando&amp;curPage=&amp;multi=hide');return false;">



				<input type="button" class="blueB" value="Xoá" id="xoahet" onclick="ChangeAction('index.php?com=bando&amp;act=man&amp;typechild=bando&amp;curPage=&amp;multi=del');return false;">



			</div> 
			<div style="float:right;">
				<div class="selector">
					Tìm kiếm: <input name="keyword" id="keyword" type="text" value=""> <input type="button" value=" Tìm " onclick="onSearch(event)">
				</div>  
			</div>

		</div>
		<div class="widget">
			<div class="title"><span class="titleIcon">
				<input type="checkbox" name="chonhet" id="chonhet">
			</span>
			<h6>Danh sách các danh mục hiện có</h6>
		</div>
		<table cellpadding="0" cellspacing="0" width="100%" class="sTable withCheck mTable" id="checkAll">
			<thead>
				<tr>
					<td></td>
					<td class="tb_data_small"><a href="#" class="tipS" original-title="">Thứ tự</a></td>
					<td class="sortCol header"><div>Tên Việt<span></span></div></td>
					<td class="sortCol header"><div>Tên Anh<span></span></div></td>
					<td class="sortCol header"><div>Tên Trung<span></span></div></td>
					<td class="tb_data_small">Nổi bật</td>
					<td class="tb_data_small">Ẩn/Hiện</td>
					<td width="200">Thao tác</td>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<td colspan="10"><div class="pagination">       </div></td>
				</tr>
			</tfoot>
			<tbody>
			<?php if(isset($row)){ ?>
					<?php for($i = 0 ; $i < count($row) ; $i++){ ?>
				<tr>
				
							
					
					<td>
						<input type="checkbox" name="chon[]" id="chon" value="19" class="chon">

					</td>
					<td align="center" style="border-left-color: rgb(203, 203, 203);">
						<input type="text" value="<?php echo $i+1; ?>" name="ordering[]" class="tipS smallText" original-title="Nhập số thứ tự" id="number19" >
						<div id="ajaxloader"><img class="numloader" id="ajaxloader19" src="images/loader.gif" alt="loader"></div>
					</td> 
					<td class="title_name_data">
						<a href="" class="tipS SC_bold" original-title=""><?php echo $row[$i]->tenmenu_tv ?></a>
					</td>
					<td class="title_name_data">
						<a href="" class="tipS SC_bold" original-title=""><?php echo $row[$i]->tenmenu_ta ?></a>
					</td>
					<td class="title_name_data">
						<a href="" class="tipS SC_bold" original-title=""><?php echo $row[$i]->tenmenu_tt ?></a>
					</td>
					<td align="center">
						<a href="" title="" class="smallButton tipS" original-title="Click để hiện"><img src="img/hide.png" alt=""></a>
					</td>
					<td align="center">
						<a href="" title="" class="smallButton tipS" original-title="Click để ẩn"><img src="img/tick.png" alt=""></a>
					</td>
					<td class="actBtns">
						<a href="?c=admin&a=suamenu&id=<?php echo $row[$i]->id_menu ?>" title="" class="smallButton tipS" original-title="Sửa"><img src="img/pencil.png" alt=""></a>
						<a href="?c=admin&a=xoamenu&id=<?php echo $row[$i]->id_menu ?>"  title="" class="smallButton tipS" original-title="Xóa" onClick="javascript:return confirm('Bạn có muốn chắc muốn xoá menu này không' );"><img src="img/close.png" alt=""></a>     
					</td>
					
				</tr>
				<?php }}?>
			</tbody>
		</table>
	</div>
</form>
</div>