<?php
class Caixa24
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

$ip_addr = "10.1.1.214";

if ((new Caixa24())->ping($ip_addr))
    echo '<button id="open4" class="btn btn-success btn-xs success-button" type="button" onclick="anydesk4()">On-line</button>';
else
    echo '<button class="btn btn-danger btn-xs error-button" type="button">Off-line</button>';
?>

<div id="popup4" class="popup">
    <button class="btn anydesk btn-xs success-button" type="button" onclick='anydesk4()'><img class="img-anydesk" src="./assets/icons/anydesk.png" onclick="location.href='anydesk:935674537'" alt=""></button>
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