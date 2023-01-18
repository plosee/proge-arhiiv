$scriptpath = $MyInvocation.MyCommand.Path
$dir = Split-Path $scriptpath


$rhost = read-host "mis on su .csv faili nimi?"

if ((![System.IO.File]::Exists($dir)) -and $rhost -notmatch "$_.csv"){

    write-host "kuulse seda faili ei eksisteeri, mis sinuga toimub"

    DO
        {  
            $rhost = read-host "pane nyyd OIGE .csv fail siia pls: "
        }

    Until ((test-path $dir/$rhost) -eq $true -and $rhost -match "$_.csv")  

} 

$csvinp = ""
$csvinp = Get-Content $dir/$rhost
new-item $dir\domandmed.txt 

foreach ($nimi in $csvinp){

    $strip = $nimi.Replace("gmail", "").Replace("com","").replace("@", "") -replace ".$"
    $parts = $strip -Split "\."
    $rand = Get-Random -Minimum 100 -Maximum 999

    $kasutaja = $strip[0]+$parts[1]
    $parool = $strip[0]+($parts[1])[0]+$rand
    
    $whost = $kasutaja+" "+$parool

    $whost >> $dir\domandmed.txt
}