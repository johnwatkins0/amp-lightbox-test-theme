<html>
<head>
<?php wp_head(); ?>
<meta property="og:type" content="article">
</head>
<body <?php body_class(); ?>>

<?php
while ( have_posts() ) :
    the_post();
    the_title();
    the_content();
endwhile;
?>

</body>

<?php wp_footer(); ?>

</html>