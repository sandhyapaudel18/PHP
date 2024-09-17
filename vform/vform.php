<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="./vvform.php" method="POST" enctype="multipart/form-data">
      <label for="">Name</label>
      <input type="text " name="name" id="name" />
      <span><?php echo $name_error ?> </span>

      <br />
      <br />

      <label for="">Email</label>
      <input type="text" name="email" id="email" />
      <span><?php echo $email_error?></span>

      <br />
      <br />

      <label for="">Phone</label>
      <input type="text" name="phone" id="phone" />
      <span><?php  echo $phone_error ?></span>

      <br />
      <br />
      <label for="">Password</label>
      <input type="text" name="password" id="password" />
      <span><?php echo $password_error ?></span>

      <br />
      <br />
      <label for="">Upload your image</label>
      <input type="file" name="file" id="file" />
      <span><?php echo $error?></span>
      <br />
      <br />
      <input type="submit" name="submit" value="submit" />
    </form>
  </body>
</html>
