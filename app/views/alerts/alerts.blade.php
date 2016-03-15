@if(Session::has('alert-success'))
    <div class="alert alert-success fade in" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p class="text-center">
            <strong>Success! </strong>{{Session::get('alert-success')}}
        </p>
    </div>
@endif
@if(Session::has('alert-warning'))
    <div class="alert alert-warning fade in" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p class="text-center">
            {{Session::get('alert-warning')}}
        </p>
    </div>
@endif
@if(Session::has('alert-errors'))
    <div class="alert alert-warning fade in" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <p class="text-center">
            {{Session::get('alert-errors')}}
        </p>
    </div>
@endif
