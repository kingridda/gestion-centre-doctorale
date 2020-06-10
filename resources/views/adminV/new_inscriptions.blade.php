@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="textAlign: center; fontWeight: bold;">accepter les nouveaux doctorants</div>
                <div class="card-body">
                	@if (count($users)==0)
                    <div class="alert alert-danger" role="alert">
                      Aucune nouvelle préinscription a valider
                    </div>
                	@else
                    <form method="POST" action="/admin/validat">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6">
                                    @foreach($users as $user)
                                    <div class="col-10 "><input type="checkbox" name="user_ids[]" value="{{$user->id}}"> {{$user->name .' '. $user->prenom . ' '.$user->cin}}</div>
                                    @endforeach
                                    @error('user_ids')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="row pt-4 col-md-4 col-form-label offset-5" >
                                <button class="btn btn-primary"> valider les ajouts </button>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection