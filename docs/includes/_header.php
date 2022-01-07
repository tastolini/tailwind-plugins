<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>A17 Tailwind Plugins</title>
    <style>
      @font-face {
        font-family: 'SuisseIntl';
        src: url('/assets/fonts/SuisseIntl-Regular-WebXL.woff2') format('woff2'),
          url('/assets/fonts/SuisseIntl-Regular-WebXL.woff') format('woff');
        font-style: normal;
        font-weight: normal;
        font-display: fallback;
      }
      @font-face {
        font-family: 'SuisseIntl';
        src: url('/assets/fonts/SuisseIntl-Medium-WebXL.woff2') format('woff2'),
          url('/assets/fonts/SuisseIntl-Medium-WebXL.woff') format('woff');
        font-style: normal;
        font-weight: 500;
        font-display: fallback;
      }
    </style>
    <link media="all" rel="stylesheet" href="/tailwind.css">
    <link media="all" rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/sunburst.min.css">
    <link rel="icon" href="/assets/images/favicon.png" sizes="any" type="image/png">
</head>
<body class="text-primary bg-primary overflow-x-hidden min-h-screen flex flex-nowrap flex-col">

    <header id="a17" class="border-b border-primary">
      <ul class="container py-12 sm:flex sm:flex-row">
        <?php if (isset($index)) { ?>
        <li class="f-body sm:mr-auto"><a href="https://area17.com/" target="_blank">AREA 17</a></li>
        <?php } else { ?>
        <li class="f-body sm:mr-auto"><a href="/">AREA 17 - Tailwind Plugins</a></li>
        <li class="f-body mt-20 sm:mt-0 sm:mr-20"><a href="/">← back</a></li>
        <?php } ?>
        <li class="f-body mt-20 sm:mt-0">
          <a href="https://github.com/area17/a17-tailwind-plugins">
            GitHub
            <svg class="inline-block align-text-bottom" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1024 1024" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z" transform="scale(64)" fill="currentColor"/></svg>
          </a>
        </li>
      </ul>
      <div class="container pb-40 pt-60 md:pt-80 lg:pt-100">
        <h1 class="f-h1"><?php echo (isset($title) ? $title : '--') ?></h1>
      </div>
    </header>

    <main class="mt-40 md:mt-60">
      <div class="container">
