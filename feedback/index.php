<?php

include("database.php");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    
    <style>
.container {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #1b19192e;
    border-radius: 5px;
}

h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #0097a7;
}

form {
    display: flex;
    flex-direction: column;

}

label {
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="email"],
textarea {
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: none;
}

input[type="submit"] {
    background-color: #0097a7;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0097a7;
}
    </style>

</head>
<body>
    <div class="container">

        <h1>Feedback Form</h1>

        <form action="index.php" method="post">

            <label for="name">Username:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" required></textarea>

            <label for="suggestion">What improvements would you suggest?</label>
            <textarea id="suggestion" name="suggestion" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>

<?php

$name = $_POST["name"];

$email = $_POST["email"];

$feedback = $_POST["feedback"];

$suggestion = $_POST["suggestion"];

$sql = "INSERT INTO user_feedback (username,email,feedback,suggestion)
        VALUES ('$name', '$email','$feedback','$suggestion')";

mysqli_query($conn, $sql);

mysqli_close($conn);

?>
