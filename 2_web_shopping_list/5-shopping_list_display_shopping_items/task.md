Zobrazení seznamu všech přidaných položek
=========================================

1. Položky už umíme přidávat, ale doposud jsme si je vypisovali pouze "vývojářsky" pomocí `var_dump()`, což může posloužit nám vývojářům, ale pro naše návštěvníky se takový výpis nehodí.
2. Nyní přejdeme k tomu, jak můžeme položky poměrně hezky vypsat do přehledné tabulky.
3. Tabulka může vypadat například následovně:
```
<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    <h2>Seznam položek</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Název</th>
            <th>Obchod</th>
            <th>Množství</th>
            <th>Cena</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>title</td>
                <td>store</td>
                <td>quantity</td>
                <td>price</td>
            </tr>
        </tbody>
    </table>
</div>
```
4. Tvým úkolem nyní bude použít cyklus ``foreach`` k tomu, abys z proměnné ``$_SESSION`` získala všechny položky nákupního seznamu, které zde máme uložené, a každou vypsala na řádek tabulky.
 - Jak na tabulky se můžeš podívat třeba tady https://www.w3schools.com/html/html_tables.asp
5. Podívej se (pomocí funkce `var_dump()`), v jaké struktuře máme v `$_SESSION` jednotlivé nákupní položky uložené.
  - Proměnná `$_SESSION` je pole, ve které máme klíč `shopping_list`.
  - Když se podíváš do `$_SESSION['shopping_list']`, zjistíš, že v ní je další pole (seznam), ve kterém už jsou jednotlivé položky nákupního seznamu.
  - Každá položka je jeden prvek pole a má vlastnosti `title`, `store`, `quantity` a `price`, které bychom chtěli vypsat.
