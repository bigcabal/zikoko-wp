$(document).ready(function(){function e(e,t,a){for(var o=e.split(" "),i="",n=360,l=40,c=0;c<o.length;c++){var f=i+o[c]+" ",m=r.measureText(f),d=m.width;d>n&&c>0?(r.fillText(i,30,t),i=o[c]+" ",t+=25,l+=25):i=f}r.fillText(i,30,t),a(l)}function t(e,t,a){for(var o,r=0;9999>r;r++){var n=Math.floor(Math.random()*i.length);if(i[n].gender===t|"any"===i[n].gender&&i[n].country===a|"any"===i[n].country){o=i[n];break}}for(var l=o.sentence,l=l.replace(/{{name}}/g,e),l=l.split("."),r=0;r<l.length;r++){{l[r].charAt(0)}" "===l[r].charAt(0)?l[r]=l[r].slice(1)+".":l[r]+="."}return l}function a(a,o){var i,n=document.getElementById("logo");i=document.getElementById("male"===o?"figure-male":"figure-female");var l=t(a,o);r.fillStyle="#fff",r.fillRect(0,0,600,350),r.lineWidth="6",r.strokeStyle="#8235b6",r.rect(0,0,600,350),r.stroke(),r.drawImage(i,460,50),r.drawImage(n,30,300),r.font="18px Montserrat",r.fillStyle="#000";for(var c=50,f=0;f<l.length;f++)e(l[f],c,function(e){c+=e})}var o=document.getElementById("beLikeZikoko"),r=o.getContext("2d"),i=ajaxinfo;$("#generateMeme").on("click",function(e){{var t=$('input[name="name"]').val(),r=$('select[name="gender"]').val();$('select[name="country"]').val()}a(t,r);var i=window.location.href,n="Be like "+t+". Make your story.",l=o.toDataURL("image/png");return $("li.download a").attr("href",l),$("li.facebook a").attr("href","https://facebook.com/dialog/feed?app_id=593692017438309&link="+i+"&name="+n+"&redirect_uri="+i),$("li.twitter a").attr("href","https://twitter.com/intent/tweet/?text="+n+"&url="+i+"&via=zikokomag&related=zikokomag"),$("li.repeat a").attr("href",window.location.href),$("#beLikeZikokoImg").attr("src",l),$(".belike-result").show(),$("html, body").animate({scrollTop:$(".belike-result").offset().top-20},500),o.toBlob?o.toBlob(function(e){var t=new FormData;t.append("action","ajax_upload"),t.append("image",e,"belike.png"),$.ajax({url:ajaxpagination.ajaxurl,type:"post",contentType:!1,processData:!1,data:t,success:function(e){var t=JSON.parse(e);fileURL=t.url.split(".png")[0],fileURL&&($("li.facebook a").attr("href","https://facebook.com/dialog/feed?app_id=593692017438309&name="+n+"&redirect_uri="+window.location.href+"&link=http://zikoko.com/be-like-share/?img="+fileURL),$("li.twitter a").attr("href","https://twitter.com/intent/tweet/?text="+n+"&url=http://zikoko.com/be-like-share/?img="+fileURL+"&via=zikokomag&related=zikokomag"))},error:function(e){console.log(e)}})},"image/png"):console.log("no"),!1})});