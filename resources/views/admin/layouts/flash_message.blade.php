@if (session('status'))
    <div class="alert alert-success text-center col-sm-4 col-sm-offset-4">
        <h4>{{ session('status') }}</h4>
    </div>
@endif