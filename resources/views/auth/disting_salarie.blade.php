@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">S'inscrire</div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-5 ">
                            <a role="button" class="btn btn-outline-secondary" href="{{ route('register') }}?sal=0">candidate non salarié</a>
                            
                        </div>
                        <div class="col-12 col-sm-5">
                            <a role="button" class="btn btn-outline-secondary"href="{{ route('register') }}?sal=1">candidate salarié</a>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection