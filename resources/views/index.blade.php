@extends('layouts.appLayout')
@section('content')
@hasanyrole('Admin|Vendedor')
	<h1>Welcome to Gastrom S.A. PayRoll Software</h1>
	@else
	@include('components.authAlert')
@endhasanyrole
@endsection