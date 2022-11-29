<footer>
	<div id="ctc-info">
		<div class="row flex">
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d92196.29507851462!2d-79.52041191379304!3d43.770072580978486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b339ab16ece0d%3A0x6ae9cc1ca5699cd8!2sMetropolitan%20Bible%20Baptist%20Church%20Toronto!5e0!3m2!1sen!2sca!4v1665884768299!5m2!1sen!2sca" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="text-holder">
				<h2>CONTACT INFO</h2>
				<p><strong>Phone: </strong><a href="tel:<?php $this->info("phone"); ?>"><?php $this->info("phone"); ?></a></p>
				<p><strong>Email: </strong><a href="mailto:<?php $this->info("email"); ?>"><?php $this->info("email"); ?></a></p>
				<p><strong>Donation: </strong><a href="mailto:mbbctoronto@yahoo.ca">mbbctoronto@yahoo.ca</a></p>
				<p><strong>Address: </strong> <?php $this->info("address"); ?></p>
				<a href="<?php $this->info('fb_link') ?>" target="_blank" class="socials">F</a>
			</div>
			

		</div>
	</div>
	<div id="ft-nav">
		<div class="row flex">
			<a href=""><img src="public/images/common/logo.jpg" alt="MBBC Toronto logo"></a>
			<nav>
				<ul>
					<li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">HOME</a></li>
					<li <?php $this->helpers->isActiveMenu("about"); ?>><a href="<?php echo URL ?>about#content">ABOUT US</a></li>
					<li <?php $this->helpers->isActiveMenu("ministries"); ?>><a href="<?php echo URL ?>ministries#content">MINISTRIES</a></li>
					<li <?php $this->helpers->isActiveMenu("events"); ?>><a href="<?php echo URL ?>events#content">EVENTS</a></li>
					<li <?php $this->helpers->isActiveMenu("testimonies"); ?>><a href="<?php echo URL ?>testimonies#content">TESTIMONIES</a></li>
					<li <?php $this->helpers->isActiveMenu("gift"); ?>><a href="<?php echo URL ?>gift#content">GOD'S GIFT</a></li>
					<li <?php $this->helpers->isActiveMenu("statement"); ?>><a href="<?php echo URL ?>statement#content">STATEMENT OF FAITH</a></li>
				</ul>
			</nav>
		</div>		
	</div>
	<div id="top-header">
		<div class="row">
			<p class="copy">
			Copyright © <?php echo date("Y"); ?>. <?php $this->info("company_name"); ?>. All Rights Reserved.
			<?php if ($this->siteInfo['policy_link']) : ?>
				<a href="<?php $this->info("policy_link"); ?>">Privacy Policy</a>.
			<?php endif ?>
		</p>
		</div>
	</div>

	
</footer>
<textarea class="destroy-on-load"></textarea>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if ($this->siteInfo['cookie']) : ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
	<script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])) : ?>
	<textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
	<script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
	<script>
		var captchaCallBack = function() {
			$('.g-recaptcha').each(function(index, el) {
				var recaptcha = grecaptcha.render(el, {
					'sitekey': '<?php $this->info("site_key"); ?>'
				});
				$('.destroy-on-load').remove();
			})
		};

		$('.consentBox').click(function() {
			if ($(this).is(':checked')) {
				if ($('.termsBox').length) {
					if ($('.termsBox').is(':checked')) {
						$('.ctcBtn').removeAttr('disabled');
					}
				} else {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});

		$('.termsBox').click(function() {
			if ($(this).is(':checked')) {
				if ($('.consentBox').is(':checked')) {
					$('.ctcBtn').removeAttr('disabled');
				}
			} else {
				$('.ctcBtn').attr('disabled', true);
			}
		});
	</script>

<?php endif; ?>


<?php if ($view == "gallery") : ?>
	<script type="text/javascript" src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
	<script type="text/javascript" src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
	<script>
		$('#gall1').pajinate({
			num_page_links_to_display: 3,
			items_per_page: 10
		});
		$('.fancy').fancybox({
			helpers: {
				title: {
					type: 'over'
				}
			}
		});
	</script>
<?php endif; ?>

<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>

</html>