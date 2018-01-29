<!DOCTYPE html>
<html>
<head>
	<title>Nimnaya</title>
	<link rel="stylesheet" href="/css/app.css">
	<!--social media facebook share-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>

<!-- Place this tag in your head or just before your close body tag. -->
<script src="https://apis.google.com/js/platform.js" async defer></script>



<!--social media facebook share ends-->
</head>
<body>
@include('inc.navbar')

@if(Request::is('/'))
@include('inc.showcase')

@endif
<div class="homecontainer">
	<div class="row">
		<div class="col-md-12 col-lg-12">
	
		@include('inc.messages')
	
	@yield('content')
		</div>
			<div class="col-md-4 col-lg-4">
			</div>
		</div>
</div>
<footer id="footer" >
	<center><p>Developed by-HackMePlz-&copy; All rights reserved<center>

	<img src="/uploads/avatars/icons/grouplogo.png " style="width: 130px; height: 130px; padding-right: 10px;">
	
<img src="/uploads/avatars/icons/arimaclanka_1361873913_280.jpg " style="width: 130px; height: 130px;">
	
	<h5 style="color:#000; "></center><span class="glyphicon glyphicon-share-alt"></span>  share us</h5>

	<h5> on facebook : 
<div class="fb-share-button" data-href="http://nimnayawebsite.dev/" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fnimnayawebsite.dev%2F&amp;src=sdkpreparse">Share</a></div></h3>

<h5> on linkdin : <script type="IN/Share" data-url="http://nimnayawebsite.dev/"></script></h5>



<h5> on google+ : <div class="g-plus" data-action="share" data-annotation="none">
</div></h5>
</div>
</footer>
</body>
</html>
