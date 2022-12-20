<?php

$features = [
    [
        'bg' => '/assets/img/content/pexels-lukas-590016.jpg',
        'icon' => 'fa-bookmark'
    ],
    [
        'bg' => '/assets/img/content/pexels-olya-kobruseva-8919570.jpg',
        'icon' => 'fa-balance-scale-left'
    ],
    [
        'bg' => '/assets/img/content/pexels-antoni-shkraba-5816296.jpg',
        'icon' => 'fa-check-square'
    ],
    [
        'bg' => '/assets/img/content/pexels-scott-webb-27406.jpg',
        'icon' => 'fa-angle-double-right'
    ]
];

foreach ($features as $c =>$feature) :

?>

<section class="content-section dark-section section-overlay" style="background-image: url(<?php echo $feature['bg']; ?>);" data-name="Features" data-description="Variant <?php echo $c+1;?> (icon - '<?php echo $feature['icon']; ?>')">
    <div class="relative z-2">
        <div class="container">
            <div class="section-header">
                <h2>Benefits of Bitcoin</h2>
                <p>
                    So, why don't we start at the fundamental level with what NFTs are? Put simply, an NFT can be just about
                    any reasonable digital asset that has easily attributable ownership. There is a ledger behind the scenes
                    known as a blockchain that maintains transaction and ownership records on the NFT marketplace.
                </p>
            </div>
            <div class="fow flex-row">
                <div class="col col-md-50">
                    <div class="awesome-list">
                        <ul>
                            <li>
                                <i class="fas <?php echo $feature['icon']; ?>"></i>
                                It is not subject to government input and can therefore not be devalued or suffer from political
                                disputes. Banks also have no input on what happens to Bitcoin, so the individual who owns it is
                                truly in charge.
                            </li>
                            <li>
                                <i class="fas <?php echo $feature['icon']; ?>"></i>
                                Banks cost a lot of money and apply many different fees to their clients. With Bitcoin, it costs
                                next to nothing to hold an account and comes with minimal charges.
                            </li>
                            <li>
                                <i class="fas <?php echo $feature['icon']; ?>"></i>
                                International transfers are just as easy as sending money to your neighbor. Because it has no
                                ties to any country, in particular, you can send it across cyberspace to anyone, anywhere, any
                                time. Transactions are immediate and do not carry the exorbitant additional fees that
                                traditional banking applies.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col col-md-50">
                    <div class="awesome-list">
                        <ul>
                            <li>
                                <i class="fas <?php echo $feature['icon']; ?>"></i>
                                All transactions are recorded and backed up on the Blockchain network. It acts as a sort of ledger
                                to ensure that fraudulent activity does not go unnoticed. From a security standpoint, this is a huge
                                plus.
                            </li>
                            <li>
                                <i class="fas <?php echo $feature['icon']; ?>"></i>
                                You have the option to open a Bitcoin account without using your real name and identity. You need a
                                username and Email, and that is pretty much it. People looking for a little anonymity are sure to
                                enjoy this Bitcoin feature.
                            </li>
                            <li>
                                <i class="fas <?php echo $feature['icon']; ?>"></i>
                                Bitcoin investments are an excellent way to diversify your portfolio and protect your interests.
                                Trading is Bitcoin is also an exciting opportunity, thanks to the fluctuating value and iconic
                                profile of the coin.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endforeach;