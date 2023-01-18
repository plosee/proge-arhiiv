#kt 1
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
$kanamuna = get-content  $dir/$123
new-item $dir\emails.txt

foreach ($nimi in $kanamuna){

    $TextInfo = (Get-Culture).TextInfo
    $emailgo = $nimi.Replace("gmail", "").Replace("com","").replace(".", " ").replace("@", "")
    $emailTC = $TextInfo.ToTitleCase($emailTC)
    
    
    $emailTC >> $dir\emails.txt
}


