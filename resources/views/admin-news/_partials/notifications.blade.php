@if(Session::has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    <h3 class="text-danger"><i class="fa fa-check-circle"></i> Success</h3> 
    {{ Session::get('success') }}
</div>
@endif
@if(Session::has('danger'))
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    <h3 class="text-danger"><i class="fa fa-exclamation-triangle"></i> Error</h3> 
    {{ Session::get('danger') }}
</div>
@endif
@if (count($errors) > 0)
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
    <h3 class="text-danger"><i class="fa fa-exclamation-triangle"></i> Error</h3> 
    @foreach ($errors->all() as $error)
        {{ $error }}
    <br/>
    @endforeach
</div>
@endif
