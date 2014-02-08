<style>
.cakedesktop_floatleft{
	float:left;
	padding:5px;
	border-left: 1px solid grey;
}
.cakedesktop_fieldset{
	padding-bottom: 10px;
}
</style>

<?php
echo $this->Form->create('Cakedesktop',array(
	'url'=>array('plugin'=>'cakedesktop','controller'=>'cakedesktop','action'=>'createdesktopapp'),
	'inputDefaults' => array(
	        'div' => 'cakedesktop_floatleft'
	    )
	)
);

		//Main window
		echo '<fieldset class="cakedesktop_fieldset">';
    	echo '<legend>'.__('Main window').'</legend>';
    		echo $this->Form->input('Cakedesktop.main_window.title',array('label'=>__('Application title'),'div'=>true));
			echo $this->Form->input('Cakedesktop.main_window.start_maximized',array('type'=>'checkbox','label'=>__('Start application maximized?'),'default'=>true));
			echo $this->Form->input('Cakedesktop.main_window.start_fullscreen',array('type'=>'checkbox','label'=>__('Start fullscreen?')));
			echo $this->Form->input('Cakedesktop.main_window.disable_maximize_button',array('type'=>'checkbox','label'=>__('Disable maximize button?')));
		echo '</fieldset>';

		//Browser options
		echo '<fieldset class="cakedesktop_fieldset">';
    	echo '<legend>'.__('Embedded browser (Chrome) options').'</legend>';
    		echo $this->Form->input('Cakedesktop.chrome.external_drag',array('type'=>'checkbox','label'=>__('Enable external drag n drop?'),'default'=>true));
    		echo $this->Form->input('Cakedesktop.chrome.reload_page_F5',array('type'=>'checkbox','label'=>__('Allow F5 key to reload?'),'default'=>true));
    		echo $this->Form->input('Cakedesktop.chrome.devtools_F12',array('type'=>'checkbox','label'=>__('Allow F12 key for devtools?'),'default'=>false));

    		echo $this->Form->input('Cakedesktop.chrome.context_menu.enable_menu',array('type'=>'checkbox','label'=>__('Enable context menu?'),'default'=>false));
    		echo $this->Form->input('Cakedesktop.chrome.context_menu.view_source',array('type'=>'checkbox','label'=>__('Enable view source?'),'default'=>false));
    		echo $this->Form->input('Cakedesktop.chrome.context_menu.open_in_external_browser',array('type'=>'checkbox','label'=>__('Enable open in external browser?'),'default'=>false));
    		echo $this->Form->input('Cakedesktop.chrome.context_menu.devtools',array('type'=>'checkbox','label'=>__('Enable contextmenu devtools?'),'default'=>false));
    	echo '</fieldset>';

    	//Debugging
		echo '<fieldset class="cakedesktop_fieldset">';
    	echo '<legend>'.__('Debugging').'</legend>';
			echo $this->Form->input('Cakedesktop.debugging.show_console',array('type'=>'checkbox','label'=>__('Show console?'),'default'=>false));
		echo '</fieldset>';

	echo $this->Form->button(__('Create desktop app'),array('id'=>'createdesktopapplink','type'=>'submit'));
	
echo $this->Form->end();
?>

<script>
document.getElementById("createdesktopapplink").onclick = function() {
	document.getElementById("createdesktopapplink").innerHTML="Cakedesktop is creating your offline Windows Desktop application, please wait. This can take up to a few minutes.";
    return true;
};
</script>