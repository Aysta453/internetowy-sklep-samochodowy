# <p align="center"> Projekt i wykonanie strony internetowej salonu samochodowego z użyciem bazy danych Oracle.</p>
## <p align="center"> Wstęp</p>

<p align="center"> Strona przedstawia ogólny wygląd, salonu samochodowego „Aysta”.
Jest w nim zawarte ogólny opis firmy, gdzie się znajduje, przedstawienie nam swoich usług, przegląd informacji na temat samochodów, przegląd strony sklepu internetowego, produktów oraz zakup.
</p>
<p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012065-f723b480-b350-11eb-9647-b99f3aee26ff.png">
</p>

## <p align="center">Technologie</p>

Technologie które zostały zastosowane w projekcie:

* -Bootstrap/HTML/CSS
*	-Javascript/JQuery
*	-PHP polaczony za pomocą OCI8
*	-PHPMailer


 ## <p align="center">Opis działania</p>

<p align="center">Strona główna to opis firmy, formularz kontaktowy który umożliwia nam kontakt mailowy z administracją strony. Kopia wiadomości która została wysłana, zostanie nam doręczona drogą mailową. </p>

<p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012134-09055780-b351-11eb-872a-922cf6cb3b16.png">
  <img src="https://user-images.githubusercontent.com/58811103/118012095-ff7bef80-b350-11eb-8382-c9247e8aa204.png">
</p>



<p align="center">Ze strony głównej możemy się dostać na kilka różnych podstron. Każda z nich przenosi w konkretne miejsce.</p>

<p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012180-128ebf80-b351-11eb-9ae9-8a65b1425322.png">
</p>

 
<p align="center">Marki to jest menu, które umożliwia nam przejście w konkretny rodzaj samochodów a konkretnie ich pochodzenie.</p>
 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012204-1884a080-b351-11eb-97f8-d0d8bc1bc162.png">
</p>  

<p align="center">Kolejna z nich to rejestracja użytkownika, umożliwia założyć odpowiednie konto do korzystania do zakupu z sklepu internetowego. Są tu bardzo ważne dane, które zanim zostaną zapisane w bazie danych zostają sprawdzone czy nie są puste bądź czy mają odpowiednią długość. Niektóre z nich służą potem do logowania się przy potwierdzeniu zakupu.</p>

 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012233-1fabae80-b351-11eb-99c4-07b44fe3ad95.png">
 <img src="https://user-images.githubusercontent.com/58811103/118012269-29351680-b351-11eb-94e4-36cafe319b18.png">
</p>

<p align="center">Sama strona główna przedstawia opis czym się zajmuje ta firma jak i gdzie można ją znaleźć bądź niżej skontaktować się drogą mailową za pomocą formularza kontaktowego.</p>


 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012384-4538b800-b351-11eb-90f9-d0a846dca86a.png">
</p>

<p align="center"> Po założenia konta możemy przystąpić do przeglądu sklepi. Zostaje przedstawione kilka wariantów produktów, którymi może jesteśmy zainteresowani. Przedstawia obraz, markę model oraz cenę danego samochodu. Po kliknięciu na dany samochód. zostaniemy przekierowani na strona danego produktu.
</p>
 

<p align="center">Na górze każdej strony zostały przyczepione, przejścia by nas zaprowadziły na konkretny element. który nas interesuje, bądź w sposób normalny przesuwać kółkiem myszki, suwakiem.</p>
<p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012491-6a2d2b00-b351-11eb-8649-d5874283ac84.png">
 <img src="https://user-images.githubusercontent.com/58811103/118012529-731dfc80-b351-11eb-9588-9a825cdf340c.png">
</p>

<p align="center"> Klient ma jeszcze możliwość powrotu, zmienienia danego wariantu bądź potwierdzenia zakupu. Zostanie wysłany odpowiedni e-mail na pocztę klienta potwierdzający zakup. Wtedy dany produkt, który został już sprzedany w serwisie, zostanie wyłączony z obiegu do ponownego zakupu.  </p>

