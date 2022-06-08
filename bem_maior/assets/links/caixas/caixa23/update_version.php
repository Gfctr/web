<?php 
if($_POST['action'] == 'call_this') {
 
function custom_copy($src, $dst) { 

	// open the source directory 
	$dir = opendir($src); 

	// Make the destination directory if not exist 
	@mkdir($dst); 

	// Loop through the files in source directory 
	while( $file = readdir($dir) ) { 

		if (( $file != '.' ) && ( $file != '..' )) { 
			if ( is_dir($src . '/' . $file) ) 
			{ 

				// Recursively calling custom copy function 
				// for sub directory 
				custom_copy($src . '/' . $file, $dst . '/' . $file); 

			} 
			else { 
				copy($src . '/' . $file, $dst . '/' . $file); 
			} 
		} 
	} 

	closedir($dir); 
} 

$src = "//172.16.10.10/Instalaveis/2075/"; 

$dst = "//172.16.10.23/mod-020/"; 

custom_copy($src, $dst);
}
?> 
