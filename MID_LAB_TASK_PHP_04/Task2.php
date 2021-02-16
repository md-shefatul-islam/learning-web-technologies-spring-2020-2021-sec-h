<?php
	
	function VatCount($amount , $vat)
	{
		$calculate = $amount * ($vat/100);
		
		print "VAT (Value Added Tax) over an amount: $calculate";
	}
	echo VatCount(150,70);
?>