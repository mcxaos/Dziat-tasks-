<div class="box">
	<table border="1">
		<tr>
		    <th>Product name</th>
		    <th>Price</th>
		    <th>Type</th>
		</tr>
		<?php while ($row = mysqli_fetch_assoc($productsList)) :?>
		 	<tr>
		 		<td><?= $row['pname'];?></td>
		 		<td><?= $row['price'];?></td>
		 		<td><?= $row['tname'];?></td>
		 	</tr>
		<? endwhile;?>
	</table>
	<div>
	<span>Page</span>
		<?foreach ($this->pgs as $value):?>
			<a href="/?page=<?=$value?>"><?=$value?></a>
		<? endforeach;?>
	</div>
</div>
<div class="box">
	<table border="1">
		<tr>
		    <th>Type name</th>
		    <th>Price sum</th>
		</tr>
		<?php while ($row = mysqli_fetch_assoc($typePriceList)) :?>
		 	<tr>
		 		<td><?= $row['tname'];?></td>
		 		<td><?= $row['price'];?></td>
		 	</tr>
		<? endwhile;?>
	</table>
</div>