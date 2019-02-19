<?
require_once 'classes.php';
require_once 'PHPUnit/Autoload.php';

class monkeyTest extends PHPUnit_Framework_TestCase{
	protected $monkey;
	public function setUp(){
		$this->monkey = new Mammal(0);
	}
	public function tearDown(){
		unset($this->monkey);
	}
	public function testMonkeyIDType(){
		$this->assertInternalType('integer', $this -> monkey -> get_id()) ;
	}
	public function testMonkeyIDNotNull(){
		$this->assertNotNull($this-> monkey -> get_id()) ;
	}
	public function testMonkeyKingdom(){
		$this->assertTrue($this->monkey -> get_kingdom() === 'Animalia') ;
	}
	public function testMonkeyKingdomEquals(){
		$this->assertEquals($this->monkey -> get_kingdom() , 'Animalia') ;
	}
	
	public function testMonkeyKingdomInternalType(){
		$this->assertInternalType('string', $this->monkey -> get_kingdom()) ;
	}
	
	public function testMonkeyKingdomInstanceOf(){
		$this->assertInstanceOf('Mammal',$this->monkey ) ;
	} 
	
	public function testMonkeyNotNull(){
		$this->assertNotNull($this->monkey);
	}
	public function testMonkeyKingdomNotNull(){
		$this->assertNotNull($this->monkey->get_kingdom() );
	}
	public function testMonkeyPhylumNotNull(){
		$this->assertNotNull($this->monkey->get_phylum() );
	}
	public function testMonkeyPhylum(){
		$this->assertTrue($this->monkey -> get_phylum() === 'Chordata');
	}
}


?>
