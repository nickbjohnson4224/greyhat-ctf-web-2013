<?php
if (strcmp($_GET["username"], "admin") == 0 and strcmp($_GET["password"], "greyhat_is_cool") == 0)
{
    echo "The flag is: A902BC33A";
}
else
{
    echo "Incorrect login";
}
?>
