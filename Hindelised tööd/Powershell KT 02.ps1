$scriptpath = $MyInvocation.MyCommand.Path
$dir = Split-Path $scriptpath

$csvinp = read-host "Mis on sinu CSV faili nimetus"

if ($csvinp -notmatch "$_.csv")
{
    $csvinp = read-host "Seda faili pole voimalik selles skriptis kasutada. Palun pange teine fail"
}
else
{
    write-host "$csvinp on sobiva faililaiendiga, tanud."
    $emailinp = read-host "mis on sinu domeen (naiteks '@hkhk.edu.ee')"
}

$emails = import-csv $dir\$csvinp -header id,first_name,last_name,email,gender,ip_address  | Select-Object  id,first_name,last_name,email,gender,ip_address -skip 1
new-item $dir\emailid.txt

foreach($nimi in $emails){

    $enimi = $nimi.first_name
    $vnimi = $nimi.last_name

    $sitaratas = $enimi.ToLower()+$vnimi.ToLower()+$emailinp
    $sitaratas >> $dir/emailid.txt

}
