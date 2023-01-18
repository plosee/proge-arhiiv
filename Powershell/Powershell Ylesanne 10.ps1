#sama kataloog, mis skriptil
$scriptpath = $MyInvocation.MyCommand.Path
$dir = Split-Path $scriptpath
 
$xml = [xml](Get-Content $dir\customers.xml)

$rows = $xml.customers.customer
foreach ($row in $rows)
{if ($row.country -eq "Poland"){
  $row.full_name
    }

}
    
