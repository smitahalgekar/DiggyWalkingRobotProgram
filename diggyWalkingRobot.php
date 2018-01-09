 <?php 

 echo "********Diggy Walking Robot*******\n";

 	$x = $argv[1]; //x-coordinate
 	$y = $argv[2]; //y-coordinate
 	$d = $argv[3]; //direction
 	$s = str_split($argv[4]);

 	echo "Initial Position:".$x." ".$y." ".$d." ".$argv[4]."\n";

 	for($i=0;$i<count($s);){
 		switch ($d) {
    		case 'NORTH':
	        	switch($s[$i]){
	        		case 'L':
		        		if(next($s)=='L' || next($s)=='R' || next($s) == ''){
		        			$d = 'WEST';
		        			$i = $i+1;
		        		}
		        		else{
		        			$x = $x - $s[$i+2];
			 				$d = 'WEST';
			 				$i=$i+3;
		        		}
		        		break;
		        	case 'R':
		        		if(next($s)=='L' || next($s)=='R' || next($s) == ''){
		        			$d = 'EAST';
		        			$i = $i+1;
		        		}
		        		else{
		        			$x = $x + $s[$i+2];
			 				$d = 'EAST';
			 				$i=$i+3;
		        		}
		        		break;

		        	case 'W':
		        		
		        		$y = $y + $s[$i+1];
 						$i=$i+2;
		        		break;
	        	}
	        	break;
    		case 'SOUTH':
	        	switch($s[$i]){
	        		case 'L':
		        		if(next($s)=='L'|| next($s)=='R' || next($s) == ''){
		        			$d = 'EAST';
		        			$i = $i+1;
		        		}
		        		else{
		        			$x = $x + $s[$i+2];
			 				$d = 'EAST';
			 				$i=$i+3;
		        		}
		        		break;
		        	case 'R':
		        		if(next($s)=='L' || next($s)=='R' || next($s) == ''){
		        			$d = 'WEST';
		        			$i = $i+1;
		        		}
		        		else{
		        			$x = $x - $s[$i+2];
	 						$d = 'WEST';
	 						$i=$i+3;
		        		}
		        		break;

		        	case 'W':
		        		$y = $y - $s[$i+1];
 						$i=$i+2;
		        		break;
	        	}
	        	break;
    		case 'EAST':
	        	switch($s[$i]){
	        		case 'L':
		        		if(next($s)=='L'|| next($s)=='R' || next($s) == ''){
		        			$d = 'NORTH';
		        			$i = $i+1;
		        		}
		        		else{
		        			$y = $y + $s[$i+2];
			 				$d = 'NORTH';
			 				$i=$i+3;
		        		}
		        		break;
		        	case 'R':
		        		if(next($s)=='L' || next($s)=='R' || next($s) == ''){
		        			$d = 'SOUTH';
		        			$i = $i+1;
		        		}
		        		else{
		        			$y = $y - $s[$i+2];
			 				$d = 'SOUTH';
			 				$i=$i+3;
		        		}
		        		break;

		        	case 'W':
		        		$x = $x + $s[$i+1];
 						$i=$i+2;
		        		break;
	        	}
	        	break;
	    	case 'WEST':
	        	switch($s[$i]){
	        		case 'L':
		        		if(next($s)=='L'|| next($s)=='R' || next($s) == ''){
		        			$d = 'SOUTH';
		        			$i = $i+1;
		        		}
		        		else{
		        			$y = $y - $s[$i+2];
			 				$d = 'SOUTH';
			 				$i=$i+3;
		        		}
		        		break;
		        	case 'R':
		        		if(next($s)=='L' || next($s)=='R' || next($s) == ''){
		        			$d = 'NORTH';
		        			$i = $i+1;
		        		}
		        		else{
		        			$y = $y + $s[$i+2];
			 				$d = 'NORTH';
			 				$i=$i+3;
		        		}
		        		break;

		        	case 'W':
		        		$x = $x - $s[$i+1];
 						$i=$i+2;
		        		break;
	        	}
	        	break;
	    	default:
		       	echo "Invalid";
		       	break;
		}
 	}

 	echo "Final Position: ".$x." ".$y." ".$d."\n";

 ?>
