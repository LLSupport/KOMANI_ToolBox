<?php
header("X-Powered-By: LLS/0.3");
header('Server: LLS/0.3');
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Copyright: LLSupport(CN)/LLSupport(SG)');
error_reporting(~E_ALL & ~E_NOTICE);

$dir_sources = "";
$dir_packed = "usc/packed";

function printdir($dir){
	$files = array();
	if($handle = @opendir($dir)){
		while(($file = readdir($handle)) !== false){
			if( $file != ".." && $file != "."){
				if(is_dir($dir . "/" . $file)) {
					$files[$file] = printdir($dir . "/" . $file);
				} else {
					$filetime = filemtime($dir . "/" . $file);
					$files[$filetime] = $filetime;
				}
			}
		}
		@closedir($handle);
		return $files;
	}
}

function arraysort($aa) {
	if( is_array($aa)){
		ksort($aa);
		$re = current($aa);
		return $re;
	} else {
		return $aa;
	}
}

function download($dir){
	$handler = opendir($dir);
	while (($filename = readdir($handler)) !== false) {
		if ($filename != "." && $filename != "..") {
	        $files = $filename ;
	    }
	}
    closedir($handler);
	return $files;
}

function zip($input_dir,$output_dir){
	if (!extension_loaded('zip')) {
    	return false;
	}
	$rootPath = realpath($input_dir);
	$zip = new ZipArchive();
	$zip->open('usc/packed/usc_5pack_'.time().'.zip', ZipArchive::CREATE | ZipArchive::OVERWRITE);
	$files = new RecursiveIteratorIterator(
	    new RecursiveDirectoryIterator($rootPath),
	    RecursiveIteratorIterator::LEAVES_ONLY
	);
	foreach ($files as $name => $file){
	    if (!$file->isDir())
	    {
	        $filePath = $file->getRealPath();
	        $relativePath = substr($filePath, strlen($rootPath) + 1);

	        $zip->addFile($filePath, $relativePath);
	    }
	}
}
$resources_t = current(arraysort(printdir($dir_sources)));
$packed_t = arraysort(printdir($dir_packed));

if ($packed_t<$resources_t) {
	unlink('usc/packed'.download($dir_packed));
	zip($dir_sources,$dir_packed);
	header("Location: /usc/packed/".download($dir_packed));
	exit(); 
}else{
	header("Location: /usc/packed/".download($dir_packed));
}

?>
