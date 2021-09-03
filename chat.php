<?php
include 'content.html';
?>

<!DOCTYPE html>
<html>
    <form name="chat" id="chat" method="POST" action="deliver.php">
        <input type="text" name="mess" id="mess">
    </form>

    <button id="btn">Send</button>

    <script>
        var chat = document.getElementById("chat");
        var btn = document.getElementById("btn");

        btn.onclick = function() {
            chat.submit();
        }
    </script>
</html>