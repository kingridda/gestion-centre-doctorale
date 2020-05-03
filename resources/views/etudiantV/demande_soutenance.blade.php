@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="textAlign: center; fontWeight: bold;">Envoyer votre demande de soutenance </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="/profile/soutenance">
                        @csrf
                        <div class="form-group row">
                            <label for="attachments" class="col-md-4 col-form-label text-md-right"> Votre demande : </label>

                            <div class="col-md-6">
                                <input id="attachments" type="file" class="form-control-file @error('attachments') is-invalid @enderror" name="attachments">

                                @error('attachments')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="row ml-3 col-md-4 col-form-label" >
                                <button class="btn btn-primary" > Envoyer </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection