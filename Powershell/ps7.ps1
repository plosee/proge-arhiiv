hostname
$m = get-disk | measure
write-host $m.count "ketas(t)"

$s = (Get-CimInstance -ClassName Win32_LogicalDisk).size
$fs = (Get-CimInstance -ClassName Win32_LogicalDisk).freespace

$mata = ($fs[0] / $s[0])*100
$mate = [math]::ceiling($mata) 
write-host "vaba ruumi on" $mate "%"

if ($mate -lt 50){
    write-host "su ketas hakkab vaikselt tais saama" 
}elseif ($mate -gt 50){
    write-host "su ketas tegelt paris tyih juhuu"
}
