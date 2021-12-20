<div class="newsletter_sb">
    <div id="news-success" class="alert alert-primary" style="display: none;" role="alert">
        ✉️ Successfully subscribed.
      </div>
    <form id="newslet" action="">


        <h1>Join our Newsletter</h1>

        <?php echo csrf_field(); ?>

        <div class="email-box_newsletter">
            <i class="fas fa-envelope"></i>
            <input required class="newsletter_email" type="email" name="email" placeholder="Enter Your Email"
                onchange="diplay_wide(event)">
            <button class="newsletter_btn" id="newsletter_bttn" type="submit">Subscribe</button>

        </div>


        <div class="upper-wrapper">
            <div class="wrapper">
                <input required type="checkbox" id="switch" style="width: 10px; height: 10px;">
                <label for="switch" class="switch_label">
                    <span class="onf_btn"></span>
                </label>
            </div>
            <div class="switch_box_text">
                <p>I have read the <a href="#" style="color: wheat;font-size: 15px;">Terms And Conditions</a> which
                    tells me how Energy Boss Drink will manage my personal information</p>
            </div>
        </div>

    </form>

</div>
<?php /**PATH E:\RF\laragon\www\bossdrinks\project\resources\views/components/newsletter.blade.php ENDPATH**/ ?>