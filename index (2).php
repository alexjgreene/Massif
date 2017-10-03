		<div>
		<?php
		$prices=['120','130','150','130','130','120'];
		$sum=0;
		for ($i=0;$i<count($prices);$i++){
			$sum+=$prices[$i];
		}
		$avg=$sum/count($prices);
		echo "Средняя цена $avg";
		?>
		</div>
