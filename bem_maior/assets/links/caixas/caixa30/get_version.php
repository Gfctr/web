<?php
if (file_exists("//10.1.1.220/mod-020/PCSIS2075.ass")) {
	$url = '//10.1.1.220/mod-020/PCSIS2075.ass';
	$dadosSite = file_get_contents($url);
	$var1 = explode('<versao>', $dadosSite);
	$var2 = explode('</versao>', $var1[1]);
	//echo $var2[0];
	echo "<button id='open10' class='btn btn-success btn-xs version-button' type='button'>" . $var2[0] . "</button>";
} else
	echo '<button class="btn btn-danger btn-xs hover error-button" type="button">Off-line</button>';
?>

<div id="popup10" class="popup">
	<span class="text-center">
		<script>
			function myAjax30() {
				$.ajax({
					type: "POST",
					url: './assets/links/caixas/caixa30/update_version.php',
					data: {
						action: 'call_this'
					},
				});
			}
		</script>
	</span>
	<button class="btn btn-xs btn-fill update-button" type="button" onclick="demo.showSwal('success-message'); myAjax30()">Atualizar</button>
</div>

<script>
	$(document).ready(function() {
		$('#popup10').hide()
	});

	$('#open10').on('click', function() {
		$('#popup10').show(0)
	});

	$(document).mouseup(function(e) {
		var popup10 = $("#popup10");
		if (!$('#open10').is(e.target) && !popup10.is(e.target) && popup10.has(e.target).length == 0) {
			popup10.hide(0);
		}
	});
</script>