_cookie_assistant_enable_cookies = true;
_cookie_assistant_disable_cookies = false;

(function() {

// Localize jQuery variable
var jQuery;

/******** Load jQuery if not present *********/
if (window.jQuery === undefined || window.jQuery.fn.jquery !== '1.7') {
  var script_tag = document.createElement('script');
  script_tag.setAttribute("type","text/javascript");
  script_tag.setAttribute("src",
    "//ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js");
  if (script_tag.readyState) {
    script_tag.onreadystatechange = function () { // For old versions of IE
      if (this.readyState == 'complete' || this.readyState == 'loaded') {
        scriptLoadHandler();
      }
    };
  } else {
    script_tag.onload = scriptLoadHandler;
  }
  // Try to find the head, otherwise default to the documentElement
  (document.getElementsByTagName("head")[0] || document.documentElement).appendChild(script_tag);
} else {
  // The jQuery version on the window is the one we want to use
  jQuery = window.jQuery;
  main();
}

/******** Called once jQuery has loaded ******/
function scriptLoadHandler() {
  // Restore $ and window.jQuery to their previous values and store the
  // new jQuery in our local jQuery variable
  jQuery = window.jQuery.noConflict(true);
  // Call our main function
  main(); 
}



/******** Our main function ********/
function main() { 
  jQuery(document).ready(function($) { 
    /******* Load CSS *******/
    /*
    var css_link = $("<link>", { 
      rel: "stylesheet", 
      type: "text/css", 
      href: "style.css" 
    });
    css_link.appendTo('head');  
    */
    !function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e(jQuery)}(function(e){function n(e){return e}function o(e){return decodeURIComponent(e.replace(t," "))}function i(e){0===e.indexOf('"')&&(e=e.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,"\\"));try{return r.json?JSON.parse(e):e}catch(n){}}var t=/\+/g,r=e.cookie=function(t,c,a){if(void 0!==c){if(a=e.extend({},r.defaults,a),"number"==typeof a.expires){var u=a.expires,f=a.expires=new Date;f.setDate(f.getDate()+u)}return c=r.json?JSON.stringify(c):String(c),document.cookie=[r.raw?t:encodeURIComponent(t),"=",r.raw?c:encodeURIComponent(c),a.expires?"; expires="+a.expires.toUTCString():"",a.path?"; path="+a.path:"",a.domain?"; domain="+a.domain:"",a.secure?"; secure":""].join("")}for(var d=r.raw?n:o,p=document.cookie.split("; "),s=t?void 0:{},m=0,x=p.length;x>m;m++){var l=p[m].split("="),g=d(l.shift()),v=d(l.join("="));if(t&&t===g){s=i(v);break}t||(s[g]=i(v))}return s};r.defaults={},e.removeCookie=function(n,o){return void 0!==e.cookie(n)?(e.cookie(n,"",e.extend(o,{expires:-1})),!0):!1}});

    function updateWidgetPosition(t){switch($widget=$("#cookie_assistant_wrapper"),$widget.removeClass("top-left top-right bottom-left bottom-right"),t){case"top-left":$widget.addClass("top-left");break;case"top-right":$widget.addClass("top-right");break;case"bottom-left":$widget.addClass("bottom-left");break;case"bottom-right":$widget.addClass("bottom-right")}}function updateWidgetTheme(t){$widget=$("#cookie_assistant_wrapper"),t.match(/dark/)?$widget.addClass("dark"):$widget.removeClass("dark"),t.match(/large/)?$widget.addClass("large"):$widget.removeClass("large")}

    $el = $('#cookie_assistant_container')
    $el.html("<style tyle=\"text/css\">\n#cookie_assistant_wrapper{position:fixed !important;width:320px !important;max-width:90% !important;background-color:#fff !important;padding:10px !important;border:1px solid #ccc !important;border-radius:5px !important;font-family:\'Helvetica Neue\', Helvetica, Arial, sans-serif !important;font-size:12px !important;line-height:15px !important;z-index:9999 !important;box-shadow:0px 5px 10px rgba(0,0,0,0.2)}#cookie_assistant_wrapper.top-left{left:10px !important;top:10px !important}#cookie_assistant_wrapper.top-right{right:10px !important;top:10px !important}#cookie_assistant_wrapper.bottom-left{left:10px !important;bottom:10px !important}#cookie_assistant_wrapper.bottom-right{right:10px !important;bottom:10px !important}#cookie_assistant_wrapper.dark{background-color:#222 !important;color:#fff !important}#cookie_assistant_wrapper.large{width:600px !important}#cookie_assistant_wrapper h2{font-size:14px !important;line-height:16px !important;margin:0 0 4px 0 !important;padding:0 !important}#cookie_assistant_wrapper p{margin:0 !important;padding:0 !important;margin-top:3px !important;margin-bottom:10px !important}#cookie_assistant_wrapper div.buttons{margin:5px 0 3px 0 !important}#cookie_assistant_wrapper a.btn-accept{padding:4px 8px !important;border-radius:3px !important;font-size:12px !important;-moz-border-radius:4px !important;-webkit-border-radius:4px !important;-khtml-border-radius:4px !important;border-radius:4px !important;-moz-box-shadow:inset 1px 1px 0 rgba(255,255,255,0.3) !important;-webkit-box-shadow:inset 1px 1px 0 rgba(255,255,255,0.3) !important;box-shadow:inset 1px 1px 0 rgba(255,255,255,0.3) !important;font-family:\"Helvetica Neue\",Helvetica,Arial,sans-serif !important;font-weight:bold !important;text-align:center !important;text-decoration:none !important;cursor:pointer !important;outline:none !important;overflow:visible !important;color:#fff !important;background:#a5bd24 !important;background:-moz-linear-gradient(top, #a5bd24 0%, #7dac38 100%) !important;background:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #a5bd24), color-stop(100%, #7dac38)) !important;background:-webkit-linear-gradient(top, #a5bd24 0%, #7dac38 100%) !important;background:-o-linear-gradient(top, #a5bd24 0%, #7dac38 100%) !important;background:-ms-linear-gradient(top, #a5bd24 0%, #7dac38 100%) !important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'#a5bd24\', endColorstr=\'#7DAC38\',GradientType=0 ) !important;background:linear-gradient(top, #a5bd24 0%, #7dac38 100%) !important;text-shadow:0 1px 1px rgba(0,0,0,0.25) !important;border:1px solid #781 !important}#cookie_assistant_wrapper a.btn-accept:focus,#cookie_assistant_wrapper a.btn-accept:hover{text-decoration:none !important;color:#fff !important;background:#5c8825 !important;background:-moz-linear-gradient(top, #8fbb44 0%, #5c8825 100%) !important;background:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #8fbb44), color-stop(100%, #5c8825)) !important;background:-webkit-linear-gradient(top, #8fbb44 0%, #5c8825 100%) !important;background:-o-linear-gradient(top, #8fbb44 0%, #5c8825 100%) !important;background:-ms-linear-gradient(top, #8fbb44 0%, #5c8825 100%) !important;filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=\'#8fbb44\', endColorstr=\'#5c8825\',GradientType=0 ) !important;background:linear-gradient(top, #8fbb44 0%, #5c8825 100%) !important;border:1px solid #670 !important}#cookie_assistant_wrapper a.btn-more{color:#0088cc !important;font-size:12px !important;margin-left:10px !important}\n\n<\/style>\n\n<div id=\"cookie_assistant_wrapper\">\n	<h2>Diese Seite verwendet Cookies<\/h2>	\n	<p>Diese Website nutzt Cookies. Bei Nutzung dieser Seite stimmst Du automatisch unserer Cookie-Politik zu.<\/p>\n\n	<div class=\"buttons\">\n		<a href=\"#\" class=\"btn-accept\">Verstanden!<\/a>\n		<a href=\"https://thiefas.de/cookies\" class=\"btn-more\" target=\"_blank\">Weitere Infos zu Cookies<\/a>\n	<\/div>\n<\/div>");
	
    var cookie_assistant_settings = {"headline":"Diese Seite verwendet Cookies","text":"Diese Website nutzt Cookies. Bei Nutzung dieser Seite stimmst Du automatisch unserer Cookie-Politik zu.","accept_text":"Verstanden!","more_text":"Weitere Infos zu Cookies","policy_url":"https://thiefas.de/cookies","position":"top-left"}
    template = 'small-dark';

    // show or hide ?
    if ($.cookie('cookie_assistant_enable_cookies') == 'true') {
      $el.hide();
    } else {
      $el.show();
    }

    if (template && template != '') {
      //console.log("set template: " + template);
      updateWidgetTheme(template);
    }
    if (position = cookie_assistant_settings['position']) {
      //console.log("set position: " + position);
      updateWidgetPosition(position);
    }

    $el.find('a.btn-accept').click(function() {
      $.cookie('cookie_assistant_enable_cookies', true, { expires: 356, path: '/' });
      $el.fadeOut();
    });

    $el.find('a.btn-decline').click(function() {
      $.cookie('cookie_assistant_disable_cookies', true, { expires: 356, path: '/' });
    });

    $el.find('a.btn-more').click(function() {

    });

  });
}

})(); // We call our anonymous function immediately