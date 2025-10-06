@extends('admin.layout.app')

@section('content')
    <div class="container mt-5">
        @include('admin.includes.alert')
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Modifier mot de passe</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.profile.password') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Ancient mot de passe</label>
                                <input class="form-control" type="password" name="old_password" required>
                            </div>
                            <div class="form-group">
                                <label>Nouveau mot de passe</label>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label>Confirmer mot de passe</label>
                                <input class="form-control" type="password" name="password_confirmation" required>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-primary">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Modifier informations générales</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.profile.infos') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>nom complet</label>
                                <input class="form-control" type="text" name="name" placeholder="{{ Auth::guard('admin')->user()->name }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="email" placeholder="{{ Auth::guard('admin')->user()->email }}">
                            </div>
    
                            <div class="text-right">
                                <button class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection