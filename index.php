<?php include('form.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>

<div class="wrapper">
  <section class="header">
    <h1>Contact Us</h1>  
  </section>  
  <main>
    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
      <div class="input-group">
        <label for="name" id="nameTag">Name</label>
        <span class="error"><?= $nameErr ?></span> 
        <input type="text" id='name' name='name' tab-index='1'value='<?=$name?>'/>
      </div>
      <div class="input-group">
        <label for="email" id="emailTag">Email</label>
        <span class="error"><?= $emailErr ?></span> 
        <input type="text" id='email' name='email' tab-index='2' value='<?=$email?>'/>
      </div>
      <div class="input-group">
        <label for="address" id="addressTag">Address</label>
       <span class="error"><?= $addressErr ?></span> 
        <input type="text" id='address' name='address' tab-index='3' value='<?=$address?>'/>
      </div>
      <div class="input-group">
        <label for="message" id="messageTag">Message</label>
        <span class="error"><?= $messageErr ?></span>
        <textarea id='message' name='message' tab-index='4'></textarea>
      </div>
      <div class="input-group">
        <input type="submit" value="submit" tab-index='5'/>
      </div>
    </form>
  </main>
</div>
</body>
</html>
