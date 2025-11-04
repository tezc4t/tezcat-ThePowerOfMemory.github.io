<?php
function active($current_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);
  if($current_page == $url){
      echo 'active'; //class name in css 
  } 
}
?>
