<?php




class Content /** hmm */{

	var $contentID;
	var $text;

	private $id;

	static  $counter = 0;

	function	__construct($contentID, $text){

		$this->contentID = $contentID;
		$this->text = $text;

		$this->id = 12345;
	}

	function	getThumbnailURL($shamoan){
		$output = "/proxy/";
		$output .= $this->contentID;
		$output .= "/thumbnail/";
		$output .= $this->text;
		$output .= "/";
		$output .= $this->id;

		static $contentCount = 0;

		$contentCount++;

		$this->counter++;

		return urlencode($output);
	}
}







?>