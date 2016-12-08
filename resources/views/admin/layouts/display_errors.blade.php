@if(count($errors) > 0)
    <div class="col-sm-12">
        <div class="col-sm-2">

        </div>
        <div class="row col-sm-4" style="margin-top: 15px">

            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@endif