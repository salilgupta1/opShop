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
			//$('.basic-info').fadeIn('slow');
			//traverse(data);*/
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
			}
		});
		return true;
	},
	traverse = function(data)
	{
		for(var el in data)
		{
			if(el === 'title')
			{
				$('.'+el+'>div').empty();
				$('.'+el+ '>div').append(data[el]==''?'Not Identified':data[el]);
			}
/*			else if (el === 'author')
			{
				$('.'+el+'>div').empty();
				$('.'+el+ '>div').append(data[el]==''?'Not Identified':data[el]);
			}*/
			else
			{
				var array = recurTraverse(data[el],[]);
				$('.'+el+'>div').empty();
				$('.'+el+'> div').append(array.join('<br>'));
			}
		}
	},
	recurTraverse = function(element,arr)
	{
		for(var el in element)
		{
			if(typeof element[el] === 'object')
				recurTraverse(element[el],arr);
			else
				arr.push("<span>"+element[el]+"</span>");
		}
		return arr;
	};
	return {
		//public functions
		init: function()
		{
			return init();
		}
	};
}(jQuery));
