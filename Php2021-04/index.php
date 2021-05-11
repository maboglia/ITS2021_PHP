<?php  include('header.php');
?>
<?php  

if (   isset($_GET['pagina'])     ){
	
	switch ($_GET['pagina']) {
		case 'p1':
			include('pagina.php');
		break;
		
		default:
				include('content.php');
		break;
	}
}
else {
    include 'welcome.php';
}



?>
<?php  include('footer.php');
?>