<div class="sign-area">
    <div class="form-title">
        <p>Create Account today</p>
    </div>
    <form action="">
        <span class="error form-error hidden">Sorry you should fill some of the fields</span>
        <div class="input-row">
            <label>Name: </label>
            <div class="field-wrapper">
                <span class="error hidden"></span>
                <input placeholder="Name: " type="text" id="first_name2" name="first_name" autocomplete="off" title="Please enter 3-15 characters (alphabets only), no spaces allowed" required="" pattern="[A-Za-z][A-Za-z ]{2,40}">
            </div>
        </div>
        <div class="input-row">
            <label>Surname: </label>
            <div class="field-wrapper">
                <span class="error hidden"></span>
                <input placeholder="Surname: " type="text" id="last_name2" name="last_name" required="" autocomplete="off" pattern="[A-Za-z][A-Za-z ]{2,40}" title="Please enter 3-15 characters (alphabets only), no spaces allowed">
            </div>
        </div>
        <div class="input-row">
            <label>Email: </label>
            <div class="field-wrapper">
                <span class="error hidden"></span>
                <input placeholder="Email: " type="email" id="email2" name="email" required="">
            </div>
        </div>
        <div class="input-row">
            <label>Phone: </label>
            <div class="field-wrapper">
                <span class="error hidden"></span>
                <input placeholder="Phone: " type="text" name="phone_number" class="phone-input">
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
    <?php include_once('safe.php'); ?>
</div>