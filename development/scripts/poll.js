/*


	ZIKOKO POLLS!


*/

var showSharing = function(question, answer, pollKey) {

      var thisURL = window.location.href;

      var thisPoll = $('.pcblock__poll[data-pollkey="'+pollKey+'"]');
      var shareText = 'I answered ' + answer + '! '+ question;


      var facebookLink = 'https://facebook.com/dialog/feed?app_id=593692017438309&link='+thisURL+'?utm_source=fb%26utm_campaign=zkk_share&name='+shareText+'&redirect_uri=http://zikoko.com';

      var twitterLink = 'http://twitter.com/share?url='+thisURL+'&text='+shareText+'&hashtags=zikokopoll&via=zikokomag';


      thisPoll.find('.share-poll-result').show();

      thisPoll.find('li#share-fb').children('a').href = facebookLink;
      thisPoll.find('li#share-tw').children('a').attr('href', twitterLink);
}


var answerPoll = function(l,o,a,e) { 
	var s=$('.pcblock__poll[data-pollkey="'+o+'"]'),
		r=s.find('.pcblock__poll__answer[data-pollanswer="'+l+'"]'),
		i=o+"-"+a;

		return $.cookie(i)||s.hasClass("disabled-poll")|| $.ajax({
			type:"POST",
			url:ajaxurl,
			data:{
				action:"add_poll_answer",
				post_id:a,
				poll_key:o,
				answer:l
			},success: function(a) { 
				
				var t=a.substring(0,a.length-1);

				console.log(t),
				s.find(".pollResults").addClass("pollResults-showing"),
				r.addClass("poll-answer--picked"),
				s.addClass("disabled-poll"),
				s.find(".pollResults__placeholder").hide(),
				s.find(".pollResults__real").show(),
				r.find(".pollResults__real").html(t),
				$.cookie(i,l,{expires:120,path:"/"}),
				showSharing(e,l,o)

			},error: function(l) { 
				console.log(l)
			}
		}),!1
};




