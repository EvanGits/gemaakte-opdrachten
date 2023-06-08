
<body>
    <div class="container mt-5 col-12">
        <div class="col-8 mx-auto">
            <p>
                <h1>De regels van schaken</h1>  
                Als je wil leren schaken, dan zit je hier goed! 
                Hier staan alle spelregels van het schaken voor beginners en kinderen die je nodig hebt bij elkaar, dus laten we gelijk beginnen!
                Laten we beginnen met een introductie over schaken. 
                Schaken is een bordspel waarin twee legers (de stukken) van gelijke grootte de strijd aangaan. 
                Je doet om de beurt een zet en door je stukken goed te gebruiken kan je de tegenstander uitschakelen. 
                Het doel van schaken is de koning van de tegenstander schaakmat te zetten. Wat dit inhoudt leer je iets later. 
                Laten we eerst maar eens naar het bord en de stukken gaan kijken.
            </p>
            <p>
                <h2>Het schaakbord</h2>
                <img src="<?= ROOT ?>/img/schaakbord.png" height="250vh" width="250vh" class="mx-auto d-block">
                <p>
                    Het eerste dat je nodig hebt om te kunnen schaken is een schaakbord. 
                    Je ziet een schaakbord in diagram (1), let even op dat het veld linksonder altijd een zwart veld is! 
                    Zoals je ziet is een schaakbord 8 velden lang en 8 velden breed, in totaal dus 64 velden. 
                    Alle velden doen bij schaken mee! Al die velden hebben een voornaam en een achternaam. 
                    In het diagram zie je rond het schaakbord letters en cijfers staan. 
                    Elk veld heeft als voornaam een letter en als achternaam een cijfer. 
                    Het veld linksonder heet bijvoorbeeld a1, en het veld rechtsboven h8. 
                    De 4 velden in het midden van het bord (d4, d5, e4 en e5) noemen we het centrum. 
                    Deze velden zijn belangrijk omdat daar vaak gestreden wordt. 
                    In het schaken noemen we een horizontale lijn (met de cijfers) een rij (dus bijvoorbeeld de 2e rij), en de verticale lijn (met de letters) een lijn (dus bijvoorbeeld de c-lijn). 
                    Een schuine lijn noemen we een diagonaal. 
                    Nu we iets van het schaakbord weten gaan we eens naar de stukken kijken.
                </p>
            </p>
            <p>
                <h2>De schaakstukken</h2>
                Bij schaken heb je zes verschillende schaakstukken die allemaal een unieke en belangrijke functie hebben. 
                Deze stukken kunnen bewegen naar een vrij veld, of stukken van de tegenstander slaan. 
                Ze kunnen niet over andere schaakstukken heenspringen (uitzondering is het paard). 
                Ik zal nu vertellen hoe de verschillende stukken mogen lopen en slaan.
            </p>
            <div>
                <div>
                        <p>
                            <h2>Informatie pionnen</h2>
                            hieronder zie je een aantal kopjes, klik erop voor meer informatie:  
                            <p>   
                                <h6 data-toggle="collapse" data-target="#koning">&bull; Koning</h6>
                                <div id="koning" class="collapse">
                                    <div class="text-center">
                                        <h2>De koning</h2>
                                        <img src="<?= ROOT ?>/img/koning.png" height="150vh" width="150vh" class="mx-auto d-block">
                                        <p>
                                            De koning mag één veld in alle richtingen (vooruit, achteruit, links, rechts of schuin) lopen en slaan. 
                                            Er is wel iets bijzonders met de koning. 
                                            De koning mag nooit aangevallen (aanvallen is als je de volgende beurt het stuk dat je aanvalt kan slaan) staan. 
                                            Dus als een stuk van de tegenstander je koning aanvalt, 
                                            dan moet je met je koning weglopen of een stuk tussen je koning en de aanvaller zetten (of het aanvallende stuk slaan), 
                                            zodat je koning niet meer aangevallen staat. 
                                            Als de koning aangevallen staat en niet meer kan vluchten, dan sta je schaakmat en verlies je. 
                                            Dit maakt de koning een kwetsbaar en belangrijk stuk. 
                                            Je moet hem dus goed beschermen!
                                        </p>                            
                                    </div>
                                </div>
                            </p>
                            <p>
                                <h6 data-toggle="collapse" data-target="#dame">&bull; Dame</h6>
                                <div id="dame" class="collapse">
                                    <div class="text-center">
                                        <h2>De dame</h2>
                                        <img src="<?= ROOT ?>/img/dame.png" height="150vh" width="200vh" class="mx-auto d-block">
                                        <p>
                                            De dame (ook wel koningin) mag meerdere velden in alle richtingen (wel via een rechte lijn, 
                                            dus horizontaal, verticaal, of diagonaal) lopen en slaan. 
                                            Dit maakt de dame dus een erg sterk stuk. 
                                            Je hebt er echter maar 1, dus wees zuinig.
                                        </p>                           
                                    </div>
                                </div>
                            </p>
                            <p>
                                <h6 data-toggle="collapse" data-target="#toren">&bull; Toren</h6>
                                <div id="toren" class="collapse">
                                    <div class="text-center">
                                        <h2>De toren</h2>
                                        <img src="<?= ROOT ?>/img/toren.png" height="150vh" width="150vh" class="mx-auto d-block">
                                        <p>
                                            De toren mag meerdere velden vooruit, achteruit, links of rechts lopen en slaan. 
                                            De toren mag dus alleen recht bewegen. 
                                            Dit maakt de toren een sterk stuk, net iets sterker dan de loper en het paard die hier na komen.
                                        </p>                           
                                    </div>
                                </div>
                            </p>
                            <p>
                                <h6 data-toggle="collapse" data-target="#loper">&bull; Loper</h6>
                                <div id="loper" class="collapse">
                                    <div class="text-center">
                                        <h2>De loper</h2>
                                        <img src="<?= ROOT ?>/img/loper.png" height="150vh" width="150vh" class="mx-auto d-block">
                                        <p>
                                            De loper mag meerdere velden schuin bewegen en slaan. 
                                            Hij loopt dus over diagonalen. 
                                            Een loper die op een zwart veld staat zal dus altijd op een zwart veld blijven, 
                                            hetzelfde geldt voor een loper op een wit veld.
                                        </p>                           
                                    </div>
                                </div>
                            </p>
                            <p>
                                <h6 data-toggle="collapse" data-target="#paard">&bull; Paard</h6>
                                <div id="paard" class="collapse">
                                    <div class="text-center">
                                        <h2>Het paard</h2>
                                        <img src="<?= ROOT ?>/img/paard.png" height="150vh" width="150vh" class="mx-auto d-block">
                                        <p>
                                            Het paard is een interessant stuk. 
                                            In tegenstelling tot andere stukken loopt hij niet, maar maakt hij een sprong. 
                                            Hij kan dus over andere stukken heenspringen. 
                                            Het paard springt altijd 1 veld recht en 1 veld schuin.
                                        </p>                           
                                    </div>
                                </div>
                            </p>
                            <p>
                                <h6 data-toggle="collapse" data-target="#pion">&bull; Pion</h6>
                                <div id="pion" class="collapse">
                                    <div class="text-center">
                                        <h2>De pion</h2>
                                        <img src="<?= ROOT ?>/img/pawn.png" height="150vh" width="125vh" class="mx-auto d-block">
                                        <p>
                                            Pionnen kunnen alleen 1 stap vooruit bewegen. 
                                            Hierop is 1 uitzondering: zoals je zometeen in de beginstelling zal zien beginnen de pionnen op de 2e (of voor zwart op de 7e) rij. 
                                            De eerste keer dat je met de pion beweegt mag je ook 2 velden vooruit. 
                                            Je kunt er dus voor kiezen je pion 1 veld vooruit te spelen naar de 3e rij, of 2 velden naar de 4e rij. 
                                            Pionnen kunnen alleen schuin vooruit slaan. Ze kunnen dus enkel het veld links of rechts schuin voor hen slaan.
                                        </p>                           
                                    </div>
                                </div>
                            </p>
                        </p>                         
                <p>
                    <h2>De waarde van de schaakstukken</h2>
                        De stukken hebben allemaal een waarde die je hieronder in de tabel ziet. 
                        Onthoudt wel dat deze waarde relatief is. 
                        Je kunt je namelijk wel voorstellen dat een toren die in een hoek ingebouwd staat 
                        niet zo sterk is als een toren die heel actief staat (dus naar veel andere velden 'kijkt'.                    
                    <p>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Stuk</th>
                                    <th>Punten</th>
                                </tr>                                
                            </thead>
                            <tbody>    
                                <tr>
                                    <td>Dame</td>
                                    <td>9</td>
                                </tr>
                                <tr>
                                    <td>Toren</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Loper</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Paard</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Pion</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>                      
                    </p>
                    Ik heb de koning niet in deze tabel staan. 
                    Wanneer je koning mat komt te staan heb je verloren, 
                    en je koning is dus eigenlijk oneindig veel waard.  
                </p>
                <p>
                    <h2>Schaak</h2>
                    Schaak is een belangrijk onderdeel en heeft alles met de koning te maken. We weten inmiddels wat aanvallen is. 
                    Een bijzonder geval is wanneer de koning aangevallen staat. We noemen dit schaak. 
                    Aangezien de koning niet schaak (dus aangevallen) mag staan, moet je dit voorkomen door bijvoorbeeld weg te lopen met de koning.
                </p>
                <p>
                    <h2>Schaakmat</h2>
                    Wanneer de koning schaak staat en hij kan niet meer vluchten of op een andere manier voorkomen dat hij schaak blijft staan heb je verloren, je staat dan schaakmat. 
                    Het doel van schaken is dus om te voorkomen dat je mat staat, en te proberen de tegenstander mat te zetten. 
                    Dit is de enige manier om te winnen (of je tegenstander kan opgeven wanneer hij geen enkele mogelijkheid meer ziet om nog te winnen en zelf uiteindelijk mat zal gaan).
                </p>                    
            </div>
        </div>
    </div>   
</body>