<?php
    session_start();
   $current_url = $_SERVER['REQUEST_URI'];
   $_SESSION['redirect_url'] = $current_url;
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="x-icon" href="../logo.png">
   <title>Mój Blog</title>
   <link rel="stylesheet" href="../font/css/fontello.css">
   <link rel="stylesheet" href="../css/bootstrap.min.css">
   <script src="https://cdn.jsdelivr.net/npm/markdown-it@12"></script>
   <style>
      body {
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         min-height: 100vh; 
         display: flex;
         flex-direction: column;
      }
      #logg {
         float: right;
         font-size: 15px
      }
      #do_logg {
         min-width: auto;
         background-color: #07475A;
         height: 50px;
         border-radius: 10px;
         color: #fff;
         display: flex;
         align-items: center;
         padding-left: 10px;
      }
      #login{
         color: red;
         padding-left: 380px
      }
      header {
         background-color: #07475A;
         color: #fff;
         padding: 1em;
      }

      main {
         max-width: 1000px;
         margin: 0 auto;
         padding: 20px;
         text-align: justify;
         flex-grow: 1;

      }
      footer {
         background-color: #07475A;
         color: #fff;
         text-align: center;
         padding: 1em;
      }
      img {
        width: 100%;
      }
      .left{
         float: left;
      }
      .left2{
         float: left;
         margin-top: 10px;
         float: right;
         margin-right: 50px;

      }
      .left2:hover{
         color: red;
      }
      h1{
         margin-left: 340px;
      }
      a {
         text-decoration: none;
         color: inherit;
      }

      a:hover {
         color: inherit; 
         text-decoration: none;
      }
      .coment {
         border-top: 1.5px solid #ccc;
      }
      h6 {
         font-weight: 700;
         font-size: 20px
      }
      #komentarz {
            width: 100%; 
            height: auto; 
            resize: none; 
            overflow: hidden;
            border-radius: 10px;
        }
      .clik {
         background-color: #fff;
         outline: none;
         border: none;
         color: 	#91d581;
      }
      #button{
         float: right;
         background-color: #0081CF;
         border-radius: 35%;
         color: white;
         min-width: 35px;
         text-align: center;
      }
      @media screen and (max-width: 1000px) {
         header {
            text-align: center;
         }
         .left {
            float: none;
            text-align: center;
         }
         h1 {
            margin-left: 0;
         }
         #login{
            padding-left: 80px
         }
      }
      

   </style>
