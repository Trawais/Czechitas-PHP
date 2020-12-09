Zatajení odeslaných dat pomocí POST
===================================

1. Pokud data z formuláře posíláme pomocí metody `GET`, každý, kdo má přístup k naší histori, by mohl vidět, co jsme takto posílali.
To může být pro některá data veliký problém. Máme ale pro to řešení.
2. Přepiš odesílání a zpracování formuláře tak, aby se místo metody `GET` používala metoda `POST`.
3. Nezapomeň, že bude třeba kód upravit na několia místech. Dokážeš najít všechna správně?
4. Odeslané hodnoty z formuláře už nebodou vrácena v poli `$_GET`, ale analogicky obdobně v poli `$_POST`.
