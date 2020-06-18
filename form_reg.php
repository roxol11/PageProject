<?php
#register
$user_reg = trim($_POST['username_register']);
$password_reg = trim($_POST['password_register']);

if(empty($user_reg) || empty($password_reg)) {

// prosty formularz zawierający dwa pola
echo  'Puste pola!!!!!!!!!!!!!!';
}
else {

    // dane pochodzące z formularza
    $dane = $user_reg.":".$password_reg."\n";
    // przypisanie zmniennej $file nazwy pliku
    $file = "logowanie.txt";
    // uchwyt pliku, otwarcie do dopisania
    $fp = fopen($file, "a");
    // zapisanie danych do pliku
    fwrite($fp, $dane);
    // zamknięcie pliku
    fclose($fp);

    

    echo "<script> 
            alert('Użytwonik zarejestrowany!');
            window.location.href='login.php';
        </script>";
    
    
}
?>