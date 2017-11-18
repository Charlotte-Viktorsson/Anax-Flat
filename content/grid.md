---
titleBreadcrumb: Grid

views:
    breadcrumb:
        region: breadcrumb
        template: default/breadcrumb
        data:
            meta:
                type: breadcrumb

    flash:
        region: flash
        template: default/image
        data:
            src: "img/hostlov.jpg"

    main:
        sort: 2
        data:
            meta:
                type: toc-sort

    sideline:
        region: sidebar-left
        template: default/content
        sort: 2
        data:
            meta:
                type: content
                route: block/sideBarExempel
...

Exempel med vertical grid
=====

Följande text är ett utdrag från Wikipedia!
[https://sv.wikipedia.org/wiki/Pangram](https://sv.wikipedia.org/wiki/Pangram)


###Pangram

Ett pangram, från grekiskans pan gramma vilket ungefär betyder "varje bokstav", är en text som innehåller, eller bör innehålla, varje bokstav i alfabetet. Förutom för skojs skull används pangram ofta inom typografin för att visa exempel på utseende hos typsnitt. Ett tidigare användningsområde var vid test av skrivmaskiner, skrivare, telex och liknande utrustning.

Ett äkta pangram innehåller alla alfabetets bokstäver, och ett perfekt pangram innehåller varje bokstav precis en gång. Perfekta pangram på svenska innehåller mer eller mindre påhittade ord och krystade meningar.


####Svenska pangram

*   Flygande bäckasiner söka hwila på mjuka tuvor – (saknar q, x och z). Vid prov av fjärrskriftsmaskiner läggs bokstäverna QXZ samt siffrorna 1234567890 till,[1] vilket gör sekvensen till ett äkta pangram.
*    Yxmördaren Julia Blomqvist på fäktning i Schweiz – ett äkta pangram med rimlig semantik.
*    FAQ om Schweiz: Klöv du trång pjäxby? – ett äkta, perfekt pangram, även om innebörden kan tyckas krystad.
*    Yxskaftbud, ge vår WC-zonmö IQ-hjälp. – också ett exempel på ett perfekt pangram.
*    Byxfjärmat föl gick på duvshowen – saknar q och z, men innehåller kombinationerna ”fj” och ”fö”, vilket gör det till ett bra pangram för att bedöma hur väl ett typsnitt passar för att sätta svensk text.

####Engelska pangram
Det mest kända engelska pangrammet är antagligen "the quick brown fox jumps over the lazy dog", som utvecklades av Western Union för att prova tillförlitligheten hos telex-system. Med signalist-jargong benämnes sekvensen inofficiellt QBF och ger därför intryck av att vara en så kallad Q-förkortning.
