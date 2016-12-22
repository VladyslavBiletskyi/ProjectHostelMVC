@if(count($errors) > 0)
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="alert alert-danger" role="alert">
                @foreach($errors->all() as $error)
                    <p>{{$error}}</p>
                @endforeach
            </div>
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
        </div>
    </div>
@endif
@if(Session::has('errormessage'))
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="alert alert-danger">
                {{Session::get('errormessage')}}
            </div>
        </div>
    </div>
@endif