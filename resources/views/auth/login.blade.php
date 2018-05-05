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
      <div class="row">           

        <div class="col-lg-12 col-md-12 mb-4">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Esqueceu a senha?
                                </a>
                                <a class="btn btn-link" href="{{ route('register') }}">
                                    Cadastre-se
                                </a>

                            </div>
                        </div>
                    </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
   
    


   





@extends('layouts.appfooter')