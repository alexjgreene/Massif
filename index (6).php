		<div>
		<?php
		$prices=['120','130','150','130','100'];
		$prices[0]=50;
		$prices[]=200;
		$prices[100]=150;
		$max=0;
		$maxIndex=-1;
		foreach ($prices as $index => $price){
			if ($price > $max){
				$max=$price;
				$maxIndex = $index;
			}
		}
		echo "Максимальный элемент № $maxIndex равен $max";
		?>
		</div>
