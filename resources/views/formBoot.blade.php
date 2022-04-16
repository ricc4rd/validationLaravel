<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Validation</title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <h2 class="text-center mt-4">
                Laravel Validation
            </h2>
            <div class="col-lg-6 col-12 mx-auto">
                {{-- aqui va un mensaje qque se mostrara uando los campos esten validados  --}}

                @if (Session::has('success'))
                <div class="alert alert-success text-center">
                    {{Session::get('success')}}
                </div>
                @endif
                    <div class="p-5 bg-white rounded shadow-lg">
                        <form  method="POST" action="guardar" novalidate>
                            @csrf

                            <div class="form-group mb-2">
                                <label>Codigo</label>
                                <input type="text" class="form-control @error('codigo') is-invalid @enderror" name="codigo" value="{{old('codigo')}}">
                                
                                
                                 @error('codigo')
                                <span class="invalid-feedback">
                                    <strong> {{$message}} </strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label>Nombre</label>
                                <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{old('nombre')}}">
                                
                                
                                 @error('nombre')
                                <span class="invalid-feedback">
                                    <strong> {{$message}} </strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label>Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}">
                                
                                
                                 @error('email')
                                <span class="invalid-feedback">
                                    <strong> {{$message}} </strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label>Dirección</label>
                                <input type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{old('direccion')}}">
                                
                                
                                 @error('direccion')
                                <span class="invalid-feedback">
                                    <strong> {{$message}} </strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label>Telefono</label>
                                <input type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{old('telefono')}}">
                                
                                
                                 @error('telefono')
                                <span class="invalid-feedback">
                                    <strong> {{$message}} </strong>
                                </span>
                                @enderror
                            </div>

                            <div class="d-grid mt-3">
                                <input type="submit" value="enviar" class="btn btn-primary" >

                            </div>
                        </form>
                    </div>
                
            </div>
        </div>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 
  </body>
</html>