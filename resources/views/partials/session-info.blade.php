@if(session('info'))
    <div class="container">
        <br>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            {{ session('info') }}
            <button type="button" class="close"
                    data-dismiss="alert"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    {{session()->forget('info')}}
@endif

@if(session('error'))
    <div class="container">
        <br>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close"
                    data-dismiss="alert"
                    aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    {{session()->forget('error')}}
@endif