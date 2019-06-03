$(document).ready(function () {
  $('#form').submit(function (e) {
    e.preventDefault();
    var form = $(this).serialize();
    console.log(form);
    $.ajax({
      type: "POST",
      url: "process_contact.php",
      data: form,
      success: function (response) {
        var response = JSON.parse(response);
        if (response === "Failure!") {
          $('#msg').html("Please Fill out the form!");
        } else {
          $('#msg').html("The horde thanks you " + response['firstname'] + " " + response['lastname'] + "!");
          $('#form')[0].reset();
        }
        if (response['gold'] > 0) {
          $('#msg').append("<br>Donation:" + response['gold'] + " Gold");
        }
      },
      error: function (error) {
        alert('Something went wrong!');
      }

    });
  });
});