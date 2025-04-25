<?php

  function build_menu_link( $link, $caption, $current, $compare = NULL )
  {
    if( is_null( $compare ))
    {
      $parts = explode( '/', $link );
      $highlight = in_array( array_pop( $parts ), $current );
    }
    else
    {
      $highlight = in_array( $compare, $current );
    }

    return '<a href="' . $link . '"' . ( $highlight ? ' class="current"' : '' ) . '>' . $caption . '</a>';
  }

  $titles = array();
  $descriptions = array();

  $titles['home'] = "Yannic Gräser – UX- und UI-Designer aus Hannover";
  $descriptions['home'] = "Yannic Gräser arbeitet als UX- und UI-Designer in Hannover. Sein Schwerpunkt liegt auf der Konzeption und dem Design von Apps und Webseiten.";

  $titles['projects'] = "Yannic Gräser – Projektübersicht";
  $descriptions['projects'] = "Informieren Sie sich über verschiedene Projekte an denen Yannic Gräser gearbeitet hat.";

  $titles['work'] = "Yannic Gräser – Arbeiten";
  $descriptions['work'] = "Erhalten Sie einen Einblick in Yannic Gräsers Arbeiten.";

  $titles['contact'] = "Yannic Gräser – Kontakt";
  $descriptions['contact'] = "Kontaktieren Sie Yannic Gräser.";

  $titles['imprint'] = "Yannic Gräser – Impressum";
  $descriptions['imprint'] = "Das Impressum der Seite yannicgraeser.de.";

  $titles['von-rot-und-dem-is'] = "Yannic Gräser – Projekt: Von Rot und dem I.S.";
  $descriptions['von-rot-und-dem-is'] = "Digitale Aufbereitung einer Assoziationskette aus 30 zusammenhängenden Begriffen.";

  $titles['fokus-blindenstock'] = "Yannic Gräser – Projekt: Fokus – Der digitale Blindenstock";
  $descriptions['fokus-blindenstock'] = "Fokus nutzt aktuelle Technologien und Datenaustausch um den Alltag von Blinden um ein vielfaches angenehmer zu gestalten.";

  $titles['bachelorthesis'] = "Yannic Gräser – Bachelorthesis";
  $descriptions['bachelorthesis'] = "Yannic Gräsers Bachelorthesis: Konzeption und Design einer zeitgemäßen und nutzerorientierten App für die Nutzung des öffentlichen Personennahverkehrs.";

  $titles['email-form'] = "Yannic Gräser – Vielen Dank für Ihre Nachricht";
  $descriptions['email-form'] = "Ihre Nachricht wurde gesendet.";

  $title = $titles[$page];
  $description = $descriptions[$page];

?>
<!DOCTYPE html>
<html lang="de" class="no-js" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

    <title> <?=$title;?> </title>

    <meta name="description" content="<?=$description;?> ">
    <meta property="og:image" content="https://yannicgraeser.de/assets/img/yannic_facebook_preview.jpg">

    <link rel="stylesheet" type="text/css" href="/assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/jquery.fancybox.css">
    <link rel="shortcut icon" href="/favicon.ico"/>
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">

    <script>(function(h){h.className = h.className.replace('no-js', 'js')})(document.documentElement)</script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-47514482-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-47514482-1');
    </script>

  </head>
  <body id="<?=$page;?>">

        <header>
          <nav>
            <?=build_menu_link( '/', '
              <svg xmlns="http://www.w3.org/2000/svg" width="26" height="42">
                <path d="M20.574 4.302L3.19 16.068 0 18.228l2.877 2.563 18.9 16.842.004-.004L26 41.379V16.208l-4.38 2.97-.16 10.149L9.74 18.865 25.434 8.241l-.002-.004.567-.335V.595L20.572 4.3l.002.002z" fill="#000" fill-rule="evenodd"/>
              </svg>
            ', $path );?>
            <a href="/"><h1>Yannic Gräser</h1></a>
            <ul>
              <li><?=build_menu_link( '/projekte', 'Projekte',   $path );?></li>
              <li><?=build_menu_link( '/arbeiten', 'Arbeiten',   $path );?></li>
              <li><?=build_menu_link( '/kontakt', 'Kontakt',   $path );?></li>
            </ul>
          </nav>
        </header>

<main>
        <?=$content;?>
</main>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
    <script src="/assets/js/jquery.fancybox.js" defer></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js" defer></script>
    <script src="/assets/js/masonry.pkgd.min.js" defer></script>
    <script src="/assets/js/init.js" defer></script>

</body>
</html>
