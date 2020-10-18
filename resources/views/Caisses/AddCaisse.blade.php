@extends('Layouts/appLayout')

@section('style')
<link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="content-page">
    <form action="{{route('Caisse.store') }}" method="POST">
        @csrf

    </form>
</div>

@endsection

@section('script-bottom')
<!-- Validation init js-->
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>

@endsection
@section('script')
<script src="{{ URL::asset('assets/js/addlocataire.js') }}"></script>
@endsection
@section('script')
<script src="{{ URL::asset('assets/js/AddAppartement.js') }}"></script>
@endsection
