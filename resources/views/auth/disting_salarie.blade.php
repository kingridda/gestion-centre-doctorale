@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-5 col-sm-12">
                            <a href="{{ route('register') }}?sal=0">candidate non salarié</a>
                        </div>
                        <div class="col-5 col-sm-12">
                            <a href="{{ route('register') }}?sal=1">candidate salarié</a>  
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection