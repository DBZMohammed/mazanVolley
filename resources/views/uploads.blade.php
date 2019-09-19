@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <h2 class="text-white"> - Voici notre belle équipe - </h2>
</div>

<div class="container-fluid">
    <div class="col-xl-12">
        <div class="card-group p-2">
            <div class="card p-2">
                <a href="{{ asset('img/equipe/IMG_20190902_205738.jpg') }}"><img class="responsive"
                        src="{{ asset('img/equipe/IMG_20190902_205738.jpg') }}" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card p-2">
                <a href="{{ asset('img/equipe/IMG_20190902_205811.jpg') }}"><img class="responsive"
                        src="{{ asset('img/equipe/IMG_20190902_205811.jpg') }}" alt="Card image cap"></a>
                <div class="card-body p-2">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
            <div class="card p-2">
                <a href="{{ asset('img/equipe/IMG_20190902_205906.jpg') }}"><img class="responsive"
                        src="{{ asset('img/equipe/IMG_20190902_205906.jpg') }}" alt="Card image cap"></a>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
