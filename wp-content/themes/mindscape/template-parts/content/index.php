<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer mindscape-index__k__1MCYzfcZN-outer mindscape-local-188-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner mindscape-index__k__1MCYzfcZN-inner mindscape-local-188-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container mindscape-index__k__baLWB4dRKjp-container mindscape-local-189-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner mindscape-index__k__baLWB4dRKjp-inner mindscape-local-189-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container mindscape-index__k__kxeqsSpdy-n-container mindscape-local-190-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner mindscape-index__k__kxeqsSpdy-n-inner mindscape-local-190-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align mindscape-index__k__kxeqsSpdy-n-align mindscape-local-190-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container mindscape-index__k__CtKC_EuIZL-container mindscape-local-191-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container mindscape-index__k__vrf0UGkWrN-container mindscape-local-192-container gutters-row-lg-2 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:true,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner mindscape-index__k__vrf0UGkWrN-inner mindscape-local-192-inner h-row">
										<?php mindscape_theme()->get('archive-loop')->render(array (
  'view' => 'content/index/loop-item',
)); ?>
									</div>
								</div>
								<?php if(mindscape_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container mindscape-index__k__vD7AVCTELY-container mindscape-local-202-container gutters-row-lg-3 gutters-row-v-lg-3 gutters-row-md-2 gutters-row-v-md-3 gutters-row-0 gutters-row-v-3" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner mindscape-index__k__vD7AVCTELY-inner mindscape-local-202-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-3 gutters-col-v-lg-3 gutters-col-md-2 gutters-col-v-md-3 gutters-col-0 gutters-col-v-3">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container mindscape-index__k__tBYU0uM8Xx-container mindscape-local-203-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner mindscape-index__k__tBYU0uM8Xx-inner mindscape-local-203-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align mindscape-index__k__tBYU0uM8Xx-align mindscape-local-203-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(mindscape_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing mindscape-index__k__ELgmeRXRD--spacing mindscape-local-204-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer mindscape-index__k__ELgmeRXRD--outer mindscape-local-204-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link mindscape-index__k__ELgmeRXRD--link mindscape-local-204-link h-w-100 h-global-transition" href="<?php mindscape_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text mindscape-index__k__ELgmeRXRD--text mindscape-local-204-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'mindscape'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container mindscape-index__k__P2OarhUKUK-container mindscape-local-205-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner mindscape-index__k__P2OarhUKUK-inner mindscape-local-205-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align mindscape-index__k__P2OarhUKUK-align mindscape-local-205-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer mindscape-index__k__tRiQFlrj8q-outer mindscape-local-206-outer" data-kubio="kubio/pagination-numbers">
														<?php mindscape_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container mindscape-index__k__2nd5yuWmz9-container mindscape-local-207-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner mindscape-index__k__2nd5yuWmz9-inner mindscape-local-207-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align mindscape-index__k__2nd5yuWmz9-align mindscape-local-207-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(mindscape_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing mindscape-index__k__ACSe8L2gsX-spacing mindscape-local-208-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer mindscape-index__k__ACSe8L2gsX-outer mindscape-local-208-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link mindscape-index__k__ACSe8L2gsX-link mindscape-local-208-link h-w-100 h-global-transition" href="<?php mindscape_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text mindscape-index__k__ACSe8L2gsX-text mindscape-local-208-text kubio-inherit-typography">
																	<?php esc_html_e('Next', 'mindscape'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
