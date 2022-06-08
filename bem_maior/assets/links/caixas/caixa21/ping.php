<?php
class Caixa21
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

$ip_addr = "172.16.10.21";

if ((new Caixa21())->ping($ip_addr))
    echo '<button id="open" class="btn btn-success btn-xs success-button" type="button" onclick="anydesk()">On-line</button>';
else
    echo '<button class="btn btn-danger btn-xs hover error-button" type="button">Off-line</button>';
?>

<div id="popup" class="popup">
    <button class="btn anydesk btn-xs success-button" type="button" onclick='anydesk()'><img class="img-anydesk" src="./assets/icons/anydesk.png" onclick="location.href='anydesk:724703377'" alt=""></button>
</div>

<script>
    $(document).ready(function() {
        $('#popup').hide()
    });

    $('#open').on('click', function() {
        $('#popup').show(0)
    });

    $(document).mouseup(function(e) {
        var popup = $("#popup");
        if (!$('#open').is(e.target) && !popup.is(e.target) && popup.has(e.target).length == 0) {
            popup.hide(0);
        }
    });
</script>