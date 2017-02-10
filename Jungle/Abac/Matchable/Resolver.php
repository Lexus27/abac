<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: jungle
 * IDE: PhpStorm
 * Date: 29.09.2016
 * Time: 9:09
 */
namespace Jungle\ABAC\Matchable {
	
	use Jungle\ABAC\Matchable\Resolver\Inspector;

	/**
	 * Class Resolver
	 * @package Jungle\Abac\Matchable\Matchable
	 */
	abstract class Resolver implements ResolverInterface{

		/** @var  Inspector  */
		protected $inspector;

		/**
		 * @param $inspector
		 * @return $this
		 */
		public function setInspector(Inspector $inspector = null){
			$this->inspector = $inspector;
			return $this;
		}

		/**
		 * @return Inspector
		 */
		public function getInspector(){
			return $this->inspector;
		}

	}
}

