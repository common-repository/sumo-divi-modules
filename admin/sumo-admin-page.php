<?php
class divisumo_lite_Settings_Page {
	public function __construct() {
		add_action( 'admin_menu', array( $this, 'ds_settings' ), 10 );
	}
	public function ds_settings() {
		$page_title = 'Divi Sumo Dashboard';
		$menu_title = 'Divi Sumo Lite';
		$capability = 'manage_options';
		$slug = 'cwp-divi-sumo';
		$callback = array($this, 'ds_settings_content');
		add_menu_page($page_title, $menu_title, $capability, $slug, $callback);
	}
	public function ds_settings_content() {
	?>
	


<div class="acfb-settings-wrap">
    <div class="components-panel">
        <div class="components-panel__body is-opened">
            <div class="components-panel__header">
                <h2>Getting Started with <strong>Divi Sumo Lite</strong><code>1.0.6</code></h2>
                <p>Congratulations! You've just added awesome divi plugin. please make sure you have divi installed & activated to use Divi Sumo.</p>
                <div class="acfb_admin_call_to">
                	<div>If you have any questions or suggestion, let us know through our <a href="https://www.facebook.com/thecakewp/" target="_blank">Facebook community </a>. <span style="text-align: left;">For bug reporting please use the contact form <a href="<?php menu_page_url('cwp-divi-sumo-contact');  ?>">here</a>.</span> 
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>


	<?php
	}
	
}
new divisumo_lite_Settings_Page();