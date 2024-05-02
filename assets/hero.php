<?php
// Determine the page and set background image and content accordingly
$background_image = '';
$page_title = '';
$page_description = '';

if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    $background_image = './assets/images/hero.jpg'; // Path to image for index.php
    $page_title = 'Welcome to Our Homepage';
    $page_description = 'This is a fantastic place for your homepage description.';
} elseif (basename($_SERVER['PHP_SELF']) == 'ai-solutions.php') {
    $background_image = '../assets/images/ai.jpg'; // Path to image for ai-solutions.php
    $page_title = 'AI Solutions';
    $page_description = 'Explore our cutting-edge AI solutions.';
} elseif (basename($_SERVER['PHP_SELF']) == 'website-dev.php') {
    $background_image = '../assets/images/hero.jpg'; // Path to image for website-dev.php
    $page_title = 'Website Development';
    $page_description = 'Discover our expert website development services.';
} elseif (basename($_SERVER['PHP_SELF']) == 'about-us.php') {
    $background_image = '../assets/images/hero.jpg'; // Path to image for about-us.php
    $page_title = 'About Us';
    $page_description = 'Learn more about our company and mission.';
}
?>
<style>
    .hero-section {
        position: relative; /* Make sure the container is positioned */
        background-image: url('<?php echo $background_image; ?>');
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 200px 0;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5); /* Adjust opacity as needed */
    }

    .hero-section h1,
    .hero-section p {
        position: relative; /* Ensure text appears above the overlay */
        z-index: 1; /* Make sure the text is on top of the overlay */
    }

    .hero-section h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
    }

    .hero-section p {
        font-size: 1.25rem;
        margin-bottom: 40px;
    }
</style>


<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1><?php echo $page_title; ?></h1>
        <div class="row">
            <div class="col-12">
                <p><?php echo $page_description; ?></p>
            </div>
        </div>
    </div>
</section>
<!-- Hero end-->
