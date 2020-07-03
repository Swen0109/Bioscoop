<div class="container">
    <br><h1 class="text-center">De Rekening</h1>
    
    <?php foreach($rekeningInfo as $rekening){?>
        <div class="card">
                <?php
                    if($rekening["zoetePopcorn"] != "0"){
                        echo $rekening["zoetePopcorn"]; " X zoete popcorn";
                    }
                    if($rekening["zoutePopcorn"] != "0"){
                        echo $rekening["zoutePopcorn"];
                    }
                    if($rekening["mixedPopcorn"] != "0"){
                        echo $rekening["mixedPopcorn"];
                    }
                    if($rekening["nachosMetGuacamole"] != "0"){
                        echo $rekening["nachosMetGuacamole"];
                    }
                    if($rekening["nachosMetSalsa"] != "0"){
                        echo $rekening["nachosMetSalsa"];
                    }
                    if($rekening["NachoDip"] != "0"){
                        echo $rekening["NachoDip"];
                    }
                    if($rekening["laysNaturel"] != "0"){
                        echo $rekening["laysNaturel"];
                    }
                    if($rekening["laysFromage"] != "0"){
                        echo $rekening["laysFromage"];
                    }
                    if($rekening["laysPaprika"] != "0"){
                        echo $rekening["laysPaprika"];
                    }
                    if($rekening["doritosSweetChilliPepper"] != "0"){
                        echo $rekening["doritosSweetChilliPepper"];
                    }
                    if($rekening["doritosRoulette"] != "0"){
                        echo $rekening["doritosRoulette"];
                    }
                    if($rekening["doritosSpicySweetChilli"] != "0"){
                        echo $rekening["doritosSpicySweetChilli"];
                    }
                    if($rekening["mars"] != "0"){
                        echo $rekening["mars"];
                    }
                    if($rekening["snickers"] != "0"){
                        echo $rekening["snickers"];
                    }
                    if($rekening["twix"] != "0"){
                        echo $rekening["twix"];
                    }
                    if($rekening["mms"] != "0"){
                        echo $rekening["mms"];
                    }
                    if($rekening["skittles"] != "0"){
                        echo $rekening["skittles"];
                    }
                    if($rekening["maltesers"] != "0"){
                        echo $rekening["maltesers"];
                    }
                    if($rekening["cocaCola"] != "0"){
                        echo $rekening["cocaCola"];
                    }
                    if($rekening["cocaColaZero"] != "0"){
                        echo $rekening["cocaColaZero"];
                    }
                    if($rekening["cocaColaLight"] != "0"){
                        echo $rekening["cocaColaLight"];
                    }
                    if($rekening["iceTeaBubbles"] != "0"){
                        echo $rekening["iceTeaBubbles"];
                    }
                    if($rekening["iceTeaPeach"] != "0"){
                        echo $rekening["iceTeaPeach"];
                    }
                    if($rekening["fanta"] != "0"){
                        echo $rekening["fanta"];
                    }
                    if($rekening["capriSun"] != "0"){
                        echo $rekening["capriSun"];
                    }
                    if($rekening["roosVicee"] != "0"){
                        echo $rekening["roosVicee"];
                    }
                    if($rekening["appelsap"] != "0"){
                        echo $rekening["appelsap"];
                    }
                    if($rekening["fernandesCherry"] != "0"){
                        echo $rekening["fernandesCherry"];
                    }
                    if($rekening["fernandesGreen"] != "0"){
                        echo $rekening["fernandesGreen"];
                    }
                    if($rekening["fernandesSuper"] != "0"){
                        echo $rekening["fernandesSuper"];
                    }
                    if($rekening["kidzMenu1"] != "0"){
                        echo $rekening["kidzMenu1"];
                    }
                    if($rekening["kidzMenu2"] != "0"){
                        echo $rekening["kidzMenu2"];
                    }
                    if($rekening["kidzMenu3"] != "0"){
                        echo $rekening["kidzMenu3"];
                    }
                ?>
        </div><br><br>
        <?php
            }
        ?>
</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
