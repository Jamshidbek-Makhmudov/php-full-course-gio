<?php 
//access modefire: public, private, protected,...
class Transaction{
	//property
	private $amount;
	private $description;
//constructor
	public function __construct(float $amount, string $description)
	{
		$this->amount=$amount;
		$this->description=$description;
		
	}

	//method
	
	// public function addTax(float $rate): void
	// {
	// 	$this->amount+=$this->amount *$rate/100;
		
	// }

	// public function applyDiscount(float $rate): void
	// {
	// 	$this->amount-=$this->amount*$rate/100;
		
	// }
	public function addTax(float $rate): Transaction
	{
		$this->amount+=$this->amount *$rate/100;
		return $this;
		
	}

	public function applyDiscount(float $rate): Transaction
	{
		$this->amount-=$this->amount*$rate/100;
		return $this;
		
	}

	public function getAmount(): float
	{
	return $this->amount;
	}

	public function __destruct()
	{
		echo "Destruct ". $this->description . "<br>";
		
	}
}

?>