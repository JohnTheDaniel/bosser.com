    <div id="navwrap">
        <div id="navigation">
            <!--barnen start, länk till daniel, jenny och simon-->

            <div id="barnen" style="display:none;">
                <div id="daniel" class="barnen">
                    <a href="http://www.thebananaworld.com/johndaniel/index.html"></a>

                    <div>
                        <center>
                            Daniel
                        </center>
                    </div>
                </div>

                <div id="jenny" class="barnen">
                    <a href="jenny/index.html"></a>

                    <div>
                        <center>
                            Jenny
                        </center>
                    </div>
                </div>

                <div id="simon" class="barnen">
                    <a href="simon/index.html"></a>

                    <div>
                        <center>
                            Simon
                        </center>
                    </div>
                </div>
            </div><!--länkar start-->

            <div id="hem" onclick="window.location.href='index.html'">
                <div class="meny">
                    <center>
                        <h3><i>Hem</i></h3>
                    </center>
                </div>
            </div>

            <div id="kontakt" onclick="window.location.href='kontaktaoss.html'">
                <div class="meny">
                    <center>
                        <h2>Kontakta</h2>
                    </center>
                </div>
            </div>

            <div id="baten" onclick="window.location.href='baten.html'">
                <div class="meny">
                    <center>
                        <h2>Båten</h2>
                    </center>
                </div>
            </div>
        </div>

        <div id="header-image"></div>
    </div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		//Hittar url för sidan där navwrap används
		var href = window.location.href
		
		//om urlen innehåller "index.php" så är vi på index-sidan 
		if (href.indexOf("index.php") !== -1){
			//Anpassad css för index.
			$("#navwrap").css("background", "url(images/backgroundnewt.png)");
			$("#hem").css("color", "color:blue;");
		}
		
	});
</script>