<?php 
class Member {
	public $id;
	public $name;
	public $gender;
	public $telephone;
	public $mobile;
	public $position;
	public $mail;
	public $password;
	public $accommodation;
	public $enterTime;
	public $leaveTime;

	function Member($id, $name, $gender, $position, $telephone, $mobile, $mail, $password, $accommodation, $enterTime, $leaveTime) {
		$this->id = $id;
		$this->name = $name;
		$this->gender = $gender;
		$this->position = $position;
		$this->telephone = $telephone;
		$this->mobile = $mobile;
		$this->mail = $mail;
		$this->password = $password;
		$this->accommodation = $accommodation;
		$this->enterTime = $enterTime;
		$this->leaveTime = $leaveTime;
	}


}
?>