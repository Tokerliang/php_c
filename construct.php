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

	}
	$arr = array(10, 3, 6, 1, 0);
	$var = new test();
	$var->selection_sort($arr);
?>
