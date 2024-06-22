<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
$postcat = get_the_category($post->ID);
$terms = wp_get_object_terms($post->ID, 'portfolio_category');
// print_r($terms);
$cat_name = '';
if (!empty($terms)) {
  $cat_name = $terms[0]->slug;
}
$cat_slug = '';
if ($cat_name == 'mobile-app-design') {
  $cat_slug = 'mobile-app-design';
} else if ($cat_name == 'web-design') {
  $cat_slug = 'web-design';
} else if ($cat_name == 'branding-design') {
  $cat_slug = 'branding-design';
}
// echo $cat_slug;
?>



<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#ff0075" />
  <meta name="google-site-verification" content="QSsd_as7A5YeXj6Wnn5syhvF4AxkGRZe2SEHtL_uJoI" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-254368187-1"></script>-->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-254368187-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-254368187-1');
  </script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VVF85GJX8M"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-VVF85GJX8M');
  </script>

  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [{
        "@type": "Organization",
        "name": "Creative UI Design LLC",
        "alternateName": "cud, creative ui design, CreativeUIDesign",
        "url": "https://www.creativeuidesign.com",
        "image": "https://creativeuidesign.com/wp-content/uploads/2023/01/cud-logo.webp",
        "email": "info@creativeuidesign.com",
        "telephone": "+1 (717) 343-0778",
        "priceRange": "$",
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.3",
          "reviewCount": "34"
        },
        "address": [{
          "@type": "PostalAddress",
          "streetAddress": "1 Airedale Pl",
          "addressLocality": "Shrewsbury",
          "addressRegion": "PA",
          "postalCode": "17361",
          "addressCountry": "USA"
        }],
        "member": [{
            "@type": "Organization"
          },
          {
            "@type": "Organization"
          }
        ],
        "alumni": [{
            "@type": "Person",
            "name": "Vishal Bhatt"
          },
          {
            "@type": "Person",
            "name": "Narendra Patel"
          }
        ],
        "sameAs": [
          "https://www.linkedin.com/company/creative-ui-design-llc/",
          "https://www.facebook.com/creativeuidesignllc",
          "https://www.instagram.com/creativeuidesignllc/"
        ],
        "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday",
            "Saturday"
          ],
          "opens": "09:00",
          "closes": "18:00"
        },
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Web & Mobile Development Services",
          "itemListElement": [{
              "@type": "OfferCatalog",
              "name": "Mobile App Development",
              "itemListElement": [{
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Flutter App Development"
                }
              }]
            },
            {
              "@type": "OfferCatalog",
              "name": "Web Development",
              "itemListElement": [{
                  "@type": "Offer",
                  "itemOffered": {
                    "@type": "Service",
                    "name": "Website Development"
                  }
                },
                {
                  "@type": "Offer",
                  "itemOffered": {
                    "@type": "Service",
                    "name": "Web App Developement"
                  }
                }
              ]
            },
            {
              "@type": "OfferCatalog",
              "name": "UI/UX Design",
              "itemListElement": [{
                  "@type": "Offer",
                  "itemOffered": {
                    "@type": "Service",
                    "name": "Web Design"
                  }
                },
                {
                  "@type": "Offer",
                  "itemOffered": {
                    "@type": "Service",
                    "name": "Mobile App Design"
                  }
                }
              ]
            },
            {
              "@type": "OfferCatalog",
              "name": "Marketing Services"
            }
          ]
        }
      }]
    }
  </script>
</head>

