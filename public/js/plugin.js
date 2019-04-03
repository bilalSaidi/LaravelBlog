$(document).ready(function(){

	$('.deleteUser').on('click',function(e){
			if (!confirm('Do You Want Delete This User ')) {
				e.preventDefault();
			}
	});
});