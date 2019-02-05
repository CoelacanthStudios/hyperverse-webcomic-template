<?php
function replace_img_src($original_img_tag, $new_src_url) {
	$doc = new DOMDocument();
	$doc->loadHTML($original_img_tag);
	$tags = $doc->getElementsByTagName('img');
	
	if(count($tags) > 0) {
		$tag = $tags->item(0);
		$tag->setAttribute('src', $new_src_url);
		return $doc->saveXML();
	}
	
	return false;
}
?>
