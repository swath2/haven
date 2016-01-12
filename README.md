# Haven
Návod

## Programy k instalaci

* Laragon (https://laragon.org/)
* Git (https://git-scm.com/downloads)
* GitHub Desktop (https://desktop.github.com/)
* PhpStorm (https://www.jetbrains.com/phpstorm/)

## Nastavení

- Nainstalovat Laragon, nejlíp do složky třeba C:\Laragon
- Nainstalovat Git a GitHub Desktop
- Otevřít GitHub Desktop, přihlásit se pod svým účtem
- Vytvořit si GitHub účet na webu a přihlásit se
- Otevřít tenhle repozitář v prohlížeči: https://github.com/VanNiewelt/haven
- Kliknout na tlačítko "fork"
- Kliknout na "clone in Desktop". Měla by se otevřít aplikace GitHub Desktop.
- Vybrat, kam naklonovat repozitář; nejlíp do složky C:\Laragon\www. Vytvoří se vám tam podsložka "haven"

- Nainstalovat a spustit PhpStorm
- Kliknout "File" > "Create new project from existing files"
- Vybrat první možnost "Web server is installed locally, source files are located under its document root"
- V dalším kroku najít složku, ve který je naklonovaný projekt, tj. "C:\Laragon\www\haven". Vybrat složku a kliknout na "project root", tím se nastaví jako kořenová složka projektu
- V dalším kroku nastavit "Name" třeba na "Haven" a "Web server root URL" "nechat na http://localhost/" (bez uvozovek, Matěji)
- V dalším kroku nastavit "Web path" na "haven/public" (taky bez uvozovek)

- Spustit Laragon
- Kliknout na tlačítko "start" vlevo dole. Aplikace by se měla zeptat na autorský práva, tak jí to povolte.
- Když pak otevřete v prohlížeči adresu "haven.dev", tak by se měla otevřít stránka s nápisem "Laravel 5". Pokud ne, zkuste adresu "localhost/haven/public"

### Dodatečné nastavení PhpStormu:

#### Nastavení AltGr
Ve výchozím nastavení v něm nefungují klávesové zkratky s pravým altem jako ve zkurveném atomu, takže je třeba upravit nastavení, aby to šlo.

- Otevřít nějaký textový edior s administrátorskými právy, třeba poznámkový blok (kliknout pravým tlačítkem a vybrat "spustit jako správce")
- Otevřít soubor "C:\Program Files (x86)\JetBrains\PhpStorm (vaše verze)\bin\idea.properties"
- Přidat nakonec souboru řádek "actionSystem.force.alt.gr=true"

#### Nastavení Laravelu pro PhpStorm
Nastavení doplňků pro zvýrazňování syntaxe atd.
http://blog.jetbrains.com/phpstorm/2015/01/laravel-development-using-phpstorm/
