<div class="content nopadding sortable">	
	<div class="row" style="overflow:hidden;">
		<label>
			<?php 
			echo $helpers['Html']->img('/backoffice/move.png', array('alt' => _('Déplacer'), 'title' => _('Déplacer'), 'style' => 'float:left;margin-right:5px;margin-top:-3px;cursor:move'));
			echo $rightButtonName; 
			?>
		</label>
		<div class="rowright">
			<span class="checkbox" style="float: left; display: block; width: 30%; line-height: 15px;"><?php
			echo $helpers['Form']->input('right_button_id.'.$rightButtonId, "Activer ce bouton", array('type' => 'checkbox', 'div' => false, 'value' => 1));
			?></span>		
		</div>
	</div>					
</div>