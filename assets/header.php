<?php
// Get the base name of the current PHP file
$current_page = basename($_SERVER['PHP_SELF']);

// Initialize variables for page-specific information
$background_image = '';
$page_title = '';
$page_description = '';

// Set page-specific information based on the current page
switch ($current_page) {
    case 'index.php':
        $background_image = './assets/images/hero.jpg';
        $page_title = 'Welcome To Our Homepage';
        $page_description = 'This is a fantastic place for your homepage description.';
        break;
    case 'ai-solutions.php':
        $background_image = '../assets/images/ai.jpg';
        $page_title = 'AI Solutions';
        $page_description = 'Explore our cutting-edge AI solutions.';
        break;
    case 'website-dev.php':
        $background_image = '../assets/images/hero.jpg';
        $page_title = 'Website Development';
        $page_description = 'Discover our expert website development services.';
        break;
    case 'about-us.php':
        $background_image = '../assets/images/hero.jpg';
        $page_title = 'About Us';
        $page_description = 'Learn more about our company and mission.';
        break;
    case 'seo.php':
        $background_image = '../assets/images/hero.jpg';
        $page_title = 'SEO';
        $page_description = 'SEO stuff.';
        break;
    case 'marketing.php':
        $background_image = '../assets/images/hero.jpg';
        $page_title = 'Marketing And Advertising';
        $page_description = 'Marketing and advertising stuff.';
        break;
    case 'software-dev.php':
        $background_image = '../assets/images/hero.jpg';
        $page_title = 'Software Development';
        $page_description = 'Software development stuff';
        break;
    // Add more cases for other pages if needed
    default:
        // Default values if the current page doesn't match any case
        $background_image = '../assets/images/hero.jpg'; // Default background image
        $page_title = 'Page Title';
        $page_description = 'Page Description';
}

// Set the path to the style.css file
if ($current_page == 'index.php') {
    $style = "./assets/css/style.css";
} else {
    $style = "../assets/css/style.css";
}

// Include meta-fun.php for meta tags
if ($current_page == 'index.php') {
    include "./assets/meta-fun.php";
} else {
    include "../assets/meta-fun.php";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $meta_title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="<?php echo $style; ?>" rel="stylesheet">
    <style>
      /* Your CSS styles here */
      .hero-section {
         background-image: url('<?php echo $background_image; ?>');
      }
    </style>

</head>
<body>
