<!-- Data Insert, Update, Delete Active, Inactive Message Show -->
@if(Session('success'))
	<div class="alert bg-primary fade in">
		<a href="#" class="close" data-dismiss="alert">&times;</a>
		{{ Session('success') }}
	</div>
@endif

<!-- Form Validation Message Show -->
@if ($errors->any())
	@foreach ($errors->all() as $error)
		<div class="alert bg-danger fade in">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			{{ $error }}
		</div>
	@endforeach
@endif