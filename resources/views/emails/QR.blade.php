<div class="card">
    <div class="card-body">
        <h1>hello</h1>

        {{-- <img
            src="{{ $message->embed(storage_path('http://localhost:8000/storage/QrCode_4_2020-11-22.png')) }}"
            width="400" /> --}}

        <img src="{{ url('storage/') . '/' . $text }}" alt="">



    </div>
</div>
