<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Example</title>
</head>
<body>
    <h1>Submit Your Name</h1>
    <form method="POST" action="">
        <input type="text" name="username" placeholder="Enter your name" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = htmlspecialchars($_POST['username']);
        echo "<p>Hello, $username!</p>";
    }
    ?>
</body>
</html>
