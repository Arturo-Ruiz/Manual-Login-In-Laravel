@if (session('error'))

    {{ session('error') }}

@endif

@if (session('status'))

    {{ session('status') }}
    
@endif

