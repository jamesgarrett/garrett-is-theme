<?php

/*

Template Name: About Page

*/

?>



@layout('layouts.one-column')



@section('main')

	<div class="grid" style="overflow-y:scroll;">

		@wpposts

		<? $title = get_the_title(); ?>

		<div class="row" style="padding:15px 15px 40px;">

			<div class="col-8" style="width: 350px;float: left;margin: 0 auto 15px auto;text-align: justify;">

				<? $content = the_content(); ?>

			</div>

			<div class="col-4" style="width:33.3333%;float:right;margin:0;">

			</div>

			<div class="col-12" style="width:100%;clear:both;margin:0;">

			</div>

		</div>

		@wpempty

		<li>'Sorry no post matched your criteria'</li>

		@wpend



	</div>

@endsection