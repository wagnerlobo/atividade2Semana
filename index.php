<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bulma.min.css">
    <title>Formulario php</title>
</head>
<body>
    
<section class="section">
  <div class="container">
    <div class="colums is-centered">
       <div class="colum is-half">
       <h1 class="title has-text-centered">Formulário de Contato - Prof. Wagner Lobo</h1>
       <form action="enviar.php" method="POST">

        <div class="field">
        <label class="label">Nome</label>
        <div class="control">
        <input name="nome" class="input" type="text" placeholder="Seu nome">
        </div>
        </div>
       
        <div class="field">
        <label class="label">Email *</label>
        <div class="control">
        <input name="email" class="input" type="email" placeholder="Seu email">
        </div>
        </div>

        <div class="field">
           <label class="label">Assunto</label>
              <div class="control">
                  <div class="select is-fulwidth">
                     <select name="assunto">
                       <option>Reportar erro</option>
                       <option>Anúncios</option>
                       <option>Outro</option>
                 </select>
        </div>
        </div>

        <div class="field">
        <label class="label">Mensagem</label>
        <div class="control">
        <textarea name="mensagem" class="textarea" placeholder="Deixe sua mensagem" maxlength="2000"></textarea>
        </div>
        </div>
        <div class="field is-grouped">
        <div class="control">
        <button class="buttom is-link is-medium">Enviar</button>
        </div>
        </div>
      </form>
       </div>
    </div>
  </div>
</section>

</body>
</html>