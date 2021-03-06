<?php
/**
* Quaderno Contact
*
* @package   Quaderno PHP
* @author    Quaderno <hello@quaderno.io>
* @copyright Copyright (c) 2015, Quaderno
* @license   http://opensource.org/licenses/gpl-2.0.php GNU Public License
*/

class QuadernoContact extends QuadernoModel {
	static protected $model = 'contacts';

	public static function retrieve($id, $gateway)
	{
		$response = QuadernoBase::retrieve($id, 'customers', $gateway);
		$return = false;

		if (QuadernoBase::responseIsValid($response))
			$return = new self($response['data']);

		return $return;
	}
}
?>