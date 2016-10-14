<?php

namespace App;

class PayPal
{
	private $_apiContext;
	private $shopping_cart;
	private $_ClientId = 'AYnRDdr7zMHzlf0YZAUlO4JaJI-qxkqnfNwLQnXHmEkwolhgFY9rToEmp9kpyhOIjBycE164hi5aRoJ0';
	private $_ClientSecret = 'ELb1YgUD7UjDB8OFse2Lr42TlNv_sAvKtZ_FbD3tTmk4jXpRZN-oIJpmUw6Vsl9s9UtHvAvDGzSsj2fi';

	public function __construct($shopping_cart){
		
		$this->_apiContext = \PayPalPayment::ApiContext($this->_ClientId,$this->_ClientSecret);

		//Se pasa por parametro el nombre del archivo de configuracion sin el php
		$config = config('paypal_payment');

		//Se formatea el objeto para que sea tal cual lo espera PayPal
		$flatConfig = array_dot($config);


		$this->_apiContext->setConfig($flatConfig);

		$this->shopping_cart = $shopping_cart;


	}

	public function generate(){

		$payment = \PayPalPayment::payment()->setIntent("sale")->setPayer($this->payer())->setTransactions([$this->transaction()])->setRedirectUrls($this->redirectURLs());

		try{
			$payment->create($this->_apiContext);

		}
		catch(\Exception $ex){
			dd($ex);
			exit(1);
		}
		//dd($payment);
		//dd("llegue hasta aca");
		return $payment;
	}

	public function payer(){
		//Retornar pagador

		return \PayPalPayment::payer()->setPaymentMethod("paypal");
	}



	public function transaction(){
		//Retornar informacion de la transaccion
		//dd($this->items());
		return \PayPalPayment::transaction()->setAmount($this->amount())->setItemList($this->items())->setDescription("Tu compra en Manhattan")->setInvoiceNumber(uniqid());
	}

	public function items(){
		$items = [];
		$products = $this->shopping_cart->products()->get();

		foreach($products as $product){

			array_push($items,$product->paypalItem());
		}

		return \PayPalPayment::itemList()->setItems($items);
	}

	public function amount(){

		return \PayPalPayment::amount()->setCurrency("USD")->setTotal($this->shopping_cart->total());
	}

	public function redirectURLs(){
		//Retornar las direcciones de cancelacion de cobro
		$baseURL = url('/');
		
		return \PayPalPayment::RedirectUrls()->setReturnUrl($baseURL."/payments/store")->setCancelUrl($baseURL."/carrito");
	}

	public function execute($paymentId,$PayerID){
				
		$payment = \PayPalPayment::getById($paymentId,$this->_apiContext);

		$execution = \PayPalPayment::PaymentExecution()->setPayerId($PayerID);

		return $payment->execute($execution,$this->_apiContext);
	}
}

?>