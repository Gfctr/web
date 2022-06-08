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

$src = "//10.1.1.10/Instalaveis/2075/"; 

$dst = "//10.1.1.215/mod-020/"; 

custom_copy($src, $dst);
}
?> 
