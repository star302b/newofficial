<footer class="site-footer">
    <div class="container">
        <ul class="site-lang">
            <li>
                <a href="https://bitcoinmotion.io/nl/" title="Dutch">
                    <img src="/assets/img/flags/nl.png" width="20" height="20" alt="Dutch">
                </a>
            </li>
            <li>
                <a href="https://bitcoinmotion.io/" title="English">
                    <img src="/assets/img/flags/en.png" width="20" height="20" alt="English">
                </a>
            </li>
            <li>
                <a href="https://bitcoinmotion.io/de/" title="German">
                    <img src="/assets/img/flags/de.png" width="20" height="20" alt="German">
                </a>
            </li>
        </ul>
        <div class="disclamer">
            <p><strong>Important Risk Note:</strong> Trading can generate notable benefits; however, it also involves a risk of partial/full funds loss, and should be considered by initial investors. Around 70 percent of the investors will lose money. Carefully read our terms &amp; conditions and disclaimer page before investing. Customers must be cognizant of their individual capital gain tax liability in their country of residence. It is against the law to solicit United States persons to buy and sell commodity options, even if they are called ‘prediction’ contracts unless they are listed for trading and traded on a CFTC-registered exchange or unless legally exempt.</p>
        </div>
        <ul class="text-center footer-menu">
            <li><a href="/privacy-policy.php">Privacy Policy</a></li>
            <li><a href="/terms-conditions.php">Terms &amp; Conditions</a></li>
        </ul>
    </div>
</footer>
<style>

    .js--tickers-section{
        z-index: 100;
        position: relative;
    }
    @media screen and (max-width: 767px) {
        body{
            font-size: 14px;
        }
        .section-form .form-title{
            font-size: 2rem;
        }
        .sign-area .form-bottom,
        .content-section a{
            font-size: 14px;
        }
        .content-section .sign-area{
            margin-left: -30px;
            margin-right: -30px;
            width: auto;
        }
        .steps-section--variant-1 .col{
            margin: 6rem 0;
        }
        .button{
            font-size: 14px;
        }

        .live-deposit{
            display: none !important;
        }
        .coin-widget .coin-table *,
        .coin-widget .coin-table  tr td,
        .coin-widget .coin-table thead tr td, .coin-widget .coin-table thead tr th{
            font-size: 14px !important;
        }

        .coin-widget .coin-table  tr th:last-child,
        .coin-widget .coin-table  tr td:last-child{
            display: none;
        }

    }
</style>
<!--Modal Boxes-->
<div class="modal-box" id="login">
    <div class="sign-area">
        <div class="close-modal-button js--close-modal">
            <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"><g><g><path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717 L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859 c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287 l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285 L284.286,256.002z"/></g></g></svg>
        </div>

        <form action="">
            <div class="input-row">
                <label>Email: </label>
                <input type="text">
            </div>
            <div class="input-row">
                <label>Password: </label>
                <input type="password">
            </div>

            <div class="input-row text-center" style="margin-top: 1em;">
                <button class="button button-primary">Login</button>
            </div>
        </form>

        <div class="form-bottom">
            <p>Don't have an account? <a href="#register" class="js--open-modal">Register</a></p>
        </div>
    </div>
</div>
<div class="modal-box" id="register">
    <div class="modal-inner">
        <div class="close-modal-button js--close-modal">
            <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve"><g><g><path d="M284.286,256.002L506.143,34.144c7.811-7.811,7.811-20.475,0-28.285c-7.811-7.81-20.475-7.811-28.285,0L256,227.717 L34.143,5.859c-7.811-7.811-20.475-7.811-28.285,0c-7.81,7.811-7.811,20.475,0,28.285l221.857,221.857L5.858,477.859 c-7.811,7.811-7.811,20.475,0,28.285c3.905,3.905,9.024,5.857,14.143,5.857c5.119,0,10.237-1.952,14.143-5.857L256,284.287 l221.857,221.857c3.905,3.905,9.024,5.857,14.143,5.857s10.237-1.952,14.143-5.857c7.811-7.811,7.811-20.475,0-28.285 L284.286,256.002z"/></g></g></svg>
        </div>


        <div class="sign-area">
            <img class="modal-logo" width="385" height="53" src="/assets/img/bitsoft-logo.png" alt="bitcoin-motion">
            <div class="form-title">
                <p>Create Account today</p>
            </div>
            <form action="">
                <span class="error form-error hidden">Sorry you should fill some of the fields</span>
                <div class="input-row">
                    <label>Name: </label>
                    <div class="field-wrapper">
                        <span class="error hidden"></span>
                        <input type="text" id="first_name2" name="first_name" autocomplete="off" title="Please enter 3-15 characters (alphabets only), no spaces allowed" required="" pattern="[A-Za-z][A-Za-z ]{2,40}">
                    </div>
                </div>
                <div class="input-row">
                    <label>Surname: </label>
                    <div class="field-wrapper">
                        <span class="error hidden"></span>
                        <input type="text" id="last_name2" name="last_name" required="" autocomplete="off" pattern="[A-Za-z][A-Za-z ]{2,40}" title="Please enter 3-15 characters (alphabets only), no spaces allowed">
                    </div>
                </div>
                <div class="input-row">
                    <label>Email: </label>
                    <div class="field-wrapper">
                        <span class="error hidden"></span>
                        <input type="email" id="email2" name="email" required="">
                    </div>
                </div>
                <div class="input-row">
                    <label>Phone: </label>
                    <div class="field-wrapper">
                        <span class="error hidden"></span>
                        <input type="text" name="phone_number" class="phone-input">
                    </div>
                </div>

                <!--                            <input type="hidden" id="funnel_id2" value="">-->
                <!--                            <input type="hidden" id="dial_code2">-->
                <!--                            <input type="hidden" id="redirect_page2" value="https://bitcoinmotion.io/ok/">-->
                <!--                            <input type="hidden" id="iso2" value="en">-->
                <!---->
                <!--                            <input type="hidden" id="main_post_id2" value="1">-->
                <!---->
                <!--                            <input type="hidden" id="country2" value="UA">-->
                <!--                            <input type="hidden" id="ip_address2" value="5.255.174.162">-->
                <!--                            <input type="hidden" id="fulfilment_id2" value="">-->
                <!--                            <input type="hidden" id="custom_12" name="custom_1" value="seo">-->

                <div class="input-row text-center" style="margin-top: 1em">
                    <div class="ajax-loader-gif">
                        <img src="assets/img/ajax-loader-table.gif">
                    </div>
                    <button class="button button-primary"
                            type="submit">Register for Free
                    </button>
                </div>
            </form>

            <div class="form-bottom">
                <p>By clicking the button you agree and accept the <a href="/privacy-policy.php">Privacy Policy</a> and <a href="/terms-conditions.php">Terms &amp; Conditions</a></p>
            </div>

            <div class="modal-safe flex-xs-row flex-align-center flex-justify-between">
                <img src="assets/img/bitgo.png">
                <img src="assets/img/norton.png">
                <img src="assets/img/mcafee.png">
            </div>
        </div>
    </div>
</div>
<!--Scripts-->
<script src="assets/js/main.min.js"></script>
</body>
</html>