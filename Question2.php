<?php 



function quicksort_firstName( $name_array ) {
  if(is_array($name_array)){

    if( count( $name_array ) < 2 ) {
        return $name_array;
    }

    $left = $right = array( );
    reset( $name_array );
    $pivot_key  = key( $name_array );
    $pivot  = array_shift( $name_array );
    foreach( $name_array as $k => $v ) {

        if( $v['firstName'] < $pivot['firstName'] )
            $left[$k] = $v;
        else
            $right[$k] = $v;
    }

    return array_merge(quicksort_firstName($left), array($pivot_key => $pivot), quicksort_firstName($right));
  }
  else
  {
    echo " \n Error:  Value to be sorted is not an array  \n ";
	exit(1);
		
  }

}


$names = file_get_contents("Question2.txt");

$name_array = explode(PHP_EOL, $names);

foreach($name_array as $key => $name) {  
	$name_parts = explode(' ', $name);
	$name_assoc_req[$name_parts[0]] = $name_parts[1];//  this to fulfill the requirement but this is NOT what u want to sort

	$last_name_count = strlen($name_parts[1]);
	$name_assoc[$last_name_count][$key]['firstName'] = $name_parts[0];
	
	$name_assoc[$last_name_count][$key]['full_name'] = $name;
}

//$name_array_sorted_last = quicksort_lastNameSize($name_assoc);

//$name_array_sorted_first = quicksort_lastNameSize($name_array_sorted_last);
//print_r($name_assoc);
foreach($name_assoc as $sorted_names) {
	
	$name_array_sorted_first = quicksort_firstName($sorted_names);
	
	foreach($name_array_sorted_first as $sorted_name) {
		
		echo " \n " . $sorted_name['full_name'];
	}
	
	
}