@if (session()->has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('success') }}
    </div>
@endif
@if (session()->has('warning'))
    <div class="alert alert-warning">
        {{ session()->get('warning') }}
    </div>
@endif
@if (session()->has('info'))
    <div class="alert alert-info">
        {{ session()->get('info') }}
    </div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
@endif