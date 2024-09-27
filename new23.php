<?php
function findindex($array,$element){

			foreach($array as $index => $value){

				if($value === $element){
					return $index;
				} 
			}
			return -1;

		}

$array_index = array('mohit','vickey','rahul','viraj');

$index = findindex($array_index ,'vickey');

echo "the index of vickey is:".$index ;

?>