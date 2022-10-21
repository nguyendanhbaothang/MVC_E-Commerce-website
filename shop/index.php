<?php
include 'inc/header.php';
include 'inc/slider.php';
?>
<div class="main">
	<div class="content">
		<div class="content_top">
			<div class="heading">
				<h3>Sản phẩm nổi bật</h3>
			</div>
			<div class="clear"></div>
		</div>
		<div class="section group">
			<?php
			$product_feathered = $product->getproduct_feathered();
			if ($product_feathered) {
				while ($result = $product_feathered->fetch_assoc()) {
			?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="details.php?proid=<?php echo $result['productId'] ?>"><img src="admin/uploads/<?php echo $result['image'] ?>" width="150px" height="150px" alt="" /></a>
						<h2><?php echo $result['productName'] ?></h2>
						<p><?php echo $fm->textShorten($result['product_desc'], 50) ?></p>
						<p><span class="price"><?php echo $fm->format_currency($result['price']) . " " . "VNĐ" ?></span></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result['productId'] ?>" class="details">Chi tiết</a></span></div>
					</div>
			<?php
			}
			}
			?>
		</div>
	</div>
	<div class="content_bottom">
		<div class="heading">
			<h3>Sản phẩm mới nhất</h3>
		</div>
		<div class="clear"></div>
		<div class="section group">

			<?php
			$product_new = $product->getproduct_new();
			if ($product_new) {
				while ($result_new = $product_new->fetch_assoc()) {

			?>
					<div class="grid_1_of_4 images_1_of_4">
						<a href="details.php?proid=<?php echo $result_new['productId'] ?>"><img src="admin/uploads/<?php echo $result_new['image'] ?>" alt="" /></a>
						<h2><?php echo $result_new['productName'] ?></h2>
						<p><span class="price"><?php echo $fm->format_currency($result_new['price']) . " " . "VNĐ" ?></span></p>
						<div class="button"><span><a href="details.php?proid=<?php echo $result_new['productId'] ?>" class="details">Chi tiết</a></span></div>
					</div>
			<?php
				}
			}
			?>
		</div>
		<style type="text/css">
			a.phantrang {
				border: 1px solid #ddd;
				padding: 10px;
				background: #414045;
				color: #fff;
				cursor: pointer;

			}

			a.phantrang:hover {
				background: blue;
			}
		</style>
		<div class="">

		</div>
	</div>
</div>

<?php
include 'inc/footer.php';

?>