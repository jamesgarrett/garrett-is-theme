@layout('layouts.master')

@section('main')
		@wpposts
		    <?
		    $project_content = get_field('project_content');
		    $category = get_field('category');
		    ?>
			@include('partials.project-still')
		@wpempty
		    <li>{{ __('Sorry, no posts matched your criteria.') }}</li>
		@wpend
@endsection