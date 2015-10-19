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



var answerPoll = function(answer, pollKey, postID, question) {

	var thisPoll = $('.pcblock__poll[data-pollkey="'+pollKey+'"]');
	var thisAnswer = $('.pcblock__poll__answer[data-pollanswer="'+answer+'"]');

	var cookieTitle = pollKey+'-'+postID;


	if ( !$.cookie(cookieTitle) && !thisPoll.hasClass('disabled-poll') ) {


	$.ajax({
       type: "POST",
       url: ajaxurl,
       data: {
       		action: "add_poll_answer",
			post_id: postID,
			poll_key: pollKey,
			answer: answer
       },  
       success: function(msg){

       		console.log(msg);

       		var updatedVoteCount = msg.substring(0, msg.length - 1);

       		console.log(updatedVoteCount);

       		
       		// Show the poll answers

			thisPoll.find('.pollResults').addClass("pollResults-showing");
       		thisAnswer.addClass("poll-answer--picked");

       		thisPoll.addClass("disabled-poll");

       		thisPoll.find('.pollResults__placeholder').hide();
       		thisPoll.find('.pollResults__real').show();

            thisAnswer.find('.pollResults__real').html(updatedVoteCount);

            // Log answer as cookie
            
            $.cookie(cookieTitle, answer, { expires: 120, path: '/' });

    
            // Show sharing
            showSharing(question, answer, pollKey);
            



       },
       error: function(error) {
       		console.log(error);
       }

  	}); // end ajax


	} // end if no cookie

	return false;
}





