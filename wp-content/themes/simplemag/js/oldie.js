/*! matchMedia() polyfill - Test a CSS media type/query in JS. Authors & copyright (c) 2012: Scott Jehl, Paul Irish, Nicholas Zakas. Dual MIT/BSD license */
/*! NOTE: If you're already including a window.matchMedia polyfill via Modernizr or otherwise, you don't need this part */
window.matchMedia=window.matchMedia||(function(e,f){var c,a=e.documentElement,b=a.firstElementChild||a.firstChild,d=e.createElement("body"),g=e.createElement("div");g.id="mq-test-1";g.style.cssText="position:absolute;top:-100em";d.style.background="none";d.appendChild(g);return function(h){g.innerHTML='&shy;<style media="'+h+'"> #mq-test-1 { width: 42px; }</style>';a.insertBefore(d,b);c=g.offsetWidth==42;a.removeChild(d);return{matches:c,media:h}}})(document);

/*! Respond.js v1.1.0: min/max-width media query polyfill. (c) Scott Jehl. MIT/GPLv2 Lic. j.mp/respondjs */
(function(e){e.respond={};respond.update=function(){};respond.mediaQueriesSupported=e.matchMedia&&e.matchMedia("only all").matches;if(respond.mediaQueriesSupported){return}var w=e.document,s=w.documentElement,i=[],k=[],q=[],o={},h=30,f=w.getElementsByTagName("head")[0]||s,g=w.getElementsByTagName("base")[0],b=f.getElementsByTagName("link"),d=[],a=function(){var D=b,y=D.length,B=0,A,z,C,x;for(;B<y;B++){A=D[B],z=A.href,C=A.media,x=A.rel&&A.rel.toLowerCase()==="stylesheet";if(!!z&&x&&!o[z]){if(A.styleSheet&&A.styleSheet.rawCssText){m(A.styleSheet.rawCssText,z,C);o[z]=true}else{if((!/^([a-zA-Z:]*\/\/)/.test(z)&&!g)||z.replace(RegExp.$1,"").split("/")[0]===e.location.host){d.push({href:z,media:C})}}}}u()},u=function(){if(d.length){var x=d.shift();n(x.href,function(y){m(y,x.href,x.media);o[x.href]=true;u()})}},m=function(I,x,z){var G=I.match(/@media[^\{]+\{([^\{\}]*\{[^\}\{]*\})+/gi),J=G&&G.length||0,x=x.substring(0,x.lastIndexOf("/")),y=function(K){return K.replace(/(url\()['"]?([^\/\)'"][^:\)'"]+)['"]?(\))/g,"$1"+x+"$2$3")},A=!J&&z,D=0,C,E,F,B,H;if(x.length){x+="/"}if(A){J=1}for(;D<J;D++){C=0;if(A){E=z;k.push(y(I))}else{E=G[D].match(/@media *([^\{]+)\{([\S\s]+?)$/)&&RegExp.$1;k.push(RegExp.$2&&y(RegExp.$2))}B=E.split(",");H=B.length;for(;C<H;C++){F=B[C];i.push({media:F.split("(")[0].match(/(only\s+)?([a-zA-Z]+)\s?/)&&RegExp.$2||"all",rules:k.length-1,hasquery:F.indexOf("(")>-1,minw:F.match(/\(min\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/)&&parseFloat(RegExp.$1)+(RegExp.$2||""),maxw:F.match(/\(max\-width:[\s]*([\s]*[0-9\.]+)(px|em)[\s]*\)/)&&parseFloat(RegExp.$1)+(RegExp.$2||"")})}}j()},l,r,v=function(){var z,A=w.createElement("div"),x=w.body,y=false;A.style.cssText="position:absolute;font-size:1em;width:1em";if(!x){x=y=w.createElement("body");x.style.background="none"}x.appendChild(A);s.insertBefore(x,s.firstChild);z=A.offsetWidth;if(y){s.removeChild(x)}else{x.removeChild(A)}z=p=parseFloat(z);return z},p,j=function(I){var x="clientWidth",B=s[x],H=w.compatMode==="CSS1Compat"&&B||w.body[x]||B,D={},G=b[b.length-1],z=(new Date()).getTime();if(I&&l&&z-l<h){clearTimeout(r);r=setTimeout(j,h);return}else{l=z}for(var E in i){var K=i[E],C=K.minw,J=K.maxw,A=C===null,L=J===null,y="em";if(!!C){C=parseFloat(C)*(C.indexOf(y)>-1?(p||v()):1)}if(!!J){J=parseFloat(J)*(J.indexOf(y)>-1?(p||v()):1)}if(!K.hasquery||(!A||!L)&&(A||H>=C)&&(L||H<=J)){if(!D[K.media]){D[K.media]=[]}D[K.media].push(k[K.rules])}}for(var E in q){if(q[E]&&q[E].parentNode===f){f.removeChild(q[E])}}for(var E in D){var M=w.createElement("style"),F=D[E].join("\n");M.type="text/css";M.media=E;f.insertBefore(M,G.nextSibling);if(M.styleSheet){M.styleSheet.cssText=F}else{M.appendChild(w.createTextNode(F))}q.push(M)}},n=function(x,z){var y=c();if(!y){return}y.open("GET",x,true);y.onreadystatechange=function(){if(y.readyState!=4||y.status!=200&&y.status!=304){return}z(y.responseText)};if(y.readyState==4){return}y.send(null)},c=(function(){var x=false;try{x=new XMLHttpRequest()}catch(y){x=new ActiveXObject("Microsoft.XMLHTTP")}return function(){return x}})();a();respond.update=a;function t(){j(true)}if(e.addEventListener){e.addEventListener("resize",t,false)}else{if(e.attachEvent){e.attachEvent("onresize",t)}}})(this);

/* HTML5 Shiv v3.6.2pre | @afarkas @jdalton @jon_neal @rem | MIT/GPL2 Licensed */
(function(l,f){function m(){var a=e.elements;return"string"==typeof a?a.split(" "):a}function i(a){var b=n[a[o]];b||(b={},h++,a[o]=h,n[h]=b);return b}function p(a,b,c){b||(b=f);if(g)return b.createElement(a);c||(c=i(b));b=c.cache[a]?c.cache[a].cloneNode():r.test(a)?(c.cache[a]=c.createElem(a)).cloneNode():c.createElem(a);return b.canHaveChildren&&!s.test(a)?c.frag.appendChild(b):b}function t(a,b){if(!b.cache)b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag();
a.createElement=function(c){return!e.shivMethods?b.createElem(c):p(c,a,b)};a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/\w+/g,function(a){b.createElem(a);b.frag.createElement(a);return'c("'+a+'")'})+");return n}")(e,b.frag)}function q(a){a||(a=f);var b=i(a);if(e.shivCSS&&!j&&!b.hasCSS){var c,d=a;c=d.createElement("p");d=d.getElementsByTagName("head")[0]||d.documentElement;c.innerHTML="x<style>article,aside,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}</style>";
c=d.insertBefore(c.lastChild,d.firstChild);b.hasCSS=!!c}g||t(a,b);return a}var k=l.html5||{},s=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,r=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,j,o="_html5shiv",h=0,n={},g;(function(){try{var a=f.createElement("a");a.innerHTML="<xyz></xyz>";j="hidden"in a;var b;if(!(b=1==a.childNodes.length)){f.createElement("a");var c=f.createDocumentFragment();b="undefined"==typeof c.cloneNode||
"undefined"==typeof c.createDocumentFragment||"undefined"==typeof c.createElement}g=b}catch(d){g=j=!0}})();var e={elements:k.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup main mark meter nav output progress section summary time video",version:"3.6.2pre",shivCSS:!1!==k.shivCSS,supportsUnknownElements:g,shivMethods:!1!==k.shivMethods,type:"default",shivDocument:q,createElement:p,createDocumentFragment:function(a,b){a||(a=f);if(g)return a.createDocumentFragment();
for(var b=b||i(a),c=b.frag.cloneNode(),d=0,e=m(),h=e.length;d<h;d++)c.createElement(e[d]);return c}};l.html5=e;q(f)})(this,document);

/* HTML5 Canvas for Internet Explorer */
if(!document.createElement("canvas").getContext){(function(){var S=Math;var T=S.round;var P=S.sin;var c=S.cos;var K=S.abs;var b=S.sqrt;var A=10;var L=A/2;function H(){return this.context_||(this.context_=new N(this))}var R=Array.prototype.slice;function d(e,g,h){var Z=R.call(arguments,2);return function(){return e.apply(g,Z.concat(R.call(arguments)))}}var I={init:function(Z){if(/MSIE/.test(navigator.userAgent)&&!window.opera){var e=Z||document;e.createElement("canvas");e.attachEvent("onreadystatechange",d(this.init_,this,e))}},init_:function(g){if(!g.namespaces.g_vml_){g.namespaces.add("g_vml_","urn:schemas-microsoft-com:vml","#default#VML")}if(!g.namespaces.g_o_){g.namespaces.add("g_o_","urn:schemas-microsoft-com:office:office","#default#VML")}if(!g.styleSheets.ex_canvas_){var f=g.createStyleSheet();f.owningElement.id="ex_canvas_";f.cssText="canvas{display:inline-block;overflow:hidden;text-align:left;width:300px;height:150px}g_vml_\\:*{behavior:url(#default#VML)}g_o_\\:*{behavior:url(#default#VML)}"}var e=g.getElementsByTagName("canvas");for(var Z=0;Z<e.length;Z++){this.initElement(e[Z])}},initElement:function(e){if(!e.getContext){e.getContext=H;e.innerHTML="";e.attachEvent("onpropertychange",a);e.attachEvent("onresize",B);var Z=e.attributes;if(Z.width&&Z.width.specified){e.style.width=Z.width.nodeValue+"px"}else{e.width=e.clientWidth}if(Z.height&&Z.height.specified){e.style.height=Z.height.nodeValue+"px"}else{e.height=e.clientHeight}}return e}};function a(f){var Z=f.srcElement;switch(f.propertyName){case"width":Z.style.width=Z.attributes.width.nodeValue+"px";Z.getContext().clearRect();break;case"height":Z.style.height=Z.attributes.height.nodeValue+"px";Z.getContext().clearRect();break}}function B(f){var Z=f.srcElement;if(Z.firstChild){Z.firstChild.style.width=Z.clientWidth+"px";Z.firstChild.style.height=Z.clientHeight+"px"}}I.init();var E=[];for(var W=0;W<16;W++){for(var V=0;V<16;V++){E[W*16+V]=W.toString(16)+V.toString(16)}}function O(){return[[1,0,0],[0,1,0],[0,0,1]]}function D(g,f){var e=O();for(var Z=0;Z<3;Z++){for(var j=0;j<3;j++){var h=0;for(var i=0;i<3;i++){h+=g[Z][i]*f[i][j]}e[Z][j]=h}}return e}function U(e,Z){Z.fillStyle=e.fillStyle;Z.lineCap=e.lineCap;Z.lineJoin=e.lineJoin;Z.lineWidth=e.lineWidth;Z.miterLimit=e.miterLimit;Z.shadowBlur=e.shadowBlur;Z.shadowColor=e.shadowColor;Z.shadowOffsetX=e.shadowOffsetX;Z.shadowOffsetY=e.shadowOffsetY;Z.strokeStyle=e.strokeStyle;Z.globalAlpha=e.globalAlpha;Z.arcScaleX_=e.arcScaleX_;Z.arcScaleY_=e.arcScaleY_;Z.lineScale_=e.lineScale_}function C(e){var h,g=1;e=String(e);if(e.substring(0,3)=="rgb"){var k=e.indexOf("(",3);var Z=e.indexOf(")",k+1);var j=e.substring(k+1,Z).split(",");h="#";for(var f=0;f<3;f++){h+=E[Number(j[f])]}if(j.length==4&&e.substr(3,1)=="a"){g=j[3]}}else{h=e}return{color:h,alpha:g}}function Q(Z){switch(Z){case"butt":return"flat";case"round":return"round";case"square":default:return"square"}}function N(e){this.m_=O();this.mStack_=[];this.aStack_=[];this.currentPath_=[];this.strokeStyle="#000";this.fillStyle="#000";this.lineWidth=1;this.lineJoin="miter";this.lineCap="butt";this.miterLimit=A*1;this.globalAlpha=1;this.canvas=e;var Z=e.ownerDocument.createElement("div");Z.style.width=e.clientWidth+"px";Z.style.height=e.clientHeight+"px";Z.style.overflow="hidden";Z.style.position="absolute";e.appendChild(Z);this.element_=Z;this.arcScaleX_=1;this.arcScaleY_=1;this.lineScale_=1}var J=N.prototype;J.clearRect=function(){this.element_.innerHTML=""};J.beginPath=function(){this.currentPath_=[]};J.moveTo=function(e,Z){var f=this.getCoords_(e,Z);this.currentPath_.push({type:"moveTo",x:f.x,y:f.y});this.currentX_=f.x;this.currentY_=f.y};J.lineTo=function(e,Z){var f=this.getCoords_(e,Z);this.currentPath_.push({type:"lineTo",x:f.x,y:f.y});this.currentX_=f.x;this.currentY_=f.y};J.bezierCurveTo=function(f,e,l,k,j,h){var Z=this.getCoords_(j,h);var i=this.getCoords_(f,e);var g=this.getCoords_(l,k);M(this,i,g,Z)};function M(Z,g,f,e){Z.currentPath_.push({type:"bezierCurveTo",cp1x:g.x,cp1y:g.y,cp2x:f.x,cp2y:f.y,x:e.x,y:e.y});Z.currentX_=e.x;Z.currentY_=e.y}J.quadraticCurveTo=function(j,f,e,Z){var i=this.getCoords_(j,f);var h=this.getCoords_(e,Z);var k={x:this.currentX_+2/3*(i.x-this.currentX_),y:this.currentY_+2/3*(i.y-this.currentY_)};var g={x:k.x+(h.x-this.currentX_)/3,y:k.y+(h.y-this.currentY_)/3};M(this,k,g,h)};J.arc=function(m,k,l,h,e,f){l*=A;var r=f?"at":"wa";var n=m+c(h)*l-L;var q=k+P(h)*l-L;var Z=m+c(e)*l-L;var o=k+P(e)*l-L;if(n==Z&&!f){n+=0.125}var g=this.getCoords_(m,k);var j=this.getCoords_(n,q);var i=this.getCoords_(Z,o);this.currentPath_.push({type:r,x:g.x,y:g.y,radius:l,xStart:j.x,yStart:j.y,xEnd:i.x,yEnd:i.y})};J.rect=function(f,e,Z,g){this.moveTo(f,e);this.lineTo(f+Z,e);this.lineTo(f+Z,e+g);this.lineTo(f,e+g);this.closePath()};J.strokeRect=function(f,e,Z,g){var h=this.currentPath_;this.beginPath();this.moveTo(f,e);this.lineTo(f+Z,e);this.lineTo(f+Z,e+g);this.lineTo(f,e+g);this.closePath();this.stroke();this.currentPath_=h};J.fillRect=function(f,e,Z,g){var h=this.currentPath_;this.beginPath();this.moveTo(f,e);this.lineTo(f+Z,e);this.lineTo(f+Z,e+g);this.lineTo(f,e+g);this.closePath();this.fill();this.currentPath_=h};J.createLinearGradient=function(e,g,Z,f){var h=new X("gradient");h.x0_=e;h.y0_=g;h.x1_=Z;h.y1_=f;return h};J.createRadialGradient=function(g,i,f,e,h,Z){var j=new X("gradientradial");j.x0_=g;j.y0_=i;j.r0_=f;j.x1_=e;j.y1_=h;j.r1_=Z;return j};J.drawImage=function(t,f){var m,k,o,AB,r,p,v,AD;var n=t.runtimeStyle.width;var s=t.runtimeStyle.height;t.runtimeStyle.width="auto";t.runtimeStyle.height="auto";var l=t.width;var z=t.height;t.runtimeStyle.width=n;t.runtimeStyle.height=s;if(arguments.length==3){m=arguments[1];k=arguments[2];r=p=0;v=o=l;AD=AB=z}else{if(arguments.length==5){m=arguments[1];k=arguments[2];o=arguments[3];AB=arguments[4];r=p=0;v=l;AD=z}else{if(arguments.length==9){r=arguments[1];p=arguments[2];v=arguments[3];AD=arguments[4];m=arguments[5];k=arguments[6];o=arguments[7];AB=arguments[8]}else{throw Error("Invalid number of arguments")}}}var AC=this.getCoords_(m,k);var g=v/2;var e=AD/2;var AA=[];var Z=10;var j=10;AA.push(" <g_vml_:group",' coordsize="',A*Z,",",A*j,'"',' coordorigin="0,0"',' style="width:',Z,"px;height:",j,"px;position:absolute;");if(this.m_[0][0]!=1||this.m_[0][1]){var i=[];i.push("M11=",this.m_[0][0],",","M12=",this.m_[1][0],",","M21=",this.m_[0][1],",","M22=",this.m_[1][1],",","Dx=",T(AC.x/A),",","Dy=",T(AC.y/A),"");var y=AC;var x=this.getCoords_(m+o,k);var u=this.getCoords_(m,k+AB);var q=this.getCoords_(m+o,k+AB);y.x=S.max(y.x,x.x,u.x,q.x);y.y=S.max(y.y,x.y,u.y,q.y);AA.push("padding:0 ",T(y.x/A),"px ",T(y.y/A),"px 0;filter:progid:DXImageTransform.Microsoft.Matrix(",i.join(""),", sizingmethod='clip');")}else{AA.push("top:",T(AC.y/A),"px;left:",T(AC.x/A),"px;")}AA.push(' ">','<g_vml_:image src="',t.src,'"',' style="width:',A*o,"px;"," height:",A*AB,'px;"',' cropleft="',r/l,'"',' croptop="',p/z,'"',' cropright="',(l-r-v)/l,'"',' cropbottom="',(z-p-AD)/z,'"'," />","</g_vml_:group>");this.element_.insertAdjacentHTML("BeforeEnd",AA.join(""))};J.stroke=function(AF){var k=[];var l=false;var AQ=C(AF?this.fillStyle:this.strokeStyle);var AB=AQ.color;var AL=AQ.alpha*this.globalAlpha;var g=10;var n=10;k.push("<g_vml_:shape",' filled="',!!AF,'"',' style="position:absolute;width:',g,"px;height:",n,'px;"',' coordorigin="0 0" coordsize="',A*g," ",A*n,'"',' stroked="',!AF,'"',' path="');var m=false;var AP={x:null,y:null};var x={x:null,y:null};for(var AK=0;AK<this.currentPath_.length;AK++){var AJ=this.currentPath_[AK];var AO;switch(AJ.type){case"moveTo":AO=AJ;k.push(" m ",T(AJ.x),",",T(AJ.y));break;case"lineTo":k.push(" l ",T(AJ.x),",",T(AJ.y));break;case"close":k.push(" x ");AJ=null;break;case"bezierCurveTo":k.push(" c ",T(AJ.cp1x),",",T(AJ.cp1y),",",T(AJ.cp2x),",",T(AJ.cp2y),",",T(AJ.x),",",T(AJ.y));break;case"at":case"wa":k.push(" ",AJ.type," ",T(AJ.x-this.arcScaleX_*AJ.radius),",",T(AJ.y-this.arcScaleY_*AJ.radius)," ",T(AJ.x+this.arcScaleX_*AJ.radius),",",T(AJ.y+this.arcScaleY_*AJ.radius)," ",T(AJ.xStart),",",T(AJ.yStart)," ",T(AJ.xEnd),",",T(AJ.yEnd));break}if(AJ){if(AP.x==null||AJ.x<AP.x){AP.x=AJ.x}if(x.x==null||AJ.x>x.x){x.x=AJ.x}if(AP.y==null||AJ.y<AP.y){AP.y=AJ.y}if(x.y==null||AJ.y>x.y){x.y=AJ.y}}}k.push(' ">');if(!AF){var w=this.lineScale_*this.lineWidth;if(w<1){AL*=w}k.push("<g_vml_:stroke",' opacity="',AL,'"',' joinstyle="',this.lineJoin,'"',' miterlimit="',this.miterLimit,'"',' endcap="',Q(this.lineCap),'"',' weight="',w,'px"',' color="',AB,'" />')}else{if(typeof this.fillStyle=="object"){var o=this.fillStyle;var u=0;var AI={x:0,y:0};var AC=0;var s=1;if(o.type_=="gradient"){var r=o.x0_/this.arcScaleX_;var e=o.y0_/this.arcScaleY_;var q=o.x1_/this.arcScaleX_;var AR=o.y1_/this.arcScaleY_;var AN=this.getCoords_(r,e);var AM=this.getCoords_(q,AR);var j=AM.x-AN.x;var h=AM.y-AN.y;u=Math.atan2(j,h)*180/Math.PI;if(u<0){u+=360}if(u<0.000001){u=0}}else{var AN=this.getCoords_(o.x0_,o.y0_);var Z=x.x-AP.x;var f=x.y-AP.y;AI={x:(AN.x-AP.x)/Z,y:(AN.y-AP.y)/f};Z/=this.arcScaleX_*A;f/=this.arcScaleY_*A;var AH=S.max(Z,f);AC=2*o.r0_/AH;s=2*o.r1_/AH-AC}var AA=o.colors_;AA.sort(function(p,i){return p.offset-i.offset});var v=AA.length;var z=AA[0].color;var y=AA[v-1].color;var AE=AA[0].alpha*this.globalAlpha;var AD=AA[v-1].alpha*this.globalAlpha;var AG=[];for(var AK=0;AK<v;AK++){var t=AA[AK];AG.push(t.offset*s+AC+" "+t.color)}k.push('<g_vml_:fill type="',o.type_,'"',' method="none" focus="100%"',' color="',z,'"',' color2="',y,'"',' colors="',AG.join(","),'"',' opacity="',AD,'"',' g_o_:opacity2="',AE,'"',' angle="',u,'"',' focusposition="',AI.x,",",AI.y,'" />')}else{k.push('<g_vml_:fill color="',AB,'" opacity="',AL,'" />')}}k.push("</g_vml_:shape>");this.element_.insertAdjacentHTML("beforeEnd",k.join(""))};J.fill=function(){this.stroke(true)};J.closePath=function(){this.currentPath_.push({type:"close"})};J.getCoords_=function(f,e){var Z=this.m_;return{x:A*(f*Z[0][0]+e*Z[1][0]+Z[2][0])-L,y:A*(f*Z[0][1]+e*Z[1][1]+Z[2][1])-L}};J.save=function(){var Z={};U(this,Z);this.aStack_.push(Z);this.mStack_.push(this.m_);this.m_=D(O(),this.m_)};J.restore=function(){U(this.aStack_.pop(),this);this.m_=this.mStack_.pop()};function G(Z){for(var f=0;f<3;f++){for(var e=0;e<2;e++){if(!isFinite(Z[f][e])||isNaN(Z[f][e])){return false}}}return true}function Y(e,Z,f){if(!G(Z)){return }e.m_=Z;if(f){var g=Z[0][0]*Z[1][1]-Z[0][1]*Z[1][0];e.lineScale_=b(K(g))}}J.translate=function(f,e){var Z=[[1,0,0],[0,1,0],[f,e,1]];Y(this,D(Z,this.m_),false)};J.rotate=function(e){var g=c(e);var f=P(e);var Z=[[g,f,0],[-f,g,0],[0,0,1]];Y(this,D(Z,this.m_),false)};J.scale=function(f,e){this.arcScaleX_*=f;this.arcScaleY_*=e;var Z=[[f,0,0],[0,e,0],[0,0,1]];Y(this,D(Z,this.m_),true)};J.transform=function(h,g,j,i,e,Z){var f=[[h,g,0],[j,i,0],[e,Z,1]];Y(this,D(f,this.m_),true)};J.setTransform=function(h,g,j,i,f,e){var Z=[[h,g,0],[j,i,0],[f,e,1]];Y(this,Z,true)};J.clip=function(){};J.arcTo=function(){};J.createPattern=function(){return new F};function X(Z){this.type_=Z;this.x0_=0;this.y0_=0;this.r0_=0;this.x1_=0;this.y1_=0;this.r1_=0;this.colors_=[]}X.prototype.addColorStop=function(e,Z){Z=C(Z);this.colors_.push({offset:e,color:Z.color,alpha:Z.alpha})};function F(){}G_vmlCanvasManager=I;CanvasRenderingContext2D=N;CanvasGradient=X;CanvasPattern=F})()};
	

jQuery(document).ready(function($) {
		
	/* Gallery */
	var a = $('.custom-gallery .gallery-item:not(:nth-child(4n+1))');
	do $(a.slice(0,3)).wrapAll('<div class="row clearfix" />');   
	while((a = a.slice(3)).length>0)

});