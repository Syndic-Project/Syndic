
@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css"/>
@endsection


@section('content')
    <div class="content-page">
        <div class="visible-print text-center">


            {!! QrCode::size(250)->generate('zebi'); !!}


        </div>
    </div>


@endsection




@section('script-bottom')
    <!-- Validation init js-->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection
