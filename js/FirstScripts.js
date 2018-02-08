// My function show one text paragraph more or less when the button is clicked.
//Also the text in the button changes depending on if the hidden content is visible or not
			
$(document).ready( function() {
	

	var showing=false;
	$("#photoButton").click(function(){

		showing = !showing;
		if(showing){
			document.getElementById('myPhoto').style.display = 'block';
			$("#photoButton").text("Yak, hide it!");
		}else{
			document.getElementById('myPhoto').style.display = 'none';
			$("#photoButton").text("Who's there?");
		};
	});

});



function opencontacts() {
   						alert("MY CONTACT DETAILS <BR> PHONE NUMBER<BR>EMAIL");
   						}



