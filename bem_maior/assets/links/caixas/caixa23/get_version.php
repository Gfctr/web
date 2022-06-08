<?php
if (file_exists("//172.16.10.23/mod-020/PCSIS2075.ass")) {
	$url = '//172.16.10.23/mod-020/PCSIS2075.ass';
	$dadosSite = file_get_contents($url);
	$var1 = explode('<versao>', $dadosSite);
	$var2 = explode('</versao>', $var1[1]);
	//echo $var2[0];
	echo "<button id='open3' class='btn btn-success btn-xs version-button' type='button'>" . $var2[0] . "</button>";
} else
	echo '<button class="btn btn-danger btn-xs hover error-button" type="button">Off-line</button>';
?>

<div id="popup3" class="popup">
	<span class="text-center">
		<script>
			function myAjax23() {
				$.ajax({
					type: "POST",
					url: './assets/links/caixas/caixa23/update_version.php',
					data: {
						action: 'call_this'
					},
				});
			}
		</script>
	</span>
	<button class="btn btn-xs btn-fill update-button" type="button" onclick="demo.showSwal('success-message'); myAjax23()">Atualizar</button>
</div>

<script>
	$(document).ready(function() {
		$('#popup3').hide()
	});

	$('#open3').on('click', function() {
		$('#popup3').show(0)
	});

	$(document).mouseup(function(e) {
		var popup3 = $("#popup3");
		if (!$('#open3').is(e.target) && !popup3.is(e.target) && popup3.has(e.target).length == 0) {
			popup3.hide(0);
		}
	});
</script>