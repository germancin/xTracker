<?php
namespace App;
class XTracker
{
	public function setMicrotime($att=true){
		 return microtime($att);
	}
	public  function total($start, $end){
		$resultInt = (int)$end - (int)$start;
		$resultFloat = (float)$end - (float)$start;

		if($resultInt == 0){
			return $resultFloat;
		}else{
			return date('H:i:s', $resultInt);
		}

	}

	public function memoryUse(){
		return memory_get_usage();
	}
}
?>