//Sticky Header
window.onscroll = function () {
    stickyNav();
}

/* Fade in Title*/
$(document).ready(function () {
    $('.title.hidden').fadeIn(1000).removeClass('hidden');
    $('#cardbtn.hidden').fadeIn(2000).removeClass('hidden');
    $('.sub.hidden').fadeIn(1000).removeClass('hidden');
    $('#cardpic.hidden').fadeIn(1000).removeClass('hidden');
});

/*Stick Nav*/
var nav = document.getElementById("nav");
var sticky = nav.offsetTop;
//var scrollPos = $(this).scrollTop();
function stickyNav() {
    if (window.pageYOffset >= sticky) {
        nav.classList.add("sticky");
    } else {
        nav.classList.remove("sticky");
    }
}

/* Scroll Smooth */
$(function () {
    $(".navitem").on('click', function (event) {
        //Stops page without href
        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 1000, function () {
                window.location.hash = hash;
            });
        }
    })
});


//AJAX FORM
$(document).ready(function () {
    $("#contact").submit(function (e) {
        e.preventDefault();
        var form = $('#contact').serialize();
        $.ajax({
            type: "POST",
            url: 'contact.php',
            data: form,
            success: function (response) {
                $('#contact')[0].reset();
                if (response === "true") { 
                    $('#feedback').html("Thanks!");
                } else if (response === "false") {
                    $('#feedback').html("Please fill out the form!");
                } else {
                    $('#feedback').html("Something went wrong!");
                }
            },
            error: function () {
                $('#feedback').html("Something went wrong!");
                $('#contact')[0].reset();
            }
        });
    });
});
//svg check
/* var path=document.querySelector('path');
var length=path.getTotalLength(); */