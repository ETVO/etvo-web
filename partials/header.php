<!DOCTYPE html>
<html lang="en">

<?php

$href = '';

$request_uri = $_SERVER['REQUEST_URI'];
$currentpage = str_replace(HOME_DIR, '', $request_uri);
if (!($currentpage == "/" || $currentpage == "/index.php" || $currentpage == "/index" || $currentpage == "")) {
    $href = '/' . HOME_DIR;
}

$logo_link = $href . '#';

$menu_options = array(
    array(
        'name' => 'Services',
        'link' => $href . '#services'
    ),
    array(
        'name' => 'Contact',
        'link' => $href . '#contact'
    ),
    array(
        'name' => 'Portfolio',
        'link' => $href . '#portfolio'
    ),
    // array(
    //     'name' => 'Blog',
    //     'link' => '/blog/'
    // ),
);
// href="https://github.com/ETVO" class="bi-github" title="GitHub" target="_blank"></a>
// href="https://www.linkedin.com/in/estevaoprolim/" class="bi-linkedin"

$socials = array(
    array(
        'title' => 'GitHub',
        'link' => 'https://github.com/ETVO',
        'icon' => 'github'
    ),
    array(
        'title' => 'LinkedIn',
        'link' => 'https://www.linkedin.com/in/estevaoprolim/',
        'icon' => 'linkedin'
    ),
);

if (!isset($page_title))
    $page_title = 'ETVO';


// $privacidade_link = '/politica-privacidade.php';

// $GA_TRACKING_ID = 'G-JXHF9X3TYJ';

?>

<head>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js-eu1.hs-scripts.com/139517787.js"></script>
    <!-- End of HubSpot Embed Code -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include dirname(__FILE__) . '/meta-tags.php' ?>

    <link rel="shortcut icon" href="/<?= HOME_DIR; ?>assets/img/favicon.svg" type="image/x-icon">

    <link rel="stylesheet" href="/<?= HOME_DIR; ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="/<?= HOME_DIR; ?>assets/css/main.css">
    <link rel="stylesheet" href="/<?= HOME_DIR; ?>assets/fonts/bootstrap-icons/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>


<body>

    <header id="header">
        <nav class="navbar navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $logo_link; ?>">
                    <img src="/<?= HOME_DIR; ?>assets/img/etvo-desc.svg" alt="etvo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php foreach ($menu_options as $option) :
                            $link = $option['link'];
                            $name = $option['name'];
                        ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo $link; ?>"><?php echo $name; ?></a>
                            </li>
                        <?php endforeach; ?>
                        <li class="social ms-0 ms-md-3 mt-2 mt-md-0">
                            <?php foreach ($socials as $social) : ?>
                                <a href="<?= $social['link']; ?>" class="bi-<?= $social['icon']; ?>" title="<?= $social['title']; ?>" target="_blank"></a>
                            <?php endforeach; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>