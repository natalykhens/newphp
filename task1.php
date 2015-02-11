<?php

$ids= array(1, 2 ,3, 4);
$str1=implode(",", $ids);
$sql = "‘SELECT * FROM `table` WHERE `id` IN ($str1)";
echo "$sql";

?>