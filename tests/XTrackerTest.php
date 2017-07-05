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

	}

	public function testTotal(){
		$output = $this->xtracker->total();
		$this->assertEquals(
				3,
				$output,
				'The rest have to be equals to 3'
			);
	}

	// 	public function tearDown(){
	// 		unset($this->receipt);
	// 	}
}
?>






