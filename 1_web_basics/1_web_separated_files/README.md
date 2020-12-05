První krok k vlastní webové stránce
===========================================

## Úvod
Máme připravenou základní HTML stránku webu,
ze které budeme vycházet a kterou budeme celý den dále upravovat.
Vysvětlíme si a ukážeme si některé základní myšlenky, jak psát dynamický web.
V základním souboru index.php je prozatím pouze HTML a CSS.
To nám vytvoří základní kostru a navíc bude web i hezky vypadat.
Soubor ale nemá koncovku `.html`,
jak by tomu mohlo mít.
Dali jsme mu rovnou koncovku `.php`,
aby po provedení změny už webový server věděl,
že případný PHP kód má zpracovat a interpretovat.

Na začátek se podíváme na užitečný kousek kódu.
Abychom viděli případné chybové výpisy,
které se nám mohou během vývoje hodit,
potřebujeme do stránky na první řádky uvést několik příkazů.
Konkrétně tyto:
```
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
```
 - Jedná se o zavolání funkce "`ini_set()`", pomocí které nastavíme proměnnou `display_errors` na hodnotu `1`,
 což znamená,
 že chceme zobrazovat chyby.
 - Obdobně zavoláme `ini_set()` funci i pro nastavení proměnné `display_startup_errors` na hodnotu `1`.
 - A na závěr provoláme funkci `error_reporting()` s konstantou `E_ALL`,
 což je další funkce,
 kterou PHP řekneme,
 že chceme vidět všechny chyby,
 které by se případně mohly stát.
 - Pro vývoj jsou tato nastavení velmi šikovná,
 kdybychom ale naši stránku chtěli posléze ukázat ostatním návštěvníkům,
 je bezpečnější chyby nezobrazovat.

## Úkol
1. Prvním úkolem tedy bude tyto řádky přidat do našeho výchozího souboru.
2. Následně si vysvěltíme a ukážeme,
jak by měl být kód rozvržený,
aby jste si do budoucna ušetřily práci a nemuseli některé části stále dokola opakovat.
3. Každá stránka by mohla být vytvořena zvlášť,
ale bylo by zbytečné kopírování a opakování kódu.
Proto opakující se části stránky rozdělíme do samostatných souborů.
Tyto soubory následně připojíme do naší stránky pomocí příkazu `include_once()`.
4. Pro ukázku si přesuneme první část kódu,
která se bude na každé stránce opakovat,
do samostatného souboru.
Touto částí je tag `<header>` i s jeho obsahem.
Bude vždy na každé stránce,
proto nám nic nebrání v tom ho přesunout
do souboru `header.php` a tento soubor potom připojit v odpovídajícím místě.
5. Prozkoumejte i další soubory, které se ve výchozím souboru vkládají.
Kolik jste jich našli a které HTML elementy jsou v nich uloženy?
