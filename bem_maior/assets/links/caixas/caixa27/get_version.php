<?php
if (file_exists("//172.16.10.27/mod-020/PCSIS2075.ass")) {
	$url = '//172.16.10.27/mod-020/PCSIS2075.ass';
	$dadosSite = file_get_contents($url);
	$var1 = explode('<versao>', $dadosSite);
	$var2 = explode('</versao>', $var1[1]);
	//echo $var2[0];
	echo "<button id='open7' class='btn btn-success btn-xs version-button' type='button'>" . $var2[0] . "</button>";
} else
	echo '<button class="btn btn-danger btn-xs hover error-button" type="button">Off-line</button>';
?>

<div id="popup7" class="popup">
	<span class="text-center">
		<script>
			function myAjax27() {
				$.ajax({
					type: "POST",
					url: './assets/links/caixas/caixa27/update_version.php',
					data: {
						action: 'call_this'
					},
				});
			}
		</script>
	</span>
	<button class="btn btn-xs btn-fill update-button" type="button" onclick="demo.showSwal('success-message'); myAjax27()">Atualizar</button>
</div>

<script>
	$(document).ready(function() {
		$('#popup7').hide()
	});

	$('#open7').on('click', function() {
		$('#popup7').show(0)
	});

	$(document).mouseup(function(e) {
		var popup7 = $("#popup7");
		if (!$('#open7').is(e.target) && !popup7.is(e.target) && popup7.has(e.target).length == 0) {
			popup7.hide(0);
		}
	});
</script>