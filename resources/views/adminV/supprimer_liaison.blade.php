@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header alert" style="textAlign: center; fontWeight: bold;">Supprimer une liaison entre doctorant et thèse</div>

                <div class="card-body">
                    <form method="POST" action="/admin/liaison/s">
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
                        hh
                        
                        <div class="form-group row">
                            <div class="row pt-4 col-md-4 col-form-label" >
                                <button class="btn btn-primary"> supprimer </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection