<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <base href="http://localhost/blok3/week2/">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="madlibs">
        <div class="madlibs_sub">
            <h1>Mad Libs</h1>
            <div class="madlibs_container">
                <div class="madlibs_menu">
                    <a href="http://localhost/blok3/week2/madlibs?type=paniek"><div class="madlibs_menu_item">Er heerst paniek</div></a>
                    <a href="http://localhost/blok3/week2/madlibs?type=onkunde"><div class="madlibs_menu_item">Onkunde</div></a>
                </div>
                <div class="madlibs_vragen">
                    <?php 
                        if(isset($_GET['type']) && $_GET['type'] == "result"){
                            if(isset($_GET['cat']) && $_GET['cat'] == 'onkunde'){
                                echo "<h2>Onkunde</h2>";
                                echo "Er zijn veel mensen die niet kunnen ".$_GET['vraag1']." Neem nou ".$_GET['vraag2']." Zelfs met de 
                                hulp van een ".$_GET['vraag4']." of zelfs ".$_GET['vraag3']." kan ".$_GET['vraag2']." niet tekenen
                                Dat heeft niks te maken met een gebrek aan ".$_GET['vraag5']." maar met een teveel aan ".$_GET['vraag6']." 
                                Te veel ".$_GET['vraag6']." leidt tot ".$_GET['vraag7']." en dat is niet goed als je wilt tekenen helaas voor ".$_GET['vraag2']."";
                            } else{
                                echo "<h2>Er heerst paniek...</h2>";
                                echo "Er heerst paniek in het koningkrijk. Koning ".$_GET['vraag2']." is ten einde raad en als koning ".$_GET['vraag2']."
                                ten einde raad is dan roept hij zijn ten-einde-raadsheer ".$_GET['vraag6']." <br> ".$_GET['vraag6']." het is een ramp
                                het is een schande <br> Sire Majesteit Uwe luidruchtigheid wat is er aan de hand <br> Mijn ".$_GET['vraag1']." is verdwenen
                                zo maar zonder waarschuwing en ik had net ".$_GET['vraag5']." voor hem gekocht <br> Majesteit uw ".$_GET['vraag1']." komt vast vanzelf weer terug
                                <br> ja das leuk en aardig maar hoe moet ik in die tijd ".$_GET['vraag8']."";
                            }
                    ?>
                            
                    <?php
                        }else{
                            if(isset($_GET['type']) && $_GET['type'] == "onkunde"){
                                ?>
                                    <h2>Onkunde</h2>
                                    <form action="" id="onkunde">
                                        <input type="hidden" id="type" name="type" value="result">
                                        <input type="hidden" id="cat" name="cat" value="onkunde">
                                        <p for="vraag1">Wat zou je graag willen kunnen?</p>
                                        <input type="text" id="vraag1" name="vraag1"><br>
                                        <p for="vraag2">Met welke persoon kun je goed opschieten?</p>
                                        <input type="text" id="vraag2" name="vraag2"><br>
                                        <p for="vraag3">Wat is je favoriete getal?</p>
                                        <input type="text" id="vraag3" name="vraag3"><br>
                                        <p for="vraag4">Wat heb je altijd bij als je op vakantie gaat?</p>
                                        <input type="text" id="vraag4" name="vraag4"><br>
                                        <p for="vraag5">Wat is je beste persoonlijke eigenlijk?</p>
                                        <input type="text" id="vraag5" name="vraag5"><br>
                                        <p for="vraag6">Wat is je slechtste persoonlijke eigenlijk?</p>
                                        <input type="text" id="vraag6" name="vraag6"><br>
                                        <p for="vraag7">Wat is het ergste wat je kan overkomen?</p>
                                        <input type="text" id="vraag7" name="vraag7">
                                        <br>
                                        <button type="submit">Versturen</button>
                                    </form>
                                <?php
                            }else{
                               //paniek
                               ?>
                                    <h2>Paniek</h2>
                                    <form action="" id="onkunde">
                                        <input type="hidden" id="type" name="type" value="result">
                                        <input type="hidden" id="cat" name="cat" value="paniek">
                                        <p for="vraag1">Welk dier zou je nooit als huisdier willen hebben?</p>
                                        <input type="text" id="vraag1" name="vraag1"><br>
                                        <p for="vraag2">Wie is de belangrijkse persoon in je leven?</p>
                                        <input type="text" id="vraag2" name="vraag2"><br>
                                        <p for="vraag3">In welk land zou je graag willen wonen?</p>
                                        <input type="text" id="vraag3" name="vraag3"><br>
                                        <p for="vraag4">Wat doe je als je je verveelt?</p>
                                        <input type="text" id="vraag4" name="vraag4"><br>
                                        <p for="vraag5">Met welk speelgoed speelde je als kind het meest?</p>
                                        <input type="text" id="vraag5" name="vraag5"><br>
                                        <p for="vraag6">Bij welke docent spijbel je het liefst?</p>
                                        <input type="text" id="vraag6" name="vraag6"><br>
                                        <p for="vraag7">Als je 100.000 euro had wat zou je dan kopen?</p>
                                        <input type="text" id="vraag7" name="vraag7">
                                        <p for="vraag8">Wat is je favoriete bezigheid?</p>
                                        <input type="text" id="vraag8" name="vraag8">
                                        <br>
                                        <button type="submit">Versturen</button>
                                    </form>
                               <?php 
                            }
                        }
                    ?>
                </div>
                <div class="madlibs_footer">
                    <p>Deze website is gemaakt door Jordan Bel 99050630</p>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>