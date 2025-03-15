
<?php

class Student {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }
}

$student1 = new Student("John Doe", 20);
$student2 = new Student("Jane Doe", 25);

echo "Student 1: " . $student1->getName() . ", Age: " . $student1->getAge() . "<br>";
echo "Student 2: " . $student2->getName() . ", Age: " . $student2->getAge();

?>