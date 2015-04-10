
@extends('layouts.admin')

@section('content')

<form class="form" method="POST">
    <div class="form-group"><input type="text" name="login" class="form-control" required="required"/></div>
    <div class="form-group"><input type="password" name="password" class="form-control" required="required"/></div>
    <div class="form-group"><input type="submit" class="btn btn-success"/></div>
</form>

@stop