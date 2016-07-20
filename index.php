<html>
<?php 
error_reporting(0);
?>
<head>
<script src="vendors/jquery.min.js"></script>
<script src="vendors/handlebars.runtime.min.js"></script>

<link href="instashow/jquery.instashow.min.css" rel="stylesheet">
<script src="instashow/jquery.instashow.js"></script><style type="text/css">
.cover-pic {display: none;}
    @media print { 
#instaShowGallery_1,.instashow-popup-twilight,
.instashow-popup-control-close,
.instashow-popup-control-arrow,.instashow-popup-media-info {display: none!important;}
.instashow-popup-media-picture {display: block;}
.cover-pic {display: block;z-index: 9999;position: relative;}
.instashow-popup-wrapper {right: auto;}
div.instashow-popup-container {padding: 139px 58px;}
.instashow-popup-media-has-comments {width: auto;}
}
</style>
<script type="text/javascript">
function printme() {
    $('.print').click(function () {
        window.print();
    })
}
    
</script>
</head>


<body>
	
	<div data-is	
     data-is-api="instashow/api/"
     data-is-source="#aklimdangecen"
     data-is-width="auto"
     data-is-height="auto"
     data-is-columns="5"
     data-is-rows="3"
     data-is-direction="horizontal"
     data-is-lang="tr">
	</div>

	<div class="my-instashow"></div>

<img class="cover-pic" src="cover.png">
</body>
</html>