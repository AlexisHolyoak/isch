@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name}}</td>
                    <td>@foreach($user->roles as $role)
                        {{ $role->name }}
                    @endforeach</td>
                    <td>
                    <a href="{{route('permissions.edit', [$user, 'administrator'])}}" class="btn btn-primary">Hacer administrador</a>
                    <a href="{{route('permissions.edit', [$user, 'user'])}}" class="btn btn-danger">Hacer usuario</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
