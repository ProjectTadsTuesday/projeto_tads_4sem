<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style-login.css">
    <title>Cadastre-se</title>
    <script defer src="./js/script-login.js"></script>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" alt="icone da barra" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="#!"><i class="fas fa-globe-americas"></i> Travellis</a>
                <a type="button" class="btn btn-primary" href="./login.php"> Voltar</a>
            </div>
        </nav>
    <main class="login">
        <div class="login_container">
            <h1 class="login_title">Crie sua conta</h1>
            <form action="querecebe.php" class="login_form" method="POST">
                <input class="login_input" name="nome" type="text" placeholder="Nome completo">
                <span class="login_input_border"></span>
                <input class="login_input" name="email" type="email" placeholder="E-mail">
                <span class="login_input_border"></span>
                <input class="login_input" name="senha" type="password" placeholder="Senha">
                <span class="login_input_border"></span>
                <a class="about_password">Use entre 6 e 8 caracteres</a>
                <button class="login_submit">Cadastrar</button>
                <div class="login-reset-background">
                  </label>
                </div>
                <a href="./login.php" class="login_register">J?? tem uma conta?<strong> Entrar</strong></a>
                <div class="login-reset-background">
                    
                </div>
            </div>
            </form>
    </main>

     <!-- Bootstrap core JS-->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
     </body>
</html>