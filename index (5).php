		<div>
		<?php
		$prices=['120','130','150','130','100'];
		$prices[0]=50;
		$prices[]=200;
		$prices[100]=150;
		$max=0;
		foreach ($prices as $price){
			if ($price > $max){
				$max=$price;
			}
		}
		echo "Максимальная цена $max";
		?>
		</div>
