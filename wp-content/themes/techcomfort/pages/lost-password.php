<?php /* Template Name: Page - Lost password */ ?>

<?php get_header(); ?>
<main>
    <div class='registration  registration-page lost-password'>
        <div class='registration-inner'>
            <div class='registration-title'>
                <h2><?php the_title(); ?></h2>
            </div>
            <div class='registration-content'>
                <?php
                    /**
                     * Lost password form
                     *
                     * This template can be overridden by copying it to yourtheme/user-registration/myaccount/form-lost-password.php.
                     *
                     * HOWEVER, on occasion UserRegistration will need to update template files and you
                     * (the theme developer) will need to copy the new files to your theme to
                     * maintain compatibility. We try to do this as little as possible, but it does
                     * happen. When this occurs the version of the template file will be bumped and
                     * the readme will list any important changes.
                     *
                     * @see     https://docs.wpeverest.com/user-registration/template-structure/
                     * @author  WPEverest
                     * @package UserRegistration/Templates
                     * @version 1.0.0
                     */

                    if (!defined('ABSPATH')) {
                        exit; // Exit if accessed directly.
                    }

                    ur_print_notices(); ?>
                <div class="ur-frontend-form login" id="ur-frontend-form">
                    <form method="post" class="user-registration-ResetPassword lost_reset_password">
                        <div class="ur-form-row">
                            <div class="ur-form-grid">
                                <p class="user-registration-form-row user-registration-form-row--first form-row form-row-first">
                                    <label for="user_login"><?php esc_html_e('Эл. почта *', 'user-registration'); ?></label>
                                    <input class="user-registration-Input user-registration-Input--text input-text"
                                           type="text" name="user_login" id="user_login" />
                                </p>

                                <div class="clear"></div>

                                <?php do_action('user_registration_lostpassword_form'); ?>

                                <p class="user-registration-form-row form-row">
                                    <input type="hidden" name="ur_reset_password" value="true" />
                                    <input type="submit" class="user-registration-Button button"
                                           value="<?php esc_attr_e('Восстановить', 'user-registration'); ?>" />
                                </p>

                                <?php wp_nonce_field('lost_password'); ?>
                            </div>
                        </div>
                    </form>
                </div>
                <div class='success'>
                    <h3>Проверьте вашу пошту, пожалуйста или отправьте сообщение снова</h3>
                    <a href='<?php echo home_url('/'); ?>lost-password' class='btn'>Отправить снова</a>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>

<script>
  const href = window.location.href;
  const lostPassword = document.getElementsByClassName('lost-password')[0];
  if (href.includes('?reset-link-sent=true')) {
    lostPassword.classList.add('send')
  } else {
    lostPassword.classList.remove('send')
  }
</script>
