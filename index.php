<html>
    <header>
        <title>Sistema de Envio de Email - PHPMailer</title>
        <link rel="stylesheet" href="styles.css">    
    </header>
    <body>
        <div class='formulario-div'>
            <form method="post" action="email.php">
                <label for="remet"> Remetente </label> <input type="text" name="remet">
                <label for="email"> Email </label> <input type="email" name="email">
                <label for="subject"> Assunto </label> <input type="text" name="subject">
                <label for="body"> Corpo do Email </label> <textarea name="body" id="body" cols="30" rows="10"></textarea>
                <input type="submit">
            </form>  
        </div>
    </body>
</html>

