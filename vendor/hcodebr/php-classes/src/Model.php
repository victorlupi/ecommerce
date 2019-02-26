<?php
	
	namespace Hcode;

	class Model {

		private $values = [];

		public function __call($name, $args)
		{

			$method = substr($name, 0, 3);
			$fieldName = substr($name, 3, strlen($name));

			switch($method)
			{

				case "get":
					return $this->values[$fieldName];
				break;
				
				case "set":
					$this->values[$fieldName] = $args[0];
				break;	
			}
			
		}

		 public function setData($data = array()) //na aula do professor esta escrito public
		{

			foreach ($data as $key => $value) {
			
				$this->{"set".$key}($value);

			}

		}

		public function getValues() //na aula do professor esta escrito public
		{

			return $this->values;
		}

	}

		
?>