<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $satisfaction = $_GET['satisfaction'] ?? 'Not provided';
    $suggestions = $_GET['suggestions'] ?? 'No suggestions';

    echo "<h2>Survey Results</h2>";
    echo "Satisfaction: " . htmlspecialchars($satisfaction) . "<br>";
    echo "Suggestions: " . htmlspecialchars($suggestions);
}
?>
