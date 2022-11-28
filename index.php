<?php 
require_once __DIR__ . "./partials/function.php";

if($user_length){
    session_start();
    // create a string as long as $user_lenght and save it in the session
    $_SESSION["password"] = generate_rdn_password($user_length, $user_choices);
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
                <div>
                    <label for="length">Scegli la lunghezza della tua Password</label>
                    <input type="number" name="length" id="length">
                </div>

                <div>
                    <input type="checkbox" name="letters" id="letters">
                    <label for="letters">Lettere</label>
                    <input type="checkbox" name="numbers" id="numbers">
                    <label for="numbers">Numeri</label>
                    <input type="checkbox" name="symbols" id="symbol">
                    <label for="symbols">Simboli</label>
                </div>
                
                <button type="submit">Invia</button>
            </form>
        </section>


    </main>


</body>
</html>