#kt 

$scriptpath = $MyInvocation.MyCommand.Path
$dir = Split-Path $scriptpath

$123 = read-host "Mis on csv faili nimi? (.csv)"

if ((![System.IO.File]::Exists($dir)) -and $123 -notmatch "$_.csv"){

    write-host "kuulse seda faili ei eksisteeri, mis sinuga toimub"

    DO
        {  
            $123 = read-host "pane nyyd OIGE .csv fail siia pls: "
        }

    Until ((test-path $dir/$123sitt) -eq $true -and $123 -match "$_.csv")  

} 

$kanamuna = ""
$kanamuna = get-content $dir/$123
new-item $dir\genderbender.txt

foreach ($nimi in $kanamuna){
    

    
    
     >> $dir\genderbender.txt
}


