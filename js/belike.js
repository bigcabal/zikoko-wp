$(document).ready(function(){function e(e,t,a){for(var o=e.split(" "),l="",n=360,i=40,c=0;c<o.length;c++){var f=l+o[c]+" ",m=r.measureText(f),u=m.width;u>n&&c>0?(r.fillText(l,30,t),l=o[c]+" ",t+=25,i+=25):l=f}r.fillText(l,30,t),a(i)}function t(e,t,a){for(var o,r=0;1e3>r;r++){var n=Math.floor(Math.random()*l.length);if(l[n].gender===t|"any"===l[n].gender&&l[n].country===a|"any"===l[n].country){o=l[n];break}}for(var i=o.sentence,i=i.replace(/{{name}}/g,e),i=i.split("."),r=0;r<i.length;r++){{i[r].charAt(0)}" "===i[r].charAt(0)?i[r]=i[r].slice(1)+".":i[r]+="."}return i}function a(a,o){var l,n=document.getElementById("logo");l=document.getElementById("male"===o?"figure-male":"figure-female");var i=t(a,o);r.fillStyle="#fff",r.fillRect(0,0,600,350),r.lineWidth="6",r.strokeStyle="#8235b6",r.rect(0,0,600,350),r.stroke(),r.drawImage(l,460,50),r.drawImage(n,30,300),r.font="18px Montserrat",r.fillStyle="#000";for(var c=50,f=0;f<i.length;f++)e(i[f],c,function(e){c+=e})}var o=document.getElementById("beLikeZikoko"),r=o.getContext("2d"),l=ajaxinfo;$("#generateMeme").on("click",function(e){{var t=$('input[name="name"]').val(),r=$('select[name="gender"]').val();$('select[name="country"]').val()}a(t,r);var l=(window.location.href,"I am "+t+". Be like me. See your story."),n=o.toDataURL("image/png");return $("li.download a").attr("href",n),$("li.repeat a").attr("href",window.location.href),$("#beLikeZikokoImg").attr("src",n),$(".belike-result").show(),$("html, body").animate({scrollTop:$(".belike-result").offset().top-20},500),o.toBlob?o.toBlob(function(e){var t=new FormData;t.append("action","ajax_upload"),t.append("image",e,"image"),$.ajax({url:ajaxpagination.ajaxurl,type:"post",contentType:!1,processData:!1,data:t,success:function(e){var t=JSON.parse(e);console.log(t.url),$("li.facebook a").attr("href","http://localhost/zikoko/be-like-share/?img="+t.url+"&platform=fb"),$("li.twitter a").attr("href","http://localhost/zikoko/be-like-share/?img="+t.url+"&platform=tw"),$("li.facebook a").attr("href","https://facebook.com/dialog/feed?app_id=593692017438309&link="+t.url+"&name="+l+"&redirect_uri="+t.url),$("li.twitter a").attr("href","https://twitter.com/intent/tweet/?text="+l+"&url="+t.url+"&via=zikokomag&related=zikokomag")},error:function(e){console.log(e)}})},"image/jpeg"):console.log("no"),!1})});