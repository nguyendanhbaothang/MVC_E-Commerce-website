<div class="header_bottom">
	<div class="header_bottom_left">
		<div class="section group">
			<?php
			$getLastestXiaomi = $product->getLastestXiaomi();
			if ($getLastestXiaomi) {
				while ($resultXiaomi = $getLastestXiaomi->fetch_assoc()) {

			?>
					<div class="listview_1_of_2 images_1_of_2">
						<div class="listimg listimg_2_of_1">
							<a href="preview.php"> <img src="admin/uploads/<?php echo $resultXiaomi['image'] ?>" alt="" /></a>
						</div>
						<div class="text list_2_of_1">
							<h2>Dell</h2>
							<p><?php echo $resultXiaomi['productName']  ?></p>
							<div class="button"><span><a href="preview.php">Add to cart</a></span></div>
						</div>
					</div>
			<?php
				}
			}
			?>
			<?php
			$getLastestSamsung = $product->getLastestSamsung();
			if ($getLastestSamsung) {
				while ($resultsamsung = $getLastestSamsung->fetch_assoc()) {

			?>
					<div class="listview_1_of_2 images_1_of_2">
						<div class="listimg listimg_2_of_1">
							<a href="preview.php"><img src="admin/uploads/<?php echo $resultsamsung['image'] ?>" alt="" /></a>
						</div>
						<div class="text list_2_of_1">
							<h2>Samsung</h2>
							<p><?php echo $resultsamsung['productName']  ?></p>
							<div class="button"><span><a href="preview.php">Add to cart</a></span></div>
						</div>
					</div>
			</div>
		<?php
				}
			}
	?>
	<?php
	$getLastestIphone = $product->getLastestIphone();
	if ($getLastestIphone) {
		while ($resultIphone = $getLastestIphone->fetch_assoc()) {

	?>
		<div class="section group">
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
					<a href="preview.php"> <img src="admin/uploads/<?php echo $resultIphone['image'] ?>" alt="" /></a>
				</div>
				<div class="text list_2_of_1">
					<h2>Iphone</h2>
					<p><?php echo $resultIphone['productName']  ?></p>
					<div class="button"><span><a href="preview.php">Add to cart</a></span></div>
				</div>
			</div>
			<?php
	}
}
	?>
		<?php
	$getLastestOPPO = $product->getLastestOPPO();
	if ($getLastestOPPO) {
		while ($resultOPPO = $getLastestOPPO->fetch_assoc()) {

	?>
			<div class="listview_1_of_2 images_1_of_2">
				<div class="listimg listimg_2_of_1">
					<a href="preview.php"> <img src="admin/uploads/<?php echo $resultOPPO['image'] ?>" alt="" /></a>
				</div>
				<div class="text list_2_of_1">
					<h2>OPPO</h2>
					<p><?php echo $resultOPPO['productName']  ?></p>
					<div class="button"><span><a href="preview.php">Add to cart</a></span></div>
				</div>	
			</div>
			<?php
	}
}
	?>








		</div>
		<div class="clear"></div>
	</div>
	<div class="header_bottom_right_images">
		<!-- FlexSlider -->

		<section class="slider">
			<div class="flexslider">
				<ul class="slides">
					<li><img src="images/1.jpg" alt="" /></li>
					<li><img src="images/2.jpg" alt="" /></li>
					<li><img src="images/3.jpg" alt="" /></li>
					<li><img src="images/4.jpg" alt="" /></li>
				</ul>
			</div>
		</section>
		<!-- FlexSlider -->
	</div>
	<div class="clear"></div>
</div>