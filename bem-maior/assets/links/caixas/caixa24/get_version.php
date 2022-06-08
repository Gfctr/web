<?php
if (file_exists("//10.1.1.214/mod-020/PCSIS2075.ass")) {
	$url = '//10.1.1.214/mod-020/PCSIS2075.ass';
	$dadosSite = file_get_contents($url);
	$var1 = explode('<versao>', $dadosSite);
	$var2 = explode('</versao>', $var1[1]);
	//echo $var2[0];
	echo "<button id='open4' class='btn btn-success btn-xs version-button' type='button'>" . $var2[0] . "</button>";
} else
	echo '<button class="btn btn-danger btn-xs hover error-button" type="button">Off-line</button>';
?>

<div id="popup4" class="popup">
	<span class="text-center">
		<script>
			function myAjax24() {
				$.ajax({
					type: "POST",
					url: './assets/links/caixas/caixa24/update_version.php',
					data: {
						action: 'call_this'
					},
				});
			}
		</script>
	</span>
	<button class="btn btn-xs btn-fill update-button" type="button" onclick="demo.showSwal('success-message'); myAjax24()">Atualizar</button>
</div>

<script>
	$(document).ready(function() {
		$('#popup4').hide()
	});

	$('#open4').on('click', function() {
		$('#popup4').show(0)
	});

	$(document).mouseup(function(e) {
		var popup4 = $("#popup4");
		if (!$('#open4').is(e.target) && !popup4.is(e.target) && popup4.has(e.target).length == 0) {
			popup4.hide(0);
		}
	});
</script>