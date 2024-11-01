<?php	$tt_options_css = get_option('tt_options_css');
		$tt_options_script = get_option('tt_options_script');
		$tt_options_html = get_option('tt_options_html');
?>
<?php if ( $tt_options_html != '' || $tt_options_html != null ) echo $tt_options_html; ?>
<?php if ( $tt_options_css != '' || $tt_options_css != null ) { ?>
<style>
<?php echo $tt_options_css; ?>
</style>
<?php } ?>
<?php if ( $tt_options_script != '' || $tt_options_script != null ) { ?>
<script>
<?php echo $tt_options_script; ?>
</script>
<?php } ?>