			<?php /* BEGIN CTA AREA */ ?>
				<div id="subscribe" class="blue-bg-light container-fluid">
					<div class="col">
						<h2>Subscribe to our mailing list</h2>
						<?php /* BEGIN FORM */ ?>
							<!--<form id="subscribe-cta-form"
							  method="post"
							  action-xhr="/documentation/examples/api/submit-form-input-text-xhr"
							  target="_top">
							  <input type="email"
							    name="email"
							    placeholder="Email"
							    required>
							  <input type="submit"
							    value="Subscribe">
							  <div submit-success>
							    <template type="amp-mustache">
							      Success! Thank you for trying the form! If you see this prompt, I'll be just as surprised as you because this form shouldn't work.
							    </template>
							    <template type="amp-mustache">
							      Error! Thank you for trying the form. This form is unreal, like you~!
							    </template>
							  </div>
							  <div submit-error>
							  </div>
							</form>-->
						<?php /* END FORM */ ?>

						<button on="tap:quote-lb" class="subscribe-button">Subscribe</button>
						<amp-lightbox id="quote-lb" layout="nodisplay" class="modal">
						  <div class="col">
							  <button class="close-button" on="tap:quote-lb.close">X</button>
							  <h3>Subscribe to our mailing list</h3>
							  <p>Sign up to receive emails about Raise Your Hand Texans news and blog posts.</p>
							  <p>We only use this information to send emails relevant to you, and will never share this information with third parties.</p>
								<?php /* BEGIN FORM */ ?>
									<form id="subscribe-form-modal"
									  method="post"
									  action-xhr="/documentation/examples/api/submit-form-input-text-xhr"
									  target="_top">
									  <input type="text"
									    name="given-name"
									    placeholder="First Name"
									    required><span class="required">*</span>
									  <input type="text"
									    name="family-name"
									    placeholder="Last Name"
									    required><span class="required">*</span>
									  <input type="email"
									    name="email"
									    placeholder="Email"
									    required><span class="required">*</span>
									  <input type="text"
									    name="postal-code"
									    placeholder="Zip Code"
									    required><span class="required">*</span>
									  <input type="submit"
									    value="Subscribe">
									  <div submit-success>
									    <template type="amp-mustache">
									      Success! Thanks {{given-name}} for trying the <code>amp-form</code> demo! Try to insert the word "error" as a name input in the form to see how <code>amp-form</code> handles errors.
									    </template>
									    <template type="amp-mustache">
									      Error! Thanks {{given-name}} for trying the <code>amp-form</code> demo with an error response.
									    </template>
									  </div>
									  <div submit-error>
									  </div>
									</form>
								<?php /* END FORM */ ?>

						  </div>
						</amp-lightbox>
					</div>
				</div>
			<?php /* END CTA AREA */ ?>

