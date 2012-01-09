<html>
<head>
<title>ISO 27002</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<link href="iso.css" rel="stylesheet" type="text/css"/>
<script src="http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js"></script>
</head>
<script type="text/javascript" src="iso.js"></script>
<body>
<center>
<h1>ISO 27002<h1>
<h2>PROCJENA SUKLADNOSTI<h2>
<h3>autori: Mario Kolmačić, Boris Kišić<h3>
<h4>Za procjenu sukladnosti unosite postotak koji zadovoljana određenu kontrolu.<h4>
<h4>Neispunjena polja se ne uzimaju u obzir kod izračuna sukladnosti.<h4>
<form class="forma" name="forma" id="forma" method="post" action="">
<table id="prva" width=75% cellspacing=5 cellpadding=8 cols=2>
<tr><td class="a" colspan=5 align=center >5. Politika sigurnosti</td></tr>
<tr class="aa"><td >5.1.</td><td colspan=4 align=center >Politika informacijske sigurnosti</td></tr>
<!-- 511 -->
<tr class="alt"><td>5.1.1.</td><td>Dokument politike informacijske sigurnosti</td><td>Postoji li politika informacijske sigurnosti, koja je odobrena od strane managementa i objavljena svim djelatnicima?</td>
		<td align="center" width=100><input type="text" id="0" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=6 width=170 colspan=2 align="center">U dokumentu politike informacijske sigurnosti potrebno je navesti obveze uprave i odrediti pristup organizacije u upravljanju informacijskom sigurnošću. Dokument politike informacijske sigurnosti treba sadržavati sljedeće.</td>
<td>Definiciju informacijske sigurnosti, sveobuhvatne ciljeve, opseg i značenje sigurnosti kao mehanizma koji omogućuje prenošenje, odnosno, dijeljenje informacija</td>
		<td align="center" width=100><input type="text" id="1" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Namjeru uprave da podržava ciljeve i načela informacijske sigurnosti u skladu s poslovnom strategijom i ciljevima</td>
		<td align="center" width=100><input type="text" id="2" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Okosnicu za određivanje ciljeva kontrole i kontrola, uključujući strukturu procjene rizika i upravljanje rizikom</td>
		<td align="center" width=100><input type="text" id="3" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Kratko pojašnjenje sigurnosnih politika, načela, standarda i zahtjeva za sukladnost koji su posebno važni za organizaciju, uključujući:
							<br>1.	sukladnost sa zakonodavnim, regulativnim i ugovornim zahtjevima;
							<br>2.	zahtjevi za podizanje razine svijesti, naobrazbu i obučavanje na području sigurnosti;
							<br>3.	upravljanje kontinuitetom poslovanja;
							<br>4.	posljedice kršenja politike informacijske sigurnosti;
</td>
		<td align="center" width=100><input type="text" id="4" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Definiciju općenitih i određenih odgovornosti pri upravljanju informacijskom sigurnošću, uključujući izvješćivanje o sigurnosnim incidentima</td>
		<td align="center" width=100><input type="text" id="5" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Reference na dokumente koji podržavaju politiku, primjerice detaljnije sigurnosne politike i procedure za određene informacijske sustave ili sigurnosna pravila koje korisnici trebaju poštivati.
</td>
		<td align="center" width=100><input type="text" id="6" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<!-- 512 -->		
<tr class="alt"><td>5.1.2.</td><td>Provjera politike informacijske sigurnosti</td><td>Postoji li provjera politike informacijske sigurnosti u planiranim intervalima ili ako dođe do značajnih promjena radi osiguranja kontinuirane prikladnosti, primjerenosti i učinkovitosti?</td>
		<td align="center" width=100><input type="text" id="7" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=9 colspan=2 align="center">Za upravinu provjeru trebaju postojati sljedeći ulazni podaci:</td><td>Povratne informacije zainteresiranih strana </td>
		<td align="center" width=100><input type="text" id="8" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Informacije o rezultatima nezavisnih provjera (pogledajte 6.1.8) </td>
		<td align="center" width=100><input type="text" id="9" size="6" onkeyup="provjera(this.id);"> %</td></tr>			
<tr><td>Informacije o statusu preventivnih i korektivnih akcija (pogledajte 6.1.8 i 15.2.1) </td>
		<td align="center" width=100><input type="text" id="10" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Informacije o rezultatima prethodnih upravinih provjera </td>
		<td align="center" width=100><input type="text" id="11" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Informacije o izvršavanju procesa i usklađenost sa politikom informacijske sigurnosti</td>
		<td align="center" width=100><input type="text" id="12" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Informacije o promjenama koje mogu utjecati na pristupu organizacije upravljanju informacijskom sigurnošću, uključujući promjene okruženja organizacije, uvjeta poslovanja, dostupnosti izvora, ugovornih, regulativnih i zakonskih zahtjeva ili tehničkih mogućnosti</td>
		<td align="center" width=100><input type="text" id="13" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Informacije o općim smjerovima prijetnji i ranjivosti</td>
		<td align="center" width=100><input type="text" id="14" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Zapisnici o sigurnosnim incidentima (pogledajte 13.1)</td>
		<td align="center" width=100><input type="text" id="15" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Informacije o preporukama odgovarajućih nadležnih tijela (pogledajte 6.1.6)</td>
		<td align="center" width=100><input type="text" id="16" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 colspan=2 align="center">Rezultat upravine provjere treba sadržavati odluke i akcije koje se odnose na:</td><td>Poboljšanje pristupa organizacije upravljanju informacijskom sigurnošću i njenim procesima</td>
		<td align="center" width=100><input type="text" id="17" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Poboljšanje ciljeva kontrole i kontrola</td>
		<td align="center" width=100><input type="text" id="18" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Poboljšanje u određivanju sredstava i/ili odgovornosti</td>
		<td align="center" width=100><input type="text" id="19" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
		
</table>
<br>
<!-- 6666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666666 -->
<table id="prva" width=75% cellspacing=5 cellpadding=8 cols=2>
<tr><td class="a" colspan=6 align=center>6. Organizacija informacijske sigurnosti</td></tr>
<tr class="aa"><td>6.1.</td><td colspan=4 align=center>Unutarnja organizacija</td></tr>
<tr class="alt"><td>6.1.1.</td><td>Obveza uprave prema informacijskoj sigurnosti</td><td>Da li uprava aktivno podržava sigurnost unutar organizacije pomoću jasnih uputa, obveza, izričitih imenovanja i prihvaćanja sigurnosnih odgovornosti?</td>
		<td align="center" width=100><input type="text" id="20" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=8 align="center" colspan=2 width=540>Uprava treba:</td><td>Osigurati da su ciljevi informacijske sigurnosti definirani, da zadovoljavaju organizacijske zahtjeve i da su integrirani u odgovarajuće procese</td>
		<td align="center" width=100><input type="text" id="21" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Formulirati, pregledati i odobriti politiku informacijske sigurnosti </td>
		<td align="center" width=100><input type="text" id="22" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Provjeriti učinkovitost primjene politike informacijske sigurnosti</td>
		<td align="center" width=100><input type="text" id="23" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Osigurati jasno vođenje i podršku uprave sigurnosnim inicijativama </td>
		<td align="center" width=100><input type="text" id="24" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Osigurati potreba sredstva informacijske sigurnosti </td>
		<td align="center" width=100><input type="text" id="25" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Odobriti dodjeljivanje određenih zadataka i odgovornosti za informacijsku sigurnost u organizaciji </td>
		<td align="center" width=100><input type="text" id="26" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Pokrenuti planove i programe za održavanje svijesti o informacijskoj sigurnosti </td>
		<td align="center" width=100><input type="text" id="27" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Osigurati koordinaciju primjene kontrola informacijske sigurnosti unutar organizacije (pogledajte 6.1.2) </td>
		<td align="center" width=100><input type="text" id="28" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<!-- 612 -->
<tr class="alt"><td>6.1.2.</td><td>Koordinacija informacijske sigurnosti</td><td>Da li su aktivnosti na području informacijske sigurnosti koordinirane od strane predstavnika iz različitih dijelova organizacije s odgovarajućim zaduženjima i funkcijama?</td>
		<td align="center" width=100><input type="text" id="29" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=7 align="center" colspan=2>Ova aktivnost treba:
</td><td>Osigurati izvođenje sigurnosnih aktivnosti u skladu sa politikom informacijske sigurnosti</td>
		<td align="center" width=100><input type="text" id="30" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Definirati kako rukovati nesukladnostima</td>
		<td align="center" width=100><input type="text" id="31" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Odobriti metodologiju i procese informacijske sigurnosti, primjerice procjena rizika, klasifikacija informacija</td>
		<td align="center" width=100><input type="text" id="32" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odrediti značajne promjene prijetnje i izlaganju informacija i informacijske opreme prijetnjama</td>
		<td align="center" width=100><input type="text" id="33" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Procijeniti primjerenost i koordinirati primjenu kontrola informacijske sigurnosti</td>
		<td align="center" width=100><input type="text" id="34" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Učinkovito promicati obrazovanje, obuku i svjesnost na području informacijske sigurnosti u organizaciji</td>
		<td align="center" width=100><input type="text" id="35" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Vrednovati informacije primljene na temelju praćenja i provjere sigurnosnih incidenata kao i preporučiti odgovarajuće akcije kao odgovor na uočene sigurnosne incidente</td>
		<td align="center" width=100><input type="text" id="36" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<!-- 613 -->	
<tr class="alt"><td>6.1.3.</td><td>Dodjeljivanje odgovornosti za informacijsku sigurnost</td><td>Da li su odgovornosti za zaštitu pojedinih sredstava i za provođenje specifičnih sigurnosnih procesa, jasno definirane?</td>
		<td align="center" width=100><input type="text" id="37" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2>Potrebno je jasno navesti područja za koje su pojedinci odgovorni, posebice je potrebno:</td><td>Jasno odrediti imovinu i sigurnosne procese za svaki određeni sustav</td>
		<td align="center" width=100><input type="text" id="38" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Odrediti subjekte odgovorne za svaku imovinu ili sigurnosni proces i dokumentirati ove odgovornosti (također pogledajte 7.1.2)</td>
		<td align="center" width=100><input type="text" id="39" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Jasno odrediti i dokumentirati razine ovlaštenja</td>
		<td align="center" width=100><input type="text" id="40" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<!-- 614 -->	
<tr class="alt"><td>6.1.4.</td><td>Proces ovlaštenja za opremu za obradu informacija</td><td>Da li je proces ovlaštenja definiran i provodi se za sva nova postrojenja za obradu informacija?</td>
		<td align="center" width=100><input type="text" id="41" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2>Kod procesa ovlaštenja potrebno je razmotriti sljedeće smjernice:
</td><td>Za novu opremu je potrebno odgovarajuće ovlaštenje za rukovanje, pri čemu se ovlašćuje njena namjena i uporaba. Ovlaštenje je također potrebno dobiti i od rukovoditelja odgovornog za održavanje sigurnosti lokalnog okruženja informacijskog sustava kako bi se osiguralo zadovoljenje svih mjerodavnih sigurnosnih politika i zahtjeva</td>
		<td align="center" width=100><input type="text" id="42" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Tamo gdje je potrebno, treba se provjeriti hardver i softver radi usklađenosti s ostalim komponentama sustava</td>
		<td align="center" width=100><input type="text" id="43" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Uporaba osobne ili privatne opreme za obradu informacija, primjerice prijenosnih računala, kućnih računala ili ručnih terminala, za obradu poslovnih informacija, može uzrokovati nove ranjivosti te potrebno je definirati i primijeniti nove kontrole</td>
		<td align="center" width=100><input type="text" id="44" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<!-- 615 -->		
<tr class="alt"><td>6.1.5.</td><td>Sporazumi o povjerljivosti</td><td>Da li su definirani i redovito provjeravani zahtjevi sporazuma o povjerljivosti ili tajnosti koji odražavaju organizacijske potrebe za zaštitom informacija?</td>
		<td align="center" width=100><input type="text" id="45" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=10 align="center" colspan=2 width=540>Sporazumi o povjerljivosti ili tajnosti trebaju se odnositi na zahtjev za zaštitom povjerljivih informacija u pravnom smislu. Pri određivanju zahtjeva sporazuma o povjerljivosti ili tajnosti potrebno je razmotriti sljedeće elemente:
</td><td>Definiciju informacija koje je potrebno zaštititi (odnosno, povjerljivih informacija)</td>
		<td align="center" width=100><input type="text" id="46" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Očekivano trajanje sporazuma, uključujući slučajeve u kojima je potrebno povjerljivost održavati neodređeno vrijeme</td>
		<td align="center" width=100><input type="text" id="47" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potrebne aktivnosti nakon isteka sporazuma</td>
		<td align="center" width=100><input type="text" id="48" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Odgovornosti i aktivnosti potpisnika u smislu sprječavanja neovlaštenog otkrivanja informacija (primjerice, "potrebno je znati")</td>
		<td align="center" width=100><input type="text" id="49" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Vlasništvo informacija, poslovne tajne i intelektualno vlasništvo i kako se oni odnose na zaštitu povjerljivih informacija</td>
		<td align="center" width=100><input type="text" id="50" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Dozvoljena uporaba povjerljivih informacija i prava potpisnika na uporabu informacija</td>
		<td align="center" width=100><input type="text" id="51" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Pravo na reviziju i praćenje aktivnosti u koje su uključene povjerljive informacije</td>
		<td align="center" width=100><input type="text" id="52" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Proces obavješćivanja i prijavljivanja neovlaštenog odavanja ili kršenja tajnosti informacija</td>
		<td align="center" width=100><input type="text" id="53" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Uvjeti povrata ili uništenja informacija nakon isteka sporazuma</td>
		<td align="center" width=100><input type="text" id="54" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Očekivane aktivnosti u slučaju kršenja ovog sporazuma</td>
		<td align="center" width=100><input type="text" id="55" size="6" onkeyup="provjera(this.id);"> %</td></tr>		

<!-- 616 -->
<tr class="alt"><td>6.1.6.</td><td>Kontakt s nadležnim tijelima</td><td>Da li postoji postupak koji opisuje kada treba kontaktirati nadležna tijela kao što su Policija, vatrogasci i sl., i kako bi slučaj trebao biti prijavljen?</td>
		<td align="center" width=100><input type="text" id="56" size="6" onkeyup="provjera(this.id);"> %</td></tr>
		
<!-- 617 -->
<tr class="alt"><td>6.1.7.</td><td>Kontakti s posebnim interesnim grupama</td><td>Da li se održavaju odgovarajući kontakti sa stručnim interesnim grupama ili drugim stručnim sigurnosnim forumima i profesionalnim udrugama?</td>
		<td align="center" width=100><input type="text" id="57" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=6 align="center" colspan=2>Članstvo u stručnim interesnim grupama ili forumima treba smatrati sredstvom za:
</td><td>Unapređenje znanja o najboljim praksama i održavanje koraka s odgovarajućim sigurnosnim informacijama</td>
		<td align="center" width=100><input type="text" id="58" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Održavanje tekućeg i cjelovitog razumijevanja okruženja informacijske sigurnosti</td>
		<td align="center" width=100><input type="text" id="59" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Prijem pravodobnih upozorenja, savjeta i ispravaka koji se odnose na napade i ranjivosti</td>
		<td align="center" width=100><input type="text" id="60" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Mogućnost pristupa stručnim savjetima o informacijskoj sigurnosti</td>
		<td align="center" width=100><input type="text" id="61" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Dobivanje i razmjenjivanje informacija o novim tehnologijama, proizvodima, prijetnjama ili ranjivostima</td>
		<td align="center" width=100><input type="text" id="62" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ostvarenje pogodnih kanala pri obradi sigurnosnih incidenata (također pogledajte 13.2.1)</td>
		<td align="center" width=100><input type="text" id="63" size="6" onkeyup="provjera(this.id);"> %</td></tr>
		
<!-- 618 -->
<tr class="alt"><td>6.1.8.</td><td>Nezavisna provjera informacijske sigurnosti</td><td>Da li pristup organizacije upravljanju informacijskom sigurnošću i njenom primjenom zahtjeva nezavisnu provjeru u planiranim intervalima ili kad se dogode značajne promjene za primjenu sigurnosti?</td>
		<td align="center" width=100><input type="text" id="64" size="6" onkeyup="provjera(this.id);"> %</td></tr>

<tr class="aa"><td>6.2.</td><td colspan=4 align=center>Vanjski suradnici</td></tr>
<tr class="alt"><td>6.2.1.</td><td>Prepoznavanje rizika koji se odnose na vanjske suradnike</td><td>Rizici vezani uz treće strane prema informacijama i resursima organizacije, te procesima koji uključuju pristup trećih strana, su identificirani te su implementirane ispravne kontrole prije odobrenja pristupa? </td>
		<td align="center" width=100><input type="text" id="65" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=11 align="center" colspan=2 width=540>Tamo gdje postoji potreba za pristupom vanjskih suradnika opremi za obradu informacija ili informacijama organizacije, treba provesti procjenu rizika (također pogledajte poglavlje 4 norme) radi definiranja zahtjeva za određenim kontrolama. Definiranje rizika koji se odnosi na pristup vanjskih suradnika također treba uključivati i sljedeće:
</td><td>Opremu za obradu informacija kojoj trebaju pristupiti vanjski suradnici</td>
		<td align="center" width=100><input type="text" id="66" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Vrstu pristupa informacijama i opremi za obradu informacija koju će vanjski suradnici imati, primjerice: <br>
		1. fizički pristup, primjerice uredima, računalnom odjelu, dokumentaciji;<br>
		2. logički pristup, primjerice bazi podataka organizacije, informacijskim sustavima;<br>
		3. mrežno povezivanje između mreže organizacije i vanjskih suradnika, primjerice trajno povezivanje, udaljeni pristup;<br>
		4. pristup u samoj organizaciji ili izvana;</td>
		<td align="center" width=100><input type="text" id="67" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Vrijednost i osjetljivost informacija i njihovo značenje za poslovanje</td>
		<td align="center" width=100><input type="text" id="68" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Kontrole potrebne za zaštitu informacija koje nisu namijenjene pristupu vanjskih suradnika</td>
		<td align="center" width=100><input type="text" id="69" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Imenovanje vanjskih suradnika (osoba) koji će imati pristup informacijama organizacije</td>
		<td align="center" width=100><input type="text" id="70" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Na koji način prepoznati organizaciju ili ovlaštenu osobu, kako provjeriti ovlaštenje i koliko često je potrebno potvrditi ovlaštenje</td>
		<td align="center" width=100><input type="text" id="71" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Različiti načini i kontrole koje koriste vanjski suradnici pri pohranjivanju, obradi, prijenosu, pristupu i razmjeni informacija</td>
		<td align="center" width=100><input type="text" id="72" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Utjecaj nemogućnosti pristupa vanjskih suradnika i primanje ili davanje nepouzdanih ili krivih informacija vanjskim suradnicima</td>
		<td align="center" width=100><input type="text" id="73" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Prakse i procedure za rukovanje sigurnosnim incidentima i potencijalnim štetama, kao i načini i uvjeti nastavka pristupa vanjskih suradnika u slučaju sigurnosnog incidenta</td>
		<td align="center" width=100><input type="text" id="74" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Zakonski i regulativni zahtjevi i ostale ugovorne obveze koje se odnose na vanjske suradnike i koje je potrebno razmotriti</td>
		<td align="center" width=100><input type="text" id="75" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Na koji način može sporazum utjecati na interese ostalih zainteresiranih strana</td>
		<td align="center" width=100><input type="text" id="76" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<!-- 622 -->
<tr class="alt"><td>6.2.2.</td><td>Priprema sigurnosti u radu s klijentima</td><td>Da li su svi identificirani sigurnosni zahtjevi ispunjeni prije nego što se klijentima dozvoli pristup informacijama ili imovini organizacije?</td>
		<td align="center" width=100><input type="text" id="77" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=11 align="center" colspan=2 width=540>Za pripremu sigurnosti, prije nego što se klijentima dozvoli pristup imovini organizacije, potrebno je razmotriti sljedeće točke (ovisno o tipu i opsegu pristupa, neke točke se možda neće moći primijeniti):
</td><td>Zaštita imovine, uključujući:<br>
1. procedure za zaštitu imovine organizacije, uključujući informacije i softver te upravljanje poznatim ranjivostima;<br>
2. procedure za određivanje da li je došlo do ugrožavanja imovine, primjerice gubitka ili promjene podataka;<br>
3. cjelovitost;<br>
4. ograničenja na kopiranje i otkrivanje informacija;
</td>
		<td align="center" width=100><input type="text" id="78" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Opis proizvoda ili usluga koje će se isporučiti</td>
		<td align="center" width=100><input type="text" id="79" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Različiti razlozi, zahtjevi i koristi od pristupa klijenata</td>
		<td align="center" width=100><input type="text" id="80" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Politika kontrole pristupa, koja obuhvaća:<br>
1. dozvoljeni načini pristupa, kontrole i uporaba jedinstvenih idenlifikatora kao što su korisnička imena i zaporke;<br>
2. proces ovlaštenja za pristup korisnika i povlastice;<br>
3. izjava da je zabranjen svaki pristup koji nije izričito ovlašten;<br>
4. proces ukidanja prava pristupa ili prekida veze između sustava;<br>
</td>
		<td align="center" width=100><input type="text" id="81" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Dogovore za izvješćivanje, istraživanje i obavješćivanje o netočnosti informacija (primjerice, osobnih podataka), sigurnosnim incidentima i ugrožavanju sigurnosti</td>
		<td align="center" width=100><input type="text" id="82" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Opis svake usluga koja će biti dostupna</td>
		<td align="center" width=100><input type="text" id="83" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ciljana razina usluge i neprihvatljive razine usluge</td>
		<td align="center" width=100><input type="text" id="84" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Pravo na praćenje i opoziv bilo koje aktivnosti u vezi imovine organizacije</td>
		<td align="center" width=100><input type="text" id="85" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Odgovarajuće obveze organizacije i klijenata</td>
		<td align="center" width=100><input type="text" id="86" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovornosti u odnosu na pravna pitanja i na koji način su zadovoljeni pravni zahtjevi, primjerice zakoni o zaštiti podataka, posebice uzimajući u obzir nacionalne pravne sustave ako sporazum uključuje suradnju s klijentima u drugim zemljama (također pogledajte 15.1)</td>
		<td align="center" width=100><input type="text" id="87" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Prava intelektualnog vlasništva i autorska prava {pogledajte 15.1.2) i zaštita suradničkog rada (također pogledajte 6.1.5)</td>
		<td align="center" width=100><input type="text" id="88" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
		
<!-- 623 -->		
<tr class="alt"><td>6.2.3.</td><td>Priprema sigurnosti u sporazumima s trećim stranama</td><td>Da li su sporazumi s trećim stranama o pristupu, obradi, prijenosu ili upravljanju informacijama organizacije ili opremi za obradu informacija ili dodavanju proizvoda opremi ili pružanju usluga  u skladu sa svim odgovarajućim sigurnosnim zahtjevima?</td>
		<td align="center" width=100><input type="text" id="89" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=22 align="center" colspan=2 width=540>Sporazum treba osigurati da između organizacije i treće strane ne postoje nikakve nejasnoće. Organizacije trebaju biti zadovoljne u slučaju odštete treće strane. Radi zadovoljenja poznatih sigurnosnih zahtjeva (pogledajte 6.2.1), sporazum treba sadržavati sljedeće:
</td><td>Politiku informacijske sigurnosti</td>
		<td align="center" width=100><input type="text" id="90" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Kontrole za osiguranje zaštite imovine, uključujući:<br>
1. procedure za zaštitu imovine organizacije, uključujući informacije, softver i hardver;<br>
2. sve potrebne kontrole i mehanizme za fizičku zaštitu;<br>
3. kontrole za ostvarivanje zaštite od zlonamjernog softvera (pogledajte 10.4.1);<br>
4. procedure za određivanje ugroženosti imovine, primjerice gubitak ili promjena informacija, softvera i hardvera;<br>
5. kontrole za osiguranje povrata ili uništenje informacija i imovine nakon isteka sporazuma ili u dogovoreno vrijeme;<br>
6. povjerljivost, cjelovitost, dostupnost i sva druga važna svojstva (pogledajte 2.1.5) imovine;<br>
7. ograničenja pri kopiranju i otkrivanju informacija i uporabi sporazuma o povjerljivosti (pogledajte 6.1.5);<br>
</td>
		<td align="center" width=100><input type="text" id="91" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Obučavanje korisnika i administratora o načinima, procedurama i sigurnosti</td>
		<td align="center" width=100><input type="text" id="92" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Osiguranje svijesti korisnika o pitanjima i odgovornostima vezanima uz informacijsku sigurnost</td>
		<td align="center" width=100><input type="text" id="93" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Omogućavanje premještaja osoblja, ako je to pogodno</td>
		<td align="center" width=100><input type="text" id="94" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovornosti u vezi instalacije i održavanja hardvera i softvera</td>
		<td align="center" width=100><input type="text" id="95" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Jasna struktura i format izvještavanja</td>
		<td align="center" width=100><input type="text" id="96" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Jasne i određene aktivnosti upravljanja promjenama</td>
		<td align="center" width=100><input type="text" id="97" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Politiku kontrole pristupa, koja sadrži:<br>
1. različite razloge, zahtjeve i koristi zbog kojih je potreban pristup treće strane;<br>
2. dozvoljeni načini pristupa, kontrole i uporaba jedinstvenih identifikatora kao što su korisnička imena i zaporke;<br>
3. proces ovlaštenja za pristup korisnika i povlastice;<br>
4. zahtjev za održavanjem popisa osoba ovlaštenih za uporabu dostupnih usluga i njihovih prava i povlastica u odnosu na ovakvu uporabu;<br>
5. izjava daje zabranjen svaki pristup koji nije izričito ovlašten;<br>
6. proces ukidanja prava pristupa ili prekida veze između sustava;<br>
</td>
		<td align="center" width=100><input type="text" id="98" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Dogovori o izvješćivanju, obavješćivanju i istraživanju sigurnosnih incidenata i povreda sigurnosti, kao i kršenja zahtjeva navedenih u sporazumu</td>
		<td align="center" width=100><input type="text" id="99" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Opis proizvoda ili usluga koje će se pružiti; i opis informacija koje će biti dostupne zajedno s njihovom sigurnosnom klasifikacijom (pogledajte 7.2.1)</td>
		<td align="center" width=100><input type="text" id="100" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ciljana razina usluge i neprihvatljive razine usluge</td>
		<td align="center" width=100><input type="text" id="101" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Definicija kriterija za provjeru rada, praćenje i izvješćivanje</td>
		<td align="center" width=100><input type="text" id="102" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Pravo na praćenje i ukidanje aktivnosti koje se odnose na imovinu organizacije</td>
		<td align="center" width=100><input type="text" id="103" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Pravo na reviziju odgovornosti definiranih sporazumom, pravo da ove revizije izvodi treća strana i da se ubroje zakonska prava revizora</td>
		<td align="center" width=100><input type="text" id="104" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Uspostavljanje pojačanih aktivnosti za rješavanje problema</td>
		<td align="center" width=100><input type="text" id="105" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Zahtjevi kontinuiteta usluge, uključujući mjere za dostupnost i pouzdanost u skladu s poslovnim prioritetima organizacije</td>
		<td align="center" width=100><input type="text" id="106" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovornosti strana prema sporazumu</td>
		<td align="center" width=100><input type="text" id="107" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovornosti u odnosu na pravna pitanja i na koji način su zadovoljeni pravni zahtjevi, primjerice zakoni o zaštiti podataka, posebice uzimajući u obzir nacionalne pravne sustave ako sporazum uključuje suradnju s klijentima u ostalim zemljama (također pogledajte 15.1)</td>
		<td align="center" width=100><input type="text" id="108" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Prava intelektualnog vlasništva i autorska prava (pogledajte 15.1.2) i zaštita suradničkog rada (također pogledajte 6.1.5)</td>
		<td align="center" width=100><input type="text" id="109" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Sudjelovanje treće strane s podizvođačima i sigurnosne kontrole koje podizvođači trebaju primijeniti</td>
		<td align="center" width=100><input type="text" id="110" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Uvjeti za ponovno pregovaranje / prekid sporazuma:<br>
1. trebao bi postojati plan za nepredviđene situacije u slučaju da bilo koja strana želi raskinuti odnos prije isteka sporazuma;<br>
2. ponovno pregovaranje o sporazumima u slučaju promjene sigurnosnih zahtjeva organizacije;<br>
3. tekuća dokumentacija popisa imovine, dozvola, sporazuma ili prava koja se odnose na njih.<br>
</td>
		<td align="center" width=100><input type="text" id="111" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
