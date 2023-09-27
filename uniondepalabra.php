<?php



function get_world($left, $right){
 $union=$left.$right;
 $mayuscula= ucfirst($union);
 return $mayuscula;

}

var_export(get_world($_REQUEST['palabra1'], $_REQUEST['palabra2']));
; 


?>
