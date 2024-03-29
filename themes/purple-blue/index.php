<main class="site-wrapper">
    <?php get_template_part('template-parts/tickers'); ?>
    <?php include_once('components/hero-banner.php'); ?>
    <?php if( get_field('hide_show_body','option') ): ?>
    <?php include_once('components/content.php'); ?>
    <?php endif; ?>
    <?php if( get_field('hide_show_short_x','option') ): ?>
    <?php include_once('components/short-x.php'); ?>
    <?php endif; ?>
    <?php if( get_field('hide_show_short_y','option') ): ?>
    <?php include_once('components/short-y.php'); ?>
    <?php endif; ?>
    <?php include_once('components/table.php'); ?>
    <?php get_template_part('template-parts/trust'); ?>
    <?php if( get_field('hide_show_steps','option') ): ?>
    <?php include_once('components/steps.php'); ?>
    <?php endif; ?>
    <?php if( get_field('hide_show_testimonials','option') ): ?>
    <?php include_once('components/testimonials.php'); ?>
    <?php endif; ?>
    <?php if( get_field('hide_show_faq','option') ): ?>
    <?php include_once('components/faq.php'); ?>
    <?php endif; ?>
    <div class="content-section dark-section section-form dark-section-gradient">
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php get_template_part('template-parts/form'); ?>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="live-deposit hide" id="deposit-message-block">
    <p id="deposit-message">
        <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="324234">
        Just 1 minute ago a user sold Bitcoin with 2.1% profit on <?php echo get_global_option('newofficial_funnel')?>.
    </p>

    <script>
        const text = document.getElementById('deposit-message')
        const block = document.getElementById('deposit-message-block')
        const arr = [
          'Just 1 minute ago a user sold Bitcoin with 2.1% profit on <?php echo get_global_option('newofficial_funnel')?>.',
          'Just 3 minute ago a user sold Ethereum with 4.3% profit on <?php echo get_global_option('newofficial_funnel')?>.',
          'Just 2 minute ago a user sold XRP with 4% profit on <?php echo get_global_option('newofficial_funnel')?>.',
        ]
        function getRndInteger(min, max) {
          return Math.floor(Math.random() * (max - min) ) + min;
        }
        function showLiveWidget () {
          text.innerHTML = `<img src="https://randomuser.me/api/portraits/women/${getRndInteger(1,100)}.jpg" alt="324234">
                            ${arr[getRndInteger(0, arr.length)]}`;
          block.classList.remove('hide');
          setTimeout(function () {block.classList.add('hide')}, 6000);
        }
        setTimeout(showLiveWidget, 6000);
        setInterval(showLiveWidget, 20000)
    </script>
</div>

<?php include_once('components/helpers/css-variables.php'); ?>