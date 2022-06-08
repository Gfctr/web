<?php
class Caixa30
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

$ip_addr = "10.1.1.220";

if ((new Caixa30())->ping($ip_addr))
    echo '<button id="open10" class="btn btn-success btn-xs success-button" type="button" onclick="anydesk10()">On-line</button>';
else
    echo '<button class="btn btn-danger btn-xs error-button" type="button">Off-line</button>';
?>

<div id="popup10" class="popup">
    <button class="btn anydesk btn-xs success-button" type="button" onclick='anydesk10()'><img class="img-anydesk" src="./assets/icons/anydesk.png" onclick="location.href='anydesk:650366784'" alt=""></button>
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