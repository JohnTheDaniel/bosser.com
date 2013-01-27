<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">
<head>
    <!--
 _______            __             __                  _____         __                _____                __         __ 
|   |   |.===.-..==|  |.=====.    |  |==..==.==.     _|     |.=====.|  |==..=====.    |     \.===.-..=====.|__|.=====.|  |
|       ||  _  ||  _  ||  -__|    |  _  ||  |  |    |       ||  _  ||     ||     |    |  ==  |  _  ||     ||  ||  -__||  |
|__|_|__||___._||_____||_____|    |_____||___  |    |_______||_____||__|__||__|__|    |_____/|___._||__|__||__||_____||__|
                                         |_____|                                                                          

-->
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />

    <title>Bossér Utveckling AB</title>
    <meta http-equiv="Content-Language" content="en-us" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="MSSmartTagsPreventParsing" content="true" />
    <meta name="description" content="Description" />
    <meta name="keywords" content="Keywords" />
    <meta name="author" content="BananaSquad" />
    <style type="text/css" media="all">
/*<![CDATA[*/
    @import "css/master.css";
    /*]]>*/
    </style>
    <style type="text/css">
/*<![CDATA[*/
    #navwrap {
        
        background-repeat: no-repeat;
        background-position: center top;
        position: relative;
        top: -12px;
        
        
    }
    /*]]>*/
    </style>
    <script type="text/javascript">
</script>
</head>

<body>
    <div id="wrapper">
        <div id="top-bar">
            <!--logo bar start-->

            <?php 
            include("logo.php")
            ?>
        </div><!--logo bar end-->
        <!--Denna div innehåller skuggan som omsluter containor-->

        <div id="containorwrap">
            <!--containor start-->

            <div id="containor">
                <!--navigation start, header image, navigation, barnen-->

                <?php
                	include("navwrap.php");
                ?>
                <!--content index start, alla css filer bara för denna sida-->
                <div id="content-index">
                    <div id="nyheter-index">
                        <h2>Nyheter</h2><!--nyheterna-->

                        <div class="nyhet-index" id="one">
                            <b>1 aug 2011</b><br />
                            Bossér Utveckling AB får en ny hemsida skapad av BananaSquad, John Daniel!
                        </div>
                    </div>

                    <div id="streck"></div><!--om oss-->

                    <div id="about-index">
                        <h2>Om oss</h2>Bossér Utveckling AB levererar tjänster inom

                        <h2 class="index">Systemutveckling</h2>

                        <ul>
                            <li>Bred erfarenhet av systemutveckling och -integration i olika miljöer och applikationsområden sedan 1981.</li>

                            <li>Realtidssystem, tekniska beräkningsprogram, simuleringmodeller, drivrutiner, kommunikation och databasapplikationer.</li>

                            <li>20 års erfarenhet av komponentbaserad systemkonstruktion i flertalet moderna programspråk.</li>
                        </ul>

                        <h2 class="index">Inköp/upphandling för byggnad, ombyggnad och fastighetsunderhåll.</h2>

                        <ul>
                            <li>Mångårig erfarenhet av upphandling av material, entreprenader och tjänster för byggprojekt.</li>

                            <li>Speciell kompetens på inköp enligt lagen om offentlig upphandling, upphandling enligt EU-direktiv samt miljöfrågor.</li>

                            <li>Stort kontaktnät.</li>
                        </ul>
                    </div><!--anställda kontaktrutor start-->

                    <div id="anstallda-index">
                        <div id="nenne" class="anstallda" style="position: relative; margin-left: 210px;">
                            <img src="images/nenne.png" class="fadeinNenne" /> <!--[if IE]>
                        <img src="images/nenne.png" style="position: absolute; top: 5px; right: 10px;"/>
                    <![endif]-->

                            <div style="position: absolute; bottom: 0px; height: 30px; width: 200px; background-color: #6699FF;"></div>
                        </div>

                        <div id="daniel2" class="anstallda" style="margin-left: 105px; position: relative;">
                            <img src="images/daniel.png" class="fadeinDaniel" /> <!--[if IE]>
                            <img src="images/daniel.png" style="position: absolute; top: 5px; right: 10px;" />
                            <![endif]-->

                            <div style="position: absolute; bottom: 0px; height: 30px; width: 200px; background-color: #787878; margin: auto;"></div>
                        </div>
                    </div><!--anställda slut-->
                </div>
            </div><!--containor slut-->
        </div><!--skugga slut-->
        <!--footer start-->

        <div id="footer">
            <?php
                        include("footer.php")          
                       ?>
        </div><!--footer end-->
    </div><!--slut på wrapper-->
    <script type="text/javascript" src="js/jquery.js">
</script><script type="text/javascript" src="js/effects.js">
</script><script type="text/javascript" src="js/addons.js">
</script>
</body>
</html>
