<script>
	$(document).ready(function() {

		// for displaying browse
		var toggle = true;

		$('#browse_nav').on('click', function(){
	        $.get("/browse",function(data){
	            $("#content").empty().html(data);
	        })
		})

		

		$('.page, .pages-nav__item').on('click', function(){
			$('.home-logo').attr('src','img/thumbnail/LOGO1.png');
		});
		
		
		//for genre tag
		$('.checkgenre').on('change', function(){
			// var $boxes = $('input[class=checkgenre]:checked');
			var checkg = $(this).attr('data-checked');
			if(document.getElementById(checkg).checked == true)
			{
				$("<span class='tag'  id='"+ checkg + "-genre" + "' style='display:none'>"+checkg+" </span>").insertBefore('#tag-typer').fadeIn(100);
				// console.log("<span class='tag' style='display:none'><span class='close' id='"+ checkg + "-genre" + "'>&times;</span>"+checkg+" </span>")
			}
			else{
				$('#' + checkg + '-genre' ).fadeOut(100, function(){ $('#' + checkg + '-genre' ).remove(); });
				// console.log('#' + checkg + '-genre');
			}
		});

		  $("#tag-typer").keypress( function(event) {
		    var key = event.which;
		    if (key == 13 || key == 44){
		     event.preventDefault();
		     var tag = $(this).val();
		      if(tag.length > 0){
		        $("<span class='tag' style='display:none'><span class='close'>&times;</span>"+tag+" </span>").insertBefore(this).fadeIn(100);
		        $(this).val("");
		      }
		    }
		  });
		  
		  $("#tags").on("click", ".close", function() {
		    $(this).parent("span").fadeOut(100);
		    console.log(this);
		  });

		  // end of genre tag
	});


</script>