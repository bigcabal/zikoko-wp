jQuery(document).ready(function(e){var o={how_nigerian_are_you:{title:"How Nigerian Are You?",totalItems:60,resultTitleBefore:"You are",resultTitleAfter:"Nigerian",shareTextBefore:"I'm",shareTextAfter:"Nigerian",bands:[{n:21,description:"In fact, are you sure you’re Nigerian? We would need to see your birth certificate, before we make our conclusions.",image:"http://4.bp.blogspot.com/-raqFC-ZnJYc/TaLuJZJupHI/AAAAAAAANbI/L63hjVH0V94/s320/nigerian-girl-with-flag.gif"},{n:40,description:"You’re a patriot and you love your country, but you’re not going to randomly sing 'Arise o compatriots'.",image:"https://media.today.ng/news/wp-content/uploads/2015/09/nigerian-flag.jpg"},{n:56,description:"You’re the Nigerian everyone wishes they were. You’re steady, passionate, and proud to be a Nigerian. You know the Nigerian dream is real because you’re living it every day.",image:"http://www.africanglobe.net/wp-content/uploads/2014/04/Nigerians-Are-Cowards-2.jpg"},{n:61,description:"You are Nigerian through and through and you’ll fight anyone who says otherwise. You get really excited when someone tells you 'You’re being very Nigerian right now.'",image:"https://s-media-cache-ak0.pinimg.com/736x/36/dd/36/36dd363efe8f22e36045e064fc204341.jpg"}]},how_ajepako_are_you:{title:"How Ajepako Are You?",totalItems:77,resultTitleBefore:"You are",resultTitleAfter:"Ajepako",shareTextBefore:"I'm",shareTextAfter:"Ajepako",bands:[{n:21,description:"Let’s get this straight. You cannot sit with the cool kids. You haven’t been through the struggle. You’re still tush and your sensibilities are untouched. I can’t even look at you now. Your folks probably gave you a hug and a kiss before sending you off to school. Ugh!",image:"http://zikoko.com/wp-content/uploads/2015/11/25-Ajepako.jpg"},{n:41,description:"You are one leg in one leg out. You can handle yourself with the rest of these Ajebotas but that doesn’t mean that you cannot hold your own with the TenTen and Suwe players of Nigeria.",image:"http://zikoko.com/wp-content/uploads/2015/11/50-Ajepako.jpg"},{n:61,description:"Well what can we say? You’re one of the movers and shakers in the Ajepako movement. Answer me this: Have you perfected the art of entering a moving bus through any opening (door or window, driver's side inclusive) or hopping off a slowing down danfo bus without ever crash-landing?",image:"http://zikoko.com/wp-content/uploads/2015/11/75-Ajepako.jpg"},{n:78,description:"Baddo! There’s a special place for you. You have been through the struggle. You’re so pako that the first time you saw a pair of NIKE shoes you wondered why the owner had to paint some Yoruba girl's name on it. High five?",image:"http://zikoko.com/wp-content/uploads/2015/11/100-Ajepako.jpg"}]},how_nigerian_are_your_parents:{title:"How Nigerian Are Your Parents?",totalItems:70,resultTitleBefore:"Your Parents are",resultTitleAfter:"Nigerian",shareTextBefore:"My Parents are",shareTextAfter:"Nigerian",bands:[{n:13,description:"Are you sure they’re even Nigerian? We need to know please.",image:"http://zikoko.com/wp-content/uploads/2016/01/Unacceptable-1.gif"},{n:26,description:"Stop lying and retake the quiz jare.",image:"http://zikoko.com/wp-content/uploads/2016/01/whyyoulyin1.png"},{n:39,description:"You want to form half caste abi? My friend, take the quiz one more time!",image:"http://zikoko.com/wp-content/uploads/2016/01/single-to-stupor-1.jpg"},{n:52,description:"Your parents define true Nigerian parenthood and have put you through all the experiences a Nigerian child should have. We’re so proud of them.",image:"http://zikoko.com/wp-content/uploads/2016/01/maxresdefault-2.jpg"},{n:71,description:"Your parents are the real MVP! We’re so proud of them.",image:"http://zikoko.com/wp-content/uploads/2016/01/kanye-clap.gif"}]},how_nigerian_is_your_vocabulary:{title:"How Nigerian is Your Vocabulary?",totalItems:70,resultTitleBefore:"Your Vocabulary is",resultTitleAfter:"Nigerian",shareTextBefore:"My Vocabulary is",shareTextAfter:"Nigerian",bands:[{n:15,description:"International exposure ko, student visa ni. My friend, retake this quiz and tell the truth.",image:"http://zikoko.com/wp-content/uploads/2016/01/0-14-Your-vocabulary-is-20-Nigerian.jpg"},{n:29,description:"Not even close. Your international exposure is fast catching up to our vocabulary. LMAO! Na so. When you get back to a Nigerian airport you can pick up your Nigerian vocabulary there.",image:"http://zikoko.com/wp-content/uploads/2016/01/15-28-Your-vocabulary-is-40-Nigerian.jpg"},{n:43,description:"Don’t you think you should do better? Haha! I kid, you’re almost there.",image:"http://zikoko.com/wp-content/uploads/2016/01/29-42-Your-vocabulary-is-60-Nigerian.jpg"},{n:57,description:"Your vocabulary has some international exposure. By international, we mean African countries.",image:"http://zikoko.com/wp-content/uploads/2016/01/43-56-Your-vocabulary-is-80-Nigerian.jpg"},{n:71,description:"Omo naija ni e oh, swagger!",image:"http://zikoko.com/wp-content/uploads/2016/01/57-70-Your-vocabulary-is-100-Nigerian.jpg"}]}};e(".quiz-checklist--item").on("click",function(){e(this).children("input").is(":checked")?e(this).addClass("quiz-checklist--item__checked"):e(this).removeClass("quiz-checklist--item__checked")}),e(".quiz-checklist--submit").on("click",function(){var t={};e("div").hasClass("quiz-how-nigerian-are-you")?t=o.how_nigerian_are_you:e("div").hasClass("quiz-how-ajepako-are-you")?t=o.how_ajepako_are_you:e("div").hasClass("quiz-how-nigerian-are-your-parents")?t=o.how_nigerian_are_your_parents:e("div").hasClass("quiz-how-nigerian-is-your-vocabulary")&&(t=o.how_nigerian_is_your_vocabulary);var i,a,r=t.title,n=t.totalItems,s=window.location.href,u=e('input[name="checklist"]:checked').length,c="You checked off "+u+" out of "+n+" on this list!",l=u/n*100,l=Math.round(l),h=t.resultTitleBefore+" "+l+"% "+t.resultTitleAfter+"!",p=t.shareTextBefore+" "+l+"%25 "+t.shareTextAfter+"! "+r;if(0===u)e(".quiz-checklist").append('<div class="quiz-checklist--error-message">You must check at least one option.</div>');else{for(var d=0;d<t.bands.length;d++)if(u<t.bands[d].n){i=t.bands[d].description,a=t.bands[d].image;break}e(".quiz-checklist--submit").hide(),e(".quiz-checklist--results-container").show(),e("#quiz-checklist--ajax-area").html('<p class="quiz-checklist--result-count">'+c+'</p><p class="quiz-checklist--result-title">'+h+'</p><p class="quiz-checklist--result-description">'+i+'</p><img src="'+a+'" alt="" class="quiz-checklist--result-img"><div class="quiz-checklist--share-container"><p>Share your results</p><div id="wpvq-share-buttons"><a target="_blank" href="https://facebook.com/dialog/feed?app_id=593692017438309&link='+s+"?utm_source=fb%26utm_campaign=zkk_share&name="+p+'&redirect_uri=http://zikoko.com" class="wpvq-facebook-share-button wpvq-facebook-yesscript"><div class="wpvq-social-facebook wpvq-social-button"><i class="wpvq-social-icon"><i class="fa fa-facebook"></i></i><div class="wpvq-social-slide"><p>Facebook</p></div></div></a><a href="http://twitter.com/share?url='+s+"&text="+p+'&hashtags=zikokoquiz&via=zikokomag" target="_blank" class="wpvq-js-loop wpvq-twitter-share-popup"><div class="wpvq-social-twitter wpvq-social-button"><i class="wpvq-social-icon"><i class="fa fa-twitter"></i></i><div class="wpvq-social-slide"><p>Twitter</p></div></div></a></div></div><div class="wpvq-play-again-area" style="display: block;"><a href="'+s+'"><button>↺ &nbsp; PLAY AGAIN !</button></a></div>'),e("html, body").animate({scrollTop:e(".quiz-checklist--results-container").offset().top},500)}return!1})});