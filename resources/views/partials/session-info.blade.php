@if(session('info'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <div class="container">

        <strong>{{ auth()->user()->name }}</strong> {{ session('info') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>
@endif

