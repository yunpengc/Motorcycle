
<ul id="product_line" style="list-style-type:none;  text-align:center; margin-right:2%;margin-left:2%" data-role="listview">
		<li id="image">
		<?php if($productImage==null) 
		echo "<img src='../../../../../../../../../../CodeIgniter/image/product1.png' width='80%'>";
		else echo"<img src='../../../../../../../../../../CodeIgniter/image/".$productImage."' width='80%'>";
		?></li>
        <li style="text-align:center;;font-variant:small-caps; font-size:24px" data-role="list-divider"><?php echo $productName?></li>
         <li id='space'>space</li>
		<li id="additional" style="font-size:24px; color:#999"> Price: 
        <?php echo "<span style='color:#F60; text-decoration:line-through'>$".$productPrice."</span><li id='special'>SALE: $".$specialPrice."</li>";?>
        <li><?php echo $productDescription?></li>
        <li id='space'>space</li>
        <li><a href="/CodeIgniter/index.php/Main_page/info/<?php echo $productID ?>">Add to Cart</a></li>
</ul>

