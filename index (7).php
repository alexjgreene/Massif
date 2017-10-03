		<div>
		<?php
		$values=['100','200','-300','-400','800'];
		$maxIndex=-1;
		foreach ($values as $index => $val){
			if ($val<0){
				echo "Индекс первого отрицательного числа равен $index";
				break;
			}
		}
		?>
		</div>