</table>
<!-- 7777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777 -->
<br>
<table id="prva" width=75% cellspacing=5 cellpadding=8 cols=2>
<tr><td class="a" colspan=6 align=center>7. Upravljanje imovinom</td></tr>
<tr class="aa"><td>7.1.</td><td colspan=4 align=center>Odgovornost za imovinu</td></tr>
<tr class="alt"><td>7.1.1.</td><td>Popis imovine</td><td>Potrebno je jasno definirati svu imovinu te sastaviti i održavati popis sve važne imovine.</td>
		<td align="center" width=100><input type="text" id="112" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="alt"><td>7.1.2.</td><td>Vlasništvo nad imovinom</td><td>Sve informacije i sva imovina vezana uz opremu za obradu informacija trebala bi biti vlasništvo određenog dijela organizacije.</td>
		<td align="center" width=100><input type="text" id="113" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=2 align="center" colspan=2>Vlasnik imovine treba biti odgovoran za:</td>
    <td>Odgovarajuće klasificiranje informacija i imovine vezane uz opremu za obradu informacija</td>
		<td align="center" width=100><input type="text" id="114" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Određivanje i periodičko provjeravanje ograničenja i klasifikacije pristupa, uzimajući u obzir primijenjene politike kontrole pristupa.</td>
		<td align="center" width=100><input type="text" id="115" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="alt"><td>7.1.3.</td><td>Prihvatljiva uporaba </td><td>Potrebno je definirati, dokumentirati i primijenili pravila za prihvatljivu uporabu informacija i imovine vezane uz opremu za obradu informacija.</td>
		<td align="center" width=100><input type="text" id="116" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=2 align="center" colspan=2 width=870>Svi zaposleni, ugovorni suradnici i korisnici treće strane trebaju se pridržavati pravila za prihvatljivu uporabu informacija i imovine vezane uz opremu za obradu informacija, uključujući:</td><td>Pravila za elektroničku poštu i uporabu Interneta (pogledajte 10.8)</td>
		<td align="center" width=100><input type="text" id="117" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Smjernice za uporabu mobilnih uređaja, posebice kod uporabe izvan prostora organizacije (pogledajte 11.7.1).</td>
		<td align="center" width=100><input type="text" id="118" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>7.2.</td><td colspan=4 align=center>Klasifikacija informacija</td></tr>
<tr class="alt"><td>7.2.1.</td><td>Smjernice za klasifikaciju</td><td>Informacije je potrebno razvrstati po vrijednostima, zakonskim propisima, osjetljivosti i presudnom značaju za organizaciju.</td>
		<td align="center" width=100><input type="text" id="119" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=4 align="center" colspan=2>Smjernice za primjenu:</td>
    <td>Klasifikacija i pridružene zaštitne kontrole za informacije trebaju uzeti u obzir poslovne potrebe za prenošenjem ili ograničenjem informacija i poslovnim utjecajima koji proizlaze iz takvih potreba.</td>
		<td align="center" width=100><input type="text" id="120" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Smjernice za klasifikaciju trebaju sadržavati dogovor za početnu klasifikaciju i promjenu klasifikacije s vremenom; u skladu s prethodno određenom politikom kontrole pristupa (pogledajte 11.1.1).</td>
		<td align="center" width=100><input type="text" id="121" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Vlasnik imovine (pogledajte 7.1.2) treba imati odgovornost za određivanje klasifikacije imovine, njeno redovito provjeravanje, ažurirnost i primjerenost razine. Klasifikacija treba uzeti u obzir učinak gomilanja spomenut u 10.7.2.</td>
		<td align="center" width=100><input type="text" id="122" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je razmotriti različite klasifikacijske kategorije i prednosti koje donosi njihova uporaba.</td>
		<td align="center" width=100><input type="text" id="123" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="alt"><td>7.2.2.</td><td>Označavanje i uporaba informacija</td><td>Potrebno je razviti i primijeniti odgovarajuću skupinu procedura za označavanje i uporabu informacija u skladu s klasifikacijom koju je organizacija prihvatila.</td>
		<td align="center" width=100><input type="text" id="124" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=4 align="center" colspan=2>Smjernice za primjenu:</td>
    <td>Procedure za označavanje informacija trebaju obuhvatiti informacije u fizičkim i elektroničkim oblicima.</td>
		<td align="center" width=100><input type="text" id="125" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Izlaz iz sustava koji sadrži informaciju koja je klasificirana kao osjetljiva ili presudna treba sadržavati odgovarajuću klasifikacijsku oznaku (na izlazu). Označavanje treba odražavati klasifikaciju u skladu s pravilima definiranim u 7.2.1. Pri tome se razmatraju tiskana izvješća, prikazi na zaslonu, snimljeni mediji (primjerice, vrpce, diskovi, CD-ovi), elektroničke poruke i prijenosi datoteka.</td>
		<td align="center" width=100><input type="text" id="126" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Za svaku razinu klasifikacije potrebno je odrediti procedure rukovanja uključujući sigurnu obradu, pohranjivanje, prijenos, deklasifikaciju i uništenje. Također je potrebno odrediti procedure čuvanja i bilježenja svih sigurnosnih događaja.</td>
		<td align="center" width=100><input type="text" id="127" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Sporazumi s drugim organizacijama koji uključuju razmjenu informacija trebaju sadržavati procedure za identificiranje klasifikacije tih informacija i interpretiranje klasifikacijskih oznaka drugih organizacija.</td>
		<td align="center" width=100><input type="text" id="128" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
</table>
<!-- 888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888888 -->
<br>
<table id="prva" width=75% cellspacing=5 cellpadding=8 cols=2>
<tr><td class="a" colspan=6 align=center>8. Sigurnost ljudskog potencijala</td></tr>
<tr class="aa"><td>8.1.</td><td colspan=4 align=center>Prije zaposlenja</td></tr>
<tr class="alt"><td>8.1.1</td><td>Funkcije i odgovornosti</td><td>Potrebno je odrediti i dokumentirati sigurnosne funkcije i odgovornosti zaposlenih, ugovornih suradnika i treće strane u skladu sa politikom informacijske sigurnosti organizacije.</td>
		<td align="center" width=100><input type="text" id="129" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=560>Sigurnosne funkcije i odgovornosti trebaju sadržavati sljedeće zahtjeve:</td>
    <td>Primjena i djelovanje u skladu sa politikama informacijske sigurnosti organizacije (pogledajte 5.1)</td>
		<td align="center" width=100><input type="text" id="130" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Zaštita imovine od neovlaštenog pristupa, otkrivanja, promjene, uništenja ili ometanja</td>
		<td align="center" width=100><input type="text" id="131" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Izvođenje određenih sigurnosnih procesa i aktivnosti</td>
		<td align="center" width=100><input type="text" id="132" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Odgovornost za izvedene postupke snosi pojedinac</td>
		<td align="center" width=100><input type="text" id="133" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Prijavljivanje sigurnosnih događaja, potencijalnih događaja ili ostalih sigurnosnih rizika za organizaciju</td>
		<td align="center" width=100><input type="text" id="134" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>8.1.2</td><td>Odabir kandidata</td><td>Potrebno je provjeriti sve kandidate za posao, ugovorne suradnike i korisnike Ireće strane u skladu s važećim zakonima, propisima i etikom, u skladu sa zahtjevima posla, klasifikacijom informacija kojima će se pristupati i mogućim rizicima.</td>
		<td align="center" width=100><input type="text" id="135" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=560>Pri provjeri kandidata potrebno je voditi računa o privatnosti, zaštiti osobnih podataka i/ili zakonskim propisima pri zaposlenju i, ako je dozvoljeno, provjera treba sadržavati sljedeće:</td>
    <td>Dostupnost zadovoljavajućih karakternih referenci, primjerice jedna poslovna i jedna privatna</td>
		<td align="center" width=100><input type="text" id="136" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Provjeru (potpunosti i točnosti) životopisa kandidata</td>
		<td align="center" width=100><input type="text" id="137" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potvrdu izjavljenih akademskih i stručnih kvalifikacija</td>
		<td align="center" width=100><input type="text" id="138" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Nezavisnu provjeru identiteta (putovnica ili sličan dokument)</td>
		<td align="center" width=100><input type="text" id="139" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Detaljnije provjere, primjerice kreditne sposobnosti ili nekažnjavanja</td>
		<td align="center" width=100><input type="text" id="140" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>8.1.3</td><td>Trajanje i uvjeti zaposlenja</td><td>Kao dio ugovornih obveza, zaposlenici, ugovorni suradnici i korisnici treće strane trebaju dogovoriti i potpisati trajanje i uvjete ugovora o zaposlenju u kojem je potrebno navesti njihove odgovornosti i odgovornosti organizacije za informacijsku sigurnost.</td>
		<td align="center" width=100><input type="text" id="141" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=7 align="center" colspan=2 width=560>Trajanje i uvjeti zaposlenja trebaju odražavati politiku informacijske sigurnosti organizacije, pojasniti i navesti sljedeće:</td>
    <td>Svi zaposlenici, ugovorni suradnici i korisnici treće strane kojima je dozvoljen pristup osjetljivim informacijama trebaju prije pristupa opremi za obradu informacija potpisati sporazum o povjerljivosti i tajnosti</td>
		<td align="center" width=100><input type="text" id="142" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Zakonske odgovornosti i prava zaposlenika, ugovornih suradnika i ostalih korisnika, primjerice u vezi zaštite autorskih prava ili zakona o zaštiti podataka (također pogledajte 15.1.1 i 15.1.2)</td>
		<td align="center" width=100><input type="text" id="143" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Odgovornosti za klasifikaciju informacija i upravljanje imovinom organizacije koja se odnosi na informacijske sustave i usluge koje koriste zaposlenici, ugovorni suradnici i korisnici treće strane (također pogledajte 7.2.1 i 10.7.3)</td>
		<td align="center" width=100><input type="text" id="144" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovornosti zaposlenika, ugovornih suradnika i korisnika treće strane za uporabu primljenih informacija od drugih organizacija ili vanjskih suradnika</td>
		<td align="center" width=100><input type="text" id="145" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovornosti organizacije pri uporabi osobnih podataka, uključujući podatke nastale kao rezultat ili tijekom zaposlenja u organizaciji (također pogledajte 15.1.4)</td>
		<td align="center" width=100><input type="text" id="146" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovornosti koje se proširuju izvan prostorija organizacije i izvan normalnog radnog vremena, primjerice u slučaju rada kod kuće (također pogledajte 9.2.5 i 11.7.1)</td>
		<td align="center" width=100><input type="text" id="147" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Aktivnosti koje treba poduzeti ako zaposlenik, ugovorni suradnik ili korisnik treće strane ne poštuje sigurnosne zahtjeve organizacije (također pogledajte 8.2.3)</td>
		<td align="center" width=100><input type="text" id="148" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>8.2.</td><td colspan=4 align=center>Tijekom zaposlenja</td></tr>
<tr class="alt"><td>8.2.1.</td><td>Odgovornosti uprave</td><td>Uprava treba zahtijevati od zaposlenika, ugovornih suradnika i korisnika treće strane primjenu sigurnosti u skladu s postojećim politikama i procedurama organizacije.</td>
		<td align="center" width=100><input type="text" id="149" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=6 align="center" colspan=2 width=560>Odgovornosti uprave trebaju sadržavati aktivnosti u kojima će zaposlenici, ugovorni suradnici i korisnici treće strane:</td>
    <td>Dobiti informacije o njihovim sigurnosnim funkcijama i odgovornostima prije nego što im se odobri pristup osjetljivim informacijama ili informacijskim sustavima</td>
		<td align="center" width=100><input type="text" id="150" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Dobiti smjernice o tome kakva su sigurnosna očekivanja u odnosu na njihove funkcije unutar organizacije</td>
		<td align="center" width=100><input type="text" id="151" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Biti motivirani za ispunjenje sigurnosnih politika organizacije</td>
		<td align="center" width=100><input type="text" id="152" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Postići razinu svijesti o sigurnosti u odnosu na njihove funkcije i odgovornosti unutar organizacije(također pogledajte 8.2.2)</td>
		<td align="center" width=100><input type="text" id="153" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Pridržavati se trajanja i uvjeta zaposlenja, uključujući politiku informacijske sigurnosti organizacije i odgovarajuće metode rada</td>
		<td align="center" width=100><input type="text" id="154" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Održavati odgovarajuće vještine i kvalifikacije</td>
		<td align="center" width=100><input type="text" id="155" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>8.2.2.</td><td>Razina svijesti o informacijskoj sigurnosti, obrazovanje i obučavanje</td><td>Svi zaposlenici u organizaciji i, ako postoje, ugovorni suradnici i korisnici treće strane trebaju sudjelovati u primjerenom obučavanju u svrhu podizanja razine svijesti i redovitom obavješćivanju o politikama i procedurama organizacije koje se odnose na njihovu poslovnu funkciju.</td>
		<td align="center" width=100><input type="text" id="156" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=2 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Obučavanje u svrhu podizanja razine svijesti treba započeti formalnim uvodom u kojem će se predstaviti politike informacijske sigurnosti i očekivanja organizacije prije nego što se odobri pristup informacijama ili uslugama</td>
		<td align="center" width=100><input type="text" id="157" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Obučavanje treba sadržavati sigurnosne zahtjeve, zakonske obveze i poslovne kontrole kao i obuku o ispravnoj uporabi opreme za obradu informacija, primjerice procedura prijavljivanja, uporaba softverskih paketa i informacije o disciplinskom procesu (pogledajte 8.2.3)</td>
		<td align="center" width=100><input type="text" id="158" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr class="alt"><td>8.2.3.</td><td>Disciplinski proces</td><td>Treba postojati formalni disciplinski proces za zaposlenike koji su ugrozili sigurnost.</td>
		<td align="center" width=100><input type="text" id="159" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=2 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Disciplinski proces ne treba započeti bez prethodne provjere da je zaista došlo do ugrožavanja sigurnosti(također pogledajte 13.2.3 za prikupljanje dokaza)</td>
		<td align="center" width=100><input type="text" id="160" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Formalni disciplinski proces treba osigurati ispravnu i poštenu obradu zaposlenika za koje se sumnja da su ugrozili sigurnost.</td>
		<td align="center" width=100><input type="text" id="161" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="aa"><td>8.3.</td><td colspan=4 align=center>Prekid ili promjena zaposlenja</td></tr>
<tr class="alt"><td>8.3.1.</td><td>Odgovornosti za prekid</td><td>Odgovornosti za prekid ili promjenu zaposlenja trebaju biti jasno određene i dodijeljene.</td>
		<td align="center" width=100><input type="text" id="162" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=3 align="center" colspan=2 width=560>Smjernice za primjenu</td>
    <td>Sudjelovanje u prekidu odgovornosti treba obuhvatiti tekuće sigurnosne zahtjeve i zakonske obveze i, ako je potrebno, odgovornosti sadržane u sporazumu o povjerljivosti (pogledajte 6.1.5), trajanje i uvjete zaposlenja (pogledajte 8.1.3) koji se nastavljaju određeno vrijeme nakon prekida zaposlenja zaposlenika, ugovornog suradnika ili korisnika treće strane.</td>
		<td align="center" width=100><input type="text" id="163" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ugovor zaposlenika, ugovornog suradnika ili korisnika treće strane treba sadržavati odgovornosti i dužnosti koje vrijede i nakon prekida zaposlenja.</td>
		<td align="center" width=100><input type="text" id="164" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Promjene odgovornosti ili zaposlenja treba izvesti kao prekid odgovarajućih odgovornosti ili zaposlenja i zatim provesti novo zaposlenje prema opisu u poglavlju 8.1.</td>
		<td align="center" width=100><input type="text" id="165" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>8.3.2.</td><td>Povrat imovine</td><td>Nakon prekida njihovog zaposlenja, ugovora ili sporazuma, svi zaposlenici, ugovorni suradnici i korisnici treće strane trebaju vratiti svu imovinu organizacije koja im je dana na korištenje.</td>
		<td align="center" width=100><input type="text" id="166" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=560>Smjernice za primjenu</td>
    <td>Proces prekida treba osmisliti tako da uključuje povrat softvera, dokumentacije i opreme. Također je potrebno vratiti ostalu imovinu organizacije kao što su prijenosna računala, kreditne kartice, kartice za pristup, softver, priručnike i informacije pohranjene na elektroničkim medijima</td>
		<td align="center" width=100><input type="text" id="167" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>U slučajevima kad zaposlenik, ugovorni suradnik ili korisnik treće strane unajmljuje imovinu organizacije ili koristiti svoju osobnu opremu, potrebno je slijediti procedure koje će osigurati prijenos svih važnih informacija u organizaciju i brisanje informacija sa opreme (također pogledajte 10.7.1)</td>
		<td align="center" width=100><input type="text" id="168" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>U slučajevima kad zaposlenik, ugovorni suradnik ili korisnik treće strane posjeduje znanje važno za tekuće poslove, ove informacije je potrebno dokumentirati i prenijeti na organizaciju</td>
		<td align="center" width=100><input type="text" id="169" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="alt"><td>8.3.3.</td><td>Ukidanje prava pristupa</td><td>Prava pristupa svih zaposlenika, ugovornih suradnika i korisnika treće strane informacijama i opremi za obradu informacija trebaju se ukinuti kod prekida zaposlenja, ugovora ili sporazuma ili prilagoditi nastalim promjenama.</td>
		<td align="center" width=100><input type="text" id="170" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=3 align="center" colspan=2 width=560>Prava pristupa informacijama i opremi za obradu informacija trebaju se smanjili ili ukinuti prije prekida ili promjene zaposlenja ovisno o procjeni faktora rizika kao što su:</td>
    <td>Da li je prekid pokrenuo zaposlenik, ugovorni suradnik ili korisnik treće strane ili uprava i razlog prekida</td>
		<td align="center" width=100><input type="text" id="171" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Tekuće odgovornosti zaposlenika, ugovornog suradnika ili bilo kojeg drugog korisnika</td>
		<td align="center" width=100><input type="text" id="172" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Vrijednost trenutno dostupne imovine</td>
		<td align="center" width=100><input type="text" id="173" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
</table>
<!-- 999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999999 -->
<br>
<table id="prva" width=75% cellspacing=5 cellpadding=8 cols=2>
<tr><td class="a" colspan=6 align=center>9. Fizička sigurnost i sigurnost okruženja</td></tr>
<tr class="aa"><td>9.1.</td><td colspan=4 align=center>Osigurana područja</td></tr>
<tr class="alt"><td>9.1.1.</td><td>Granice fizičkog sigurnosnog prostora</td><td>Za zaštitu područja koje sadrže informacije i opremu za obradu informacija potrebno je koristiti granice sigurnosnih prostora (prepreke kao što su zidovi, ulaze na kojima se koriste ulazne kartice ili recepcije).</td>
		<td align="center" width=100><input type="text" id="174" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=7 align="center" colspan=2 width=660>Kod granica fizičkih sigurnosnih prostora potrebno je razmotriti i gdje je potrebno primijeniti sljedeće smjernice:</td>
    <td>Granice sigurnosnog prostora trebaju se jasno odrediti, a položaj i snaga svake granice sigurnosnog prostora trebaju ovisiti o sigurnosnim zahtjevima imovine unutar granica i rezultatima procjene rizika</td>
		<td align="center" width=100><input type="text" id="175" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Granice zgrade ili lokacije koje sadrže opremu za obradu informacija trebaju biti fizički ispravne (primjerice ne bi trebale postojati praznine ili područja na kojima je lako moguća provala), vanjski zidovi trebaju biti čvrste konstrukcije i sva vanjska vrata trebaju se pomoću kontrolnih mehanizama na pogodan način zaštititi od neovlaštenog pristupa, primjerice rešetkama, alarmima, bravama; vrata i prozori trebaju biti zaključani kad u prostorijama nema nikoga, a također je potrebno voditi računa o vanjskoj zaštiti prozora, posebice u prizemlju</td>
		<td align="center" width=100><input type="text" id="176" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Trebaju postojati recepcije ili drugi načini kontrole fizičkog pristupa lokaciji ili zgradi; pristup lokaciji i zgradama treba ograničiti samo na ovlaštene osobe</td>
		<td align="center" width=100><input type="text" id="177" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je izgraditi fizičke prepreke, tamo gdje je moguće, koje će spriječiti neovlašteni fizički pristup i onečišćenje okoliša</td>
		<td align="center" width=100><input type="text" id="178" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Sva požarna vrata na granicama sigurnosnog prostora trebaju biti zaštićena alarmima, potrebno ih je nadzirati i ispitati na spojevima sa zidovima radi postavljanja potrebne razine zaštite u skladu s pogodnim regionalnim, nacionalnim i međunarodnim standardima; njihova funkcija treba biti usklađena s lokalnim protupožarnim propisima na siguran način</td>
		<td align="center" width=100><input type="text" id="179" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>U skladu s nacionalnim, regionalnim ili međunarodnim standardima potrebno je ugraditi pogodne sustave za detekciju provale i redovito provjeravati njihovu funkciju zaštite vanjskih vrata i dostupnih prozora; prostori u kojima nema nikoga trebaju cijelo vrijeme biti pod nadzorom alarmnih sustava; zaštitu treba osigurati i za ostala područja, primjerice računalne ili komunikacijske sobe</td>
		<td align="center" width=100><input type="text" id="180" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Opremu za obradu informacija kojom upravlja organizacija treba fizički odvojiti od opreme kojom upravljaju treće strane</td>
		<td align="center" width=100><input type="text" id="181" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>9.1.2.</td><td>Kontrole fizičkog pristupa</td><td>Sigurnosna područja trebaju biti zaštićena odgovarajućim kontrolama ulaza koje osiguravaju pristup samo ovlaštenom osoblju.</td>
		<td align="center" width=100><input type="text" id="182" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=660>Potrebno je razmotriti sljedeće smjernice:</td>
    <td>Potrebno je zapisati datum i vrijeme ulaza i odlaska posjetitelja i nadzirati sve posjetitelje, osim ako njihov pristup nije prethodno odobren; potrebno im je dozvoliti pristup samo za određene, ovlaštene namjene i to s informacijama o sigurnosnim zahtjevima područja i procedurama u slučaju nužde</td>
		<td align="center" width=100><input type="text" id="183" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Pristup područjima u kojima se obrađuju i pohranjuju osjetljive informacije treba kontrolirati i ograničiti samo na ovlaštene osobe; potrebno je koristiti kontrole za provjeru vjerodostojnosti, primjerice kontrolne kartice i PIN, za ovlaštenje i vrednovanje svakog pristupa; također je potrebno na siguran način održavati kontrolu knjiženja svih pristupa</td>
		<td align="center" width=100><input type="text" id="184" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Svi zaposlenici, ugovorni suradnici, korisnici treće strane i svi posjetitelji trebaju nositi neki oblik vidljive identifikacije i odmah obavijestiti sigurnosno osoblje ako sretnu posjetitelje bez pratnje i bilo koga tko nema vidljivu identifikaciju</td>
		<td align="center" width=100><input type="text" id="185" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Osoblju za uslužnu podršku treće strane treba dozvoliti pristup sigurnosnim područjima ili opremi za obradu osjetljivih informacija samo kad je to potrebno; ovaj pristup treba biti ovlašten i nadziran</td>
		<td align="center" width=100><input type="text" id="186" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Prava na pristup sigurnosnim područjima trebaju se redovito provjeravati i obnavljati i, ako je potrebno, ukinuti (pogledajte 8.3.3)</td>
		<td align="center" width=100><input type="text" id="187" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>9.1.3.</td><td>Osiguranje ureda, prostorija i opreme</td><td>Potrebno je izraditi i primijeniti fizičko osiguranje ureda, prostorija i opreme.</td>
		<td align="center" width=100><input type="text" id="188" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=4 align="center" colspan=2 width=660>Za osiguranje ureda, prostorija i opreme potrebno je razmotriti sljedeće smjernice:</td>
    <td>Potrebno je uzeti u obzir sve važne standarde i propise o zdravlju i sigurnosti</td>
		<td align="center" width=100><input type="text" id="189" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ključnu opremu je potrebno smjestiti tako da nije dostupna svakome</td>
		<td align="center" width=100><input type="text" id="190" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Tamo gdje je moguće, zgrade trebaju biti neupadljive i njihova namjena bi trebala biti naznačena u najmanjoj mogućoj mjeri, bez očiglednih natpisa izvana ili iznutra koji bi upućivali na aktivnosti u vezi obrade informacija</td>
		<td align="center" width=100><input type="text" id="191" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Adresari i interni telefonski imenici koji otkrivaju položaj opreme za obradu osjetljivih informacija ne trebaju biti svakome dostupni</td>
		<td align="center" width=100><input type="text" id="192" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr class="alt"><td>9.1.4.</td><td>Zaštita od vanjskih prijetnji i nepogoda</td><td>Potrebno je izraditi i primijeniti fizičku zaštitu od štete uslijed požara, poplave, zemljotresa, eksplozije, nemira i ostalih oblika nepogoda i nesreća.</td>
		<td align="center" width=100><input type="text" id="193" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=660>Potrebno je razmotriti sljedeće smjernice za sprječavanje štete uslijed požara, poplave, zemljotresa, eksplozije, nemira i ostalih oblika nepogoda i nesreća:</td>
    <td>Opasne ili zapaljive materijale treba pohraniti na sigurnoj udaljenosti od sigurnosnog područja. Velike količine zaliha, kao što je kancelarijski pribor, ne treba pohranjivati u sigurnosnom području</td>
		<td align="center" width=100><input type="text" id="194" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Rezervna oprema i mediji za pohranu trebaju biti smješteni na sigurnoj udaljenosti radi sprječavanja štete od nesreće koja bi utjecala na glavni prostor</td>
		<td align="center" width=100><input type="text" id="195" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potrebno je osigurati i na pogodan način smjestiti odgovarajuću opremu za gašenje požara</td>
		<td align="center" width=100><input type="text" id="196" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>9.1.5.</td><td>Rad u osiguranim područjima</td><td>Potrebno je izraditi i primijeniti fizičku zaštitu i smjernice za rad u osiguranim područjima</td>
		<td align="center" width=100><input type="text" id="197" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=4 align="center" colspan=2 width=660>Potrebno je razmotriti sljedeće smjernice:</td>
    <td>Osoblje treba biti obaviješteno o postojanju ili aktivnostima u osiguranim područjima onoliko koliko je to potrebno</td>
		<td align="center" width=100><input type="text" id="198" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Rad bez nadzora u osiguranim područjima treba izbjegavati zbog sigurnosnih razloga i radi sprječavanja mogućnosti zlonamjernih aktivnosti</td>
		<td align="center" width=100><input type="text" id="199" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Prazni osigurani prostori trebaju biti fizički zaključani i redovito provjeravani</td>
		<td align="center" width=100><input type="text" id="200" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ne treba dozvoliti neovlašteno unošenje fotografske, video, audio i druge opreme za snimanje, primjerice kamera u mobilnim uređajima</td>
		<td align="center" width=100><input type="text" id="201" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>9.1.6.</td><td>Područja s javnim pristupom, područja za isporuku i utovar</td><td>Mjesta pristupa kao što je područje za isporuku i utovar i ostala mjesta na kojima neovlaštene osobe mogu ući u prostor organizacije trebaju biti pod kontrolom i, ako je moguće, izolirane od opreme za obradu informacija radi sprječavanja neovlaštenog pristupa.</td>
		<td align="center" width=100><input type="text" id="202" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=6 align="center" colspan=2 width=660>Potrebno je razmotriti sljedeće smjernice:</td>
    <td>Pristup području za isporuku i utovar izvan zgrade treba ograničiti samo na ovlaštene osobe</td>
		<td align="center" width=100><input type="text" id="203" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Područja za isporuku i utovar trebaju biti tako izgrađeni da je osoblju za isporuku omogućeno rukovanje robom bez pristupa ostalim dijelovima zgrade</td>
		<td align="center" width=100><input type="text" id="204" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Vanjska vrata područja za isporuku i utovar trebaju biti osigurana kad se otvore unutrašnja vrata</td>
		<td align="center" width=100><input type="text" id="205" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Dolazeći materijal je potrebno pregledati radi potencijalnih prijetnji (pogledajte 9.2.1d)) prije nego što se unese iz područja za isporuku i utovar do mjesta uporabe</td>
		<td align="center" width=100><input type="text" id="206" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Pri ulasku, dolazeći materijal je potrebno upisati u skladu s procedurama upravljanja imovinom (pogledajte 7.1.1)</td>
		<td align="center" width=100><input type="text" id="207" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ako je moguće, dolazne i odlazne isporuke trebaju biti fizički odvojene</td>
		<td align="center" width=100><input type="text" id="208" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>9.2.</td><td colspan=4 align=center>Sigurnost opreme</td></tr>
