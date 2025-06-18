<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
    $deleteUser = trim($_POST['delete_user']);
    $filename = "users.txt";
    $updatedLines = [];

    $file = fopen($filename, "r");
    if ($file) {
        while (($line = fgets($file)) !== false) {
            $line = trim($line);
            $parts = explode(":", $line);

            if (count($parts) === 4) {
                $username = $parts[2];
                if ($username !== $deleteUser) {
                    $updatedLines[] = $line;
                }
            }
        }
        fclose($file);
    }

    $file = fopen($filename, "w");
    if ($file) {
        foreach ($updatedLines as $line) {
            fwrite($file, $line . PHP_EOL);
        }
        fclose($file);
        echo "<script>alert('Account information for \"$deleteUser\" has been deleted.'); window.location.href='delete-user.php';</script>";
        exit();
    } else {
        $message = "❌ Failed to update file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Delete User</title>
  <link rel="stylesheet" href="Styles/style.css" />
</head>
<body class="delete-user-page">
    
  <h2>Delete User</h2>
  <?php if (isset($message)) echo "<p class='message'>$message</p>"; ?>
  <form method="POST" action="">
    <label for="delete_user">Username to delete:</label>
    <input type="text" name="delete_user" id="delete_user" required />
    <input type="submit" value="Delete User" />
  </form>
  <p><a href="index.php">⬅ Back to Home</a></p>
</body>
</html>
