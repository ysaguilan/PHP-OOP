<?php
/*example 1*/
if (is_bool(true) === true) {
	/*will echo this out since it is a boolean value*/
    echo " is a boolean";
}
else{

	echo "not boolean";
}
/*example 2*/
if(is_integer(1234)) {
	/*should echo this*/
	echo "<p>it a number</p>";
}
else{
	echo "not a number";
}
/*example 3*/
if(is_double(.19)){
	/*should echo this*/
	echo "its a decimal number";
}
else{
	echo "not a decimal number";
}