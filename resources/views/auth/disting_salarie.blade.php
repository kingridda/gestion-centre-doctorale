@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-5 ">
                            <button type="button" class="btn btn-outline-secondary" href="{{ route('register') }}?sal=0">candidate non salarié</button>
                            
                        </div>
                        <div class="col-12 col-sm-5">
                            <button type="button" class="btn btn-outline-secondary"href="{{ route('register') }}?sal=1">candidate salarié</button>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection