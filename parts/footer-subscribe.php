						<div id="footer-subscribe" class="row hide-sm">
							<div class="col-1"></div>
							<div class="col-4">
								<h3>Subscribe to our mailing list</h3>
								<p><strong>Sign up to receive emails about Raise Your Hand Texas news and blog posts.</strong></p>
								<p><strong>We only use this information to send emails relevant to you, and will never share this information with third parties.</strong></p>
							</div>
							<div class="col">
								<?php /* BEGIN FORM */ ?>
									<form id="subscribe-form"
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
						</div>