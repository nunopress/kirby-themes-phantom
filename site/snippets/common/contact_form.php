<?php if ($site->email()->isNotEmpty()): ?>
    <section id="contact">
        <h2>Get in touch</h2>

        <?php if (isset($sending_email_response)) : ?>
            <?php if (true !== $sending_email_response): ?>
                <h3>Form sending error: <?php echo $sending_email_response ?></h3>
            <?php else: ?>
                <h3>Form sending successfully! Thanks for contact us.</h3>
            <?php endif ?>
        <?php endif; ?>

        <form method="post" action="#contact">
            <div class="field half first">
                <input type="text" name="contact[name]" id="name" placeholder="Name" />
            </div>

            <div class="field half">
                <input type="email" name="contact[email]" id="email" placeholder="Email" />
            </div>

            <div class="field">
                <textarea name="contact[message]" id="message" placeholder="Message"></textarea>
            </div>

            <input type="text" name="contact[antibot]" id="antibot" style="display:none" />

            <ul class="actions">
                <li><input type="submit" value="Send" name="contact[submit]" class="special" /></li>
            </ul>
        </form>
    </section>
<?php endif; ?>