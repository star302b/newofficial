<main class="site-wrapper">
    <?php include_once('components/hero-banner.php'); ?>
    <?php get_template_part('template-parts/tickers'); ?>
    <?php if( get_field('hide_show_body','option') ): ?>
    <?php include_once('components/content.php'); ?>
    <?php endif; ?>
    <?php if( get_field('hide_show_short_y','option') ): ?>
    <?php include_once('components/short-y.php'); ?>
    <?php endif; ?>
    <?php if( get_field('hide_show_short_x','option') ): ?>
    <?php include_once('components/short-x.php'); ?>
    <?php endif; ?>
    <?php include_once('components/table.php'); ?>
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
        Just 1 minute ago a user sold NOIA with 2.1% profit on KuCoin.
    </p>

    <script>
        const text = document.getElementById('deposit-message')
        const block = document.getElementById('deposit-message-block')
        const arr = [
          'Just 1 minute ago a user sold Pussy with 2.1% profit on KuCoin.',
          'Just 3 minute ago a user sold Elly with 4.3% profit on Coinbase.',
          'Just 2 minute ago a user sold Gangster with 4% profit on Coinbase.',
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