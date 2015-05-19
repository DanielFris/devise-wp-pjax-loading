jQuery(document).ready(function($){
		
		
	$('body').append('<div class="dpl-loader"><span>Loading</span></div>');
	$loader = $('.dpl-loader');
	function toggle_loader(){
		$loader.toggleClass('show');
	}

	$(document)
		.on('pjax:start', function() { toggle_loader(); })
		.on('pjax:end',   function() { toggle_loader(); });

}); // end script