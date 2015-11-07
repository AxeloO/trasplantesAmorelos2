<?php

if ( ! defined( 'ABSPATH' ) ) exit;

function ecf_stt_page() {
	
	?>
    
    <div class="wrap">
    <div class="metabox-holder">
			<div class="postbox">
            <h3 style="padding-bottom: 8px; border-bottom: 1px solid #CCC;"><span class="setpre"></span><?php _e( 'Global Settings', 'contact-form-lite' ); ?></h3> 
            <form id="ecf_settings">
            <div style="padding: 5px 15px 15px 15px;">
            <h4><?php _e( "Auto Update Plugin", 'contact-form-lite' ); ?> :</h4>
            <div style="margin-top: 10px;">
			<?php $ecf_opt_updt = get_option("ecf-settings-automatic_update"); ?>
            <input type="radio" name="ecf_sett_autoupd" onclick="ecf_ajax_autoupdt(this);" <?php echo $ecf_opt_updt == "active" ? "checked=\"checked\"" : "";?> value="active"><label style="vertical-align: baseline;"><?php _e( "Enable", 'contact-form-lite' ); ?></label>
            <input type="radio" name="ecf_sett_autoupd" onclick="ecf_ajax_autoupdt(this);" <?php echo $ecf_opt_updt == "inactive" ? "checked=\"checked\"" : "";?> style="margin-left: 10px;" value="inactive"><label style="vertical-align: baseline;"><?php _e( "Disable", 'contact-form-lite' ); ?></label>
            </div>
            </div>
            </form>
           </div>
	</div>
    
    <div class="metabox-holder">
			<div class="postbox">
            <h3 style="padding-bottom: 8px; border-bottom: 1px solid #CCC;"><?php _e( 'Check this out!', 'contact-form-lite' ); ?></h3>
           <a href="http://ghozylab.com/plugins/easy-media-gallery-pro/demo/best-gallery-and-photo-albums-demo/" target="_blank"><img style="margin: 10px 0px 10px 10px" src="<?php echo plugins_url( 'images/banners/emg_red_728x90.png', dirname( __FILE__ ) ); ?>" width="728" height="90" /></a>
           </div>
		</div>
    
    </div>

<style>
a:focus {box-shadow: none !important; }
.setpre {
	display:none;
	margin-right:10px;
	float: left;
	width:16px;
	height:16px;
	background-repeat:no-repeat;
	}
</style>

<script type="text/javascript">
/*<![CDATA[*/
	var ecfloader;
	function ecf_ajax_autoupdt(cmd) {
		
		window.clearTimeout(ecfloader);
		
		jQuery('.setpre').show().css('background-image','url(<?php echo ECF_URL . '/inc/images/89.gif'; ?>)');
		var data = {
			action: 'ecf_ajax_autoupdt',
			security: '<?php echo wp_create_nonce( "ecf-lite-nonce"); ?>',				
			cmd: jQuery(cmd).val(),
			};
			
			jQuery.post(ajaxurl, data, function(response) {
				if (response == 1) {
					jQuery('.setpre').css('background-image','url(<?php echo ECF_URL . '/inc/images/valid.png'; ?>)');
					ecfloader = window.setTimeout(function() {
					jQuery('.setpre').fadeOut();
					}, 3000);
					}						
					else {
						jQuery('.setpre').hide();
						alert('Ajax request failed, please refresh your browser window.');
						}
					});
	}
/*]]>*/
</script> 
	
<?php	
	
}

?>