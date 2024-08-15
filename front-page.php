<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-image.jpg');">
    <div class="hero-content fade-in">
        <h1 class="">Dylan Luke <br> Photography</h1>
        <p>Photography, Retouching and Editing</p>
        <button class="hero-button">Contact me</button>
    </div>
    </section>  

    <!-- About Section -->
    <section class="about">
        <div class="about-content">
            <div class="about-text">
                <h2>About</h2>
                <p>Photographer based in Johannesburg, specialising in capturing the essence of life's most memorable moments. From weddings to corporate events, I bring a unique perspective to every shot.</p>
                <button class="hero-button">Learn More</button>
            </div>
            <div class="about-image fade-in-on-scroll">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-image.jpg" alt="About Image">
            </div>
        </div>
    </section>


    <!-- Spacer Section -->
    <section class="spacer" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/hero-image.jpg');"></section>


   <!-- Services Section -->
<section class="services">
    <h2>Services</h2>
    <div class="services-content">
        <!-- Service Item 1 -->
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/headshots.jpg" alt="Wedding Photography">
            <h3>Headshots</h3>
            <p>Starting at R400 per hour, between 4-5 subjects an hour can be done. R300 per additional hour.</p>
        </div>
        <!-- Service Item 2 -->
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/events.jpg" alt="Portrait Photography">
            <h3>Events</h3>
            <p>Starting at R2500 for 4 hours. Unlimited photos. Reach out for a custom quote.</p>
        </div>
        <!-- Service Item 3 -->
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/realestate.jpg" alt="Event Photography">
            <h3>Real estate</h3>
            <p>Includes accommodation shoots, starts at R550 for 1 hour, roughly one medium sized building/home.</p>
        </div>
    </div>
    <div class="services-button fade-in-on-scroll">
        <button class="hero-button">Get a free quote</button>
    </div>
</section>


<!-- Contact Section -->
<section class="contact">
    <h2>Contact Us</h2>
    <p>We would love to hear from you! Reach out to us for bookings and inquiries.</p>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        
        <input type="submit" value="Send">
    </form>
</section>

</main>

<?php get_footer(); ?>
