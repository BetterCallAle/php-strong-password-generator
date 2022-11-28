<?php 
require_once __DIR__ . "./partials/function.php";

if($user_length){
    
    session_start();

    // create a string as long as $user_lenght and save it in the session
    $_SESSION["password"] = generate_rdn_string($all_letters, $all_symbols, $user_length);
    header("Location: ./password.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <main>
        <section>
            <form action="index.php" method="GET">
                <label for="length">Scegli la lunghezza della tua Password</label>
                <input type="number" name="length" id="length">
                <button type="submit">Invia</button>
            </form>
        </section>
    </main>


</body>
</html>