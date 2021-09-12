<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login :: Biblioteca</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include("./components/bg.php");
    ?>
    <main>
    <section class="section-login">
        <div class="logo-container">
            <img class="logo" src="./img/logo.png">
        </div>
        <div class="form-container">
            <form action="./pages/inicial.php" method="POST" class="form-login">
                <fieldset>
                    <legend>
                        Login
                    </legend>
                    <label for="txtname">Nome</label>
                    <input id="txtname" type="text" name="name">                    
                    <label for="txtpass">Senha</label>
                    <input id="txtpass" type="pass" name="pass">                    
                    <input id="btn" type="submit" value="ENTRAR" class="btn">
                </fieldset>
            </form>
        </div>
    </section>
    </main>
</body>
</html>