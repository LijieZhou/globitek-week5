<?php
  require_once('../private/initialize.php');

  define('AES_256_CBC', 'aes-256-cbc');

  $plain_text = '';
  $encode_key = '';
  $encrypted_text = '';
  $cipher_text = '';
  $decode_key = '';
  $decrypted_text = '';
  $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(AES_256_CBC));

  if(isset($_POST['submit'])) {

    if(isset($_POST['encode_key'])) {

      // This is an encode request
      $plain_text = isset($_POST['plain_text']) ? $_POST['plain_text'] : nil;
      $encode_key = isset($_POST['encode_key']) ? $_POST['encode_key'] : nil;
      $encrypted_text = openssl_encrypt($plain_text, AES_256_CBC, $encode_key, 0);
      $cipher_text = $encrypted_text;
      // $ciper_text = $encrypted . ':' . $iv;

    } else {

      // This is a decode request
      $cipher_text = isset($_POST['cipher_text']) ? $_POST['cipher_text'] : nil;
      $decode_key = isset($_POST['decode_key']) ? $_POST['decode_key'] : nil;
      // $parts = explode(':', $cipher_text);
      $decrypted_text = openssl_decrypt($cipher_text, AES_256_CBC, $decode_key, 0);

    }
  }

?>

<!doctype html>

<html lang="en">
  <head>
    <title>Symmetric Encryption: Encrypt/Decrypt</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" media="all" href="includes/styles.css" />
  </head>
  <body>

    <a href="index.php">Main menu</a>
    <br/>

    <h1>Symmetric Encryption</h1>

    <div id="encoder">
      <h2>Encrypt</h2>

      <form action="" method="post">
        <div>
          <label for="encode_algorithm">Algorithm</label>
          <select name="encode_algorithm">
            <option value="AES-256-CBC">AES-256-CBC</option>
          </select>
        </div>
        <div>
          <label for="plain_text">Plain text</label>
          <textarea name="plain_text"><?php echo $plain_text; ?></textarea>
        </div>
        <div>
          <label for="encode_key">Key</label>
          <input type="text" name="encode_key" value="<?php echo $encode_key; ?>" />
        </div>
        <div>
          <input type="submit" name="submit" value="Encrypt">
        </div>
      </form>

      <div class="result"><?php echo $encrypted_text; ?></div>
      <div style="clear:both;"></div>
    </div>

    <hr />

    <div id="decoder">
      <h2>Decrypt</h2>

      <form action="" method="post">
        <div>
          <label for="decode_algorithm">Algorithm</label>
          <select name="decode_algorithm">
            <option value="AES-256-CBC">AES-256-CBC</option>
          </select>
        </div>
        <div>
          <label for="cipher_text">Cipher text</label>
          <textarea name="cipher_text"><?php echo $cipher_text; ?></textarea>
        </div>
        <div>
          <label for="decode_key">Key</label>
          <input type="text" name="decode_key" value="<?php echo $decode_key; ?>" />
        </div>
        <div>
          <input type="submit" name="submit" value="Decrypt">
        </div>
      </form>

      <div class="result"><?php echo $decrypted_text; ?></div>
      <div style="clear:both;"></div>
    </div>

  </body>
</html>