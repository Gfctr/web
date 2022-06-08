<?php
class Caixa28
{
    public function myOS()
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === (chr(87) . chr(73) . chr(78)))
            return true;

        return false;
    }

    public function ping($ip_addr)
    {
        if ($this->myOS()) {
            if (!exec("ping -n 1 -w 1 " . $ip_addr . " 2>NUL > NUL && (echo 0) || (echo 1)"))
                return true;
        } else {
            if (!exec("ping -q -c1 " . $ip_addr . " >/dev/null 2>&1 ; echo $?"))
                return true;
        }
        return false;
    }
}

$ip_addr = "172.16.10.28";

if ((new Caixa28())->ping($ip_addr))
    echo '<button id="open8" class="btn btn-success btn-xs success-button" type="button" onclick="anydesk8()">On-line</button>';
else
    echo '<button class="btn btn-danger btn-xs error-button" type="button">Off-line</button>';
?>

<div id="popup8" class="popup">
    <button class="btn anydesk btn-xs success-button" type="button" onclick='anydesk8()'><img class="img-anydesk" src="./assets/icons/anydesk.png" onclick="location.href='anydesk:294681414'" alt=""></button>
</div>

<script>
    $(document).ready(function() {
        $('#popup8').hide()
    });

    $('#open8').on('click', function() {
        $('#popup8').show(0)
    });

    $(document).mouseup(function(e) {
        var popup8 = $("#popup8");
        if (!$('#open8').is(e.target) && !popup8.is(e.target) && popup8.has(e.target).length == 0) {
            popup8.hide(0);
        }
    });
</script>