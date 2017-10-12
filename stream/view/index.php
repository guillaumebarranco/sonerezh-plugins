<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>

<style>

	.onoff_view {
		display: inline-block;
		position: relative;
	    top: 10px;
	    left: 70px;
	}

	*, *:before,
	*:after {
	  box-sizing: border-box;
	}

	.toggle {
	  position: relative;
	  display: block;
	  margin: 0 auto;
	  width: 50px;
	  height: 30px;
	  color: white;
	  outline: 0;
	  text-decoration: none;
	  border-radius: 100px;
	  border: 2px solid #546E7A;
	  background-color: #263238;
	  transition: all 500ms;
	}
	.toggle:active {
	  background-color: #1c2429;
	}
	.toggle:hover:not(.toggle--moving):after {
	  background-color: #455A64;
	}
	.toggle:after {
	  display: block;
	  position: absolute;
	  top: 4px;
	  bottom: 4px;
	  left: 4px;
	  width: calc(50% - 4px);
	  line-height: 45px;
	  text-align: center;
	  text-transform: uppercase;
	  font-size: 20px;
	  color: white;
	  background-color: #37474F;
	  border: 2px solid;
	  transition: all 500ms;
	}

	.toggle--on:after {
	  content: '';
	  border-radius: 50px 5px 5px 50px;
	  color: #66BB6A;
	}

	.toggle--off:after {
	  content: '';
	  border-radius: 5px 50px 50px 5px;
	  transform: translate(100%, 0);
	  color: #f44336;
	}

	.toggle--moving {
	  background-color: #1c2429;
	}
	.toggle--moving:after {
	  color: transparent;
	  border-color: #435862;
	  background-color: #222c31;
	  transition: color 0s, transform 500ms, border-radius 500ms,           background-color 500ms;
	}

</style>

<div class="onoff_view">
	<a href="#" class="toggle toggle--off"></a>
</div>

<script src="https://code.jquery.com/jquery-2.2.4.js"></script>

<script>
	
	$(document).ready(function() {

		$('.toggle').click(function(e) {

			console.log('event stream changed');

			var toggle = this;

			e.preventDefault();

			$(toggle).toggleClass('toggle--on')
				.toggleClass('toggle--off')
				.addClass('toggle--moving');

			setTimeout(function() {
				$(toggle).removeClass('toggle--moving');
			}, 200)
		});
	});

</script>
