@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('css')

@endsection

@section('content')

    <div class="content-page">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">


                        <form class="needs-validation" novalidate method="POST"
                              action="{{ route('immeubles.update',['immeuble'=>$immeuble->id])}}">
                            @method('PUT')
                            @csrf

                            @include('Immeubles.layout')
                            <button type="submit" class="btn btn-block btn-purple btn-lg ">Sauvgarder <i
                                    class="fa fa-arrow-right"></i></button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
