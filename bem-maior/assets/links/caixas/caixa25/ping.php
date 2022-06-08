<?php
class Caixa25
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

$ip_addr = "10.1.1.215";

if ((new Caixa25())->ping($ip_addr))
    echo '<button id="open5" class="btn btn-success btn-xs success-button" type="button" onclick="anydesk5()">On-line</button>';
else
    echo '<button class="btn btn-danger btn-xs error-button" type="button">Off-line</button>';
?>

<div id="popup5" class="popup">
    <button class="btn anydesk btn-xs success-button" type="button" onclick='anydesk5()'><img class="img-anydesk" src="./assets/icons/anydesk.png" onclick="location.href='anydesk:151744577'" alt=""></button>
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