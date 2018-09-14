<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Indoor_Pollution_Solutions
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ips' ); ?></a>

	<header id="masthead" class="site-header">
		<div class='masthead-wrapper'>

			<div class="site-branding">
				<a href="<?php echo get_home_url(); ?>" rel="home">
					<svg xmlns="http://www.w3.org/2000/svg" width="728.47" height="331.05" viewBox="0 0 728.47 331.05"><title>IPS_logo</title><g><g fill="#fff"><path d="M250.54 99.64a3.55 3.55 0 0 0-1.22-1.44 8.2 8.2 0 0 0-5-1.15h-1.12c-3.34.05-6.76 0-10.07 0-5 0-10.18-.07-15.3.15a3.22 3.22 0 0 0-1.06.2c-3.4 1.25-3.36 4.65-3.35 5.76v.1q0 30 0 60 0 29.38 0 58.76a4.9 4.9 0 0 0 1.12 4 5.8 5.8 0 0 0 4.7 1.94q6.15 0 12.3 0c4.12 0 8.24 0 12.37 0h.83a7.42 7.42 0 0 0 4.86-1.3 3.54 3.54 0 0 0 .87-1 6.94 6.94 0 0 0 .83-3.8 4.64 4.64 0 0 1 0-.53c0-.1 0-.2 0-.3q0-57.54 0-115.08v-.2c0-.37 0-.76 0-1.15a10.52 10.52 0 0 0-.76-4.96z"/><path d="M298.97 98.7a5.68 5.68 0 0 0-4.47-1.63c-4.18 0-8.36 0-12.54 0-4 0-8 0-12 0a16 16 0 0 0-4.6.58 3.5 3.5 0 0 0-2.55 3 74.06 74.06 0 0 0-.3 9.94c0 1.84.07 3.6 0 5.35v26.37q0 39.4 0 78.8a32 32 0 0 0 .24 3.34 3.52 3.52 0 0 0 2.65 3 13.8 13.8 0 0 0 3.85.57h25.09a9.74 9.74 0 0 0 4-1.05 3.5 3.5 0 0 0 2.1-3.2c.04-42.1 0-84.74 0-120.92a5.2 5.2 0 0 0-1.47-4.17z"/><path d="M102.5 120.33a42.92 42.92 0 0 0-24.83-20.1c-8.26-2.88-16.94-3.22-25.1-3.18H33.8c-9.26 0-18.5 0-27.75 0a5 5 0 0 0-3.9 1.12 6.55 6.55 0 0 0-2.13 5.13q0 28.44 0 56.87 0 30.4 0 60.75a17.2 17.2 0 0 0 .43 3.95 3.5 3.5 0 0 0 2.8 2.72 27.72 27.72 0 0 0 4.9.35h2.86c8.26 0 16.6 0 24.9 0a11.66 11.66 0 0 0 3.72-.62h.14a3.5 3.5 0 0 0 2.47-3.3c.3-11.56.17-23.55-.4-35.7a123.36 123.36 0 0 0 17.57.43c12.56-.83 22.45-3.9 30.18-9.4a40.77 40.77 0 0 0 16.93-26.24 47.86 47.86 0 0 0-4-32.8zm-60.62 8.7c3 .12 6.3.2 10 .27 4.38.13 7.58 1.22 9.48 3.2 2.08 2.23 2.7 5.7 3 8.5.27 5.63-.58 9.45-2.67 12-1.67 2-4.58 3.37-8 3.62-2.14.2-4.36.3-6.5.4-1.7.07-3.44.15-5.2.28a234.3 234.3 0 0 0-.12-28.27z"/><path d="M182.92 138.1c-8.93-5-19.93-6.9-32.7-5.75h-.14a55.18 55.18 0 0 0-15.1 4.08 44.63 44.63 0 0 0-22.05 21.36c-9.88 20.15-5.27 46.2 10.75 60.58a46.56 46.56 0 0 0 26.82 11.42 67.5 67.5 0 0 0 7.13.38c8.18 0 18-1.56 26.95-7.13 11.7-7.06 19.8-20.18 21.64-35.17.85-8.64.35-15.53-1.55-21.67-3.16-12-11.3-22.53-21.75-28.1zm-15.9 33.65a89.65 89.65 0 0 1 0 19.17c-.8 4.85-2.48 8-5 9.3a14.6 14.6 0 0 1-9.73.07c-3.34-1.6-4.33-6.1-4.6-8.06a62.37 62.37 0 0 1 .4-23.67c.64-2.66 2.63-5.58 5.66-6.13h.14a12.53 12.53 0 0 1 9 1c2 1.26 3.33 3.92 4.1 8.3z"/><path d="M404.67 196.24v-15.68q0-19.48 0-39a6.2 6.2 0 0 0-1.8-5 5.1 5.1 0 0 0-4.1-1.4c-8.75 0-17.65 0-26.26 0a5.58 5.58 0 0 0-4.38 1.5 5.3 5.3 0 0 0-1.65 4.26c0 7.62 0 15.36 0 22.84 0 4.8 0 9.62 0 14.43v1.37a52.78 52.78 0 0 1-.78 11.46c-.7 2.17-2 5-4.33 6.15l-.2.12c-2.65 1.58-6 1.3-7.9.93-3.17-1.26-4.15-5.8-4.4-9.47-.16-7.94-.13-16-.1-23.86 0-8.46.05-17.2-.14-25.83a3.5 3.5 0 0 0-2.4-3.25 15.73 15.73 0 0 0-5.38-.68c-3.6 0-7.26 0-10.8 0-4.55 0-9.24 0-13.88 0a4.87 4.87 0 0 0-3.67 1.46 6.5 6.5 0 0 0-1.62 4.9v13.16q0 19.44 0 38.88c0 6 .53 14.9 5 22.34a28.12 28.12 0 0 0 21.23 13.78 39.1 39.1 0 0 0 5 .3 40.34 40.34 0 0 0 25.7-9.13 31 31 0 0 0 4.58-4.73 51.1 51.1 0 0 0 1.5 8.93 3.5 3.5 0 0 0 2.76 2.53 33.74 33.74 0 0 0 6.58.35c.8 0 1.63 0 2.45 0h.1c2 0 4.06 0 6.1 0 3 0 6.12 0 9.2 0a4.92 4.92 0 0 0 3.93-1.75 6.1 6.1 0 0 0 1.07-5.16c-1.34-8.35-1.37-17.07-1.4-24.76z"/><path d="M600.74 136.6c-8.24-3.83-18.27-5.25-29.82-4.23h-.17c-8.52 1.17-15.74 3.77-21.52 7.66-10 6.5-17.2 17.54-19.6 30.2-4 19.07 3.06 39.3 17.6 50.34a47.2 47.2 0 0 0 24.7 9.27c2 .2 4.13.3 6.44.3 7.84 0 17.34-1.4 26-6.5a44.65 44.65 0 0 0 19.72-23.76 54.13 54.13 0 0 0-.43-39.14 44 44 0 0 0-22.93-24.14zm-12.64 52.43c-.76 5.37-1.9 9.32-5 11.07a14.4 14.4 0 0 1-9.5.38c-2.33-.75-3.75-3.1-4.3-5.08-2.2-7.18-1.93-14.86-1.37-21.45.5-3.5 1-7.08 3-9.4l.07-.07a6.38 6.38 0 0 1 3.53-2c3.27-.77 7.67-.7 10.16 1.8 2.26 2.35 2.84 6.22 3.4 10l.04.3a86.94 86.94 0 0 1-.04 14.45z"/><path d="M474.23 164.54a3.5 3.5 0 0 0 3.34-3.36c.32-7.9.3-15.48 0-22.52a3.5 3.5 0 0 0-3.26-3.33c-4.64-.3-11.38-.22-15.54-.12.13-5.34.3-15.18-.06-21.4a5.93 5.93 0 0 0-4.58-5.37 7 7 0 0 0-7.43 2.48c-12 15.75-22.57 26.06-34.15 33.4-1.9 1.06-4.1 3.4-4 8.56v.92c.06 2.7.13 5.74 2.23 8.8a3.58 3.58 0 0 0 2.92 1.5c2.26 0 4.57 0 6.9-.1-.78 8.36-.74 16.75-.7 24.92v3.3a42.4 42.4 0 0 0 6 22.87c5 8.13 14.1 13.6 24.35 14.68a44.78 44.78 0 0 0 6.63.46 87.6 87.6 0 0 0 13.5-1.25 5.66 5.66 0 0 0 .55-.13 6.92 6.92 0 0 1 .86-.2c1.44-.25 4.16-.74 5.5-3.48a3.47 3.47 0 0 0 .37-1.34c.18-3 .15-6 .12-8.88 0-1.73 0-3.5 0-5.25v-.2c0-.8 0-1.63 0-2.52a24.05 24.05 0 0 0-.57-6.92 3.48 3.48 0 0 0-3.54-2.6 12.8 12.8 0 0 0-4.84 1.38 8.56 8.56 0 0 1-2.2.8 10.6 10.6 0 0 1-6.9-1c-1.5-1.07-1.77-3.85-1.8-6.37 0-8 .05-21 .06-27.2 4.2-.1 11.54-.28 16.2-.5z"/><path d="M728.45 219.16c0-.5 0-1 0-1.52q0-10.75 0-21.5c0-9.55 0-19.1 0-28.73-.1-5.05-.34-10-2.1-14.73a28.57 28.57 0 0 0-17.64-18.75c-5.35-2.2-11-2-15.93-1.65h-.23a39.1 39.1 0 0 0-25.56 15c-.27-2.36-.6-4.73-1-7.1 0-.13-.07-.3-.1-.43a1.53 1.53 0 0 1-.06-.25c-.88-3.8-3.2-4.35-4.7-4.35-4.2-.12-8.44-.1-12.54-.08-2.88 0-5.86 0-8.76 0h-.75c-1.08 0-4.38 0-5.7 3.2a3.43 3.43 0 0 0-.24 1.05 23.48 23.48 0 0 0 .4 5.37c.1.8.23 1.57.3 2.3v.2a140.33 140.33 0 0 1 .88 19.58c0 1.33 0 2.66 0 4v52.9a3.5 3.5 0 0 0 2 3.18 8.88 8.88 0 0 0 4.48 1.06h25.33a6.6 6.6 0 0 0 4.92-1.68 4.68 4.68 0 0 0 1.3-3.36c.1-7.6.08-15.34.07-22.82 0-4.85 0-9.7 0-14.54 0-.64 0-1.27 0-1.92 0-5.54 0-11.26 2.73-15.7a9.55 9.55 0 0 1 6.44-4.27 7.13 7.13 0 0 1 5.53 1.12c2.38 2.6 2.66 7 2.9 10.84.16 7.53.12 15.23.1 22.67 0 8.48-.08 17.25.17 25.9a3.48 3.48 0 0 0 2.9 3.33 35.37 35.37 0 0 0 6.18.46c1 0 1.94 0 2.9 0 1.56 0 3-.06 4.5 0h.25c2-.06 4.07 0 6.23 0a85 85 0 0 0 11.34-.33 3.53 3.53 0 0 0 3-2.66 22.73 22.73 0 0 0 .48-5.8z"/><path d="M521.8 141.45a6.5 6.5 0 0 0-1.68-4.9 4.76 4.76 0 0 0-3.48-1.36c-4.66-.1-9.38-.07-13.94 0-3.57 0-7.13 0-10.63 0a18 18 0 0 0-5.3.52 3.5 3.5 0 0 0-2.58 3.24c-.26 5.83-.22 11.73-.2 17.43 0 3.42.06 7 0 10.48q0 10.8 0 21.6c0 11.68 0 23.76.13 35.66a3.5 3.5 0 0 0 2.68 3.35 14.57 14.57 0 0 0 3.82.52h20.12c.5 0 1 0 1.56 0h1.43a24.43 24.43 0 0 0 4.9-.4 3.48 3.48 0 0 0 2.74-2.72 17.12 17.12 0 0 0 .43-3.84q0-29.06 0-58.1z"/><path d="M513.73 96.5a21.06 21.06 0 0 0-17-2.14h-.12a20.72 20.72 0 0 0-14 16.32 19 19 0 0 0 5.13 16.16 21.27 21.27 0 0 0 15.2 6.13c.68 0 1.37 0 2.06-.1a20.1 20.1 0 0 0 15.07-8.5 18.8 18.8 0 0 0 2.72-14.82 20.23 20.23 0 0 0-9.07-13.04z"/></g></g><g><g><g><path fill="#3a4ba0" d="M497.63 97.74c4.7-1.3 10.07-1 14.24 1.74 7.52 4.56 10.4 15.56 5.3 22.94-5.86 8.7-19.74 9.42-27 2a15.4 15.4 0 0 1-4.18-13.1 17.34 17.34 0 0 1 11.58-13.6M3.52 103.25c-.06-1.28.67-3 2.24-2.68 15.6 0 31.22 0 46.83 0 8-.05 16.26.3 23.92 3 9.55 3 18.13 9.56 22.9 18.45a44.12 44.12 0 0 1 3.7 30.43 37.48 37.48 0 0 1-15.47 24.07c-8.27 5.85-18.47 8.13-28.43 8.78a129 129 0 0 1-21.07-.8c.73 13.14 1 26.3.62 39.48a9 9 0 0 1-2.85.52h-24.8a41.07 41.07 0 0 1-7.27-.3 14 14 0 0 1-.35-3.15c0-39.24 0-78.5 0-117.75m34.63 22.1a225.46 225.46 0 0 1 0 35.82c5.25-.68 10.56-.6 15.83-1.1 3.9-.27 7.9-1.77 10.43-4.87 3.26-4 3.7-9.52 3.44-14.5-.4-3.75-1.27-7.75-3.93-10.6-3.04-3.2-7.67-4.2-11.93-4.32-4.6-.08-9.2-.2-13.82-.43m179.8-24.66c8.4-.34 16.84 0 25.27-.15 1.37.08 2.92-.27 4.14.55.7 1.52.34 3.24.42 4.84q0 57.55 0 115.07c-.08.95.13 2-.37 2.85-1 .8-2.33.54-3.5.6-8.28-.06-16.54 0-24.8 0-1.25.1-2.6-.7-2.22-2.1q0-59.54 0-119.1c0-1-.06-2.14 1.06-2.55m48.38.3a12.4 12.4 0 0 1 3.58-.46c8.26.07 16.52 0 24.78 0a2 2 0 0 1 2.3 2q0 60.56 0 121.1a5.9 5.9 0 0 1-2.9.76c-8.28 0-16.56 0-24.84 0a10.3 10.3 0 0 1-3-.47 27 27 0 0 1-.2-3q0-52.52 0-105c.13-5-.34-10 .25-15m183.16 12c1.36-2 5.5-1.66 5.7 1.06.5 8.6-.07 24.78-.07 24.78s12-.47 18.92 0c.34 7.4.3 14.83 0 22.22-6.92.32-19.54.58-19.54.58s0 19.9-.08 30.6c.06 3.32.4 7.34 3.43 9.34a14.1 14.1 0 0 0 9.33 1.52c2.34-.3 4.25-2 6.63-2.13.74 2.83.3 5.78.4 8.66-.07 4.66.18 9.33-.1 14-.8 1.6-2.88 1.4-4.35 1.9-6.32 1-12.78 1.74-19.14.8-8.68-.9-17.16-5.52-21.8-13a39.3 39.3 0 0 1-5.44-21c0-10.72-.25-21.45 1.14-32.1a96.44 96.44 0 0 1-10.9.44c-1.7-2.48-1.55-5-1.64-7.85 0-2 .33-4.38 2.3-5.42 14-8.85 25.23-21.3 35.2-34.35m-299 22.87c10.44-.94 21.38.16 30.68 5.33a41.47 41.47 0 0 1 20.1 26c2.04 6.57 2.08 13.58 1.42 20.37-1.6 13-8.6 25.65-20 32.5-9.45 5.9-21 7.44-31.9 6.27a43.13 43.13 0 0 1-24.87-10.55c-15.4-13.82-18.92-38.14-9.94-56.44a40.84 40.84 0 0 1 20.3-19.68 51.84 51.84 0 0 1 14.15-3.82m2.7 23.13c-4.33.8-7.44 4.64-8.4 8.77a65.62 65.62 0 0 0-.48 25.06c.6 4.25 2.55 8.83 6.7 10.7a18 18 0 0 0 12.45-.07c4.56-2.24 6.35-7.4 7.1-12.08a92.8 92.8 0 0 0 0-20.13c-.72-4.08-2.1-8.52-5.78-10.87a16 16 0 0 0-11.6-1.4m418.13-23.17c9.48-.84 19.3-.14 28 3.9a40.68 40.68 0 0 1 21.2 22.27 50.55 50.55 0 0 1 .4 36.63 41.54 41.54 0 0 1-18.17 21.95c-9.12 5.36-20 6.75-30.43 5.76a44 44 0 0 1-22.9-8.57c-14-10.64-19.85-29.93-16.3-46.84 2.13-11.16 8.45-21.74 18.08-28 6-4 13-6.2 20.12-7.15m2.6 23.23a9.73 9.73 0 0 0-5.47 3.2c-2.7 3.1-3.33 7.37-3.9 11.3-.64 7.62-.74 15.5 1.5 22.87a10.66 10.66 0 0 0 6.58 7.4 17.9 17.9 0 0 0 12.12-.57c5-2.7 6.2-8.68 6.93-13.8a92.1 92.1 0 0 0 .1-15.3c-.63-4.3-1.24-9-4.4-12.33-3.46-3.45-8.94-3.83-13.47-2.77m119.22-23.27c4.83-.36 9.9-.47 14.45 1.43a25 25 0 0 1 15.55 16.57c1.64 4.37 1.83 9.1 1.92 13.7q0 25.1 0 50.16a29.42 29.42 0 0 1-.34 6.5c-5.72.68-11.52.13-17.26.3-4.38-.17-8.8.4-13.13-.35-.46-16.2.08-32.42-.27-48.62-.28-4.6-.65-9.82-4-13.3-5.36-4.34-14-1.67-17.34 4-3.62 5.77-3.22 12.87-3.24 19.4 0 12.45.1 24.92-.06 37.38.05 1.42-1.68 1.53-2.7 1.53-8.5 0-17 0-25.5 0a5.56 5.56 0 0 1-2.84-.74v-52.9c0-8 .18-16.07-.94-24-.2-2.38-.87-4.74-.7-7.14.54-1.3 2-.95 3.16-1 7.1.07 14.23-.13 21.34.08 1.1-.05 1.18 1.33 1.42 2.1a135.92 135.92 0 0 1 1.8 18.23 40.7 40.7 0 0 0 2-4 35.57 35.57 0 0 1 26.73-19.3m-378.66 5.67c-.1-1.15.27-2.84 1.75-2.75 8.26-.14 16.5 0 24.76-.07a12.2 12.2 0 0 1 4.26.5c.37 16.6-.08 33.18.23 49.77.32 4.87 1.78 10.9 7 12.7 3.5.72 7.44.6 10.6-1.3 3.23-1.66 5.1-5 6.12-8.38 1-4.5.9-9.15.9-13.74 0-12.47 0-24.95 0-37.43a2 2 0 0 1 2.3-2.1c8.92 0 17.84 0 26.74 0 1.54-.28 2.35 1.42 2.16 2.73q0 27.43 0 54.86c0 8.5.1 17 1.37 25.43.3 1.13 0 2.83-1.54 2.73-5.1.12-10.24 0-15.36 0-2.83-.06-5.68.22-8.48-.28-1.76-6.52-1.66-13.38-1.9-20.08-2.33 5.26-5.3 10.38-9.8 14.1a36.75 36.75 0 0 1-28 8.04 24.54 24.54 0 0 1-18.58-12c-3.7-6.17-4.5-13.52-4.52-20.6q0-26.06 0-52.14m173.26-2.43a15.1 15.1 0 0 1 4.3-.4c8.23.06 16.47-.1 24.7.05 1.4-.1 1.66 1.63 1.6 2.7q0 39.8 0 79.63a14.92 14.92 0 0 1-.34 3.13 38 38 0 0 1-7.23.3c-6.7 0-13.4 0-20.1 0a11.47 11.47 0 0 1-3-.42c-.27-19.06 0-38.14-.1-57.2.1-9.27-.23-18.53.15-27.78z"/></g></g><path fill="#bcbec0" d="M683.33 295.77h41.64v13.1h-41.64z"/><path fill="#bcbec0" d="M3.5 295.77h41.64v13.1H3.5z"/><path fill="#bcbec0" d="M3.5 39.13h128.67v13.1H3.5z"/><path fill="#bcbec0" d="M596.06 39.13h128.67v13.1H596.06z"/><g fill="#231f20"><path d="M172.23 74.93h-16.66V2.25h16.66z"/><path d="M186.74 74.93v-54h15.5v6.54a35.3 35.3 0 0 1 22.76-7.6c16 0 29.07 7.4 29.07 20.8v34.3H238.9V40.62c0-5.26-3.4-15.44-16-15.44-8.7 0-20.66 6.64-20.66 20.04v29.7z"/><path d="M321.75 74.93v-7.7c-5 5.24-12.43 7.8-22.28 7.8a44.4 44.4 0 0 1-17.44-3.42 29.4 29.4 0 0 1-12.28-9.75 24.08 24.08 0 0 1-4.36-14.25 26.07 26.07 0 0 1 4-14.37 24.72 24.72 0 0 1 11.83-9.76 43.17 43.17 0 0 1 17.75-3.44 39.5 39.5 0 0 1 12.76 1.93 26.58 26.58 0 0 1 9.05 5.26V.02h15.5v74.9zm-34.4-10.3a20.44 20.44 0 0 0 14.38 5.6 20.68 20.68 0 0 0 14.37-5.37c3.88-3.54 5.82-9.12 5.82-16.4 0-8.15-1.94-14-6-17.9a20.48 20.48 0 0 0-14.7-5.7 19.62 19.62 0 0 0-14.2 5.48c-3.88 3.64-5.82 9.43-5.82 17.26.03 7.6 2.12 13.3 6.16 17.04z"/><path d="M361.8 25.73q10.42-5.8 25.68-5.8c11.15 0 20.35 2.37 27.46 7.08s10.66 11.27 10.66 19.63c0 6.76-1.62 12.12-4.68 16-3.24 4-7.76 7-13.73 9.1a59 59 0 0 1-19.72 3.22c-11.46 0-20.67-2.35-27.77-7.07s-10.47-11.6-10.47-20.5c0-9.75 4.18-16.94 12.58-21.65zm9.37 39c4.36 3.75 9.7 5.68 16.3 5.68q9.7 0 16-5.78c4.37-3.86 6.47-9.65 6.47-17.58 0-7.4-2.1-13.08-6.46-16.94s-9.7-5.68-16-5.68c-6.62 0-11.95 1.82-16.3 5.68-4.2 3.86-6.3 9.54-6.3 17.26s2.1 13.53 6.3 17.4z"/><path d="M451.12 25.73q10.4-5.8 25.67-5.8c11.14 0 20.34 2.37 27.45 7.08s10.66 11.27 10.66 19.63c0 6.76-1.6 12.12-4.68 16-3.23 4-7.75 7-13.72 9.1a59 59 0 0 1-19.7 3.22c-11.47 0-20.68-2.35-27.78-7.07s-10.5-11.58-10.5-20.48c0-9.77 4.2-16.96 12.6-21.67zm9.36 39c4.36 3.75 9.7 5.68 16.3 5.68q9.7 0 16-5.78c4.36-3.84 6.45-9.6 6.45-17.6 0-7.4-2.1-13.07-6.46-16.93s-9.7-5.7-16-5.7c-6.62 0-11.95 1.83-16.3 5.7-4.2 3.85-6.3 9.53-6.3 17.25s2.1 13.54 6.3 17.4z"/><path d="M527.83 74.93v-55h15.5v8c4.36-5.68 9-7.94 15.83-7.94a37.7 37.7 0 0 1 13.73 2.78l-3.4 7.83c-1.62-2.46-6.63-4.07-11-4.07s-10.33 1.72-12.92 6.65c-1.77 3.22-2.26 7.18-2.26 10.94v30.8z"/></g><g fill="#231f20"><path d="M146.83 320.1a28.75 28.75 0 0 1-13.07 7.93 59.53 59.53 0 0 1-19.23 2.9c-9 0-16.44-1-22.6-2.9-6-1.93-10.87-4.82-14.25-8.57a20.28 20.28 0 0 1-5.45-12.54h14.4c.57 9.33 5.27 14.58 12 16.4a57.14 57.14 0 0 0 15.26 2.26c14.23 0 22.9-7.4 22.9-15.66s-8.67-12-27.6-15.43c-9.1-1.73-15.42-3.12-19.1-4.62-4.83-1.83-14.23-5.7-14.23-14.05a15.58 15.58 0 0 1 4.36-10.3c2.93-3.2 7-5.56 12.62-7.28a63.65 63.65 0 0 1 18.2-2.47 66.9 66.9 0 0 1 19.53 2.58c5.58 1.82 10 4.3 12.92 7.72a18 18 0 0 1 5 11.25h-14.74c-1.76-8.8-6.16-16.3-22.17-16.3-16.45 0-21 8.8-21 14.16 0 8.35 9.68 11.25 21.72 13.07 10.86 1.7 18.05 3.43 22 4.72 13.5 4.17 16.73 11.24 17 16.17.35 3.86-1.4 7.5-4.5 10.94z"/><path d="M176.62 281.73q9.48-5.8 23.35-5.8c10.13 0 18.5 2.37 24.95 7.1s9.7 11.24 9.7 19.6c0 6.76-1.48 12.12-4.27 16a27.5 27.5 0 0 1-12.47 9.1 49.2 49.2 0 0 1-17.9 3.23c-10.44 0-18.8-2.36-25.26-7.08s-9.55-11.58-9.55-20.48c0-9.77 3.82-16.95 11.45-21.67zm8.52 39a20.6 20.6 0 0 0 14.83 5.68 19.6 19.6 0 0 0 14.53-5.77c4-3.86 5.87-9.65 5.87-17.6 0-7.38-1.9-13.07-5.87-16.93a19.94 19.94 0 0 0-14.53-5.68c-6 0-10.87 1.82-14.83 5.68s-5.73 9.55-5.73 17.26 1.92 13.53 5.74 17.4z"/><path d="M250.46 330.94V255.9h14.1v75.04z"/><path d="M341.63 275.94v54.9h-14.1v-7.3a30.18 30.18 0 0 1-20.7 7.5c-14.68 0-26.42-7.4-26.42-20.8v-34.3h13.66v34.3c0 5.26 3.08 15.44 14.68 15.44a19.53 19.53 0 0 0 18.8-19.94v-29.8z"/><path d="M390.07 330.2a59.67 59.67 0 0 1-9.25.74c-4.4 0-9-.43-11.3-1.5a10.47 10.47 0 0 1-5.14-4.6c-1-1.62-1.62-4.62-1.62-10v-32.36h-8.95v-4.83h8.96v-13.18l14.24-6.33v19.5h12.33v4.84H377v35.8c0 2.47.3 3.87.74 4.62a3.65 3.65 0 0 0 2.05 2 10.67 10.67 0 0 0 4.1.65 26.13 26.13 0 0 0 4.4-.43z"/><path d="M402.23 268.33v-10.2h14v10.2zm0 62.6v-55h14v55z"/><path d="M443.5 281.73q9.47-5.8 23.34-5.8c10.13 0 18.5 2.37 25 7.1s9.7 11.24 9.7 19.6c0 6.76-1.48 12.12-4.27 16a27.58 27.58 0 0 1-12.48 9.1 49.2 49.2 0 0 1-17.92 3.23c-10.42 0-18.8-2.36-25.25-7.08s-9.54-11.58-9.54-20.48c-.05-9.77 3.76-16.95 11.4-21.67zm8.5 39a20.63 20.63 0 0 0 14.84 5.68 19.6 19.6 0 0 0 14.53-5.77c4-3.86 5.88-9.65 5.88-17.6 0-7.38-1.9-13.07-5.88-16.93a19.93 19.93 0 0 0-14.53-5.68c-6 0-10.86 1.82-14.83 5.68-3.8 3.86-5.7 9.55-5.7 17.26s1.93 13.53 5.7 17.4z"/><path d="M517.34 330.94v-54h14.1v6.54a30.3 30.3 0 0 1 20.7-7.6c14.52 0 26.42 7.4 26.42 20.8v34.3h-13.8v-34.35c0-5.25-3.1-15.44-14.54-15.44-7.93 0-18.8 6.64-18.8 20v29.7z"/><path d="M656.23 314.32a11.9 11.9 0 0 1-3.82 8.36c-2.48 2.68-6.15 4.72-10.85 6.1a53.44 53.44 0 0 1-16.15 2.16c-9.83 0-17.47-1.4-22.6-4.18a19.14 19.14 0 0 1-9.84-12.33h13.06a11.93 11.93 0 0 0 5.58 8.9c3.23 1.82 7.93 2.78 13.8 2.78 15.7 0 17.47-8.56 17.47-10.82 0-2.46-2-6.43-17-8.9-9.54-1.6-16.15-3-19.67-4.28-4.4-1.6-11.16-4.6-11.16-10.94a10 10 0 0 1 2.35-6.54 18 18 0 0 1 6.3-5 38.4 38.4 0 0 1 8.23-2.57 53.15 53.15 0 0 1 11.15-1.07 63.4 63.4 0 0 1 15.86 1.82c4.4 1.18 7.78 2.8 10 4.83a15 15 0 0 1 4.26 7.6h-12.97c-1.18-3.42-4.55-9.43-16.3-9.43-13.36 0-16.44 5.8-16.44 9.33 0 4.18 3.07 6.33 6.45 7.3 1.32.3 5.14 1.4 11.45 2.56 9.25 1.7 15.56 3.1 19.23 4.18 8.06 2.42 11.6 6.5 11.6 10.14z"/></g></g></svg>
				</a>
			</div><!-- .site-branding -->

			<button class="mobile-menu-toggle" aria-controls="main-navigation" aria-expanded="false" aria-label="Menu"><span class="inner"><?php esc_html_e( '', 'ips' ); ?></span></button>

			<div class='phone-menu-container'>

				<?php if( function_exists( 'get_field' ) ):
					$phone_section = get_field( 'phone_section', 'company-information' );

					if( $phone_section ): ?>

						<div class='phone'>
							<span class="title"><?php echo esc_html( $phone_section['phone_section_title'] ); ?></span>
							<span class="number"><?php echo esc_html( $phone_section['phone_number'] ); ?></span>
						</div>

					<?php	endif; ?>

				<?php endif; ?>

				<nav id="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'main-menu',
						'container' => ''
					) );
					?>
				</nav><!-- #main-navigation -->

			</div>

		</div>
	</header><!-- #masthead -->

	<?php if( is_front_page() ): echo ips_home_hero(); endif ?>

	<div id="content" class="site-content">
