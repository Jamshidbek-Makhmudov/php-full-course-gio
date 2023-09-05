<?php 

class Validator
{
	private $regex='[a-z0-9]+@[a-z]+\.[a-z]{2,3}';

	public function validate_email(string $args)
	{
		if(!preg_match($this->regex, $args)){
			throw new Exception('Invalid email');
			
		}
		
	}
}