<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css">
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "youremail@example.com"; // Change this to your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
  ?>


</head>
<body>
    <div class="container">
        <h1>Contactez-nous</h1>
        <div class="contact-form">
            <form action="send_email.php" method="post">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit">Envoyer</button>
            </form>
        </div>

        <div class="map">
            <!-- Google Maps API will be rendered here -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25539.06102959584!2d-122.41941572667485!3d37.77492952169387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7e3d4e1d7d9b%3A0x5f99909c08a05281!2sSan%20Francisco%2C%20CA%2C%20USA!5e0!3m2!1sen!2sin!4v1633568838479!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
    <style>.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.contact-form label {
    display: block;
    margin-bottom: 5px;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.contact-form textarea {
    height: 150px;
}

.contact-form button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.map {
    margin-top: 20px;
}

.map iframe {
    width: 100%;
    height: 300px;
    border: none;
    border-radius: 5px;
}
</style>
</body>
</html>
