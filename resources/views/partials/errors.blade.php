@if(session()->has('errors'))
    <div class="alert alert-dismissable alert-danger fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden="true">&times;</span>
        </button>
            <li><strong>{!! $errors !!}</strong></li>
    </div>
@endif