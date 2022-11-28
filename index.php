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
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <main>
        <?php if(isset($user_length) === false){ ?>
            <section class="alert">
                <div class="alert alert-danger" role="alert">
                    <h2>I dati inseriti non sono corretti</h2>
                </div>
            </section>
        <?php } ?>
        <section class="py-5">
            <div class="container">
                <form action="index.php" method="GET" class="bg-white text-center py-5">
                    <div class="row g-3 justify-content-center">
                        <label for="length" class="col-form-label">Scegli la lunghezza della tua Password</label>
                        <input type="number" name="length" id="length" class="form-control w-25">
                    </div>
    
                    <div>
                        <input type="checkbox" name="letters" id="letters" checked>
                        <label for="letters" class="col-form-label">Lettere</label>
                        <input type="checkbox" name="numbers" id="numbers">
                        <label for="numbers" class="col-form-label"">Numeri</label>
                        <input type="checkbox" name="symbols" id="symbol">
                        <label for="symbols" class="col-form-label"">Simboli</label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-3">Invia</button>
                    <button type="reset" class="btn btn-secondary mt-3">Resetta</button>
                </form>
            </div>
        </section>


    </main>


</body>
</html>