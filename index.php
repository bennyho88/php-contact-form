<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        
    <form class="form" action="form.php" method="POST">
        <div class="form-left">
            <div class="form-q">
                <label for="name" id="nameTag">Fullname</label>
                <span class="error"><?= $nameErr ?></span>
                <label for="email" id="emailTag">Email</label>
                <label for="yourMessage" id="messageTag">Your Message</label>
            </div>
        </div>
        <div class="form-right">
            <div class="form-a">
                <input type="text" name="name" id="fullName">
                <input type="text" name="email" id="email">
                <textarea  id="" cols="30" rows="10" name="yourMessage" id="yourMessage"></textarea>
            </div>
        </div>
        <input class="sendBtn" type="submit" value="Submit" name="submit">
    </form>

    
</body>
</html>