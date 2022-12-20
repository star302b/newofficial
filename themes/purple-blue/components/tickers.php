<section class="js--tickers-section" data-name="Tickers" data-description="...">
    <div class="ticker-section">
        <div class="js--tickers tickers-slider" style="display: flex;">

            <?php
            for($i=10; $i < 40; $i++) :?>
                <div>
                    <div class="crypto-item-container large">
                        <img src=https://www.countryflags.com/wp-content/uploads/germany-flag-png-large.png" alt="">
                        <div class="crypto-item-cont-text">
                            <div class="crypto-item-cont-text-name">
                                <span class="coin-name">profited $350 in last 24 hours</span>
                            </div>
                            <div class="up-change">
                                <span class="coin-price">Alexey B</span>
                                <span class="coin-value">from Ukraine</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

<style>
    .crypto-item-container.large{
        min-width: 300px;
    }
    .crypto-item-container img{
        width: 50px;
        height: 50px;
        border-radius: 50px;
    }
    .crypto-item-container .crypto-item-cont-text{
        display: flex;
        flex-direction: column-reverse;
    }
    .crypto-item-container .crypto-item-cont-text .up-change{
        margin-bottom: 5px;
        font-size: 16px;
    }
</style>
