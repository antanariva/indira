<div id="pass_recovery_form" class="modal fade">
	 <div class="modal-header">
	 	<a class="close" data-dismiss="modal">×</a>
	    <h3>{{ Lang::line('content.pass_recovery_word')->get(Session::get('lang')) }}</h3>
	 </div>
	 <div class="modal-body form-horizontal">
	 	<fieldset>
	 		<div class="control-group">
		 		<label class="control-label" for="email">
	 				Admin's Email:
	 			</label>
	 			<div class="controls">
	 				<input 
	 					REQUIRED 
	 					class="input" 
	 					id="email" 
	 					type="email" 
	 					value="" 
	 				/>
	 			</div>
	 		</div>
	 	</fieldset>
	 	<?
	 		$json_data = '{"email": "\'+encodeURI($(\'#email\').val())+\'"}';
	 	?>
	 	<div id="recovery_action"></div>
	 </div>
	 <div class="modal-footer">
	    <a 
	    	href="#" 
	    	onclick="showerp('<?= htmlspecialchars($json_data); ?>', '<?= Config::get('application.url'); ?>/admin/password_recovery/', 'recovery_action', 'recovery_action')" 
	    	class="btn btn-primary">
	    		{{ Lang::line('content.pass_recovery_action_word')->get(Session::get('lang')) }}
	    </a>
	 </div>
</div>