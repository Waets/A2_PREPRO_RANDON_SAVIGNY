 <!DOCTYPE html>
 <?php
include"header.php";
?>

<html>

<body>
<div class="slider">
	<input type="radio" name="slide_switch" id="id1"/>
	<label for="id1">
		<img src="img/rolls1.jpg" width="250" alt="rolls1" />
	</label>
	<img src="img/rolls1.jpg" alt="rolls1" />
	
	<!--Lets show the second image by default on page load-->
	<input type="radio" name="slide_switch" id="id2" checked="checked"/>
	<label for="id2">
		<img src="img/rolls2.jpg" width="250" alt="rolls2"/>
	</label>
	<img src="img/rolls2.jpg" alt="rolls2" />
	
	<input type="radio" name="slide_switch" id="id3"/>
	<label for="id3">
		<img src="img/rolls3.jpg" width="250" alt="rolls3"/>
	</label>
	<img src="img/rolls3.jpg" alt="rolls3"/>
	
	<input type="radio" name="slide_switch" id="id4" />
	<label for="id4">
		<img src="img/rolls4.jpg" width="250" alt="rolls4"/>
	</label>
	<img src="img/rolls4.jpg" alt="rolls4"/>
	
	<input type="radio" name="slide_switch" id="id5"/>
	<label for="id5">
		<img src="img/rolls5.jpg" width="250" alt="rolls5"/>
	</label>
	<img src="img/rolls5.jpg" alt="rolls5"/>
</div>
</body>
</html>

