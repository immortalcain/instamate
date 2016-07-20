<html>
<?php 
error_reporting(0);
?>
<head>
	<script src="instashow/jquery.instashow.packaged.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/3.0.3/handlebars.runtime.min.js"></script>

	<link href="instashow/jquery.instashow.min.css" rel="stylesheet">
	<script src="instashow/jquery.instashow.min.js"></script>
</head>


<body>
	
	<div data-is	
     data-is-api="instashow/api/"
     data-is-source="#aklimdangecen"
     data-is-width="auto"
     data-is-height="500px"
     data-is-columns="5"
     data-is-rows="3"
     data-is-direction="vertical"
     data-is-lang="en"
     data-is-popup-info="">
	</div>

	<div class="my-instashow"></div>

<script>
    $('.my-instashow').instaShow({
        api: 'instashow/api/',
        source: '#aklimdangecen',
        width: 'auto',
        height: '500px',
        columns: 5,
        rows: 3,
        direction: 'vertical',
        lang: 'en',
        popupInfo: ''
    });
</script>
<script>
    $(window).on('instaShowReady', function() {
        $('.my-instashow').instaShow({
            api: 'instashow/api/',
            source: '#aklimdangecen',
            width: 'auto',
            height: '500px',
            columns: 5,
            rows: 3,
            direction: 'vertical',
            lang: 'en',
            popupInfo: ''
        });
    });
</script>

</body>
</html>