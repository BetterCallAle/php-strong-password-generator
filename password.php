<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <main>
        <section class="py-5">
            <div class="container wrapper">
                <h2 class="mb-5">La tua password è : <?php echo $_SESSION["password"] ?> </h2>
                <a href="index.php" class="btn btn-primary">Genera un'altra password</a>
            </div>
        </section>
    </main>
</body>
</html>