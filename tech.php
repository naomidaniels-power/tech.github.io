<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the input string
    $inputString = $_POST["inputString"];

    // Check which operation was requested
    if (isset($_POST["operation"])) {
        $operation = $_POST["operation"];
        
        // Perform the selected operation
        switch ($operation) {
            case "String Length":
                // Calculate the length of the input string
                $result = strlen($inputString);
                break;
            case "String Reverse":
                // Reverse the input string
                $result = strrev($inputString);
                break;
            case "Uppercase":
                // Convert the input string to uppercase
                $result = strtoupper($inputString);
                break;
            case "Lowercase":
                // Convert the input string to lowercase
                $result = strtolower($inputString);
                break;
            case "String Replace":
                // Perform string replacement (example: replace "a" with "b")
                $result = str_replace("a", "b", $inputString);
                break;
            default:
                $result = "Invalid operation selected.";
        }

        // Output the result
        echo "<h2>Result:</h2>";
        echo "<p>Input String: $inputString</p>";
        echo "<p>Operation: $operation</p>";
        echo "<p>Result: $result</p>";
    } else {
        echo "No operation selected.";
    }
}
?>

<br>
<?php
// Given array of office hours
$_office_hours = array(
    "Monday" => "2:45 PM to 3:45 PM",
    "Tuesday" => "2:15 PM to 4:15 PM",
    "Wednesday" => "2:45 PM to 3:45 PM",
    "Thursday" => "2:15 PM to 4:15 PM",
    "Friday" => "By appointment"
);

// Printing the list of office hours
echo "<h2>Office Hours:</h2>";
echo "<ul>";
foreach ($_office_hours as $day => $hours) {
    echo "<li>$day: $hours</li>";
}
echo "</ul>";
?>

<br>
<?php
function countWords($str) {
    // Convert the input string to lowercase
    $str = strtolower($str);
    
    // Split the string into words
    $words = preg_split('/\s+/', $str, -1, PREG_SPLIT_NO_EMPTY);
    
    // Initialize an empty associative array to store word counts
    $wordCounts = array();
    
    // Iterate through each word
    foreach ($words as $word) {
        // Remove punctuation marks from the word
        $word = preg_replace('/[^\p{L}\p{N}\s]/u', '', $word);
        
        // Increment the count for the current word
        if (array_key_exists($word, $wordCounts)) {
            $wordCounts[$word]++;
        } else {
            $wordCounts[$word] = 1;
        }
    }
    
    
    return $wordCounts;
}


$str = "The quick brown fox jumps over the lazy dog.";
$wordCounts = countWords($str);
print_r($wordCounts);
?>

