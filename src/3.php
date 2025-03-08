<?php
// Get all the rows from the "students" table
$students = $db->query('SELECT * FROM students')->fetchAll();

// Create an array to store the data
$data = [];

// Loop through each row and add the columns to the data array
foreach($students as $student) {
    $data[] = [
        'id' => $student['id'],
        'name' => $student['name'],
        'email' => $student['email'],
        'age' => $student['age']
    ];
}

// Return the data as a JSON object
echo json_encode($data);
?>