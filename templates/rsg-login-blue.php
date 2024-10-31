<div class="rsg-modal rsg-modal_login rsg-modal_login_blue">
	<div class="rsg-login_body">
		<div class="rsg-block rsg-tright"><strong class="rsg-close_modal"></strong></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="rsg-form_all_input_transparent_white rsg-login_content" >
						<h1 class="rsg-block rsg-big_title rsg-padding_5_0"> <i class="fas fa-sign-in-alt"></i> Login </h1>
						<div class="rsg-padding_20_0">
							<div>Username / Email</div>
							<input type="text" name="rsg-login_name" id="rsg_login_name" />
						</div>
						<div class="rsg-padding_10_0">
							<div>Password</div>
							<input type="password" name="rsg-login_pass" id="rsg_login_pass"  />
						</div>
						<div class="rsg-padding_10_0">
							<div class="rsg-checkboxes single-check" id="rsg-login_rem"> Remember me </div>
						</div>
					</div>
					<div class="rsg-padding_10_0 rsg-tcenter">
						<div class="rsg_wp_login rsg-button_2" id="rsg-login_submit">
							Login
						</div>
					</div>
					<div class="rsg-padding_10_0 rsg-tcenter rsg-blue-link">
						<a class="rsg-tcenter" href="<?php echo esc_url( wp_lostpassword_url() ); ?>">
		    				<?php esc_html_e( 'Forgot Username or Password?' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>