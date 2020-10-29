@extends('Layouts/appLayout')

@section('style')
    <link href="{{ asset('assets/css/addlocataire.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="content-page">

        <button
            id="switchCameraButton"
            name="switch Camera"
            type="button"
            aria-pressed="false"
        >Switch</button>
        <div class="video-wrap">
            <video id="video" playsinline autoplay src=""></video>
        </div>

        {{--        trigger canvas web api--}}

        <div class="controller">
            <button id="snap">camera</button>
        </div>
        {{--webcam video snapshot--}}

        <canvas id="canvas" width="640" height="480"></canvas>
    </div>

@endsection

@section('script')


    <script>
        'use strict';

        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const snap = document.getElementById('snap');
        const errorMsgElement = document.getElementById('spanErrorMsg');

        const constraints = {
            audio: false,
            video:
        { facingMode: "user" }

        };

        async function init() {
            try {
                const stream = await navigator.mediaDevices.getUserMedia(constraints);
                handleSuccess(stream);
            } catch (e) {
                errorMsgElement.innerHTML =`navigator.getUserMedia.error:${e.toString()}`;
            }
        }

        //success

        function handleSuccess(stream) {
            window.stream = stream;
            video.srcObject = stream;
        }

        //load init
        init();

        // ..draw image
        var context = canvas.getContext('2d');
        snap.addEventListener("click", function () {
            context.drawImage(video, 0, 0, 640, 480);
        });
    </script>
@endsection

@section('script-bottom')
    <!-- Validation init js-->
    <script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection
