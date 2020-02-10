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
                        <a href="{{ route('course',1)}}" class="list-group-item list-group-item-action @if($number==1) active @endif">
                            Primer asignatura
                        </a>
                        <a href="{{ route('course',2)}}" class="list-group-item list-group-item-action @if($number==2) active @endif">Segunda asignatura</a>
                        <a href="{{ route('course',3)}}" class="list-group-item list-group-item-action @if($number==3) active @endif">Tercera asignatura</a>
                        <a href="{{ route('course',4)}}" class="list-group-item list-group-item-action @if($number==4) active @endif">Cuarta asignatura</a>
                        <a href="{{ route('course',5)}}" class="list-group-item list-group-item-action @if($number==5) active @endif">Quinta asignatura</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    II CICLO
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="{{ route('course',6)}}" class="list-group-item list-group-item-action @if($number==6) active @endif">
                            Primer asignatura
                        </a>
                        <a href="{{ route('course',7)}}" class="list-group-item list-group-item-action  @if($number==7) active @endif">Segunda asignatura</a>
                        <a href="{{ route('course',8)}}" class="list-group-item list-group-item-action  @if($number==8) active @endif">Tercera asignatura</a>
                        <a href="{{ route('course',9)}}" class="list-group-item list-group-item-action  @if($number==9) active @endif">Cuarta asignatura</a>
                        <a href="{{ route('course',10)}}" class="list-group-item list-group-item-action  @if($number==10) active @endif">Quinta asignatura</a>
                        <a href="{{ route('course',11)}}" class="list-group-item list-group-item-action  @if($number==11) active @endif">Sexta asignatura</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>
            @if($number==1)
            Primera
            @elseif($number==2)
            Segunda
            @elseif($number==3)
            Tercera
            @elseif($number==4)
            Cuarta
            @elseif($number==5)
            Quinta
            @elseif($number==6)
            Primera
            @elseif($number==7)
            Segunda
            @elseif($number==8)
            Tercera
            @elseif($number==9)
            Cuarta
            @elseif($number==10)
            Quinta
            @elseif($number==11)
            Sexta
            @endif
            Asignatura
            </h2>
            <div class="card">
                <div class="card-header">
                    Tema
                    @if($number==1)
                    N° 1 Informática
                    @elseif($number==2)
                    N° 2 Matemática
                    @elseif($number==3)
                    N° 1 Ciencias sociales
                    @elseif($number==4)
                    N° 1 Biología
                    @elseif($number==5)
                    N° 3 Educación física
                    @elseif($number==6)
                    N° 3 Educación Civica
                    @elseif($number==7)
                    N° 3 Informática II
                    @elseif($number==8)
                    N° 3 Matemática II
                    @elseif($number==9)
                    N° 3 Anatomía
                    @elseif($number==10)
                    N° 3 Educación por el arte
                    @elseif($number==11)
                    N° 3 Introducción a los negocios
                    @endif
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut id scelerisque dolor, non sodales ex. Donec rutrum neque nec elementum placerat. Suspendisse commodo augue id ullamcorper volutpat. Aenean lobortis sodales quam in auctor. Nunc eu mauris tellus. Maecenas vel quam nec odio rhoncus imperdiet eget ac odio. Curabitur ante nibh, tempor eget sodales id, efficitur nec mi. Phasellus sem nibh, faucibus vitae mattis at, gravida id nunc. Etiam semper tortor vitae tortor placerat laoreet. Etiam convallis, ex commodo auctor.
                </div>
                <div class="card-footer text-center">
                    <button class="btn btn-primary">Ingresar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
