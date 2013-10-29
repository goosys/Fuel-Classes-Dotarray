<?php
namespace Fuel\Classes;

/**
 * ドット区切りのキーの配列ををネストした配列へ変換
 */
class Dotarray {

	public static function expand( $array )
	{
		$result = array();
		
		foreach( $array as $key => $value ){
			static::set_value($result, $key, $value );
		}

		return $result;

	}
    
	public static function set_value(&$root, $compositeKey, $value) 
	{
		$keys = explode('.', $compositeKey);
		while(count($keys) > 1) {
			$key = array_shift($keys);
			if(!isset($root[$key])) {
				$root[$key] = array();
			}
			$root = &$root[$key];
		}

		$key = reset($keys);
		$root[$key] = $value;
		
		return $root;
	}
}