<tr class="alt"><td>9.2.1.</td><td>Smještaj opreme i zaštita</td><td>Oprema treba biti smještena ili zaštićena radi zaštite od prijetnji i opasnosti okruženja i mogućnosti neovlaštenog pristupa.</td>
		<td align="center" width=100><input type="text" id="209" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=9 align="center" colspan=2 width=560>Za zaštitu opreme potrebno je razmotriti sljedeće smjernice:</td>
    <td>Oprema treba biti smještena radi smanjenja mogućnosti nepotrebnog pristupa u radnim područjima</td>
		<td align="center" width=100><input type="text" id="210" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Oprema za obradu osjetljivih podataka treba biti postavljena i kut gledanja ograničen radi smanjenja opasnosti od pogleda neovlaštenih osoba tijekom njihove uporabe, a oprema za pohranjivanje treba biti osigurana kako bi se spriječio neovlašteni pristup</td>
		<td align="center" width=100><input type="text" id="211" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Oprema koja zahtijeva posebnu zaštitu treba biti izolirana kako bi se smanjila općenita razina potrebne zaštite</td>
		<td align="center" width=100><input type="text" id="212" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Kontrole trebaju smanjiti rizik od potencijalnih fizičkih prijetnji, primjerice krađe, požara, eksplozije, dima, vode (ili kvara vodovodne instalacije), prašine, vibracija, kemijskih utjecaja, smetnji u električkom napajanju, komunikacijskih smetnji, elektromagnetskog zračenja i vandalizma</td>
		<td align="center" width=100><input type="text" id="213" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je izraditi smjernice za pušenje, jelo i piće u blizini opreme za obradu informacija</td>
		<td align="center" width=100><input type="text" id="214" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je pratiti uvjete okruženja, primjerice temperaturu i vlagu, radi njihovog utjecaja na rad opreme za obradu informacija</td>
		<td align="center" width=100><input type="text" id="215" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Na svim zgradama je potrebno primijeniti zaštitu od udara groma i na svim dolaznim linijama napajanja i komunikacijskim linijama treba postaviti filtre za zaštitu od udara groma</td>
		<td align="center" width=100><input type="text" id="216" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Za opremu u industrijskom okruženju treba razmotriti posebne načine zaštite, primjerice membrane za tipkovnice</td>
		<td align="center" width=100><input type="text" id="217" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je zaštititi opremu za obradu osjetljivih informacija radi smanjenja rizika od curenja informacija pri emanaciji</td>
		<td align="center" width=100><input type="text" id="218" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>9.2.2.</td><td>Prateće usluge i oprema</td><td>Oprema treba biti zaštićena od kvara u napajanju i ostalih prekida uzrokovanih zastojima u pratećim uslugama i opremi.</td>
		<td align="center" width=100><input type="text" id="219" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=560>Smjernice za primjenu</td>
    <td>Sve prateće usluge, primjerice električka energija, vodovod, kanalizacija, kao i grijanje/ventilacija i klimatizacija trebaju odgovarati sustavu</td>
		<td align="center" width=100><input type="text" id="220" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Preporučuje se uporaba besprekidnog napajanja (UPS) radi ispravnog gašenja ili kontinuiranog rada opreme koja izvodi presudne poslove.</td>
		<td align="center" width=100><input type="text" id="221" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Preklopke za isključenje napajanja u slučaju nužde trebaju biti smještene u blizini izlaza za slučaj nužde u prostorijama s opremom radi lakšeg brzog isključenja napajanja. U slučaju nestanka glavnog napajanja potrebno je osigurati osvjetljenje za slučaj nužde.</td>
		<td align="center" width=100><input type="text" id="222" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Opskrba vodom treba biti stabilna i odgovarajuća za klimatizaciju, ovlaživaće zraka i protupožarni sustav (ako se koristi).</td>
		<td align="center" width=100><input type="text" id="223" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Telekomunikacijska oprema treba biti spojena na davatelja usluge pomoću bar dvije različite linije tako da uslijed kvara jedne linije ne dođe do gubitka telefonske usluge.</td>
		<td align="center" width=100><input type="text" id="224" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>9.2.3.</td><td>Sigurnost ožičenja</td><td>Potrebno je zaštititi kabele napajanja i komunikacijske kabele za prijenos podataka ili informacijske usluge od prekida i oštećenja.</td>
		<td align="center" width=100><input type="text" id="225" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td rowspan=6 align="center" colspan=2 width=560>Za sigurnost ožičenja potrebno je razmotriti sljedeće smjernice:</td>
    <td>Linije napajanja i komunikacijske linije do opreme za obradu informacija trebaju biti ukopane, ako je moguće, ili ih je potrebno na drugačiji način zaštititi</td>
		<td align="center" width=100><input type="text" id="226" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Mrežno ožičenje treba biti zaštićeno od neovlaštenog prisluškivanja ili oštećenja, primjerice pomoću kabelskih kanala ili izbjegavanja linija koje se vode preko javnih područja</td>
		<td align="center" width=100><input type="text" id="227" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Kabele napajanja treba odvojiti od komunikacijskih kabela radi sprječavanja smetnji</td>
		<td align="center" width=100><input type="text" id="228" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je koristiti jasno prepoznatljive kabele i opremu za označavanje tako da ne dođe do grešaka pri rukovanju, primjerice slučajnog popravka krivih mrežnih kabela</td>
		<td align="center" width=100><input type="text" id="229" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je koristiti dokumente s popisom izvedenih popravaka radi smanjenja mogućnosti greške</td>
		<td align="center" width=100><input type="text" id="230" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Kod osjetljivih ili presudnih sustava daljnje kontrole uključuju:<br>
1. instalaciju oklopljenih kabelskih kanala i zaključanih prostorija ili ormarića na mjestima provjere ili zaključenja;<br>
2. uporabu alternativnih putova i/ili medija za prijenos koji omogućuju odgovarajuću sigurnost;<br>
3. uporabu optičkih kabela;<br>
4. uporabu elektromagnetskog oklapanja za zaštitu kabela;<br>
5. izvođenje tehničkih i fizičkih provjera neovlaštene opreme koja se priključuje na kabele;<br>
6. kontrolirani pristup kabelskim ormarićima i prostorijama i prespojnim pločama.<br>
</td>
		<td align="center" width=100><input type="text" id="231" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>9.2.4.</td><td>Održavanje opreme</td><td>Opremu je potrebno na ispravan način održavati kako bi se osigurala njena kontinuirana dostupnost i cjelovitost.</td>
		<td align="center" width=100><input type="text" id="232" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=560>Za održavanje opreme potrebno je razmotriti sljedeće smjernice:</td>
    <td>Opremu je potrebno održavati redovito prema preporukama proizvođača</td>
		<td align="center" width=100><input type="text" id="233" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Popravke i servisiranje opreme treba izvoditi samo ovlašteno osoblje</td>
		<td align="center" width=100><input type="text" id="234" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potrebno je voditi zapise o svim stvarnim kvarovima i kvarovima za koje postoji sumnja, kao i o svim preventivnim i korektivnim postupcima održavanja</td>
		<td align="center" width=100><input type="text" id="235" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Kad je predviđeno održavanje, potrebno je primijeniti odgovarajuće kontrole vodeći računa o tome da li se poslovi održavanja izvode u prostorima organizacije ili na terenu; ako je potrebno, sa opreme treba ukloniti osjetljive informacije ili treba u dovoljnoj mjeri pregledati osoblje</td>
		<td align="center" width=100><input type="text" id="236" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je pridržavati se svih zahtjeva polica osiguranja</td>
		<td align="center" width=100><input type="text" id="237" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>9.2.5.</td><td>Sigurnost opreme izvan prostora organizacije</td><td>Potrebno je primijeniti sigurnost na opremu izvan prostora organizacije, vodeći računa o različitim rizicima u takvim slučajevima.</td>
		<td align="center" width=100><input type="text" id="238" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=4 align="center" colspan=2 width=560>Za zaštitu opreme izvan prostora organizacije treba razmotriti sljedeće smjernice:</td>
    <td>Oprema i mediji koji se iznose iz organizacije ne bi trebalo ostaviti bez nadzora na javnim mjestima; prijenosna računala treba nositi kao ručnu prtljagu i prikriti tijekom putovanja, ako je moguće:</td>
		<td align="center" width=100><input type="text" id="239" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Uvijek treba voditi računa o uputama proizvođača za zaštitu opreme, primjerice zaštitu od izlaganja snažnim elektromagnetskim poljima</td>
		<td align="center" width=100><input type="text" id="240" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Kontrole za rad kod kuće treba odrediti i primijeniti u skladu s procijenjenim rizikom, primjerice ormarići s bravama, politika praznog radnog stola, kontrole pristupa računalu ili sigurna komunikacija s uredom (također pogledajte ISO/IEC 18028 Netvvork Secuhty - Sigurnost mreže)</td>
		<td align="center" width=100><input type="text" id="241" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Opremu izvan organizacije treba zaštititi odgovarajućim policama osiguranja</td>
		<td align="center" width=100><input type="text" id="242" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="alt"><td>9.2.6.</td><td>Sigurno odbacivanje ili ponovno korištenje opreme</td><td>Prije odbacivanja potrebno je provjeriti sve dijelove opreme koji sadrže medije za pohranjivanje kako bi se uvjerili da su uklonjeni ili obrisani svi osjetljivi podaci i ovlašteni softver.</td>
		<td align="center" width=100><input type="text" id="243" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=1 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Umjesto standardnog brisanja ili formatiranja, uređaje koji sadrže osjetljive informacije potrebno je fizički uništiti ili informacije uništiti ili obrisati na način da se više ne može pristupiti originalnim informacijama</td>
		<td align="center" width=100><input type="text" id="244" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>9.2.7.</td><td>Iznošenje imovine</td><td>Opremu, informacije ili softver ne bi trebalo iznositi izvan prostora organizacije bez prethodnog ovlaštenja.</td>
		<td align="center" width=100><input type="text" id="245" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=4 align="center" colspan=2 width=560>Potrebno je razmotriti sljedeće smjernice:</td>
    <td>Opremu, informacije ili softver ne bi trebalo iznositi izvan prostora organizacije bez prethodnog ovlaštenja</td>
		<td align="center" width=100><input type="text" id="246" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je jasno odrediti zaposlenike, ugovorne suradnike i korisnike treće strane koji imaju ovlaštenje odobriti iznošenje imovine izvan prostora organizacije</td>
		<td align="center" width=100><input type="text" id="247" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potrebno je odrediti vremensko ograničenje za iznošenje imovine i provjeriti povrat</td>
		<td align="center" width=100><input type="text" id="248" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ukoliko je primjereno, treba voditi evidenciju o iznošenju i povratu imovine</td>
		<td align="center" width=100><input type="text" id="249" size="6" onkeyup="provjera(this.id);"> %</td></tr>
</table>

<!-- 101010101010101010101010101011010101010101010101010101010101010101010101010101010101010101010101010101 -->
<br>
<table id="prva" width=75% cellspacing=5 cellpadding=8 cols=2>
<tr><td class="a" colspan=6 align=center>10. Upravljanje komunikacijama i operacijama</td></tr>
<tr class="aa"><td>10.1.</td><td colspan=4 align=center>Operativne procedure i odgovornosti</td></tr>
<tr class="alt"><td>10.1.1.</td><td>Dokumentirane radne procedure</td><td>Radne procedure je potrebno dokumentirati, održavati i trebaju biti dostupni svim korisnicima kojima su potrebni.</td>
		<td align="center" width=100><input type="text" id="250" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=8 align="center" colspan=2 width=560>Radne procedure trebaju sadržavati upute za detaljno izvođenje svakog posla, uključujući:</td>
    <td>Obradu i rukovanje informacijama</td>
		<td align="center" width=100><input type="text" id="251" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Sigurnosne kopije (pogledajte 10.5)</td>
		<td align="center" width=100><input type="text" id="252" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Zahtjeve vremenskog rasporeda, uključujući međuzavisnosti s ostalim sustavima, vremena početka najranijeg i završetka najkasnijeg posla</td>
		<td align="center" width=100><input type="text" id="253" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Upute za slučaj grešaka ili ostalih iznimnih okolnosti koje bi mogle nastati tijekom izvođenja posla, uključujući ograničenja uporabe uslužnih programa sustava (pogledajte 11.5.4)</td>
		<td align="center" width=100><input type="text" id="254" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Kontakti podrške u slučaju neočekivanih operativnih ili tehničkih poteškoća</td>
		<td align="center" width=100><input type="text" id="255" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Upute za rukovanje posebnim izlazima i medijima, kao stoje uporaba posebne dokumentacije ili upravljanje povjerljivim izlazima uključujući procedure za sigurno odbacivanje rezultata neuspjelih poslova (pogledajte 10.7.2 i 10.7.3)</td>
		<td align="center" width=100><input type="text" id="256" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procedure ponovnog pokretanja sustava i obnavljanja u slučaju zastoja u radu sustava</td>
		<td align="center" width=100><input type="text" id="257" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Upravljanje kontrolom knjiženja i dnevnikom rada sustava (pogledajte 10.10)</td>
		<td align="center" width=100><input type="text" id="258" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.1.2.</td><td>Upravljanje promjenom</td><td>Potrebno je kontrolirati promjene na opremi za obradu informacija i u sustavima.</td>
		<td align="center" width=100><input type="text" id="259" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=6 align="center" colspan=2 width=560>Na operativne sustave i aplikacijski softver treba primijeniti stroge kontrole upravljanja promjenom:</td>
    <td>Prepoznavanje i bilježenje značajnih promjena</td>
		<td align="center" width=100><input type="text" id="260" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Planiranje i ispitivanje promjena</td>
		<td align="center" width=100><input type="text" id="261" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procjenu potencijalnih utjecaja, uključujući sigurnosnih utjecaja, takvih promjena</td>
		<td align="center" width=100><input type="text" id="262" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Formalna procedura odobrenja predloženih promjena</td>
		<td align="center" width=100><input type="text" id="263" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Obavješćivanje svih nadležnih osoba o detaljima promjena</td>
		<td align="center" width=100><input type="text" id="264" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procedure u slučaju neuspjeha, uključujući procedure i odgovornosti za prekid i obnavljanje kod neuspjelih promjena i nepredviđenih događaja</td>
		<td align="center" width=100><input type="text" id="265" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr class="alt"><td>10.1.3.</td><td>Odjeljivanje funkcija</td><td>Potrebno je odijeliti funkcije i područja odgovornosti radi smanjenja mogućnosti neovlaštene ili nenamjerne promjene ili zloporabe imovine organizacije.</td>
		<td align="center" width=100><input type="text" id="266" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=1 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Odjeljivanje funkcija predstavlja način smanjenja rizika od slučajne ili namjerne zloporabe sustava. Potrebno je voditi računa da nitko ne može pristupiti, promijeniti ili koristiti imovinu bez ovlaštenja ili otkrivanja. Nastajanje događaja treba odvojiti od njegovog ovlaštenja. Pri izradi kontrola potrebno je voditi računa o mogućnosti tajnog sporazuma.</td>
		<td align="center" width=100><input type="text" id="267" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.1.4.</td><td>Odjeljivanje razvojne, ispitne i operativne opreme</td><td>Razvojnu, ispitnu i operativnu opremu treba odijeliti radi smanjenja rizika od neovlaštenog pristupa ili promjenama operativnog sustava.</td>
		<td align="center" width=100><input type="text" id="268" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=6 align="center" colspan=2 width=560>Potrebno je razmotriti sljedeće:</td>
    <td>Potrebno je definirati i dokumentirati pravila za prijelaz softvera iz faze razvoja u operativnu fazu</td>
		<td align="center" width=100><input type="text" id="269" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Razvojni i operativni softver treba se izvoditi na različitim sustavima ili računalnim procesorima i u različitim domenama ili direktorijima</td>
		<td align="center" width=100><input type="text" id="270" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Kompilatori, editori i ostali razvojni alati ili uslužni programi sustava ne bi trebali biti dostupni iz operativnih sustava kad nisu potrebni</td>
		<td align="center" width=100><input type="text" id="271" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Okruženje ispitnog sustava treba u najvećoj mogućoj mjeri oponašati okruženje operativnog sustava</td>
		<td align="center" width=100><input type="text" id="272" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Korisnik treba koristiti različite korisničke profile za operativne i ispitne sustave, a izbornici trebaju prikazati odgovarajuće identifikacijske poruke radi smanjenja mogućnosti greške</td>
		<td align="center" width=100><input type="text" id="273" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Osjetljive podatke ne bi trebalo kopirati u okruženje ispitnog sustava (pogledajte 12.4.2)</td>
		<td align="center" width=100><input type="text" id="274" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>10.2.</td><td colspan=4 align=center>Upravljanje pružanjem usluge treće strane</td></tr>
<tr class="alt"><td>10.2.1.</td><td>Pružanje usluge</td><td>Potrebno je osigurati da treća strana primjenjuje, izvodi i održava sigurnosne kontrole, određene stavke usluge i razine pruženih usluga sadržanih u sporazumu o pružanju usluge treće strane.</td>
		<td align="center" width=100><input type="text" id="275" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=2 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Pružanje usluge treće strane treba sadržavati dogovorena sigurnosna pitanja, definirane stavke usluge i stanovišta upravljanja uslugom. U slučaju korištenja vanjskih usluga, organizacija treba planirati potrebne prijelaze (informacija, opreme za obradu informacija i svega što treba premjestiti) i osigurati održavanje sigurnosti u cijelom prijelaznom periodu</td>
		<td align="center" width=100><input type="text" id="276" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Organizacija treba osigurati da treća strana održava dovoljnu razinu sposobnosti pružanja usluge zajedno s izrađenim radnim planovima radi održavanja razine usluge u slučaju značajnih zastoja ili nesreća (pogledajte 14.1).</td>
		<td align="center" width=100><input type="text" id="277" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="alt"><td>10.2.2.</td><td>Nadzor i provjera usluga treće strane</td><td>Potrebno je redovito nadzirati i provjeravati usluge, izvješća i zapise koje osigurava treća strana, te je potrebno redovito provoditi revizije.</td>
		<td align="center" width=100><input type="text" id="278" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=560>Nadzor i provjera usluga treće strane trebaju osigurati pridržavanje uvjeta informacijske sigurnosti kao i uvjeta sporazuma, a također i ispravno upravljanje sigurnosnim incidentima i problemima. Potrebno je obuhvatiti odnos u upravljanju uslugom i proces između organizacije i treće strane za:</td>
    <td>Praćenje razine pružene usluge radi provjere pridržavanja sporazuma</td>
		<td align="center" width=100><input type="text" id="279" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Provjeru izvješća o pruženoj usluzi treće strane i održavanje redovitih sastanaka za praćenje izvođenja prema sporazumu</td>
		<td align="center" width=100><input type="text" id="280" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Osiguranje informacija o sigurnosnim incidentima i provjeru ovih informacija od strane organizacije i treće strane prema sporazumu i dodatnim smjernicama i procedurama</td>
		<td align="center" width=100><input type="text" id="281" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Provjera kontrola knjiženja treće strane i zapisa o sigurnosnim događajima, operativnim problemima, zastojima, nalaženju grešaka i prekidima uslijed pružene usluge</td>
		<td align="center" width=100><input type="text" id="282" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Rješavanje i upravljanje problema koji se pojavi</td>
		<td align="center" width=100><input type="text" id="283" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.2.3.</td><td>Upravljanje promjenama usluga treće strane</td><td>Promjenama pruženih usluga, uključujući održavanje i poboljšanje postojećih politika informacijske sigurnosti, procedura i kontrola, treba upravljati tako da se uzme u obzir presudni značaj uključenih poslovnih sustava i procesa i ponovne procjenu rizika.</td>
		<td align="center" width=100><input type="text" id="284" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=2 align="center" colspan=2 width=560>Pri procesu upravljanja promjenama usluge treće strane treba voditi računa o:</td>
    <td>Promjenama koje je izvela organizacija radi primjene:<br>
1. poboljšanja trenutno pruženih usluga;<br>
2. razvoja novih aplikacija i sustava;<br>
3. promjena ili obnavljanja organizacijskih politika i procedura;<br>
4. novih kontrola za rješavanje sigurnosnih incidenata i za poboljšanje sigurnosti</td>
		<td align="center" width=100><input type="text" id="285" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Promjenama u uslugama treće strane radi primjene:<br>
1. promjena i poboljšanja mreža;<br>
2. novih tehnologija;<br>
3. usvajanja novih proizvoda ili novijih verzija/izdanja;<br>
4. novih razvojnih alata i okruženja;<br>
5. promjena fizičke lokacije opreme za pružanje usluga;<br>
6. promjene dobavljača</td>
		<td align="center" width=100><input type="text" id="286" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>10.3.</td><td colspan=4 align=center>Planiranje i prihvaćanje sustava</td></tr>
<tr class="alt"><td>10.3.1.</td><td>Upravljanje kapacitetom</td><td>Potrebno je pratiti i prilagoditi uporabu sredstava, a također i predvidjeti budući kapacitet za postizanje zahtijevane funkcionalnosti sustava.</td>
		<td align="center" width=100><input type="text" id="287" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=3 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Za svaku novu i tekuću aktivnost, potrebno je odrediti zahtjeve kapaciteta. Ugađanje sustava i praćenje treba primijeniti radi osiguranja i, ako je potrebno, poboljšanja dostupnosti i učinkovitosti sustava.</td>
		<td align="center" width=100><input type="text" id="288" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Posebnu pozornost treba obratiti na sredstva s dugim rokom isporuke ili visokim troškovima; zato rukovoditelji trebaju pratiti uporabu ključnih sredstava sustava. Trebaju prepoznati smjerove kretanja na području uporabe, posebice u odnosu na poslovne aplikacije i alate za upravljanje informacijskim sustavom</td>
		<td align="center" width=100><input type="text" id="289" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Rukovoditelji trebaju koristiti ove informacije za određivanje i izbjegavanje uskih grla i ovisnosti o ključnom osoblju, što bi moglo predstavljati prijetnju sigurnosti sustava ili usluga, te planiranje odgovarajuće akcije</td>
		<td align="center" width=100><input type="text" id="290" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.3.2.</td><td>Prihvaćanje sustava</td><td>Potrebno je odrediti kriterije prihvaćanja novih informacijskih sustava, nadogradnji i novih verzija, kao i provesti odgovarajuća ispitivanja sustava tijekom razvoja i prije samog prihvaćanja.</td>
		<td align="center" width=100><input type="text" id="291" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=10 align="center" colspan=2 width=560>Prije formalnog prihvaćanja potrebno je razmotriti sljedeće:</td>
    <td>Zahtjeve funkcionalnosti i kapaciteta računala</td>
		<td align="center" width=100><input type="text" id="292" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procedure za oporavak od pogreške i ponovno pokretanje sustava, kao i planove za nepredviđene situacije</td>
		<td align="center" width=100><input type="text" id="293" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Pripremu i ispitivanje rutinskih radnih procedura prema određenim standardima</td>
		<td align="center" width=100><input type="text" id="294" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Primjenu dogovorene grupe sigurnosnih kontrola</td>
		<td align="center" width=100><input type="text" id="295" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Učinkovite ručne procedure</td>
		<td align="center" width=100><input type="text" id="296" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Kontinuitet poslovanja (pogledajte 14.1)</td>
		<td align="center" width=100><input type="text" id="297" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Dokaz da instalacija novog sustava neće nepovoljno utjecati na postojeće sustave, posebice u vremenu najveće obrade, kao stoje to krajem mjeseca</td>
		<td align="center" width=100><input type="text" id="298" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Dokaz da je velika posvećena pozornost učinku kojeg novi sustav ima na ukupnu sigurnost organizacije</td>
		<td align="center" width=100><input type="text" id="299" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Obučavanje za rad ili uporabu novih sustava</td>
		<td align="center" width=100><input type="text" id="300" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Jednostavnost uporabe jer ovo utječe na rad korisnika i sprječava njihove greške</td>
		<td align="center" width=100><input type="text" id="301" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>10.4.</td><td colspan=4 align=center>Zaštita od zloćudnog i prenošljivog koda</td></tr>
<tr class="alt"><td>10.4.1.</td><td>Kontrole za zaštitu od zloćudnog koda</td><td>Potrebno je primijeniti kontrole za otkrivanje, sprječavanje i oporavak od zloćudnog koda, kao i odgovarajuće procedure upozoravanja korisnika.</td>
		<td align="center" width=100><input type="text" id="302" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=8 align="center" colspan=2 width=560>Zaštita od zloćudnog koda treba se zasnivati softveru za otkrivanje i oporavak od zloćudnog koda, svijesti o značaju sigurnosti i odgovarajućim kontrolama za pristup sustavu i upravljanje promjenom. Potrebno je razmotriti sljedeće smjernice:</td>
    <td>Uvođenje formalne politike sprječavanja uporabe neovlaštenog softvera (pogledajte 15.1.2)</td>
		<td align="center" width=100><input type="text" id="303" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Uvođenje formalne politike za zaštitu od rizika vezanih za pribavljanje datoteka i softvera iz ili pomoću vanjskih mreža ili bilo kojeg drugog medija uz naznaku koje zaštitne mjere treba poduzeti</td>
		<td align="center" width=100><input type="text" id="304" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Izvođenje redovitih provjera softvera i sadržaja podataka na sustavima koji podržavaju ključne poslovne procese; prisutnost bilo kakve neovlaštene datoteke ili neovlaštenog dodatka treba formalno istražiti</td>
		<td align="center" width=100><input type="text" id="305" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Instalacija i redovito obnavljanje softvera za otkrivanje i popravak zloćudnog koda za pretraživanje računala i medija kao mjere predostrožnosti, ili kao rutinski postupak; provjere trebaju sadržavati:<br>
1. provjeru svih datoteka na elektroničkim ili optičkim medijima i datoteka primljenih preko mreže prije njihove uporabe radi mogućih zloćudnih kodova;<br>
2. provjeru dodataka elektroničkoj pošti i datoteka preuzetih s drugih računala prije uporabe radi mogućih zloćudnih kodova; ove provjere treba izvesti na različitim mjestima, primjerice na poslužiteljima, stolnim računalima i pri spajanju na mrežu organizacije;<br>
3. provjeru web stranica koje bi mogle sadržavati zloćudni kod</td>
		<td align="center" width=100><input type="text" id="306" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Određivanje procedura i odgovornosti uprave za zaštitu od zloćudnog koda na sustavima, obučavanje za njihovu uporabu, izvješćivanje i oporavak od napada zloćudnog koda (pogledajte 13.1 i 13.2)</td>
		<td align="center" width=100><input type="text" id="307" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Priprema odgovarajućeg plana kontinuiteta poslovanja za oporavak od napada zloćudnog koda, uključujući izradu sigurnosnih kopija svih potrebnih podataka i softvera (pogledajte poglavlje 14) i postupaka za oporavak</td>
		<td align="center" width=100><input type="text" id="308" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Primjena procedura za redovito prikupljanje informacija, kao Što su pretplate na distribucijske liste elektroničke pošte i/ili provjeravanje web stranica koje pružaju informacije o novim zloćudnim kodovima</td>
		<td align="center" width=100><input type="text" id="309" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Primjena procedura za provjeru informacija koje se odnose na zloćudni kod i osiguranje pouzdanosti i točnosti izvora informacija s upozorenjima; rukovoditelji trebaju osigurati uporabu stručnih izvora, primjerice renomiranih časopisa, pouzdanih Internet stranica ili dobavljača softvera za zaštitu od zloćudnog koda, kako bi se mogao razlikovati lažni od stvarnog zloćudnog koda; svi korisnici trebaju biti svjesni problema koje donose lažni zloćudni kodovi i što učiniti kad ih prime</td>
		<td align="center" width=100><input type="text" id="310" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.4.2.</td><td>Kontrole za zaštitu od prenošljivog koda</td><td>Tamo gdje je uporaba prenošljivog koda ovlaštena, konfiguracija treba osigurati funkciju ovlaštenog prenošljivog koda u skladu sa jasno određenom politikom informacijske sigurnosti i treba zabraniti izvođenje neovlaštenog prenošljivog koda.</td>
		<td align="center" width=100><input type="text" id="311" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=6 align="center" colspan=2 width=560>Za zaštitu od neovlaštenog izvođenja prenošljivog koda treba razmotriti sljedeće akcije:</td>
    <td>Izvođenje prenošljivog koda u logički izoliranom okruženju</td>
		<td align="center" width=100><input type="text" id="312" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Blokiranje bilo kakve uporabe prenošljivog koda</td>
		<td align="center" width=100><input type="text" id="313" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Blokiranje prijema prenošljivog koda</td>
		<td align="center" width=100><input type="text" id="314" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Aktiviranje tehničkih mjera, prema njihovoj dostupnosti na određenom sustavu, za upravljanje prenošljivim kodom</td>
		<td align="center" width=100><input type="text" id="315" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Kontrola sredstava dostupnih za pristup prenošljivom kodu</td>
		<td align="center" width=100><input type="text" id="316" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Kriptografske kontrole za jedinstvenu provjeru vjerodostojnosti prenošljivog koda</td>
		<td align="center" width=100><input type="text" id="317" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>10.5.</td><td colspan=4 align=center>Sigurnosne kopije</td></tr>
