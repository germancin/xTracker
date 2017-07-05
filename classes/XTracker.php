<?php
namespace App;

class XTracker
{
	protected $start;
	protected $end;

	private function setMicrotime($att=true){
		 return microtime($att);
	}

	public  function start(){
		$this->start = $this->setMicrotime();
		return $this->start;
	}

	public  function end($att=true){
		$this->end = $this->setMicrotime();
		return $this->end;
	}

	public  function total($message = 'total:'){

		$resultInt = (int)$this->end - (int)$this->start;
		$resultFloat = (float)$this->end - (float)$this->start;

		if($resultInt == 0){
			$total = $message . ' <b>' . $resultFloat . ' miliseconds. </b>';
		}else{
			$total = $message . ' <b>' . date('H:i:s', $resultInt) . '</b>';
		}
		return $total;
	}

	public function memoryUse(){
		return memory_get_usage();
	}
}
?>