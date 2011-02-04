<?php
	 
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
	<fieldset>
		<p><label for="category">Category</label></p>
		<select name="categoryid">
			<?php 
				/*$categories=  get_categories();
				foreach ($lcp_categories as $cat) :
					$option = '<option value="' . $cat->cat_ID;
					if ($cat->cat_ID == attribute_escape($categoryid)) :
						$option .= ' selected = "selected" ';
					endif;
					$option .=  '">';
					$option .= $cat->cat_name;
					$option .= '</option>';
					echo $option;
				endforeach;*/
			?>
		</select>
		<p><label for="numberofposts">"Number of posts"</label>
		<br/>
			<input size="2" name="numberofposts" type="text" value="0" />
		</p>
		
		<p><label for="offset">Offset: <br/>
			<input size="2" name="offset" type="text" value="0" />
		</label></p>
		
		<p><label for="order">"Order"</label> 
		<br/>
		<select  name="orderby" type="text" />
			<option value='date'>Date</option>
			<option value='title'>Post title</option>
			<option value='author'>Author</option>
			<option value='rand'>Random</option>
		</select>
		</p>
	</fieldset>
</body>
</html>