<?php get_header(); ?>

<main class="site-main">
    <section class="error-404 not-found">
        <h1>Oops! That page can’t be found.</h1>
        <p>It looks like nothing was found at this location. You can return to the <a href="<?php echo home_url(); ?>">homepage</a> or try searching for what you need.</p>
        <?php get_search_form(); ?>
    </section>
</main>

<?php get_footer(); ?>
