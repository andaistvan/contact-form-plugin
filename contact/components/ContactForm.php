<?php namespace Arteriaweb\Contact\Components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;

class ContactForm extends ComponentBase
{
	public function componentDetails(){
		return [
			'name' => 'contactform',
			'description' => 'Contact form plugin',
		];
	}

	public function onMailSent(){

		$vars = [
			'name' => Input::get('vezeteknev'),
			'vezeteknev' => Input::get('vezeteknev'),
			'keresztnev' => Input::get('keresztnev'),
			'email' => Input::get('email'),
			'telefon' => Input::get('telefon'),
			'erkezes' => Input::get('erkezes'),
			'message' => Input::get('message'),
		];

		Mail::send('arteriaweb.contact::mail.message', $vars, function($message) {

		    $message->to('andaistvan@gmail.com', 'Admin Person');
		    $message->subject('New contact form plugin message!');

		});

	}
}
