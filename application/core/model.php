<?php
class Model{
	private $db;
	private $classname;
	function __construct(){
		$this->db= new Database();
		$this->classname = get_class($this);
	}
	// add menu 
	public function themMenu($thongtin =array()){
		$table =	strtolower($this->classname);
		$sql = "INSERT INTO `$table` (tenmenu_tv,tenmenu_ta,tenmenu_tt) VALUES(?,?,?)";
		$this->db->setQuery($sql);
		$result = $this->db->execute($thongtin);
		setcookie("flash-menu","Tạo Menu thành công",time()+1);
		return true;
	}
	public function getMenu(){
		//tao mang gom cac thanh phan lai
		$table = strtolower($this->classname);
		$sql = "SELECT `menu`.`id_menu`,`menu`.`tenmenu_tv` From `menu` ";
		//$sql = "SELECT * From `menu` ";
		$this->db->setQuery($sql);
		$result_count = $this->db->loadAllRows();
		// data cua tab
		$sql_tab = "SELECT *  From `menu` , `tab_menu` where `menu`.`id_menu`= `tab_menu`.`id_menu`";
		$this->db->setQuery($sql_tab);
		$result_tab = $this->db->loadAllRows();
		
		for($i = 0 ; $i< count($result_count) ;$i++){
			echo '<li ><a  href="" title="" class="exp">'.$result_count[$i]->tenmenu_tv.'</a>';
			echo '	<ul class="menu-2">';
			echo '<li ><a  href="?c=admin&a=taomoitab&id='.$result_count[$i]->id_menu.'">Tạo mới cho tab '.$result_count[$i]->tenmenu_tv.'</a> </li>';
			for($j = 0 ; $j  < count($result_tab) ; $j++){
				if($result_tab[$j]->id_menu == $result_count[$i]->id_menu){
					echo '	<li><a href="?c=admin&a=taonoidungtab&id='.$result_tab[$j]->id_tab.'">'.$result_tab[$j]->content_tv.'</a></li>';
				}
			}
			echo '</ul>';
			echo '</li>';
		}
	}
	// add menu 
	public function themTab($thongtin =array()){
		$table =strtolower($this->classname);
		$sql = "INSERT INTO `$table` (content_tv,content_ta,content_tt,id_menu) VALUES(?,?,?,?)";
		echo $sql;
		$this->db->setQuery($sql);
		$result = $this->db->execute($thongtin);
		setcookie("flash-menu","Tạo Tab thành công",time()+1);
		return true;
	}
	// lay thong tin bai viet 
	public function getBaiviet($id){
		$table =	strtolower($this->classname);
		$sql = "SELECT * FROM `$table` where id_tab= $id";
		$this->db->setQuery($sql);
		$result_tab = $this->db->loadRow();
		return $result_tab;
	}
	// tao bai viet cho tab
	public function taoBaiVietMoi($thongtin =array()){
		$table =	strtolower($this->classname);
		$sql = "UPDATE `$table` SET text_tv='$thongtin[0]',text_ta='$thongtin[1]',text_tt='$thongtin[2]',H1_tt='$thongtin[4]',H1_ta='$thongtin[5]',H1_tv='$thongtin[6]',
		H2_tt='$thongtin[7]',H2_ta='$thongtin[8]',H2_tv='$thongtin[9]',title_ta='$thongtin[10]',title_tt='$thongtin[11]',title_tv='$thongtin[12]',alt_ta='$thongtin[13]',alt_tt='$thongtin[14]',alt_tv='$thongtin[15]',tukhoa_ta='$thongtin[16]',tukhoa_tt='$thongtin[17]',tukhoa_tv='$thongtin[18]',des_ta='$thongtin[19]',des_tt='$thongtin[20]',des_tv='$thongtin[21]',today='$thongtin[22]' WHERE id_tab = '$thongtin[3]'";
		
		$this->db->setQuery($sql);
		$result = $this->db->execute();
		setcookie("flash-menu","Sửa bài viết  thành công",time()+1);
		return true;
	}
	// xoa bai viet
	public function xoaBaiViet($id){
		$table = strtolower($this->classname);

		$sql = "DELETE FROM `$table` WHERE id_tab= $id ";
		
		$this->db->setQuery($sql);
		$query = $this->db->execute();
		setcookie("flash-menu","Xoá bài viết thành công",time()+1);
		return true;
	}
	// lay danh sach menu
	public function getDanhSachMenu(){
		$table =	strtolower($this->classname);
		$sql = "SELECT * FROM `$table`";		
		$this->db->setQuery($sql);
		$result_tab = $this->db->loadAllRows();
		return $result_tab;
	}
	// xoa menu

	public function xoaMenu($id){
		$table = strtolower($this->classname);
		$sql_tab = "DELETE FROM `tab_menu` WHERE id_menu= $id ";
		
		$this->db->setQuery($sql_tab);
		
		$query_tab = $this->db->execute();
		if($query_tab){
			$sql = "DELETE FROM `$table` WHERE id_menu= $id ";

			$this->db->setQuery($sql);
			$query = $this->db->execute();
		}
		setcookie("flash-menu","Xoá menu thành công",time()+1);
		return true;
	}
	// get  menu  de sua 
	public function getElMenu($id){
		$table =	strtolower($this->classname);
		$sql = "SELECT * FROM `$table` where id_menu =$id";		
		$this->db->setQuery($sql);
		$result_tab = $this->db->loadRow();
		return $result_tab;
	}
	// sua menu 
	public function suaMenu($thongtin =array()){
		$table = strtolower($this->classname);
		$sql = "UPDATE `$table` SET tenmenu_tv='$thongtin[0]',tenmenu_ta='$thongtin[1]',tenmenu_tt='$thongtin[2]' WHERE id_menu = '$thongtin[3]'";
		$this->db->setQuery($sql);
		$result = $this->db->execute();
		setcookie("flash-menu","Sửa bài menu  thành công",time()+1);
		return true;
	}
	// GEt tab
	public function getTab(){
		$table =	strtolower($this->classname);
		$sql = "SELECT *  From `menu` , `tab_menu` where `menu`.`id_menu`= `tab_menu`.`id_menu` order by `tab_menu`.`id_tab` DESC";	
		$this->db->setQuery($sql);
		$result_tab = $this->db->loadAllRows();
		return $result_tab;
	}
	// get  menu tab
	public function getElMenuAll($id){
		$table =	strtolower($this->classname);
		$sql = "SELECT * FROM `$table` where id_menu =$id";		
		$this->db->setQuery($sql);
		$result_tab = $this->db->loadAllRows();
		return $result_tab;
	}
}