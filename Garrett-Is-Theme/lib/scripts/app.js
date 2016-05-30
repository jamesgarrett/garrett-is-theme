// 
// CDK:PRE-IMPORTS
// 
var _ = {
	$: {
		w   : $(window),
		top : $('#top'),
		app : $('#app'),
		bar : $('#sidebar'),
	},
	util: {
		topOffset: function(set){
			var set = typeof set!=='undefined' ? set : true,
				off = _.$.top.outerHeight();
			if (set) {
				_.$.app.css('padding-top',on);
			}
			return off;
		},
	},
	init: {
		pre: {
			loaded: function() {
				$('body').addClass('loaded');
			},
			acf_slider: function() {
				$('.acf_slider').each(function(i,$self) { $self = $($self);

					var $fs     = $self.parents('.acf_slider-fullscreen');

					$.each($self.data('acf-slider')[0],function(i,o) {
						var rsTtl  = o['title'] ? '<strong class="rsTtl">'+o['title']+'</strong>' : '',
							rsCapt = o['caption'] ? '<figure class="rsCapt">'+o['caption']+'</figure>' : '',	
							rsImg  = ('<a class="rsImg" alt="'+o['alt']+'" href="'+o['url']+'" width="'+o['width']+'" width="'+o['height']+'"></a>');
						$self.append($('<div>'+rsTtl+rsImg+'</div>'));
					});

					$self.royalSlider({
						// autoScaleSlider: true,
						// autoHeight: true,
						arrowsNavAutoHide: false,
						sliderTouch: true,
						keyboardNavEnabled: true,
						deeplinking: {
							// deep linking options go gere
							enabled: true,
							change: true,
							prefix: 'slide-'
						}
					});  

					var  slider = $self.data('royalSlider');

					$(document).keydown(function(event) {
						key = event.keyCode;
						if (key==27) {
							$fs.removeClass('show');
						};
					});

					_.$.w.resize(function(event) {
						slider.updateSliderSize();
					});

					// show on thumbnail click
					$('[href*="#slide-"]').click(function(event) {
						$fs.addClass('show');
					});

				}); // SLIDER INIT
			},
		},
		post: {
			click_close: function() {
				$('[data-close]').click(function(e) {
					e.preventDefault();
					$(this).parents('.show').toggleClass('show');
				});
			}
		}
	},
	events : {
		resize: {
			pjlist_width: function(){
				_.$.bar.children('ul').css('width',_.$.bar.outerWidth());
			},
			offset_app  : function(){
				_.util.topOffset();
			},
		}
	}
};
// 
// CDK:POST-IMPORTS
// 