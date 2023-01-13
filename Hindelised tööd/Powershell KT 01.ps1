#kt 1
$scriptpath = $MyInvocation.MyCommand.Path
$dir = Split-Path $scriptpath

$123sitt = read-host "Mis on csv faili nimi? (.csv)"


#if ($123sitt -notmatch "$_.csv")
#{
    ##DO
   #     {
  #          $123sitt = read-host "palun pane õige fail '.csv' faililaiendga"
 #       }
#
 #   Until ($123sitt -match "$_.csv" && test-path)
#}


if ((![System.IO.File]::Exists($dir)) -and $123sitt -notmatch "$_.csv"){

    write-host "kuulse seda faili ei eksisteeri, mis sinuga toimub"

    DO
        {  
            $123sitt = read-host "pane nyyd OIGE .csv fail siia pls: "
        }

    Until ((test-path $dir/$123sitt) -eq $true -and $123sitt -match "$_.csv")  

} 

$sitt = ""
$sitt = get-content  $dir/$123sitt
new-item $dir\muun.txt

foreach ($nimi in $sitt){

    $TextInfo = (Get-Culture).TextInfo
    $muna = $nimi.Replace("gmail", "").Replace("com","").replace(".", " ").replace("@", "")
    $munn = $TextInfo.ToTitleCase($muna)
    
    
    $munn >> $dir\munn.txt
}


