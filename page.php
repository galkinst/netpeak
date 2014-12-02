<?php
include('header.php');
$query = mysql_query("SELECT * FROM item WHERE id=".mysql_real_escape_string($_GET['id']));
$data = mysql_fetch_assoc($query);
?>
		<div class="title"> <p class="navtext"> itemName</p></div>
			<div class="page">
				<div class="page_img">
                    <? var_dump($data['image'])?>
                    <img src="img/<?php echo default_image($data['image']); ?>"/>
                    <? var_dump($items['image'])?>

				</div>
				<div class="page_title">
					<p><?php echo $data['title']; ?></p>
				</div>
				<div class="page_price">
					<p><?php echo $data['price']; ?>$</p>
				</div>
				<div class= "page_button">
					<a>BUY NOW!</a>
				</div>
				<div class="page_description">
					<h4> Description:</h4>
					<p><?php echo $data['description']; ?></p>
				</div>
			</div>
		</div>
<?php
include('footer.php');
?>