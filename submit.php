<?php
// submit.php
require 'connect.php'; // loads $pdo

// Get POST data
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);



try {
    $stmt = $pdo->prepare(
        "INSERT INTO users (name, email, message)
         VALUES (:name, :email, :message)"
    );

    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':message' => $message
    ]);

    echo "<h2>Thanks, $name — your message has been saved.</h2>";
    echo '<p>
            <a href="form.php">Back to form</a> 
          </p>';

} catch (PDOException $e) {
    echo "Database error: " . $e->getMessage();
}