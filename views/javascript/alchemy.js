var Alchemy = (function($){

	sendArticleToAlchemy = function(link)
	{
		console.log(link);
		$.ajax({
			type :'get',
			data:{
				articleLink:link
			},
			url:'/alchemy.php',
			datatype: 'json',
			success:function(data)
			{
				console.log(data);
				alert('inputted url was correct');
			},

		});
	}
	init = function()
	{
		var articleLink = $("#articleLink").val();
		$('#submit').on('click', function(){
			sendArticleToAlchemy(articleLink);
		});
	}
}(jQuery));
