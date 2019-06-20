# WP Exercise

En kort liste av oppgaven:
- Host wordpress prosjekt på Digital Ocean
- Lag ny sidemal
- Lag en ny side som bruker sidemalen
- Opprett nytt innlegg med lorem ipsum tekst. (skal vises på siden)
- Malen skal inneholde siden, innlegget, muligheter for å legge inn nye kommentarer og godkjente kommentarer for innlegget.

## Fremgangsmåte

- Jeg installerte wordpress ved hjelp av digital ocean, deretter navigerte jeg til /var/www/html/wp-content/themes/twentynineteen og opprettet custom.php fil.

- Endret rettigheter til filen slik at den både hadde read og write rettigheter. Denne custom.php filen er min sidemal.

- Via admin lagde jeg en ny side ved hjelp av custom malen. Denne siden heter "Page".

- Jeg lagde en ny katergori for innlegg kalt: "page". Det var den eneste måten jeg kunne finne for å knytte innlegg opp mot en side.

- I custom.php filen viser jeg siden som er åpen. Ett innlegg som tilhøre kategorien "page", input felt for og legge til kommentar. Filen viser også alle godkjente kommentarer.

## Utfordringer

- Brukte noe tid på å forstå hva som mentes med "maldokument". Og hvordan jeg kunne legge det til i temaet.
- Jeg er lite kjent med innebygd funksjonalitet i wordpress. Så jeg brukte litt tid på å finne og forstå dokumentasjon.
- Når jeg lagde form som bruker "wp_new_comment()" oppdaget jeg at under refresh av nettsiden vil den sende en post request igjen. Jeg fant ingen god løsning uten og redirect til en annen side. Mulig jeg kan ha løst det litt bedre om jeg hadde valgt og hadde brukt tid på forstå "POST" i php bedre. 

## Struktur
- Jeg har skrevet all min kode i custom.php med kommentarer for å vise hvor jeg har løst de forskjellige oppgavene.
