<?php require 'contact.php';?>
<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dana Hedrick Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/portfolio.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
</head>

<body>

    <header>
        <div id="card">
            <h1 class="title hidden">Hi I'm Dana!</h1>
            <img class="hidden biopic" id="cardpic" src="img/five.png" alt="me">
            <a tabindex="0" id="cardbtn" class="navitem hidden" href="#projects">My Projects</a>
        </div>
        <div id="nav-wrap">
            <div id="nav">
                <a class="navitem" href="#bio">About Me</a>
                <a class="navitem" href="#projects">Projects</a>
                <a class="navitem" href="#contactbox">Contact</a>
            </div>
        </div>

    </header>

    <main>
        <div class="info" id="info">
            <div id="bio">
                <h1>About Me</h1>
                <div class="biotext">
                    <p>Hi! I'm a web development student at Long Beach City College, born and raised in Long Beach,
                        California.
                        Though I was
                        initially interested in design, once I learned more about back-end development and programming,
                        I fell in love
                        with it!
                    </p>
                    <p>I'm constantly striving to learn new technologies and languages: currently I'm
                        exploring Python and C++ and hoping to add back-end frameworks like Laravel and Django to that
                        list.
                    </p>
                    <img class="biopic" src="img/paper-plane.svg" alt="Paper Plane">
                </div>
            </div>
            <div id="projects">
                <h1>Projects</h1>
                <div id="panel">

                    <div><a tabindex="0" id="bowl_shop" class="desc">The Bowl Shop</a>
                        <img src="img/thumbnail/bowl_shop_thumb.png" class="thumbnail" alt="The Bowl Shop">
                    </div>
                    <div><a tabindex="0" id="isolation" class="desc">Isolation</a>
                        <img src="img/thumbnail/isolation_thumb.png" class="thumbnail" alt="Isolation">
                    </div>
                    <div><a tabindex="0" id="js_char" class="desc">Character Generator</a>
                        <img src="img/thumbnail/undead_gen_thumb.png" class="thumbnail" alt="Character Creator">
                    </div>
                    <div><a tabindex="0" id="js_form" class="desc">Sign Up Form</a>
                        <img src="img/thumbnail/js_form_thumb.png" class="thumbnail" alt="Signup Form">
                    </div>
                    <div><a tabindex="0" id="lorem_ipsum" class="desc">Lorem Ipsum</a>
                        <img src="img/thumbnail/lorem_ipsum_thumb.png" class="thumbnail" alt="Lorem Ipsum Generator">
                    </div>
                    <div><a tabindex="0" id="php_form" class="desc">Newsletter Signup</a>
                        <img src="img/thumbnail/contact_form_thumb.png" id="contactForm" class="thumbnail"
                            alt="Contact Form">
                    </div>
                </div>

                <div id='modal'>
                    <div id="modal-left">
                        <h2 id="modal-title"></h2>
                        <div id="modal-content"></div>
                        <h4>Notable Skills:</h4>
                        <ul id="modal-list">
                            <!--li added -->
                        </ul>
                    </div>
                    <div class="modal-right">
                        <img src="" id="modal-img" alt="project">
                        <a href="" target="_blank" id="modal-link">View Project</a>
                        <button type="button" id="close"> x </button>
                    </div>

                </div>
                <div id="modal-overlay"></div>

            </div>
            <div id="contactbox">
                <form name="form" id="contact" action="" method="POST">
                    <h1>Contact Me!</h1>
                    <input type="text" name="name" id="name" class="formitem" placeholder="Name">
                    <input type="email" name="email" id="email" class="formitem" placeholder="Email">
                    <textarea name="message" id="message" class="formitem" rows="5" cols="30"
                        placeholder="What do you want to talk about?"></textarea>
                    <span id='count'></span>
                    <input type="submit" name="submit" id="submit" class="formitem" value="Send">
                </form>
                <div id='feedback'></div>
            </div>
        </div>
    </main>
    <footer>

        <div id="links">
            <a href="https://github.com/Peekoh" class="iconlink"><img src="img/github-logo.svg" class="icon"
                    alt="github"></a>
            <a href="https://www.linkedin.com/in/dana-hedrick/" class="iconlink"><img src="img/linkedin-logo.svg"
                    class="icon" alt="twitter"></a>
            <a href="https://codepen.io/Peekoh/" class="iconlink"><img src="img/codepen-logo.svg" class="icon"
                    alt="codepen"></a>

        </div>
        <div data-share-badge-id="c4fbedc3-1216-4947-88e1-10282e9e0cca"></div>
        <div class="credit">Icons made by <a href="https://www.flaticon.com/authors/agata-kuczminska">Agata
                Kuczminska</a>&<a href="https://www.flaticon.com/authors/freepik">Freepik</a> from www.flaticon.com
        </div>
    </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/modal.js"></script>
</body>

</html>