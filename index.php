<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="madlibs">
        <div class="madlibs_sub">
            <h1>Mad Libs</h1>
            <div class="madlibs_container">
                <div class="madlibs_menu">
                    <div class="madlibs_menu_item">Er heerst paniek</div>
                    <div class="madlibs_menu_item">Onkunde</div>
                </div>
                <div class="madlibs_vragen">
                    <?php 
                        if(isset($_GET['type']) && $_GET['type'] == "onkunde"){
                    ?>
                        <h2>Onkunde</h2>
                        <form action="" id="onkunde">
                            <label for="vraag1">Wat zou je graag willen kunnen?</label>
                            <input type="text" id="vraag1" name="vraag1"><br>
                            <label for="vraag2">Wat zou je graag willen kunnen?</label>
                            <input type="text" id="vraag2" name="vraag2"><br>
                            <label for="vraag3">Wat zou je graag willen kunnen?</label>
                            <input type="text" id="vraag3" name="vraag3"><br>
                            <label for="vraag4">Wat zou je graag willen kunnen?</label>
                            <input type="text" id="vraag4" name="vraag4"><br>
                            <label for="vraag5">Wat zou je graag willen kunnen?</label>
                            <input type="text" id="vraag5" name="vraag5"><br>
                            <label for="vraag6">Wat zou je graag willen kunnen?</label>
                            <input type="text" id="vraag6" name="vraag6"><br>
                            <label for="vraag7">Wat zou je graag willen kunnen?</label>
                            <input type="text" id="vraag7" name="vraag7">
                            <button type="button">Versturen</button>
                        </form>
                    <?php
                        }else{
                    ?>
                    
                    <?php
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