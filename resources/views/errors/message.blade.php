
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
    <strong>ERROR</strong> <ul>
        @foreach ($errores as $error)
    <li>{{ $error }} </li>
    @endforeach
    </ul>
</div>
