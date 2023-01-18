cls
"***********************************************"
systeminfo | findstr /c:"Host Name"
"***********************************************"
systeminfo | findstr /c:"OS Name"
"***********************************************"
systeminfo | findstr /c:"IPAddress"
"***********************************************"
systeminfo | findstr /c:"Total Physical Memeory"
"***********************************************"
get-wmiobject win32_processor | findstr /c:"Name"
"***********************************************"
get-wmiobject win32_videocontroller | findstr /c:"Name"
"***********************************************"
get-localuser

