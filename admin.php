<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Administrador</title>
        <link href="css/bootstrap.min.css" rel="stylesheet"> <!--rel é para relacionar ao Browser e lincas o css-->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Menu para as abas de Publicação e Atendimento -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Publicações <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="navbar-default" data-toggle="modal" href="#noticia">Notícias</a></li>
                                <li><a class="navbar-default" data-toggle="modal" href="#publicidade">Publicidades</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Atendimento <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a data-toggle="modal" href="#pendente">Pendentes</a></li>
                                <li><a data-toggle="modal" href="#respondido">Respondidos</a></li>
                                <li><a data-toggle="modal" href="#concluido">Concluidos</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Modal para postar Notícias -->
        <div class="modal" id="noticia">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" align="center">Notícias</h4>
                    </div>
                    <div class="container">
                        <div class="modal-body">
                            <div class="col-md-12 col-sm-12">
                                <label>Título: </label>
                                <input type="text" name="titulo" />
                                <br>
                                <label>Texto: </label>
                                <br>
                                <textarea name="area" rows="20" cols="40" maxlength="500"></textarea>
                                <button type="button" class="btn btn-warning">Enviar Imagem</button>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Publicar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para postar Publicidades -->
        <div class="modal" id="publicidade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" align="center">Publicidades</h4>
                    </div>
                    <div class="container">
                        <div class="modal-body">
                            <div class="col-md-12 col-sm-12">
                                <label>Texto: </label>
                                <br>
                                <textarea name="area" rows="20" cols="40" maxlength="500"></textarea>
                                <button type="button" class="btn btn-warning">Enviar Imagem</button>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary">Publicar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para Ticktes Pendentes -->
        <div class="modal" id="pendente">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" align="center">Tickets - Pendentes</h4>
                    </div><div class="container"></div>
                    <div class="modal-body">
                        <center>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr class="active">
                                        <td>
                                            <strong>Nº</strong>
                                        </td>
                                        <td>
                                            <strong>Usuário</strong>
                                        </td>
                                        <td>
                                            <strong>Data</strong>
                                        </td>
                                        <td>
                                            <strong>Atendente</strong>
                                        </td>
                                        <td>
                                            <strong>Status</strong>
                                        </td>
                                    </tr>
                                    <tr data-toggle="modal" href="#responder">
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para Ticktes Respondidos -->
        <div class="modal" id="respondido">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" align="center">Tickets - Respondidos</h4>
                    </div><div class="container"></div>
                    <div class="modal-body">
                        <center>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr class="active">
                                        <td>
                                            <strong>Nº</strong>
                                        </td>
                                        <td>
                                            <strong>Usuário</strong>
                                        </td>
                                        <td>
                                            <strong>Data</strong>
                                        </td>
                                        <td>
                                            <strong>Atendente</strong>
                                        </td>
                                        <td>
                                            <strong>Status</strong>
                                        </td>
                                    </tr>
                                    <tr data-toggle="modal" href="#responder">
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para Ticktes Concluidos -->
        <div class="modal" id="concluido">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" align="center">Tickets - Concluídos</h4>
                    </div><div class="container"></div>
                    <div class="modal-body">
                        <center>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tr class="active">
                                        <td>
                                            <strong>Nº</strong>
                                        </td>
                                        <td>
                                            <strong>Usuário</strong>
                                        </td>
                                        <td>
                                            <strong>Data</strong>
                                        </td>
                                        <td>
                                            <strong>Atendente</strong>
                                        </td>
                                        <td>
                                            <strong>Status</strong>
                                        </td>
                                    </tr>
                                    <tr data-toggle="modal" href="#responder">
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para responder os Ticktes da Ouvidria -->
        <div class="modal" id="responder">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" align="center">Tickets</h4>
                    </div><div class="container"></div>
                    <div class="modal-body">
                        <center>
                            <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <strong>Dados do Ticket</strong>
                                        <br>
                                        <label>Usuario: </label>
                                        <br>
                                        <label>Responsavél: </label>
                                        <br>
                                        <label>Status: </label>
                                    </div>
                            </div> 
                            <hr class="featurette-divider">
                            <strong>Conversação</strong>
                            <div class="row table-responsive">
                                    <div class="col-md-12 col-sm-12">
                                        <table class="table table-bordered">
                                            <tr class="active">
                                                <td>
                                                    Lote abandonado
                                                </td>
                                                <td>
                                                    O lote do vizinho aqui de casa na rua Olivio nº 3500 está com um mato muito alto e abandonado vindo a ser um criadouto de Dengue ou algo mais...
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                            </div>
                            <hr class="featurette-divider">
                            <strong>Atualizar Ticket</strong>
                            <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <label>Responsável</label>
                                        <select name="select" />
                                        <option value="valor1">José da Silva</option> 
                                        <option value="valor2">Carlos Fernando</option>
                                        <option value="valor3">Maria Conceição</option>
                                        <option value="valor4">Claudia Fernandes</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <label>Status</label>
                                        <select name="select" />
                                        <option value="valor1">Pendente</option> 
                                        <option value="valor2">Aguardando</option>
                                        <option value="valor3">Concluído</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <textarea name="area" rows="5" cols="40" maxlength="200"></textarea>
                                            <br>
                                            <button type="button" class="btn btn-primary">Gravar</button>
                                            <button type="button" class="btn btn-primary">Gravar E Salvar</button>
                                        </div>
                                    </div>
                            </div>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <a href="#" data-dismiss="modal" class="btn">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
