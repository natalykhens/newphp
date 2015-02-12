<?php
    $brands = array(
array(
    'name' => 'Oracle',
    'popularity' => 5
      ),
array(
    'name' => 'Microsoft',
    'popularity' => 10
    ),
array(
    'name' => '1C',
    'popularity' => '2'
    )
);
$brands_popularity=array();
foreach($brands as $key=>$arr){
	$brands_popularity[$key]=$arr['popularity'];
}
  
array_multisort($brands_popularity, SORT_DESC, SORT_REGULAR, $brands);
var_export($brands);