<tr class="alt"><td>10.5.1.</td><td>Sigurnosne kopije informacija</td><td>Potrebno je redovito izrađivati i ispitivati sigurnosne kopije informacija i softvera u skladu s dogovorenom politikom za izradu sigurnosnih kopija.</td>
		<td align="center" width=100><input type="text" id="318" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=8 align="center" colspan=2 width=560>Potrebno je osigurati odgovarajuću opremu za izradu sigurnosnih kopija tako da se nakon uništenja ili neispravnosti medija sve presudne informacije i softver mogu obnoviti. Za izradu sigurnosnih kopija informacija potrebno je razmotriti sljedeće:</td>
    <td>Potrebno je odrediti odgovarajuću razinu sigurnosnih kopija informacija</td>
		<td align="center" width=100><input type="text" id="319" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je izraditi točne i cjelovite popise sigurnosnih kopija i dokumentirati procedure za njihovo obnavljanje</td>
		<td align="center" width=100><input type="text" id="320" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Opseg (primjerice cjelovite sigurnosne kopije ili sigurnosne kopije razlika) i učestalost izrade sigurnosnih kopija ovisi o poslovnim zahtjevima organizacije, sigurnosnim zahtjevima informacija o kojima je riječ i presudnosti informacija za kontinuitet poslovanja organizacije</td>
		<td align="center" width=100><input type="text" id="321" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Sigurnosne kopije je potrebno pohraniti na udaljenoj lokaciji, na dovoljnoj udaljenosti tako da se izbjegne bilo kakvo oštećenje u slučaju nesreće na glavnoj lokaciji</td>
		<td align="center" width=100><input type="text" id="322" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Sigurnosne kopije informacija trebaju dobiti odgovarajuću razinu fizičke zaštite i zaštite u okruženju (pogledajte poglavlje 9) u skladu sa standardima primijenjenim na glavnoj lokaciji, kontrole koje se primjenjuju na medijima na glavnoj lokaciji trebaju se proširiti i na lokaciju na kojoj su pohranjene sigurnosne kopije</td>
		<td align="center" width=100><input type="text" id="323" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je redovito provjeravati medije sigurnosnih kopija kako bi se osigurala njihova pouzdanost u slučaju nužde</td>
		<td align="center" width=100><input type="text" id="324" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je redovito provjeravati i ispitivati procedure obnavljanja kako bi se osigurala njihova učinkovitost i mogućnost potpunog dovršenja u vremenu određenom u operativnim procedurama za oporavak</td>
		<td align="center" width=100><input type="text" id="325" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>U slučajevima kad je važna povjerljivost, sigurnosne kopije treba zaštititi pomoću kriptiranja</td>
		<td align="center" width=100><input type="text" id="326" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>10.6.</td><td colspan=4 align=center>Upravljanje sigurnošću mreže</td></tr>
<tr class="alt"><td>10.6.1.</td><td>Kontrole mreže</td><td>Potrebno je odgovarajuće upravljanje mrežama i njihovu kontrolu radi zaštite od prijetnji i održavanje sigurnosti sustava i aplikacija koje koriste mrežu, uključujući i prijelazne informacije.</td>
		<td align="center" width=100><input type="text" id="327" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=5 align="center" colspan=2 width=560>Rukovoditelji mreža trebaju primijeniti kontrole radi sigurnosti informacija u mrežama i zaštite povezanih usluga od neovlaštenog pristupa. Posebice je potrebno razmotriti sljedeće:</td>
    <td>Ukoliko je to primjereno, operativnu odgovornost za mreže treba odvojiti od odgovornosti za funkcioniranje računala (pogledajte 10.1.3)</td>
		<td align="center" width=100><input type="text" id="328" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je odrediti odgovornosti i procedure za upravljanje udaljenom opremom, uključujući opremu na području korisnika</td>
		<td align="center" width=100><input type="text" id="329" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potrebno je odrediti posebne kontrole za zaštitu povjerljivosti i cjelovitosti podataka koji se prenose preko javnih mreža ili bežičnih mreža kao i za zaštitu priključenih sustava i aplikacija (pogledajte 11.4 i 12.3); također mogu biti potrebne posebne kontrole za održavanje dostupnosti mrežnih usluga i povezanih računala</td>
		<td align="center" width=100><input type="text" id="330" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je primijeniti odgovarajuće prijavljivanje na mrežu i praćenje kako bi se omogućilo vođenja zapisa o akcijama od sigurnosnog značaja</td>
		<td align="center" width=100><input type="text" id="331" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je uskladiti aktivnosti upravljanja radi optimiranja usluge organizaciji i osiguranja dosljedne primjene kontrola u svim segmentima infrastrukture za obradu informacija</td>
		<td align="center" width=100><input type="text" id="332" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.6.2.</td><td>Sigurnost mrežnih usluga</td><td>Potrebno je odrediti sigurnosne značajke, razine usluge i upravljačke zahtjeve za sve mrežne usluge i uključiti ih u sporazume o mrežnim uslugama, bez obzira da li se ove usluge pružaju unutar organizacije ili se povjeravaju vanjskim izvršiteljima.</td>
		<td align="center" width=100><input type="text" id="333" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=560>Sigurnosne značajke mrežnih usluga mogu biti:</td>
    <td>Tehnologija primijenjena za sigurnost mrežnih usluga kao što su provjere vjerodostojnosti, kriptiranje i kontrole mrežnog povezivanja</td>
		<td align="center" width=100><input type="text" id="334" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebni tehnički parametri za sigurno povezivanje s mrežnim uslugama u skladu s sigurnosnim pravilima i pravilima mrežnog povezivanja</td>
		<td align="center" width=100><input type="text" id="335" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Procedure za uporabu mrežne usluge radi ograničavanja pristupa mrežnim uslugama ili aplikacijama, ako je potrebno</td>
		<td align="center" width=100><input type="text" id="336" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>10.7.</td><td colspan=4 align=center>Rukovanje medijima</td></tr>
<tr class="alt"><td>10.7.1.</td><td>Upravljanje uklonjivim medijima</td><td>Trebaju postojati procedure za upravljanje uklonjivim medijima.</td>
		<td align="center" width=100><input type="text" id="337" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=6 align="center" colspan=2 width=560>Potrebno je razmotriti sljedeće smjernice za upravljanje uklonjivim medijima:</td>
    <td>Ako više nije potreban, sadržaj bilo kojeg uklonjivog medija koji se trajno iznosi iz organizacije treba obraditi tako da se ne može obnoviti</td>
		<td align="center" width=100><input type="text" id="338" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Tamo gdje je potrebno i pogodno, potrebno je provjeriti vjerodostojnost za medij koji se trajno iznosi iz organizacije i zabilježiti takva uklanjanja radi održavanja kontrole knjiženja</td>
		<td align="center" width=100><input type="text" id="339" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Sve medije treba pohraniti u sigurnom okruženju u skladu s uputama proizvođača</td>
		<td align="center" width=100><input type="text" id="340" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Informacije pohranjene na medijima koje trebaju biti dostupne duže vrijeme od vijeka trajanja medija (u skladu s podacima proizvođača) trebaju biti pohranjene na drugo mjesto kako bi se spriječio gubitak informacija uslijed propadanja medija</td>
		<td align="center" width=100><input type="text" id="341" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je razmotriti evidentiranje uklonjivih medija radi smanjenja mogućnosti gubitka podataka</td>
		<td align="center" width=100><input type="text" id="342" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Uklonjivi čitači medija trebaju biti omogućeni samo kad postoji poslovni razlog za to</td>
		<td align="center" width=100><input type="text" id="343" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.7.2.</td><td>Odbacivanje medija</td><td>Kad više nisu potrebni, medije je potrebno odbaciti na siguran i bezopasan način uz primjenu formalnih procedura.</td>
		<td align="center" width=100><input type="text" id="344" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=560>Formalne procedure za sigurno odbacivanje medija trebaju smanjiti opasnost od mogućeg pristupa osjetljivim informacijama od strane neovlaštenih osoba. Procedure za sigurno odbacivanje medija koji sadrže osjetljive informacije trebaju biti proporcionalne osjetljivosti tih informacija. Potrebno je razmotriti sljedeće:</td>
    <td>Medije koji sadrže osjetljive informacije treba pohraniti i odbaciti na siguran i bezopasan način, primjerice spaljivanjem, kidanjem ili brisanjem podataka pomoću druge aplikacije unutar organizacije</td>
		<td align="center" width=100><input type="text" id="345" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je odrediti procedure za odabir medija koji zahtijevaju sigurno odbacivanje</td>
		<td align="center" width=100><input type="text" id="346" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Može biti jednostavnije odrediti da se svi mediji trebaju prikupiti i odbaciti na siguran način, umjesto pokušaja odvajanja osjetljivih medija</td>
		<td align="center" width=100><input type="text" id="347" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Mnoge organizacije nude usluge prikupljanja i odbacivanja papira, opreme i medija; potrebno je obratiti pozornost pri odabiru pogodnog ugovornog partnera s odgovarajućim kontrolama i iskustvom</td>
		<td align="center" width=100><input type="text" id="348" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ako je moguće, odbacivanje osjetljivih medija treba evidentirati radi održavanja kontrole knjiženja</td>
		<td align="center" width=100><input type="text" id="349" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.7.3.</td><td>Procedure rukovanja informacijama</td><td>Potrebno je definirati procedure za rukovanje informacijama i njihovo pohranjivanje radi zaštite od neovlaštenog otkrivanja ili zloporabe.</td>
		<td align="center" width=100><input type="text" id="350" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=9 align="center" colspan=2 width=560>Potrebno je odrediti procedure za rukovanje, obradu, pohranjivanje i prijenos informacija u skladu s njihovom klasifikacijom (pogledajte 7.2). Potrebno je razmotriti sljedeće:</td>
    <td>Rukovanje i označavanje svih medija prema dodijeljenoj klasifikacijskoj razini</td>
		<td align="center" width=100><input type="text" id="351" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ograničenja pristupa radi sprječavanja pristupa od strane neovlaštenih osoba</td>
		<td align="center" width=100><input type="text" id="352" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Održavanje formalnih zapisa o ovlaštenim primateljima podataka</td>
		<td align="center" width=100><input type="text" id="353" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Osiguranje cjelovitosti ulaznih podataka, ispravno dovršenje obrade i primjene vrednovanja izlaza</td>
		<td align="center" width=100><input type="text" id="354" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Zaštita podataka u redu čekanja na izlaz do razine koja odgovara njihovoj osjetljivosti</td>
		<td align="center" width=100><input type="text" id="355" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Pohranjivanje medija u skladu s uputama proizvođača</td>
		<td align="center" width=100><input type="text" id="356" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Održavanje rasprostranjenosti podataka na najmanjoj mogućoj razini</td>
		<td align="center" width=100><input type="text" id="357" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Jasno označavanje svih kopija medija prema kojima se ovlašteni primatelji mogu ravnati</td>
		<td align="center" width=100><input type="text" id="358" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Provjera popisa raspodjele i popisa ovlaštenih primatelja u redovitim vremenskim razmacima</td>
		<td align="center" width=100><input type="text" id="359" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.7.4.</td><td>Sigurnost dokumentacije sustava</td><td>Potrebno je zaštititi dokumentaciju sustava od neovlaštenog pristupa.</td>
		<td align="center" width=100><input type="text" id="360" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=560>Za osiguranje dokumentacije sustava potrebno je razmotriti sljedeće:</td>
    <td>Dokumentaciju sustava treba pohraniti na siguran način</td>
		<td align="center" width=100><input type="text" id="361" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Popis pristupa dokumentaciji sustava treba svesti na najmanju moguću mjeru uz ovlaštenje vlasnika aplikacije</td>
		<td align="center" width=100><input type="text" id="362" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Dokumentacija sustava koja se nalazi na javnoj mreži, ili koja se isporučuje putem javne mreže, zahtijeva odgovarajuću zaštitu</td>
		<td align="center" width=100><input type="text" id="363" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="aa"><td>10.8.</td><td colspan=4 align=center>Razmjena informacija</td></tr>
<tr class="alt"><td>10.8.1.</td><td>Politike i procedure za razmjenu informacija</td><td>Potrebno je odrediti formalne politike, procedure i kontrole za zaštitu razmjene informacija upotrebom svih vrsta komunikacijske opreme.</td>
		<td align="center" width=100><input type="text" id="364" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=15 align="center" colspan=2 width=560>Procedure i kontrole koje je potrebno slijediti pri uporabi elektroničke komunikacijske opreme za razmjenu informacija trebaju uzeti u obzir sljedeće:</td>
    <td>Procedure za zaštitu razmijenjenih informacija od presretanja, kopiranja, promjene, pogrešnog usmjeravanja i uništenja</td>
		<td align="center" width=100><input type="text" id="365" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procedure za otkrivanje i zaštitu od zloćudnog koda koji se može prenositi putem uporabe elektroničkih komunikacija (pogledajte poglavlje 10.4.1)</td>
		<td align="center" width=100><input type="text" id="366" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Procedure za zaštitu osjetljivih elektroničkih informacija koje se prenose u obliku dodatka elektroničkoj pošti</td>
		<td align="center" width=100><input type="text" id="367" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Politiku ili smjernice koje ističu prihvatljive načine uporabe opreme za elektroničku komunikaciju (pogledajte 7.1.3)</td>
		<td align="center" width=100><input type="text" id="368" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Procedure za uporabu bežičnih komunikacija, uzimajući u obzir uključene rizike</td>
		<td align="center" width=100><input type="text" id="369" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovornosti zaposlenika, ugovornog suradnika i bilo kojeg drugog korisnika koji ne trebaju ugrožavati organizaciju, primjerice klevetom, uznemirivanjem, oponašanjem, prosljeđivanjem lančanih poruka, neovlaštenom kupnjom...</td>
		<td align="center" width=100><input type="text" id="370" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Uporabu kriptografskih tehnika, primjerice za zaštitu povjerljivosti, cjelovitosti i vjerodostojnosti informacija (pogledajte poglavlje 12.3)</td>
		<td align="center" width=100><input type="text" id="371" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Smjernice za čuvanje i odbacivanje sve poslovne prepiske, uključujući poruke, u skladu s odgovarajućim nacionalnim i lokalnim zakonskim propisima</td>
		<td align="center" width=100><input type="text" id="372" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Uklanjanje osjetljivih ili ključnih informacija sa opreme za tiskanje, primjerice fotokopirnih aparata, pisača i faksimil aparata, jer bi mogle doći u ruke neovlaštene osobe</td>
		<td align="center" width=100><input type="text" id="373" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Kontrole i ograničenja vezana uz prosljeđivanje poruka, primjerice automatsko prosljeđivanje elektroničke pošte na vanjske adrese</td>
		<td align="center" width=100><input type="text" id="374" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Podsjećanje osoblja da su potrebne odgovarajuće mjere opreza, kao stoje ne otkrivanje osjetljivih informacija koje bi netko mogao ćuti ili presresti tijekom telefonskog razgovora, primjerice:<br>
1. osobe u neposrednoj blizini, posebice pri uporabi mobilnih telefona;<br>
2. ozvučenje i drugi oblici prisluškivanja putem fizičkog pristupa telefonskoj slušalici ili telefonskoj liniji ili uz uporabu prijemnika s mogućnošću pretraživanja komunikacijskih kanala;<br>
3. osobe na prijemnoj strani</td>
		<td align="center" width=100><input type="text" id="375" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Uklanjanje poruka koje sadrže osjetljive informacije na telefonskim sekretaricama budući da ih mogu reproducirati neovlaštene osobe, informacija pohranjenih na komunalnim sustavima ili neispravno pohranjenih informacija uslijed biranja pogrešnog broja</td>
		<td align="center" width=100><input type="text" id="376" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Podsjećanje osoblja na probleme pri uporabi faksimil aparata, odnosno:<br>
1. neovlašteni pristup memoriji pohranjenih poruka koja omogućuje obnavljanje poruke;<br>
2. namjernog ili slučajnog programiranja aparata za slanje poruka na određene brojeve;<br>
3. slanje dokumenata i poruka na krive brojeve uslijed biranja pogrešnog broja ili uporabe krivog pohranjenog broja</td>
		<td align="center" width=100><input type="text" id="377" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Podsjećanje osoblja da ne zapisuje demografske podatke, kao što su e-mail adrese ili ostale osobne podatke u bilo kojem softveru radi sprječavanja njihovog prikupljanja za neovlaštenu uporabu</td>
		<td align="center" width=100><input type="text" id="378" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Podsjećanje osoblja da moderni faksimil i fotokopirni aparati sadrže memoriju u koju pohranjuju stranice u slučaju problema s papirom ili prijenosom, a nakon uklanjanja problema ove stranice se mogu tiskati</td>
		<td align="center" width=100><input type="text" id="379" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.8.2.</td><td>Sporazumi o razmjeni</td><td>Potrebno je utvrditi sporazume za razmjenu informacija i softvera između organizacije t vanjskih strana.</td>
		<td align="center" width=100><input type="text" id="380" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=11 align="center" colspan=2 width=560>Sporazumi o razmjeni trebaju razmotriti sljedeće sigurnosne uvjete:</td>
    <td>Odgovornosti uprave za kontrolu i prijavljivanje prijenosa, otpreme i prijema</td>
		<td align="center" width=100><input type="text" id="381" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procedure za priopćenje pošiljatelju o prijenosu, otpremi i prijemu</td>
		<td align="center" width=100><input type="text" id="382" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Procedure koje osiguravaju mogućnost slijeđenja i ne-odbijanje</td>
		<td align="center" width=100><input type="text" id="383" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Minimalne tehničke standarde za pakiranje i prijenos</td>
		<td align="center" width=100><input type="text" id="384" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Sporazume o polaganju sredstava do ispunjenja uvjeta</td>
		<td align="center" width=100><input type="text" id="385" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Standarde za prepoznavanje dostavljača</td>
		<td align="center" width=100><input type="text" id="386" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovornosti i obveze u slučaju sigurnosnih incidenata, kao stoje gubitak podataka</td>
		<td align="center" width=100><input type="text" id="387" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Uporabu dogovorenog sustava označavanja za osjetljive ili ključne informacije, koji osigurava trenutačno razumijevanje značenja oznaka kao i osiguranje odgovarajuće zaštite informacija</td>
		<td align="center" width=100><input type="text" id="388" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Vlasništvo i odgovornosti za zaštitu podataka, autorska prava, usklađivanje licenci za softver kao i ostala pitanja (pogledajte 15.1.2 i 15.1.4)</td>
		<td align="center" width=100><input type="text" id="389" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Tehničke standarde za zapisivanje i čitanje informacija i softvera</td>
		<td align="center" width=100><input type="text" id="390" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Bilo koje posebne kontrole potrebne za zaštitu osjetljivih informacija kao što su kriptografski ključevi (pogledajte 12.3)</td>
		<td align="center" width=100><input type="text" id="391" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.8.3.</td><td>Prijevoz fizičkih medija</td><td>Mediji koji sadrže informacije trebaju biti zaštićeni od neovlaštenog pristupa, zloporabe ili oštećenja tijekom prijevoza izvan fizičkih granica organizacije.</td>
		<td align="center" width=100><input type="text" id="392" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=560>Za zaštitu medija s informacijama tijekom prijevoza između dvije lokacije potrebno je razmotriti sljedeće smjernice:</td>
    <td>Potrebno je koristiti pouzdani prijevoz ili dostavljače</td>
		<td align="center" width=100><input type="text" id="393" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Popis ovlaštenih dostavljača treba dogovoriti s upravom</td>
		<td align="center" width=100><input type="text" id="394" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potrebno je razviti procedure za provjeru identiteta dostavljača</td>
		<td align="center" width=100><input type="text" id="395" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Pakiranje treba biti dovoljno za zaštitu sadržaja od mogućnosti bilo kakvog fizičkog oštećenja uslijed prijevoza i u skladu s podacima proizvođača (primjerice za softver), kao što je zaštita od vanjskih uvjeta koji mogu smanjiti učinkovitost obnavljanja sadržaja medija uslijed izlaganja utjecaju topline, vlage ili elektromagnetskog polja</td>
		<td align="center" width=100><input type="text" id="396" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je usvojiti kontrole, ako je potrebno, za zaštitu osjetljivih informacija od neovlaštenog otkrivanja ili promjene, primjerice:<br>
1. uporaba ormarića s bravom;<br>
2. ručna dostava;<br>
3. očigledno zaštićeno pakiranje (koje otkriva svaki pokušaj neovlaštenog otvaranja);<br>
4. u iznimnim slučajevima, podjela na više od jedne pošiljke i otprema različitim putovima</td>
		<td align="center" width=100><input type="text" id="397" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.8.4.</td><td>Elektroničke poruke</td><td>Potrebno je na odgovarajući način zaštititi informacije sadržane u elektroničkim porukama.</td>
		<td align="center" width=100><input type="text" id="398" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=6 align="center" colspan=2 width=560>Pri sagledavanju sigurnosti elektroničkih poruka treba voditi računa o sljedećem:</td>
    <td>Zaštita poruka od neovlaštenog pristupa, promjene ili uskraćivanja usluge</td>
		<td align="center" width=100><input type="text" id="399" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Osiguranje ispravnog adresiranja i prijenosa poruka</td>
		<td align="center" width=100><input type="text" id="400" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Općenita pouzdanost i dostupnost usluge</td>
		<td align="center" width=100><input type="text" id="401" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Zakonske propise, primjerice zahtjeve u vezi elektroničkih potpisa</td>
		<td align="center" width=100><input type="text" id="402" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Pribavljanje odobrenja prije uporabe vanjskih javnih usluga kao što su neposredne poruke (instant messaging) ili razmjena datoteka (file sharing)</td>
		<td align="center" width=100><input type="text" id="403" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Jače razine provjere vjerodostojnosti pri kontroli pristupa sa javno dostupnih mreža</td>
		<td align="center" width=100><input type="text" id="404" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.8.5.</td><td>Poslovni informacijski sustavi</td><td>Potrebno je razviti i primijeniti politike i procedure za zaštitu informacija koje se odnose na međusobno povezivanje poslovnih informacijskih sustava.</td>
		<td align="center" width=100><input type="text" id="405" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=10 align="center" colspan=2 width=560>Razmatranja sigurnosti i poslovnog značenja međusobnog povezivanja takve opreme trebaju sadržavati:</td>
    <td>Poznate ranjivosti u administrativnim i računovodstvenim sustavima u kojima se informacije razmjenjuju između različitih dijelova organizacije</td>
		<td align="center" width=100><input type="text" id="406" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ranjivosti informacija u poslovnim komunikacijskim sustavima, primjerice snimanje telefonskih razgovora ili konferencijskih razgovora, povjerljivost razgovora, pohranjivanje faksimil poruka, otvaranje pošte, raspodjela pošte</td>
		<td align="center" width=100><input type="text" id="407" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Politika i odgovarajuće kontrole za upravljanje razmjenom informacija</td>
		<td align="center" width=100><input type="text" id="408" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Isključivanje kategorija osjetljivih informacija i klasificiranih dokumenata u slučaju kad sustav ne osigurava odgovarajuću razinu zaštite (pogledajte 7.2)</td>
		<td align="center" width=100><input type="text" id="409" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ograničavanje pristupa dnevničkim zapisima odabranih pojedinaca, primjerice osoblja koje radi na osjetljivim projektima</td>
		<td align="center" width=100><input type="text" id="410" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Kategorije osoblja, ugovornih suradnika ili poslovnih partnera kojima je dozvoljena uporaba sustava i lokacije sa kojih mogu pristupiti sustavu (pogledajte 6.2 i 6.3)</td>
		<td align="center" width=100><input type="text" id="411" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ograničavanje određene opreme određenoj kategoriji korisnika</td>
		<td align="center" width=100><input type="text" id="412" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Prepoznavanje statusa korisnika, primjerice zaposlenika organizacije ili ugovornih suradnika u adresarima kao pogodnost ostalim korisnicima</td>
		<td align="center" width=100><input type="text" id="413" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Čuvanje i sigurnosne kopije informacija koje postoje na sustavu (pogledajte 10.5.1)</td>
		<td align="center" width=100><input type="text" id="414" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Zahtjevi i aktivnosti u slučaju neuspjeha (pogledajte 14)</td>
		<td align="center" width=100><input type="text" id="415" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>10.9.</td><td colspan=4 align=center>Usluge elektroničke trgovine</td></tr>
<tr class="alt"><td>10.9.1.</td><td>Elektronička trgovina</td><td>Potrebno je zaštititi informacije uključene u elektroničku trgovinu preko javnih mreža od prijevara, osporavanja ugovora, neovlaštenog otkrivanja i promjene.</td>
		<td align="center" width=100><input type="text" id="416" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=13 align="center" colspan=2 width=560>Sigurnosna pitanja elektroničke trgovine trebaju sadržavati sljedeće:</td>
    <td>Razinu povjerenja koju zahtjeva svaka strana u međusobnom prepoznavanju, primjerice putem provjere vjerodostojnosti</td>
		<td align="center" width=100><input type="text" id="417" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procese ovlaštenja vezane uz to tko može odrediti cijene, izdati ili potpisati ključne prodajne dokumente</td>
		<td align="center" width=100><input type="text" id="418" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Osiguranje potpune informiranosti partnera o njihovim ovlaštenjima</td>
		<td align="center" width=100><input type="text" id="419" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Određivanje i sukladnost sa zahtjevima za povjerljivošću, cjelovitošću, dokazom isporuke i prijema ključnih dokumenata te nepovredivost ugovora, primjerice vezanih uz procese ponude i ugovaranja</td>
		<td align="center" width=100><input type="text" id="420" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebnu razinu povjerenja u vjerodostojnost istaknutih cjenika</td>
		<td align="center" width=100><input type="text" id="421" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Povjerljivost osjetljivih podataka ili informacija</td>
		<td align="center" width=100><input type="text" id="422" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Povjerljivost i vjerodostojnost narudžbe, informacija o plaćanju, pojedinosti o adresi isporuke i potvrdu prijema</td>
		<td align="center" width=100><input type="text" id="423" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovarajući stupanj provjere informacija o plaćanju od strane kupca</td>
		<td align="center" width=100><input type="text" id="424" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Odabir najpovoljnijeg oblika plaćanja radi zaštite od prijevare</td>
		<td align="center" width=100><input type="text" id="425" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebnu razinu zaštite za održavanje povjerljivosti i vjerodostojnosti informacija o naručivanju</td>
		<td align="center" width=100><input type="text" id="426" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Izbjegavanje gubitka ili umnožavanja informacija o transakciji</td>
		<td align="center" width=100><input type="text" id="427" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovornost za bilo kakve lažne transakcije</td>
		<td align="center" width=100><input type="text" id="428" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Zahtjeve police osiguranja</td>
		<td align="center" width=100><input type="text" id="429" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.9.2.</td><td>On-line transakcije</td><td>Potrebno je zaštititi informacije u on-line transakcijama radi sprječavanja nekompletnog prijenosa, pogrešnog usmjeravanja, neovlaštene promjene informacija, neovlaštenog otkrivanja, neovlaštenog umnožavanja ili reprodukcije.</td>
		<td align="center" width=100><input type="text" id="430" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=6 align="center" colspan=2 width=560>Sigurnosna razmatranja on-line transakcija trebaju sadržavati sljedeće:</td>
    <td>Uporabu elektroničkih potpisa svake strane uključene u transakciju</td>
		<td align="center" width=100><input type="text" id="431" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Sva gledišta transakcije koja trebaju osigurati:<br>
1. valjane i provjerene korisničke podatke svih strana;<br>
2. povjerljivost transakcije;<br>
3. očuvanje privatnost svih uključenih strana</td>
		<td align="center" width=100><input type="text" id="432" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Kriptiranje komunikacijskih putova između svih uključenih strana</td>
		<td align="center" width=100><input type="text" id="433" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Sigurnost protokola koji se koriste u komunikaciji između uključenih strana</td>
		<td align="center" width=100><input type="text" id="434" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Detalji o transakciji trebaju biti pohranjeni izvan javno dostupnog okruženja, primjerice na platformi za pohranjivanje na Intranetu organizacije i ne bi ih trebalo čuvati i pohranjivati na medijima izravno dostupnim preko Interneta</td>
		<td align="center" width=100><input type="text" id="435" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Tamo gdje se koristi pouzdano nadležno tijelo (primjerice radi izdavanja i održavanja digitalnih potpisa i/ili digitalnih potvrda), sigurnost je ugrađena u cijeli proces upravljanja potvrdom/potpisom</td>
		<td align="center" width=100><input type="text" id="436" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.9.3.</td><td>Javno dostupne informacije</td><td>Potrebno je zaštititi cjelovitost informacija dostupnih na javno dostupnom sustavu radi sprječavanja neovlaštene promjene.</td>
		<td align="center" width=100><input type="text" id="437" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Softver, podaci i ostale informacije koje zahtijevaju visoki stupanj cjelovitosti i koje su dostupne na javno dostupnom sustavu trebaju biti zaštićeni odgovarajućim mehanizmima, primjerice digitalnim potpisima (pogledajte 12.3). Prije nego što informacije postanu dostupne potrebno je provjeriti moguće slabosti i zastoje javno dostupnog sustava</td>
		<td align="center" width=100><input type="text" id="438" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Prije nego što informacije postanu javno dostupne potreban je formalni proces odobrenja. Osim toga, potrebno je provjeriti i odobriti sve ulaze u sustav izvana</td>
		<td align="center" width=100><input type="text" id="439" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Elektronički izdavački sustavi, posebice oni koji dozvoljavaju povratne informacije i izravan unos informacija trebaju biti pažljivo kontrolirani kako bi se osiguralo sljedeće:<br>
