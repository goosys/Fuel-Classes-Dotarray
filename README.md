Fuel-Classes-Dotarray
=====================

The package for FuelPHP

1. Convert an array with dot-notated key to an nested array

Installing
----

add as submodule

    $git submodule add git@github.com:goosys/Fuel-Classes-Dotarray

show development's config 

    $vi fuel/app/config/development/config.php

and add below

    	'always_load'  => array(
    		'packages'  => array(
    			'dotarray',
    		),
    	)

Usage
----

Prepare an array (dot-notated key)

    $dot = array(
      'data.0.a' => 'aaa',
      'data.0.b' => 'bbb',
      'data.1.c' => 'ccc',
    );

And call like this:

    $nest = Fuel\Classes\Dotarray::expand( $dot );
    
Result

    array (
      'data' => array (
        0 => array (
          'a' => 'aaa',
          'b' => 'bbb',
        ),
        1 => array (
          'c' => 'ccc',
        ),
      ),
    )


