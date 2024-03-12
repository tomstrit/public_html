<!DOCTYPE html>
<html lang="pt">

    <head>
        <?php include "head.html";?>
    </head>
    
    <body class="bg-gradient-primary">
    
        <div class="container">
    
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5"><img src="../imagens/registo.jpg"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Criar uma conta!</h1>
                                </div>
                                <form class="user">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                                placeholder="Primeiro  nome">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="exampleLastName"
                                                placeholder="Ultimo nome">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                            placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="foto" class="form-control form-control-user"
                                            placeholder="Foto de perfil">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Palavra passe">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleRepeatPassword" placeholder="Repetir palavra passe">
                                        </div>
                                    </div>
                                    <a href="login.php" class="btn btn-primary btn-user btn-block">
                                        Criar conta
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="login.php">Já tens uma conta? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>