</head>
<body>

   <header>
      
      <div class="left"> <a href="../index.php"><h1>Patryk Sarna</h1></a></div>
      <div class="left2"><a href="https://www.instagram.com/patryksarna_/" target="_blank"><i class="demo-icon icon-instagram"></i></a></div>
      <div class="left2"><a href="https://twitter.com/patryksarna_" target="_blank"><i class="demo-icon icon-twitter-1"></i></a></div>
      <div class="left2"><a href="https://www.linkedin.com/in/patryksarna/" target="_blank"><i class="demo-icon icon-linkedin"></i></a></div>
      <div style="clear: both;"></div>



   </header>

   <main>
        <h2>Świetny rok w wykonaniu Bitcoina! Czy hossa dopiero się zaczyna?</h2>
        <?php
        $name = 'Świetny rok w wykonaniu Bitcoina! Czy hossa dopiero się zaczyna?';
        $_SESSION['side_name'] = $name;
        ?>
        <span class="tekscik">      

            Ostatni rok był bardzo dobrym okresem dla Bitcoina (BTC) jak i wielu kryptowalut. Po zanotowaniu dołka 21 listopada 2022 roku na poziomie ok. 15,5 tys. USD, dzisiaj, rok później jego cena wynosi już ponad 40 tys. USD a my oficjalnie możemy mówić o nowej hossie.    <br>
            <img src="side1/jpg1.png"> <br>
            Czy takie wzrosty były do przewidzenia? Czy dało się wykorzystać ten ruch?<br><br>
            Patrząc jak cykliczne jest to aktywo z dużym prawdopodobieństwem można było wejść w niego właśnie w tym najlepszym okresie. Nie mówimy tutaj o złapaniu dołka, jednak o kupnie go w bardzo dobrej cenie.<br><br>
            Poniżej przedstawimy Wam kilka pozytywnych wydarzeń, które składają się na obecne wzrosty. <br>
            <h3>Halving</h3> <br>
            Aby wytłumaczyć Wam halving, musimy nieco szerzej spojrzeć na mechanizm podaży Bitcoina. Każdy górnik, którego komputer poprzez rozwiązanie skomplikowanego działania matematycznego zdoła dodać kolejny blok do łańcucha bloków (blockchain) nagradzany jest otrzymaniem określonej ilości BTC. Aby zapobiec nadmiernej podaży kryptowaluty (inflacji), twórca Bitcoina wbudował w niego mechanizm, który powoduje, że co 210 tys. „wykopanych” nowych bloków (czyli co ok. 4 lata) dochodzi do zmniejszenia tej nagrody o połowę. Taką sytuację określamy jako halving. I tak nagroda, która w momencie powstania kryptowaluty 2009 roku wynosiła aż 50 BTC, tak w kwietniu 2024 roku zostanie po raz kolejny zredukowana o połowę i wyniesie jedynie 3,125 BTC. <br>
            <img src="side1/jpg2.png"><br>
            Patrząc wstecz to właśnie oczekiwanie na to wydarzenie prowadziło do kolejnych wzrostów na Bitcoinie, a jego cykliczność powodowała występowanie powtarzających się schematów. Idealnie pokazuje to poniższa grafika, gdzie zaznaczone zostały okresy spadków, wzrostów, moment wystąpienia halvingu a także maksymalny spadek BTC podczas korekt. <br>
            <img src="side1/jpg3.png"><br>
            Jak widzicie Bitcoin zwykł rosnąć przed halvingiem, natomiast największe wzrosty przychodziły dopiero po nim. Mamy tutaj do czynienia z podobną długością bessy, niemal identyczną długością hossy a także dość przewidywalnym momentem odwrócenia trendu. <br><br>
            Biorąc to wszystko pod uwagę, nasze pierwsze zakupy BTC miały miejsce 24 listopada 2022 roku (cena ok. 16,5 tys. USD), o czym oczywiście byli informowani nasi subskrybenci.  Był to czas, kiedy zgodnie z cyklicznością (długością i rozmiarem spadków a także pozostałym czasem do wystąpienia halvingu) powinniśmy znajdować się w okolicach dołka. Dodatkowo na Bitcoinie panował bardzo negatywny sentyment ze względu na upadek giełdy FTX, a niemal wszystkie media na świecie przepowiadały dalsze spadki BTC do poziomów 10 tys. USD. <br>
            <img src="side1/jpg4.png"><br>
            Dla nas jednak był to doskonały sygnał do zakupów i jak pokazał czas, była to świetna decyzja. <br>
            <h3>Ograniczona podaż</h3> <br>
            Wspomniana powyżej cykliczność sprawia, że świadomi inwestorzy nie chcą pozbywać się swoich Bitcoinów. Doskonale wiedzą, że w przyszłym roku ma dojść do halvingu, a to jak już widzieliście wyżej historycznie wiązało się z dużymi wzrostami Bitcoina. Przypomnijmy, że maksymalna jego ilość w obiegu wyniesie 21 mln sztuk. Obecnie dostępnych jest nieco ponad 19,5 mln sztuk z czego ok. 20% (4 mln szt.) uznaje się za Bitcoiny zgubione, które nigdy nie wrócą do obiegu. Z ostatnich danych wynika, że blisko 15 mln z nich (76%) jest w posiadaniu inwestorów długoterminowych (Long Term Holders), czyli takich, którzy nie „ruszyli” swoich Bitcoinów od co najmniej 155 dni. Dodatkowo spośród pozostałych 24% jedynie ok. 12% znajduje się na giełdach kryptowalutowych a analitycy szacują, że tylko 5% ma być dostępna do zakupów. Pamiętajmy, że wciąż wiele osób używa giełd kryptowalutowych do przetrzymywania swoich aktywów. <br><br>

            Jak sami widzicie podaż jest mocno ograniczona co oznacza, że w momencie wzmożonego popytu cena Bitcoina może dość szybko rosnąć. Skąd mieliby pojawić się nowi kupujący? Na to pytanie postaramy się odpowiedzieć poniżej. <br>
            <h3>Spot Bitcoin ETF</h3> <br>
            Śmiało można zaryzykować stwierdzenie, że utworzenie Spot Bitcoin ETF jest chyba najważniejszym i najbardziej oczekiwanym z ostatnich wydarzeń w świecie kryptowalut. Przypomnijmy, że taki instrument pozwoli każdemu przeciętnemu inwestorowi zająć pozycję na Bitcoinie poprzez swoje konto u brokera. Co najważniejsze, „spot ETF” oznacza, że taki fundusz wykorzysta pozyskane środki i przeznaczy je na zakup „fizycznych” BTC a nie będzie inwestował ich poprzez derywaty. Efektem będzie napływ nowego kapitału, który nigdy nie miał dostępu do tego sektora czy to ze względu na regulację czy też przez wzgląd na obawy przed brakiem doświadczenia w handlu kryptowalutami. <br>

            Dlaczego jest to tak istotne? <br>

            Otóż w USA jest bardzo duże zainteresowanie Bitcoinem ze strony różnego rodzaju instytucji. Mówiąc konkretniej klienci czy to banków czy tradycyjnych funduszy widząc jak cyklicznie zachowuje się to aktywo domagają się instrumentu, który pozwoli zająć im pozycję na BTC i uczestniczyć w spodziewanych wzrostach po halvingu. Na ten moment mogą one jedynie handlować na kontraktach terminowych lub spółkach pośrednio powiązanych z kryptowalutami jak Coinbase czy Microstrategy. Spot ETF będzie dla nich prostym sposobem na zajęcie pozycji na Bitcoinie i to właśnie w nich upatruje się dużego kupca, który dostarczy świeży kapitał do tego sektora.  <br>

            Krótkie wyjaśnienie dla osób, które w ogóle nie śledzą kryptowalut. W czerwcu bieżącego roku szereg dużych emitentów ETFów jak BlackRock czy VanEck złożyło aplikację do SEC (Komisja Papierów Wartościowych i Giełd Stanów Zjednoczonych) o utworzenie takiego instrumentu. Poniżej lista wszystkich proponowanych ETF-ów czekających na zatwierdzenie. <br>
            <img src="side1/jpg5.png"><br> 
            Jak wynika z powyższej tabeli ostateczny termin decyzji dla wielu tych wniosków przypada na początek stycznia następnego roku, stąd też oczekuje się, że SEC wyda decyzję właśnie w tym terminie.  Jeśli decyzja będzie pozytywna to, najprawdopodobniej zostanie zatwierdzonych kilka z powyższych ETF-ów jednocześnie. <br>

            Czy są jakieś konkretne przesłanki za tym, że decyzja SEC będzie pozytywna? <br>

            Od momentu złożenia aplikacji, SEC kilkukrotnie wzywała przedstawicieli BlackRocka jak i Grayscale w celu wyjaśnień technicznych zagadnień takiego ETF-u. Według ekspertów jest to bardzo dobry znak. Spodziewają się oni, że faktycznie takie fundusze wystartują początkiem następnego roku. Jako ciekawostkę możemy dodać, że w przypadku BlackRock jedynie 1 z 576 ETF-ów nie został zatwierdzony ze względu na brak odpowiedniej przejrzystości w dokumentacji. <br>

            Dodatkowo internauci zauważyli jedną, wydaje się istotną zmianę w Google Ads. Do tej pory Google blokowało wszelkie reklamy związane z kryptowalutami. Jak można przeczytać na ich stronie, ma to ulec zmianie od 29 stycznia następnego roku. Z komunikatu dowiadujemy się, że ogłoszenia związane z „Cryptocurrency Coin Trust” zostaną dopuszczone, jeśli tylko spełnią określone kryteria. Jak Google definiuje Cryptocurrency Coin Trust? Chodzi o „produkty finansowe, które pozwalają inwestorowi na handel jednostkami funduszu, który posiada duże zasoby waluty cyfrowej”. <br>
            <img src="side1/jpg6.png"><br> 
            Brzmi to dość znajomo (od razu na myśl przychodzą wspomniane ETF-y) stąd też można pokusić się o stwierdzenie, że wielomiliardowe korporacje już w tym momencie przygotowują sobie grunt pod uruchomienie marketingu związanego z ich nowym produktem. <br>

            Należy tutaj wspomnieć, że Spot Bitcoin ETF-y już istnieją. Znaleźć je możemy m.in. na rynku kanadyjskim (BTCC.U), niemieckim (BTCE) a także szwajcarskim (ABTC). Dlaczego więc temat amerykańskich funduszy tak elektryzuje całą społeczność kryptowalut? <br>

            Otóż inwestorzy instytucjonalni w USA ograniczeni są szeregiem regulacji, które ściśle definiują aktywa w jakie mogą inwestować. Chodzi tutaj o rating danego instrumentu, płynność rynku, ryzyko i wiele innych. W takim wypadku, jeśli dany sektor nie posiada „błogosławieństwa” od SEC, to instytucje nawet pomimo tego, że technicznie mogłyby kupić taki ETF, to jednak nie decydują się na taki krok. <br>
            <h3>Wpływ uruchomienia ETF-u na przyszłą cenę BTC</h3> <br>
            Jeśli faktycznie ETF-y na Bitcoina wystartują to należy sobie zadać pytanie jaki wpływ może mieć to wydarzenie na cenę BTC.
            Aby dać Wam nieco szerszy obraz musimy spojrzeć na wielkość tego rynku w porównaniu do innych klas aktywów. Grafika może nie jest idealnie aktualna, jednak doskonale obrazuje to co chcemy Wam przekazać. <br>
            <img src="side1/jpg6.png"><br> 
            Aby być bardziej dokładnym, obecna kapitalizacja rynkowa BTC wynosi 840 mld USD. Jak zapewne pamiętacie z powyższego tekstu, dostępnych BTC, które można kupić jest jedynie 5%. Nawet jeśli weźmiemy pod uwagę, że jest to 10% to wciąż będzie to jedynie 84 mld USD. <br>

            Dlaczego o tym wspominamy? Chcemy uzmysłowić Wam, że wystarczy stosunkowo niewielki napływ kapitału, aby podwoić cenę BTC. Wystarczy, że spotkamy się z dużym popytem ze strony nowych inwestorów. <br>
            <h3>Czy my wykorzystaliśmy powyższe sygnały?  </h3> <br>
            Jak już wspomnieliśmy wcześniej, nasze pierwsze zakupy rozpoczęły się pod koniec listopada ubiegłego roku. Pozwoliło to również subskrybentom Portfela Tradera nabyć BTC, jak się okazuje z perspektywy czasu po świetnej cenie - 16,5 tys. USD. Abonenci otrzymali pełne uzasadnienie tego ruchu w nagraniu zatytułowanym „Wracamy do krypto”. W styczniu bieżącego roku, każdy kto zakupił kurs „Inteligentny Inwestor” dostał od nas w ramach aktualizacji nagranie „Jak rozegram kolejną hossę na krypto?”, w którym Trader21 opisał swoją strategię na cały rok 2023. W lutym natomiast na naszym kanale pojawiło się wideo „Dlaczego wracam na rynek krypto”. Warto przypomnieć, że był to okres, w którym Bitcoin wciąż wahał się średnio w okolicy ok. 22 tys. USD (obecnie 43 tys. USD). <br>
            <h3>Jak widzimy obecną sytuację na rynku kryptowalut?</h3> <br>
            Naszym zdaniem może wydarzyć się tutaj kilka scenariuszy.

            Scenariusz 1 <br>

            W związku z tym, że już doświadczyliśmy dużych wzrostów ceny Bitcoina, możemy zobaczyć pewne odreagowanie, a następnie duży wystrzał ceny ze względu na pozytywny news o zatwierdzeniu ETF-ów. <br>

            Scenariusz 2 <br>

            Jest to klasyczny scenariusz gry pod wydarzenie na rynku kryptowalut. Mówimy tutaj o czymś na zasadzie „kupuj plotki, sprzedawaj fakty”, czyli będziemy obserwować dalsze wzrosty, które wyhamują dopiero w okolicach końca roku, a następnie nastąpi korekta niezależnie od decyzji SEC. <br>

            W obu tych scenariuszach bierzemy pod uwagę to, że instytucje nie zakupiły jeszcze odpowiedniej ilości Bitcoina pod wystartowanie swoich funduszy, a korekta byłaby do tego świetną okazją. <br>

            Scenariusz 3 <br>

            SEC odracza bądź odrzuca wnioski o utworzenie Spot Bitcoin ETF i dochodzi do dużych spadków na rynku. <br>

            Według nas najbardziej prawdopodobny jest scenariusz nr 1, ale niezależnie od tego, który z nich się zmaterializuje jesteśmy pewni jednej rzeczy – za rok zobaczymy dużo wyższe ceny Bitcoina niż mamy obecnie. <br>

            Biorąc to pod uwagę dopuszczamy możliwość dokupienia kolejnej porcji kryptowalut, jeśli faktycznie dojdzie do korekty. <br>

            Pamiętajcie, że każdy z Was, kto nie posiada dostępu do giełdy kryptowalutowej, może wykorzystać ten ruch poprzez powyżej wspomniane już istniejące ETF-y. Jeśli my mielibyśmy użyć któryś z nich, byłby to kanadyjski BTCC.U. Mamy na myśli tutaj spekulacyjne zagranie pod newsa, gdyż jeśli faktycznie amerykańskie ETF-y wystartują z pewnością z czasem zabiorą one płynność innym mało znanym funduszom. Wtedy to one będą najlepszym wyborem. <br>

            Pamiętajcie, że rynek kryptowalut daje sporo zarobić, ale ceną za to jest duża zmienność tego aktywa. Mówimy tutaj zarówno o dużych wzrostach jak i sporych korektach pojawiających się po drodze. <br>

            Aby Wam to lepiej uzmysłowić, w hossie z 2017 roku doszło do 10 korekt, których średnia głębokość wynosiła 35,5% (najgłębsza korekta 42,9%) a średnia długość to 27,7 dni. <br>

            W 2021 roku doszło do 7 korekt o średniej głębokości 28,5% (najgłębsza 55%) i średnim czasie trwania 21 dni. <br>

            Co prawda napływ kapitału od instytucji może nieco uspokoić ten rynek jednak, aby dowieźć jak najlepszy wynik musimy być przygotowani również na spadki. <br>
            



            Independent Trader Team <br>

            

            P.S. <br>

            Zdajemy sobie sprawę, że część z Was rozważa wejście na rynek kryptowalut, ale nie chce tego robić bez podstawowej wiedzy. Dlatego też na Portfelu Tradera pojawił się mini-kurs wprowadzający nowe osoby na rynek. Składa się on z 4 nagrań: <br>

            1. Bitcoin - na czym polega jego wartość? <br>

            2. Skąd bierze się Bitcoin? <br>

            3. Czy bockchain to prawdziwa rewolucja? <br>

            4. Co, jeśli nie Bitcoin? Jakie mamy alternatywy? <br>

            Oczywiście w ramach Portfela Tradera otrzymujecie dostęp do wszystkich portfeli Tradera21, informacji o jego ruchach na giełdzie oraz gigantycznej bazy naszych materiałów - raportów specjalnych, analiz spółek, bieżących nagrań, newslettera "Capital Report" oraz działu Independent Crypto poświęconego wyłącznie kryptowalutom.  <br>

        </span>

        <br><br>

