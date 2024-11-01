<?php /************ TT OPTIONS *****************/

// create custom plugin settings menu
add_action('admin_menu', 'TT_OPTIONS_PLUGIN_theme_create_menu');

function TT_OPTIONS_PLUGIN_theme_create_menu() {

	//create new top-level menu
	add_menu_page('TT-Options', 'TT-Options', 'administrator', __FILE__, 'TT_OPTIONS_PLUGIN_theme_options_page','' );

	//call register settings function
	add_action('admin_init', 'TT_OPTIONS_PLUGIN_register_theme_options' );
}

function TT_OPTIONS_PLUGIN_register_theme_options() {
	//register our settings
	register_setting( 'tt-options-group', 'tt_options_css' );
	register_setting( 'tt-options-group', 'tt_options_script' );
	register_setting( 'tt-options-group', 'tt_options_testimonials' );
	register_setting( 'tt-options-group', 'tt_options_before_afters' );
	register_setting( 'tt-options-group', 'tt_options_office_images' );
	register_setting( 'tt-options-group', 'tt_options_html' );
}

function TT_OPTIONS_PLUGIN_theme_options_page() {

	?>
	<div class="tt-options-admin-wrap">
	<h1>TT Options <span>Version <?=$GLOBALS['TT_OPTIONS_PLUGIN_VERSION']?></span></h1>

    <div id="tt-options-admin-nav">
        <ul>
            <li id="tt-options-admin-li-1"><a href="#">Custom Codes</a></li>
            <li id="tt-options-admin-li-support"><a href="#">Support</a></li>
            <li id="tt-options-admin-li-about"><a href="#">About</a></li>
            <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
       </ul>
    </div>

	<form method="post" action="options.php">
		<?php settings_fields( 'tt-options-group' );
				do_settings_sections( 'tt-options-group' ); ?>
                
        <div class="tt-options-admin-content" id="tt-options-admin-li-1">
			<h2>Custom Codes</h2>
	
    		<?php submit_button(); ?>

			<h3>Custom Style</h3>
			<div class="tt-options-admin-section"><textarea type="text" name="tt_options_css" rows="7" cols="60" /><?php echo get_option('tt_options_css'); ?></textarea>
            <br />Enter your custom style in css. No need to add &lt;style&gt; tags.
            </div>
			<h3>Custom Script</h3>
			<div class="tt-options-admin-section"><textarea type="text" name="tt_options_script" rows="7" cols="60" /><?php echo get_option('tt_options_script'); ?></textarea>
            <br />Enter your custom script in javascript or jquery. No need to add &lt;script&gt; tags.
            </div>
			<h3>Custom HTML</h3>
			<div class="tt-options-admin-section"><textarea type="text" name="tt_options_html" rows="7" cols="60" /><?php echo get_option('tt_options_html'); ?></textarea>
            <br />Enter your custom scripts in javascript, jquery or css. Accepts HTML script and style tags.
            </div>

    		<?php submit_button(); ?>

		</div>
          
		<div class="tt-options-admin-content" id="tt-options-admin-li-support">
			<h2>Support</h2>
			<h3>Custom Codes</h3>
            <div class="tt-options-admin-section tt-options-admin-support">
            	<p>Custom Codes was created for you to be able to customize your website without having to edit the theme files and worry about the theme updates. This section saves your Styles and Scripts to the database. You can easily update your themes and keep your customizations.</p>
            	<p><strong>Custom Style</strong> is where you enter your custom style in css. No need to add &lt;style&gt; tags. This plugin automatically adds these codes to the header of your website. However should you wish to add the custom option to your theme, you may add it using `tt_options_css`.</p>
                <p><strong>Custom Script</strong> is where you enter your custom script in javascript or jquery. No need to add &lt;script&gt; tags. This plugin automatically adds these codes to the header of your website. However should you wish to add the custom option to your theme, you may add it using `tt_options_script`.</p>
                <p><strong>Custom HTML</strong> is where you add generated scripts like google scripts, etc. to be added inside the &lt;head&gt; of your website. This area accepts HTML script and style tags. However should you wish to add the custom option to your theme, you may add it using `tt_options_html`.</p>
            </div>

		</div>
        
		<div class="tt-options-admin-content" id="tt-options-admin-li-about">
			<h2>About</h2>
			<h3>Description</h3>
            <div class="tt-options-admin-section about">
            	<p>This plugin is a simplified theme options where you can save styles, scripts and other codes to the database without having to edit any files on your theme. Makes your theme updates a worry-free! TT-Options is a plugin that provides users with limited theme options the unlimited possibilities to fully customize their website.</p>
            </div>

            <h3>Plugin Version</h3>
            <div class="tt-options-admin-section about">
                <p>Version: <?=$GLOBALS['TT_OPTIONS_PLUGIN_VERSION'];?></p>
            </div>
            
            <h3>Author</h3>
            <div class="tt-options-admin-section about">
            	<p>Created by <a href="http://thesabeltuto.blogspot.com" target="_blank">Thesabel Tuto</a>. For questions, suggestions and bug reports please go to the wordpress forums and/or contact the author.</p>
            </div>
            
            <h3>Plugin Site</h3>
            <div class="tt-options-admin-section about">
            	<p>Plugin site at <a href="http://ttplugins.wordpress.com/" target="_blank">TT Plugins</a>. Check out other plugins created by the author.</p>
            </div>
            
            <h3>Donate</h3>
            <div class="tt-options-admin-section about">
            	<p>Donations are accepted via Paypal Donate to <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">TT Plugins</a>. Please donate to support the author in improving this plugin and in creating more useful and helpful plugins. Thank you for supporting!</p>
            </div>
            
		</div>
        
	</form>
    
        <div class="tt-options-admin-footer">Plugin created by <a href="http://thesabeltuto.blogspot.com" target="_blank">Thesabel Tuto</a> | Plugin site at <a href="http://ttplugins.wordpress.com/" target="_blank">TT Plugins</a> | <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">DONATE!</a></div>

	</div>
<?php } ?>