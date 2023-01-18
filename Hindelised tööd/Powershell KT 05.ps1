$scriptpath = $MyInvocation.MyCommand.Path
$dir = Split-Path $scriptpath

$domains = get-content $dir/domains.csv
new-item $dir/tootavdom.txt
new-item $dir/ntootavdom.txt

foreach ($domain in $domains) {
    
    $error.clear()
    try { wget $domain -UseBasicParsing }
    catch { "Error occured" }
    if (!$error) { $domain >> $dir/tootavdom.txt }
    else { $domain >> $dir/ntootavdom.txt 
    
}    