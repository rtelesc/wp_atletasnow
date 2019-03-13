<?php
ini_set('memory_limit','1032M');

 $url = "fpf.json";

    $data = file_get_contents($url);
    // $data = json_decode($json, TRUE);

// Make a PHP array from the JSON string.
$array = json_decode( $data, TRUE );


$array = array_values( array_unique( $array, SORT_REGULAR ) );

// Make a JSON string from the array.
$result = json_encode( $array );


var_dump($result);