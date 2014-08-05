<?php
	class test{
		function bubble_sort($arr){
			for ($i = 0; $i < count($arr)-1; $i++){
				for($j = $i+1; $j < count($arr); $j++){
					if($arr[$i] > $arr[$j]){
						$temp = $arr[$i];
						$arr[$i] = $arr[$j];
						$arr[$j] = $temp;
					}
				}
			}
		}

		function selection_sort($arr){
			for($i = 0; $i < count($arr)-1; $i++){
				$min = $i;
				for($j = $i+1; $j < count($arr); $j++){
					if($arr[$j] < $arr[$min]){
						$min = $j;
					}
				}
				$temp = $arr[$i];
				$arr[$i] = $arr[$min];
				$arr[$min] = $temp;
			}
			echo "selection_sort:";
			print_r($arr);
		}
		function binary($arr, $key){
	            $n = count($arr);
	            $left=0;
	            $right=count($arr);
	            $mid=($left+$right)/2;
	            while($left<$right && $arr[$mid]!=$key){
	              
	                if($key < $arr[$mid])
	                    $right = $mid-1;
	                else
	                    $left = $mid+1;
	                $mid=($left+$right)/2;
	            }
	            if($arr[$mid] == $key)
	                echo $key;
	            else
	                echo "ERROR";;
	        }
		function recurbinary($arr, $key, $left, $right){
			//Fatal error: Call to undefined function recurbinary()
	            $mid = ($left+$right)/2;
	            if($left > $right)
	                return -1;
	            if($arr[$mid] == $key){
	                //echo "$key";
	               // echo "<br />";
	                return $key;
	            }
	                
	
	            else if($key > $arr[$mid]){
	                 return recurbinary($arr, $key, $mid+1, $right);
	            
	            }
	            else{
	               return recurbinary($arr, $key, $left, $mid-1);
	            }
	                
        	}
	      	function quicksort($arr, $left, $right){
		        $key = $arr[$left];
		        while ($left < $right) {
		            # code...
		            while($left < $right && $arr[$right]>$key){
		                $right--;
		            }
		            $arr[$left] = $arr[$right];
		            while($left<$right && $arr[left]<$key){
		                $left++;
		            }
		            $arr[$right] = $arr[$left];
	        	}
		        $arr[$left] = $key;
		        return quicksort($arr, 0, $left-1);
		        return quicksort($arr, $left+1, $right);
		}
		
		function deldir($directory){
			if(file_exists($directory)){
				if($dir_handle = opendir($directory)){
					while($filename = readdir($dir_handle)){
						if($filename!='.' && $filename!='..'){
							$subfile = $directory."/".$filename;
							if(is_dir($subfile))
								dir($subfile);
							if(is_file($subfile))
								unlink($subfile);
						}
					}
					closedir($dir_handle);
					rmdir($directory);
				}
			}
		}
		
		function dirSize($directory){
			$size = 0;
			if(file_exists($directory)){
				if($dir_handle = opendir($directory)){
					while($filename = readdir($dir_handle)){

						if($filename != '.' && $filename !='..'){
							echo "ok";
							$subfile = $directory."/".$filename;
							if(is_dir($subfile)){
								$size += dirSize($subfile);
							}
							if(is_file($subfile)){
								$size += filesize($filename);
								
							}
						}
					}
					
				}

				
			}
			closedir($dir_handle);
			return $size;
		}
	$arr = array(10, 3, 6, 1, 0);
	$var = new test();
	$var->selection_sort($arr);
?>
