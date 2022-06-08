<?php
if (file_exists("//10.1.1.216/mod-020/PCSIS2075.ass")) {
	$url = '//10.1.1.216/mod-020/PCSIS2075.ass';
	$dadosSite = file_get_contents($url);
	$var1 = explode('<versao>', $dadosSite);
	$var2 = explode('</versao>', $var1[1]);
	//echo $var2[0];
	echo "<button id='open6' class='btn btn-success btn-xs version-button' type='button'>" . $var2[0] . "</button>";
} else
	echo '<button class="btn btn-danger btn-xs hover error-button" type="button">Off-line</button>';
?>

<div id="popup6" class="popup">
	<span class="text-center">
		<script>
			function myAjax26() {
				$.ajax({
					type: "POST",
					url: './assets/links/caixas/caixa26/update_version.php',
					data: {
						action: 'call_this'
					},
				});
			}
		</script>
	</span>
	<button class="btn btn-xs btn-fill update-button" type="button" onclick="demo.showSwal('success-message'); myAjax26()">Atualizar</button>
</div>

<script>
	$(document).ready(function() {
		$('#popup6').hide()
	});

	$('#open6').on('click', function() {
		$('#popup6').show(0)
	});

	$(document).mouseup(function(e) {
		var popup6 = $("#popup6");
		if (!$('#open6').is(e.target) && !popup6.is(e.target) && popup6.has(e.target).length == 0) {
			popup6.hide(0);
		}
	});
</script>