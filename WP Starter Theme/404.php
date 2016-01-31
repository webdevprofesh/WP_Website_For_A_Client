<?php
/*
* Template Name: 404
*/
?>

<?php get_header(); ?>

   <div class="container marginbottom">
        <div class="row">
            <div class="col-md-12">
                <h1 class="open-sans text-center">404: Page Not Found <i class="fa fa-code"></i></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="open-sans">Well, for some reason our site couldn't process your request.</p>
                <p class="open-sans">It might be because we've recently redesigned our website, or perhaps the page you're looking for no longer exists.</p>
                <h3 class="open-sans">So what now?</h3>
                <p class="open-sans">Your best bet is retyping the URL and trying again, that usually works.</p>
                <p class="open-sans">If not, just head on back to the <a href="<?php echo home_url() ?>" style="color:blue">Home Page</a>.</p>
                <h6 class="open-sans">One more thing:</h6>
                <p class="open-sans">It would be awesome if you could help us fix this issue with a bit of feedback. Please, contact us and let us know what went wrong. Oh, and it's best if you can tell us what Web Browser and Operating System you were using when the error occurred. Thank you!</p>
                <p class="open-sans">Email: <?php $admin_email = get_option( 'admin_email' ); ?></p>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
