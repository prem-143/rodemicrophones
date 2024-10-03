@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Alert!</h4>{{Session::get('error')}}

</div>
@endif
@if(Session::has('success'))
<div class="callout callout-success">
    <h4>I</h4>
    <p>prem</p>{{Session::get('success')}}
</div>
@endif
