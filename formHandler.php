<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Confirmation</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        #container {
            width: 50%;
            margin: auto;
        }

        header {
            background: #50b3a2;
            color: #ffffff;
            text-align: center;
            padding-top: 30px;
            min-height: 70px;
        }

        p {
            font-size: 18px;
            line-height: 1.6em;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div id="container">
    <header>
        <h1>Confirmation Page</h1>
    </header>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = htmlspecialchars($_POST['first_name']);
        $lastName = htmlspecialchars($_POST['last_name']);
        $schoolName = htmlspecialchars($_POST['school_name']);
        $email = htmlspecialchars($_POST['email']);
        $academicStanding = htmlspecialchars($_POST['academic_standing']);
        $major = htmlspecialchars($_POST['major']);
        $contactInfo = isset($_POST['contact_info']) ? "Please contact me with program information" : "";
        $contactAdvisor = isset($_POST['contact_advisor']) ? "I would like to contact a program advisor" : "";
        $comments = htmlspecialchars($_POST['comments']);

        echo "<p>Dear $firstName $lastName,</p>";
        echo "<p>Thank for you for your interest in $schoolName.</p>";
        echo "<p>We have you listed as a(n) $academicStanding starting this fall.</p>";
        echo "<p>You have declared $major as your major.</p>";
        echo "<p>Based upon your responses we will provide the following information in our confirmation email to you at $email.</p>";
        if ($contactInfo) {
            echo "<p>$contactInfo</p>";
        }
        if ($contactAdvisor) {
            echo "<p>$contactAdvisor</p>";
        }
        echo "<p>You have shared the following comments which we will review:</p>";
        echo "<p>$comments</p>";
    }
    ?>
</div>
</body>
</html>