<p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012513-6e594880-b351-11eb-8854-e0bf07937a66.png">
 
</p>


<p align="center">Kwota oraz Typ transakcji to umożliwia nam jaką zaliczkę zamiar wpłacić i w jaki sposób mamy zamiar zapłacić.</p>



<p align="center"> A jeśli nie jesteśmy zainteresowani możemy zawsze wrócić do sklepu, przyciskiem poniżej.  </p>
<p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012563-7e712800-b351-11eb-9d5f-cb1b3aa1cda9.png">
 <img src="https://user-images.githubusercontent.com/58811103/118012588-84ff9f80-b351-11eb-8ee5-d210fbb67d2e.png">
</p>


<p align="center"> Na kolejnej stronię zostaną wyświetlone wszystkie dane które zostały przez nas wybrane oraz pełna konfiguracja, nasze dane osobowe. 
Oczywiście możemy wrócić do sklepu, bądź produktu żeby cos zmienić ale gdy jesteśmy pewni możemy już potwierdzić zakup.</p>


 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012618-8c26ad80-b351-11eb-8624-20c002750c4f.png">
</p>

 <p align="center">
Została nam ukazana strona końcowa, gdzie jest potwierdzenie prawidłowego zakupienia samochodu. Po naciśnięciu przycisku, dzięki, któremu możemy wrócić do strony głównej mail z potwierdzeniem zakupu samochodu o danej konfiguracji.  Przy okazji została wygenerowana nasza tablica rejestracyjna na podstawie miejscowości, w której jesteśmy zameldowani, która podaliśmy przy rejestracji gdzie jej pierwsze litery oraz 5 losowych liczb tworzy nasza tablice, oczywiście jeśli akurat pierwsza wygenerowana tablica jest zajęta, system ponawia próbę utworzenia tablicy rejestracyjnej.
  </p>
 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012649-934dbb80-b351-11eb-9477-4faf0a856348.png">
  <img src="https://user-images.githubusercontent.com/58811103/118012836-c1cb9680-b351-11eb-83ed-d505f9f42157.png">
</p>

 <p align="center">
Została nam jedna zakładka Admin, gdzie możemy a raczej admin sprawdzić i ewentualnie dodać jakieś dane.
  </p>
  <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012671-9b0d6000-b351-11eb-8b86-fe31ec9c8f7d.png">
</p> 
  <p align="center">
Aby się zalogować należy wpisać prawidłowe dane do formularza logowania.
    </p>
 
 <p align="center">
Ukazuje się menu gdzie możemy wyświetlić wszystkie odpowiednie tabele które akurat znajdują się w bazie danych. 
  </p>


 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012709-a2cd0480-b351-11eb-87f6-8cf9aee37e2e.png">
</p> 
 <p align="center">

 po naciśnięciu nagłówka odpowiedniego dla nas zostaną wyświetlone wszystkie dane w danej tablicy, niektóre dane z tablic podłączonych. w przypadku modeli jest to nazwa marki z tablicy marek.
  </p>
 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012875-ce4fef00-b351-11eb-8317-912b5c44092f.png">
</p> 
  <p align="center">
W tabeli Historii oraz Rejestracje można zauważyć wszystkie rejestracje aktualnie które były przepisane do samochodów bądź które są przypisane.
 </p>
 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118012903-d740c080-b351-11eb-976e-22b3d3f00316.png">
 <img src="https://user-images.githubusercontent.com/58811103/118012914-da3bb100-b351-11eb-993d-3f63eeb56fd1.png">
 <img src="https://user-images.githubusercontent.com/58811103/118012932-df98fb80-b351-11eb-9c94-e8873f689a4a.png">
 <img src="https://user-images.githubusercontent.com/58811103/118012954-e4f64600-b351-11eb-8833-711efbf137c2.png">
 <img src="https://user-images.githubusercontent.com/58811103/118012970-ea539080-b351-11eb-901b-74352ea048d4.png">
 <img src="https://user-images.githubusercontent.com/58811103/118012992-f2133500-b351-11eb-940a-6bd02b89ea97.png">
