@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="textAlign: center; fontWeight: bold;">Liaison des doctorants est les thèses</div>

                <div class="card-body">
                    <form method="POST" action="/admin/liaison">
                        @csrf
                        <div class="form-group row">
                            <label for="user_id" class="col-md-4 col-form-label text-md-right">doctorant </label>
                            <div class="col-md-6">
                                <select id="user_id" name="user_id" class="form-control" required>
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}"> {{$user->name .' '. $user->prenom}}</option>
                                    @endforeach
                                  </select>
                                @error('user_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="encadrant_id" class="col-md-4 col-form-label text-md-right">directeur de thèse </label>
                            <div class="col-md-6">
                                <select id="encadrant_id" name="encadrant_id" class="form-control" required>
                                    @foreach($encadrants as $en)
                                    <option value="{{$en->id}}"> {{$en->name}}</option>
                                    @endforeach
                                  </select>
                                @error('encadrant_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="these_id" class="col-md-4 col-form-label text-md-right">Thèse </label>
                            <div class="col-md-6">
                                <select id="these_id" name="these_id" class="form-control" required>
                                    @foreach($theses as $these)
                                    <option value="{{$these->id}}"> {{$these->sujet}}</option>
                                    @endforeach
                                  </select>
                                @error('these_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="row pt-4 col-md-4 col-form-label" >
                                <button class="btn btn-primary">Liaison</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection