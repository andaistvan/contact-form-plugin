<?php namespace Arteriaweb\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
		 return[
			'Arteriaweb\Contact\Components\ContactForm' => 'contactform', 
		 ];
    }

    public function registerSettings()
    {
    }
}
