<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chicago</title>
    <link rel="stylesheet" href="./style/style.css" />
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">

    <?php
    require_once("./inc/data.php");
    function createCard($name, $img, $type, $price, $description, $linkMap, $ticket)
    {
        $card = <<< HTML
                <div class="card">
                    <h1 class="card-name">$name</h1>
                    <img src="$img" class="card-img" />
                    <div class="card-info">
                        <h2 class="attraction-type">Attraction type: <span class="attraction-type-value">{$type}</span></h2>
                        <h2 class="price-range">Price range: <span class="price-range-value">
                HTML;

        if ($price === 0)
            $card .= "free";
        else
            for ($i = 0; $i < $price; $i++) {
                $card .= "€";
            }

        $card .= <<< HTML
                    </span></h2>
                    </div>
                    <button class="exit-btn">X</button>
                    <div class="card-info-detail">
                        <h2 class="description-lable">descrizione:</h2>
                        <p class="description">$description</p>
                        <iframe class="map" src="$linkMap" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <a href="$ticket" class="ticket-btn">compra il biglietto!</a>
                    </div>
                </div>
                HTML;

        return $card;
    }
    ?>
</head>

<body>
    <nav>
        <h1 class="city-name">Chicago</h1>
    </nav>

    <div class="pageimage">
        <img src="./icon.png" alt="" id="chicago-icon">
        <button id="more">
            discover the places to visit!
        </button>
    </div>

    <section class="main">
        <?php
        foreach ($arr as $attr) {
            echo createCard($attr["name"], $attr["img"], $attr["type"], $attr["price"], $attr["description"], $attr["maplink"], $attr["ticket"]);
        }
        ?>
    </section>

    <footer>
        <h1 class="footer-text">site by Francesco Arzilli </h1>
        <h1 class="footer-class">5G</h1>
    </footer>
</body>

<script src="./script.js"></script>

</html>