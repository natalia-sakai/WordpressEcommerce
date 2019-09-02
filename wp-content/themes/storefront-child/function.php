<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}


function login() {
global $current_user, $user_login;
get_currentuserinfo();

//se tiver logado
if ($user_login )  {
$user = $current_user->display_name;
return '
<div class="woocommerce-MyAccount-content">
<p>Olá, <strong>'. $user .'</strong> (não é <strong>'. $user .'</strong>? <a href="https://codewisebr.com/natalia/?page_id=14&amp;customer-logout&amp;_wpnonce=da7e589637">Sair</a>)</p>

<p>A partir do painel de controle de sua conta, você pode ver suas <a href="https://codewisebr.com/natalia/?page_id=14&amp;orders">compras recentes</a>, gerenciar seus <a href="https://codewisebr.com/natalia/?page_id=14&amp;edit-address">endereços de entrega e cobrança</a>, e <a href="https://codewisebr.com/natalia/?page_id=14&amp;edit-account">editar sua senha e detalhes da conta</a>.</p>

</div>';

//se nao tiver
} else {
return '
    <div class="u-columns col2-set" id="customer_login">

	<div class="u-column1 col-1">


		<h2>Entrar</h2>

		<form class="woocommerce-form woocommerce-form-login login" method="post">

			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username">Nome de usuário ou e-mail&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="">			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password">Senha&nbsp;<span class="required">*</span></label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password">
			</p>

			
			<p class="form-row">
				<label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Lembre-me</span>
				</label>
				<input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="eb7d324d72"><input type="hidden" name="_wp_http_referer" value="/natalia/?page_id=14">				<button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Acessar">Acessar</button>
			</p>
			<p class="woocommerce-LostPassword lost_password">
				<a href="https://codewisebr.com/natalia/?page_id=14&amp;lost-password">Perdeu sua senha?</a>
			</p>

			
		</form>


	</div>

	<div class="u-column2 col-2">

		<h2>Registrar</h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register">

			
			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_username">Nome de usuário&nbsp;<span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="">				</p>

			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email">Endereço de e-mail&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="">			</p>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
			<label for="reg_billing_cpf">CPF&nbsp;<span class="required">*</span></label>
			<input type="tel" class="woocommerce-Input woocommerce-Input--text input-text" name="billing_cpf" id="reg_cpf" autocomplete="billing_cpf" placeholder="" value="" maxlength="14">			</p>
			
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_password">Senha&nbsp;<span class="required">*</span></label>
				<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password">
			</p>

			
			<div class="woocommerce-privacy-policy-text"><p>Seus dados pessoais serão usados para aprimorar a sua experiência em todo este site, para gerenciar o acesso a sua conta e para outros propósitos, como descritos em nossa <a href="https://codewisebr.com/natalia/?page_id=3" class="woocommerce-privacy-policy-link" target="_blank">política de privacidade</a>.</p>
</div>
			<p class="woocommerce-FormRow form-row">
				<input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="8ba0a9d4b0"><input type="hidden" name="_wp_http_referer" value="/natalia/?page_id=14">				<button type="submit" class="woocommerce-Button button" name="register" value="Registrar">Registrar</button>
			</p>';
}

}
add_shortcode( 'show_login', 'login' );
?>