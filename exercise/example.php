<?php

$var = "Hello world";
$num =  24;
$boolean = true;
$float = 233.4;

$array = array($var, $num, $boolean, $float);

var_dump($array);
echo "<br>";
echo  "this is var" ."<br>" .$var;
?>



<?php 
    if(is_page(11))
    {
        get_template_part('featured');
    }
?>