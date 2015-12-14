<?php
class Input {
	static public function getInput($label, $name, $type) {
		return <<<EOT
								<div class='input-row'>
					 				<label for='$name'>$label: </label>
		        			<input type='$type' name='$name' id='$name' required />
		        		</div>
EOT;
	}
}