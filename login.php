<!DOCTYPE html>
 <html>

 <head>
     <meta charset='utf-8'>
     <meta http-equiv='X-UA-Compatible' content='IE=edge'>
     <title>4CAR-GARAGE</title>
     <meta name='viewport' content='width=device-width, initial-scale=1'>
     <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
     <script src='main.js'></script>
     <script src="https://kit.fontawesome.com/7d2d0bc95f.js" crossorigin="anonymous"></script>
     <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
 </head>

 <body>
     <nav>
         <header>
             <div class="logo">
                 <a href="index.php">
                     <h1>4<i class="fas fa-car"></i>GARAGE</h1>
                 </a>
             </div>
         </header>
         <div class="dropdown">
             <div class="dropbtn">
                 <i class="fas fa-align-justify"></i>
             </div>
             <div class="dropdown-content">
                 <a href="kontakt.html"><i class="fas fa-phone"></i>Kontakt</a>
                 <a href="cennik.html"><i class="fas fa-money-bill-alt"></i>Cennik</a>
                 <a href="login.php"><i class="fas fa-user"></i>Zaloguj się</a>
             </div>
         </div>
         </div>
     </nav>
     <div class="whole-site">
         <h3 class="login_text">Z A L O G U J</h3>
         <h3 class="register_text">Z A R E J E S T R U J</h3>

         <div class="login_form">
             <form method="POST" action="form_log.php" name="form_log.php">
                 <label for="username_login">Nazwa użytkownika</label><br>
                 <input type="text" name="username_login">

                 <br><br><br>

                 <label for="password_login">Hasło</label><br>
                 <input type="password" name="password_login">

                 <br><br><br>

                 <input type="submit" value="Zaloguj" name="login_submit">
             </form>
             <div class="line_vertical"></div>

             <div class="register_form">
                 <form method="POST" action="form_reg.php" name="form_reg.php">
                     <label for="username_register">Nazwa użytkownika</label><br>
                     <input type="text" name="username_register">

                     <br><br><br>

                     <label for="password_register">Hasło</label><br>
                     <input type="password" name="password_register">

                     <br><br><br>

                     <input type="submit" value="Zarejestryj się">
                 </form>
             </div>
         </div>
     </div>
 </body>

 </html>