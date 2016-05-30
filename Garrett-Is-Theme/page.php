@layout('layouts.one-column')



@section('main')

	<div class="grid">

		@wpposts

		<? $title = get_the_title(); ?>

		<div class="row" style="padding:15px 40px;">

			<div class="col-md-12">
				<div style="width: 325px;float: none;text-align:center;margin:0 auto;">
				<? $content = the_content(); ?>
				</div>
			</div>

		</div>

		@wpempty

		<li>'Sorry no post matched your criteria'</li>

		@wpend



	</div>

@endsection