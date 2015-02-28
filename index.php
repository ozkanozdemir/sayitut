<?php

namespace sayibulmaca;

/**
*  @ author Özkan Özdemir
*/

include_once 'class/sayitut_class.php';

$ustLimit	= 250; // Üst Limit Sayısını Belirleme

$sayitut 	= new sayitut($ustLimit);

$sayilar 	= $sayitut->sayilari_getir();

include_once 'inc/head.php';
?>
	<script>
		var ustLimit 	= <?=$ustLimit?>;
	</script>
<div class="container">
	<div class="row text-center">
		<h2>Sayı Bulmaca</h2>
		<h5>1 - <?=$ustLimit?> arası bir sayı tutun.</h5>
	</div>
	<?php
		foreach ($sayilar as $key => $value) {
			echo '<div class="row"><ul class="list-group"><li class="list-group-item">';
			echo implode(' - ', $value);
			echo "<div class='text-center'><label><input type='checkbox' value='$key' class='varmi'/></label></div>";
			echo "</li></ul></div>";
		}
	?>
	<div class="row text-center">
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target=".sonuc" id="bul">Bul</button>
		<div class="modal fade sonuc" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="alert alert-success modal-content" role="alert">...</div>
		  </div>
		</div>
	</div>
</div> <!-- /container -->
<?php
include_once 'inc/analyticstracking.php';
include_once 'inc/foot.php';