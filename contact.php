<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple contact form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Contact form</h1>
        <form class="contact" action="contact.php" method="post">
            <input type="text" name="name" placeholder="First and last names">
            <input type="text" name="email" placeholder="Email address">
            <input type="text" name="subject" placeholder="Subject">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message"></textarea>
            <button class="btn" name="submit-button" type="submit">Send</button>
        </form>
    </main>
</body>
</html>