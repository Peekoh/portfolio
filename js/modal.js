$(document).ready(function () {
            $('#modal').hide();
            $('#modal-img').hide();
            var isOpen = false;
            //AJAX/JSON REQUEST
            $.ajax({
                beforeSend: function (xhr) {
                    if (xhr.overrideMimeType) {
                        xhr.overrideMimeType("application/json");
                    }
                }
            });

            function loadJSON() {
                $.getJSON('data/description.json')
                    .done(function (response) {
                        data = response;
                    }).fail(function () {});
            };
            loadJSON();

            function emptyList() {
                $('#modal-list').empty();
                $('#modal-img').attr('src', '');
            }

            function closeModal() {
                isOpen = false;
                $('#modal').fadeOut(100);
                $('#modal-overlay').fadeToggle();
                $('#modal-img').fadeToggle();
                setTimeout(emptyList, 120);
            }

            function openModal() {
                isOpen = true;
                $('#modal').css('z-index', '1000');
                $('#modal').fadeIn(900);
                $('#modal-overlay').fadeToggle();
                $('#modal-img').fadeIn(2000);

            }

            function loadModal(e) {
                console.log(e);
                e.preventDefault();
                var project = this.id;
                $('#modal-title').html(data[project].title);
                $('#modal-content').html(data[project].description);
                $('#modal-link').attr("href", data[project].href);
                for (i = 0; i < data[project].skills.length; i++) {
                    $('#modal-list').append("<li>" + data[project].skills[i] + "</li>");
                }
                $('#modal-img').attr('src', data[project].src);
                openModal();
            }

            //MODAL EVENTS
            $('#projects').on('click', '.desc', loadModal);
            $('#modal').on('click', '#close', closeModal);
            document.addEventListener('keydown', function (e) {
                    if (e.keyCode == 27 && isOpen === true) {
                        closeModal();
                    }
                })
            })