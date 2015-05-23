<?php 
class Member {
	public $name;
	public $gender;
	public $telphone;
	public $mobile;
	public $position;
	public $mail;
	public $accommodation;
	public $enterTime;
	public $leaveTime;
	public $invoice;

	function Member() {}

	function Member($name, $gender, $telphone, $mobile, $position, $mail, $accommodation, $enterTime, $leaveTime, $invoice) {
		$this->name = $name;
		$this->gender = $gender;
		$this->telphone = $telphone;
		$this->mobile = $mobile;
		$this->position = $position;
		$this->mail = $mail;
		$this->accommodation = $accommodation;
		$this->enterTime = $enterTime;
		$this->leaveTime = $leaveTime;
		$this->invoice = $invoice;
	}


}
?>