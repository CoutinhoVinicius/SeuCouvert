@extends('layouts.app')

   <!-- Jumbotron Header -->
   <br>
      <header class="jumbotron my-4">
        <h1 class="display-3">Sejam Bem Vindos!</h1>
        <p class="lead">Estamos trabalhando arduamente para alimentar com conteudos que possam lhes interessar. Contamos com sua compreensão!</p>
        
        <button type="button" class="btn btn-danger" onclick="window.location = '{{route('login')}}'">
          Acesse
        </button>
      </header>

       <!-- Banner-->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="landpage/vendor/images/1.png" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="landpage/vendor/images/2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="landpage/vendor/images/3.png" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>
    <br>
      
      
      <!-- Page Features -->
      <div class="row text-center">
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="landpage/vendor/images/ct1.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-danger">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="landpage/vendor/images/ct2.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-danger">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="landpage/vendor/images/ct3.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-danger">Find Out More!</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="landpage/vendor/images/ct4.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente, tempore debitis beatae culpa natus architecto.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-danger">Find Out More!</a>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    <!-- /.modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="container-fluid">
                
                  <form action="/action_page.php">
                    <div class="form-group">
                      <label for="email">E-mail:</label>
                      <input type="email" class="form-control" id="email" placeholder="Digite aqui seu e-mail" name="email">
                    </div>
                    <div class="form-group">
                      <label for="pwd">Senha:</label>
                      <input type="password" class="form-control" id="pwd" placeholder="Digite aqui sua senha" name="pswd">
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember"> Lembrar me
                      </label>
                    </div>
                    <!--<button type="submit" class="btn btn-primary">Enviar</button>-->
                  </form>
                </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger">Confirmar</button>
          </div>
        </div>
      </div>
    </div>





@extends('layouts.appfooter')