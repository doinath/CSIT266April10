<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PA(R)KYU</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet'  href='main.css'>
    <!-- <script src='main.js'></script> -->
</head>
<body>

    <header class="header">
        <img src="./imgo.jpg" class="imgMargin">
        <h1><b>  PA(R)KYU</b></h1>
    </header>

    <div class="navigation">
        <ul>
            <li><a href="#home">HOME</a></li>
            <li><a href="#aboutus">ABOUT US</a></li>
            <li><a href="#contact">CONTACT US</a></li>
            <li><button><a href="register.php">REGISTER NEW USER</a></button><br> </li>
        </ul>
    </div>

    <main class="content">
        <section id="home">
            <h2>Welcome to PA(R)KYU</h2>
            <p>PA(R)KYU is a forward-thinking company dedicated to providing exceptional services in various fields. We aim to innovate and create meaningful experiences for our clients and partners. Whether you're looking for cutting-edge solutions or simply want to explore more, you're in the right place!</p>
        </section>

        <section id="aboutus">
            <h2>About Us</h2>
            <p>At PA(R)KYU, we are a team of passionate individuals driven by creativity and innovation. Our company specializes in providing top-notch services in technology, design, and consulting. We value collaboration, trust, and quality above all else.</p>
            <p>Our expertise spans various industries, and we pride ourselves on delivering tailor-made solutions that meet our clients' unique needs.</p>
        </section>

        <section id="contact">
            <h2>Contact Us</h2>
            <p>If you have any questions, comments, or would like to collaborate with us, don't hesitate to reach out! We’d love to hear from you and explore ways we can work together.</p>
            <form action="#" method="post">
                <label for="name">Your Name:</label><br>
                <input type="text" id="name" name="name"><br><br>
    
                <label for="email">Your Email:</label><br>
                <input type="email" id="email" name="email"><br><br>
    
                <label for="message">Your Message:</label><br>
                <textarea id="message" name="message" rows="4" cols="50"></textarea><br><br>
    
                <input type="submit" value="Send Message">
            </form>
        </section>

    </main>


    <footer class="footer">
            <p><b>NATHANAEL JEDD DEL CASTILLO | BSCS - 2</b></p>

    </footer>
</body>
</html>