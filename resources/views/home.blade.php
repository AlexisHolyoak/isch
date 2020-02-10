@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    I CICLO
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="{{ route('course',1)}}" class="list-group-item list-group-item-action">
                            Primer asignatura
                        </a>
                        <a href="{{ route('course',2)}}" class="list-group-item list-group-item-action">Segunda asignatura</a>
                        <a href="{{ route('course',3)}}" class="list-group-item list-group-item-action">Tercera asignatura</a>
                        <a href="{{ route('course',4)}}" class="list-group-item list-group-item-action">Cuarta asignatura</a>
                        <a href="{{ route('course',5)}}" class="list-group-item list-group-item-action">Quinta asignatura</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    II CICLO
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="{{ route('course',6)}}" class="list-group-item list-group-item-action">
                            Primer asingatura
                        </a>
                        <a href="{{ route('course',7)}}" class="list-group-item list-group-item-action">Segunda asignatura</a>
                        <a href="{{ route('course',8)}}" class="list-group-item list-group-item-action">Tercera asignatura</a>
                        <a href="{{ route('course',9)}}" class="list-group-item list-group-item-action">Cuarta asignatura</a>
                        <a href="{{ route('course',10)}}" class="list-group-item list-group-item-action">Quinta asignatura</a>
                        <a href="{{ route('course',11)}}" class="list-group-item list-group-item-action">Sexta asignatura</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>Ultimas clases añadidas</h2>
            <div class="card">
                <div class="card-header">
                    Curso de informática
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id scelerisque dolor, non sodales ex. Donec rutrum neque nec elementum placerat. Suspendisse commodo augue id ullamcorper volutpat. Aenean lobortis sodales quam in auctor. Nunc eu mauris tellus. Maecenas vel quam nec odio rhoncus imperdiet eget ac odio. Curabitur ante nibh, tempor eget sodales id, efficitur nec mi. Phasellus sem nibh, faucibus vitae mattis at, gravida id nunc. Etiam semper tortor vitae tortor placerat laoreet. Etiam convallis, ex commodo auctor.
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/3P5k8JsPz_A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary">Ingresar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
