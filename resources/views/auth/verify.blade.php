@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifier votre adresse Email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            un lien d'authentification est envoyer à votre Email
                        </div>
                    @endif

                    {{ __('avant continuer, svp chercher dans votre boite email pour un lien de verification.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('clicker pour envoyer une autre demande') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
