(function($) { // Begin jQuery
  $(function() { // DOM ready
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      $('nav ul').slideToggle();
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function() {
      this.classList.toggle('active');
    });
  }); // end DOM ready
})(jQuery); // end jQuery




function sendMessage(id, email, name, image){
  console.log({id, email, name, image})
  Swal.fire({
  title: 'Email catre '+email+':',
  input: 'textarea',
  inputAttributes: {
    autocapitalize: 'off'
  },
  showCancelButton: true,
  confirmButtonText: 'trimite',
  showLoaderOnConfirm: true,
  preConfirm: (login) => {
    $.ajax({
                url: "handle.php",
              type: "POST",
              data: {id:id,name: name, email: email, message: login},
              success: function() {  
              console.log("err")
        },
     error: function(err) {   
    // Fail message
        console.log(err)
     
      },
           });
  },
  allowOutsideClick: () => !Swal.isLoading()
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
  icon: 'success',
  title: 'Mesaj trimis cu succes!',
  footer: '<a href="https://sitebrain-technologies.web.app">Why do I have this issue?</a>'
}).then(() => {
  window.location.href = "index.php";
})
  }
})
}