<main>
    <h2 class="center">Produits récupérés depuis la bdd</h2>
    <div class="card-container">
        <?php
        function connect_to_database()
        {
            $servername = "localhost";
            $produit = "root";
            $password = "";
            $databasename = "boulangerie";
            try {
                $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $produit, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // echo " Connecté avec succés!";
                return $pdo;
            } catch (PDOException $e) {
                echo "Erreur " . $e->getMessage();
            }
        }

        $pdo = connect_to_database();
        $query = $pdo->query("SELECT * FROM produits WHERE 1");
        $produits = $query->fetchAll();

        foreach ($produits as $produit) {
            echo "<div class='card'>";

            echo "<h3>$produit[nom]</h3>";
            echo "<h5>Ingrédients:</h5>";
            echo "<p>$produit[ingredients]</p>";
            echo "<h5>Prix:</h5>";
            echo "<p>$produit[prix]€</p>";
            echo "<h5>Quantité disponible:</h5>";
            echo "<p>$produit[quantite]</p>";

            echo "</div>";
        }

        ?>
    </div>
</main>