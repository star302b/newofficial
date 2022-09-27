<?php
/*
 * Template Name: Thanks Page
 */
    get_header();
?>
    <main class="site-wrapper">
        <section class="content-section light-section" data-name="Article" data-description="Without image, Long Content">
            <div class="container">
                <div class="fow flex-row flex-align-center">
                    <div class="col">
                        <div class="typo-wrapper">
                        <?php if( ICL_LANGUAGE_CODE == "de" ): ?>
                            <h2>Willkommen bei <?php echo do_shortcode('[XYZ]'); ?></h2>
Sie sind nur noch wenige Schritte von der Einrichtung Ihres Kontos entfernt.<span class="highlight">Achten Sie daher sehr genau darauf</span>, dass <a href="#">Ihr System korrekt eingerichtet ist.</a>
<h2>Überprüfung und Einrichtung von Telefonanrufen</h2>
In diesem Programm (wie Sie gesehen haben) nehmen wir die Sicherheit sehr ernst und um zu überprüfen, ob Sie eine echte Person sind und um Ihr Konto zu validieren, wird einer unserer Startup-Spezialisten Sie innerhalb der nächsten 30 Minuten anrufen. (Mo-Fr).

Wenn Sie nicht erreichbar sind, nehmen Sie bitte den Anruf entgegen und vereinbaren Sie einen Termin zu einem günstigeren Zeitpunkt.
<h2>Selbstaktivierung und wie sie funktioniert</h2>
Wir alle kennen das Sprichwort "Geld macht Geld" - und die Realität ist, dass diese Redewendung leider sehr wahr ist! Was man Ihnen nicht sagt, ist, dass sich ein bisschen Geld sehr schnell in viel Geld verwandeln kann, wenn Sie in der Lage sind, Ihre Gewinne über einen kurzen Zeitraum zu vervielfachen!

Auf der nächsten Seite werden Sie zu unserem sorgfältig ausgewählten Partner weitergeleitet, um Ihr Konto zu aktivieren, indem Sie Ihr kleines Startkapital einzahlen.

Das Geld, das Sie einzahlen, ist Ihr Geld und Sie müssen nicht alles auf einmal verwenden. Sie können mit kleinen Beträgen beginnen, um zu sehen, wie das System funktioniert, und denken Sie daran, dass Sie Ihr Kapital jederzeit abheben können.

Wenn Sie nicht sicher sind, wie Sie Ihr Konto selbst aktivieren können, gehen Sie unten zu Ihrem Konto und warten Sie darauf, dass einer unserer Start-up-Spezialisten Sie innerhalb der nächsten 30 Minuten anruft. (Mo-Fr)
                        <?php elseif( ICL_LANGUAGE_CODE == "nl" ): ?>
                            <h2>Welkom bij <?php echo do_shortcode('[XYZ]'); ?></h2>
U bent slechts een paar korte stappen verwijderd van het opzetten van uw account, <span class="highlight">dus let heel goed op hier</span> als je nodig hebt om <a href="#">zorgen dat uw systeem correct is ingesteld.</a>
<h2>Telefoongesprek Verificatie &amp; Instelling</h2>
In dit programma (zoals u hebt gezien) nemen we veiligheid zeer serieus en om te verifiëren dat u een echte persoon bent en om uw account te valideren, zal een van onze start-up specialisten u bellen binnen de komende 30 minuten. (ma-vr).

Als u niet beschikbaar bent, neem dan het gesprek aan en maak een afspraak voor een geschikter tijdstip.
<h2>Zelfactivering &amp; Hoe het werkt</h2>
We kennen allemaal het gezegde "geld maakt geld" - en de realiteit is, dat deze zin helaas zeer waar is! Wat mensen u niet vertellen is dat, als u in staat bent om uw winsten te vermenigvuldigen over een korte periode van tijd, een beetje geld kan veranderen in heel veel geld heel snel!

Op de volgende pagina wordt u doorgestuurd naar onze zorgvuldig geselecteerde partner om uw account te activeren door uw kleine startkapitaal te storten.

Het geld dat u stort is uw geld en u hoeft het niet allemaal in een keer te gebruiken, u kunt beginnen met kleine bedragen om te zien hoe het systeem werkt en onthoud, u kunt uw kapitaal op elk gewenst moment opnemen.

Als u niet zeker weet hoe u uw account zelf kunt activeren, ga dan naar uw account hieronder en wacht dan tot een van onze start-up specialisten u binnen 30 minuten belt. (ma-vr)
                        <?php else: ?>
                            <h2>Welcome to <?php echo do_shortcode('[XYZ]'); ?></h2>
You are only a few short steps away from setting up your Account, <span class="highlight">so pay very close attention here</span> as you need to <a href="#">make sure your system is setup correctly.</a>
<h2>Phone Call Verification &amp; Setup</h2>
In this program (as you have seen) we take security very seriously and in-order to verify you are a real person and to validate your account, one of our start up specialists will be calling you within the next 30mins. (Mon-Fri).

If you aren't available, please answer the call and schedule an appointment for a more convenient time.
<h2>Self Activation &amp; How It Works</h2>
We all know the saying "money makes money" - and the reality is, this phrase is unfortunately very true! What people don't tell you is that, if you are able to multiply your profits over a short period of time, a little bit of money can turn into a lot of money very quickly!

On the next page you will be sent to our carefully selected partner in-order to Activate your account by depositing your small start-up capital.

The money you deposit is your money and you don't have to use it all at once, you can start with small amounts to see how the system works and remember, you can withdraw your capital at any time.

If you are not sure how to Self-Activate your account, go to your account below and then wait for one of our start up specialists to call you within the next 30mins. (Mon-Fri)
                        <?php endif; ?>
                            <div class="banner-cta">
                                <a href="<?php echo do_shortcode('[funnel_account_button_url]'); ?>" class="button border-width-2 border border-color-1"><?php _e('Login Now','trust'); ?> ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();
