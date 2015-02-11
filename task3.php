<?php

function task3($x)
{
	printf("line:%s\n file:%s\n function:%s\n",__LINE__ , __FILE__ , __FUNCTION__);
	return true;
}

one(0);

?>