<body <?php body_class(); ?>>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
    </symbol>
    <symbol id="cud-screen" viewBox="0 0 32 32">
      <path opacity="0.3" d="M8.107 2.667h15.787c3.004 0 5.44 2.436 5.44 5.44v10.013c0 3.004-2.436 5.44-5.44 5.44h-15.787c-3.004 0-5.44-2.436-5.44-5.44v-10.013c0-3.004 2.436-5.44 5.44-5.44z"></path>
      <path d="M14.427 23.56h3.133v4.827h-3.133v-4.827z"></path>
      <path d="M21.773 29.333h-11.547c-0.552 0-1-0.448-1-1s0.448-1 1-1v0h11.547c0.552 0 1 0.448 1 1s-0.448 1-1 1v0z"></path>
      <path d="M2.667 17.787v0.293c-0 0.008-0 0.017-0 0.027 0 2.998 2.419 5.431 5.411 5.453h15.842c2.995-0.023 5.413-2.455 5.413-5.453 0-0.009-0-0.019-0-0.028v0.001-0.293z"></path>
    </symbol>
    <symbol id="cud-moon" viewBox="0 0 32 32">
      <path d="M15.12 14.573c-0.648-1.3-1.027-2.831-1.027-4.45 0-1.365 0.269-2.668 0.758-3.857l-0.025 0.068c0.073-0.184 0.116-0.397 0.116-0.621 0-0.95-0.77-1.72-1.72-1.72-0.234 0-0.457 0.047-0.661 0.131l0.011-0.004c-1.544 0.599-2.871 1.429-4.011 2.463l0.011-0.009c-2.434 2.262-3.951 5.48-3.951 9.053 0 5.072 3.058 9.43 7.431 11.329l0.080 0.031c-0.267-1.024-0.423-2.199-0.427-3.411v-0.003c-0-0.037-0.001-0.082-0.001-0.126 0-3.419 1.296-6.536 3.424-8.885l-0.010 0.011z"></path>
      <path opacity="0.3" d="M24.413 25.547c0.986-0.737 1.831-1.59 2.536-2.553l0.024-0.034c0.212-0.284 0.34-0.643 0.34-1.031 0-0.957-0.776-1.733-1.733-1.733-0.045 0-0.089 0.002-0.133 0.005l0.006-0c-0.4 0.057-0.862 0.089-1.331 0.089-3.957 0-7.374-2.311-8.976-5.656l-0.026-0.060c-2.118 2.338-3.414 5.455-3.414 8.874 0 0.044 0 0.089 0.001 0.133l-0-0.007c0.004 1.214 0.159 2.39 0.448 3.512l-0.022-0.099c1.443 0.641 3.127 1.014 4.897 1.014 2.783 0 5.351-0.922 7.414-2.477l-0.031 0.023z"></path>
    </symbol>
    <symbol id="cud-sun" viewBox="0 0 32 32">
      <path d="M15.413 16.093c0 2.938 1.901 5.432 4.54 6.32l0.047 0.014c2.16-1.359 3.574-3.73 3.574-6.431 0-2.617-1.328-4.925-3.347-6.285l-0.027-0.017c-2.789 0.839-4.787 3.384-4.787 6.396 0 0.001 0 0.003 0 0.004v-0z"></path>
      <path opacity="0.3" d="M13.587 16.093c0-0 0-0.001 0-0.001 0-3.171 1.74-5.935 4.318-7.39l0.042-0.022c-0.583-0.169-1.253-0.267-1.945-0.267-0.001 0-0.001 0-0.002 0h0c-4.19 0-7.587 3.397-7.587 7.587s3.397 7.587 7.587 7.587v0c0.617-0.003 1.214-0.081 1.785-0.224l-0.051 0.011c-2.498-1.504-4.143-4.199-4.147-7.279v-0z"></path>
      <path d="M16 6.267c-0.001 0-0.001 0-0.002 0-0.529 0-0.962-0.41-0.998-0.93l-0-0.003v-1.64c0-0.552 0.448-1 1-1s1 0.448 1 1v0 1.64c-0.036 0.523-0.469 0.933-0.998 0.933-0.001 0-0.002 0-0.002 0h0z"></path>
      <path d="M16 29.333c-0.549-0.007-0.993-0.451-1-0.999v-1.601c0-0.552 0.448-1 1-1s1 0.448 1 1v0 1.573c0 0.004 0 0.009 0 0.013 0 0.555-0.446 1.006-0.999 1.013h-0.001z"></path>
      <path d="M8.413 9.413c-0.001 0-0.003 0-0.005 0-0.275 0-0.523-0.112-0.702-0.293l-1.12-1.12c-0.259-0.186-0.425-0.486-0.425-0.825 0-0.56 0.454-1.013 1.013-1.013 0.339 0 0.639 0.167 0.823 0.422l0.002 0.003 1.107 1.12c0.181 0.181 0.292 0.431 0.292 0.707s-0.112 0.526-0.292 0.707v0c-0.177 0.179-0.422 0.291-0.693 0.293h-0z"></path>
      <path d="M24.693 25.707c-0.275-0.006-0.523-0.117-0.707-0.294l0 0-1.107-1.12c-0.196-0.183-0.318-0.443-0.318-0.732 0-0.552 0.448-1 1-1 0.289 0 0.549 0.122 0.731 0.318l0.001 0.001 1.12 1.107c0.178 0.184 0.288 0.436 0.288 0.713s-0.11 0.529-0.289 0.714l0-0c-0.187 0.179-0.44 0.291-0.72 0.293h-0z"></path>
      <path d="M5.333 17h-1.64c-0.552 0-1-0.448-1-1s0.448-1 1-1v0h1.64c0.552 0 1 0.448 1 1s-0.448 1-1 1v0z"></path>
      <path d="M28.307 17h-1.573c-0.552 0-1-0.448-1-1s0.448-1 1-1v0h1.573c0.552 0 1 0.448 1 1s-0.448 1-1 1v0z"></path>
      <path d="M7.307 25.707c-0.28-0.003-0.533-0.114-0.72-0.294l0 0c-0.178-0.184-0.288-0.436-0.288-0.713s0.11-0.529 0.289-0.714l-0 0 1.12-1.107c0.183-0.196 0.443-0.318 0.732-0.318 0.552 0 1 0.448 1 1 0 0.289-0.122 0.549-0.318 0.731l-0.001 0.001-1.12 1.12c-0.18 0.174-0.423 0.284-0.691 0.293l-0.002 0z"></path>
      <path d="M23.587 9.413c-0.001 0-0.003 0-0.005 0-0.275 0-0.523-0.112-0.702-0.293l-0-0c-0.181-0.181-0.292-0.431-0.292-0.707s0.112-0.526 0.292-0.707v0l1.12-1.12c0.186-0.259 0.486-0.425 0.825-0.425 0.56 0 1.013 0.454 1.013 1.013 0 0.339-0.166 0.639-0.422 0.823l-0.003 0.002-1.12 1.107c-0.178 0.187-0.429 0.304-0.706 0.307h-0z"></path>
    </symbol>
    <symbol id="cud-check-circle" viewBox="0 0 1024 1024">
      <path opacity="0.3" d="M938.667 512c0 235.641-191.025 426.667-426.667 426.667s-426.667-191.025-426.667-426.667c0-235.641 191.025-426.667 426.667-426.667s426.667 191.025 426.667 426.667z"></path>
      <path d="M499.627 670.293l256-256c7.753-7.753 12.548-18.463 12.548-30.293 0-23.661-19.181-42.841-42.841-42.841-11.83 0-22.541 4.795-30.293 12.548v0l-225.707 226.133-140.373-140.8c-7.753-7.753-18.463-12.548-30.293-12.548-23.661 0-42.841 19.181-42.841 42.841 0 11.83 4.795 22.541 12.548 30.293l170.667 170.667c7.733 7.795 18.45 12.621 30.293 12.621s22.56-4.826 30.291-12.618l0.003-0.003z"></path>
    </symbol>
  </svg>
  <div class="mouseCursor cursor-outer" style="visibility: visible;"></div>
  <div class="mouseCursor cursor-inner" style="visibility: visible;"></div>
  <header class="cud-header w-100 position-fixed top-0 start-0 d-flex flex-row flex-wrap justify-content-between align-items-center z-3 px-3 gap-3">
    <div class="cud-logo d-flex flex-wrap flex-row align-items-center h-100">
      <a href="<?php echo site_url(); ?>" title="Creative UI Design">

        <?php $custom_logo_id = get_theme_mod('custom_logo');
        $image = wp_get_attachment_image_src($custom_logo_id, 'full');
        ?>
        <svg id="logo" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 2398.6 580">
          <path id="icon" style="fill:#FF0075;" d="M291.8,580H0l118.1-202.9l28.4-48.7l28.2,48.8l18.8,32.5l8.7,15.1l-42.4,24.5l-8.7-15.1 l-4.8-8.3L85.1,531.1h122l-6.9-11.9l42.4-24.5l21,36.4L291.8,580L291.8,580z M675,580H511.1l-28.2-48.9L284.7,187.9l-28.2-48.8 l28.4-48.7L337.5,0L675,580L675,580z M590,531.1L464,314.6L337.5,97.3l-24.4,42l226.2,391.9L590,531.1L590,531.1z M462.7,531.1 l-188-325.7l-28.2-48.8l-28.4,48.7l28.2,48.8l159.9,277h-66L213.1,311l-28.2-48.8L168.8,290l-12.2,20.9l28.2,48.8l98.9,171.3 l28.2,48.9h179L462.7,531.1L462.7,531.1z" />
          <g id="text">
            <path id="creative_00000117640191452057727720000006699724223467228316_" class="cud-logo-c1" d="M859.3,396.1 c-91,0-159.1-63.8-159.1-157.1S770.3,82.8,860.5,82.8c41.3,0,86,15.1,110.7,43.7l-48.4,48.7c-13.4-18.5-37.2-27.3-59.7-27.3 c-49.7,0-85.2,38.6-85.2,91.1s34.7,91.1,83.9,91.1c28,0,50.1-12.6,62.6-30.2l49.7,47C948.2,377.2,909,396.1,859.3,396.1 L859.3,396.1z M1135.7,235.2c-6.3-1.7-12.1-2.1-17.5-2.1c-36.7,0-48.8,30.2-48.8,47.5v107.5h-68.5V178.9h66v30.2h0.8 c10.4-21,30.9-36.1,56.4-36.1c5.4,0,11.3,0.4,14.6,1.7L1135.7,235.2L1135.7,235.2z M1364.5,302.4h-150.7 c2.1,23.1,25.1,39.5,49.7,39.5c21.7,0,36.8-9.2,45.9-21.8l47.6,30.2c-19.6,28.6-52.2,44.5-94.4,44.5 c-62.6,0-114.4-39.9-114.4-110.5s49.3-112.1,112.3-112.1s104.4,42.4,104.4,113.8C1364.9,291.5,1364.9,297.4,1364.5,302.4 L1364.5,302.4z M1301.9,259.6c0-21.8-13.8-39.9-40.9-39.9s-45.5,18.5-47.2,39.9H1301.9L1301.9,259.6z M1402.1,207.5 c24.2-23.1,58.9-35.3,92.7-35.3c69.7,0,95.6,34.4,95.6,110.5v105.4h-62.6v-22.3h-1.2c-10.4,17.2-34.2,27.3-58.9,27.3 c-33,0-75.6-16.4-75.6-65.5c0-60.5,73.1-70.6,133.6-70.6v-3.4c0-20.6-16.3-30.2-37.6-30.2c-19.6,0-38.8,9.7-51.4,21.4L1402.1,207.5 L1402.1,207.5z M1527.8,297h-8.8c-30.1,0-63.9,3.8-63.9,28.6c0,16,15.9,21.4,29.7,21.4c27.6,0,43-16.8,43-42.8V297z M1711.5,230.6 v79.8c0,19.3,6.3,29.4,25.9,29.4c6.7,0,15-1.3,20-3.4l0.8,50.4c-9.2,3.4-25.1,6.3-39.7,6.3c-55.5,0-73.9-29.8-73.9-74.3v-88.2 h-33.4v-51.7h33v-55h67.2v55h48.8v51.7H1711.5L1711.5,230.6z M1827.6,150c-22.1,0-39.2-17.2-39.2-37.8s17.1-37.8,39.2-37.8 s39.2,16.8,39.2,37.8S1849.3,150,1827.6,150z M1793.3,388.1V178.9h68.5v209.2H1793.3z M2044.7,388.1h-73.9L1889,178.9h75.6 l43.8,135.7h1.2l43.8-135.7h73.1L2044.7,388.1L2044.7,388.1z M2358.7,302.4H2208c2.1,23.1,25.1,39.5,49.7,39.5 c21.7,0,36.8-9.2,45.9-21.8l47.6,30.2c-19.6,28.6-52.2,44.5-94.4,44.5c-62.6,0-114.4-39.9-114.4-110.5s49.3-112.1,112.3-112.1 s104.4,42.4,104.4,113.8C2359.1,291.5,2359.1,297.4,2358.7,302.4L2358.7,302.4z M2296.1,259.6c0-21.8-13.8-39.9-40.9-39.9 s-45.5,18.5-47.2,39.9H2296.1L2296.1,259.6z" />
            <path id="ui_design_llc" class="cud-logo-c2" d="M1452.2,525.4c-8.1,8.2-18.9,12.3-32.7,12.3s-24.6-4.1-32.7-12.3 s-12.1-19.3-12.1-33.3v-61.5h17.3v61.2c0,9.1,2.5,16.3,7.5,21.7c5,5.3,11.6,8,20,8s15-2.7,20-8c5-5.4,7.5-12.6,7.5-21.7v-61.2h17.3 v61.5C1464.3,506.1,1460.2,517.2,1452.2,525.4z M1488.6,535.6v-105h17.4v105H1488.6z M1608.5,430.6c15.7,0,28.4,4.8,38.1,14.5 c9.7,9.6,14.5,22.3,14.5,38s-4.8,28.4-14.5,38c-9.7,9.7-22.4,14.5-38.1,14.5h-40v-105L1608.5,430.6L1608.5,430.6z M1608.5,519.4 c10.4,0,18.9-3.3,25.3-10s9.7-15.5,9.7-26.2s-3.3-19.5-9.8-26.2s-14.9-10-25.3-10h-22.5v72.6H1608.5L1608.5,519.4z M1710.5,460 c12.9,0,22.8,4,29.5,12c6.8,8,9.5,19,8.3,32.9h-58.9c0.7,5.4,3.1,9.7,7.3,12.9s9.5,4.8,16,4.8c4.2,0,8.2-0.7,12.1-2.1 c3.9-1.4,6.9-3.2,9.1-5.5l10.1,9.9c-3.7,4-8.3,7.2-13.9,9.5c-5.6,2.3-11.6,3.5-17.8,3.5c-12.1,0-21.8-3.5-29.1-10.7 c-7.3-7.1-10.9-16.6-10.9-28.5s3.5-20.8,10.5-27.9S1699.1,460,1710.5,460L1710.5,460z M1710.9,474.6c-5.8,0-10.5,1.5-14.2,4.5 s-6.1,7.2-7.2,12.8h42.8c-0.6-5.3-2.8-9.5-6.6-12.6S1717,474.6,1710.9,474.6L1710.9,474.6z M1791.5,537.4c-12.4,0-23.5-3.7-33.2-11 l7.8-12.2c6.9,5.5,15.5,8.2,25.9,8.2c9.8,0,14.8-2.8,14.8-8.4c0-2.6-1.3-4.6-3.8-6c-2.5-1.4-6.6-2.4-12.3-3 c-9.6-0.9-17.1-3.3-22.3-7.3c-5.2-4-7.8-9.1-7.8-15.5c0-6.8,2.9-12.3,8.8-16.4c5.9-4.1,13.6-6.2,23.1-6.2c11.2,0,21,2.9,29.2,8.5 l-7.3,12c-6.6-4.2-13.6-6.3-21.2-6.3c-10.8,0-16.2,2.8-16.2,8.4c0,2.4,1.2,4.3,3.5,5.6c2.3,1.4,6.2,2.3,11.6,2.9 c10.9,1.2,18.9,3.6,23.9,7.4s7.5,9,7.5,16.1c0,7-2.9,12.5-8.7,16.7C1808.7,535.3,1801,537.4,1791.5,537.4L1791.5,537.4z  M1846.5,450.4c-3.1,0-5.6-1-7.6-2.9s-3-4.4-3-7.3c0-3.1,1-5.6,3-7.6s4.5-2.9,7.6-2.9s5.8,1,7.8,2.9c2,2,3.1,4.5,3.1,7.6 c0,2.9-1,5.3-3.1,7.3S1849.7,450.4,1846.5,450.4z M1838.1,535.6v-74.1h16.7v74.1H1838.1z M1949.8,497.2c0,13.5-6.3,23-18.8,28.5 c12.2,4.5,18.3,12.3,18.3,23.5c0,9.4-3.6,16.9-10.7,22.4c-7.2,5.5-16.7,8.3-28.5,8.3s-21.8-3-28.9-9.2c-7.2-6.1-10.5-14.2-10-24.2 h16.4c-0.2,5.5,1.8,9.9,5.9,13.2c4.1,3.3,9.7,5,16.6,5s12.2-1.5,16.2-4.3c4.1-2.9,6.1-6.7,6.1-11.4s-2-8.4-5.9-11s-9.3-4-16.2-4 c-12.2,0-21.9-3.3-29.2-10c-7.2-6.7-10.8-15.6-10.8-26.9s3.7-19.7,11.1-26.8s16.8-10.6,28.3-10.6c7.8,0,14.5,1.6,20,5l9.4-11.5 l12.1,9.3l-10.3,12C1946.9,481.5,1949.8,489,1949.8,497.2L1949.8,497.2z M1893.5,513c4.2,4,9.8,6,16.6,6s12.4-2,16.6-6 c4.2-4,6.3-9.2,6.3-15.8s-2.1-11.9-6.3-16c-4.2-4-9.8-6.1-16.7-6.1s-12.5,2-16.7,6.1s-6.3,9.4-6.3,16S1889.3,509,1893.5,513 L1893.5,513z M2007,460c9.5,0,17.2,3.1,22.9,9.5c5.7,6.3,8.6,14.7,8.6,25.2v41h-16.7v-39.9c0-6.5-1.6-11.5-4.8-15.1 s-7.6-5.4-13.1-5.4c-6.1,0-11,2-14.9,6.1c-3.9,4-5.8,9.2-5.8,15.4v39h-16.7v-74.1h14.9l0.2,9.8C1987.7,463.8,1996.2,460,2007,460 L2007,460z M2099.5,535.2V431.6h17.3V519h54.6v16.1H2099.5L2099.5,535.2z M2186.9,535.2V431.6h17.3V519h54.6v16.1H2186.9 L2186.9,535.2z M2319.9,537.2c-16.1,0-29.2-5-39.2-15s-15.1-23-15.1-38.9s5.1-28.7,15.2-38.8c10.1-10.1,23.1-15.1,39-15.1 s28.2,5.3,38.6,16l-11.5,10.7c-7.2-7.2-16-10.8-26.5-10.8c-11.1,0-20,3.5-26.9,10.6c-6.9,7.1-10.4,16.2-10.4,27.5 s3.4,20.4,10.4,27.5c6.9,7,15.9,10.6,26.9,10.6s20.1-3.7,27.7-11.1l11.1,11.5C2348.7,532.1,2335.6,537.2,2319.9,537.2L2319.9,537.2 z" />
            <g id="creative">
              <rect x="1000.8" y="387.9" class="cud-logo-c2" width="68.5" height="35.1" />
              <rect x="1000.8" y="162.9" class="cud-logo-c2" width="66" height="16" />
              <polygon class="cud-logo-c2" points="1033.8,116.6 1000.8,150.6 1066.8,150.6 		" />
              <path class="cud-logo-c2" d="M2374.3,109.6l-44.4-3.4c-5-0.4-9.7,2.7-11.3,7.5l-12.9,38.8c-1.5,4.4,0,9.3,3.7,12.1l36.8,28.6 c3.7,2.9,8.7,3.1,12.7,0.6l34.6-22c4.3-2.7,6.1-8,4.5-12.8l-14.1-42.1C2382.5,112.8,2378.8,109.9,2374.3,109.6z" />
            </g>
          </g>
        </svg>
      </a>
    </div>
    <div class="cud-header-wrap  d-flex flex-row flex-wrap justify-content-between align-items-center flex-grow-1 gap-2">
      <h1 class="fs-6 fw-semibold m-0"><?php echo $post->post_title; ?></h1>
      <div class="cud-thumbnails d-flex flex-row align-items-center gap-2">
        <?php $portfolio_images = get_field('portfolio_images');
        if ($portfolio_images) {
          foreach ($portfolio_images as $key => $images) {
            // echo "<pre>";
            // print_r($images);
            // echo "</pre>";
            $active = 'cud-active';
            if ($key > 0) $active = '';
        ?>
            <button class="<?php echo $active; ?> border border-2 rounded-2 border-hover-primary border-gray-300 border-opacity-10 overflow-hidden p-0 cursor-pointer" data-cud="active" id="<?php echo $key; ?>">
              <img src="<?php echo esc_url($images['small_images']['url']); ?>" width="<?php echo $images['small_images']['width']; ?>" height="<?php echo $images['small_images']['height'];  ?>" title="<?php echo esc_attr($images['small_images']['title']); ?>" alt="<?php echo esc_attr($images['small_images']['title']); ?>" class="img-fluid" />
            </button>
        <?php }
        } ?>
      </div>
    </div>
    <div class="cud-actions d-flex gap-2 align-items-center">
      <a href="<?php echo site_url($cat_slug); ?>" class="btn btn-light-primary p-2 d-flex" title="Go Back">
        <i class="cud-icon-x small"></i>
      </a>
      <div class="dropdown cud-dropdown">
        <button class="btn btn-link dropdown-toggle d-flex align-items-center p-xxl-2 p-xl-2 p-lg-2 p-md-2 p-sm-1 p-1" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme (auto)">
          <svg class="bi theme-icon-active">
            <use href="#circle-half"></use>
          </svg>
          <span class="d-none ms-2" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="bd-theme-text">
          <li class="p-0">
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
              <svg class="bi me-2 theme-icon">
                <use href="#cud-sun"></use>
              </svg>
              Light
              <svg class="bi ms-auto d-none">
                <use href="#check2"></use>
              </svg>
            </button>
          </li>
          <li class="p-0">
            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
              <svg class="bi me-2 theme-icon">
                <use href="#cud-moon"></use>
              </svg>
              Dark
              <svg class="bi ms-auto d-none">
                <use href="#check2"></use>
              </svg>
            </button>
          </li>
          <li class="p-0">
            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
              <svg class="bi me-2 theme-icon">
                <use href="#cud-screen"></use>
              </svg>
              Auto
              <svg class="bi ms-auto d-none">
                <use href="#check2"></use>
              </svg>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </header>