1. informacije su prikupljene u skladu sa zakonskim propisima o zaštiti podataka (pogledajte 15.1.4);<br>
2. informacije koje se unose u i koje obrađuje izdavački sustav će se točno i u potpunosti obraditi u određenom vremenu;<br>
3. osjetljive informacije će biti zaštićene tijekom skupljanja, obrade i pohrane;<br>
4. pristup izdavačkom sustavu ne dozvoljava nenamjeran pristup mrežama na koje je sustav spojen</td>
		<td align="center" width=100><input type="text" id="440" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>10.10.</td><td colspan=4 align=center>Nadzor</td></tr>
<tr class="alt"><td>10.10.1.</td><td>Revizijski zapisi</td><td>Potrebno je voditi i određeno dogovoreno vrijeme čuvati revizijske zapise korisničkih aktivnosti, izuzetaka i sigurnosnih događaja radi buduće istrage i nadzora kontrole pristupa.</td>
		<td align="center" width=100><input type="text" id="441" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=12 align="center" colspan=2 width=560>Revizijski zapisi trebaju sadržavati, ako je potrebno:</td>
    <td>Identifikacije korisnika</td>
		<td align="center" width=100><input type="text" id="442" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Datume, vremena i detalje o ključnim događajima, primjerice prijavljivanje i odjavljivanje</td>
		<td align="center" width=100><input type="text" id="443" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Identitet ili lokaciju terminala, ako je moguće</td>
		<td align="center" width=100><input type="text" id="444" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Zapise uspješnih i odbijenih pokušaja pristupa sustavu</td>
		<td align="center" width=100><input type="text" id="445" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Zapise uspješnih i odbijenih pokušaja pristupa podacima i ostalim sredstvima</td>
		<td align="center" width=100><input type="text" id="446" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Promjene konfiguracije sustava</td>
		<td align="center" width=100><input type="text" id="447" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Uporabu povlastica</td>
		<td align="center" width=100><input type="text" id="448" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Uporaba uslužnih programa i aplikacija sustava</td>
		<td align="center" width=100><input type="text" id="449" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Datoteke kojima su korisnici pristupali i vrstu pristupa</td>
		<td align="center" width=100><input type="text" id="450" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Mrežne adrese i protokole</td>
		<td align="center" width=100><input type="text" id="451" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Alarme koje je uzrokovao sustav kontrole pristupa</td>
		<td align="center" width=100><input type="text" id="452" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Aktiviranje i deaktiviranje sustava zaštite, kao što su antivirusni sustavi i sustavi za otkrivanje upada</td>
		<td align="center" width=100><input type="text" id="453" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.10.2.</td><td>Nadzor uporabe sustava</td><td>Potrebno je odrediti procedure za nadzor uporabe opreme za obradu informacija i redovito provjeravati rezultate nadzornih aktivnosti.</td>
		<td align="center" width=100><input type="text" id="454" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=560>Pomoću procjene rizika potrebno je odrediti razinu potrebnog nadzora pojedine opreme. Organizacija treba poštivati sve odgovarajuće zakonske propise koje se odnose na aktivnosti nadzora. Područja koja treba razmotriti uključuju:</td>
    <td>Ovlašteni pristup, uključujući detalje kao Što su;<br>
1. identifikacija korisnika;<br>
2. datum i vrijeme ključnih događaja;<br>
3. vrste događaja;<br>
4. datoteke kojima su korisnici pristupali;<br>
5. programi/uslužni programi koji su korisnici koristili</td>
		<td align="center" width=100><input type="text" id="455" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Sve povlaštene postupke, kao što su:<br>
1. uporaba povlaštenih korisničkih računa, primjerice supervisor, root, administrator;<br>
2. pokretanje i zaustavljanje sustava;<br>
3. priključe nje/od spajanje ulazno-izlaznih uređaja</td>
		<td align="center" width=100><input type="text" id="456" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Pokušaje neovlaštenog pristupa, kao što su:<br>
1. neuspjele ili odbijene akcije korisnika;<br>
2. neuspjele ili odbijene akcije koje su uključivale podatke i ostala sredstva;<br>
3. povrede politike pristupa i obavijesti za mrežne pristupnike i vatrozide;<br>
4. upozorenja sustava za otkrivanje upada</td>
		<td align="center" width=100><input type="text" id="457" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Upozorenja ili zastoje sustava, kao što su:<br>
1. upozorenja ili poruke konzola;<br>
2. izuzeci zapisa sustava;<br>
3. alarmi upravljanja mrežom;<br>
4. alarmi sustava za kontrolu pristupa;</td>
		<td align="center" width=100><input type="text" id="458" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Promjene ili pokušaje promjena sigurnosnih podešavanja i kontrola sustava</td>
		<td align="center" width=100><input type="text" id="459" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=560>Koliko često će se provjeravati rezultati nadzornih aktivnosti ovisi o uključenom riziku. Čimbenici rizika koje treba razmotriti uključuju:</td>
    <td>Presudni značaj aplikacijskih aktivnosti</td>
		<td align="center" width=100><input type="text" id="460" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Vrijednost, osjetljivost i presudni značaj uključenih informacija</td>
		<td align="center" width=100><input type="text" id="461" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Prošla iskustva s upadom i zloporabom sustava i koliko često se zlorabe ranjivosti</td>
		<td align="center" width=100><input type="text" id="462" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Opseg međusobnog povezivanja sustava (posebice javnih mreža)</td>
		<td align="center" width=100><input type="text" id="463" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Deaktiviranje opreme za vođenje zapisa</td>
		<td align="center" width=100><input type="text" id="464" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.10.3.</td><td>Zaštita informacija zapisa</td><td>Oprema za vođenje zapisa i informacije zapisa treba zaštititi od neovlaštenog pristupa.</td>
		<td align="center" width=100><input type="text" id="465" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=560>Kontrole trebaju zaštititi zapise od neovlaštenih promjena i operativnih problema s opremom za vođenje zapisa uključujući:</td>
    <td>Promjene vrste poruka u zapisima</td>
		<td align="center" width=100><input type="text" id="466" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Uređivanje ili brisanje datoteka zapisa</td>
		<td align="center" width=100><input type="text" id="467" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Premašivanje kapaciteta medija na kojem se nalazi datoteka zapisa što može dovesti do neispravnosti u zapisima događaja ili prepisivanja preko prethodnih zapisa</td>
		<td align="center" width=100><input type="text" id="468" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="alt"><td>10.10.4.</td><td>Zapisi administratora i operatera</td><td>Potrebno je voditi zapise aktivnosti administratora i operatera sustava.</td>
		<td align="center" width=100><input type="text" id="469" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=4 align="center" colspan=2 width=560>Zapisi trebaju sadržavati:</td>
    <td>Vrijeme događaja (uspješnog ili neuspješnog)</td>
		<td align="center" width=100><input type="text" id="470" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Informacije o događaju (primjerice korištene datoteke) ili zastoju (primjerice pojava pogreške i poduzeta korektivna akcija)</td>
		<td align="center" width=100><input type="text" id="471" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Koji korisnički račun i koji administrator ili operater je bio uključen</td>
		<td align="center" width=100><input type="text" id="472" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Koji procesi su bili uključeni</td>
		<td align="center" width=100><input type="text" id="473" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.10.5.</td><td>Zapisi o zastojima</td><td>Potrebno je bilježiti i analizirati zastoje i poduzimati odgovarajuće akcije.</td>
		<td align="center" width=100><input type="text" id="474" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=560>Potrebno je bilježiti zastoje koje prijavljuju korisnici ili sistemski programi u vezi problema s obradom informacija ili komunikacijskim sustavima. Trebaju postojati jasna pravila za uporabu prijavljenih zastoja uključujući:</td>
    <td>Provjera zapisa o zastojima radi utvrđivanja njihovog ispravnog rješavanja</td>
		<td align="center" width=100><input type="text" id="475" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Provjera korektivnih mjera radi utvrđivanja da kontrole nisu ugrožene i da su poduzete akcije u potpunosti ovlaštene</td>
		<td align="center" width=100><input type="text" id="476" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je provjeriti da je omogućeno zapisivanje grešaka, ukoliko je takva funkcija sustava dostupna</td>
		<td align="center" width=100><input type="text" id="477" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>10.10.6.</td><td>Sinkronizacija satova</td><td>Potrebno je sinkronizirati satove svih odgovarajućih sustava za obradu informacija unutar organizacijske ili sigurnosne domene pomoću dogovorenog izvora točnog vremena.</td>
		<td align="center" width=100><input type="text" id="478" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=2 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Ako računalo ili komunikacijski uređaj ima ugrađen sat realnog vremena, ovaj sat treba podesiti prema dogovorenom standardu, primjerice UTC (Coordinated Universal Time) ili lokalnom standardnom vremenu. Budući da neki satovi s vremenom postaju netočni, treba postojati procedura koja provjerava točnost i ispravlja značajna odstupanja</td>
		<td align="center" width=100><input type="text" id="479" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ispravna interpretacija formata datuma/vremena je važna zato da bi vremenska oznaka odgovarala stvarnom datumu/vremenu. Potrebno je voditi računa i o lokalnim posebnostima (primjerice ljetnom računanju vremena).</td>
		<td align="center" width=100><input type="text" id="480" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
</table>
<!-- 11111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111111 -->
<br>
<table id="prva" width=75% cellspacing=5 cellpadding=8 cols=2>
<tr><td class="a" colspan=6 align=center>11. Kontrola pristupa</td></tr>
<tr class="aa"><td>11.1.</td><td colspan=4 align=center>Poslovni zahtjevi za kontrolu pristupa</td></tr>
<tr class="alt"><td>11.1.1.</td><td>Politika kontrole pristupa</td><td>Potrebno je odrediti, dokumentirati i provjeriti politiku kontrole pristupa koja se zasniva na poslovnim i sigurnosnim zahtjevima za pristup.</td>
		<td align="center" width=100><input type="text" id="481" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=11 align="center" colspan=2 width=360>Politika treba uključivali sljedeće:</td>
    <td>Sigurnosne zahtjeve pojedinih poslovnih aplikacija</td>
		<td align="center" width=100><input type="text" id="482" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Određivanje svih informacija koje se odnose na poslovne aplikacije i rizike kojima su informacije izložene</td>
		<td align="center" width=100><input type="text" id="483" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Politike pružanja informacija i ovlaštenja, primjerice potreba za poznavanjem načela i sigurnosnih razina i klasifikacije informacija (pogledajte 7.2)</td>
		<td align="center" width=100><input type="text" id="484" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Dosljednost između politike kontrole pristupa i politike klasifikacije informacija različitih sustava i mreža</td>
		<td align="center" width=100><input type="text" id="485" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Odgovarajuće zakonske i ugovorne obveze u vezi zaštite pristupa podacima ili uslugama (pogledajte 15.1)</td>
		<td align="center" width=100><input type="text" id="486" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Standardne profile korisničkog pristupa za uobičajene poslovne funkcije u organizaciji</td>
		<td align="center" width=100><input type="text" id="487" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Upravljanje pravima pristupa u distribuiranim i umreženim okruženjima koje prepoznaje sve dostupne vrste veza</td>
		<td align="center" width=100><input type="text" id="488" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Odvajanje funkcija kontrole pristupa, primjerice zahtjeva za pristup, ovjeravanje zahtjeva, upravljanje zahtjevom</td>
		<td align="center" width=100><input type="text" id="489" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Zahtjeve za formalnim ovjeravanjem zahtjeva za pristup (pogledajte 11.2.1)</td>
		<td align="center" width=100><input type="text" id="490" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Zahtjeve za redovitom provjerom kontrola pristupa (pogledajte 11.2.4)/td>
		<td align="center" width=100><input type="text" id="491" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Ukidanje prava pristupa (pogledajte 8.3.3)</td>
		<td align="center" width=100><input type="text" id="492" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>11.2.</td><td colspan=4 align=center>Upravljanje korisničkim pristupom</td></tr>
<tr class="alt"><td>11.2.1.</td><td>Prijavljivanje korisnika</td><td>Treba postojati formalna procedura prijavljivanja i odjavljivanja korisnika za dozvolu i odbijanje pristupa svim informacijskim sustavima i uslugama.</td>
		<td align="center" width=100><input type="text" id="493" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=10 align="center" colspan=2>Procedura kontrole pristupa za prijavljivanje i odjavljivanje korisnika treba uključivati:</td>
    <td>Uporabu jedinstvenih identifikacija koje omogućuju korisnicima odgovornost i povezanost s njihovim akcijama;  uporaba grupnih identifikacija treba se dozvoliti samo ako je to potrebno zbog poslovnih ili operativnih razloga i potrebno ih je odobriti i dokumentirati</td>
		<td align="center" width=100><input type="text" id="494" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Provjeru da korisnik ima ovlaštenje vlasnika sustava za uporabu informacijskog sustava ili usluge; također može biti potrebno posebno odobrenje prava pristupa od strane uprave</td>
		<td align="center" width=100><input type="text" id="495" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Provjeru da odobrena razina pristupa odgovara poslovnim namjenama (pogledajte 11.1) i daje usklađena sa sigurnosnom politikom organizacije, primjerice da ne ugrožava odvajanje funkcija (pogledajte 10.1.3)</td>
		<td align="center" width=100><input type="text" id="496" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Davanje korisnicima pismene izjave o njihovim pravima pristupa</td>
		<td align="center" width=100><input type="text" id="497" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Zahtjeve da korisnici potpišu izjave da razumiju uvjete pristupa</td>
		<td align="center" width=100><input type="text" id="498" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Osiguranje da davatelji usluga ne odobravaju pristup dok se u potpunosti ne izvedu procedure ovlaštenja</td>
		<td align="center" width=100><input type="text" id="499" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Održavanje formalnog popisa svih korisnika registriranih za uporabu usluge</td>
		<td align="center" width=100><input type="text" id="500" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Trenutno uklanjanje ili blokiranje prava pristupa korisnika koji su promijenili funkciju ili posao ili su otišli iz organizacije</td>
		<td align="center" width=100><input type="text" id="501" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Redovito provjeravanje, uklanjanje i blokiranje suvišnih korisničkih identifikacija i računa (pogledajte 11.2.4)</td>
		<td align="center" width=100><input type="text" id="502" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Osiguranje da se suvišne korisničke identifikacije ne izdaju drugim korisnicima</td>
		<td align="center" width=100><input type="text" id="503" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.2.2.</td><td>Upravljanje povlasticama</td><td>Potrebno je ograničiti i kontrolirati dodjeljivanje i uporabu povlastica.</td>
		<td align="center" width=100><input type="text" id="504" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=6 align="center" colspan=2 width=560>Višekorisnički sustavi koji zahtijevaju zaštitu od neovlaštenog pristupa trebaju koristiti dodjeljivanje povlastica pod kontrolom formalnog procesa ovlaštenja. Potrebno je razmotriti sljedeće korake:</td>
    <td>Povlastice pristupa vezane uz proizvod svakog sustava, primjerice operacijski sustav, sustav upravljanja bazom podataka, i svake aplikacije, te je potrebno odrediti korisnike kojima će se dodijeliti ove povlastice</td>
		<td align="center" width=100><input type="text" id="505" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Povlastice treba dodijeliti korisnicima prema potrebama uporabe i od slučaja do slučaja u skladu sa politikom kontrole pristupa (pogledajte 11.1.1), primjerice minimalni zahtjev za njihovu funkciju samo kad je to potrebno</td>
		<td align="center" width=100><input type="text" id="506" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potrebno je održavati proces ovlaštenja i zapis svih dodijeljenih povlastica. Povlastice ne bi trebalo odobriti sve dok se u potpunosti ne dovrši proces ovlaštenja</td>
		<td align="center" width=100><input type="text" id="507" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je promicati razvoj i uporabu funkcija sustava kako bi se izbjegla potreba za odobravanjem povlastica korisnicima</td>
		<td align="center" width=100><input type="text" id="508" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je promicati razvoj i uporabu programa koji izbjegavaju potrebu za izvođenjem uz uporabu povlastica</td>
		<td align="center" width=100><input type="text" id="509" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Povlastice treba dodijeliti različitim korisničkim identifikacijama od onih koje se koriste u normalnoj poslovnoj uporabi</td>
		<td align="center" width=100><input type="text" id="510" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr class="alt"><td>11.2.3.</td><td>Upravljanje korisničkim zaporkama</td><td>Pomoću formalnog procesa upravljanja potrebno je kontrolirati dodjeljivanje zaporki.</td>
		<td align="center" width=100><input type="text" id="511" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=8 align="center" colspan=2 width=560>Proces treba sadržavati sljedeće zahtjeve:</td>
    <td>Od korisnika se može zahtijevati potpisivanje izjave kojom će čuvati povjerljivost osobnih zaporki i grupnih zaporki samo unutar članova grupe; ova potpisana izjava može se uključiti u načine i uvjete zaposlenja (pogledajte 8.1.3)</td>
		<td align="center" width=100><input type="text" id="512" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Kad se od korisnika zahtijeva održavanje svojih vlastitih zaporki, potrebno im je osigurati početnu sigurnu privremenu zaporku (pogledajte 11.3.1) koju trebaju odmah promijeniti</td>
		<td align="center" width=100><input type="text" id="513" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Određivanje procedura za potvrdu identiteta korisnika prije izdavanja nove, zamjenske ili privremene zaporke</td>
		<td align="center" width=100><input type="text" id="514" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Privremene zaporke treba dati korisnicima na siguran način; potrebno je izbjegavati uporabu trećih strana ili nezaštićenih (čisti tekst) elektroničkih poruka</td>
		<td align="center" width=100><input type="text" id="515" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Privremene zaporke trebaju biti jedinstvene za svakog pojedinca i ne bi se trebale moći pogoditi</td>
		<td align="center" width=100><input type="text" id="516" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Korisnik treba potvrditi prijem zaporki</td>
		<td align="center" width=100><input type="text" id="517" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Zaporke se nikada ne bi trebale pohranjivati na računalnim sustavima u nezaštićenom obliku</td>
		<td align="center" width=100><input type="text" id="518" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Početne zaporke isporučitelja treba promijeniti nakon instalacije sustava ili softvera</td>
		<td align="center" width=100><input type="text" id="519" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.2.4.</td><td>Provjera prava korisničkog pristupa</td><td>Uprava treba redovito provjeravati prava korisničkih pristupa pomoću formalnog procesa.</td>
		<td align="center" width=100><input type="text" id="520" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=5 align="center" colspan=2 width=560>Provjera prava pristupa treba razmotriti sljedeće smjernice:</td>
    <td>Prava korisničkih pristupa treba provjeravati u redovitim vremenskim razmacima, primjerice svakih 6 mjeseci i nakon bilo kakve promjene, kao što je napredovanje, nazadovanje ili prekid zaposlenja (pogledajte 11.2.1)</td>
		<td align="center" width=100><input type="text" id="521" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Prava korisničkih pristupa treba provjeravati i ponovo dodjeljivati kod promjene zaposlenja unutar iste organizacije</td>
		<td align="center" width=100><input type="text" id="522" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Ovlaštenja prava povlaštenih pristupa (pogledajte 11.2.2) potrebno je provjeravati češće, primjerice svaka 3 mjeseca</td>
		<td align="center" width=100><input type="text" id="523" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Dodjeljivanje povlastica treba provjeravati u redovitim vremenskim razmacima radi onemogućavanja stjecanja neovlaštenih povlastica</td>
		<td align="center" width=100><input type="text" id="524" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Promjene povlaštenih računa treba zapisivati radi redovite provjere</td>
		<td align="center" width=100><input type="text" id="525" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="aa"><td>11.3.</td><td colspan=4 align=center>Odgovornosti korisnika</td></tr>
<tr class="alt"><td>11.3.1.</td><td>Uporaba zaporke</td><td>Od korisnika treba zahtijevati pridržavanje dobrih sigurnosnih postupaka pri odabiru i uporabi zaporki.</td>
		<td align="center" width=100><input type="text" id="526" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=9 align="center" colspan=2 width=560>Sve korisnike treba upozoriti na sljedeće:</td>
    <td>Zaporke trebaju ostati povjerljive</td>
		<td align="center" width=100><input type="text" id="527" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Treba izbjegavati zapisivanje (primjerice papir, softverska datoteka ili ručni uređaj) zaporki, osim ako se mogu na siguran način pohraniti i ako je odobren način njihovog pohranjivanja</td>
		<td align="center" width=100><input type="text" id="528" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Ako postoji bilo kakav nagovještaj da je ugrožen sustav ili zaporka, potrebno je promijeniti zaporku</td>
		<td align="center" width=100><input type="text" id="529" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Treba odabrati kvalitetne zaporke najmanje dovoljne dužine prema sljedećim kriterijima:<br>
1. mogu se lako zapamtiti;<br>
2. nisu zasnovane na nečem što netko može lako pogoditi ili pronaći u osobnim podacima korisnika, kao što su imena, telefonski brojevi, datumi  rođenja...<br>
3. nisu osjetljive na upade koji koriste sustav rječnika (odnosno, ne sastoje se od riječi iz rječnika);<br>
4. ne sadržavaju samo niz jednakih znamenaka ili samo niz jednakih slova</td>
		<td align="center" width=100><input type="text" id="530" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Zaporke treba mijenjati u redovitim vremenskim razmacima ili prema broju pristupa (zaporke povlaštenih korisničkih računa trebaju se češće mijenjati od običnih zaporki) i potrebno je izbjegavati ponovnu uporabu ili cikličku promjenu starih zaporki</td>
		<td align="center" width=100><input type="text" id="531" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Privremene zaporke treba promijeniti kod prvog prijavljivanja</td>
		<td align="center" width=100><input type="text" id="532" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Zaporke ne bi trebalo upisivati u bilo kakve procese automatizranih prijava, primjerice pohranjivati u makro naredbe ili pod funkcijske tipke</td>
		<td align="center" width=100><input type="text" id="533" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Pojedinačne korisničke zaporke ne treba dijeliti s drugim korisnicima</td>
		<td align="center" width=100><input type="text" id="534" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ne treba koristiti istu zaporku za poslovne i privatne svrhe</td>
		<td align="center" width=100><input type="text" id="535" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.3.2.</td><td>Korisnička oprema bez nadzora</td><td>Korisnici trebaju osigurati odgovarajuću zaštitu opreme bez nadzora.</td>
		<td align="center" width=100><input type="text" id="536" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=560>Svi korisnici trebaju biti svjesni sigurnosnih zahtjeva i procedura za zaštitu opreme bez nadzora, kao i njihovih odgovornosti za primjenu takve zaštite. Korisnike treba upozoriti na sljedeće:</td>
    <td>Nakon završetka rada treba zatvoriti sve aktivne sjednice, osim ako se one mogu zaštititi odgovarajućim mehanizmom za blokiranje, primjerice zaporkom zaštićena zaštita zaslona monitora</td>
		<td align="center" width=100><input type="text" id="537" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Odjavljivanje s glavnih računala, poslužitelja t uredskih računala nakon završetka rada (a ne samo isključenje monitora ili terminala)</td>
		<td align="center" width=100><input type="text" id="538" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Zaštititi osobna računala ili terminale od neovlaštene uporabe zaključavanjem tipkovnice ili odgovarajućom kontrolom, primjerice pristup pomoću upisa zaporke kad se računalo ili terminal ne koristi (također pogledajte 11.3.3)</td>
		<td align="center" width=100><input type="text" id="539" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.3.3.</td><td>Politike praznog stola i praznog zaslona</td><td>Potrebno je usvojiti politiku praznog stola za papire i uklonjive medije i politiku praznog zaslona za opremu za obradu informacija.</td>
		<td align="center" width=100><input type="text" id="540" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=560>Politike praznog stola i praznog zaslona trebaju voditi računa o klasifikaciji informacija (pogledajte 7.2), pravnim i ugovornim zahtjevima (pogledajte 15.1), odgovarajućim rizicima i kulturnom okruženju organizacije. Potrebno je razmotriti sljedeće smjernice:</td>
    <td>Osjetljive ili ključne poslovne informacije, primjerice na papiru ili elektroničkim medijima za pohranjivanje, trebaju biti pod ključem (idealno u kasi ili nekom drugom obliku sigurnosnog ormarića) kad nisu potrebne, posebice kad u uredu nema nikoga</td>
		<td align="center" width=100><input type="text" id="541" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Kad su bez nadzora, računala i terminali trebaju biti odjavljeni ili zaštićeni mehanizmom za blokiranje zaslona i tipkovnice koji je pod kontrolom zaporke, hardverskog ključa ili sličnog mehanizma ovlaštenja korisnika, te zaštićena ključevima, zaporkama ili drugim kontrolama kad se ne koriste</td>
		<td align="center" width=100><input type="text" id="542" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Mjesta prijema i slanja elektroničke pošte i faksimil aparati bez operatera trebaju biti zaštićena</td>
		<td align="center" width=100><input type="text" id="543" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je spriječiti neovlaštenu uporabu fotokopirnih uređaja i ostalih tehnologija reprodukcije (primjerice skenera, digitalnih kamera)</td>
		<td align="center" width=100><input type="text" id="544" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potrebno je sa pisača odmah ukloniti dokumente koji sadrže osjetljive ili klasificirane informacije</td>
		<td align="center" width=100><input type="text" id="545" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>11.4.</td><td colspan=4 align=center>Kontrola pristupa mreži</td></tr>
<tr class="alt"><td>11.4.1.</td><td>Politika uporabe mrežnih usluga</td><td>Korisnicima treba omogućiti samo pristup onim uslugama za čiju uporabu su posebno ovlašteni</td>
		<td align="center" width=100><input type="text" id="546" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=4 align="center" colspan=2 width=560>Potrebno je odrediti politiku uporabe mreža i mrežnih usluga. Ova politika treba uključivati:</td>
    <td>Mreže i mrežne usluge kojima se smije pristupati</td>
		<td align="center" width=100><input type="text" id="547" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procedure ovlaštenja za određivanje kome je dozvoljen pristup kojim mrežama i mrežnim uslugama</td>
		<td align="center" width=100><input type="text" id="548" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Kontrole upravljanja i procedure za zaštitu pristupa mrežnim vezama i mrežnim uslugama</td>
		<td align="center" width=100><input type="text" id="549" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Načini pristupa mrežama i mrežnim uslugama (primjerice uvjeti za dozvolu pristupa pomoću biranja broja davatelja Internet usluge ili udaljenog sustava)</td>
		<td align="center" width=100><input type="text" id="550" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.4.2.</td><td>Provjera vjerodostojnosti korisnika za vanjske veze</td><td>Potrebno je koristiti odgovarajuće načine provjere vjerodostojnosti za kontrolu pristupa udaljenih korisnika.</td>
		<td align="center" width=100><input type="text" id="551" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Provjera vjerodostojnosti udaljenih korisnika može se postići uz uporabu, primjerice, tehnike koja se zasniva na kriptografiji, hardverskim ključevima ili protokolu upita/odgovora</td>
		<td align="center" width=100><input type="text" id="552" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procedure i kontrole s povratnim pozivom, primjerice uporaba modema s povratnim pozivom, mogu osigurati zaštitu od neovlaštene i neželjene veze s opremom za obradu informacija organizacije</td>
		<td align="center" width=100><input type="text" id="553" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Za kontrolu pristupa u bežičnim vezama potrebno je primijeniti dodatne kontrole provjere vjerodostojnosti</td>
		<td align="center" width=100><input type="text" id="554" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.4.3.</td><td>Prepoznavanje opreme u mrežama</td><td>Potrebno je razmotriti automatsko prepoznavanje opreme kao sredstvo za provjeru vjerodostojnosti veze sa određene lokacije i opreme.</td>
		<td align="center" width=100><input type="text" id="555" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.4.4.</td><td>Zaštita priključka za daljinsku dijagnostiku i konfiguraciju</td><td>Potrebno je kontrolirati fizički i logički pristup priključcima za dijagnostiku i konfiguraciju.</td>
		<td align="center" width=100><input type="text" id="556" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=2 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Potencijalne kontrole pristupa priključcima za dijagnostiku i konfiguraciju uključuju uporabu ključa i dodatne procedure za kontrolu fizičkog pristupa priključku</td>
		<td align="center" width=100><input type="text" id="557" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Priključke, usluge i sličnu opremu instaliranu na računalu ili mrežnoj opremi treba onemogućiti ili ukloniti ako nije posebno potrebna za funkcionalnost poslovanja</td>
		<td align="center" width=100><input type="text" id="558" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr class="alt"><td>11.4.5.</td><td>Odvajanje u mrežama</td><td>U mrežama je potrebno odvojiti grupe informacijskih usluga, korisnike i informacijske sustave.</td>
		<td align="center" width=100><input type="text" id="559" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=1 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Odvajanje mreža u domene treba se zasnivati na vrijednosti i klasifikaciji informacija pohranjenih ili koje se obrađuju u mreži, razinama povjerenja, poslovnim kretanjima, radi smanjenja ukupnog utjecaja prekida usluge</td>
		<td align="center" width=100><input type="text" id="560" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.4.6.</td><td>Kontrola mrežne veze</td><td>Kod zajedničkih mreža, posebice onih koje se proširuju izvan granica organizacije, potrebno je ograničiti mogućnost spajanja korisnika u mrežu u skladu sa politikom kontrole pristupa i zahtjevima poslovnih aplikacija (pogledajte 11.1).</td>
		<td align="center" width=100><input type="text" id="561" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Potrebno je održavati i obnavljati prava pristupa korisnika u skladu sa politikom kontrole pristupa (pogledajte 11.1)</td>
		<td align="center" width=100><input type="text" id="562" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Mogućnost spajanja korisnika može se ograničiti kroz mrežne pristupnike koji filtriraju promet pomoću prethodno određenih tablica ili pravila. Primjeri aplikacija kod kojih je potrebno primijeniti ograničenja su:<br>
