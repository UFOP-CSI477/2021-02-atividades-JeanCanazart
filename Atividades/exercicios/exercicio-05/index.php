<!DOCTYPE html>
<html lang="br" dir=auto >     
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Cadastro</title>
    <header>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <style type="text/CSS">
        .colr{color: rgb(9, 7, 94);font-size: 12pt;}
        .msgerro{color: rgb(255, 30, 0); font-size: 9pt;}
        
        </style>


<nav class="navbar navbar-light" style="background-color: #10a599da;">
            <div class="container-md">
        

        <a class="navbar-brand" href="">Cadastro </a>
              
    
       
       
</header>

</head>

<body class="colr">
    <h1>Dados Cadastrais</h1>
        <form name= "dados" method="POST" action="validar.php"  id="frmcadastro">
            <div>
                <p>Dados pessoais:</p>
                <div class="input-group">
                    <span class="input-group-text">Nome/Sobrenome</span>
                    <input type="text" name="nome" id="nome" placeholder="Nome do usuario"class="form-control"> 
                    <span class='msgerro msg-nome'></span>
                    <input type="text" name="snome" id="snome" placeholder="Sobrenome"class="form-control"> 
                    <span class='msgerro msg-snome'></span>
                  </div></div>
               
                <div>
                    <label>Genero:</label><br>
                    <div  class="form-check"  >
                    <input type="radio" name="genero" id="feminino" value="f" class="form-check-input">
                    <label for="feminino" class="form-check-label" class="form-check-label">Feminino</label>
                    </div><div  class="form-check"  >
                    
                        <input type="radio" name="genero" id="masculino" class="form-check-input" value="m">
                        <label for="masculino" class="form-check-label">masculino</label>
                    </div><div  class="form-check" >
                   
                    
                        <input type="radio" name="genero" id="naobinario"  class="form-check-input"value="nb">
                        <label for="naobinario" class="form-check-label">N??o binario</label>
                    </div><div  class="form-check"  >
                    
                        <input type="radio" name="genero" id="naoinf" class="form-check-input" value="nr" checked >
                        <label for="naoinf" class="form-check-label">Prefiro n??o Informar</label><br>
                    </div> 
                </div>

                    <div>
                    <div class="input-group">
                        <label for="Datadenascimento:" class="input-group-text">Data de Nascimento</label>
                        <input type="date" name="data" id="data">
                        <span class='msgerro msg-data'></span>
                    </div></div>

                    <label>Estado Civil:</label><br>
                    <div class="form-check" >
                    <input type="radio" name="estadocivil" id="Solteiro" value="solteiro" checked class="form-check-input">
                    <label for="solteiro"  class="form-check-label">Solteiro(a)</label> </div>
                    <div class="form-check" >
                    
                        <input type="radio" name="estadocivil" id="casado" value="casado" class="form-check-input">
                        <label for="casado"  class="form-check-label">Casado(a)</label>
                    </div>
                        <div class="form-check" >
                    
                        <input type="radio" name="estadocivil" id="viuvo" value="viuvo" class="form-check-input">
                        <label for="viuvo" class="form-check-label">viuvo</label>
                    </div><div class="form-check" >
                        <input type="radio" name="estadocivil" id="divorciado" value="divorciado" class="form-check-input">
                        <label for="divorciado"  class="form-check-label">Divorciao</label>
                    </div> <div class="form-check" >
                    
                        <input type="radio" name="estadocivil" id="naoinformar" value="naoinformar"  class="form-check-input">
                        <label for="naoinformar"  class="form-check-label">Prefiro n??o Informar</label><br>
                    </div></div>
                    <div class="input-group">
                        <label for="cpf" class="input-group-text">CPF:</label>
                            <input type="number" name="cpf" id="cpf" placeholder="CPF" >
                            <label for="RG" class="input-group-text">RG:</label>
                            <input type="text" name="rg" id="rg"placeholder="RG" ><br>
                    </div>
                    <div>
                        <p>Contato:</p>
                        <div class="input-group">
                        <label for="telefone" class="input-group-text" >Telefone:</label>
                            <input type="tel" name="telefone" id="telefone" placeholder="telefone">
                            <span class='msgerro msgt-elefone'></span>
                            <label for="celular" class="input-group-text">celular:</label>                            
                            <input type="tel" name="celular" id="celular"placeholder="celular" >
                            <span class='msgerro msg-celular'></span>
                            <label for="email" class="input-group-text">E-mail:</label>                           
                            <input type="email" name="email" id="email" placeholder="Email">
                            <span class='msgerro msg-email'></span>
                    </div></div>
                   
                    <div> <p>Dados Residenciais:</p>
                    <div class="input-group " >
                       
                        <label for="endereco" class="input-group-text">Endere??o</label>
                        <input type="text" name="endereco" id="endereco" placeholder="endere??o"class="form-control">
                        <span class='msgerro msgensereco'></span>
                        <label for="numero"class="input-group-text">N??:</label>
                        <input type="number" name="numero" id="numero" placeholder="Numero da residencia"class="form-control">
                        <span class='msgerro msgnumero'></span>
                        <label for="complemento" class="input-group-text">complemento</label>
                        <input type="text" name="complemento" id="complemento" placeholder="complemento"class="form-control">

                    </div>
                </div>
                    


                </div>
                <div>
                <input type="submit" value="Cadastrar" class="btn btn-primary" onclick= "validacadastro()" >
                <input type="reset" value="limpar" class="btn btn-danger">
            </div>

            <script src="validar.js"></script>
        </form>
      
</body>

</html>