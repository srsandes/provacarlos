<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Clínica Odontológica</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>
<script> src="_javascript/funcoes.js"</script>
<body>
    <div id=interface>
        <header id=cabecalho>
            
            <hgoup>  
                <h1>Clínica </h1>
            </hgoup>
            
            <img id="icone" src="_imagens/dente.png" width="115x">
            
        </header>
        <nav id="menu">
            <h1>Menu Principal</h1>
            <ul>
                <li><a href="{{route('home')}}"> Home</a></li> 
                <li><a href="{{route('specs')}}">Serviços</a></li>
                <li><a href="{{route('faleconosco')}}">Entre em contato conosco</a></li>
                <li><a href="{{route('home')}}">Fazer Cadastro</a></li>
            </ul>
        </nav>
        <title>Cadastro de Cliente</title>
        
        <form class="form-horizontal">
            <fieldset>
                <div class="panel panel-primary">
                    <div class="panel-heading"><h1>Cadastro de Cliente</h1></div>
                    
                    <div class="panel-body">
                        <div class="form-group">
                            <!--
                                <div class="form-group">   
                                    <div class="col-md-4 control-label">
                                        <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/2016/12/Faculdade-pitagoras.png"/>
                                    </div>
                                    <div class="col-md-4 control-label">
                                        <h1>Cadastro de Cliente</h1>
                                        
                                    </div>
                                </div>
                            -->
                            <div class="col-md-11 control-label">
                                <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
                            <div class="col-md-8">
                                <input id="Nome" name="Nome" placeholder="" class="form-control input-md" required="" type="text">
                            </div>
                        </div>
                        
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Nome">CPF <h11>*</h11></label>  
                            <div class="col-md-2">
                                <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$">
                            </div>
                            
                            <label class="col-md-1 control-label" for="Nome">Nascimento<h11>*</h11></label>  
                            <div class="col-md-2">
                                <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                            </div>
                            
                            <!-- Multiple Radios (inline) -->
                            
                            <label class="col-md-1 control-label" for="radios">Sexo <h11>*</h11></label>
                            <div class="col-md-4"> 
                                <label required="" class="radio-inline" for="radios-0" >
                                    <input name="sexo" id="sexo" value="feminino" type="radio" required>
                                    Feminino
                                </label> 
                                <label class="radio-inline" for="radios-1">
                                    <input name="sexo" id="sexo" value="masculino" type="radio">
                                    Masculino
                                </label>
                            </div>
                        </div>
                        
                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext">Telefone <h11>*</h11></label>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                    OnKeyPress="formatar('## #####-####', this)">
                                </div>
                            </div>
                            
                            <label class="col-md-1 control-label" for="prependedtext">Telefone</label>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                    OnKeyPress="formatar('## #####-####', this)">
                                </div>
                            </div>
                        </div> 
                        
                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext">Email <h11>*</h11></label>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                                </div>
                            </div>
                        </div>
                        
                        
                        <!-- Search input-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="CEP">CEP <h11>*</h11></label>
                            <div class="col-md-2">
                                <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                            </div>
                        </div>
                        
                        <!-- Prepended text-->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Rua</span>
                                    <input id="rua" name="rua" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                                </div>
                                
                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon">Nº <h11>*</h11></span>
                                    <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
                                </div>
                                
                            </div>
                            
                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-addon">Bairro</span>
                                    <input id="bairro" name="bairro" class="form-control" placeholder="" required="" readonly="readonly" type="text">
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext"></label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">Cidade</span>
                                    <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                                </div>
                                
                            </div>
                            
                            <div class="col-md-2">
                                <div class="input-group">
                                    <span class="input-group-addon">Estado</span>
                                    <input id="estado" name="estado" class="form-control" placeholder="" required=""  readonly="readonly" type="text">
                                </div>
                                
                            </div>
                        </div>
                        
                        
                        <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Cadastrar"></label>
                            <div class="col-md-8">
                                <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                                <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                
            </fieldset>
        </form>
        <footer id="rodape">
            <p>Copyright 2019 - by Lucas Sandes</p>
        </footer>
        
    </div>
</body>
</html>