1. usluge prijenosa poruka, primjerice elektronička pošta;<br>
2. prijenos datoteka;<br>
3. interaktivni pristup;<br>
4. pristup aplikacijama</td>
		<td align="center" width=100><input type="text" id="563" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potrebno je razmotriti povezivanje prava pristupa mrežama s određenim dobom dana ili određenim datumom</td>
		<td align="center" width=100><input type="text" id="564" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.4.7.</td><td>Kontrola mrežnog usmjeravanja</td><td>Potrebno je primijeniti kontrole mrežnog usmjeravanja tako da računalne veze i tok informacija ne ugrožavaju politiku kontrole pristupa poslovnih aplikacija.</td>
		<td align="center" width=100><input type="text" id="565" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=2 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Kontrole usmjeravanja trebaju se zasnivati na mehanizmima pozitivne provjere polazne i odredišne adrese</td>
		<td align="center" width=100><input type="text" id="566" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Zahtjevi za kontrolu mrežnog usmjeravanja trebaju se zasnivati na politici kontrole pristupa (pogledajte 11.1)</td>
		<td align="center" width=100><input type="text" id="567" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr class="aa"><td>11.5.</td><td colspan=4 align=center>Kontrola pristupa operacijskom sustavu</td></tr>
<tr class="alt"><td>11.5.1.</td><td>Procedure sigurnog prijavljivanja</td><td>Pristup operacijskim sustavima treba kontrolirati procedurom sigurnog prijavljivanja (log-on).</td>
		<td align="center" width=100><input type="text" id="568" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=9 align="center" colspan=2 width=560>Potrebno je izraditi proceduru prijavljivanja operacijskom sustavu radi smanjenja mogućnosti neovlaštenog pristupa. Procedura prijavljivanja treba stoga u najmanjoj mogućoj mjeri otkrivati informacije o sustavu kako bi se spriječila bilo kakva nepotrebna pomoć neovlaštenom korisniku. Dobra procedura prijavljivanja treba imati sljedeće značajke:</td>
    <td>Ne treba prikazivati identifikatore sustava ili aplikacije sve dok se uspješno ne završi proces prijavljivanja</td>
		<td align="center" width=100><input type="text" id="569" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Treba prikazati općenito upozorenje da računalu može pristupiti samo ovlašteni korisnik</td>
		<td align="center" width=100><input type="text" id="570" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Ne treba prikazivati poruke pomoći tijekom procedure prijavljivanja koje bi pomogle neovlaštenom korisniku</td>
		<td align="center" width=100><input type="text" id="571" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Treba provjeriti vjerodostojnost informacija tek nakon upisa svih ulaznih podataka. U slučaju greške, sustav ne bi trebao označiti koji dio podataka je ispravan ili neispravan</td>
		<td align="center" width=100><input type="text" id="572" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Treba ograničiti broj dozvoljenih neuspješnih pokušaja prijavljivanja, primjerice na tri pokušaja, i:<br>
1. zapisivati neuspješne i uspješne pokušaje;<br>
2. treba osigurati određenu vremensku odgodu prije dozvole daljnjih pokušaja prijavljivanja ili odbaciti bilo koji daljnji pokušaj bez određenog ovlaštenja;<br>
3. odspojiti vezu prema podacima;<br>
4. poslati poruku alarma na konzolu sustava u slučaju postizanja maksimalnog broja pokušaja prijavljivanja;<br>
5. postaviti određeni broj pokušaja upisa zaporke u skladu s najmanjom dužinom zaporke i vrijednošću sustava koji se štiti</td>
		<td align="center" width=100><input type="text" id="573" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Treba ograničiti maksimalno i minimalno vrijeme dozvoljeno za proceduru prijavljivanja. Ukoliko se vrijeme prekorači, sustav treba prekinuti prijavljivanje</td>
		<td align="center" width=100><input type="text" id="574" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Nakon uspješnog prijavljivanja treba prikazati sljedeće informacije:<br>
1. datum i vrijeme prethodnog uspješnog prijavljivanja;<br>
2. detalje o bilo kojem neuspješnom pokušaju prijavljivanja nakon posljednjeg uspješnog prijavljivanja</td>
		<td align="center" width=100><input type="text" id="575" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ne bi trebala prikazivati upisanu zaporku ili treba razmotriti skrivanje upisanih znakova zaporke simbolima</td>
		<td align="center" width=100><input type="text" id="576" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ne bi trebala preko mreže slati zaporke u obliku čistog teksta</td>
		<td align="center" width=100><input type="text" id="577" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.5.2.</td><td>Identifikacija i provjera vjerodostojnosti korisnika</td><td>Svi korisnici trebaju imati jedinstvenu identifikaciju samo za svoju osobnu uporabu i potrebno je odabrati pogodnu tehnologiju provjere vjerodostojnosti koja će poslužiti kao dokaz identiteta korisnika.</td>
		<td align="center" width=100><input type="text" id="578" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=4 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Ovu kontrolu treba primijeniti za sve vrste korisnika (uključujući osoblje tehničke podrške, operatere, mrežne administratore, programere sustava i administratore baza podataka)</td>
		<td align="center" width=100><input type="text" id="579" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Identifikacije korisnika trebaju se koristiti za praćenje aktivnosti odgovornog pojedinca. Redovite korisničke aktivnosti se ne trebaju izvoditi sa povlaštenih korisničkih računa</td>
		<td align="center" width=100><input type="text" id="580" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>U iznimnim slučajevima, kad postoji jasan poslovni dobitak, može se koristiti zajednička korisnička identifikacija za grupu korisnika ili određeni posao. Odobrenje uprave tada treba dokumentirati. Za održavanje odgovornosti mogu biti potrebne dodatne kontrole</td>
		<td align="center" width=100><input type="text" id="581" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Općenite identifikacije koje će koristiti pojedinci treba dozvoliti samo ako nije potrebno pratiti dostupne funkcije ili izvedene akcije (primjerice pristup samo radi čitanja) ili ako postoje druge kontrole (primjerice zaporka samo za općenitu identifikaciju koja se izdaje samo za jednog korisnika i ako se takav slučaj zapiše)</td>
		<td align="center" width=100><input type="text" id="582" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.5.3.</td><td>Sustav upravljanja zaporkama</td><td>Sustavi za upravljanje zaporkama trebaju biti interaktivni i trebaju osigurati kvalitetne zaporke.</td>
		<td align="center" width=100><input type="text" id="583" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=9 align="center" colspan=2 width=560>Sustav upravljanja zaporkama treba:</td>
    <td>Poticati uporabu pojedinačnih korisničkih identifikacija i zaporki za održavanje odgovornosti</td>
		<td align="center" width=100><input type="text" id="584" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Omogućiti korisnicima odabir i promjenu njihovih vlastitih zaporki i sadržavati proceduru potvrđivanja kako bi se dozvolile greške pri upisu</td>
		<td align="center" width=100><input type="text" id="585" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Provesti odabir kvalitetnih zaporki (pogledajte 11.3.1)</td>
		<td align="center" width=100><input type="text" id="586" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Poticati promjenu zaporke (pogledajte 11.3.1)</td>
		<td align="center" width=100><input type="text" id="587" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Prisiliti korisnike na promjenu privremenih zaporki tijekom prvog prijavljivanja (pogledajte 11.2.3)</td>
		<td align="center" width=100><input type="text" id="588" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Održavati zapis prethodnih korisničkih zaporki i spriječiti njihovu ponovnu uporabu</td>
		<td align="center" width=100><input type="text" id="589" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Sakriti (ne dozvoliti ispis) zaporki na zaslonu tijekom njihovog upisa</td>
		<td align="center" width=100><input type="text" id="590" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Pohraniti datoteke zaporki odvojeno od aplikacijskih sistemskih podataka</td>
		<td align="center" width=100><input type="text" id="591" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Pohraniti i prenositi zaporke u zaštićenom (primjerice kriptiranom ili potpuno izmiješanom) obliku</td>
		<td align="center" width=100><input type="text" id="592" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.5.4.</td><td>Uporaba sistemskih uslužnih programa</td><td>Potrebno je ograničiti i čvrsto kontrolirati uporabu uslužnih programa koji bi mogli zaobići kontrole sustava i aplikacijske kontrole.</td>
		<td align="center" width=100><input type="text" id="593" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=9 align="center" colspan=2 width=560>Potrebno je razmotriti sljedeće smjernice za uporabu sistemskih uslužnih programa:</td>
    <td>Uporaba procedura identifikacije, provjere vjerodostojnosti i ovlaštenja za sistemske uslužne programe</td>
		<td align="center" width=100><input type="text" id="594" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Odvajanje sistemskih uslužnih programa od aplikacijskog softvera</td>
		<td align="center" width=100><input type="text" id="595" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Ograničenje uporabe sistemskih uslužnih programa na najmanji broj pouzdanih, ovlaštenih korisnika također pogledajte 12.2.2)</td>
		<td align="center" width=100><input type="text" id="596" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Provjera vjerodostojnosti kod svake uporabe sistemskih uslužnih programa</td>
		<td align="center" width=100><input type="text" id="597" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ograničenje dostupnost sistemskih uslužnih programa, primjerice tijekom trajanja ovlaštene promjene</td>
		<td align="center" width=100><input type="text" id="598" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Prijavljivanje svake uporabe sistemskih uslužnih programa</td>
		<td align="center" width=100><input type="text" id="599" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Određivanje i dokumentiranje razina ovlaštenja za sistemske uslužne programe</td>
		<td align="center" width=100><input type="text" id="600" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Uklanjanje ili onemogućavanje svakog nepotrebnog uslužnog programa i sistemskog softvera</td>
		<td align="center" width=100><input type="text" id="601" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Sistemski uslužni programi ne trebaju biti dostupni korisnicima koji imaju pristup aplikacijama na sustavima kod kojih je potrebno odvajanje funkcija</td>
		<td align="center" width=100><input type="text" id="602" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.5.5.</td><td>Vrijeme isteka sjednice</td><td>Neaktivne sjednice treba zatvoriti nakon određenog vremena neaktivnosti.</td>
		<td align="center" width=100><input type="text" id="603" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=2 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Sustav za vremensko ograničenje treba obrisati sjednički zaslon i također, po mogućnosti kasnije, zatvoriti aplikaciju i mrežnu sjednicu nakon određenog vremena neaktivnosti. Trajanje vremenskog ograničenja treba biti u skladu sa sigurnosnim rizicima područja, klasifikacijom predmetnih informacija, aplikacijama koje se koriste i rizicima vezanim uz korisnike opreme</td>
		<td align="center" width=100><input type="text" id="604" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Kod nekih sustava može se primijeniti vremensko ograničenje u blažem obliku, koje briše prikaz na zaslonu i sprječava neovlašteni pristup, međutim, ne zatvara aplikaciju ili mrežnu sjednicu</td>
		<td align="center" width=100><input type="text" id="605" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr class="alt"><td>11.5.6.</td><td>Ograničavanje trajanja spajanja</td><td>Ograničavanja trajanja spajanja treba primijeniti radi pružanja dodatne sigurnosti za aplikacije s visokim rizikom.</td>
		<td align="center" width=100><input type="text" id="606" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=560>Potrebno je razmotriti kontrole trajanja spajanja na mrežu za osjetljive računalne aplikacije, posebice sa lokacija s visokim rizicima, primjerice javnih ili vanjskih područja koje su izvan djelokruga upravljanja sigurnošću organizacije. Primjeri takvih ograničenja uključuju:</td>
    <td>Uporabu prethodno određenih vremenskih perioda, primjerice za prijenose skupne datoteke ili redovitih interaktivnih sjednica kratkog trajanja</td>
		<td align="center" width=100><input type="text" id="607" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ograničavanje vremena spajanja na mrežu u normalno radno vrijeme ako ne postoji zahtjev za prekovremenim ili produženim radom</td>
		<td align="center" width=100><input type="text" id="608" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Razmatranje ponovne provjere vjerodostojnosti u određenim vremenskim intervalima</td>
		<td align="center" width=100><input type="text" id="609" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>11.6.</td><td colspan=4 align=center>Kontrola pristupa aplikacijama i informacijama</td></tr>
<tr class="alt"><td>11.6.1.</td><td>Ograničavanje pristupa informacijama</td><td>Potrebno je ograničiti pristup informacijama i funkcijama aplikacijskog sustava od strane korisnika i osoblja za podršku, u skladu s određenom politikom kontrole pristupa.</td>
		<td align="center" width=100><input type="text" id="610" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=4 align="center" colspan=2 width=560>Za podršku zahtjevima ograničenja pristupa potrebno je razmotriti primjenu sljedećih smjernica:</td>
    <td>Osiguranje izbornika za kontrolu pristupa funkcijama aplikacijskog sustava</td>
		<td align="center" width=100><input type="text" id="611" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Kontrola prava pristupa korisnika, primjerice čitanje, upis, brisanje i izvođenje</td>
		<td align="center" width=100><input type="text" id="612" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Kontrola prava pristupa drugih aplikacija</td>
		<td align="center" width=100><input type="text" id="613" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Izlazi iz aplikacijskog sustava koji obrađuju osjetljive informacije trebaju sadržavati samo one informacije koje se odnose na uporabu određenog izlaza i trebaju se poslati samo ovlaštenim terminalima i lokacijama; ovo treba uključivati i redovite provjere lakvih izlaza radi uklanjanja suvišnih informacija</td>
		<td align="center" width=100><input type="text" id="614" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.6.2.</td><td>Izolacija osjetljivih sustava</td><td>Osjetljivi sustavi trebaju imati namjenska (izolirana) računalna okruženja.</td>
		<td align="center" width=100><input type="text" id="615" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=2 align="center" colspan=2 width=560>Za izolaciju osjetljivog sustava potrebno je razmotriti sljedeće točke:</td>
    <td>Osjetljivost aplikacijskog sustava treba vlasnik aplikacije izričito odrediti i dokumentirati (pogledajte 7.1.2)</td>
		<td align="center" width=100><input type="text" id="616" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Kad je potrebno osjetljivu aplikaciju izvoditi u zajedničkom okruženju, vlasnik osjetljive aplikacije treba odrediti odgovarajuće rizike aplikacijskih sustava s kojima osjetljive aplikacije dijele sredstva</td>
		<td align="center" width=100><input type="text" id="617" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr class="aa"><td>11.7.</td><td colspan=4 align=center>Uporaba mobilnih računala i rad na daljinu</td></tr>
<tr class="alt"><td>11.7.1.</td><td>Uporaba mobilnih računala i komunikacije</td><td>Potrebno je usvojiti formalnu politiku i odgovarajuće sigurnosne mjere za zaštitu od rizika pri uporabi mobilnih računala i komunikacijske opreme.</td>
		<td align="center" width=100><input type="text" id="618" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=7 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Pri uporabi mobilnih računala i komunikacijske opreme, primjerice prijenosnih računala, palmtop računala, laptop računala, pametnih kartica i mobilnih telefona, potrebno je obratiti posebnu pozornost da ne dođe do ugrožavanja poslovnih informacija. Politika uporabe mobilnih računala treba uzeti u obzir rizike u radu s mobilnim računalima u nezaštićenim okruženjima</td>
		<td align="center" width=100><input type="text" id="619" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Politika uporabe mobilnih računala treba uključiti zahtjeve za fizičku zaštitu, kontrole pristupa, kriptografske tehnike, sigurnosne kopije i zaštitu od virusa. Ova politika također treba uključivati pravila i smjernice za priključenje mobilne opreme na mreže kao i smjernice za uporabu ove opreme na javnim mjestima</td>
		<td align="center" width=100><input type="text" id="620" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potrebno je obratiti pozornost pri uporabi mobilnih računala na javnim mjestima, sobama za sastanke i ostalim nezaštićenim područjima izvan prostora organizacije. Potrebno je osigurati zaštitu radi sprječavanja neovlaštenog pristupa ili otkrivanja informacija pohranjenih i obrađenih na ovoj opremi, primjerice uz uporabu kriptografskih tehnika (pogledajte 12.3)</td>
		<td align="center" width=100><input type="text" id="621" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Korisnici mobilnih računala na javnim mjestima trebaju izbjeći rizik uvida od strane neovlaštenih osoba. Potrebno je usvojiti i obnavljati procedure za zaštitu od zloćudnog softvera (pogledajte 10.4)</td>
		<td align="center" width=100><input type="text" id="622" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je redovito raditi sigurnosne kopije ključnih poslovnih informacija. Oprema također treba biti dostupna za brzu i jednostavnu izradu sigurnosnih kopija. Ove sigurnosne kopije treba na odgovarajući način zaštititi od, primjerice krađe ili gubitka informacija</td>
		<td align="center" width=100><input type="text" id="623" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Uporabu mobilne opreme spojene na mrežu treba na odgovarajući način zaštititi. Udaljeni pristup poslovnim informacijama preko javne mreže uz uporabu mobilnih računala smije se izvesti samo nakon uspješne identifikacije i provjere vjerodostojnosti i pomoću pogodnih mehanizama kontrole pristupa (pogledajte 11.4)</td>
		<td align="center" width=100><input type="text" id="624" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Oprema mobilnih računala također treba biti fizički zaštićena od krađe, posebice kad se ostavlja, primjerice u automobilima i ostalim transportnim sredstvima, hotelskim sobama, konferencijskim centrima i sobama za sastanke. Potrebno je odrediti posebne procedure, koje će uzeti u obzir zahtjeve police osiguranja, pravne i ostale sigurnosne zahtjeve organizacije, za slučaj krađe ili gubitka opreme mobilnih računala</td>
		<td align="center" width=100><input type="text" id="625" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>11.7.2.</td><td>Rad na daljinu</td><td>Potrebno je razviti i primijeniti politiku, operativne planove i procedure za aktivnosti rada na daljinu.</td>
		<td align="center" width=100><input type="text" id="626" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=2 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Organizacije trebaju ovlastiti rad na daljinu samo ako su uvjerene da su primijenjeni dogovori o sigurnosti i sigurnosne kontrole koje su usklađene sa politikom sigurnosti organizacije</td>
		<td align="center" width=100><input type="text" id="627" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je primijeniti odgovarajuću zaštitu lokacije s koje se radi od, primjerice krađe opreme i informacija, neovlaštenog otkrivanja informacija, neovlaštenog udaljenog pristupa internim sustavima organizacije ili zloporabe opreme. Daljinski rad treba biti ovlašten i pod kontrolom uprave i potrebno je osigurati primjenu odgovarajućih dogovora o ovom načinu rada</td>
		<td align="center" width=100><input type="text" id="628" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=9 align="center" colspan=2 width=560>Potrebno je razmotriti sljedeće točke:</td>
    <td>Postojeću fizičku sigurnost lokacije daljinskog rada uzimajući u obzir fizičku sigurnost zgrade i lokalnog okruženja</td>
		<td align="center" width=100><input type="text" id="629" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Predloženo fizičko okruženje za daljinski rad</td>
		<td align="center" width=100><input type="text" id="630" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Zahtjeve komunikacijske sigurnosti uzimajući u obzir potrebu za udaljenim pristupom internim sustavima organizacije, osjetljivost informacija kojima će se pristupiti i prenijeti preko komunikacijske veze, te osjetljivost internog sustava</td>
		<td align="center" width=100><input type="text" id="631" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Prijetnju neovlaštenog pristupa informacijama ili sredstvima od strane drugih osoba koje koriste smještaj, primjerice obitelj i prijatelji</td>
		<td align="center" width=100><input type="text" id="632" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Uporabu kućnih mreža i zahtjeve ili ograničenja konfiguracije bežičnih mrežnih usluga</td>
		<td align="center" width=100><input type="text" id="633" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Politike i procedure za sprječavanje pobijanja prava na intelektualno vlasništvo razvijeno na privatnoj opremi</td>
		<td align="center" width=100><input type="text" id="634" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Pristup privatnoj opremi (radi provjere sigurnosti opreme ili tijekom istrage) koja možda nije moguća zbog zakonskih propisa</td>
		<td align="center" width=100><input type="text" id="635" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Sporazumi o licenciranom softveru koji mogu biti takvi da je organizacija odgovorna za licenciranje korisničkog softvera na radnim stanicama u privatnom vlasništvu zaposlenika, ugovornih suradnika ili korisnika treće strane</td>
		<td align="center" width=100><input type="text" id="636" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Zaštitu od virusa i zahtjeve vatrozida</td>
		<td align="center" width=100><input type="text" id="637" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=10 align="center" colspan=2 width=560>Smjernice i dogovori trebaju uključivati:</td>
    <td>Nabavu ormarića za pohranjivanje i pogodne opreme za daljinski rad, pri čemu nije dozvoljena uporaba privatne opreme koja nije pod kontrolom organizacije</td>
		<td align="center" width=100><input type="text" id="638" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Određivanje dozvoljenog rada, sati rada, klasifikacije informacija koje se mogu pohranjivati i interni sustavi i usluge kojima osoba može ovlašteno pristupiti</td>
		<td align="center" width=100><input type="text" id="639" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Nabavu pogodne komunikacijske opreme, uključujući načine za zaštitu udaljenog pristupa</td>
		<td align="center" width=100><input type="text" id="640" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Fizičku sigurnost</td>
		<td align="center" width=100><input type="text" id="641" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Pravila i smjernice za pristup obitelji i prijatelja opremi i informacijama</td>
		<td align="center" width=100><input type="text" id="642" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Nabavu hardverske i softverske podrške i održavanje</td>
		<td align="center" width=100><input type="text" id="643" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Sklapanje ugovora o osiguranju</td>
		<td align="center" width=100><input type="text" id="644" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Procedure za izradu sigurnosnih kopija i za kontinuitet poslovanja</td>
		<td align="center" width=100><input type="text" id="645" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Reviziju i nadzor sigurnosti</td>
		<td align="center" width=100><input type="text" id="646" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Opoziv ovlaštenja i prava pristupa i povrat opreme nakon završetka aktivnosti daljinskog rada</td>
		<td align="center" width=100><input type="text" id="647" size="6" onkeyup="provjera(this.id);"> %</td></tr>
</table>
<!-- 12121212121211212121212121212121212121212121212121212121212121212121212121212121212121212121212121212121 -->
<br>
<table id="prva" width=75% cellspacing=5 cellpadding=8 cols=2>
<tr><td class="a" colspan=6 align=center>12. Nabava, razvoj i održavanje informacijskih sustava</td></tr>
<tr class="aa"><td>12.1.</td><td colspan=4 align=center>Sigurnosni zahtjevi informacijskih sustava</td></tr>
<tr class="alt"><td>12.1.1.</td><td>Analiza i specifikacija sigurnosnih zahtjeva</td><td>Izjave o poslovnim zahtjevima za nove informacijske sustave ili poboljšanjima postojećih informacijskih sustava trebaju odrediti zahtjeve za sigurnosnim kontrolama</td>
		<td align="center" width=100><input type="text" id="648" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=500>Smjernice za primjenu:</td>
    <td>Specifikacije zahtjeva za kontrolama trebaju razmotriti ugradnju automatiziranih kontrola u informacijski sustav i potrebu za pratećim ručnim kontrolama. Slična razmatranja treba primijeniti pri vrednovanju softverskih paketa, razvijenih ili kupljenih, za poslovne aplikacije.</td>
		<td align="center" width=100><input type="text" id="649" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Sigurnosni zahtjevi i kontrole trebaju odražavati poslovnu vrijednost odgovarajuće informacijske imovine (također pogledajte 7.2) i potencijalne poslovne Štete koja može nastati uslijed neuspjeha ili nedostatka sigurnosti.</td>
		<td align="center" width=100><input type="text" id="650" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Sistemske zahtjeve informacijske sigurnosti i procesa za primjenu sigurnosti treba obuhvatiti u ranim fazama projekata informacijskih sustava. Kontrole uključene tijekom projektiranja znatno su jeftinije za primjenu i održavanje od onih koje se uključuju tijekom ili nakon primjene.</td>
		<td align="center" width=100><input type="text" id="651" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>12.2.</td><td colspan=4 align=center>Ispravna obrada u aplikacijama</td></tr>
<tr class="alt"><td>12.2.1.</td><td>Analiza ulaznih podataka</td><td>Ulazni podataci za aplikacije trebaju biti validirani kako bi se osigurala točnost i primjerenost podataka</td>
		<td align="center" width=100><input type="text" id="652" size="6" onkeyup="provjera(this.id);"> %</td></tr>		

<tr class="alt"><td>12.2.2.</td><td>Kontrola interne obrade</td><td>U aplikacije je potrebno ugraditi provjeru valjanosti radi otkrivanja bilo kakvog oštećenja informacija u slučaju grešaka tijekom obrade ili namjernih djelovanja.</td>
		<td align="center" width=100><input type="text" id="653" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=4 align="center" colspan=2 width=560>Projektiranje i primjena aplikacija trebaju smanjiti rizike u slučaju neuspješne obrade koja dovodi do narušavanja cjelovitosti. Posebna područja koja treba razmotriti uključuju:</td>
    <td>Uporabu funkcija dodavanja, promjene i brisanja za promjenu podataka</td>
		<td align="center" width=100><input type="text" id="654" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procedure za sprječavanje izvođenja programa krivim redoslijedom ili izvođenja nakon neispravne prethodne obrade (također pogledajte 10.1.1)</td>
		<td align="center" width=100><input type="text" id="655" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Uporabu odgovarajućih programa za oporavak nakon neispravnosti kako bi se osigurala ispravna obrada podataka</td>
		<td align="center" width=100><input type="text" id="656" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Zaštitu od napada uporabom prekoračenja/preljeva spremnika</td>
		<td align="center" width=100><input type="text" id="657" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=8 align="center" colspan=2 width=560>Potrebno je pripremiti odgovarajući popis provjere, dokumentirati aktivnosti i držati rezultate na sigurnom. Primjeri provjera koji se mogu primijeniti uključuju sljedeće:</td>
    <td>Kontrole sjednice ili skupne kontrole radi usklađivanja veličina datoteke podataka nakon obnavljanja transakcije</td>
		<td align="center" width=100><input type="text" id="658" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Kontrole za usklađivanje radi provjere stanja kod otvaranja u odnosu na stanje nakon prethodnog zatvaranja, odnosno:<br>
1. kontrole slijeda izvršenja;<br>
2. ukupno obnavljanje datoteke;<br>
3. kontrole slijeda programa<br></td>
		<td align="center" width=100><input type="text" id="659" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Provjeru valjanosti ulaznih podataka koje generira sustav (pogledajte 12.2.1)</td>
		<td align="center" width=100><input type="text" id="630" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Provjere cjelovitosti, vjerodostojnosti ili bilo koje druge sigurnosne značajke podataka ili softvera koji su preuzeti ili preneseni između središnjeg i udaljenih računala</td>
		<td align="center" width=100><input type="text" id="631" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ukupna raspršenja zapisa i datoteka</td>
		<td align="center" width=100><input type="text" id="632" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Provjere izvođenja aplikacijskih programa u pravo vrijeme</td>
		<td align="center" width=100><input type="text" id="633" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Provjere radi osiguranja ispravnog redoslijeda i završetka (u slučaju neispravnosti) izvođenja programa i prekid daljnje obrade dok se ne riješi problem</td>
		<td align="center" width=100><input type="text" id="634" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Kreiranje zapisa aktivnosti uključenih u obradu (pogledajte 10.10.1)</td>
		<td align="center" width=100><input type="text" id="635" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>12.2.3.</td><td>Cjelovitost poruke</td><td>Potrebno je odrediti zahtjeve za osiguranje vjerodostojnosti i zaštite cjelovitosti poruka u aplikacijama i odrediti i primijeniti odgovarajuće kontrole.</td>
		<td align="center" width=100><input type="text" id="636" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=1 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Potrebno je procijeniti sigurnosne rizike radi utvrđivanja potrebe za cjelovitošću poruke i određivanja najpovoljnijeg načina primjene.</td>
		<td align="center" width=100><input type="text" id="637" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>12.2.4.</td><td>Provjera valjanosti izlaznih podataka</td><td>Potrebno je provjeriti valjanost izlaznih podataka radi osiguranja da je obrada pohranjenih informacija ispravna i primjerena okolnostima.</td>
		<td align="center" width=100><input type="text" id="638" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=6 align="center" colspan=2 width=560>Provjera valjanosti može sadržavati:</td>
    <td>Provjere prihvatljivosti radi utvrđivanja da li izlazni podaci imaju smisla</td>
		<td align="center" width=100><input type="text" id="639" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Broj kontrola usklađivanja radi osiguranja obrade svih podataka</td>
		<td align="center" width=100><input type="text" id="640" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Osiguranje dovoljnih informacija za korisnika ili sustav za naknadnu obradu radi određivanja točnosti, cjelovitosti, preciznosti i klasifikacije informacija</td>
		<td align="center" width=100><input type="text" id="641" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Procedure za odgovora na provjere valjanosti izlaza</td>
		<td align="center" width=100><input type="text" id="642" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Određivanje odgovornosti svih osoba uključenih u proces kreiranja izlaznih podataka</td>
		<td align="center" width=100><input type="text" id="643" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Kreiranje zapisa o aktivnostima tijekom procesa provjere valjanosti izlaznih podataka</td>
		<td align="center" width=100><input type="text" id="644" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="aa"><td>12.3.</td><td colspan=4 align=center>Kriptografske kontrole</td></tr>
