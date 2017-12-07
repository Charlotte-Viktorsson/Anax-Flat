Färganalys
======

###Urval

För det första så ville jag tänka lokalt, så sidorna är från ställen jag känner till här i Blekinge.

Sedan så tänkte jag att motsatser är roligt att jämföra, mörkt och ljust.
Ett typiskt mörkt exempel är [Sweden Rock](http://www.swedenrock.com/) och en typisk lugn och ljus sida är [Pure-Yoga](http://www.pure-yoga.se/).

Som tredjeval tog jag en sida som jag gillar och nyligen sett, [Restaurang Montmartre](http://www.montmartre.se/) i Karlskrona.

###Metod

Jag har arbetat ensam med den här övningen och kollat runt på sidorna, samt använt inspect och kollat på sidornas css-filer.

För att undersöka färgscheman har jag tagit hjälp av Adobe Color CC färghjul och Pictacolous.
För att försöka bestämma vissa fonter har jag använt myFonts' WhatTheFont (tyvärr utan större framgång).

Sweden Rock
-----

###Sammanfattning
Generellt så upplever jag att sidan har mörka svarta/grå bakgrunder med texter i guld, mässing, vitt och grått.
Jag upplever att det passar väldigt bra till hårdrockstemat.

###Snapshot bild
[FIGURE src="img/analys/BildSwedenRockHemsida.PNG" class="left"]

###Färger:
Det var över 500 träffar på color i css-filerna! Många av dem var nära nyanser av grått, svart och brons.
Här är några typiska för sidan:

<table style="border-spacing: 4px; border-collapse: separate">
    <tr>
        <td style="height: 80px; width: 80px; background-color: #141414; color:white">bakgrund</td>
        <td style="height: 80px; width: 80px; background-color: #ece0af">meny</td>
        <td style="height: 80px; width: 80px; background-color: #e3c33c">logga</td>
        <td style="height: 80px; width: 80px; background-color: #928b6e">topptext</td>
        <td style="height: 80px; width: 80px; background-color: #FFF">knappar med mera</td>
        <td style="height: 80px; width: 80px; background-color: #BBB">grå brödtext</td>
        <td style="height: 80px; width: 80px; background-color:rgba(0,0,0,0.4)">bakgrund</td>
    </tr>
</table>

När jag tänker på hårdrock så tänker jag mörkt och metall, och jag tycker de lyckas väldigt bra med att förmedla det på sin hemsida. Jag tycker de har färgschemat metall med både guld, brons, svart, vitt samt grått. Fast om jag har förstått vår färgteori kan jag bortse från svart, vitt och grått och får säga att det är ett monologt eller möjligen analogt färgschema runt det guldiga.

###Ide
Att ikonerna för facebook, twitter och dyligt är förgyllda ger ett väldigt enhetligt intryck, snyggt!
Samarbetspartnerna har på likande sätt fått färger i intervallerna vitt-grått-svart, kanske inte det första man tänker på med tex Arla och BAUHAUS!

Bandens loggor är även de på liknande sätt enhetliga i vitt.

###Typsnitt
Om jag bortser från alla olika band- och företagsloggor på sidan så är främst 3 olika sans-serif typsnitt använda:

Översta raden:   Georgia

Rubriker:       "Ubuntu Condensed"

Vanlig text:    "Open Sans"


Pure-Yoga
----

###Sammanfattning
Den här sidan är ljus och har stora lugna naturbilder i fokus med yogisar.
Det är mycket vit space runt objekten och de verkar ha tänkt på det gyllene snittet vid sin bildkomposition. Jämnstora pastellfärgade bilder är utplacerade enligt ett grid mönster och har varsin enhetlig stor ljus cirkel med rubriker och påståenden.
Huvudmenyn följer med när man scrollar ned.

###Snapshot bild
[FIGURE src="img/analys/BildPureYogaHemsida.PNG" class="left"]

###Färger:
Längst upp har vi huvudmenyn med ljus eller genomskinlig bakgrundsfärg, beroende på skärmbredd.
Sedan har vi en stor bild med ljusa pastellfärger.
Därefter kommer en textsektion med ljusblå bakgrund och svart text.
Under det kommer länkar vilka är utformade antingen som vita knappar med svart ram och text, eller som symmetriskt utplacerade bilder med varsin stor vid cirkel i sig med rubrikerna.

<table style="border-spacing: 4px; border-collapse: separate">
    <tr>
        <td style="height: 80px; width: 80px; background-color: #fff;">bakgrund</td>
        <td style="height: 80px; width: 80px; background-color: #edf4f4;">bakgrund</td>
        <td style="height: 80px; width: 80px; background-color: #333;color:white">text, ramar</td>
        <td style="height: 80px; width: 80px; background-color: rgb(113,93,88)">bildfärg yogi</td>
        <td style="height: 80px; width: 80px; background-color: rgb(195,187,176);">bildfärg strand</td>
        <td style="height: 80px; width: 80px; background-color: rgb(133,158,165);">bildfärg hav/himmel</td>
    </tr>
</table>

Själva hemsidans grund har inte mycket färg, det är bara vitt, svart text och lite ljusblå bakgrund. Det som ger färg är bilderna med genomgående pastellfärger, både blått, beige, grönt, gult, rosa, orange, förutom det svarta och vita.

Jag vill varken kalla färgschemat analogt, monokromt, triadiskt utan snarast pastell med det gemensamma att färgerna ligger nära den ljusa mitten i exempelvis Adobes Colorwheel.


###Typsnitt:
Huvudmeny använder familjen: 'Montserrat', arial, sans-serif.

Brödtexten använder familjen: Verdana, sans-serif.

Bildtextern i de vita cirklarna har jag dessvärre inte lyckats lista ut vad det är för font.
Hittar inget i css och har även provat att kolla mha myfonts.com.

###Ide:
När jag tänker yoga tänker jag en lugn motionsform med mycket harmoni.
Jag tycker allt det ljusa och de symmetriska pastellfärgade bilderna fyller mig med lugn. Jag längtar även bort till en varm fjärran strand. Yoga är ju från ett fjärran land, så de kanske lyckas rätt så bra med sina färgval.
Jag gillar de gridutplacerade bilderna med runda cirklar med text.



Restaurant Montmartre
----

###Sammanfattning
Restaurant Montmartre har stora bilder på matupplägg, exteriör och interiör som rullar. Färgerna i övrigt är övergripande vinrött, svart och vitt. Dessa tre färger är använda omvartannat som bakgrundsfärg, färg på text och andra detaljer.

###Snapshot bild
[FIGURE src="img/analys/BildMontmartresHemsida.PNG" class="left"]

###Färger:

Här har vi svart, vitt och en vinröd färg, så jag skulle kalla det för ett Monokromt färgschema.

Allt det mörka ger en kvälls-känsla och det är bra med tanke på att det är kvällstid de har öppet.
Det röda för tankarna till rödvid såklart, och matchar även bra med detaljer från bilderna på sådant som rödlök och rosesallad.

<table style="border-spacing: 4px; border-collapse: separate">
    <tr>
        <td style="height: 80px; width: 80px; background-color: #bb2f38; color: #fff">Logotype</td>    
        <td style="height: 80px; width: 80px; background-color: #222; color: #fff">Huvudmeny</td>
        <td style="height: 80px; width: 80px; background-color: #222; color: #bb2f38">Citat</td>
        <td style="height: 80px; width: 80px; background-color: #fff; color: #bb2f38">Text exempel</td>
        <td style="height: 80px; width: 80px; background-color: #fff; color: #222">Text exempel</td>
    </tr>
</table>

Förresten så är det samma färger jag har i min Atom!

###Typsnitt:

Det är blandat serif och sans-serif typsnitt med två font-familjer:

- "PT Sans", Arial, Helvetica, sans-serif
- PT Serif, Georgia, "Verdana", Times New Roman, Times, serif

Hemsidan har logga i sans-serif familjen medans meny och citat är i serif-familjen.
På (mat-)meny sidan så används serif för rubriker och matvalen är presenterade med sans-serif varianten.

###Ide
Jag gillar den här sidan med dess användning av i stort sett endast tre färger och fina bilder.
Blandningen av serif och sans-serif är också trevligt.
