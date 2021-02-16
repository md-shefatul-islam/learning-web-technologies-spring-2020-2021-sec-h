<?php	
	function Rectangle($length , $width){
		$area = $length * $width;
		$perimeter = 2 * ($length + $width);

		print "The area of a Rectangle : $area, 
		Perimeter of the Rectangle : $perimeter";
	}
	echo Rectangle(5,2);
?>