<div class="result">
	<?php
    if (isset($_REQUEST['hashes'])) {
        echo "<span id='result' onClick='selectText()'>".hashes($_REQUEST['hashes']).'</span>';
        echo "<p id='message'> <br />Text has been copied, now paste in the text-area </p>";
    }
    ?>
</div>