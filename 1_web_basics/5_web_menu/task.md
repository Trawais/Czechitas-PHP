Úprava menu pro jednoduchou rozšiřitelnost do budoucna
===========================================

## Úvod
Jak to často na webu bývá,
struktura se často mění a přibývají nové stránky.
Na druhou stranu se také stránky ruší.
Pokud se toto dotkne i položek v menu,
je potřeba mít možnost toto rychle upravit.
Aktuálně je menu staticky nadefinované a pro rozsáhlejší menu by úpravy mohly být složitější nebo zdlouhavé.

## Úkol
1. Nyní si ukážeme jednoduchou úpravu menu a vytvoříme dvě funkce pro výpis.
Pracovat budeme se soubory **menu.php** a **functions.php**.
2. V souboru **menu.php** si vytvoříme pole s jednotlivými položkami menu.
Každá tato položka bude obsahovat informaci o souboru,
na který se odkaz bude odkazovat,
a název položky v menu.
Vytvoříme tedy pole `$pages` s těmito položkami:
```
$pages = [
    'index' => 'Domů',
    'shopping_list' => 'Nákupní seznam',
    'stores_management' => 'Obchody',
    'facebook' => 'Facebook profil'
];
```
3. Nyní použijme nadefinované pole `$pages` pro vygenerovaní samotného menu.
4. Jelikož se jedná o poměrně delší kus kódu,
je vhodné takový kód zapouzdřit do nové funkce a tedy přesunout do souboru **functions.php**.
Nově vzniklou funkci nazvěme `getMenu()` a rovnou ji použijme v souboru **menu.php**.

## Bonus
1. Jakožto praví programátoři se ale s výslednou funkcí `getMenu()` nemůžeme jen tak spokojit.
Tato funkce sama o sobě stále provádí dvě logicky různé věci: prochází položky menu a generuje samotné jednotlivé odkazy.
Zkusme si tedy samotné sestavování `<a href...` elementu vyseparovat do další malé funkce s názvem `createMenuItem()`.
2. Tuto funkci potom použijeme ve funkci `getMenu()` na vhodném místě.
