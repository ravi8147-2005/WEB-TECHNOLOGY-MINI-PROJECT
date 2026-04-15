<?php
header("Content-Type: text/html; charset=UTF-8");

$name = $_POST['name'];
$course = $_POST['course'];
$rating = $_POST['rating'];
$feedback = $_POST['feedback'];

$file = 'feedback.xml';

// Load or create XML
if (file_exists($file)) {
    $xml = simplexml_load_file($file);
} else {
    $xml = new SimpleXMLElement('<feedbacks/>');
}

// Add new entry
$entry = $xml->addChild('feedback');
$entry->addChild('name', $name);
$entry->addChild('course', $course);
$entry->addChild('rating', $rating);
$entry->addChild('message', $feedback);

// Save XML
$xml->asXML($file);

echo "<h2 style='text-align:center;'>Review Submitted Successfully! ✅</h2>";
echo "<div style='text-align:center;'><a href='index.html'>Go Back</a></div>";

?>