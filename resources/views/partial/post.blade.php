


@foreach ($publis as $publi)
<br></br>
<div class=" container border p-4">
    <h2 class="card-title">{{$publi->title}}</h2>
    <div class="card-body">
        <p class="card-text">{{$publi->desc}}</p>
        <div class="post-body">{{$publi->date}}</div>
    </div>
</div>
@endforeach

