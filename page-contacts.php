<?php
/** Template Name: Contacts */
?>

<?php get_header(); ?>

<div data-router-wrapper>
    <div data-router-view="contacts_page">
        <?php partial('nav'); ?>
        <div id="scrollbar">
            <main role="main">
                <section id="map"></section>
                <div class="container-fluid info-map">
                    <div class="row">
                        <div class="block">
                            <a title="Address" data-router-disabled href="https://www.google.it/maps/place/Falezze+di+Luca+Anselmi/@45.4645997,11.139444,17z/data=!3m1!4b1!4m5!3m4!1s0x477f5b0543ce953f:0x9311fcb411b57862!8m2!3d45.464596!4d11.141638">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><g fill="#FFF" fill-rule="nonzero"><path d="M10.58 10.09a.75.75 0 00.53-.22l7.06-7.06v3.65a.75.75 0 101.5 0V1a.75.75 0 00-.75-.75h-5.46a.75.75 0 100 1.5h3.65L10 8.81a.75.75 0 00.53 1.28h.05z"/><path d="M19 10.81a.75.75 0 00-.75.75v6.2c0 .27-.22.49-.49.49H2.24a.49.49 0 01-.49-.49V2.24c0-.27.22-.49.49-.49h5.87a.75.75 0 000-1.5H2.24a2 2 0 00-2 2v15.51a2 2 0 002 2h15.52a2 2 0 002-2v-6.2a.75.75 0 00-.76-.75z"/></g></svg>
                                <span>Loc. Pigno 1/b - 37031 Illasi(VR)</span>
                            </a>         
                        </div>
    
                        <div class="block">
                            <a title="Phone Number" data-router-disabled href="tel:+393280919986">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><g fill="#FFF" fill-rule="nonzero"><path d="M10.58 10.09a.75.75 0 00.53-.22l7.06-7.06v3.65a.75.75 0 101.5 0V1a.75.75 0 00-.75-.75h-5.46a.75.75 0 100 1.5h3.65L10 8.81a.75.75 0 00.53 1.28h.05z"/><path d="M19 10.81a.75.75 0 00-.75.75v6.2c0 .27-.22.49-.49.49H2.24a.49.49 0 01-.49-.49V2.24c0-.27.22-.49.49-.49h5.87a.75.75 0 000-1.5H2.24a2 2 0 00-2 2v15.51a2 2 0 002 2h15.52a2 2 0 002-2v-6.2a.75.75 0 00-.76-.75z"/></g></svg>
                                <span>+39 328 091 9986</span>
                            </a>         
                        </div>
    
                        <div class="block">
                            <a title="Email" data-router-disabled href="mailto:info@sofiaart.info?subject=Hello">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><g fill="#FFF" fill-rule="nonzero"><path d="M10.58 10.09a.75.75 0 00.53-.22l7.06-7.06v3.65a.75.75 0 101.5 0V1a.75.75 0 00-.75-.75h-5.46a.75.75 0 100 1.5h3.65L10 8.81a.75.75 0 00.53 1.28h.05z"/><path d="M19 10.81a.75.75 0 00-.75.75v6.2c0 .27-.22.49-.49.49H2.24a.49.49 0 01-.49-.49V2.24c0-.27.22-.49.49-.49h5.87a.75.75 0 000-1.5H2.24a2 2 0 00-2 2v15.51a2 2 0 002 2h15.52a2 2 0 002-2v-6.2a.75.75 0 00-.76-.75z"/></g></svg>
                                <span>info@sofiaart.info</span>
                            </a>         
                        </div>
                    </div>
                </div>
    
                <div class="container-fluid third-gallery-title">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="c-section-title">
                                <span class="c-section-title__slash">/</span>
                                <span class="c-section-title__num">01</span>
                                <h3 class="c-section-title__title">Contact me</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <?php partial("form") ?>
            </main>
            <?php partial("footer");?>
        </div>
    </div>
</div>

<?php get_footer();?>