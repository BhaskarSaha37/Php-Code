<html>
    <body>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data using $_POST superglobal
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Perform validation (e.g., check for empty fields, validate email format, etc.)
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    // If there are errors, display them to the user
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        // If no errors, process the form data (e.g., save to database, send email, etc.)
        // Add your custom processing logic here
        // ...

        // Optionally, redirect the user after successful submission
        header("Location: thank_you_page.php");
        exit();
    }
}
?>
</body>
</html>