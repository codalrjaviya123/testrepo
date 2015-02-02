<?php
        header('Content-type: text/xml');
?>
<Response>
            <Dial callerId="+1619-320-6293"><?php echo htmlspecialchars($_REQUEST["tocall"]); ?></Dial>
</Response>
    