</p> 
 <p align="center">
Serwis zarazem wyświetla czy danemu użytkownika należy się sfinansowanie bądź zwrócenie kosztów za korzystanie z naszego serwisu.
</p>
<p align="center">
Niektóre tablice umożliwia nam tworzenie takich danych jak kolory, silniki, modele, dzięki którym możemy dodać realny samochód, który zamierzamy sprzedać, bądź ktoś nam to zgłasza. Oczywiście nie można dodać tych samych danych w tablicach. Dany pojazd jest jeden więc jeśli dana osoba go zakupi potem nie będzie możliwości sprzedania go powtórnie.
</p>

## <p align="center"> Krótki opis danych technologii: </p>

*	Bootstrap – za pomocą HTML został utworzony główny szkielet strony. CSS został wykorzystany w celu stworzenia odpowiedniego wyglądu danych elementów, wyglądu danej czcionki bądź obramowania. Bootstrap umożliwił wykorzystanie gotowych szablonów jak i rozwiązań na wykonanie wyglądu stron internetowych. Za pomocą gotowych styli utworzonych przez programistów, strony zostały upiększone, pozwoliły na dokładniejszy design całego projektu jak i oprawa formularzy, zdjęć.
*	Javascript/JQuery- za jego pomocą było można zdefiniować niektóre elementy, by strona wyglądała na bardziej żywą, zmieniały się niektóre elementy, bądź przewijały. 
*	PHP – był odpowiedzialny za całym sterowaniem projektu od strony niewidzialnej dla użytkownika, umożliwił na kontaktowanie się z bazą danych na pobieranie z niej danych jak i dodawanie, zmienianie.
*	PHPMailer – umożliwił na wysyłanie e-mailów z formularza kontaktowego jak i potwierdzenia zakupu. Dzięki tej technologii strona pozostała bardziej interaktywna z użytkownikiem/klientem, by miał podgląd na sytuację, które były z nim związane.

## <p align="center">Podsumowanie </p>

 <p align="center">Strona została stworzona dla klientów, zainteresowanych kupienia egzotycznych samochód i nie tylko. Każdy klient na spokojnie może przejrzeć oferty firmy, dokonać wyboru czy jest zainteresowany daną ofertą. </p>
 <p align="center">Strona ma zamiar umożliwić zakup samochodów dostępnych w określonej ilości jak i tych które są ciężko dostępne. Samochody dostępne są używane bądź nowe. Jest to także szybszy sposób który umożliwia adminowi na przeglądanie danych za pomocą strony internetowej. </p>

## <p align="center">Struktura Tablicy </p>

 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118013035-fb9c9d00-b351-11eb-8ca3-e04e54ad981c.png">
</p>

## <p align="center">Niektóre procedury/funkcje z Oracle Sql Developer </p>

## <p align="center">Funkcja odpowiadająca za sprawdzenie czy warto przydzielić dofinansowanie</p>

 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118013079-03f4d800-b352-11eb-8867-35942f98cb59.png">
</p>

## <p align="center"> Procedura wprowadzająca dane</p>

 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118013095-06efc880-b352-11eb-8ba9-791b7a6eed99.png">
</p>

## <p align="center"> Procedura wyświetlająca dane</p>

 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118013110-0bb47c80-b352-11eb-88b8-17c28c5a109e.png">
</p>

## <p align="center"> Procedura odpowiadająca za tablice rejestracyjne </p>

 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118013126-11aa5d80-b352-11eb-9ea5-664d42dc1490.png">
</p>

## <p align="center">Automatyczne generowanie sklepu za pomocą PHP o wymaganej ilości produktów na stronę oraz przykładowy kod PHP <p> 
 
 <p align="center">
 <img src="https://user-images.githubusercontent.com/58811103/118013143-17a03e80-b352-11eb-9f93-46d2ebb0a822.png">
 <img src="https://user-images.githubusercontent.com/58811103/118013160-1c64f280-b352-11eb-9cb2-850552e38940.png">
</p>

