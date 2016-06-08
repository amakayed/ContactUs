<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail','Network/Email');

class ContactController extends AppController {

	public function sendMail($fname = null, $lname = null, $email = null, $message='No Message Specified'){
		$Email = new CakeEmail('default');
		$Email->from(array($email => $fname.' '.$lname));
		//$Email->to('enter email here'); specified in app/Config/email.php
		$Email->subject('Web Contact Form Submitted');
		$Email->send($message);
	}

	public function validateEmail($email){
		$valid = preg_match('/^[A-z0-9_\-]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z.]{2,4}$/',$email);
		return $valid;
	}

	public function validateText($input){
		if(empty($input)){
			return true;
		}else{
			return false;
		}
	}

	public function view(){
		if($this->request->is('post')){
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			
			if($this->validateText($fname) == true){
					$this->set('fnameError','Please enter a first name.');
			}elseif($this->validateText($lname) == true){
					$this->set('lnameError','Please enter a last name.');
			}elseif($this->validateEmail($email) == 0 ){
				$this->set('emailError','Please supply a valid email address.');
			}elseif($this->validateText($message) == true){
					$this->set('messageError','Please enter a message.');
			}else{
				$this->sendMail($fname, $lname, $email, $message);
				$this->redirect(array('controller' =>'contact','action' => 'thankyou',$fname));
			}
		}
	}

	public function thankyou($fname){
		$this->set('name',$fname);
	}

}