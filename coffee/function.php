<?php	
	function connect_database()
	{
		$koneksi=new mysqli("localhost","root","admin","spic_");
		return $koneksi;
	}
	function redirect($_location){
		header( 'location:' . $_location);
	}
	function get_title($_title){
		return('<title>' . $_title. '</title>');
	}
	function open_page($_title){
		echo('<html><head>' . get_title($_title) . '</head><body>');
	}
	function close_page(){
		echo('</body></html>');
	}
	function get_session($_key){
		$value = (isset($_SESSION[$_key]))? $_SESSION['$_key']:  null;
		return ($value);

	}

	function set_session($_key,$_value){
		$_SESSION[$_key] = $_value;
	}
	function destroy_session($_key){
		unset($_SESSION[$_key]);
		session_destroy();
	}

	?>