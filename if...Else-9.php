
<?php
$t=date("H");
if ($t<"10")
{
    echo "Are you ok!";
}
elseif ($t<"20")
{
    echo "Are you ready!";
}
else
{
    echo "Are you crazy!";
}
?>
