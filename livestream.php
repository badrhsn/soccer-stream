
<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
<head>
<link href='https://www.blogger.com/static/v1/widgets/3957297643-widget_css_bundle.css' rel='stylesheet' type='text/css' />
<style id='page-skin-1' type='text/css'><!--
*{margin:0;padding:0;}
html, body{width: 100%;height: 80%;overflow: hidden;background: #333}
#player{width: 100%;height: 100%;position: absolute;z-index: 2; top:0; right:0; left:0; bottom:0;}
.vjs-watermark {
position: absolute;
bottom: 40px !important;
margin: 20px;
transition: all .3s;
z-index: 5555;
}
.vjs-watermark img{
width: 50%;
cursor: pointer;
pointer-events: all;
background-repeat: no-repeat;
background-size: contain;
}

--></style>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script>
//<![CDATA[	

var ip = "localhost";

function api(param) {
	var http;
	if (window.XMLHttpRequest)  {
		http=new XMLHttpRequest();
	} else {
		http=new ActiveXObject("Microsoft.XMLHTTP");
	}
	var url = "http://"+ip+":5000/Remote/"+param;
	http.open("GET", url, true);
	http.send();
}

function hadiFullScreen() {
	api("goFullScreen");
}

//]]>
</script>
<script src='//cdn.jsdelivr.net/clappr/latest/clappr.min.js'></script>
<script src='//cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js' type='text/javascript'></script>
<script src='https://cdn.jsdelivr.net/gh/clappr/dash-shaka-playback@latest/dist/dash-shaka-playback.js' type='text/javascript'></script>
<script src='https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.js'></script>
</head>
<div class='no-items section' id='test'></div>
<body style='margin:0;padding:0'>
<a href='http://www.sportignite.com' target='_blank'><div class='vjs-watermark' style='bottom: 0px; left: 0px; opacity: 0.5;'><img src='' /></div></a>
<div id='player'></div>
<script>
//<![CDATA[	

var topVideo = window.location.search.substr(3);

        var player = new Clappr.Player({
			source: topVideo,
            plugins: [DashShakaPlayback, LevelSelector, ChromecastPlugin],		
            parentId: '#player',
			width: '100%', height: '100%',
			hideMediaControl: true,
			mediacontrol: {seekbar: "#FFD439", buttons: "#FFD439"},
            chromecast: {
              appId: '9DFB77C0',
              contentType: 'video/mp4',
              media: {
                type: ChromecastPlugin.Movie,
                title: 'Awesome Hot Air Balloon Slackline',
                subtitle: 'You won\'t get much closer to Skylining than this!'
              }
            },
			autoPlay: true
		});

//]]>
</script>
<script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/3953819307-widgets.js"></script>
<script type='text/javascript'>
window['__wavt'] = 'AOuZoY7GBI3X1GOzU8g8I76uMT23RZtJng:1517877248881';_WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d6635189532010888162','//clappr3.embratoria.com/','6635189532010888162');
_WidgetManager._SetDataContext([{'name': 'blog', 'data': {'blogId': '6635189532010888162', 'title': 'Clappr 3 ', 'url': 'http://clappr3.embratoria.com/', 'canonicalUrl': 'http://clappr3.embratoria.com/', 'homepageUrl': 'http://clappr3.embratoria.com/', 'searchUrl': 'http://clappr3.embratoria.com/search', 'canonicalHomepageUrl': 'http://clappr3.embratoria.com/', 'blogspotFaviconUrl': 'http://clappr3.embratoria.com/favicon.ico', 'bloggerUrl': 'https://www.blogger.com', 'hasCustomDomain': true, 'httpsEnabled': false, 'enabledCommentProfileImages': true, 'gPlusViewType': 'FILTERED_POSTMOD', 'adultContent': false, 'analyticsAccountNumber': 'UA-88766493-1', 'encoding': 'UTF-8', 'locale': 'fr', 'localeUnderscoreDelimited': 'fr', 'languageDirection': 'ltr', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'feedLinks': '\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Clappr 3  - Atom\x22 href\x3d\x22http://clappr3.embratoria.com/feeds/posts/default\x22 /\x3e\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/rss+xml\x22 title\x3d\x22Clappr 3  - RSS\x22 href\x3d\x22http://clappr3.embratoria.com/feeds/posts/default?alt\x3drss\x22 /\x3e\n\x3clink rel\x3d\x22service.post\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Clappr 3  - Atom\x22 href\x3d\x22https://www.blogger.com/feeds/6635189532010888162/posts/default\x22 /\x3e\n', 'meTag': '', 'openIdOpTag': '\x3clink rel\x3d\x22openid.server\x22 href\x3d\x22https://www.blogger.com/openid-server.g\x22 /\x3e\n\x3clink rel\x3d\x22openid.delegate\x22 href\x3d\x22http://clappr3.embratoria.com/\x22 /\x3e\n', 'adsenseHostId': 'ca-host-pub-1556223355139109', 'adsenseHasAds': false, 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/9516049fb680f233', 'plusOneApiSrc': 'https://apis.google.com/js/plusone.js', 'sharing': {'platforms': [{'name': 'Obtenir le lien', 'key': 'link', 'shareMessage': 'Obtenir le lien', 'target': ''}, {'name': 'Facebook', 'key': 'facebook', 'shareMessage': 'Partager sur Facebook', 'target': 'facebook'}, {'name': 'BlogThis!', 'key': 'blogThis', 'shareMessage': 'BlogThis!', 'target': 'blog'}, {'name': 'Twitter', 'key': 'twitter', 'shareMessage': 'Partager sur Twitter', 'target': 'twitter'}, {'name': 'Pinterest', 'key': 'pinterest', 'shareMessage': 'Partager sur Pinterest', 'target': 'pinterest'}, {'name': 'Google+', 'key': 'googlePlus', 'shareMessage': 'Partager sur Google+', 'target': 'googleplus'}, {'name': 'E-mail', 'key': 'email', 'shareMessage': 'E-mail', 'target': 'email'}], 'googlePlusShareButtonWidth': 300, 'googlePlusBootstrap': '\x3cscript type\x3d\x22text/javascript\x22\x3ewindow.___gcfg \x3d {\x27lang\x27: \x27fr\x27};\x3c/script\x3e'}, 'hasCustomJumpLinkMessage': false, 'jumpLinkMessage': 'Lire la suite', 'pageType': 'index', 'pageName': '', 'pageTitle': 'Clappr 3 '}}, {'name': 'features', 'data': {'lazy_images': 'false', 'unsupported_browser_message': 'false', 'sharing_get_link_dialog': 'true', 'sharing_native': 'false'}}, {'name': 'messages', 'data': {'edit': 'Modifier', 'linkCopiedToClipboard': 'Lien copié dans le presse-papiers&#160;!', 'ok': 'OK', 'postLink': 'Publier le lien'}}, {'name': 'template', 'data': {'name': 'custom', 'localizedName': 'Personnaliser', 'isResponsive': false, 'isAlternateRendering': false, 'isCustom': true}}, {'name': 'view', 'data': {'classic': {'name': 'classic', 'url': '?view\x3dclassic'}, 'flipcard': {'name': 'flipcard', 'url': '?view\x3dflipcard'}, 'magazine': {'name': 'magazine', 'url': '?view\x3dmagazine'}, 'mosaic': {'name': 'mosaic', 'url': '?view\x3dmosaic'}, 'sidebar': {'name': 'sidebar', 'url': '?view\x3dsidebar'}, 'snapshot': {'name': 'snapshot', 'url': '?view\x3dsnapshot'}, 'timeslide': {'name': 'timeslide', 'url': '?view\x3dtimeslide'}, 'isMobile': false, 'title': 'Clappr 3 ', 'description': '', 'url': 'http://clappr3.embratoria.com/', 'type': 'feed', 'isSingleItem': false, 'isMultipleItems': true, 'isError': false, 'isPage': false, 'isPost': false, 'isHomepage': true, 'isArchive': false, 'isLabelSearch': false}}]);
</script>
</body>
</html>