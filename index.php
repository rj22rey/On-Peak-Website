<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body>
    <main>
        <section id="hero">
            <div class="image-placeholder">
                <iframe id="hero-image" src="<?php echo get_template_directory_uri(); ?>/images/heroImage.html" frameborder="0" style="border: none; width: 100%; height: 100%;"></iframe>
            </div>
            <div class="text-content" style="margin-top: -1px;">
                <h1>Welcome to OnPeak Consulting</h1>
                <h2>Empowering your business to reach new heights.</h2>
            </div>
        </section>
        <header>
            <nav>
                <ul>
                    <li><a href="#hero" onclick="scrollToSection('hero')">Home</a></li>
                    <li><a href="#about" onclick="scrollToSection('about')">About</a></li>
                    <li><a href="#services" onclick="scrollToSection('services')">Services</a></li>
                    <li><a href="#contact" onclick="scrollToSection('contact')">Contact</a></li>
                </ul>
            </nav>
        </header>
        <section id="about">
            <div class="image-placeholder">
                <iframe src="<?php echo get_template_directory_uri(); ?>/images/aboutImage.html" frameborder="0" style="border: none; width: 100%; height: 100%;"></iframe>
            </div>
            <div class="text-content">
                <h2>About Us</h2>
                <p>On Peak consulting is a small consulting firm based out of the rocky mountain region. Created by founders J and R Reynolds, we pride ourselves on implementing technical solutions and design to any business. Have more questions? Ask our personalized chatbot in the lower corner!</p>
            </div>
        </section>
        <section id="services">
            <div class="image-placeholder">
                <iframe src="<?php echo get_template_directory_uri(); ?>/images/servicesImage.html" frameborder="0" style="border: none; width: 100%; height: 100%;"></iframe>
            </div>
            <div class="text-content">
                <h2>Our Services</h2>
                <p>We pride ourselves on providing technical services for any business need. Read some of our testimonials here:</p>
                <div class="testimonials">
                    <div class="testimonial">
                        <p>"OnPeak Consulting provided us with exceptional service. Our business processes have greatly improved!"</p>
                        <p>- Blue Pan Pizza (Denver, CO)</p>
                    </div>
                    <div class="testimonial">
                        <p>"The team was professional and efficient. We highly recommend their services!"</p>
                        <p>- Getting Graphic (Centennial, CO)</p>
                    </div>
                    <div class="testimonial">
                        <p>"Their expertise in technical analysis helped us make informed decisions."</p>
                        <p>- Sally Dog Co. (Centennial, CO)</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="text-content">
                <h2>Contact Us</h2>
                <p>Get in touch with us to discuss your business needs</p>
                <form id="contact-form" method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                    <input type="hidden" name="action" value="contact_form">
                    <p>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </p>
                    <p>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </p>
                    <p>
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" required></textarea>
                    </p>
                    <p>
                        <button type="submit">Send</button>
                    </p>
                </form>
            </div>
            <div class="image-placeholder">
                <iframe src="<?php echo get_template_directory_uri(); ?>/images/contactImage.html" frameborder="0" style="border: none; width: 100%; height: 100%;"></iframe>
            </div>
        </section>
        <footer>
            &copy; 2024 OnPeak Consulting. All rights reserved.
        </footer>
    </main>
    <script>
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    </script>
    <?php wp_footer(); ?>
</body>
</html>

