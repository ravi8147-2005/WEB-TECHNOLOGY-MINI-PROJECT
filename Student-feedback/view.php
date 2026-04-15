<?php
header("Content-Type: text/html; charset=UTF-8");

$xml = simplexml_load_file("feedback.xml");

echo "<h2 style='text-align:center;'>Student Reviews</h2>";

foreach ($xml->feedback as $data) {

    $stars = str_repeat("⭐", (int)$data->rating);

    echo "<div style='
        width: 350px;
        margin: 15px auto;
        padding: 15px;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    '>";

    echo "<b>Name:</b> " . $data->name . "<br>";
    echo "<b>Course:</b> " . $data->course . "<br>";
    echo "<b>Rating:</b> " . $stars . "<br>";
    echo "<b>Feedback:</b> " . $data->message . "<br>";

    echo "</div>";
}

?>