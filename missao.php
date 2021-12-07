<?php 

/**
 * Obter missão de um usuário Habbo
 * Utilizei a API do proprio jogo, porém, tem a API HABBO que é feita pelos usuaários
 * @param string $nick nick do usuário
 * @return string   missão do usuário
 */

class Missao{ 
public function getMotto($nick) {
$nick = $_POST['nick'];
$url = 'https://www.habbo.com/api/public/users?name='.$nick.'&site=hhbr';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36');
$data = curl_exec($ch);
curl_close ($ch);
$data = json_decode($data);
$missao = $data->motto;
echo 'Missão ($nick): ' .$missao.'<br>';
}
}
?>
<!DOCTYPE html>
<html>
<center>
<form method="POST">
<input type="text" name="nick" placeholder="Nick">   
<input type="submit" name="enviar">    
</form>
</center>
</html>


