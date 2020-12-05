Dynamické změny obsahu na webu a použití funkcí
===============================================

## Úvod
Ukážeme si praktické použití funkcí pro vytvoření prvního dynamického obsahu.

## Úkol
1. Vytvoříme si soubor **functions.php**,
do kterého si budeme vkládat všechny funkce,
které budeme nadále používat na našem webu.
Tento soubor si připojíme do našeho hlavního souboru **index.php** pomocí příkazu `include_once`.
2. Vytvoříme funkci `getWebTitle()`,
která nedělá nic jiného,
než že nám vrací název našeho webu.
3. Nyní,
když máme vytvořenou tuto funkci,
nahradíme staticky definovaný text ve všech částech webu pomocí této funkce.
Výskyt takového textu můžeme najít v souborech **header.php**,  **head.php**, **footer.php** a **menu.php**.

## Bonus
4. Jak jste si mohli všimnout,
v souboru **footer.php** máme ještě staticky napsaný rok.
Ten se ale každý rok mění, že? :-)
Proto by bylo dobré psaní aktuálního roku nechat na serveru.
Vytvořte tedy v souboru **functions.php** novou funkci `getYear()`,
která bude vracet aktuální rok k dnešnímu dni.
_Aktuální rok můžete získát pomocí zavolání funkce `date('Y')`_.
Tuto funkci poté použijte v soubrou **footer.php**.
