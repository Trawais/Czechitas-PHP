Výpis pracovních zkušeností
===========================================

## Úvod
V této částo se zaměříme na procvičení polí, cyklů a podmínek.

## Úkol
1. Prvním úkolem bude vytvořit pole `$workExperiences` obsahující všechny moje pracovní zkušenosti.
To znamená vytvořit pole, skládající se z položek typu `stringu`.
2. Každá z těchto položek bude nějaká pracovní zkušenost.
Takové pracovní zkušenosti si vytvořte minimálně tři.
3. V části **Pracovní zkušenosti** si tyto pracovní zkušenosti jednu po druhé vypíšeme pomocí cyklu `for` nebo `foreach`.
Místo staticky vypsaného HTML kódu tedy vytvoříme cyklus,
který bude procházet jednotlivé položky z pole `$workExperiences` a bude je vypisovat.
4. Pokud máte hotovo, rozšíříme si výpis o počet let, které jsme v dané firmě pracovali.
5. Nejprve musíme rozšířit pole `$workExperiences` o údaj počtu roků.
Jednorozměrné pole musíme předělat na dvourozměrné pole,
kde klíč bude název firmy a hodnota bude počet let.
```
[
    "nazev firmy" => 3
]
```
6. Nyní už můžeme upravit výpis tak,
aby jsme ho rozšířili i o výpis délky zkušenosti.
Z každé položky nového pole se získá firma a počet let strávených v této firmě.
Tyto informace spojte do formátu `{{firma}} - {{počet roků}} let` a vložte mezi tagy `<li></li>` a vypište je.

## Bonus
1. Nyní máme pěkně vypsané všechny pracovní zkušenosti.
Pokud by jste chtěli nějakou další přidat,
nebo nějakou smazat,
stačí jednoduše upravit pole a vše se automaticky upraví.
Bohužel ale samotné formátování textu,
konkrétně roky,
není zrovna hezké.
Přeci jen,
čeština trochu nebo i více mění tvar slova `rok` pro daný počet.
Proto i my by jsme měli tuto skutečnost reflektovat na našich stránkách.
1. Vaším úkolem nyní bude pomocí podmínek správně zobrazovat slovo rok za každým počtem (např. 1 rok, 3 roky, 5 let).
Vytvořte podmínku,
která správně vybere toto slovo,
přířadí do proměnné `$years` a touto proměnnou nahraďte slovo let.
