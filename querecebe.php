<?php include_once"config.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <?php 
    $nome = $_POST['nome']?? "";
    $email = $_POST['email']?? "";
    $senha = $_POST['senha']?? "";
    echo "<script language='javascript'>alert($nome);</script>";
    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
    mysqli_select_db($conn, '$dbname');
    $sql = "INSERT INTO tbformulario(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Salvei seus dados! '); window.location = 'register.php';</script>";

    } else {
        echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>