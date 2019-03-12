@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¿En que estás pensando ahora?
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="">
                        <div class="form-group">
                            <label for="thought">Ahora estoy pensando en:</label>
                            <input type="text" class="form-control" name="thought">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Enviar pensamiento
                        </button>                      
                    </form>
                </div>
            </div>

            <div class="card" style="margin-top: 20px">
                <div class="card-header">Publicado en 12/2019
                </div>
                <div class="card-body">
                    <p>mucho texto</p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-default">
                        Editar
                    </button>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>
                </div>              
            </div>
        </div>
    </div>   
</div>
@endsection
