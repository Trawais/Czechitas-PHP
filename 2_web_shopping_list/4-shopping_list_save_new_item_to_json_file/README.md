Uložení přidané položky do Souboru
==================================

1. Teď zpracujeme náš formulář a uložíme zadané hodnoty do souboru, aby bylo možné s nimi později pracovat. Soubor na disku je jednou z možností, jak uchovat různá data (např. hodnoty formuláře odeslané uživatelem) pro další zpracování.
2. Pojďme si tedy uložení do souboru vyzkoušet. V jednom z předešlých úkolů jsme vytvořili funci `loadData()` pro načtení dat ze souboru ve formátu JSON. JSON je často používaný formát na webu:  Viz https://www.w3schools.com/js/js_json_intro.asp. Tato funkce se nám nyní bude hodit.
3. Funkce `loadData` využívá `file_get_contents($fileName)` (http://php.net/manual/en/function.file-get-contents.php) pro načtení obsahu souboru a provádí převedení z formátu JSON do pole, k čemuž slouží funkce `json_decode($json, true)` (http://php.net/manual/en/function.json-decode.php).
4. Možná už máš vytvořenou i funkci `saveData()`, v případě, že ne. Pojďme ji vytvořit. Funkce `saveData()` bude plnit přesně opačný účel, než `loadData()`. Od funkce očekáváme, že uloží do určitého souboru obsah (data) ve formátu JSON, která funkci předáme. Funkce bude přijímat dva vstupní parametry - název souboru a nový obsah souboru.
5. Jakmile máme funkci hotovou, potřebujeme ji "zavolat", předat ji název souboru jako řetězec a pak hodnoty formuláře, které uživatel odeslal metodou `POST`.
6. Na závěr si můžeme obsah souboru vypsat pomocí `loadData()` ať vidíme, co jsme do souboru uložili.
7. V našem editoru můžeš soubor najít a podívat se, jak vypadá. Měla bys v něm vidět poslední uložené hodnoty, které jsi do formuláře zadala.
