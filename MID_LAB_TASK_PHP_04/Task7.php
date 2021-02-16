<?php

	function stars(){
		$rows = 2;
	for ($i=0;$i<=$rows;$i++){
		for ($j=0;$j<=$i;$j++){

        	echo ("*");
		}
		echo "\n";
	}
	}	
    echo stars();
    echo("\n");
    echo("\n");

    function numbers(){
    	for($i=1;$i<=3;$i++)
    {
        for($j=1;$j<=3-$i+1;$j++)
        {
            echo($j);
        }
        echo("\n");
    }
    }
    echo numbers();
	
	echo("\n");
	echo("\n");

    function alphabets(){
    	$k=0;
 
    for($i=0;$i<=2;$i++)
    {
        for($j=0;$j<=$i;$j++)
        {
        	$k++;
            echo (chr($k+64));
        }
        echo ("\n");
    }
    }
    echo alphabets();
?>