@if(session()->has('exception'))
    <div class="alert alert-danger alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('exception') }}
    </div>
@endif