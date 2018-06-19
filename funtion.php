<?php 
//function to add (Member List) menu in dashboard panel in wordpress
add_action('admin_menu', 'test_plugin_setup_menu');
 
function test_plugin_setup_menu(){
        add_menu_page( 'Test Plugin Page', 'Member List', 'manage_options', 'test-plugin', 'test_init' );
		//test-plugin =name of plugin
		//manage_options= name of field in dashboard
		// test_init=function to be call
		
		add_submenu_page('test-plugin','Status Yes','Status Yes','manage_options','status_yes','status_yes');
		add_submenu_page('test-plugin','Status No','Status No','manage_options','status_no','status_no');
		add_submenu_page('test-plugin','Status Maybe','Status Maybe','manage_options','status_maybe','status_maybe');
   
}
 
function test_init(){
     get_template_part( 'template-parts/content', 'Member_List' ); 
	 } 



function status_yes(){

	 get_template_part( 'template-parts/content', 'Status_Yes' );

}
	
	
function status_no(){

	 get_template_part( 'template-parts/content', 'Status_No' );
}

function status_maybe(){

	 get_template_part( 'template-parts/content', 'Status_MayBe' );
}
?>
