<?php

echo "votre login est: " . htmlspecialchars($_POST["login"]);
echo "<br>";
echo "votre mot de passe est: " . htmlspecialchars($_POST["password"]);

?>

<!-- ou on peut utiliser cette sementique -->

<p>le login est <?php echo htmlspecialchars($_POST["login"]); ?></p>
<p> le mot de passe est <?= htmlspecialchars($_POST["password"]); ?></p>