<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
    <div class="menu">
        <ul class="nav justify-content-end">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="index.php">Home</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="About.php">About</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="Blog.php">Blog</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="contact.php">Contact</a>
           </li>
         </ul>
       </div>
    <div class="container">
        <h3>Contact us</h3>
        <form action="#" name="contact_form">
            <label for="first_name">First Name</label>
            <input name="first_name" type="text" required placeholder="Hiba"/>
            <br>
            <label for="last_name">Last Name</label>
            <input name="last_name" type="text" required placeholder="Benyoub"/>
            <br>
            <label for="email">Email</label>
            <input name="email" type="email" required placeholder="benyoubhiba@gmail.com"/>
            <br>
            <label for="message">Message</label><br>
            <textarea name="message" cols="30" rows="10" placeholder="Enter your message here ..." required> </textarea>
            <div class="center">
                <input type="submit" value="Submit">
            </div>
        </form>	
    </div>
    <footer style="background-color: rgba(192,208,221,1); height: 50px;">&copy;2020 All rights reserved
        <div class="iconns">
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-facebook-f"></i>
        </div>
    </footer>
</body>
</html>