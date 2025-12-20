<?php

$cities = [
    "Nepal" => ["Kathmandu", "Pokhara", "Lalitpur", "Bhaktapur"],
    "India" => ["Delhi", "Mumbai", "Bangalore", "Kolkata"],
    "USA" => ["New York", "Los Angeles", "Chicago", "Houston"],
    "UK" => ["London", "Manchester", "Birmingham", "Liverpool"]
];

$country = isset($_GET['country']) ? $_GET['country'] : '';

header('Content-Type: application/json'); 

if($country && isset($cities[$country])) {
    echo json_encode($cities[$country]);
} else {
    echo json_encode([]);
}
?>
