<?php
if (filter_has_var(INPUT_POST, 'submit')) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $title = htmlspecialchars($_POST['title']);
    $message = htmlspecialchars($_POST['message']);

    if (!empty($email) && !empty($name) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {

        } else {
            $toEmail = 'contact@damianrussing.nl';
            $subject = $title;
            $body = '
					<h4> Name </h4><p>' . $name . '</p>
					<h4> Email </h4><p>' . $email . '</p>
					<h4> Message </h4><p>' . $message . '</p>
				';

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

            $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

            if (mail($toEmail, $subject, $body, $headers)) {
                header("Location: index.php?mailsent");
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Damian Russing</title>
    <link rel="icon" href="assets/icon.png">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/typed.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
<header>
    <nav>
        <div id="normal">
            <ul id="top">
                <li><a href="#about">About me</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#project-text">Projects</a></li>
                <li><a href="#footer">Contact</a></li>
                <li class="logo"><a href="#Banner"><img src="assets/img/logo.png" alt="img"></a></li>
                <li class="social overflow"><a href="#"><i class="fab fa-stack-overflow"></i></a></li>
                <li class="social instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="social twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="social github"><a href="#"><i class="fab fa-github"></i></a></li>
            </ul>
        </div>
        <div id="extend">
            <ul id="top2">
                <li><a href="#about">About me</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#project-text">Projects</a></li>
                <li><a href="#footer">Contact</a></li>
                <li class="logo"><a href="#Banner"><img src="assets/img/logo2.png" alt="img"></a></li>
                <li class="social overflow"><a href="#"><i class="fab fa-stack-overflow"></i></a></li>
                <li class="social instagram"><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="social twitter"><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="social github"><a href="#"><i class="fab fa-github"></i></a></li>
            </ul>
        </div>
    </nav>
</header>
<main>
    <div id="Banner">
        <div id="background1"></div>
        <div id="cover1"></div>
        <p id="BannerText">Hi, I'm Damian!</p>
        <div class="text-body">
            <span id="typed"></span>
        </div>

    </div>

    <div class="about" id="about">
        <div class="textbox">
            <h1>About me</h1>
            <div class="text">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae ad quibusdam totam. Nobis recusandae
                est cum tempora qui nam repellendus. Expedita nam voluptatum itaque nisi sequi eveniet odit neque
                ratione repellendus explicabo sit, laborum vel non facere. Voluptatem, voluptatum labore tempore
                veritatis aliquam adipisci eaque consectetur dolorem totam necessitatibus reiciendis voluptas
                soluta maxime, aspernatur neque libero, dolor impedit ea quis cupiditate? Officiis veritatis nemo
                possimus assumenda facere repellat provident vitae quam illum iste. A, sit incidunt culpa,
                similique numquam enim non maxime vitae molestias neque quod quisquam, nesciunt eum. Minima,
                ratione mollitia sunt tenetur recusandae doloremque, laudantium eius excepturi quis ex iusto dolor
                sapiente, beatae maxime maiores perferendis animi? Et architecto harum asperiores eligendi ipsa in
                doloremque, possimus nesciunt. Aliquid.
            </div>
            <div class="img">
                <div class="lightcover"></div>
            </div>

        </div>

    </div>
    <div id="experience">
        <div id="background2"></div>
        <div id="cover2"></div>
        <h1>Experience</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis
            officiis eum neque nesciunt aspernatur possimus mollitia dignissimos, nostrum dolorum nam.</p>
        <div class="flex-container">
            <div class="container box1">
                <i class="fab fa-html5"></i>
                <h2>HTML5</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum nisl et tortor porta dictum.
                    Cras ultricies quam fringilla nunc bibendum pulvinar. Etiam id ex sagittis, dignissim ligula a,
                    malesuada nisl.</p>
            </div>
            <div class="container box2">
                <i class="fab fa-css3-alt"></i>
                <h2>CSS3</h2>
                <p>Nulla lobortis aliquet sapien eu elementum. Quisque ullamcorper mauris sed vehicula efficitur. Proin
                    vitae dapibus quam. Ut vitae eros imperdiet, luctus quam quis, pulvinar tellus. Nunc non nisl vel
                    nisl lobortis posuere.</p>
            </div>
            <div class="container box3">
                <i class="fab fa-js-square"></i>
                <h2>Javascript</h2>
                <p>Donec et nulla nec diam malesuada egestas congue vel eros. Quisque tincidunt malesuada augue, non
                    consequat dolor fermentum eu.</p>
            </div>
            <div class="container box4">
                <i class="fab fa-python"></i>
                <h2>Python</h2>
                <p>Aliquam erat volutpat. Suspendisse elit ante, sollicitudin non rutrum at, maximus ut elit. Etiam
                    volutpat cursus turpis, non sodales sapien pretium in. </p>
            </div>
            <div class="container box5">
                <i class="fab fa-sass"></i>
                <h2>Sass/SCSS</h2>
                <p>Aliquam pellentesque tincidunt orci, consequat pretium arcu aliquam sed. Maecenas et suscipit quam.
                    Maecenas a scelerisque lectus, eget tincidunt felis. Duis volutpat, ex vitae viverra ornare, metus
                    arcu dignissim metus, et tristique velit elit facilisis nunc.</p>
            </div>
            <div class="container box6">
                <i class="fas fa-database"></i>
                <h2>MySQL</h2>
                <p>Sed sollicitudin sed nibh nec condimentum. Maecenas nec augue gravida, malesuada purus congue,
                    dapibus lorem. Curabitur accumsan id arcu et semper. Morbi ut laoreet massa, eget maximus
                    turpis. </p>
            </div>
            <div class="container box7">
                <i class="fas fa-hashtag"></i>
                <h2>C#</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus accumsan nisl, vitae
                    pellentesque augue tristique nec. Aenean bibendum risus vitae dapibus vestibulum. Aliquam tempor eu
                    tortor non suscipit.</p>
            </div>
            <div class="container box8">
                <i class="fab fa-php"></i>
                <h2>PHP</h2>
                <p>Sed sed lorem id elit egestas eleifend eget id tellus. Aliquam sit amet mauris placerat, sollicitudin
                    orci a, pharetra lectus. Donec facilisis dignissim commodo. Vivamus gravida nulla a pulvinar
                    eleifend. </p>
            </div>
        </div>
    </div>
    <div id="project-text">
        <div class="textbox">
            <h1>Projects</h1>
            <p>Sed ultrices sapien eros, vitae semper ligula gravida non. Suspendisse ac ultrices elit. Interdum et
                malesuada fames ac ante ipsum primis in faucibus. Nulla sed justo quis erat varius ultricies eu nec
                ipsum. Pellentesque a tellus ut eros commodo aliquet. Proin. </p>


            <div class="project-container project1">
                <div class="img"></div>
                <div class="icons">
                    <i class="fab fa-html5"></i>
                    <i class="fab fa-css3-alt"></i>
                    <i class="fab fa-js-square"></i>
                    <i class="fab fa-sass"></i>
                    <i class="fab fa-php"></i>
                </div>
                <h1>Edu-Chain</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut faucibus accumsan nisl, vitae
                    pellentesque augue tristique nec. Aenean bibendum risus vitae dapibus vestibulum. Aliquam tempor eu
                    tortor non suscipit. Sed sed lorem id elit egestas eleifend eget id tellus. Aliquam sit amet mauris
                    placerat, sollicitudin orci a, pharetra lectus. Donec facilisis dignissim commodo. Vivamus gravida
                    nulla a pulvinar eleifend. Sed ultrices sapien eros, vitae semper ligula gravida non. </P>
            </div>
        </div>
    </div>
    <div class="projects">
        <div class="background3"></div>
        <div class="cover"></div>


        <div class="project-container project2">
            <div class="img"></div>
            <div class="icons">
                <i class="fab fa-html5"></i>
                <i class="fab fa-css3-alt"></i>
                <i class="fab fa-js-square"></i>
                <i class="fab fa-sass"></i>
                <i class="fab fa-php"></i>
                <i class="fas fa-database"></i>
            </div>
            <h1>CRM Systeem</h1>
            <p>

                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum lacus dolor, placerat eget commodo
                quis, interdum nec ex. Nam viverra velit at tortor varius pellentesque. Donec sed aliquam lectus, vel
                tincidunt dolor. Quisque pellentesque orci sit amet augue ultricies, eu placerat nisl congue. Donec non
                enim tempor libero venenatis porttitor. </p>
        </div>
    </div>
</main>
<footer>
    <div id="footer">

        <div class="container2">
            <form id="contact" method="post" action="">
                <h3>Contact me!</h3>
                <fieldset>
                    <input name="name" placeholder="Naam" type="text" value="">
                </fieldset>
                <fieldset>
                    <input name="email" placeholder="E-mail Adres" type="email" value="">
                </fieldset>
                <fieldset>
                    <input name="title" placeholder="Onderwerp" type="text" value="">
                </fieldset>
                <fieldset>
                    <textarea name="message" placeholder="Type je bericht hier...."></textarea>
                </fieldset>
                <fieldset>
                    <button name="submit" type="submit" id="contact-submit">Submit</button>
                </fieldset>
            </form>
        </div>
        <a href="#Banner">
            <div class="scrollup"><i class="fas fa-angle-up"></i></div>
        </a>
        <div class="stripe"></div>
        <div class="info">
            <h3>Contact info</h3>
            <div class="phone"><i class="fas fa-mobile-alt"></i> &nbsp;06-46480205</div>
            <div class="mail"><i class="fas fa-envelope"></i>&nbsp; damianrussing@ziggo.nl</div>
        </div>
        <div class="social-info">
            <h3>Social</h3>
            <div class="overflow"><a href="#"><i class="fab fa-stack-overflow"></i></a></div>
            <div class="instagram"><a href="#"><i class="fab fa-instagram"></i></a></div>
            <div class="twitter"><a href="#"><i class="fab fa-twitter"></i></a></div>
            <div class="github"><a href="#"><i class="fab fa-github"></i></a></div>
        </div>
        <div class="lower-footer">
            <p>© <?php echo date("Y"); ?> Damian Russing, All Rights Reserved</p>
        </div>
    </div>
</footer>


<script src="assets/js/script.js"></script>
</body>
</html>