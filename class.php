<?php
	class base{
		private $id = 0;
		private $name = '';
		private $pw = '';
		public function __construct($id=null,$name=null,$pw=null){
				$this -> id= $id;
				$this -> name = $name;
				$this -> pw = $pw;
		}
		
		public function __get($proName){
			return $this -> $proName;
		}
		
		public function __set($proName,$proValue){
			$this -> $proName = $proValue;
		}
		
		public function bcryptHash($rowpw,$rand=8){
			if($rand < 4 || $rand > 31) $rand=8;
			$salt = '$2a$'.str_pad($rand,2,'0',STR_PAD_LEFT).'$';
			$randomValue = openssl_random_pseudo_bytes(16);
			$salt.= substr(strtr(base64_encode($randomValue),'+','.'),0,22);
			return crypt($rowpw,$salt);		
		}
		
		public function bcryptVerfy($rowpw,$storedHash){
			return crypt($rowpw,$storedHash) == $storedHash;
		}
		
		public function getinfo(){
			$rowpw = $this -> pw;
			$hashpw = $this -> bcryptHash($rowpw);	
			echo "my id is ".$this -> id.";"." my name is ".$this -> name."; my password is ".$hashpw.";";		
		}
	}
?>