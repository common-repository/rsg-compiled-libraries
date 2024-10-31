<div class="rsg-modal rsg-modal_menu">
	<div class="rsg-menu_body">
		<div class="rsg-block rsg-tright rsg-sticky-top rsg-padding_10_0">
			<?php if( is_user_logged_in() ): ?>
				<div class="rsg_wp_logout_link rsg-iblock">
					<a href="/logout">Logout</a>
				</div>
			<?php else: ?>
				<div class="rsg-wp_login_toggle rsg-iblock">
					<a href="/login">Login</a>
				</div>
			<?php endif; ?>
			&emsp; | &emsp;
			<strong class="rsg-close_modal"></strong> 
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="rsg-menu_content" >
						<div class="rsg-padding_20_0 rsg-tcenter">
							<div class="rsg-modal_menu_box rsg-modal_menu_box_home">
								<a href="#">
									<i class="fas fa-home"></i>
									Home
								</a>
							</div>
							<div class="rsg-modal_menu_box">
								<a href="#">
									<i class="fas fa-user-secret"></i>
									About Us
								</a>
							</div>
							<div class="rsg-modal_menu_box">
								<a href="#">
									<i class="fas fa-phone-square"></i>
									Contact Us
								</a>
							</div>
							<form class="rsg-modal_menu_box" style="max-width: 90%;" method="post" >
								<span>
									<i class="fas fa-envelope-open-text"></i>
									Subscribe to our newsletter
									<input type="email" class="rsg-input"><hr>
									<button class="rsg-button_3 rsg-display-preload-onclick" name="rsgcld_subscribe" type="submit" value="rsgcld_subscribe">Subscribe</button>
								</span>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>