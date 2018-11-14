<?php

echo '<h3>opdracht 1</h3><br>';
    $word = "hallo";
    $length = strlen($word);
$result = [];
for ($i = 0; $i < $length; $i++){
    if ($i % 2 == 0){
        $cijfer = ord($word[$i]);
        $wordencrypt = $cijfer + $i;
        echo chr($wordencrypt);
    } else {
        $cijfer = ord($word[$i]);
        $wordencrypt = $cijfer - $i;
        echo chr($wordencrypt);
    }
}
echo '<br><br>';
echo '<h3>opdracht 2</h3><br>';
echo 'AES, Blowfish, Camellia, SEED, CAST-128, DES, IDEA, RC2, RC4, RC5, Triple DES, GOST 28147-89';

echo '<br><br>';
echo '<h3>opdracht 3</h3><br>';
echo 'openssl_encrypt — Encrypts data';
echo 'openssl_pkcs7_encrypt — Encrypt an S/MIME message';
echo 'openssl_private_encrypt — Encrypts data with private key';
echo 'openssl_public_encrypt — Encrypts data with public key';
echo '<br>';
echo 'openssl_decrypt — Decrypts data';
echo 'openssl_pkcs7_decrypt — Decrypts an S/MIME encrypted message';
echo 'openssl_private_decrypt — Decrypts data with private key';
echo 'openssl_public_decrypt — Decrypts data with public key';
echo '<br><br>';

echo '<h3>opdracht 4</h3><br>';
echo 'filmpje gekeken';

 echo '<h3>opdracht 5</h3><br>';

echo '<form action="opdracht5.php" method="post">
Name: <input type="text" name="name"><br>
<input type="submit">
</form>';