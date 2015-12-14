<?php
require_once('Input.php');
class Form {
	private $form;

	public function __construct($name, $action)
	{
		$this->form = "<form name='$name' action='$action' method='post'>\n";
		$this->form .= "<fieldset><legend>$name</legend>\n";
	}

	public function textInput($label, $name) 
	{
		$this->form .= Input::getInput($label, $name, 'text');
	}

	public function passwordInput($label, $name) 
	{
		$this->form .= Input::getInput($label, $name, 'password');
	}

	public function emailInput($label, $name) 
	{
		$this->form .= Input::getInput($label, $name, 'email');
	}

	public function submitButton($value) 
	{
		$this->form .= "\t<input type='submit' value='$value' />\n";
	}

	public function getForm() {
		$this->form .= "</fieldset></form>";
		return $this->form;
	}

}