<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MURATTILY</title>
    <link rel="shortcut icon" href="./images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- First frontal section -->
    <section class="frontal-section">
        <img class="logo" src="./images/logo.png" alt="The academy's logo">
    </section>
    <!-- Main section "Courses" -->
    <main class="courses" id="courses">
        <div class="courses-heading">
            <h1 class="welcome-title">Welcome to Murattil Quran Academy</h1>
            <!-- About the academy -->
            <p class="academy-details">
                <strong>Murattil Quran Academy</strong>
                is an online Arab Egyptian Academy that teaches Quran, Islamic studies, and the Arabic language for all ages and all levels. We are based in Egypt and our tutors are highly qualified Egyptian teachers.
            </p>
        </div>
        <div>
            <h2 class="section-title">Our Courses</h2>
            <!-- All the available courses -->
            <div class="available-courses">
                <!-- The Quran program -->
                <div class="course">
                    <div class="img-container">
                        <img src="./images/quran.jpg" alt="Quran course image">
                    </div>
                    <div class="course-details">
                        <h3 class="course-title">QURAN CLASSES:</h3>
                        <ul class="program-content">
                            <li>Memorizing the holy Quran.</li>
                            <li>Reviewing the holy Quran.</li>
                            <li>How to recite the holy Quran properly.</li>
                        </ul>
                    </div>
                </div>

                <div class="course">
                    <div class="img-container">
                        <img src="./images/tajweed.jpg" alt="tajweed course image">
                    </div>
                    <div class="course-details">
                        <h3 class="course-title">TAJWEED CLASSES:</h3>
                        <ul class="program-content">
                            <li>Tajweed rules.</li>
                            <li>Reading the holy Quran.</li>
                        </ul>
                    </div>
                </div>
                <div class="course">
                    <div class="img-container">
                        <img src="./images/islamic-studies.jpg" alt="islamic studies course image">
                    </div>
                    <div class="course-details">
                        <h3 class="course-title">ISLAMIC STUDIES CLASSES:</h3>
                        <ul class="program-content">
                            <li>Islamic creed.</li>
                            <li>Seerah(The biography of the prophet PBUH).</li>
                            <li>How to pray.</li>
                            <li>Understanding the Quran.</li>
                            <li>Hadeeth(Sayings&Teachings of the prophet PBUH).</li>
                            <li>Fiqh(Jurisprudence).</li>
                        </ul>
                    </div>
                </div>
                <div class="course">
                    <div class="img-container">
                        <img src="./images/arabic.jpg" alt="Arabic course image">
                    </div>
                    <div class="course-details">
                        <h3 class="course-title">Arabic Language CLASSES:</h3>
                        <ul class="program-content">
                            <li>Reading Arabic.</li>
                            <li>Modern Standard Arabic.</li>
                            <li>Arabic grammar.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Features section -->
    <section class="features" id="features">
        <h2 class="section-title">Murattil's Features:</h2>
        <ul class="features-details">
            <li>
                No matter where you are around the world,
                you can join us and enjoy our professional
                and beneficial online classes.
            </li>
            <li>
                We aim to create a professional learning
                environment and make the learning process
                interesting and enjoyable.
            </li>
            <li>
                We have male teachers to teach male adult
                students and female teachers to teach female
                adult students. Children can be taught by male
                or female teachers.
            </li>
            <li>
                Our schedules are flexible as we deliver 24/7 classes
                so that you can choose the times and duration of the
                classes that suit your personal schedule.
            </li>
            <li>
                We grant free certificates for students who finish
                certain levels in all programs.
            </li>
        </ul>
        <h3 class="discount">
            <strong>Get your free trial now, and get up to 50% OFF all plans!</strong>
        </h3>
        <!-- <a href="https://wa.me/+201284806788" target="_blank" class="booking">
            BOOK NOW!
        </a> -->

    </section>
    <form class="contact" action="backend.php" method="POST">
        <input type="text" name="name" placeholder="Your name" id="name" required autocomplete="on">
        <input type="email" name="email" placeholder="Your email" id="email" required autocomplete="on">
        <input type="tel" name="phone" placeholder="WhatsApp number" id="number" required autocomplete="on">
        <input type="text" name="country" placeholder="Your country" id="country" required autocomplete="on">
        <div class="gender-options">
            <input type="radio" name="gender" id="male" value="male" required>
            <label for="male" class="gender-label">Male</label>
            <input type="radio" name="gender" id="female" value="female" required>
            <label for="female" class="gender-label">Female</label>
        </div>
        <textarea name="message" id="message" placeholder="Drop a message"></textarea>
        <button type="submit" class="submit-btn">Send</button>
    </form>
    <!-- The footer "social media links" -->
    <footer>
        <div class="logo-footer">
            <img src="./images/logo.png" alt="Academy logo">
        </div>
        <div class="social-media-links">
            <a class="icon" href="https://www.facebook.com/share/NE5R162akXd58xY9/?mibextid=qi2Omg" target="_blank">
                <i class="fa-brands fa-facebook"></i>
                <span>Facebook</span>
            </a>
            <a class="icon" href="https://www.instagram.com/murattilquranacademy?utm_source=qr&igsh=OXJramgyeDJ5dGtw" target="_blank">
                <i class="fa-brands fa-instagram"></i>
                <span>Instagram</span>
            </a>
            <a class="icon" href="https://youtube.com/@murattilquranacademy?si=pf3YQN6nYi8LyqOx" target="_blank">
                <i class="fa-brands fa-youtube"></i>
                <span>Youtube</span>
            </a>
            <a class="icon" href="https://wa.me/+201284806788" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
                <span>WhatsApp</span>
            </a>
            <a class="icon" href="https://t.me/murattilquranacademy" target="_blank">
                <i class="fa-brands fa-telegram"></i>
                <span>Telegram</span>
            </a>
        </div>
    </footer>
</body>

</html>
