<h1>Shayeulman Theme</h1>

<?php settings_errors(); ?>
<?php 
    $firstName = get_option( 'first_name' );
    $lastName = esc_attr( get_option( 'last_name' ) );
    $fullName = $firstName.' '.$lastName;
    $description = $description = esc_attr( get_option( 'user_description' ) );

?>
<div class="shayeulman-sidebar-preview">
    <div class="shayeulman-sidebar">
        <h1 class="shayeulman-username"><?php print $fullName ?></h1>
        <h2 class="shayeulman-description"><?php print $description ?></h2>
    </div>
</div>
<form method="post" action="options.php" class="shayeulman-general-form">
    <?php settings_fields('shayeulman-settings-group'); ?>
    <?php do_settings_sections( 'shayeulman_theme' ); ?>
    <?php submit_button() ; ?>
</form>