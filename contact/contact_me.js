/*
  Jquery Validation using jqBootstrapValidation
   example is taken from jqBootstrapValidation docs 
  */
var days = [ '', 'Luni', 'Marti', 'Miercuri', 'Joi', 'Vineri', 'Sambata','Duminica'];
var luni = [ 'ian', 'feb', 'mar', 'apr', 'mai', 'iun','iul', 'aug', 'sept', 'oct', 'nov', 'dec'];
var luniMap = { 'ian' : 1, 'feb' : 2, 'mar' : 3, 'apr' : 4, 'mai' : 5, 'iun' : 6,'iul' : 7, 'aug' : 8, 'sept' : 9, 'oct' : 10, 'nov' : 11, 'dec' : 12};


$(function() {

 $("input,textarea").jqBootstrapValidation(
    {
     preventSubmit: true,
     submitError: function($form, event, errors) {
      // something to have when submit produces an error ?
      // Not decided if I need it yet
     },
     submitSuccess: function($form, event) {
      event.preventDefault(); // prevent default submit behaviour
       // get values from FORM
       var name = $("input#name").val();
       var phone = $("input#phone").val();
       var email = $("input#email").val(); 
       var talon = document.getElementById('talon').files[0].name;
       var message = $("textarea#message").val();
        var firstName = name; // For Success/Failure Message
           // Check for white space in name for Success/Fail message
        if (firstName.indexOf(' ') >= 0) {
	   firstName = name.split(' ').slice(0, -1).join(' ');
         }   
         // $.ajax({
         //    type: "POST",
         //    url: "contact/handle.php",
         //    data: {name: name, email: email, phone: phone, talon: talon, message: message},
         //    success: function() {
         //      console.log("OK")
         //      location.reload()
         //    },
         //    statusCode: {
         //        200: function(){
         //                 console.log("200")
         //                 // location.reload()
         //             },
         //        500: function(){
         //                 console.log("500")
         //                 // location.reload()
         //             } 
         //    }
         //  })
           var fd = new FormData();
           var files = $('#talon')[0].files;
           fd.append('file',files[0]);
           fd.append('name',name);
           fd.append('email',email);
           fd.append('phone',phone);
           fd.append('message',message);
           
           var t  = new Date();
            var dayName = days[t.getDay()];
            var luniName = luni[t.getMonth()];
            var day1 = ""+t.getDate()+"";
            if(day1.length === 1){
                day1 = "0"+t.getDate()+"";
            } else {
                day1 = ""+t.getDate()+"";
            }


        //TIME{
                var hour1 = ""+t.getHours()+"";

                if(hour1.length === 1){
                hour1 = "0"+t.getHours()+"";
                } else {
                hour1 = ""+t.getHours()+"";
                }

                var minutes1 = ""+t.getMinutes()+"";
                if(minutes1.length === 1){
                minutes1 = "0"+t.getMinutes()+"";
                } else {
                minutes1 = ""+t.getMinutes()+"";
                }

                var sec1 = ""+t.getSeconds()+"";

                if(sec1.length === 1){
                sec1 = "0"+t.getSeconds()+"";
                } else {
                sec1 = ""+t.getSeconds()+"";
                }


                //GENERIC DATA CONCATENATE
                var ora1 = hour1+minutes1+sec1;
        //}




            var conct_date_time = day1+luniName+t.getFullYear()+ora1;
            fd.append('file_name',conct_date_time);
            fd.append('ora',hour1+":"+minutes1+":"+sec1);
            fd.append('data',day1+"-"+luniName+"-"+t.getFullYear());
            fd.append('status',"new");
          $.ajax({
                url:'contact/db_handle.php',
                type:'post',
                data:fd,
                dataType: 'json',
                contentType: false,
                processData: false,
                success: function() {  
                // Success message
                   console.log("success")
          },
       error: function(err) {
        console.log(err);
       }
                });

	 $.ajax({
                url: "contact/handle.php",
            	type: "POST",
            	data: {name: name, email: email, phone: phone, talon: talon, message: message},
            	success: function() {  
            	// Success message
            	   $('#success').html("<div class='alert alert-success'>");
            	   $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            		.append( "</button>");
            	  $('#success > .alert-success')
            		.append("<strong>Mesajul dumneavoastra a fost trimis cu succces!. </strong>");
 		  $('#success > .alert-success')
 			.append('</div>');
 						    
 		  //clear all fields
 		  $('#contactForm').trigger("reset");
 	      },
 	   error: function(err) {		
 		// Fail message
        console.log(err)
 		 $('#success').html("<div class='alert alert-danger'>");
            	$('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
            	 .append( "</button>");
            	$('#success > .alert-danger').append("<strong>Sorry "+firstName+" it seems that my mail server is not responding...</strong> Could you please email me directly to <a href='mailto:me@example.com?Subject=Message_Me from myprogrammingblog.com'>me@example.com</a> ? Sorry for the inconvenience!");
 	        $('#success > .alert-danger').append('</div>');
 		//clear all fields
 		$('#contactForm').trigger("reset");
 	    },
           });
         },
         filter: function() {
                   return $(this).is(":visible");
         },
       });

      $("a[data-toggle=\"tab\"]").click(function(e) {
                    e.preventDefault();
                    $(this).tab("show");
        });
  });
 

/*When clicking on Full hide fail/success boxes */ 
$('#name').focus(function() {
     $('#success').html('');
  });
