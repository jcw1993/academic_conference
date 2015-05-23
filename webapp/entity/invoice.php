<?php 
class Invoice {
	public $title;
	public $projectType;
	public $feeType;
	public $remark;

	function Invoice() {}

	function Invoice($title, $projectType, $feeType, $remark) {
		$this->title = $title;
		$this->projectType = $projectType;
		$this->feeType = $feeType;
		$this->remark = $remark;
	}
}
?>