$(document).ready(function(){
    $("p").click(function(){
        $.post("myparsefile.php", 
            { 
            	post_query: "select * from name"

            },	
        	function(data) {
        	   $('#result').html(data);
        });
    });
});

