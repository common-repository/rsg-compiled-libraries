<div class="rsg-modal rsg-modal_login">
	<div class="rsg-login_body">
		<div class="rsg-block rsg-tright"><strong class="rsg-close_modal"></strong></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="rsg-form_all_input_transparent_white rsg-login_content">
						<h1 class="rsg-block rsg-big_title rsg-padding_5_0"> <i class="fas fa-sign-in-alt"></i> Login </h1>
						<div class="rsg-padding_20_0">
							<input type="text" name="rsg-login_name" id="rsg_login_name" placeholder="Username" />
						</div>
						<div class="rsg-padding_10_0">
							<input type="password" name="rsg-login_pass" id="rsg_login_pass" placeholder="Password" />
						</div>
						<div class="rsg-padding_10_0">
							<div class="rsg-checkboxes single-check" id="rsg-login_rem"> Remember me </div>
						</div>
					</div>
					<div class="rsg-padding_10_0">
						<div class="rsg-button_2 rsg_wp_login" id="rsg-login_submit">
							Login
						</div>
					</div>
					<div class="rsg-padding_10_0">
						<a class="rsg-login_forgot_cred" href="<?php echo esc_url( wp_lostpassword_url() ); ?>">
		    				<?php esc_html_e( 'Forgot Username or Password?' ); ?>
						</a>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="rsg-login_content">
						<h1 class="rsg-block rsg-big_title"> Not a member yet? </h1>
						<div class="rsg-padding_5_0 p_txts">
							You are being left out!
						</div>
						<div class="rsg-padding_5_0 p_txts">
							Start your adventure with us!
						</div>
						<div class="rsg-padding_5_0 p_txts">
							Let's take care of each other.
						</div>
						
					</div>
					<div class="rsg-padding_10_0">
						<a href="<?php echo get_home_url();?>/signup" class="rsg-block rsg-button_3 rsg_signup">
							Sign Up
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	