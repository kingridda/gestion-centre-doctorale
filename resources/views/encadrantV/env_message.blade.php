@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="textAlign: center; fontWeight: bold;">Add new post</div>

                <div class="card-body">
                    <form method="POST" action="/encadrant/env_message">
                        @csrf

                        <div class="form-group row">
                            <label for="distination" class="col-md-4 col-form-label text-md-right">doctorant distiné </label>
                            <div class="col-md-6">
                                <select id="distination" name="distination" class="form-control">
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}"> {{$user->name .' '. $user->prenom}}</option>
                                    @endforeach
                                  </select>
                                @error('distination')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">objet</label>

                            <div class="col-md-6">
                                <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">description</label>

                            <div class="col-md-6">
                                <input id="description" type="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="row pt-4 col-md-4 col-form-label" >
                                <button class="btn btn-primary"> envoyer </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection