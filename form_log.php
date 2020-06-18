<?php
#reading file
function checkPass($user, $pass)
{
  if(!$fd = @fopen("logowanie.txt", "r")) return false;
  while (!feof ($fd)){
    $line = trim(fgets($fd));
    if(($pos = strpos($line, ":"))===false) continue;

    $tempUser = substr($line, 0, $pos);
    if($tempUser != $user) continue;

    $tempPass = substr($line, $pos + 1, strlen($line) - $pos);

    if($tempPass != $pass) continue;
    else{
      fclose($fd);
      return true;
    }
  }
  fclose($fd);
  return false;
}

#login
if(!isSet($_POST["username_login"]) || !isSet($_POST["password_login"])){
    echo "<script> 
        alert('Pozostawione puste pola!');
        window.location.href='login.php';
    </script>";
  exit();
}
if(checkPass($_POST["username_login"], $_POST["password_login"])){
    echo "<script> 
        alert('Użytwonik zalogowany!');
        window.location.href='index.php';
    </script>";

}
else{
    echo "<script> 
        alert('błąd!');
        window.location.href='login.php';
    </script>";
}
?>