<?php
   if(isset($_SESSION['user']))
   {
      echo '<div class="coment">';
      echo '<h6>Komentarze: <a href="../loggin/loggout.php" id="logg">'.$_SESSION['user'].' Wyloguj się</a></h6>';
echo<<<END
         <form action="../loggin/komentowanie.php" method="post">
         <div>
            <button type="button" onclick="insertText('**', '**')" style="font-weight: bolder;" class="clik">B</button>
            <button type="button" onclick="insertText('_', '_')" style="font-style: oblique;" class="clik">I</button>
            <button type="button" onclick="insertText('`', '`')" class="clik">&#60;/&#62;</button>
            <span style="border-right: 1.5px solid #ccc;"></span>
            <button type="button" onclick="insertText('[Tekst alternatywny](Adres URL)', '')" class="clik">&#x1F517;</button>
            <button type="button" onclick="insertText('![Tekst alternatywny](Adres URL obrazu)', '')" class="clik">&#x1F4F7;</button>
         </div>
            <textarea id="komentarz" name="komentarz"  required placeholder="Napisz komentarz"></textarea> <br>
            <input type="submit" value="&#10003;" id="button" class="clik"> <br> <br> </div>
END;
   }
else
{
echo<<<END
   <div class="coment">
   <h6>Komentarze:</h6>
   </div>
   <div id="do_logg">
   Możliwość komentowania tylko dla zalogowanych &nbsp;&nbsp;<span id="login"><a href="../loggin/login.php">Zaloguj sie</a> / <a href="../loggin/regist.php">Zarejestuj się</a></span>
   </div>
END;
}
?>
               <script>
                  function insertText(startTag, endTag) {
                     const commentField = document.getElementById('komentarz');
                     const startPos = commentField.selectionStart;
                     const endPos = commentField.selectionEnd;
                     const selectedText = commentField.value.substring(startPos, endPos);
                     const replacement = startTag + selectedText + endTag;
                     commentField.value = commentField.value.substring(0, startPos) + replacement + commentField.value.substring(endPos);
                     commentField.focus();
                     commentField.setSelectionRange(startPos + startTag.length, startPos + startTag.length + selectedText.length);}
               </script>
               <script>
                  function dostosujWysokosc() {
                     var textarea = document.getElementById('komentarz');
                     textarea.style.height = 'auto';
                     textarea.style.height = (textarea.scrollHeight) + 'px';
                  }
                  document.getElementById('komentarz').addEventListener('input', dostosujWysokosc);
                  dostosujWysokosc();
               </script>
            </form>
        </div>
   </main>
   <script>
      function getCurrentUrl() {
          return window.location.href;
      }
  

      function generateFacebookShareLink() {
          var currentUrl = getCurrentUrl();
  
 
          var facebookShareUrl = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(currentUrl);
          var linkedinShareUrl = 'https://www.linkedin.com/shareArticle?url=' + encodeURIComponent(currentUrl);
          var twitterShareUrl = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(currentUrl);

          document.getElementById('shareLinkfb').href = facebookShareUrl;
          document.getElementById('shareLinktw').href = twitterShareUrl;
          document.getElementById('shareLinkin').href = linkedinShareUrl;
      }

      window.onload = generateFacebookShareLink;
  </script>


   <footer>
    <i class="demo-icon icon-link"></i> Poleć ten artykuł <a id="shareLinktw" href="#" target="_blank"><i class="demo-icon icon-twitter-circled"></i></a> <a id="shareLinkfb" href="#" target="_blank"><i class="demo-icon icon-facebook-circled"></i></a> <a id="shareLinkin" href="#" target="_blank"><i class="demo-icon icon-linkedin-circled"></i></a> 
   </footer>




   <script>
      document.addEventListener("DOMContentLoaded", function () {
        function handleResize() {
          var screenWidth =
            window.innerWidth ||
            document.documentElement.clientWidth ||
            document.body.clientWidth;
    
          
          var maxWidthForRemoval = 1000;
    
          
          var dataElements = document.querySelectorAll('.data');
          var iconElements = document.querySelectorAll('.demo-icon');
    
          if (screenWidth <= maxWidthForRemoval) {
           
            dataElements.forEach(function (element) {
              element.style.display = 'none';
            });
    
            iconElements.forEach(function (element) {
              element.style.display = 'none';
            });
          } else {
           
            dataElements.forEach(function (element) {
              element.style.display = 'inline'; 
            });
    
            iconElements.forEach(function (element) {
              element.style.display = 'inline'; 
            });
          }
        }
    
        
        handleResize();
    
        
        window.addEventListener('resize', function () {
          handleResize();
        });
      });
    </script>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
