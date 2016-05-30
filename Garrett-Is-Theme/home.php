@layout('layouts.one-column')



@section('main')

	<? $id = get_the_id(); ?>

	<div class="grid">



		@wpposts

		    <? $project_type = get_field('project_type'); ?>

			

			@if($project_type=='Motion')

				@include('partials.project-motion')



			@else

				@include('partials.project-still')



		    @endif

		@wpempty3

		    <li>{{ __('Sorry, no posts matched your criteria.') }}</li>

		@wpend

	</div>

@endsection