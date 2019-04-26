Uložení přidané položky do SESSION
==================================

1. Teď se podíváme na jeden koncept, který se v PHP hodně používá - ``Sessions``.
 - Sessions se překládá jako "sezení", čili takové povídání mezi prohlížečem návštěvník a webovou stránkou.
2. Sessions si můžeš představit jako **soubor, který obsahuje data společná pro prohlížeč nějakého konkrétního uživatele** (třeba Firefox, Internet Explorer či Google Chrome) **a náš server, na kterém je vykonávána naše webová stránka**.
 - Sessions je společný pro jednoho uživatele a jeho prohlížeč, můžeme říct třeba "Alenku", a pro naši webovou stránku, které můžeme říkat třeba "Cool Nákupní seznam".
 - Pokud bude "Alenka" prohlížet náš "Cool Nákupní seznam", bude mít vlastní Session soubor. V případě, že na naši stránku příjde její kamarádka "Klára", bude mít vlastní Session soubor.
 - My vývojáři můžeme Sessions využít tak, že si budeme do Sessions ukládat nějaké hodnoty, které si chceme o "Alence" pro náš "Cool Nákupní seznam" pamatovat v rámci její návštěvy.
 - Dává to trošku smysl? Podívejme se, jak na Sessions v PHP.
3. Sessions jsou v PHP podobně jako `$_GET` nebo `$_POST` přístupná pomocí pole. Tedy `$_SESSION`.
 - Jako vývojářka se nemusíš starat o to, aby se Sessions ukládaly, to zajistí PHP za Tebe.
 - Abys mohla se Sessions ve své webové stránce nějak pracovat potřebuješ je "nastartovat". Nastartování se dělá zavoláním funkce `session_start()` a to ideálně hned na začátku webové stránky.
 - Tím bude PHP vědět, že chceš Sessions používat a připraví Ti do `$_SESSION`` hodnoty, které tam byly předtím uloženy.
 - Do Sessions můžeš zapisovat stejně jako do jakéhokoliv jiného pole. Např. ``$_SESSION['my_name'] = 'Jane Doe';``
 - Stejně tak můžeš ze Sessions hodnoty číst a vypisovat. Např. ``echo $_SESSION['my_name'];``
4. Pojďme si Sessions vyzkoušet. Tvůj úkol bude rozšířit Tvoji webovou stránku tak, aby se v případě, že je odeslán formulář, hodnoty z formuláře uložily do SESSION.
5. Díky tomu, že si hodnoty uložíme, je nyní můžeme vypsat. Zatím to uděláme jednoduše pomocí funkce `var_dump()`.
6. Náš nákupní seznam budeme ukládat do globální proměnné `$_SESSION` pod klíčem `shopping_list`.
7. Nejprve tedy musíme zajistit, že tento klíč bude v `$_SESSION` existovat a bude pro začátek nastaven na prázdné pole.
8. Potom už můžeme lehce do tohoto pole ukládat jednotlivé položky našeho seznamu. A kdo si pamatuje, jak se přidávají položky do pole?
