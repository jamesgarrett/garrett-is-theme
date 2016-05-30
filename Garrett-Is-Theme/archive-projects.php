@layout('layouts.master')

@section('main')
	<div class="grid">
		@wpquery(array('project_type'=>'projects'))
				@include('partials.project-still')
		@wpempty
		    <li>{{ __('Sorry, no posts matched your criteria.') }}</li>
		@wpend
	</div>
@endsection