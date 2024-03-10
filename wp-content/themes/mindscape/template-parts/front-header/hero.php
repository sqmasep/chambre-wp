<?php $component = \ColibriWP\Theme\View::getData( 'component' ); ?>
<div class="wp-block wp-block-kubio-hero  position-relative wp-block-kubio-hero__outer mindscape-front-header__k__J6FPNZyUrn-outer mindscape-local-722-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/hero" id="hero">
	<?php $component->printBackground(); ?><?php $component->printSeparator(); ?>
	<div class="position-relative wp-block-kubio-hero__inner mindscape-front-header__k__J6FPNZyUrn-inner mindscape-local-722-inner h-navigation-padding h-section-grid-container h-section-boxed-container">
		<script type='text/javascript'>
			(function () {
				// forEach polyfill
				if (!NodeList.prototype.forEach) {
					NodeList.prototype.forEach = function (callback) {
						for (var i = 0; i < this.length; i++) {
							callback.call(this, this.item(i));
						}
					}
				}
				var navigation = document.querySelector('[data-colibri-navigation-overlap="true"], .h-navigation_overlap');
				if (navigation) {
					var els = document
						.querySelectorAll('.h-navigation-padding');
					if (els.length) {
						els.forEach(function (item) {
							item.style.paddingTop = navigation.offsetHeight + "px";
						});
					}
				}
			})();
		</script>
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container mindscape-front-header__k__bgnhUSaQMl-container mindscape-local-723-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-3 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner mindscape-front-header__k__bgnhUSaQMl-inner mindscape-local-723-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-3 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container mindscape-front-header__k__9IGHpldIpw-container mindscape-local-724-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner mindscape-front-header__k__9IGHpldIpw-inner mindscape-local-724-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align mindscape-front-header__k__9IGHpldIpw-align mindscape-local-724-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
							<?php mindscape_theme()->get('front-title')->render(); ?><?php mindscape_theme()->get('front-subtitle')->render(); ?><?php mindscape_theme()->get('buttons')->render(); ?>
						</div>
					</div>
				</div>
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container mindscape-front-header__k__BpxmEB9tT-container mindscape-local-733-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner mindscape-front-header__k__BpxmEB9tT-inner mindscape-local-733-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align mindscape-front-header__k__BpxmEB9tT-align mindscape-local-733-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
							<?php mindscape_theme()->get('front-image')->render(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="position-relative wp-block-kubio-downarrow__outer mindscape-front-header__k__empsMuQwuo-outer mindscape-local-735-outer h-scroll-to__outer d-flex justify-content-center h-down-arrow move-down-bounce" data-kubio-component="downarrow" data-kubio-settings="{&quot;arrowSelector&quot;:&quot;.wp-block-kubio-downarrow__inner&quot;,&quot;scrollTargetSelector&quot;:&quot;.wp-site-blocks &gt; .wp-block-kubio-header + div&quot;}">
			<div class="wp-block wp-block-kubio-downarrow  position-relative wp-block-kubio-downarrow__inner mindscape-front-header__k__empsMuQwuo-inner mindscape-local-735-inner" data-kubio="kubio/downarrow">
				<div class="wp-block wp-block-kubio-icon  position-relative wp-block-kubio-icon__outer mindscape-front-header__k__N2SPnOuwG-outer mindscape-local-736-outer" data-kubio="kubio/icon">
					<span class="h-svg-icon wp-block-kubio-icon__inner mindscape-front-header__k__N2SPnOuwG-inner mindscape-local-736-inner h-global-transition" name="icons8-line-awesome/arrow-down">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="arrow-down" viewBox="0 0 512 545.5">
							<path d="M240 96h32v321l108.5-108.5 23 23-136 136-11.5 11-11.5-11-136-136 23-23L240 417V96z"/></svg>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
