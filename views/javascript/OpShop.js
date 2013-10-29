var OpShop = (function($){

	analyzeArticle = function(link)
	{
		/*$.ajax({
			type :"POST",
			data:{
				link : link,
				test : 'Salil'
			},
			url:'OpShopDriver.php',
			datatype: 'json',
			success : function(data)
			{
				console.log(data);
				alert(data);
			},
			error : function(xhr,status,error)
			{
				alert("Status: " + textStatus); alert("Error: " + errorThrown);
				console.log(xhr);
				console.log(status);
				console.log(error);
			}
		});*/

		$.getJSON('OpShopDriver.php',{link:link},function(data){
			console.log(data);
			$('.basic-info').show();
			traverse(data);
		});
	}
	init = function()
	{
		$('.basic-info').hide();
		$('#submit').click(function(){
			var articleLink = $("#articleLink").val();
			if(articleLink === '')
				alert('error fill you need to input a url of an article');
			analyzeArticle(articleLink);
			return false;
		});
	}
	traverse = function(data)
	{
		for(var el in data)
		{
			if(el === 'title')
				$('.'+el+ '>div').append(data[el]==''?'Not Identified':data[el]);
			else if (el === 'author')
				$('.'+el+ '>div').append(data[el]==''?'Not Identified':data[el]);
			else
			{
				var array = recurTraverse(data[el],[]);
				$('.'+el+'> div').append(array.join(','));
			}
		}
	}
	recurTraverse = function(element,arr)
	{
		for(var el in element)
		{
			if(typeof element[el] === 'object')
				recurTraverse(element[el],arr);
			else
			{
				arr.push("<span>"+element[el]+"</span>");
			}
		}
		return arr;
	}
	return {
		//public functions
		init: function()
		{
			return init();
		}
	};
}(jQuery));
