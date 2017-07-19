<?php
if(!defined('PATH_SYSTEM')) die ('Bad requested!');
class Controller{
	public function view($viewname=null,$admin=1,$data= null){
		// Header page

		/** 

			**$row dùng để gán trên thẻ head về các thông tin trong title hoặc meta 
			**$row load thong tin cho các sp 
		**/
		

		if($data){
			$row = $data;
		}
		
		// page
		if($admin == 1){
			//Header page
			require PATH_SYSTEM. "/view/admin/header-admin.php";
			//Menu page
			require PATH_SYSTEM. "/view/admin/menu-admin.php";
			if($viewname){
				require PATH_SYSTEM. "/view/admin/". $viewname .".php";	
			}
			//Footer page
			require PATH_SYSTEM. "/view/admin/footer-admin.php";
		}
		// page
		if($viewname && $admin == 0){
			//Header page
			require PATH_SYSTEM. "/view/client/header.php";
			//Menu page
			require PATH_SYSTEM. "/view/client/menu.php";
			if($viewname){
				require PATH_SYSTEM. "/view/client/". $viewname .".php";	
			}
			//Footer page
			require PATH_SYSTEM. "/view/client/footer.php";
		}
		
	}
}
?>