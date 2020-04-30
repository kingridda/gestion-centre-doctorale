@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-content">
        <div class="col-2">
            <div><a href="admin/theses">voir les theses en cours</a></div>
            <div><a href="admin/dir">voir la list des directeurs des thèses</a></div>
            <div><a href="admin/doc">voir la list des doctorants</a></div>
            <div><a href="admin/soutenances">voir les demandes de soutenance</a></div>
        </div>
    </div>
</div>
@endsection
