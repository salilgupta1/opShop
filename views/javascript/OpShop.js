var OpShop = (function($){

	var analyzeArticle = function(link)
	{
		$('#loader').fadeIn('slow');
		$.getJSON('OpShopDriver.php',{link:link},function(data){
			console.log(data);
			$('#loader').hide();

			var foundQuotes = populateCards(data);
			if(foundQuotes)
				$('#congyQuotes').fadeIn('slow');
			else
				$('#fail').fadeIn('slow');
		});
	},
	init = function()
	{
		$('#submit').click(function(){
			$('#fail').hide();
			$('#congyQuotes').hide();
			var articleLink = $("#articleLink").val();
			if(articleLink === '')
				alert('error fill you need to input a url of an article');
			else
				analyzeArticle(articleLink);
			return false;
		});
	},
	populateCards = function(data){
		if(data.length === 0)
			return false;

		$('.thumbnail').each(function(index){
			var type = $(this).data('type');
			if(data[type] !== undefined){
				var name = data[type]['name'];
				var url = data[type]['url'];
				var pos = data[type]['pos'];
				if(pos === 'S'){
					pos = 'Senator';
				}
				else if(pos ==='H'){
					pos = 'House of Rep.';
				}
				else {
					pos = 'Other';
				}
				var party = data[type]['party'];
				var state = data[type]['state'];
				var title = data[type]['title'];
				var quote;
				if(data[type]['quote']==='none'){
					quote = 'none';
				}
				else{
					quote = data[type]['quote']['quotation'];
				}
				$(this).children('.name').children('h3').text(name);
				$(this).children('.position').children('h4').text(pos+ " ("+party+" - "+state+")");
				$(this).children('.quotation').children('p').text(quote);
				$(this).children('a').attr('href',url);
				$(this).children('a').text(title);
			}
		});
		return true;
	};
	return {
		//public functions
		init: function()
		{
			return init();
		}
	};
}(jQuery));
