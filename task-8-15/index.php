<!DOCTYPE html>
<html>
<head>
    <title>To-Do List App</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>

<h1>To-Do List</h1>

<form action="add.php" method="post">
    <label for="newTask">New Task:</label>
    <input type="text" id="newTask" name="newTask" required>
    <button type="submit">Add Task</button>
</form>

<?php
$apiUrl = "https://64bbac6a7b33a35a4446905c.mockapi.io/tasks";
$response = file_get_contents($apiUrl);
$tasks = json_decode($response, true);

echo '<table border="1">';
echo '<tr><th>Task</th><th>Edit_task</th><th>Delete</th></tr>';

foreach ($tasks as $task) {
    echo '<tr>';
    echo '<td>' . $task["task"] . '</td>';
    echo '<td><form action="edit.php" method="get">';
    echo '<input type="hidden" name="id" value="' . $task["id"] . '">';
    echo '<input type="text" name="editedTask" value="' . $task["task"] . '">';
    echo '<button type="submit">Edit</button>';
    echo '</form></td>';
    echo '<td><button class = "delete"><a href="delete.php?id=' . $task["id"] . '">Delete</a></button></td>';
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>
