<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
class Trangchu extends controller{
	public $menu;
	public $tab;
	public function __construct(){
		include (PATH_SYSTEM."/model/menu.php");
		include (PATH_SYSTEM."/model/tab.php");
		$this->menu= new menu();
		$this->tab = new tab_menu();
	}
	public static function csurf($ktxuathien){
		$token = array("a","b","c","d","e","f","r","g","s","y","A","B","C","D","E","F","R","S","M","N"
			,"1","2","3","4","5","6","7","8","9","0");
		$kq = "";
		for ($i=0; $i <$ktxuathien ; $i++) { 
			$kq = $kq. $token[rand(0,count($token)-1)];
		}
		return $kq;
	}
	// GET vao trang chu
	public function index(){
		// check get
		if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
			echo json_encode(array('status' => false));
			exit;
		}
		$menu = $this->menu->getDanhSachMenu();
		$tab = $this->tab->getTab();
		$thongtin = array(
			"menu" => $menu,
			"tab" => $tab
		);
		$this->view("index",0,$thongtin);
	}
	// GET menu cho client
	public function tabpage(){
		// check get
		if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
			echo json_encode(array('status' => false));
			exit;
		}
		if(isset($_GET["id"])){
			$id =$_GET["id"];
			$menu = $this->menu->getDanhSachMenu();
			$result = $this->tab->getElMenuAll($id);
			$thongtin = array(
				"menu" => $menu,
				"data" => $result
			);
			$this->view("tabpage",0,$thongtin);
		}else{
			header("Location: ?c=trangchu");
		}
	}	
}
?>