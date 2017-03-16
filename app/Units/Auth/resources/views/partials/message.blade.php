@if($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        @foreach($errors->all() as $error)
         <p>{!! $error !!}</p>
        @endforeach
    </div>
@endif
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