<tr class="alt"><td>12.3.1.</td><td>Politika uporabe kriptografskih kontrola</td><td>Potrebno je razviti i primijeniti politiku uporabe kriptografskih kontrola za zaštitu informacija.</td>
		<td align="center" width=100><input type="text" id="645" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=7 align="center" colspan=2 width=560>Pri razvoju kriptografske politike potrebno je razmotriti sljedeće:</td>
    <td>Pristup uprave uporabi kriptografskih kontrola u organizaciji, uključujući opća načela za zaštitu poslovnih informacija (također pogledajte 5.1.1)</td>
		<td align="center" width=100><input type="text" id="646" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Na temelju procjene rizika potrebno je odrediti razinu zaštite uzimajući u obzir vrstu, snagu i kvalitetu potrebnog algoritma kriptiranja</td>
		<td align="center" width=100><input type="text" id="647" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Uporabu kriptiranja za zaštitu osjetljivih informacija koje se prenose pomoću mobilnih ili uklonjivih medija, uređaja ili preko komunikacijskih linija</td>
		<td align="center" width=100><input type="text" id="648" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Pristup upravljanju ključevima, uključujući metode zaštite kriptografskih ključeva i obnove kriptiranih informacija u slučaju izgubljenih, ugroženih ili oštećenih ključeva</td>
		<td align="center" width=100><input type="text" id="649" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Funkcije i odgovornosti, primjerice tko je odgovoran za:<br>
1. primjenu politike;<br>
2. upravljanje ključevima, uključujući generiranje ključeva (također pogledajte 12.3.2)</td>
		<td align="center" width=100><input type="text" id="650" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Prihvaćanje odgovarajućih standarda za učinkovitu primjenu u cijeloj organizaciji (koje rješenje se koristi za koje poslovne procese)</td>
		<td align="center" width=100><input type="text" id="651" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Utjecaj uporabe kriptiranih informacija na kontrole koje se oslanjaju na ispitivanje sadržaja (primjerice otkrivanje virusa)</td>
		<td align="center" width=100><input type="text" id="652" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="alt"><td>12.3.2.</td><td>Upravljanje ključevima</td><td>Potrebno je usvojiti upravljanje ključevima koje će podržati uporabu kriptografskih tehnika u organizaciji.</td>
		<td align="center" width=100><input type="text" id="653" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=11 align="center" colspan=2 width=560>Sustav upravljanja ključevima treba se zasnivati na utvrđenoj grupi standarda, procedura i sigurnih metoda za:</td>
    <td>Generiranje ključeva za različite kriptografske sustave i različite aplikacije</td>
		<td align="center" width=100><input type="text" id="654" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Generiranje i ovjeravanje javnog ključa</td>
		<td align="center" width=100><input type="text" id="655" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Distribuciju ključeva naznačenim korisnicima, uključujući način aktiviranja ključeva nakon njihovog prijema</td>
		<td align="center" width=100><input type="text" id="656" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Pohranjivanje ključeva, uključujući način na koji ovlašteni korisnici mogu pristupiti ključevima</td>
		<td align="center" width=100><input type="text" id="657" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Promjenu ili obnavljanje ključeva, uključujući pravila o tome kada i na koji način treba promijeniti ključ</td>
		<td align="center" width=100><input type="text" id="658" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Postupak s otkrivenim ključevima</td>
		<td align="center" width=100><input type="text" id="659" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Poništenje ključeva, uključujući način njihovog povlačenja ili deaktiviranja, primjerice kad su ključevi otkriveni ili kad korisnik napušta organizaciju (u tom slučaju ključeve treba također i arhivirati)</td>
		<td align="center" width=100><input type="text" id="660" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Obnavljanje izgubljenih ili neispravnih ključeva kao dio upravljanja kontinuitetom poslovanja, primjerice za obnavljanje kriptiranih informacija</td>
		<td align="center" width=100><input type="text" id="661" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Arhiviranje ključeva, primjerice za arhivirane informacije ili sigurnosne kopije informacija</td>
		<td align="center" width=100><input type="text" id="662" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Uništavanje ključeva</td>
		<td align="center" width=100><input type="text" id="663" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Vođenje zapisa i revizija aktivnosti koje se odnose na upravljanje ključevima</td>
		<td align="center" width=100><input type="text" id="664" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>12.4.</td><td colspan=4 align=center>Sigurnost sistemskih datoteka</td></tr>
<tr class="alt"><td>12.4.1.</td><td>Kontrola operativnog softvera</td><td>Potrebno je uvesti procedure za kontrolu instalacije softvera na operativnim sustavima.</td>
		<td align="center" width=100><input type="text" id="665" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=8 align="center" colspan=2 width=560>Radi smanjenja rizika od oštećenja operativnog sustava, potrebno je razmotriti sljedeće smjernice za kontrolu promjena:</td>
    <td>Obnavljanje operativnog softvera, aplikacije i programskih biblioteka trebaju izvoditi samo obučeni administratori nakon odgovarajućeg ovlaštenja od strane uprave (pogledajte 12.4.3)</td>
		<td align="center" width=100><input type="text" id="666" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Operativni sustavi trebaju sadržavati samo odobreni izvršni kod, a ne razvojni kod ili kompilatore</td>
		<td align="center" width=100><input type="text" id="667" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Aplikacijski softver i softver operacijskog sustava trebaju se primijeniti tek nakon opsežnog i uspješnog ispitivanja; ispitivanja trebaju obuhvatiti uporabljivost, sigurnost, utjecaje na druge sustave i jednostavnost korištenja, te se trebaju izvoditi na odvojenim sustavima (također pogledajte 10.1.4); potrebno je osigurati obnavljanje svih odgovarajućih biblioteka izvornog programskog koda</td>
		<td align="center" width=100><input type="text" id="668" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je koristiti sustav kontrole konfiguracije, radi kontrole svih ugrađenih softverskih paketa kao i dokumentacije sustava</td>
		<td align="center" width=100><input type="text" id="669" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Prije primjene promjena potrebno je usvojiti strategiju povratka na staro stanje</td>
		<td align="center" width=100><input type="text" id="670" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je održavati zapis revizije svih obnavljanja biblioteka operativnih programa</td>
		<td align="center" width=100><input type="text" id="671" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je zadržati prethodne verzije aplikacijskog softvera kao mjeru za slučaj nepredviđenih situacija</td>
		<td align="center" width=100><input type="text" id="672" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je arhivirati stare verzije softvera zajedno sa svim potrebnim informacijama i parametrima, procedurama, detaljima konfiguracije i pratećim softverom sve dok se podaci nalaze u arhivi</td>
		<td align="center" width=100><input type="text" id="673" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>12.4.2.</td><td>Zaštita ispitnih podataka sustava</td><td>Ispitne podatke treba pažljivo odabrati, zaštititi i kontrolirati.</td>
		<td align="center" width=100><input type="text" id="674" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=4 align="center" colspan=2 width=560>Za zaštitu operativnih podataka koji se koriste u ispitne svrhe treba razmotriti sljedeće smjernice:</td>
    <td>Procedure kontrole pristupa, koje se primjenjuju kod operativnih aplikacijskih sustava, također treba primijeniti i na ispitnim aplikacijskim sustavima</td>
		<td align="center" width=100><input type="text" id="675" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Svaki put kad se operativne informacije kopiraju u ispitni aplikacijski sustav potrebno je koristiti odvojeno ovlaštenje</td>
		<td align="center" width=100><input type="text" id="676" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Operativne informacije treba obrisati iz ispitnog aplikacijskog sustava odmah nakon završetka ispitivanja</td>
		<td align="center" width=100><input type="text" id="677" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Kopiranje i uporaba operativnih informacija trebaju se zapisivati radi kontrole knjiženja</td>
		<td align="center" width=100><input type="text" id="678" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>12.4.3.</td><td>Kontrola pristupa izvornom kodu programa</td><td>Potrebno je ograničiti pristup izvornom kodu programa.</td>
		<td align="center" width=100><input type="text" id="679" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=7 align="center" colspan=2 width=560>Potrebno je strogo kontrolirati pristup izvornom kodu programa i pripadnim podacima (kao stoje konstrukcija, specifikacija, plan kontrole i plan provjere) radi sprječavanja uvođenja neovlaštene funkcionalnosti i izbjegavanja nenamjernih promjena. Za izvorni kod programa ovo se može postići pomoću kontroliranog središnjeg pohranjivanja takvog koda, poželjno u bibliotekama izvornog koda programa. Zatim je potrebno razmotriti sljedeće smjernice (također pogledajte 11) za kontrolu pristupa takvim bibliotekama izvornog koda programa radi smanjenja potencijalnog oštećenja računalnih programa:</td>
    <td>Ako je moguće, biblioteke izvornog koda programa ne treba čuvati u operativnim sustavima</td>
		<td align="center" width=100><input type="text" id="680" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Izvornim kodom programa i bibliotekama izvornog koda programa treba upravljati u skladu s prihvaćenim procedurama</td>
		<td align="center" width=100><input type="text" id="681" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Osoblje za podršku ne treba neograničeno pristupati bibliotekama izvornog koda programa</td>
		<td align="center" width=100><input type="text" id="682" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Obnavljanje biblioteka izvornog koda programa i pripadnih podataka i izdavanje izvornih kodova programerima treba izvesti samo nakon primitka odgovarajućeg ovlaštenja</td>
		<td align="center" width=100><input type="text" id="683" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ispis programa treba čuvati u sigurnom okruženju (pogledajte 10.7.4)</td>
		<td align="center" width=100><input type="text" id="684" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je održavati revizijski zapis svih pristupa bibliotekama izvornog koda programa</td>
		<td align="center" width=100><input type="text" id="685" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Održavanje i kopiranje biblioteka izvornog koda programa trebaju biti pod strogim nadzorom procedura za kontrolu promjene (pogledajte 12.5.1)</td>
		<td align="center" width=100><input type="text" id="686" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>12.5.</td><td colspan=4 align=center>Sigurnost u procesima razvoja i podrške</td></tr>
<tr class="alt"><td>12.5.1.</td><td>Procedure za kontrolu promjene</td><td>Potrebno je kontrolirati primjenu promjena uz uporabu formalnih procedura za kontrolu promjene.</td>
		<td align="center" width=100><input type="text" id="687" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=11 align="center" colspan=2 width=560>Ako je moguće, procedure za kontrolu promjene aplikacije i operativnih promjena trebaju biti integrirani (također pogledajte 10.1.2). Procedure promjene trebaju sadržavati:</td>
    <td>Održavanje zapisa o dogovorenim razinama ovlaštenja</td>
		<td align="center" width=100><input type="text" id="688" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Podnošenje promjena od strane ovlaštenih korisnika</td>
		<td align="center" width=100><input type="text" id="689" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Provjeru kontrola i procedure cjelovitosti radi utvrđivanja da promjene neće na njih utjecati</td>
		<td align="center" width=100><input type="text" id="690" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Utvrđivanje svih softverskih paketa, informacija, jedinica baze podataka i hardvera koji zahtijevaju izmjenu</td>
		<td align="center" width=100><input type="text" id="691" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Postizanje formalnog odobrenja za detaljne prijedloge prije početka posla</td>
		<td align="center" width=100><input type="text" id="692" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Prihvaćanje promjena od strane ovlaštenih korisnika prije primjene</td>
		<td align="center" width=100><input type="text" id="693" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Osiguranje obnavljanja dokumentacije sustava nakon dovršenja svake promjene i arhiviranja ili odbacivanja stare dokumentacije</td>
		<td align="center" width=100><input type="text" id="694" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Održavanje kontrole verzije za sva obnavljanja softvera</td>
		<td align="center" width=100><input type="text" id="695" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Održavanje kontrole knjiženja svih zahtjeva za promjenom</td>
		<td align="center" width=100><input type="text" id="696" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>osiguranje promjene radne dokumentacije (pogledajte 10.1.1) i korisničkih procedura, prema potrebi, da bi odgovarali postojećem stanju</td>
		<td align="center" width=100><input type="text" id="697" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Osiguranje pravodobne primjene promjena tako da se pri tome ne ometaju uključeni poslovni procesi</td>
		<td align="center" width=100><input type="text" id="698" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>12.5.2.</td><td>Tehnička provjera aplikacija nakon promjena operacijskog sustava</td><td>Kod promjene operacijskih sustava, potrebno je provjeriti i ispitati aplikacije od presudnog značaja za poslovanje radi utvrđivanja da nema nepovoljnog utjecaja na poslovanje organizacije i sigurnost.</td>
		<td align="center" width=100><input type="text" id="699" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=560>Ovaj proces treba obuhvatiti:</td>
    <td>Provjeru aplikacijskih kontrola i procedura cjelovitosti radi utvrđivanja da promjene operacijskog sustava nisu na njih utjecale</td>
		<td align="center" width=100><input type="text" id="700" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Godišnji plan i proračun trebaju sadržavati provjere i ispitivanja sustava nastalih uslijed promjena operacijskog sustava</td>
		<td align="center" width=100><input type="text" id="701" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Pravodobno obavješćivanje o promjenama operacijskog sustava kako bi se omogućilo odgovarajuće ispitivanje i provjere prije primjene</td>
		<td align="center" width=100><input type="text" id="702" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovarajuće promjene treba napraviti i u planovima kontinuiteta poslovanja (pogledajte poglavlje 14)</td>
		<td align="center" width=100><input type="text" id="703" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Određenu grupu ili pojedinca treba zadužiti za nadzor ranjivosti i zakrpi i popravaka izdanih od strane isporučitelja (pogledajte 12.6)</td>
		<td align="center" width=100><input type="text" id="704" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>12.5.3.</td><td>Ograničenja promjena softverskih paketa</td><td>Promjene softverskih paketa se ne trebaju poticati, treba ih ograničiti na neophodne promjene i sve promjene treba strogo nadzirati.</td>
		<td align="center" width=100><input type="text" id="705" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=4 align="center" colspan=2 width=560>Softverske pakete isporučitelja treba, što je više moguće i primjenjivo, koristiti bez promjena. Ako je potrebno prilagoditi softverski paket, u obzir treba uzeti sljedeća razmatranja:</td>
    <td>Rizik ugrožavanja ugrađenih kontrola i procesa cjelovitosti</td>
		<td align="center" width=100><input type="text" id="706" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebu za dobivanjem pristanka isporučitelja</td>
		<td align="center" width=100><input type="text" id="707" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Mogućnost dobivanja potrebnih promjena od isporučitelja kao standardnih obnavljanja programa</td>
		<td align="center" width=100><input type="text" id="708" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Mogući utjecaj ako organizacija postane odgovorna za buduće održavanje softvera kao rezultat promjena</td>
		<td align="center" width=100><input type="text" id="709" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>12.5.4.</td><td>Curenje informacija</td><td>Potrebno je spriječiti mogućnost curenja informacija</td>
		<td align="center" width=100><input type="text" id="710" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=5 align="center" colspan=2 width=560>Za ograničavanje rizika od curenja informacija, primjerice kroz uporabu i iskorištavanje skrivenih kanala, potrebno je razmotriti sljedeće:</td>
    <td>Pretraživanje skrivenih informacija na vanjskim medijima i komunikacijama</td>
		<td align="center" width=100><input type="text" id="711" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Maskiranje i moduliranje ponašanja sustava i komunikacija radi smanjenja vjerojatnosti da će treća strana moći utvrditi informacije iz takvog ponašanja</td>
		<td align="center" width=100><input type="text" id="712" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Uporaba sustava i softvera koji se smatraju cjelovitima, primjerice uporaba vrednovanih proizvoda (pogledajte ISO/IEC 15408)</td>
		<td align="center" width=100><input type="text" id="713" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Redoviti nadzor aktivnosti osoblja i sustava, ako je dozvoljeno prema postojećim zakonskim propisima</td>
		<td align="center" width=100><input type="text" id="714" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Nadzor uporabe sredstava u računalnim sustavima</td>
		<td align="center" width=100><input type="text" id="715" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>12.5.5.</td><td>Razvoj softvera povjeren vanjskim izvršiteljima</td><td>Organizacija treba nadgledati i nadzirati razvoj softvera povjeren vanjskim izvršiteljima.</td>
		<td align="center" width=100><input type="text" id="716" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=6 align="center" colspan=2 width=560>Kad se razvoj softvera povjerava vanjskim izvršiteljima, potrebno je razmotriti sljedeće točke:</td>
    <td>Sporazume o licenci, vlasništvo koda i prava intelektualnog vlasništva (pogledajte 15.1.2)</td>
		<td align="center" width=100><input type="text" id="717" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ovjeravanje kvalitete i ispravnosti izvedenog posla</td>
		<td align="center" width=100><input type="text" id="718" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Sporazume o čuvanju kod treće strane dok se ne ispune određeni uvjeti, u slučaju neuspjeha</td>
		<td align="center" width=100><input type="text" id="719" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Prava pristupa zbog provjere kvalitete i ispravnosti izvedenog posla</td>
		<td align="center" width=100><input type="text" id="720" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ugovorne zahtjeve za kvalitetu i sigurnosnu funkcionalnost koda</td>
		<td align="center" width=100><input type="text" id="721" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ispitivanje prije instalacije radi otkrivanja zloćudnog i Trojanskog koda</td>
		<td align="center" width=100><input type="text" id="722" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>12.6.</td><td colspan=4 align=center>Upravljanje tehničkom ranjivošću</td></tr>
<tr class="alt"><td>12.6.1.</td><td>Kontrola tehničkih ranjivosti</td><td>Potrebno je dobiti pravodobne informacije o tehničkim ranjivostima korištenih informacijskih sustava, procijeniti izloženost organizacije takvim ranjivostima i poduzeti odgovarajuće mjere usmjerene na popratni rizik.</td>
		<td align="center" width=100><input type="text" id="723" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=10 align="center" colspan=2 width=560>Potrebno je poduzeti odgovarajuću, pravodobnu akciju kao odgovor na prepoznavanje potencijalnih tehničkih ranjivosti. Za učinkoviti proces upravljanja tehničkim ranjivostima potrebno je slijediti sljedeće smjernice:</td>
    <td>Organizacija treba odrediti i uspostaviti funkcije i odgovornosti vezane uz upravljanje tehničkom ranjivošću, uključujući nadzor ranjivosti, procjenu rizika ranjivosti, instaliranje zakrpa, praćenje imovine i svih potrebnih odgovornosti usklađivanja</td>
		<td align="center" width=100><input type="text" id="724" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Za softver i ostale tehnologije (prema popisu imovine, pogledajte 7.1.1) potrebno je odrediti informacijska sredstva koja će se koristiti za određivanje odgovarajućih tehničkih ranjivosti i održavanje razine svijesti o njihovom postojanju; ova informacijska sredstva trebaju se obnavljati ovisno o promjenama popisa imovine ili u slučaju nalaženja novih ili korisnih sredstava</td>
		<td align="center" width=100><input type="text" id="725" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potrebno je odrediti vremenski period u kojem će organizacija reagirati na obavijest o potencijalno važnim tehničkim ranjivostima</td>
		<td align="center" width=100><input type="text" id="726" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Kad se odredi potencijalna tehnička ranjivost, organizacija treba odrediti popratne rizike i akcije koje će poduzeti; ovakve akcije mogu uključivati instalaciju zakrpa ranjivih sustava i/ili primjenu drugih kontrola</td>
		<td align="center" width=100><input type="text" id="727" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ovisno o tome koliko je hitno potrebno usmjeriti aktivnosti na tehničku ranjivost, akcije treba izvesti u skladu s kontrolama koje se odnose na upravljanje promjenama (pogledajte 12.5.1) ili prema procedurama odgovora na sigurnosni incident (pogledajte 13.2)</td>
		<td align="center" width=100><input type="text" id="728" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ako je zakrpa dostupna, potrebno je procijeniti rizike vezane uz instalaciju zakrpe (potrebno je usporediti rizik uslijed ranjivosti s rizikom instalacije zakrpe)</td>
		<td align="center" width=100><input type="text" id="729" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Zakrpe treba ispitati i vrednovati prije njihove instalacije radi provjere njihove učinkovitosti i da ne bi uzrokovali dodatne učinke koji se ne mogu dozvoliti; ako zakrpe nisu dostupne, potrebno je razmotriti druge kontrole, kao što su:<br>
1. isključenje usluga ili mogućnosti koje se odnose na ranjivost;<br>
2. usvajanje ili dodavanje kontrola pristupa, primjerice vatrozida na granicama mreže (pogledajte 11.4.5);<br>
3. pojačani nadzor radi otkrivanja ili sprječavanja eventualnih napada;<br>
4. podizanje razine svijesti o ranjivosti</td>
		<td align="center" width=100><input type="text" id="730" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Za sve izvedene procedure potrebno je sačuvati revizijske zapise</td>
		<td align="center" width=100><input type="text" id="731" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Proces upravljanja tehničkom ranjivošću treba redovito nadzirati i vrednovati kako bi se osigurala njegova učinkovitost i djelotvornost</td>
		<td align="center" width=100><input type="text" id="732" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Najprije treba obraditi sustave s visokim rizikom</td>
		<td align="center" width=100><input type="text" id="733" size="6" onkeyup="provjera(this.id);"> %</td></tr>
</table>
<!-- 13131313131313131313131313131313131313131313131313131313131313131313131313131313131313131313131313131313131 -->
<br>
<table id="prva" width=75% cellspacing=5 cellpadding=8 cols=2>
<tr><td class="a" colspan=6 align=center>13. Upravljanje sigurnosnim incidentom</td></tr>
<tr class="aa"><td>13.1.</td><td colspan=4 align=center>Izvješćivanje o sigurnosnim događajima i slabostima</td></tr>
<tr class="alt"><td>13.1.1.</td><td>Izvješćivanje o sigurnosnim događajima</td><td>Kroz odgovarajuće kanale upravljanja potrebno je stoje prije moguće izvijestiti o sigurnosnim događajima.</td>
		<td align="center" width=100><input type="text" id="734" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=4 align="center" colspan=2 width=600>Svi zaposlenici, ugovorni suradnici i korisnici treće strane trebaju biti upoznati sa svojom odgovornošću da izvijeste o bilo kojim sigurnosnim događajima što je prije moguće. Također trebaju biti upoznati s procedurom izvješćivanja o sigurnosnim događajima i mjestu kontakta. Procedure izvješćivanja trebaju uključivati:</td>
    <td>Pogodne povratne informacije koje će osigurati da oni koji izvješćuju o sigurnosnim događajima dobiju informacije o rezultatima nakon obrade i zatvaranja predmeta</td>
		<td align="center" width=100><input type="text" id="735" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Formulare za izvješće o sigurnosnom događaju koji će podržati izvješćivanje i podsjetiti osobu koja podnosi izvješće na sve potrebne akcije u slučaju sigurnosnog događaja</td>
		<td align="center" width=100><input type="text" id="736" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>ispravno ponašanje u slučaju sigurnosnog događaja, primjerice:<br>
1. bilježenje svih važnih detalja (primjerice vrstu nesukladnosti ili povrede, nastalu neispravnost, poruke na zaslonu, čudno ponašanje) bez odlaganja;<br>
2. ne poduzimanje bilo kakvih akcija na svoju ruku, već izvješćivanje na mjestu kontakta bez odlaganja;<br>
</td>
		<td align="center" width=100><input type="text" id="737" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Naznaku formalnog disciplinskog procesa koji se primjenjuje u slučaju kad zaposlenik, ugovorni suradnik ili korisnik treće strane povrijedi sigurnost</td>
		<td align="center" width=100><input type="text" id="738" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>13.1.2.</td><td>Izvješćivanje o sigurnosnim slabostima</td><td>Svi zaposlenici, ugovorni suradnici i vanjski korisnici informacijskih sustava i usluga trebaju zabilježiti i izvijestiti o svakoj uočenoj ili mogućoj sigurnosnoj slabosti u sustavima ili uslugama.</td>
		<td align="center" width=100><input type="text" id="739" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=1 align="center" colspan=2 width=600>Smjernice za primjenu:</td>
    <td>Svi zaposlenici, ugovorni suradnici i korisnici treće strane trebaju izvijestiti svoju upravu ili izravno pružatelja usluge, stoje prije moguće, radi sprječavanja sigurnosnih incidenata. Mehanizam izvješćivanja treba biti što je više moguće jednostavan, pristupačan i dostupan. Potrebno ih je upoznati s činjenicom ne pokušavaju, ni pod kakvim uvjetima, poboljšati slabost na koju sumnjaju.</td>
		<td align="center" width=100><input type="text" id="740" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>13.2.</td><td colspan=4 align=center>Upravljanje sigurnosnim incidentima i poboljšanjima</td></tr>
<tr class="alt"><td>13.2.1.</td><td>Odgovornosti i procedure</td><td>Potrebno je utvrditi odgovornosti uprave i procedure za brz, učinkovit i uređen odgovor na sigurnosne incidente.</td>
		<td align="center" width=100><input type="text" id="741" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=4 align="center" colspan=2 width=560>Osim izvješćivanja o sigurnosnim događajima i slabostima (također pogledajte 13.1), potrebno je koristiti nadziranje sustava, upozorenja i ranjivosti (10.10.2) za otkrivanje sigurnosnih incidenata. Kod procedura upravljanja sigurnosnim incidentom potrebno je razmotriti sljedeće smjernice:</td>
    <td>Potrebno je utvrditi procedure za obradu različitih vrsta sigurnosnih incidenata, uključujući:<br>
1. neispravnosti informacijskih sustava i gubitak usluge;<br>
2. zloćudan kod (pogledajte 10.4.1);<br>
3. uskraćivanje usluge;<br>
4. greške koje nastaju uslijed nepotpunih i nepreciznih poslovnih podataka.<br>
5. kršenja povjerljivosti i cjelovitosti;<br>
6. zloporabu informacijskih sustava<br></td>
		<td align="center" width=100><input type="text" id="742" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Osim normalnih planova za nepredviđene situacije (pogledajte 14-1.3), procedure trebaju obuhvatiti (također pogledajte 13.2.2):<br>
1. analizu i prepoznavanje uzroka incidenta;<br>
2. obuzdavanje;<br>
3. planiranje i primjenu koreklivnih akcija radi sprječavanja ponovnog javljanja, ako je potrebno;<br>
4. priopćenje onima koji su ugroženi incidentom ili su uključeni u postupak oporavka;<br>
5. izvješćivanje odgovarajućeg nadležnog tijela o akciji;
</td>
		<td align="center" width=100><input type="text" id="743" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Potrebno je prikupiti kontrole knjiženja i slične dokaze (pogledajte 13.2.3) i na odgovarajući način ih osigurati za:<br>
1. internu analizu problema;<br>
2. uporabu kao forenzičkog dokaza u vezi potencijalnog kršenja ugovora ili regulativnog zahtjeva ili u slučaju građanskog ili kaznenog postupka, primjerice prema zakonskim propisima o zloporabi računala ili zaštiti podataka;<br>
3. pregovore o nadoknadi od strane isporučitelja softvera i usluga<br></td>
		<td align="center" width=100><input type="text" id="744" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je pažljivo i formalno kontrolirati akciju oporavka od ugrožavanja sigurnosti i ispravljanja zastoja sustava; procedure trebaju osigurati sljedeće:<br>
1. samo jasno identificirane i ovlaštene osobe imaju dozvolu pristupa aktivnim sustavima i podacima (također pogledajte 6.2 za vanjski pristup);<br>
2. detaljno dokumentiranje svih poduzetih akcija u slučaju nužde;<br>
3. izvješćivanje uprave o poduzetim akcijama u slučaju nužde i njihovo redovito provjeravanje;<br>
4. potvrđivanje, uz minimalnu odgodu, cjelovitosti poslovnih sustava i kontrola<br></td>
		<td align="center" width=100><input type="text" id="745" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="alt"><td>13.2.2.</td><td>Učenje na sigurnosnim incidentima</td><td>Potrebno je odrediti mehanizme koji će kvantificirati i nadzirati vrstu, količinu i troškove sigurnosnih incidenata.</td>
		<td align="center" width=100><input type="text" id="746" size="6" onkeyup="provjera(this.id);"> %</td></tr>			
