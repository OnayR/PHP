<?php

$kappersagenda = array("");

print("<ul>");
foreach ($kappersagenda as $tijd => $afspraak) {
    if ($afspraak == "") {
        print("<li>" . $tijd . "</li>");
    }

}
print("</ul>");