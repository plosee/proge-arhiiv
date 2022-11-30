${nimi} = "marten laane"
${email} = ",marten.laane@gmail.com"
$date = "suva", "sona", (get-date)
#$date, $email, $nimi
	
$emailid = Get-Content -path C:\users\it22\desktop\emailid.txt
$massiiv = $emailid + $email
$split = $massiiv.split(",")
$split

write-host "emaile on" $split.count

write-host $split[0, 30]