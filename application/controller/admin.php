<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
class Admin extends controller{
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
	public function index(){
		$this->view("index",1);
	}
	public function taomoimenu(){
		// check get
		if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
			echo json_encode(array('status' => false));
			exit;
		}
		// token chong load page
		$token = $this::csurf(30);
		$_SESSION["token_menu"]= $token ;
		$this->view("taomoimenu",1,$token);
	}
	public function sendtaomoimenu(){
		// check post
		if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
			echo json_encode(array('status' => false));
			exit;
		}
		$token = $_POST["token"];
		// check token co ton tai hay khong
		// va so sanh trung
		if(isset($_SESSION["token_menu"])){
			if($_SESSION["token_menu"] == $token ){
				//include (PATH_SYSTEM."/model/menu.php");
				//$menu = new menu();
				$nametv = isset($_POST['nametv']) ? $_POST['nametv'] : "";
				$nameta = isset($_POST['nameta']) ? $_POST['nameta'] : "";
				$namett = isset($_POST['namett']) ? $_POST['namett'] : "";
				$result = $this->menu->themMenu(array($nametv,$nameta,$namett));
				if($result){
					header("Location: ?c=admin&a=taomoimenu");
				}
			}
		}
	}
	public function getmenu(){
		// check post
		if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
			echo json_encode(array('status' => false));
			exit;
		}
		// get database menu va tab tu csdl
		$result = $this->menu->getMenu();
	}
	public function taomoitab(){
		// token chong load page
		$token = $this::csurf(30);
		$_SESSION["token_tab"]= $token ;
		$this->view("taomoitab",1,$token);
	}
	public function sendtaotab(){
		// check post
		if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
			echo json_encode(array('status' => false));
			exit;
		}
		$token = $_POST["token"];
		echo $token;
		// check token co ton tai hay khong
		// va so sanh trung
		if(isset($_SESSION["token_tab"])){
			if($_SESSION["token_tab"] == $token ){
				//include (PATH_SYSTEM."/model/menu.php");
				//$menu = new menu();
				$nametv = isset($_POST['nametv']) ? $_POST['nametv'] : "";
				$nameta = isset($_POST['nameta']) ? $_POST['nameta'] : "";
				$namett = isset($_POST['namett']) ? $_POST['namett'] : "";
				$id = $_POST['id'];

				$result = $this->tab->themTab(array($nametv,$nameta,$namett,$id));
				if($result){
					header("Location: ?c=admin&a=taomoitab&id=".$id);
				}
			}
		}
	}
	public function taonoidungtab(){
		// check post
		if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
			echo json_encode(array('status' => false));
			exit;
		}
		$token = $this::csurf(30);
		$_SESSION["token_baiviet"]= $token;
		$id = $_GET['id'];
		$result = $this->tab->getBaiviet($id);
		$thongtin = array(
			'token' => $token,
			'data' =>$result
		);
		$this->view("taonoidungtab",1,$thongtin);
	}
	// cap nhat bai viet
	public function sendtaobaiviet(){
		// check post
		if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
			echo json_encode(array('status' => false));
			exit;
		}
		$token = $_POST["token"];
		// check token co ton tai hay khong
		// va so sanh trung
		if(isset($_SESSION["token_baiviet"])){
			if($_SESSION["token_baiviet"] == $token ){
				 // CONTENT
				$nametv = isset($_POST['noidungtv']) ? $_POST['noidungtv'] : "";
				$nameta = isset($_POST['noidungta']) ? $_POST['noidungta'] : "";
				$namett = isset($_POST['noidungtt']) ? $_POST['noidungtt'] : "";
				// SEO en
				$h1_en = isset($_POST['h1_en']) ? $_POST['h1_en'] : "";
				$h2_en = isset($_POST['h2_en']) ? $_POST['h2_en'] : "";
				$title_en = isset($_POST['title_en']) ? $_POST['title_en'] : "";
				$alt_en = isset($_POST['alt_en']) ? $_POST['alt_en'] : "";
				$keyword_en = isset($_POST['keyword_en']) ? $_POST['keyword_en'] : "";
				$description_en =isset($_POST['description_en']) ? $_POST['description_en'] : "";
				// SEO cn
				$h1_cn = isset($_POST['h1_cn']) ? $_POST['h1_cn'] : "";
				$h2_cn = isset($_POST['h2_cn']) ? $_POST['h2_cn'] : "";
				$title_cn = isset($_POST['title_cn']) ? $_POST['title_cn'] : "";
				$alt_cn = isset($_POST['alt_cn']) ? $_POST['alt_cn'] : "";
				$keyword_cn = isset($_POST['keyword_cn']) ? $_POST['keyword_cn'] : "";
				$description_cn =isset($_POST['description_cn']) ? $_POST['description_cn'] : "";
				// SEO tv
				$h1_vi = isset($_POST['h1_vi']) ? $_POST['h1_vi'] : "";
				$h2_vi = isset($_POST['h2_vi']) ? $_POST['h2_vi'] : "";
				$title_vi = isset($_POST['title_vi']) ? $_POST['title_vi'] : "";
				$alt_vi = isset($_POST['alt_vi']) ? $_POST['alt_vi'] : "";
				$keyword_vi = isset($_POST['keyword_vi']) ? $_POST['keyword_vi'] : "";
				$description_vi =isset($_POST['description_vi']) ? $_POST['description_vi'] : "";
				// ID
				$id = $_POST['id'];
				// DATA 
				$date = date('Y-m-d H:i:s');
				
				$result = $this->tab->taoBaiVietMoi(array($nametv,$nameta,$namett,$id,$h1_cn,$h1_en,$h1_vi,$h2_cn,$h2_en,$h2_vi,$title_en,$title_cn,$title_vi,$alt_en,$alt_cn,$alt_vi,$keyword_en,$keyword_cn,$keyword_vi,$description_en,$description_cn,$description_vi,$date));
				if($result){
					header("Location: ?c=admin&a=taonoidungtab&id=".$id);
				}
			}
		}else{
					header("Location: ?c=admin&a=taonoidungtab&id=".$id);
		}
	}
	// Xoa bai viet
	public function xoatab(){
		// check post
		if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
			echo json_encode(array('status' => false));
			exit;
		}
		$id = $_GET['id'];
		$result = $this->tab->xoaBaiViet($id);
		if($result){
			header("Location: ?c=admin");
		}
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$result = $this->tab->xoaBaiViet($id);
			if($result){
				header("Location: ?c=admin");	
			}	
		}else{
			header("Location: ?c=admin");
		}
	}
	// danh sach menu
	public function danhsachmenu(){
		// check post
		if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
			echo json_encode(array('status' => false));
			exit;
		}
		$result = $this->menu->getDanhSachMenu();
		$this->view("danhsachmenu",1,$result);
	}
	public function xoamenu(){
		if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
			echo json_encode(array('status' => false));
			exit;
		}
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$result = $this->menu->xoaMenu($id);
			if($result){
				header("Location: ?c=admin&a=danhsachmenu");	
			}
		}else{
			header("Location: ?c=admin");
		}
	}
	// sua menu 
	public function suamenu(){
		// check get
		if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
			echo json_encode(array('status' => false));
			exit;
		}
		// check id
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			// token chong load page
			$token = $this::csurf(30);
			$_SESSION["token_suamenu"]= $token ;
			$result = $this->menu->getElMenu($id);
			$thongtin = array(
				'token' => $token,
				'data' =>$result
			);
			$this->view("suamenu",1,$thongtin);
		}else{
			header("Location: ?c=admin");
		}
	}
	public function sendsuamenu(){
		// check post
		if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
			echo json_encode(array('status' => false));
			exit;
		}
		$token = $_POST["token"];
		// check token co ton tai hay khong
		// va so sanh trung
		if(isset($_SESSION["token_suamenu"])){
			if($_SESSION["token_suamenu"] == $token){
				$id = $_POST['id'];
				$nametv = isset($_POST['nametv']) ? $_POST['nametv'] : "";
				$nameta = isset($_POST['nameta']) ? $_POST['nameta'] : "";
				$namett = isset($_POST['namett']) ? $_POST['namett'] : "";
				$result = $this->menu->suaMenu(array($nametv,$nameta,$namett,$id));
				if($result){
					header("Location: ?c=admin&a=danhsachmenu");
				}
			}
		}else{
					header("Location: ?c=admin&a=danhsachmenu");
		}
	}
}
?>