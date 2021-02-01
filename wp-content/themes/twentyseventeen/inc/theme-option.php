<?php
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' ); 

function theme_options_init(){
 register_setting( 'sample_options', 'sample_theme_options');
} 
function theme_option($field){
	$options = get_option( 'sample_theme_options' );
	return $options[$field];
}
function theme_options_add_page() {
 add_theme_page( __( 'Thông tin', 'sampletheme' ), __( 'Thông tin', 'sampletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
function theme_options_do_page() {
	global $select_options;
	if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false; 
?>
<div class="wrap">
<?php screen_icon(); ?><h2>Thông tin</h2>
<form method="post" action="options.php">
<?php settings_fields( 'sample_options' ); $options = get_option( 'sample_theme_options' ); ?> 
	<table class="form-table">
		<tr valign="top">
			<th width="90px">Tên Công ty</th>
			<td><input type="text" name="sample_theme_options[name]" id="sample_theme_options[name]" style="width: 85%" value="<?php echo $options['name']; ?>" ></td>
        </tr>
        <tr valign="top">
			<th width="90px">Tên Công ty (tiếng anh)</th>
			<td><input type="text" name="sample_theme_options[name-i]" id="sample_theme_options[name-i]" style="width: 85%" value="<?php echo $options['name-i']; ?>" ></td>
        </tr>
        <tr valign="top">
			<th width="90px">Email</th>
			<td><input type="text" name="sample_theme_options[email]" id="sample_theme_options[email]" style="width: 85%" value="<?php echo $options['email']; ?>" ></td>
        </tr>
        <tr valign="top">
			<th width="90px">Tel 1</th>
			<td><input type="text" name="sample_theme_options[phone-1]" id="sample_theme_options[phone-1]" style="width: 85%" value="<?php echo $options['phone-1']; ?>" ></td>
        </tr>
        <tr valign="top">
			<th width="90px">Tel 2</th>
			<td><input type="text" name="sample_theme_options[phone-2]" id="sample_theme_options[phone-2]" style="width: 85%" value="<?php echo $options['phone-2']; ?>" ></td>
        </tr> 
        <tr valign="top">
			<th width="90px">Địa chỉ trụ sở</th>
			<td><input type="text" name="sample_theme_options[address]" id="sample_theme_options[address]" style="width: 85%" value="<?php echo $options['address']; ?>" ></td>
        </tr>
        <tr valign="top">
			<th width="90px">Địa chỉ văn phòng</th>
			<td><input type="text" name="sample_theme_options[address-office]" id="sample_theme_options[address-office]" style="width: 85%" value="<?php echo $options['address-office']; ?>" ></td>
        </tr>
        <tr valign="top">
			<th width="90px">Fax</th>
			<td><input type="text" name="sample_theme_options[fax]" id="sample_theme_options[fax]" style="width: 85%" value="<?php echo $options['fax']; ?>" ></td>
        </tr>
        <tr valign="top">
			<th width="90px">Website</th>
			<td><input type="text" name="sample_theme_options[web]" id="sample_theme_options[web]" style="width: 85%" value="<?php echo $options['web']; ?>" ></td>
        </tr>
        <tr valign="top">
			<th width="90px">Hotline</th>
			<td><input type="text" name="sample_theme_options[hotline]" id="sample_theme_options[hotline]" style="width: 85%" value="<?php echo $options['hotline']; ?>" ></td>
        </tr>
		<tr valign="top">
			<th width="90px">Facebook</th>
			<td><input type="text" name="sample_theme_options[facebook]" id="sample_theme_options[facebook]" style="width: 85%" value="<?php echo $options['facebook']; ?>" ></td>
        </tr>
		<tr valign="top">
			<th width="90px">Twitter</th>
			<td><input type="text" name="sample_theme_options[twitter]" id="sample_theme_options[twitter]" style="width: 85%" value="<?php echo $options['twitter']; ?>" ></td>
        </tr>
		<tr valign="top">
			<th width="90px">Zalo</th>
			<td><input type="text" name="sample_theme_options[zalo]" id="sample_theme_options[zalo]" style="width: 85%" value="<?php echo $options['zalo']; ?>" ></td>
        </tr>
		<tr valign="top">
			<th width="90px">Youtube</th>
			<td><input type="text" name="sample_theme_options[youtube]" id="sample_theme_options[youtube]" style="width: 85%" value="<?php echo $options['youtube']; ?>" ></td>
        </tr>
		<tr valign="top">
			<th width="90px">Đường dẫn thủ tục đăng kí</th>
			<td><input type="text" name="sample_theme_options[url-reg]" id="sample_theme_options[url-reg]" style="width: 85%" value="<?php echo $options['url-reg']; ?>" ></td>
        </tr>
    </table>    
    <?php submit_button(); ?>
</form></div>
<?php } ?>
