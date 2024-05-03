<?php

$meta_title = '';


if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    $meta_title = 'Premier Marketing Service';
} elseif (basename($_SERVER['PHP_SELF']) == 'ai-solutions.php') {
    $meta_title = 'AI Solutions';
} elseif (basename($_SERVER['PHP_SELF']) == 'website-dev.php') {
    $meta_title = 'Website Development';
} elseif (basename($_SERVER['PHP_SELF']) == 'about-us.php') {
    $meta_title = 'About Us';
} elseif (basename($_SERVER['PHP_SELF']) == 'seo.php') {
    $meta_title = 'SEO';
} elseif (basename($_SERVER['PHP_SELF']) == 'software-dev.php') {
    $meta_title = 'Software Development';
}
?>