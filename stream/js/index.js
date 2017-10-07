$(function( ){

	function getLastSong() {

		$.ajax({
            url: baseurl + "/streams/last",
            method: 'GET',
            success: function(response) {
            	console.log('response', response);
            }, error: function(err) {
            	console.log('err', err);
            }
        });
	}

	getLastSong();
});
