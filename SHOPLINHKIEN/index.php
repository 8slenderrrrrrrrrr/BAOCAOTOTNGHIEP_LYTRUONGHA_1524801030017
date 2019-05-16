<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/reponsive-menu.css">

<?php 	
		include 'menu.php';
		
 ?>


	<?php 
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));  
		$page=$_GET['page'];
		if(!isset($page)){
			include ('sanpham/all_sp.php');
		}
			if($page=='gioithieu'){
				include 'gioithieu.php';
			}
			if($page=='mkmoi'){
				include 'mkmoi.php';
			}
			if($page=='khuyenmai'){
				include 'khuyenmai.php';
			}
			if($page=='baohanh'){
				include 'baohanh.php';
			}
			if($page=='dichvu'){
				include 'dichvu.php';
			}
			if($page=='lienhe'){
				include 'lienhe.php';
			}
			if($page=='sanpham'){
				include 'sanpham.php';
			}
			if($page=='product'){
				include 'product.php';
			}
			if($page=='quenmatkhau'){
				include 'quenmatkhau.php';
			}
			if($page=='search'){
				include 'search.php';
			}
			if($page=='thongtinnguoidung'){
				include 'thongtinnguoidung.php';
			}
			if($page=='doimatkhau_nguoidung'){
				include 'doimatkhau_nguoidung.php';
			}
			if($page=='donhangnguoidung'){
				include 'donhangnguoidung.php';
			}
			if($page=='edit_thongtinnguoidung'){
				include 'edit_thongtinnguoidung.php';
			}
			if($page=='dathang'){
				include 'dathang.php';
			}
			if($page=='thanhtoan_cart'){
				include 'thanhtoan_cart.php';
			}
			if($page=='cpu'){
					include ('sanpham/cpu.php');
				}
				if($page=='ram'){
					include ('sanpham/ram.php');
				}
				if($page=='mainboard'){
					include ('sanpham/mainboard.php');
				}
				if($page=='vga'){
					include ('sanpham/vga.php');
				}
				if($page=='hddssd'){
					include ('sanpham/hddssd.php');
				}
				if($page=='psu'){
					include ('sanpham/psu.php');
				}
				if($page=='dangkithanhcong'){
					include ('dangkithanhcong.php');
				}
				if($page=='dienthoai'){
			include ('sanpham/dienthoai.php');
		}
		if($page=='maytinh'){
			include ('sanpham/maytinh.php');
		}
		if($page=='dathang_thanhcong'){
			include ('dathang_thanhcong.php');
		}
	 ?>
 <?php 
 	include_once 'footer.php';
  ?>