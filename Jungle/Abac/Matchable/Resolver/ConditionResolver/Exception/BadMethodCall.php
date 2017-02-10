<?php
/**
 * Created by PhpStorm.
 * User: Alexey
 * Date: 16.02.2016
 * Time: 19:01
 */
namespace Jungle\ABAC\Matchable\Resolver\ConditionResolver\Exception {

	/**
	 * Class BadMethodCall
	 * @package Jungle\Abac\Matchable\Matchable\Resolver\ConditionResolver\ABACException
	 */
	class BadMethodCall extends Query{
		protected $type = 'call_error';
		protected $arguments = [];

		/**
		 * @param string $originalPath
		 * @param null $error_path
		 * @param array $arguments
		 * @param string $message
		 * @param int $code
		 * @param \Exception|null $previous
		 */
		public function __construct($originalPath, $error_path = null,array $arguments = [], $message = '', $code = 0, \Exception $previous = null){
			$this->arguments = $arguments;
			parent::__construct(
				$originalPath,
				$error_path,
				true,
				$message,
				$code,
				$previous
			);
		}

		/**
		 * @return array
		 */
		public function getArguments(){
			return $this->arguments;
		}


	}
}

