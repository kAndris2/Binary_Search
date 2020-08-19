<?php
    function Travel($route)
    {
        $sub_folder = scandir($route);
        $num = count($sub_folder);

        for ($i = 2; $i < $num; $i++) {
            ?><br>
            <?php
            if (is_dir($route . "\\" . $sub_folder[$i]))
                Travel($route . "\\" . $sub_folder[$i]);
            else
                echo($sub_folder[$i]);
        }
    }

    Travel($_POST["id"]);