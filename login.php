<!DOCTYPE html>
<html lang="pt">

    <head>
        <?php include "head.html" ?>
        <script src="https://accounts.google.com/gsi/client" async defer></script>
        <script src="https://unpkg.com/jwt-decode/build/jwt-decode.js"></script>
        <script src="/js/code/config.js"></script>
        <script src="/js/code/loginGoogle.js?2"></script>
    </head>
    
    <body class="bg-gradient-primary">
        <div class="container">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6"><img src="../imagens/login3.jpg"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Bem-vindo de volta!</h1>
                                        </div>
                                        <form class="user">
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Inserir Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                    id="exampleInputPassword" placeholder="palavra passe">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Lembrar de mim</label>
                                                </div>
                                            </div>
                                            <a href="index.php" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </a>
                                            <hr>
                                            <a>
                                                <div id="buttonDiv"></div>
                                                <div id="msg"></div>
                                            </a>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="forgot-password.php">Esqueceu-se da palavra-passe?</a>
                                        </div>
                                        <div class="text-center">
                                            <a class="small" href="register.php">Criar uma conta</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
</html>