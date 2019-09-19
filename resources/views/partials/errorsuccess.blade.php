@if ($errors->any())
    <div class="alert alert-danger alert-dismissible show" style="color: #d73925 !important;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('success'))

    <div class="alert alert-success alert-dismissible" style="color: #3c763d !important;">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>
            <i class="icon fa fa-check"></i>
            {{ session()->get('success') }}
        </h4>
    </div>
@endif
