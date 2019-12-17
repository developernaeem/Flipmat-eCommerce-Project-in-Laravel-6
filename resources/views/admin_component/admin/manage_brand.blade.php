@extends('layouts.app')
@section('content')
<div class="content-header">
	<!-- leftside content header -->
	<div class="leftside-content-header">
		<ul class="breadcrumbs">
			<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Dashboard</a></li>
			<li><a href="javascript:avoid(0)">Brand</a></li>
			<li><a href="javascript:avoid(0)">Manage Brand</a></li>
		</ul>
	</div>
</div>
<!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
<div class="row animated fadeInUp">
	<h1>Manage Brand</h1>
</div>
@endsection