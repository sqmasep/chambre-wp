<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer mindscape-search__k__1MCYzfcZN-outer mindscape-local-402-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner mindscape-search__k__1MCYzfcZN-inner mindscape-local-402-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container mindscape-search__k__baLWB4dRKjp-container mindscape-local-403-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner mindscape-search__k__baLWB4dRKjp-inner mindscape-local-403-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container mindscape-search__k__kxeqsSpdy-n-container mindscape-local-404-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner mindscape-search__k__kxeqsSpdy-n-inner mindscape-local-404-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
						<div class="position-relative wp-block-kubio-column__align mindscape-search__k__kxeqsSpdy-n-align mindscape-local-404-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container mindscape-search__k__CtKC_EuIZL-container mindscape-local-405-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container mindscape-search__k__vrf0UGkWrN-container mindscape-local-406-container gutters-row-lg-1 gutters-row-v-lg-1 gutters-row-md-1 gutters-row-v-md-1 gutters-row-0 gutters-row-v-1" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:true,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner mindscape-search__k__vrf0UGkWrN-inner mindscape-local-406-inner h-row">
										<?php mindscape_theme()->get('archive-loop')->render(array (
  'view' => 'content/search/loop-item',
)); ?>
									</div>
								</div>
								<?php if(mindscape_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container mindscape-search__k__vD7AVCTELY-container mindscape-local-419-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-2 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner mindscape-search__k__vD7AVCTELY-inner mindscape-local-419-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-2 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container mindscape-search__k__tBYU0uM8Xx-container mindscape-local-420-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner mindscape-search__k__tBYU0uM8Xx-inner mindscape-local-420-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align mindscape-search__k__tBYU0uM8Xx-align mindscape-local-420-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(mindscape_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing mindscape-search__k__ELgmeRXRD--spacing mindscape-local-421-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer mindscape-search__k__ELgmeRXRD--outer mindscape-local-421-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link mindscape-search__k__ELgmeRXRD--link mindscape-local-421-link h-w-100 h-global-transition" href="<?php mindscape_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text mindscape-search__k__ELgmeRXRD--text mindscape-local-421-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'mindscape'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container mindscape-search__k__P2OarhUKUK-container mindscape-local-422-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner mindscape-search__k__P2OarhUKUK-inner mindscape-local-422-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align mindscape-search__k__P2OarhUKUK-align mindscape-local-422-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer mindscape-search__k__tRiQFlrj8q-outer mindscape-local-423-outer" data-kubio="kubio/pagination-numbers">
														<?php mindscape_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container mindscape-search__k__2nd5yuWmz9-container mindscape-local-424-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner mindscape-search__k__2nd5yuWmz9-inner mindscape-local-424-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align mindscape-search__k__2nd5yuWmz9-align mindscape-local-424-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(mindscape_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing mindscape-search__k__ACSe8L2gsX-spacing mindscape-local-425-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer mindscape-search__k__ACSe8L2gsX-outer mindscape-local-425-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link mindscape-search__k__ACSe8L2gsX-link mindscape-local-425-link h-w-100 h-global-transition" href="<?php mindscape_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text mindscape-search__k__ACSe8L2gsX-text mindscape-local-425-text kubio-inherit-typography">
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
