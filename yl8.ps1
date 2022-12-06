
function mata{
     <#
    .SYNOPSIS
        arvutab pindala ringil
    .DESCRIPTION
        arvutab pindala ringil
    .EXAMPLE
        arvutab pindala ringil
    .EXAMPLE
        arvutab pindala ringil
    #>
        param(
        
            # Esimese parameetri kirjeldus
            $r
         )



    $s = [Math]::PI*[Math]::Pow($r, 2)
    $s
    

    }


function matat2($nimi){
    $nimi.tolower()
    $nimi.replace("ö", "o").replace("ä", "a").replace("õ", "o").replace("ü", "u")
    (Get-Culture).TextInfo.ToTitleCase($nimi.tolower())
    
    }
    
    
matat2("õüöä")