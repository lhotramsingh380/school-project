 <?php 
class Student {
	public $name;
	public $email;
	public function __construct($name,$email) {
		$this->name = $name;
		$this->email = $email;
	}

	public function display() {
		return "Hello, my name is {$this->name} and my email is {$this->email}";
	}
}

$student1 = new Student("Jane Doe","jane.doe@example.com");
$student2 = new Student("John Smith","john.smith@example.com");
echo $student1->display();
echo $student2->display();
?>