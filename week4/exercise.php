<?php
// Basic for loop example
echo "<h2>Basic For Loop Example:</h2>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
    $url = "https://jsonplaceholder.typicode.com/users";
    $data = file_get_contents($url);
    return json_decode($data, true);
}

// Get the list of users
$users = getUsers();

// Display user information using a for loop
echo "<h2>User Information from JSONPlaceholder API:</h2>";
for ($i = 0; $i < count($users); $i++) {
    $user = $users[$i];
    echo "<div style='margin-bottom: 20px; padding: 10px; border: 1px solid #ccc;'>";
    echo "<h3>User " . ($i + 1) . "</h3>";
    echo "Name: " . $user['name'] . "<br>";
    echo "Email: " . $user['email'] . "<br>";
    echo "Phone: " . $user['phone'] . "<br>";
    echo "Website: " . $user['website'] . "<br>";
    echo "</div>";
}
?> 