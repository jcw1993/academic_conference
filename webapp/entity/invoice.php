<?php 
class Invoice {
	public $id;
	public $memberId;
	public $title;
	public $projectType;
	public $feeType;
	public $remark;

	function __construct($id, $memberId, $title, $projectType, $feeType, $remark) {
		$this->id = $id;
		$this->memberId = $memberId;
		$this->title = $title;
		$this->projectType = $projectType;
		$this->feeType = $feeType;
		$this->remark = $remark;
	}
}
?>