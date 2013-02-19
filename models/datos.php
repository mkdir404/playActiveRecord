<?php
//asi lo trataremos como un array
	$arra=$_POST['json'];
	$arrays='';

/*Array ( [employees] => Array ( [0] => Array ( [firstName] => John [lastName] => Doe ) [1] => Array ( [firstName] => Anna [lastName] => Smith ) [2] => Array ( [firstName] => Peter [lastName] => Jones ) ) )
*/

	foreach ($arra as $key => $value) {
		 $arrays .= $value;
	}

	echo $arrays;


	//$tito = Person::create(array('name' => 'Tito', 'state' => 'VA'));
?>