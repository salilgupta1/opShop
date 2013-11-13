var OpShop = (function($){

	var analyzeArticle = function(link)
	{
		$('#loader').fadeIn('slow');
		$.getJSON('OpShopDriver.php',{link:link},function(data){
			console.log(data);
			$('#loader').hide();
			$('.basic-info').fadeIn('slow');
			traverse(data);
		});
	},
	init = function()
	{
		$('#submit').click(function(){
			var articleLink = $("#articleLink").val();
			if(articleLink === '')
				alert('error fill you need to input a url of an article');
			analyzeArticle(articleLink);
			return false;
		});
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
