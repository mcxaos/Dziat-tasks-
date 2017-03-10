<form method="post">
	<input type=text name='name' placeholder='Product name'/><p/>
	<input type=text name='price' placeholder='Product price'/><p/>
	<select name="types">
		<?php while ($row = mysqli_fetch_assoc($typeList)) :?>
  		<option value="<?=$row[id]?>"><?=$row[name]?></option>
  		<? endwhile;?>
	</select><p/>
	<input type='submit' />
</form>