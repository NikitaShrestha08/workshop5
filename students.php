<?php
include 'header.php';

echo "<h2>Students List</h2>";

if (file_exists("students.txt")) {
    $lines = file("students.txt");

    foreach ($lines as $line) {
        list($name, $email, $skills) = explode("|", $line);
        $skillsArray = explode(",", $skills);

        echo "<strong>Name:</strong> $name <br>";
        echo "<strong>Email:</strong> $email <br>";
        echo "<strong>Skills:</strong>";
        echo "<ul>";
        foreach ($skillsArray as $skill) {
            echo "<li>$skill</li>";
        }
        echo "</ul><hr>";
    }
} else {
    echo "No students found.";
}

include 'footer.php';
?>
