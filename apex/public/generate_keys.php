<?php

  require_once('../private/initialize.php');

  if(isset($_POST['submit'])) {
    // $config = array(
    //   "digest_alg" => "sha512",
    //   "private_key_bits" => 2048,
    //   "private_key_type" => OPENSSL_KEYTYPE_RSA,
    // );

    //Create the keypair
    // $res = openssl_pkey_new($config);

    //Get private key
    // openssl_pkey_export($res, $private_key);

    //Get the public key
    // $public_key = openssl_pkey_get_details($res);
    // $public_key = $public_key["key"];

    $keys = generate_keys();
    $public_key = $keys['public'];
    $private_key = $keys['private'];

  }

?>

<!doctype html>

<html lang="en">
  <head>
    <title>Generate Public-Private Keys</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" media="all" href="includes/styles.css" />
  </head>
  <body>

    <a href="index.php">Main menu</a>
    <br/>

    <h1>Generate Public-Private Keys</h1>

    <div id="generate">
      <form action="" method="post">
        Generate a pair of public/private keys for use in public key cryptography.
        <div>
          <input type="submit" name="submit" value="Generate">
        </div>
      </form>

      <?php if(isset($public_key)) { ?>
      <div id="public-key">
        <h2>Public Key</h2>
        <pre><?php echo h($public_key); ?></pre>
      </div>
      <?php } ?>
      <?php if(isset($private_key)) { ?>
      <div id="private-key">
        <h2>Private Key</h2>
        <pre><?php echo h($private_key); ?></pre>
      </div>
      <?php } ?>
    </div>

  </body>
</html>
