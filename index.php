<html>
    <header>
        <title>Sistema de Envio de Email - PHPMailer</title>
        <link rel="stylesheet" href="styles.css">    
    </header>
    <body>
        <div class='formulario-div'>
            <h1></h1>
            <form method="post" action="email.php">
                <input placeholder = "Seu Nome" type="text" name="remet">
               <input placeholder = "Seu Email"type="email" name="email">
                <input placeholder = "Assunto"type="text" name="subject">
               <textarea placeholder = "Digite aqui sua mensagem para ericktestes28@gmail.com"name="body" id="body" cols="30" rows="10"></textarea>
                <input id='enviar-button' type="submit">
            </form>  
        </div>
    </body>
</html>

