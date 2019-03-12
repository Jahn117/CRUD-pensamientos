@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¿En que estás pensando ahora?</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="form-group">
                        <input type="text" class="form-control" name="">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
