<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Send Message</title>
</head>

<body bgcolor="grey">
    <nav>
        <ul>
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="displayconv.php">Contact</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </nav>
    <div>
        <h1>Send a Message</h1>
    </div>
    <div>
        <form action="userinfo.php" method="post">
            <input type="text" name="user" placeholder="Your user handel" />
            <br>
            <input type="email" name="email" placeholder="Your email" />
            <br>
            <textarea name="message" placeholder="Type your message here..........."></textarea>
            <br>
            <button type="submit">Send</button>
        </form>
    </div>
</body>

</html>