<?php
$footer_table = get_field('footer_table','options',false);
$footer_table_title =get_field('footer_table_title','option',false);
?>
<section class="content-section light-section">


    <div class="container">
        <div class="section-header">
            <h2><?php echo do_shortcode( $footer_table_title ); ?></h2>
        </div>
        <div class="row">
            <div class="col coin-widget">
                <table id="coinTable" data-showrows="15" data-show-count="50" class="js--sort-table coin-table">
                                       <?php if( ICL_LANGUAGE_CODE == 'en'): ?>
                        <tr>
                            <td>🌍 Countries</td>
                            <td>Globally Available (Except USA)</td>
                        </tr>
                        <tr>
                            <td>✊ Withdrawal Fee</td>
                            <td>No Fees</td>
                        </tr>
                        <tr>
                            <td>💸 Withdrawal Time</td>
                            <td>Same Day</td>
                        </tr>
                        <tr>
                            <td>💰 Deposit Fee</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>💳 Deposit Methods</td>
                            <td>Visa, Mastercard, Amex , Cryptocurrency, Bank Transfer, Paypal, Yandex, Skrill, Neteller</td>
                        </tr>
                        <tr>
                            <td>🤖 Trading Types</td>
                            <td>Crypto, Stocks, Commodities, ETFs, Index</td>
                        </tr>
                        <tr>
                            <td>💱 Trading Pairs</td>
                            <td>BTC/USD, ETH/USD, XRP/USD, USDT/USD, BTC/USDT, ETH/USDT, FAANG</td>
                        </tr>
                        <tr>
                            <td>🖥️ Operating Systems</td>
                            <td>iOS, Android, MacOS, Windows, Linux</td>
                        </tr>
                        <tr>
                            <td>💻 Platform Availability</td>
                            <td>Android App, iOS App, Windows App, Web App</td>
                        </tr>
                        <tr>
                            <td>🤑 Registration Cost</td>
                            <td>Free</td>
                        </tr>
                        <tr>
                            <td>👨‍💼 Features</td>
                            <td>Personal Account Manager, Same Day Withdrawal, Free Registration, 24/7 Customer Support</td>
                        </tr>
                        <tr>
                            <td>👩‍💼 Support</td>
                            <td>Personal Account Manager, 24/7 Support</td>
                        </tr>
                    <?php elseif( ICL_LANGUAGE_CODE == 'tr'): ?>
                        <tr>
                            <td>🌍 Ülkeler</td>
                            <td>Küresel olarak mevcut (ABD hariç)</td>
                        </tr>
                        <tr>
                            <td>✊ para çekme ücreti</td>
                            <td>Ücret Yok</td>
                        </tr>
                        <tr>
                            <td>💸 Para çekme süresi</td>
                            <td>Aynı gün</td>
                        </tr>
                        <tr>
                            <td>💰 Depozito ücreti</td>
                            <td>Özgür</td>
                        </tr>
                        <tr>
                            <td>💳 Depozito Yöntemleri</td>
                            <td>Visa, Mastercard, Amex, Kripto para birimi, banka transferi, PayPal, Yandex, Skrill, Neteller</td>
                        </tr>
                        <tr>
                            <td>🤖 Ticaret Türleri</td>
                            <td>Kripto, stoklar, emtialar, ETF'ler, dizin</td>
                        </tr>
                        <tr>
                            <td>💱 Ticaret Çiftleri</td>
                            <td>BTC/USD, ETH/USD, XRP/USD, USDT/USD, BTC/USDT, ETH/USDT, Faang</td>
                        </tr>
                        <tr>
                            <td>🖥️ İşletim sistemleri</td>
                            <td>iOS, Android, MacOS, Windows, Linux</td>
                        </tr>
                        <tr>
                            <td>💻 Platform Kullanılabilirliği</td>
                            <td>Android uygulaması, iOS uygulaması, Windows uygulaması, web uygulaması</td>
                        </tr>
                        <tr>
                            <td>🤑 Kayıt maliyeti</td>
                            <td>Özgür</td>
                        </tr>
                        <tr>
                            <td>👨‍💼 Özellikler</td>
                            <td>Kişisel Hesap Yöneticisi, Aynı Gün Para Çekme, Ücretsiz Kayıt, 7/24 Müşteri Desteği</td>
                        </tr>
                        <tr>
                            <td>👩‍💼 Destek</td>
                            <td>Kişisel Hesap Yöneticisi, 7/24 destek</td>
                        </tr>
                    <?php elseif( ICL_LANGUAGE_CODE == "nl" ): ?>
                        <tr>
                            <td>🌍 Landen</td>
                            <td>Wereldwijd beschikbaar (behalve VS)</td>
                        </tr>
                        <tr>
                            <td>✊ Intrekkingskosten</td>
                            <td>Geen kosten</td>
                        </tr>
                        <tr>
                            <td>💸 Terugtrekkingstijd</td>
                            <td>Dezelfde dag</td>
                        </tr>
                        <tr>
                            <td>💰 Deposito</td>
                            <td>Vrij</td>
                        </tr>
                        <tr>
                            <td>💳 Depositiemethoden</td>
                            <td>Visa, MasterCard, Amex, Cryptocurrency, Bank Transfer, PayPal, Yandex, Skrill, Neteller</td>
                        </tr>
                        <tr>
                            <td>🤖 Handelstypen</td>
                            <td>Crypto, aandelen, grondstoffen, ETF's, index</td>
                        </tr>
                        <tr>
                            <td>💱 Handelsparen</td>
                            <td>BTC/USD, ETH/USD, XRP/USD, USDT/USD, BTC/USDT, ETH/USDT, FAANG</td>
                        </tr>
                        <tr>
                            <td>🖥️ Besturingssystemen</td>
                            <td>iOS, Android, MacOS, Windows, Linux</td>
                        </tr>
                        <tr>
                            <td>💻 Platformbeschikbaarheid</td>
                            <td>Android -app, iOS -app, Windows -app, web -app</td>
                        </tr>
                        <tr>
                            <td>🤑 Registratiekosten</td>
                            <td>Vrij</td>
                        </tr>
                        <tr>
                            <td>👨‍💼 Functies</td>
                            <td>Persoonlijke accountmanager, intrekking van dezelfde dag, gratis registratie, 24/7 klantenondersteuning</td>
                        </tr>
                        <tr>
                            <td>👩‍💼 Steun</td>
                            <td>Persoonlijke accountmanager, 24/7 ondersteuning</td>
                        </tr>
                    <?php elseif( ICL_LANGUAGE_CODE == "da" ): ?>
                        <tr>
                            <td>🌍 Lande</td>
                            <td>Globalt tilgængelig (undtagen USA)</td>
                        </tr>
                        <tr>
                            <td>✊ Tilbagetrækningsgebyr</td>
                            <td>Ingen gebyrer</td>
                        </tr>
                        <tr>
                            <td>💸 Tilbagetrækningstid</td>
                            <td>Samme dag</td>
                        </tr>
                        <tr>
                            <td>💰 Depositumsgebyr</td>
                            <td>Ledig</td>
                        </tr>
                        <tr>
                            <td>💳 Indbetalingsmetoder</td>
                            <td>Visa, Mastercard, Amex, Cryptocurrency, Bank Transfer, PayPal, Yandex, Skrill, Neteller</td>
                        </tr>
                        <tr>
                            <td>🤖 Handelstyper</td>
                            <td>Krypto, aktier, råvarer, ETF'er, indeks</td>
                        </tr>
                        <tr>
                            <td>💱 Handelspar</td>
                            <td>BTC/USD, ETH/USD, XRP/USD, USDT/USD, BTC/USDT, ETH/USDT, FAANG</td>
                        </tr>
                        <tr>
                            <td>🖥️ Operativsystemer</td>
                            <td>iOS, Android, MacOS, Windows, Linux</td>
                        </tr>
                        <tr>
                            <td>💻 Platformtilgængelighed</td>
                            <td>Android App, iOS -app, Windows -app, webapp</td>
                        </tr>
                        <tr>
                            <td>🤑 Registreringsomkostninger</td>
                            <td>Ledig</td>
                        </tr>
                        <tr>
                            <td>👨‍💼 Funktioner</td>
                            <td>Personlig kontoadministrator, tilbagetrækning af samme dag, gratis registrering, 24/7 kundesupport</td>
                        </tr>
                        <tr>
                            <td>👩‍💼 Support</td>
                            <td>Personal Account Manager, 24/7 Support</td>
                        </tr>
                    <?php elseif( ICL_LANGUAGE_CODE == "de" ): ?>
                        <tr>
                            <td>🌍 Länder</td>
                            <td>Weltweit verfügbar (außer USA)</td>
                        </tr>
                        <tr>
                            <td>✊ Abhebegebühr</td>
                            <td>Keine Gebühren</td>
                        </tr>
                        <tr>
                            <td>💸 Auszahlungszeit</td>
                            <td>Gleicher Tag</td>
                        </tr>
                        <tr>
                            <td>💰 Einzahlungsgebühr</td>
                            <td>Frei</td>
                        </tr>
                        <tr>
                            <td>💳 Einzahlungsmethoden</td>
                            <td>Visum, Mastercard, Amex, Kryptowährung, Bankübertragung, Paypal, Yandex, Skrill, Neteller</td>
                        </tr>
                        <tr>
                            <td>🤖 Handelstypen</td>
                            <td>Krypto, Aktien, Rohstoffe, ETFs, Index</td>
                        </tr>
                        <tr>
                            <td>💱 Handelspaare</td>
                            <td>BTC/USD, ETH/USD, XRP/USD, USDT/USD, BTC/USDT, ETH/USDT, FAANG</td>
                        </tr>
                        <tr>
                            <td>🖥️ Betriebssysteme</td>
                            <td>iOS, Android, MacOS, Windows, Linux</td>
                        </tr>
                        <tr>
                            <td>💻 Verfügbarkeit von Plattform</td>
                            <td>Android -App, iOS -App, Windows -App, Web -App</td>
                        </tr>
                        <tr>
                            <td>🤑 Registrierungskosten</td>
                            <td>Frei</td>
                        </tr>
                        <tr>
                            <td>👨‍💼 Merkmale</td>
                            <td>Personal Account Manager, Auszahlung am selben Tag, kostenlose Registrierung, 24/7 -Kundensupport</td>
                        </tr>
                        <tr>
                            <td>👩‍💼 Die Unterstützung</td>
                            <td>Personal Account Manager, 24/7 Support</td>
                        </tr>
                    <?php elseif( ICL_LANGUAGE_CODE == "fi" ): ?>
                        <tr>
                            <td>🌍 Maat</td>
                            <td>Globaalisti saatavilla (paitsi USA)</td>
                        </tr>
                        <tr>
                            <td>✊ Nostomaksu</td>
                            <td>Ei maksuja</td>
                        </tr>
                        <tr>
                            <td>💸 Vetäytymisaika</td>
                            <td>Samana päivänä</td>
                        </tr>
                        <tr>
                            <td>💰 Talletusmaksu</td>
                            <td>Vapaa</td>
                        </tr>
                        <tr>
                            <td>💳 Talletusmenetelmät</td>
                            <td>Visa, MasterCard, Amex, Cryptocurrency, Bank Transfer, PayPal, Yandex, Skrill, Netteller</td>
                        </tr>
                        <tr>
                            <td>🤖 Kaupankäynnin tyypit</td>
                            <td>Crypto, varastot, hyödykkeet, ETF: t, indeksi</td>
                        </tr>
                        <tr>
                            <td>💱 Kaupankäyntiparit</td>
                            <td>BTC/USD, ETH/USD, XRP/USD, USDT/USD, BTC/USDT, ETH/USDT, FAANG</td>
                        </tr>
                        <tr>
                            <td>🖥️ Käyttöjärjestelmät</td>
                            <td>iOS, Android, MacOS, Windows, Linux</td>
                        </tr>
                        <tr>
                            <td>💻 Alustan saatavuus</td>
                            <td>Android -sovellus, iOS -sovellus, Windows App, Web -sovellus</td>
                        </tr>
                        <tr>
                            <td>🤑 Rekisteröintikustannukset</td>
                            <td>Vapaa</td>
                        </tr>
                        <tr>
                            <td>👨‍💼 ominaisuudet</td>
                            <td>Henkilökohtainen tilinhoitaja, sama päivä nosto, ilmainen rekisteröinti, 24/7 asiakastuki</td>
                        </tr>
                        <tr>
                            <td>👩‍💼 Tuki</td>
                            <td>Henkilökohtainen tilinhoitaja, 24/7 -tuki</td>
                        </tr>
                    <?php elseif( ICL_LANGUAGE_CODE == "fr" ): ?>
                        <tr>
                            <td>🌍 Des pays</td>
                            <td>Disponible à l'échelle mondiale (sauf USA)</td>
                        </tr>
                        <tr>
                            <td>✊ frais de retrait</td>
                            <td>Pas de frais</td>
                        </tr>
                        <tr>
                            <td>💸 Délai de retrait</td>
                            <td>Même jour</td>
                        </tr>
                        <tr>
                            <td>💰 Frais de dépôt</td>
                            <td>Libre</td>
                        </tr>
                        <tr>
                            <td>💳 Méthodes de dépôt</td>
                            <td>Visa, MasterCard, Amex, Crypto-monnaie, Transfert bancaire, Paypal, Yandex, Skrill, Neteller</td>
                        </tr>
                        <tr>
                            <td>🤖 Types de trading</td>
                            <td>Crypto, stocks, produits, ETF, indice</td>
                        </tr>
                        <tr>
                            <td>💱 Paires de trading</td>
                            <td>BTC / USD, ETH / USD, XRP / USD, USDT / USD, BTC / USDT, ETH / USDT, FAANG</td>
                        </tr>
                        <tr>
                            <td>🖥️ Systèmes d'exploitation</td>
                            <td>iOS, Android, macOS, Windows, Linux</td>
                        </tr>
                        <tr>
                            <td>💻 Disponibilité de la plate-forme</td>
                            <td>Application Android, application iOS, application Windows, application Web</td>
                        </tr>
                        <tr>
                            <td>🤑 Coût d'enregistrement</td>
                            <td>Libre</td>
                        </tr>
                        <tr>
                            <td>👨‍💼 Fonctionnalités</td>
                            <td>Gestionnaire de compte personnel, retrait le jour même, inscription gratuite, support client 24/7</td>
                        </tr>
                        <tr>
                            <td>👩‍💼 Soutien</td>
                            <td>Gestionnaire de compte personnel, support 24/7</td>
                        </tr>
                    <?php elseif( ICL_LANGUAGE_CODE == "no" ): ?>
                        <tr>
                            <td>🌍 Land</td>
                            <td>Globalt tilgjengelig (unntatt USA)</td>
                        </tr>
                        <tr>
                            <td>✊ Tilbaketrekningsgebyr</td>
                            <td>Ingen gebyrer</td>
                        </tr>
                        <tr>
                            <td>💸 Uttakstid</td>
                            <td>Samme dag</td>
                        </tr>
                        <tr>
                            <td>💰 Innskuddsavgift</td>
                            <td>Gratis</td>
                        </tr>
                        <tr>
                            <td>💳 Innskuddsmetoder</td>
                            <td>Visa, Mastercard, Amex, Cryptocurrency, Bank Transfer, PayPal, Yandex, Skrill, Neteller</td>
                        </tr>
                        <tr>
                            <td>🤖 Handelstyper</td>
                            <td>Krypto, aksjer, varer, ETF -er, indeks</td>
                        </tr>
                        <tr>
                            <td>💱 Handelspar</td>
                            <td>BTC/USD, ETH/USD, XRP/USD, USDT/USD, BTC/USDT, ETH/USDT, FAANG</td>
                        </tr>
                        <tr>
                            <td>🖥️ Operativsystemer</td>
                            <td>iOS, Android, MacOS, Windows, Linux</td>
                        </tr>
                        <tr>
                            <td>💻 Plattform tilgjengelighet</td>
                            <td>Android -app, iOS -app, Windows -app, webapp</td>
                        </tr>
                        <tr>
                            <td>🤑 Registreringskostnad</td>
                            <td>Gratis</td>
                        </tr>
                        <tr>
                            <td>👨‍💼 Funksjoner</td>
                            <td>Personlig kontosjef, samme dag tilbaketrekning, gratis registrering, 24/7 kundesupport</td>
                        </tr>
                        <tr>
                            <td>👩‍💼 Brukerstøtte</td>
                            <td>Personlig kontoansvarlig, 24/7 støtte</td>
                        </tr>
                    <?php elseif( ICL_LANGUAGE_CODE == "pl" ): ?>
                        <tr>
                            <td>🌍 Kraje</td>
                            <td>Dostępne na całym świecie (z wyjątkiem USA)</td>
                        </tr>
                        <tr>
                            <td>✊ Opłata za wypłata</td>
                            <td>Bez opłat</td>
                        </tr>
                        <tr>
                            <td>💸 Czas wycofania</td>
                            <td>Ten sam dzień</td>
                        </tr>
                        <tr>
                            <td>💰 Opłata depozytowa</td>
                            <td>Bezpłatny</td>
                        </tr>
                        <tr>
                            <td>💳 Metody depozytów</td>
                            <td>Visa, MasterCard, Amex, CryptoCurrency, Bank Transfer, PayPal, Yandex, Skrill, Neteller</td>
                        </tr>
                        <tr>
                            <td>🤖 Typy handlowe</td>
                            <td>Krypto, akcje, towary, ETFS, indeks</td>
                        </tr>
                        <tr>
                            <td>💱 Pary handlowe</td>
                            <td>BTC/USD, ETH/USD, XRP/USD, USDT/USD, BTC/USDT, ETH/USDT, FAANG</td>
                        </tr>
                        <tr>
                            <td>🖥️ System operacyjny</td>
                            <td>iOS, Android, MacOS, Windows, Linux</td>
                        </tr>
                        <tr>
                            <td>💻 Dostępność platformy</td>
                            <td>Aplikacja z Androidem, aplikacja na iOS, aplikacja Windows, aplikacja internetowa</td>
                        </tr>
                        <tr>
                            <td>🤑 Koszt rejestracji</td>
                            <td>Bezpłatny</td>
                        </tr>
                        <tr>
                            <td>👨‍💼 Cechy</td>
                            <td>Kierownik konta osobistego, wypłata tego samego dnia, bezpłatna rejestracja, 24/7 Obsługa klienta</td>
                        </tr>
                        <tr>
                            <td>👩‍💼 Wspierać się</td>
                            <td>Kierownik konta osobistego, wsparcie 24/7</td>
                        </tr>
                    <?php elseif( ICL_LANGUAGE_CODE == "pt-pt" ): ?>
                        <tr>
                            <td>🌍 Países</td>
                            <td>Disponível globalmente (exceto EUA)</td>
                        </tr>
                        <tr>
                            <td>✊ Taxa de retirada</td>
                            <td>Sem taxas</td>
                        </tr>
                        <tr>
                            <td>💸 Tempo de retirada</td>
                            <td>Mesmo dia</td>
                        </tr>
                        <tr>
                            <td>💰 Taxa de depósito</td>
                            <td>Livre</td>
                        </tr>
                        <tr>
                            <td>💳 Métodos de depósito</td>
                            <td>Visa, MasterCard, Amex, criptomoeda, transferência bancária, PayPal, Yandex, Skrill, Neteller</td>
                        </tr>
                        <tr>
                            <td>🤖 Tipos de negociação</td>
                            <td>Criptografia, ações, mercadorias, ETFs, índice</td>
                        </tr>
                        <tr>
                            <td>💱 Pares de negociação</td>
                            <td>BTC/USD, ETH/USD, XRP/USD, USDT/USD, BTC/USDT, ETH/USDT, FAANG</td>
                        </tr>
                        <tr>
                            <td>🖥️ Sistemas operacionais</td>
                            <td>iOS, Android, MacOS, Windows, Linux</td>
                        </tr>
                        <tr>
                            <td>💻 Disponibilidade da plataforma</td>
                            <td>Aplicativo Android, aplicativo iOS, aplicativo Windows, Web App</td>
                        </tr>
                        <tr>
                            <td>🤑 Custo de registro</td>
                            <td>Livre</td>
                        </tr>
                        <tr>
                            <td>👨‍💼 Características</td>
                            <td>Gerente de contas pessoais, retirada no mesmo dia, registro gratuito, suporte ao cliente 24 horas por dia, 7 dias por semana</td>
                        </tr>
                        <tr>
                            <td>👩‍💼 Apoiar</td>
                            <td>Gerente de contas pessoais, suporte 24/7</td>
                        </tr>
                    <?php elseif( ICL_LANGUAGE_CODE == "es" ): ?>
                        <tr>
                            <td>🌍 Países</td>
                            <td>Disponible a nivel mundial (excepto EE. UU.)</td>
                        </tr>
                        <tr>
                            <td>✊ Cargo por retiro</td>
                            <td>Sin cargos</td>
                        </tr>
                        <tr>
                            <td>💸 Tiempo de retiro</td>
                            <td>Mismo día</td>
                        </tr>
                        <tr>
                            <td>💰 Tarifa de depósito</td>
                            <td>Libre</td>
                        </tr>
                        <tr>
                            <td>💳 Métodos de depósito</td>
                            <td>Visa, MasterCard, AMEX, Criptomoneda, Transferencia bancaria, PayPal, Yandex, Skrill, Neteller</td>
                        </tr>
                        <tr>
                            <td>🤖 Tipos de negociación</td>
                            <td>Crypto, acciones, productos básicos, ETF, índice</td>
                        </tr>
                        <tr>
                            <td>💱 Parejas comerciales</td>
                            <td>BTC/USD, ETH/USD, XRP/USD, USDT/USD, BTC/USDT, ETH/USDT, FAANG</td>
                        </tr>
                        <tr>
                            <td>🖥️ Sistemas operativos</td>
                            <td>iOS, Android, MacOS, Windows, Linux</td>
                        </tr>
                        <tr>
                            <td>💻 Disponibilidad de la plataforma</td>
                            <td>Aplicación Android, aplicación iOS, aplicación de Windows, aplicación web</td>
                        </tr>
                        <tr>
                            <td>🤑 Costo de registro</td>
                            <td>Libre</td>
                        </tr>
                        <tr>
                            <td>👨‍💼 Características</td>
                            <td>Gerente de cuenta personal, retiro del mismo día, registro gratuito, atención al cliente 24/7</td>
                        </tr>
                        <tr>
                            <td>👩‍💼 Apoyo</td>
                            <td>Gerente de cuenta personal, soporte 24/7</td>
                        </tr>
                    <?php elseif( ICL_LANGUAGE_CODE == "sv" ): ?>
                        <tr>
                            <td>🌍 Länder</td>
                            <td>Globalt tillgängligt (utom USA)</td>
                        </tr>
                        <tr>
                            <td>✊ Uttagsavgift</td>
                            <td>Inga avgifter</td>
                        </tr>
                        <tr>
                            <td>💸 Uttagstid</td>
                            <td>Samma dag</td>
                        </tr>
                        <tr>
                            <td>💰 Avgiftsavgift</td>
                            <td>Fri</td>
                        </tr>
                        <tr>
                            <td>💳 Insättningsmetoder</td>
                            <td>Visa, Mastercard, Amex, Cryptocurrency, Bank Transfer, PayPal, Yandex, Skrill, Neteller</td>
                        </tr>
                        <tr>
                            <td>🤖 Handelstyper</td>
                            <td>Krypto, lager, varor, ETF: er, index</td>
                        </tr>
                        <tr>
                            <td>💱 Handelspar</td>
                            <td>BTC/USD, ETH/USD, XRP/USD, USDT/USD, BTC/USDT, ETH/USDT, FAANG</td>
                        </tr>
                        <tr>
                            <td>🖥️ Operativsystem</td>
                            <td>iOS, Android, MacOS, Windows, Linux</td>
                        </tr>
                        <tr>
                            <td>💻 Plattformstillgänglighet</td>
                            <td>Android -app, iOS -app, Windows -app, webbapp</td>
                        </tr>
                        <tr>
                            <td>🤑 Registreringskostnad</td>
                            <td>Fri</td>
                        </tr>
                        <tr>
                            <td>👨‍💼 Funktioner</td>
                            <td>Personlig kontoansvarig, samma dag uttag, gratis registrering, 24/7 kundsupport</td>
                        </tr>
                        <tr>
                            <td>👩‍💼 Stöd</td>
                            <td>Personlig kontoansvarig, 24/7 support</td>
                        </tr>
                    <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>