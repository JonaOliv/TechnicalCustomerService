@extends('layouts.main')  
@section('content')  
<style type="text/css">
	body {
		background-image: url("{{ asset('/img/technical-support.jpg') }}"), url("{{ asset('/img/technical-support.jpg') }}");
		background-position: 98% 90%, top left;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		margin: 0px;
		padding: 0px;
	}
	h1{
		font-family:sans-serif;
		font-weight:bold;

	}
</style>
@endsection