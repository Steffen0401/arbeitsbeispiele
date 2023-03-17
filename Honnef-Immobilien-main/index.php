<?php require_once('head.phtml'); ?>
    <link rel="icon" href="./img/großesHMiniIcon.jpg" type="image/x-icon">
    <title>HONNEF Immobilien</title>
</head>
<body>
    <?php include_once('header.phtml'); ?>
    <main id="index">
        <div id="imgSlideShow"></div>
        <h1>Willkommen bei HONNEF Immobilien</h1>

        <div class="disturbance">
            <a class="slideOut" href="<?php echo $url ?>/Stoerungsmeldung/">Störungsmeldung senden</a>
            <div class="flag">
                <a href="<?php echo $url ?>/Stoerungsmeldung/">Störung melden!</a>
            </div>
        </div>
        
        <div id="navigation">
            <a class="verkaufen" href="<?php echo $url ?>/Verkaufen/"><img src="img/navigation/Verkaufen.png" alt="Verkaufen"></a>
            <a class="vermieten" href="<?php echo $url ?>/Vermieten/"><img src="img/navigation/Vermieten.png" alt="Vermieten"></a>
            <a class="verwalten" href="<?php echo $url ?>/Verwalten/"><img src="img/navigation/Verwalten.png" alt="Verwalten"></a>
            <a class="vertrauen" href="<?php echo $url ?>/Vertrauen"><img src="img/navigation/Vertrauen.png" alt="Vertrauen"></a>
            <div class="row1bg"></div>
            <div class="row2bg"></div>
            <div class="row3bg"></div>
            <div class="row4bg"></div>
        </div>

        <div id="infoText">
            <i class="fas fa-info-circle" height="500px"></i>
            <p>Klicken Sie auf eines der Banner um zu der angegebenen Seite zu gelangen</p>
        </div>
    </main>
    <?php include_once('./footer.phtml'); ?>
</body>
</html>