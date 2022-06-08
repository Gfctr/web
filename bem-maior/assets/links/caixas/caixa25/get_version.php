<?php
if (file_exists("//10.1.1.215/mod-020/PCSIS2075.ass")) {
	$url = '//10.1.1.215/mod-020/PCSIS2075.ass';
	$dadosSite = file_get_contents($url);
	$var1 = explode('<versao>', $dadosSite);
	$var2 = explode('</versao>', $var1[1]);
	//echo $var2[0];
	echo "<button id='open5' class='btn btn-success btn-xs version-button' type='button'>" . $var2[0] . "</button>";
} else
	echo '<button class="btn btn-danger btn-xs hover error-button" type="button">Off-line</button>';
?>

<div id="popup5" class="popup">
	<span class="text-center">
		<script>
			function myAjax25() {
				$.ajax({
					type: "POST",
					url: './assets/links/caixas/caixa25/update_version.php',
					data: {
						action: 'call_this'
					},
				});
			}
		</script>
	</span>
	<button class="btn btn-xs btn-fill update-button" type="button" onclick="demo.showSwal('success-message'); myAjax25()">Atualizar</button>
</div>

<script>
	$(document).ready(function() {
		$('#popup5').hide()
	});

	$('#open5').on('click', function() {
		$('#popup5').show(0)
	});

	$(document).mouseup(function(e) {
		var popup5 = $("#popup5");
		if (!$('#open5').is(e.target) && !popup5.is(e.target) && popup5.has(e.target).length == 0) {
			popup5.hide(0);
		}
	});
</script>