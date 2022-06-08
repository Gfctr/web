<?php
class Caixa23
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

$ip_addr = "10.1.1.213";

if ((new Caixa23())->ping($ip_addr))
    echo '<button id="open3" class="btn btn-success btn-xs success-button" type="button" onclick="anydesk3()">On-line</button>';
else
    echo '<button class="btn btn-danger btn-xs error-button" type="button">Off-line</button>';
?>

<div id="popup3" class="popup">
    <button class="btn anydesk btn-xs success-button" type="button" onclick='anydesk3()'><img class="img-anydesk" src="./assets/icons/anydesk.png" onclick="location.href='anydesk:329507267'" alt=""></button>
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