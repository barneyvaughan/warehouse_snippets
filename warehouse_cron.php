
class factoryCron{
	private $day, $month, $year, $week_num;
	public function __construct(){
		$this->day = date('j');
		$this->month = date('n');
		$this->year = date('Y');
		$this->week_num = date('N');
		
		$this->regenerateCheck();
		$this->populator();
	}
	
	public function regenerateCheck(){
		if($this->day == 1){
			// Regenerate Month	
		}
		if($this->week_num == 1){
			// First day of the week
			// Regenerate Week
		}
		if($this->day == 1 && $this->month == 1){
			// New year
			// Regenerate Year

		}
	}
	

}

cronCheck();
