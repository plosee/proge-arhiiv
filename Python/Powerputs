$scriptpath = $MyInvocation.MyCommand.Path
$dir = Split-Path $scriptpath

$123sitt = read-host "Mis on csv faili nimi? (.csv)"

if ($123sitt -notmatch "$_.csv")
{
    DO
    {
        $123sitt = read-host "palun pane õige fail '.csv' faililaiendga"
    }

    Until ($123sitt -match "$_.csv")
}

import-csv $dir/$123sitt
