<?php
if (file_exists("//172.16.10.31/mod-020/PCSIS2075.ass")) {
	$url = '//172.16.10.31/mod-020/PCSIS2075.ass';
	$dadosSite = file_get_contents($url);
	$var1 = explode('<versao>', $dadosSite);
	$var2 = explode('</versao>', $var1[1]);
	//echo $var2[0];
	echo "<button id='open11' class='btn btn-success btn-xs version-button' type='button'>" . $var2[0] . "</button>";
} else
	echo '<button class="btn btn-danger btn-xs hover error-button" type="button">Off-line</button>';
?>

<div id="popup11" class="popup">
	<span class="text-center">
		<script>
			function myAjax31() {
				$.ajax({
					type: "POST",
					url: './assets/links/caixas/caixa31/update_version.php',
					data: {
						action: 'call_this'
					},
				});
			}
		</script>
	</span>
	<button class="btn btn-xs btn-fill update-button" type="button" onclick="demo.showSwal('success-message'); myAjax31()">Atualizar</button>
</div>

<script>
	$(document).ready(function() {
		$('#popup11').hide()
	});

	$('#open11').on('click', function() {
		$('#popup11').show(0)
	});

	$(document).mouseup(function(e) {
		var popup11 = $("#popup11");
		if (!$('#open11').is(e.target) && !popup11.is(e.target) && popup11.has(e.target).length == 0) {
			popup11.hide(0);
		}
	});
</script>