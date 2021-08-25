@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block" id="success">
        <button type="button" class="close" data-dismiss="alert"
            onclick="document.getElementById('success').style.display='none';">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block" id="error">
        <button type="button" class="close" data-dismiss="alert"
            onclick="document.getElementById('error').style.display='none';">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-block" id="warning">
        <button type="button" class="close" data-dismiss="alert"
            onclick="document.getElementById('warning').style.display='none';">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block" id="info">
        <button type="button" class="close" data-dismiss="alert"
            onclick="document.getElementById('info').style.display='none';">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif


@if ($errors->any())
    <div class="alert alert-danger" id="any">
        <button type="button" class="close" data-dismiss="alert"
            onclick="document.getElementById('any').style.display='none';">×</button>
        Oups! Revoyez les entrées du formulaire
    </div>
@endif
