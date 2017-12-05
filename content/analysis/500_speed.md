Analys laddningstid
=======

###Urval

Precis som för färganalysen så ville jag använda lokalt förankrade hemsidor i Blekinge.
Jag försökte hitta en som fick lite bättre mättal och en som fick lite sämre.

Jag kollade bland hemsidorna från föregående uppgift och valde att återanvända en av sidorna, [Sweden Rock](http://www.swedenrock.com/).
SwedenRock kändes relativt professionellt gjord med tanke på färgschemat så jag tänkte det kunde vara intressant för den här mätningen med.

Sedan valde jag [Blekingetrafiken](www.blekingetrafiken.se) och [VisitKarlshamn](www.visitKarlshamn.se) som båda borde vara mån om laddningstider och användbarhet.

###Metod
Till mätningarna för den här analysen så har jag använt mig av [Google's PageSpeed](https://developers.google.com/speed/pagespeed/insights/) som kollar på specifika snabbhetsdetaljer och kommer med förbättringsförslag för en vald hemsida.
Mätningarna i PageSpeed gjordes 3 gånger inom en timme.

Jag har även mätt laddningstider, nedladdningars storlek och antal i Nätverksfliken i Devtools som finns i Webbläsarna Chrome respektive Firefox. Även dessa mätningar gjordes 3 gånger.

Jag har använt Excel för att dokumentera mina mätningar.

###Data från mätningar
Här nedan finns en sammanfattning av mätningarna, mer detaljer finns här: [mätningsdetaljer](../../data/Laddningstider.xls).

<table style="border-spacing: 4px; border-collapse: separate">
    <tr>
        <th>Webbsida</th>
        <th>Pagespeed betyg Mobile</th>
        <th>Pagespeed betyg Dator</th>
        <th>Sidans laddningstid</th>
        <th>Sidans totala storlek</th>
        <th>Antal resurser</th>
    </tr>
    <tr>
        <td>Blekingetrafiken</td>
        <td>Poor 15/100</td>
        <td>Poor 17/100</td>
        <td>5.8 s</td>
        <td>6.3 MB</td>
        <td>64 st</td>
    </tr>
    <tr>
        <td>SwedenRock</td>
        <td>Needs Work 78/100</td>
        <td>Good 89/100</td>
        <td>2.9 s</td>
        <td>1.9 MB</td>
        <td>65 st</td>
    </tr>
    <tr>
        <td>VisitKarlshamn</td>
        <td>Needs Work 65/100</td>
        <td>Poor 63/100</td>
        <td>4.3 s</td>
        <td>3.9 MB</td>
        <td>68 st</td>
    </tr>
</table>


Blekingetrafiken
--------

[Blekingetrafiken](http://www.blekingetrafiken.se)

###Snapshot bild
<img src="img/analys/BildBlekingetrafikenHemsida.PNG", alt="Bild från Blekingetrafikens hemsida.">

###Förbättringsområden
Jag upplever att denna sida kommer upp snabbt på min hemmadator och mobil, men den får dåligt betyg från PageSpeed.
När jag åkt tåg och surfat in på sidan med mobil några gånger har jag tidigare märkt att det inte varit lika snabbt och smidigt, så det kanske snarare innebär att jag har bra internet här hemma!

PageSpeed menar att bilderna kan optimeras mer på den här sidan, att JavaScript koden kan förminskas, att cachelagringen i webbläsaren borde utnyttjas mer samt att JavaScript/CSS kod som blockerar innehållsrendering ovanför folden borde tas bort.

Jag såg en tårtmodell i Nätverkfliken, det var bilderna som framförallt tog tid att ladda, så jag håller nog med PageSpeed om bildoptimering.

SwedenRock
------

[Sweden Rock](http://www.swedenrock.com/)

###Snapshot bild
<img src="img/analys/BildSwedenRockHemsida.PNG", alt="Bild från SwedenRock's hemsida.">

###Förbättringsområden

PageSpeed pekar på att CSS borde förminskas, att komprimering borde aktiveras, att cachelagringen i webbläsaren borde utnyttjas mer samt att JavaScript/CSS kod som blockerar innehållsrendering ovanför folden borde tas bort.

Själv upplever jag denna sida som blixtsnabb, men i den tidigare uppgiften så såg jag att de hade väldigt mycket CSS kod, så jag håller med PageSpeed om CSS förminskning.

VisitKarlshamn
-------

[VisitKarlshamn](http://www.visitKarlshamn.se)

###Snapshot bild
<img src="img/analys/BildVisitKarlshamnHemsida.PNG", alt="Bild från VisitKarlshamns hemsida.">

###Förbättringsområden

Utöver samma 4 förbättringsområden som för Sweden Rock, pekar PageSpeed även på att det behövs bildoptimering och att omdirigeringar från målsidan borde undvikas samt att HTML & JavaScript kod borde förminskas.

Jag tycker denna sida är ganska snabb, lite beroende på vilken bild i bildspelet som visas, så vissa av bilderna behöver nog optimeras.

Jag märkte också av omdirigeringen, jag blev helt förvirrad när webadressen bara byttes ut.
På mobilen kom fråga om jag ville se den mobila sidan istället, det kunde gott ha gått automatiskt!

Sammanfattning
-------------
Den här analysen handlar om snabbhet och så här är resultatet:
Den snabbaste sidan upplevde jag var SwedenRock, näst snabbast var VisitKarlshamn och mest långsam var Blekingetrafiken.

Jag upplevde dock inte någon av sidorna som speciellt långsamma vid mina mätningar, trots att tex Blekingetrafiken hade 5-9 sekunder.
Kanske de prioriterar att ladda det som syns ovanför foldern...

Jag tycker en laddningstid under 3 sekunder är ok, sedan är det lite för långsamt, även om jag i dessa fall inte upplevde någon väntetid.
SwedenRock klarade i de flesta fall 3 sekunder, men de andra två hade 5 sekunder som minst.

De undersökta sidorna har färbättringspotential när det gäller

* JavaScript/ CSS kod blockerar rendering av innehåll ovanför mitten
* utnyttjande av cachelagring i Webbläsarna
* optimering av bilder
* förminskning av JavaScript/CSS/HTML kod

Användbarhet tycker jag täcker väldigt mycket mer än laddningstider så jag har tagit bort det från rubriken på den här rapporten.

Analysen är genomförd av mig själv.
