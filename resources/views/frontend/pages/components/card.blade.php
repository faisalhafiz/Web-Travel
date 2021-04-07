<div class="card">
    <img class="card-img-top" src="{{ __('/images/') . $img }}">
    <div class="card-body">
        <div class="card-title">
            <h2 class="mt-2">{{ $title }}</h2>
        </div>
        <div class="card-text">
            <p>{{ $desc }}</p>
        </div>
    </div>
    <a class="btn btn-dark" style="border-radius: 0 !important;">{{ $btn }}</a>
</div>
