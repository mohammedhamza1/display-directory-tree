<?php
$path = 'E:\Hamza\Torrents'; // add path here

function DirectoryTree($dir){
	if (is_dir($dir)) {
		 $parent = scandir($dir);
         echo '<ul>';
         foreach($parent as $sub){
             if($sub != '.' && $sub != '..'){
                echo '<li>'.$sub;
                if(is_dir($dir.'/'.$sub)) DirectoryTree($dir.'/'.$sub);
                echo '</li>';
          }
      }
    echo '</ul>';
	}
	else{
		echo "Incorrect path, Please enter the right directory";
	}
   
}

DirectoryTree($path);
?>
