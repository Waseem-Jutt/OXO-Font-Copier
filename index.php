<?php
/*
* Plugin : OXO Font Copier
* Author : Waseem Jutt
* Author URI : http://oxothemes.com/
* Licence : GNU V 2.0
*/

// Directory Folder Name 
$dirs = array_filter(glob('ofl/*'), 'is_dir');

// New Directory Folder Name 
$uploads_dir = 'fonts/';

// Counter
$count = 0;

/*
* If you want to move another font type to new directory 
* Then only change @ftype
* Warning: Don't add multiple font types
*/
$ftype = 'ttf';

foreach($dirs as $dir){
	
	// Read Only font type(@ftype) from given directories
	$files = glob($dir.'/*.'.$ftype);
	
	foreach($files as $file){
		
		// Get Fontname
		$filename = basename($file);
		
		// Move Font to new directory
		$return = rename($file,$uploads_dir.$filename);
		
		if($return){
			
			// True Condition
			// do something here if you want to do.
			
		}else{
			
			// False Condition
			// Show fonts name that unable move into new directory 
			echo $count.'-'.$file.'</br>';
			
		}
		
	$count ++;
	}
}



?>
