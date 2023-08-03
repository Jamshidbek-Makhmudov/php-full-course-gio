<?php 
interface MyInterface
{
	const TEXT=1;

	public function method1();
	public function method2();

}
//class
abstract class MyClass implements MyInterface
{
	public function method2()
	{
		# code...
	}
}

//class2

class Myclass2 extends MyClass
{
	public function method1()
	{
		# code...
	}
}
echo MyInterface::TEXT;

$myClass = new Myclass2();

?>









<!-- interface from Dani Krossing: -->
<?php 

interface PaymentInterface{
	public function payNow();

		
}
interface LoginInterface{
	public function loginFirst();

		
}
//1
class PayPal implements PaymentInterface, LoginInterface{
public function loginFirst() {}
public function payNow(){}
public function paymentProccess() {

		$this->loginFirst();
		$this->payNow();
	}
		
}
//1.5
class BankTransfer implements PaymentInterface, LoginInterface{
public function loginFirst() {}
public function payNow(){}
public function paymentProccess() {

		$this->loginFirst();
		$this->payNow();
	}
		
}
//2
class Visa implements PaymentInterface{
	public function payNow(){}
	public function paymentProccess() {
		$this->payNow();
	}
}
//2
class Cash implements PaymentInterface{
	public function payNow(){}
	public function paymentProccess() {
		$this->payNow();
	}
}
//3
class BuyProduct
{

public function pay(PaymentInterface $paymentType){
	//$paymentType->paymentProccess();

	}
	public function onlinePay(LoginInterface $paymentType) {
	//	$paymentType->paymentProccess();
		
	}
}

$paymentType=new Cash();
$buyProduct=new BuyProduct();
$buyProduct->pay($paymentType);

?>


<!-- interfacelar classlarni bir xil qoida solib beradi. agar bir nehcta classlar da 1xil methodlar takrorlanishi kerak bolsa biz shu methodni interfacega chiqarib qoysak boladi. keyin shu interfacedan implements olish kerak boladi va shundan song shu implements ni olgan class lar interface ichidagi methodni ishlatishi majburiy bolib qoladi aks xolda error beradi -->