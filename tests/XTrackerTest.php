<?php
namespace Test;
require '/var/www/public/vendor/autoload.php';	

use App\XTracker;
use PHPUnit\Framework\TestCase;

/* 
* The setUp and tearDown methods are a good arquitecture to program unit test 
* is more readable.
*/
class XTrackerTest extends TestCase{
	public function setUp(){
		$this->xtracker = new XTracker();
		$this->start = 5;
		$this->end = 8;
	}

	public function testTotal(){
		$output = $this->xtracker->total($input);
		$this->assertEquals(
				2,
				$output,
				'The rest have to be equals to 3'
			);
	}

	// 	public function tearDown(){
	// 		unset($this->receipt);
	// 	}
}
?>






