<?php

/**
 * @package         PHP-Lib
 * @description     Class is used to generate a strong password which contains characters of upper case, lower case, digits and symbols.
 * @copyright       Copyright (c) 2013, Peeyush Budhia
 * @author          Peeyush Budhia <peeyush.budhia@gmail.com>
 * @link            http://phpnmysql.com
 * @license         GNU GPL v2.0
 */
class RandomPassword {
	/**
	 * @var $password  The variable is used to store the generated password
	 */
	protected $password;

	/**
	 * @author          Peeyush Budhia <peeyush.budhia@gmail.com>
	 * @description     The function will generate a complex password which contains characters of upper case, lower case, digits and symbols
	 *
	 * @param $length
	 *          The parameter is used as a password length
	 *
	 * @return mixed
	 *          Return password
	 */
	function getPassword( $length = 12 ) {
		$lowerAlphabets = array( 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z' );
		$upperAlphabets = array( 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z' );
		$numbers        = array( 2, 3, 4, 5, 6, 7, 8, 9 );
		$addSymbols     = array( '*', '@', '#', '%', '^', '~' );
		$finalChars     = array_merge( $lowerAlphabets, $numbers, $addSymbols, $upperAlphabets );
		while ( $length > 0 ) {
			$oneChar = array_rand( $finalChars );
			$this->password .= $finalChars[ $oneChar ];
			$length --;
		}

		return $this->password;
	}
}


print ( new RandomPassword() )->getPassword( 14 );
?>