<tr><td rowspan=1 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Potrebno je koristiti informacije dobivene od vrednovanja sigurnosnih incidenata za određivanje ponovljenih incidenata ili incidenata koji imaju znatan utjecaj</td>
		<td align="center" width=100><input type="text" id="747" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>13.2.3.</td><td>Prikupljanje dokaza</td><td>Tamo gdje nakon sigurnosnog incidenta slijedi akcija (građanska ili kaznena) protiv osobe ili organizacije, potrebno je prikupiti, sačuvati i predstaviti dokaze u skladu s propisima o navođenju dokaza u okviru određenog zakonodavstva.</td>
		<td align="center" width=100><input type="text" id="748" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=2 align="center" colspan=2 width=560>Kod prikupljanja i predstavljanja dokaza u svrhe disciplinske akcije unutar organizacije potrebno je razviti i pridržavati se internih procedura.Općenito, pravila za dokaze uključuju:</td>
    <td>Prihvatljivost dokaza: da li se dokaz može koristiti u sudnici ili ne</td>
		<td align="center" width=100><input type="text" id="749" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Težina dokaza: kvaliteta i cjelovitost dokaza</td>
		<td align="center" width=100><input type="text" id="750" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=2 align="center" colspan=2 width=560>Težina pribavljenog dokaza treba biti usklađena s primjenjivim zahtjevima. Za postizanje težine dokaza potrebno je ostvariti čvrste tragove dokaza uz uporabu kvalitetnih i cjelovitih kontrola za ispravnu i dosljednu zaštitu dokaza (primjerice dokaz kontrole procesa) za cijelo vrijeme u kojem je dokaz pohranjen i obrađen. Općenito, takav čvrsti trag može se postići pri sljedećim uvjetima:</td>
    <td>Za papirnate dokumente: original se čuva na sigurnom mjestu uz bilješku osobe koja je pronašla dokument, gdje je dokument pronađen, kad je dokument pronađen i tko je svjedok otkrića dokumenta; svaka istraga treba osigurati da se originali ne diraju</td>
		<td align="center" width=100><input type="text" id="751" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Za informacije na računalnim medijima: potrebno je napraviti preslike ili kopije (ovisno o primjenjivim zahtjevima) svih uklonjivih medija, informacija na tvrdim diskovima ili u memoriji kako bi se osigurala dostupnost; potrebno je napraviti zapis svih akcija tijekom procesa kopiranja i proces treba izvesti uz prisutnost svjedoka; originalne medije i zapis (ako to nije moguće, bar jednu presliku ili kopiju) treba čuvati na sigurnom mjestu nedirnutu</td>
		<td align="center" width=100><input type="text" id="752" size="6" onkeyup="provjera(this.id);"> %</td></tr>
</table>
<!-- 141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414 -->
<br>
<table id="prva" width=75% cellspacing=5 cellpadding=8 cols=2>
<tr><td class="a" colspan=6 align=center>14. Upravljanje kontinuitetom poslovanja</td></tr>
<tr class="aa"><td>14.1.</td><td colspan=4 align=center>Stanovišta informacijske sigurnosti pri upravljanju kontinuitetom poslovanja</td></tr>
<tr class="alt"><td>14.1.1.</td><td width=200>Uključivanje informacijske sigurnosti u proces upravljanja kontinuitetom poslovanja</td><td>Potrebno je razviti i održavati proces upravljanja kontinuitetom poslovanja u cijeloj organizaciji koji obrađuje zahtjeve informacijske sigurnosti potrebne za kontinuirano poslovanje organizacije.</td>
		<td align="center" width=100><input type="text" id="753" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=10 align="center" colspan=2 width=560>Proces treba objediniti sljedeće ključne elemente upravljanja kontinuitetom poslovanja:</td>
    <td>Razumijevanje rizika s kojima se suočava organizacija u smislu vjerojatnosti i utjecaja s vremenom, uključujući prepoznavanje i dodjelu prednosti ključnim poslovnim procesima (pogledajte 14.1.2)</td>
		<td align="center" width=100><input type="text" id="754" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Određivanje ukupne imovine uključene u ključne poslovne procese (pogledajte 7.1.1)</td>
		<td align="center" width=100><input type="text" id="755" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Razumijevanje utjecaja kojeg bi prekidi uzrokovani sigurnosnim incidentima mogli imati na poslovanje (važno je pronaći rješenja koja će obrađivati incidente koji imaju manji utjecaj, kao i ozbiljne incidente koji mogu predstavljati prijetnju održanju organizacije) i postavljanje poslovnih ciljeva opreme za obradu informacija</td>
		<td align="center" width=100><input type="text" id="756" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Razmatranje sklapanja pogodne police osiguranja koja može biti dio ukupnog procesa kontinuiteta poslovanja, kao i dio upravljanja operativnim rizikom</td>
		<td align="center" width=100><input type="text" id="757" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Određivanje i razmatranje primjene dodatnih preventivnih i ublažavajućih kontrola</td>
		<td align="center" width=100><input type="text" id="758" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Određivanje dostatnih financijskih, organizacijskih, tehničkih sredstava i okruženja u skladu sa zahtjevima informacijske sigurnosti</td>
		<td align="center" width=100><input type="text" id="759" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Osiguranje sigurnosti osoblja i zaštite opreme za obradu informacija i imovine organizacije</td>
		<td align="center" width=100><input type="text" id="760" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Oblikovanje i dokumentiranje planova kontinuiteta poslovanja uvažavajući zahtjeve informacijske sigurnosti usporedo sa usvojenom strategijom kontinuiteta poslovanja (pogledajte 14.1.3)</td>
		<td align="center" width=100><input type="text" id="761" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Redovito ispitivanje i obnavljanje postavljenih planova i procesa (pogledajte 14.1.5)</td>
		<td align="center" width=100><input type="text" id="762" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Objedinjavanje upravljanja kontinuitetom poslovanja s organizacijskim procesima i strukturama; odgovornost za proces upravljanja kontinuitetom poslovanja treba dodijeliti na odgovarajućoj razini unutar organizacije (pogledajte 6.1.1)</td>
		<td align="center" width=100><input type="text" id="763" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>14.1.2.</td><td>Kontinuitet poslovanja i procjena rizika</td><td>Potrebno je prepoznati događaje koji mogu uzrokovati prekide poslovnih procesa, zajedno s vjerojatnošću i utjecajem takvih prekida i njihovih posljedica po informacijsku sigurnost.</td>
		<td align="center" width=100><input type="text" id="764" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Stanovišta informacijske sigurnosti kontinuiteta poslovanja trebaju se zasnivati na određivanju događaja (ili niza događaja) koji mogu uzrokovati prekide organizacijskih poslovnih procesa, primjerice zastoj opreme, ljudske greške, krađa, požar, prirodne katastrofe i lerorističke akcije. Nakon toga slijedi procjena rizika radi određivanja vjerojatnosti i utjecaja takvih prekida u smislu vremena, visine štete i vremena oporavka.</td>
		<td align="center" width=100><input type="text" id="765" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procjene rizika kontinuiteta poslovanja treba izvesti uz punu suradnju vlasnika poslovnih sredstava i procesa. Ova procjena treba razmotriti sve poslovne procese i ne bi se trebala ograničiti na opremu za obradu informacija, već treba uključiti rezultate koji se posebno odnose na informacijsku sigurnost.</td>
		<td align="center" width=100><input type="text" id="766" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Ovisno rezultatima procjene rizika, potrebno je razviti strategiju kontinuiteta poslovanja radi određivanja ukupnog pristupa kontinuitetu poslovanja. Nakon kreiranja takve strategije, uprava treba odobriti i kreirati plan za primjenu te strategije.</td>
		<td align="center" width=100><input type="text" id="767" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>14.1.3.</td><td>Razvoj i primjena planova kontinuiteta poslovanja koji uključuju informacijsku sigurnost</td><td>Potrebno je izraditi i primijeniti planove za održavanje ili obnavljanje aktivnosti i osiguravanje dostupnosti informacija na zahtijevanoj razini u zahtijevanom vremenu nakon prekida ili zastoja ključnih poslovnih procesa.</td>
		<td align="center" width=100><input type="text" id="768" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=7 align="center" colspan=2 width=560>Proces planiranja kontinuiteta poslovanja treba razmotriti sljedeće:</td>
    <td>Određivanje i usvajanje svih odgovornosti i procedura kontinuiteta poslovanja</td>
		<td align="center" width=100><input type="text" id="769" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Određivanje prihvatljivog gubitka informacija i usluga</td>
		<td align="center" width=100><input type="text" id="770" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Primjenu procedura koje će omogućiti oporavak i obnavljanje poslovnih aktivnosti i dostupnosti informacija u potrebnom vremenu; posebnu pozornost treba obratiti na procjenu unutrašnjih i vanjskih poslovnih zavisnosti i važećih ugovora</td>
		<td align="center" width=100><input type="text" id="771" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Operativne procedure koje treba provoditi u očekivanju dovršenja oporavka i obnavljanja</td>
		<td align="center" width=100><input type="text" id="772" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Dokumentaciju usvojenih procedura i procesa</td>
		<td align="center" width=100><input type="text" id="773" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovarajuće obučavanje osoblja o usvojenim procedurama i procesima, uključujući upravljanje kriznim stanjem</td>
		<td align="center" width=100><input type="text" id="774" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ispitivanje i obnavljanje planova</td>
		<td align="center" width=100><input type="text" id="775" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>14.1.4.</td><td>Okosnica planiranja kontinuiteta poslovanja</td><td>Potrebno je održavati jednu okosnicu planova kontinuiteta poslovanja kako bi se osiguralo da su svi planovi dosljedni, da bi se dosljedno uvažavali zahtjevi informacijske sigurnosti i da bi se mogli odrediti prioriteti ispitivanja i održavanja.</td>
		<td align="center" width=100><input type="text" id="776" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=9 align="center" colspan=2 width=560>Okosnica planiranja kontinuiteta poslovanja treba uvažiti usvojene zahtjeve informacijske sigurnosti i razmotriti sljedeće:</td>
    <td>Uvjete za aktiviranje planova koji opisuju proces kojeg treba provesti (primjerice kako procijeniti situaciju, tko sve treba biti uključen u proces) prije aktiviranja svakog plana</td>
		<td align="center" width=100><input type="text" id="777" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procedure u slučaju nužde, koje opisuju akcije koje treba poduzeti nakon incidenta koji ugrožava poslovne aktivnosti</td>
		<td align="center" width=100><input type="text" id="778" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Procedure za slučaj neuspjeha koje opisuju akcije koje treba poduzeti u svrhu preseljenja bitnih poslovnih aktivnosti ili pomoćnih usluga na alternativnu privremenu lokaciju i ponovno uspostavljanje poslovnih procesa u potrebnom vremenu</td>
		<td align="center" width=100><input type="text" id="779" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Privremene operativne procedure koje treba provoditi u očekivanju dovršenja oporavka i obnavljanja</td>
		<td align="center" width=100><input type="text" id="780" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Procedure povratka koje opisuju akcije koje treba poduzeti za povratak na normalne poslovne aktivnosti</td>
		<td align="center" width=100><input type="text" id="781" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Raspored održavanja koji određuje kako i kada treba ispitati plan i proces održavanja plana</td>
		<td align="center" width=100><input type="text" id="782" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Aktivnosti podizanja razine svijesti, naobrazbe i obučavanja osmišljene tako da omoguće razumijevanje procesa kontinuiteta poslovanja i njihovu učinkovitost</td>
		<td align="center" width=100><input type="text" id="783" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Odgovornosti pojedinaca koje opisuju tko je odgovoran za izvođenje koje komponente plana. Alternative trebaju biti označene prema zahtjevima</td>
		<td align="center" width=100><input type="text" id="784" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ključnu imovinu i sredstva koja trebaju omogućiti izvođenje procedura u slučaju nužde, neuspjeha i povratka na normalno poslovanje</td>
		<td align="center" width=100><input type="text" id="785" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>14.1.5.</td><td>Ispitivanje, održavanje i ponovno procjenjivanje planova kontinuiteta poslovanja</td><td>Potrebno je redovito ispitivati i obnavljati planove kontinuiteta poslovanja kako bi uvijek bili suvremeni i učinkoviti.</td>
		<td align="center" width=100><input type="text" id="786" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=6 align="center" colspan=2 width=560>Raspored ispitivanja plan(ov)a kontinuiteta poslovanja treba naznačiti kako i kada treba ispitati svaki element plana. Svaki element plana treba često ispitivati. Potrebno je koristiti različite tehnike kako bi se osiguralo da će se plan ostvariti u stvarnosti. Ove tehnike uključuju:</td>
    <td>Ispitivanje različitih scenarija za stolom (diskusija o rješenjima oporavka poslovanja uz uporabu primjera prekida)</td>
		<td align="center" width=100><input type="text" id="787" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Simulacije (posebice kod obučavanja osoblja u njihovim upravljačkim funkcija nakon incidenta i tijekom krize)</td>
		<td align="center" width=100><input type="text" id="788" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Ispitivanje tehničkog oporavka (osiguranje učinkovitog obnavljanja informacijskih sustava)</td>
		<td align="center" width=100><input type="text" id="789" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ispitivanje vremena oporavka na alternativnoj lokaciji (paralelno odvijanje poslovnih procesa i postupaka oporavka udaljeno od glavne lokacije)</td>
		<td align="center" width=100><input type="text" id="790" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Ispitivanje opreme i usluga isporučitelja (osiguranje sukladnosti vanjskih usluga i proizvoda sa ugovornim obvezama)</td>
		<td align="center" width=100><input type="text" id="791" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potpune probe (ispitivanje koje treba pokazati da organizacija, osoblje, oprema, uređaji i procesi mogu izaći na kraj s prekidima)</td>
		<td align="center" width=100><input type="text" id="792" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
</table>
<!-- 141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414141414 -->
<br>
<table id="prva" width=75% cellspacing=5 cellpadding=8 cols=2>
<tr><td class="a" colspan=6 align=center>15. Sukladnost</td></tr>
<tr class="aa"><td>15.1.</td><td colspan=4 align=center>Sukladnost sa zakonskim propisima</td></tr>
<tr class="alt"><td>15.1.1.</td><td>Određivanje primjenjivih zakona</td><td>Potrebno je izričito odrediti, dokumentirati i osuvremeniti sve važne zakonske, regulativne i ugovorne zahtjeve i pristup organizacije u skladu s ovim zahtjevima za svaki informacijski sustav u organizaciji.</td>
		<td align="center" width=100><input type="text" id="793" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>15.1.2.</td><td>Prava intelektualnog vlasništva</td><td>Potrebno je primijeniti odgovarajuće procedure za osiguranje sukladnosti sa zakonskim, regulativnim i ugovornim zahtjevima o uporabi materijala za kojeg postoje prava intelektualnog vlasništva i o uporabi privatnih softverskih proizvoda.</td>
		<td align="center" width=100><input type="text" id="794" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=13 align="center" colspan=2>Za zaštitu svakog materijala koji se može smatrati intelektualnim vlasništvom treba razmotriti sljedeće smjernice:</td>
    <td>Objavljivanje politike sukladnosti s pravima intelektualnog vlasništva koja određuje legalnu uporabu softvera i informacijskih proizvoda</td>
		<td align="center" width=100><input type="text" id="795" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Nabava softvera samo ođ poznatih i pouzdanih izvora kako ne bi došlo do kršenja autorskih prava</td>
		<td align="center" width=100><input type="text" id="796" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Održavanje razine svijesti o politikama za zaštitu prava intelektualnog vlasništva i obavješćivanje o namjeri poduzimanja disciplinske akcije protiv osoba koje ih krše</td>
		<td align="center" width=100><input type="text" id="797" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Održavanje odgovarajuće evidencije imovine i određivanje imovine sa zahtjevom za zaštitu prava intelektualnog vlasništva</td>
		<td align="center" width=100><input type="text" id="798" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Održavanje tragova i dokaza o vlasništvu licence, glavnih diskova, priručnika, ...</td>
		<td align="center" width=100><input type="text" id="799" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Primjena kontrola koje će osigurati ne premašivanje najvećeg dozvoljenog broja korisnika</td>
		<td align="center" width=100><input type="text" id="800" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Provjere koje će utvrditi da su instalirani samo ovlašteni softveri i licencirani proizvodi</td>
		<td align="center" width=100><input type="text" id="801" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Određivanje politike koja će održavati odgovarajuće licencijske uvjete</td>
		<td align="center" width=100><input type="text" id="802" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Određivanje politike za odbacivanje softvera ili prijenos softvera drugima</td>
		<td align="center" width=100><input type="text" id="803" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Uporaba odgovarajućih revizijskih alata</td>
		<td align="center" width=100><input type="text" id="804" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Usklađivanje s načinima i uvjetima za softver i informacije koje su dobivene preko javnih mreža</td>
		<td align="center" width=100><input type="text" id="805" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Zabrana kopiranja, pretvorbe u drugi format ili izlučivanje iz komercijalnih snimaka (film, audio), osim ako autorska prava to dozvoljavaju</td>
		<td align="center" width=100><input type="text" id="806" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Zabrana kopiranja u cijelosti ili dijelova, knjiga, članaka, izvješća ili drugih dokumenata, osim ako autorska prava to dozvoljavaju</td>
		<td align="center" width=100><input type="text" id="807" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>15.1.3.</td><td>Zaštita organizacijskih zapisa</td><td>Važne zapise treba zaštititi od gubitka, uništenja i krivotvorenja u skladu sa zakonskim, regulativnim, ugovornim i poslovnim zahtjevima.</td>
		<td align="center" width=100><input type="text" id="808" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=6 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Zapise treba razvrstati u tipove. Sve materijale koji se odnose na kriptografske ključeve kao i programe vezane uz kriptirane arhive ili digitalne potpise (pogledajte 12.3) također treba pohraniti radi onemogućenja dekriptiranja zapisa tijekom vremena čuvanja zapisa.</td>
		<td align="center" width=100><input type="text" id="809" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je razmotriti mogućnost propadanja medija koji se koriste za pohranjivanje zapisa. Potrebno je primijeniti procedure pohranjivanja i rukovanja u skladu s preporukama proizvođača. Kod dugoročnog pohranjivanja, potrebno je razmotriti uporabu papira i mikrofilma.</td>
		<td align="center" width=100><input type="text" id="810" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Kod odabira elektroničkih medija za pohranu, potrebno je uključiti procedure koje će osigurati mogućnost pristupa podacima (čitljivost medija i formata) cijelo vrijeme perioda čuvanja radi zaštite od gubitka uslijed buduće promjene tehnologije.</td>
		<td align="center" width=100><input type="text" id="811" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Sustave za pohranjivanje podataka treba odabrati tako da se potrebni podaci mogu izvući u prihvatljivom vremenu i formatu, ovisno o tome koje zahtjeve treba zadovoljiti.</td>
		<td align="center" width=100><input type="text" id="812" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Sustav pohranjivanja i rukovanja treba osigurati jasnu identifikaciju zapisa i njihovog vremena čuvanja kako je to određeno nacionalnim ili regionalnim zakonskim propisima i odredbama, ako su primjenjivi.</td>
		<td align="center" width=100><input type="text" id="813" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Za udovoljavanje ovim ciljevima zaštite zapisa, unutar organizacije treba poduzeti sljedeće korake:<br>
1. potrebno je izdati smjernice o čuvanju, pohranjivanju, rukovanju i odbacivanju zapisa i informacija;<br>
2. potrebno je izraditi raspored čuvanja koji određuje zapise i vremenski period u kojem ih je potrebno čuvati;<br>
3. potrebno je održavati popis izvora ključnih informacija;<br>
4. potrebno je primijeniti odgovarajuće kontrole za zaštitu zapisa i informacija od gubitka, uništenja i krivotvorenja</td>
		<td align="center" width=100><input type="text" id="814" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="alt"><td>15.1.4.</td><td>Zaštita podataka i privatnosti osobnih informacija</td><td>Potrebno je osigurati zašiitu podataka i privatnosti u skladu s važećim zakonskim propisima i odredbama i, ako je primjenjivo, ugovornim člancima.</td>
		<td align="center" width=100><input type="text" id="815" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=1 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Potrebno je razviti i primijeniti politiku zaštite organizacijskih podataka i privatnosti. S ovom politikom treba upoznati sve osobe uključene u obradu osobnih informacija.</td>
		<td align="center" width=100><input type="text" id="816" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="alt"><td>15.1.5.</td><td>Sprječavanje zloporabe opreme za obradu informacija</td><td>Korisnike treba obeshrabriti u namjeri uporabe opreme za obradu informacija u neovlaštene svrhe.</td>
		<td align="center" width=100><input type="text" id="817" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=3 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Uprava treba odobriti uporabu opreme za obradu informacija. Svaku uporabu ove opreme u neposlovne svrhe bez odobrenja uprave (pogledajte 6.1.4) ili za bilo kakvu neovlaštenu namjenu treba smatrati neprimjerenom uporabom opreme. Ako se pomoću sustava nadzora ili na neki drugi način prepozna bilo kakva neovlaštena aktivnost, o tome je potrebno izvijestiti neposrednog rukovoditelja zaduženog za razmatranje odgovarajuće disciplinske i/ili pravne akcije.</td>
		<td align="center" width=100><input type="text" id="818" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Prije primjene procedura nadzora potrebno je zatražiti pravni savjet</td>
		<td align="center" width=100><input type="text" id="819" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Svi korisnici trebaju biti svjesni preciznog dosega njihovog dozvoljenog pristupa i uvedenog nadzora za otkrivanje neovlaštene uporabe.</td>
		<td align="center" width=100><input type="text" id="820" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>15.1.6.</td><td>Odredbe o kriptografskim kontrolama</td><td>Kriptografske kontrole treba koristiti u skladu sa svim važećim sporazumima, zakonima i odredbama.</td>
		<td align="center" width=100><input type="text" id="821" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td rowspan=4 align="center" colspan=2 width=560>Za usklađivanje s važećim sporazumima, zakonima i odredbama potrebno je razmotriti sljedeće:</td>
    <td>Ograničenja uvoza i/ili izvoza računalnog hardvera i softvera za izvođenje kriptografskih funkcija</td>
		<td align="center" width=100><input type="text" id="822" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ograničenja uvoza i/ili izvoza računalnog hardvera i softvera projektiranog tako da sadrži dodatne kriptografske funkcije</td>
		<td align="center" width=100><input type="text" id="823" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Ograničenja uporabe kriptiranja</td>
		<td align="center" width=100><input type="text" id="824" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Prinudne ili slobodne načine pristupa hardverski ili softverski kriptiranim informacijama od strane nadležnih državnih institucija radi osiguranja povjerljivosti sadržaja</td>
		<td align="center" width=100><input type="text" id="825" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr class="aa"><td>15.2.</td><td colspan=4 align=center>Sukladnost sa sigurnosnim politikama i standardima i tehnička sukladnost</td></tr>
<tr class="alt"><td>15.2.1.</td><td>Sukladnost sa sigurnosnim politikama i standardima</td><td>Rukovoditelji trebaju osigurati ispravno provođenje svih sigurnosnih procedura unutar njihove odgovornosti radi postizanja sukladnosti sa sigurnosnim politikama i standardima.</td>
		<td align="center" width=100><input type="text" id="826" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=4 align="center" colspan=2 width=560>Rukovoditelji trebaju redovito provjeravati sukladnost obrade informacija unutar njihove odgovornosti s odgovarajućim sigurnosnim politikama, standardima i svim ostalim sigurnosnim zahtjevima. Ako rezultati provjere otkriju bilo kakvu nesukladnost, rukovoditelji trebaju:</td>
    <td>Odrediti uzroke nesukladnosti</td>
		<td align="center" width=100><input type="text" id="827" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Procijeniti potrebu za provođenjem akcija koje će osigurati da se nesukladnost ne ponovi</td>
		<td align="center" width=100><input type="text" id="828" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Odrediti i primijeniti odgovarajuće korektivne akcije</td>
		<td align="center" width=100><input type="text" id="829" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Provjeriti izvedene korektivne akcije</td>
		<td align="center" width=100><input type="text" id="830" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>15.2.2.</td><td>Provjera tehničke sukladnosti</td><td>Informacijske sustave treba redovito provjeravati kako bi se utvrdila sukladnost sa standardima o primjeni sigurnosti.</td>
		<td align="center" width=100><input type="text" id="831" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=3 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Provjeru tehničke sukladnosti treba ručno (uz podršku odgovarajućih softverskih alata, ako je potrebno) izvoditi iskusan sistemski inženjer i/ili uz pomoć automatiziranih alata koji generiraju tehničko izvješće koje će zatim tehnički stručnjak protumačiti.</td>
		<td align="center" width=100><input type="text" id="832" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Ako se koristi ispitivanje probojnosti ili procjena ranjivosti, potreban je oprez jer ovakve aktivnosti mogu dovesti do ugrožavanja sigurnosti sustava. Takve provjere trebaju biti planirane, dokumentirane i ponovljive.</td>
		<td align="center" width=100><input type="text" id="833" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Svaku provjeru tehničke sukladnosti trebaju izvoditi nadležne, ovlaštene osobe ili se treba izvoditi pod njihovim nadzorom.</td>
		<td align="center" width=100><input type="text" id="834" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="aa"><td>15.3.</td><td colspan=4 align=center>Razmatranja revizije informacijskih sustava</td></tr>
<tr class="alt"><td>15.3.1.</td><td>Kontrole revizije informacijskih sustava</td><td>Revizijski zahtjevi i aktivnosti koje uključuju provjere operativnih sustava trebaju se pažljivo planirati i dogovoriti radi smanjenja rizika od zastoja poslovnih procesa.</td>
		<td align="center" width=100><input type="text" id="835" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=9 align="center" colspan=2 width=560>Potrebno je razmotriti sljedeće smjernice:</td>
    <td>Revizijske zahtjeve je potrebno dogovoriti s odgovarajućom upravom</td>
		<td align="center" width=100><input type="text" id="836" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Potrebno je dogovoriti i kontrolirati opseg provjera</td>
		<td align="center" width=100><input type="text" id="837" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td>Provjere trebaju biti ograničene na pristup softveru i podacima samo radi čitanja</td>
		<td align="center" width=100><input type="text" id="838" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Drugačiji pristup osim čitanja treba dozvoliti samo na izoliranim kopijama sistemskih datoteka, koje je potrebno obrisati nakon završetka revizije ili ih treba na odgovarajući način zaštititi ako postoji obveza čuvanja takvih datoteka prema zahtjevima revizijske dokumentacije</td>
		<td align="center" width=100><input type="text" id="839" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je izričito odrediti i staviti na raspolaganje sredstva za izvođenje provjera</td>
		<td align="center" width=100><input type="text" id="840" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je odrediti i dogovoriti zahtjeve za dodatnu obradu</td>
		<td align="center" width=100><input type="text" id="841" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Svaki pristup treba nadzirati i zapisati da bi ostao referentni trag; kod ključnih podataka ili sustava treba razmotriti uporabu referentnih tragova s vremenskom oznakom</td>
		<td align="center" width=100><input type="text" id="842" size="6" onkeyup="provjera(this.id);"> %</td></tr>	
<tr><td>Potrebno je dokumentirati sve procedure, zahtjeve i odgovornosti</td>
		<td align="center" width=100><input type="text" id="843" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr><td>Osobe koje izvode reviziju trebaju biti nezavisne u odnosu na aktivnosti koji su predmet revizije</td>
		<td align="center" width=100><input type="text" id="844" size="6" onkeyup="provjera(this.id);"> %</td></tr>
<tr class="alt"><td>15.3.2.</td><td>Zaštita alata za reviziju informacijskih sustava</td><td>Pristup alatima za reviziju informacijskih sustava treba biti zaštićen radi sprječavanja zloporabe ili ugrožavanja.</td>
		<td align="center" width=100><input type="text" id="845" size="6" onkeyup="provjera(this.id);"> %</td></tr>		
<tr><td rowspan=1 align="center" colspan=2 width=560>Smjernice za primjenu:</td>
    <td>Alati za reviziju informacijskih sustava, primjerice softver ili datoteke podataka, trebaju biti odvojeni od razvojnih i operativnih sustava i ne treba ih držati u arhivama medija ili korisničkim prostorima, osim ako im nije pridijeljena odgovarajuća razina dodatne zaštite</td>
		<td align="center" width=100><input type="text" id="846" size="6" onkeyup="provjera(this.id);"> %</td></tr>
</table>


<input id="send" type="submit" value="Procjena" name="send">
<input id="send" type="reset" value="Reset" name="send">
<input id="send" value="Random" onclick="oznaci();">

</form>

	<div id="success" class="success" style="display: none;"><br><span id="pst"></span>
		<a href="1.php"><br>Povratak</a>
	</div>
</center>

</body>
</html>
