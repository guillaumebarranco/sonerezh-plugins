$(function(){

	getLastSong() {

		$.ajax({
            url: baseurl + "/stream/last",
            method: 'GET',
            success: function(response) {
            	console.log('response', response);
            }, error: function(err) {
            	console.log('err', err);
            }
        });
	}
}
