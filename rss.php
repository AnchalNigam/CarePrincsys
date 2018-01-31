<?php
function feednews($feed) {
 $domOBJ = new DOMDocument();
 $domOBJ->load($feed);     
 
 $content = $domOBJ->getElementsByTagName("item");
 
 $news=array();
 $i=0;
 foreach( $content as $data )
 {
	 if($i<6) {
	 $new=array();
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
      $pub = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
	     $desc= $data->getElementsByTagName("description")->item(0)->nodeValue;
  $desc = preg_replace("/<img[^>]+\>/i", " ", $desc); 
  array_push($new,$title,$link,$pub,$desc);
  $news[$i]=$new;
  $i++;
 } }
 return $news;
}
?>