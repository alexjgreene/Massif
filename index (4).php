		<div>
		<?php
		$prices=['120','130','150','130','100'];
		$prices[0]=50;
		$prices[]=200;
		$prices[100]=150;
		$sum=0;
		foreach ($prices as $price){
			$sum+=$price;
		}
		$avg=$sum/count($prices);
		echo "Средняя цена $avg";
		?>
		</div>
