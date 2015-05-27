<?php 
class Material {
	public $id;
	public $originName;
	public $name;
	public $path;
	public $uploadTime;
	public $downloadCount;

	function __construct($id, $originName, $name, $path, $uploadTime, $downloadCount) {
		$thid->id = $id;
		$this->originName = $originName;
		$this->name = $name;
		$this->path = $path;
		$this->uploadTime = $uploadTime;
		$this->downloadCount = $downloadCount;
	}
}
?>