/*


	ZIKOKO POLLS!


*/


var answerPoll = function(answer, pollKey, postID) {

	console.log(answer +' & '+ pollKey)



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


       		updatedVoteCount = msg.substring(0, msg.length - 1);


       		var thisPoll = $('.pcblock__poll[data-pollkey="'+pollKey+'"]');

       		var thisAnswer = $('.pcblock__poll__answer[data-pollanswer="'+answer+'"]');


       		// Show the poll answers

       		thisPoll.addClass('test');

			thisPoll.find('.pollResults').addClass("pollResults-showing");
       		thisAnswer.addClass("poll-answer--picked");

       		thisPoll.find('.pollResults__placeholder').hide();
       		thisPoll.find('.pollResults__real').show

            thisAnswer.find('.pollResults__real').html(updatedVoteCo);



   //          // Log answer as cookie
   //          $.cookie(cookieTitle, answerText, { expires: 120, path: '/' });
   //          console.log($.cookie(cookieTitle));


   //          // Show sharing
   //          showSharing(answerText);
            



       },
       error: function(error) {
       		console.log(error);
       }

  	}); // end ajax

	return false;
}


