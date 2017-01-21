$( document ).ready(function(){
	$('p').click(function(){
		$.get("process.php",
			function(data){
        	   $('#result').html(data); 

		 });
	});
    
});