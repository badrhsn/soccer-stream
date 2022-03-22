<!DOCTYPE html>
<html>
<head>
<title>Visitor counter script</title>
<link rel="stylesheet" type="text/css" href="./css/modale.css">
<script type="text/javascript">
  !function(a,b,c,d,e,f,g,h){a.RaygunObject=e,a[e]=a[e]||function(){
  (a[e].o=a[e].o||[]).push(arguments)},f=b.createElement(c),g=b.getElementsByTagName(c)[0],
  f.async=1,f.src=d,g.parentNode.insertBefore(f,g),h=a.onerror,a.onerror=function(b,c,d,f,g){
  h&&h(b,c,d,f,g),g||(g=new Error(b)),a[e].q=a[e].q||[],a[e].q.push({
  e:g})}}(window,document,"script","//cdn.raygun.io/raygun4js/raygun.min.js","rg4js");
</script>
</head>

<body>

<footer>
<?php include("./includes/modale.php");
	include("./includes/counter.php");
?>
	
</footer>

 	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114728297-1"></script>
<script>
  //window.dataLayer = window.dataLayer || [];
  //function gtag(){dataLayer.push(arguments);}
  //gtag('js', new Date());

  //gtag('config', 'UA-114728297-1');

</script>


<script type="text/javascript">
  rg4js('apiKey', 'AHAOO9TBe+hGodWn/6Y2fA==');
  rg4js('enableCrashReporting', true);
  rg4js('enablePulse', true);
  rg4js('setUser', {
  identifier: 'users_email_address_or_unique_id',
  isAnonymous: false,
  email: 'users_email_address@domain.com',
  firstName: 'Firstname',
  fullName: 'Firstname Lastname'
});
</script>
<script language="JavaScript">var fhs = document.createElement('script');var fhs_id = "5550071";
var ref = (''+document.referrer+'');var pn =  window.location;var w_h = window.screen.width + " x " + window.screen.height;
fhs.src = "//freehostedscripts.net/ocounter.php?site="+fhs_id+"&e1=Online User&e2=Online Users&r="+ref+"&wh="+w_h+"&a=1&pn="+pn+"";
document.head.appendChild(fhs);document.write("<span id='o_"+fhs_id+"'></span>");
</script>

</body>
</html>