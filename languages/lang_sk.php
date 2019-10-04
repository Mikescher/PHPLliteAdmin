<?php
// Slovak translation by RobiNN (Róbert Kelčák)
// Read our wiki on how to translate: https://bitbucket.org/phpliteadmin/public/wiki/Localization
$lang = array(
    "direction" => "LTR",
    "date_format" => 'G:i \d\n\e j. n. Y (T)',  // see http://php.net/manual/en/function.date.php for what the letters stand for
    "ver" => "verzia",
    "for" => "pre",
    "to" => "do",
    "go" => "Vykonaj",
    "yes" => "Áno",
    "no" => "Nie",
    "sql" => "SQL",
    "csv" => "CSV",
    "csv_tbl" => "Tabuľka prislúchajúca CSV súboru",
    "srch" => "Hľadať",
    "srch_again" => "Hľadať znova",
    "login" => "Prihlásiť sa",
    "logout" => "Odhlásiť sa",
    "view" => "Zobrazenie",              // here, the noun SQL view is meant, not the verb "to view"
    "confirm" => "Potvrdiť",
    "cancel" => "Zrušiť",
    "save_as" => "Uložiť ako",
    "options" => "Možnosti",
    "no_opt" => "Bez možností",
    "help" => "Pomoc",
    "installed" => "nainštalované",
    "not_installed" => "nenainštalované",
    "done" => "hotovo",
    "insert" => "Vložiť",
    "export" => "Export",
    "import" => "Import",
    "rename" => "Premenovať",
    "empty" => "Vyprázdniť",
    "drop" => "Odstrániť",
    "tbl" => "Tabuľka",
    "chart" => "Graf",
    "err" => "CHYBA",
    "act" => "Akcia",
    "rec" => "Záznamov",
    "col" => "Stĺpec",
    "cols" => "Stĺpcoch",
    "rows" => "riadky",
    "edit" => "Upraviť",
    "del" => "Zmazať",
    "add" => "Pridať",
    "backup" => "Zálohovať databázový súbor",
    "before" => "Pred",
    "after" => "Po",
    "passwd" => "Heslo",
    "passwd_incorrect" => "Nesprávne heslo.",
    "chk_ext" => "Kontrolujem podporu SQLite PHP rozšírenie",
    "autoincrement" => "Autoincrement",
    "not_null" => "Nie NULLový",
    "attention" => "Pozor",
    "none" => "None",
    "as_defined" => "Je zadané",
    "expression" => "Výraz",
    "download" => "Stiahnuť",
    "open_in_browser" => "Otvoriť v prehliadači",
    "sqlite_ext" => "SQLite rozšírenie",
    "sqlite_ext_support" => "Zdá sa, že žiadne z podporovaných rozšírení SQLite knižnice nie je k dispozícii vo vašej inštalácii PHP. Nemôžete používať %s, kým aspoň jednu nenainštalujete.",
    "sqlite_v" => "SQLite verzia",
    "sqlite_v_error" => "Zdá sa, že, vaša databáza je SQLite verzia %s, ale vaša inštalácia PHP neobsahuje potrebné rozšírenie pre prácu s touto verziou. Problém odstránite buď tým, že databázu zmažete a umožninte %s jej automatické vytvorenie, alebo ju znovu vytvorte ručne ako SQLite verzie %s.",
    "report_issue" => "Problém sa nepodarilo presnejšie určiť. Pošlite prosím hlásenie o chybe na",
    "sqlite_limit" => "Vďaka obmedzeniu SQLite môže byť zmenený iba názov poľa a dátový typ.",
    "php_v" => "PHP verzia",
    "new_version" => "K dispozícii je nová verzia!",
    "db_dump" => "databázový výpis",
    "db_f" => "databázový súbor",
    "db_ch" => "Zmeniť databázu",
    "db_event" => "Databázová udalosť",
    "db_name" => "Názov databázy",
    "db_rename" => "Premenovať databázu",
    "db_renamed" => "Databáza '%s' bola premenovaná na",
    "db_del" => "Odstrániť databázu",
    "db_path" => "Cesta k databáze",
    "db_size" => "Veľkosť databázy",
    "db_mod" => "Databáza naposledy zmenená",
    "db_create" => "Vytvoriť novú databázu",
    "db_vac" => "Databáza '%s', bola vysatá.",
    "db_not_writeable" => "Databáza '%s' neexistuje a nemôže byť vytvorená, pretože nadradený adresár '%s' nemá právo zápisu. Aplikácia je nepoužiteľná, kým toto oprávnenie nepovolíte.",
    "db_setup" => "Vyskytol sa problém pri nastavovaní vašej databázy %s. Pokúsime sa zistiť, o čo ide, aby ste problém mohli ľahšie opraviť.",
    "db_exists" => "Databáza, iný súbor alebo adresár menom '%s' už existuje.",
    "db_blank" => "Názov databázy nesmie byť prázdny.",
    "exported" => "Exportované",
    "struct" => "Štruktúra",
    "struct_for" => "štruktúra pre",
    "on_tbl" => "na tabuľke",
    "data_dump" => "Dátový výpis pre",
    "backup_hint" => "Tip: najľahší spôsob zálohovania databázy je %s.",
    "backup_hint_linktext" => "stiahnuť databázový súbor",
    "total_rows" => "celkom %s riadkov",
    "total" => "Celkom",
    "not_dir" => "Zadaný adresár pre hľadanie databáz neexistuje alebo nie je adresárom.",
    "bad_php_directive" => "Zdá sa, že PHP direktíva, 'register_globals' je zapnutá. To je zle. Pred pokračovaním ju musíte zakázať.",
    "page_gen" => "Stránka vygenerovaná za %s sekúnd.",
    "powered" => "Beží na",
    "free_software" => "Toto je slobodný softvér.",
    "please_donate" => "Prosím, prispejte nám.",
    "remember" => "Zapamätať si ma",
    "no_db" => "Vitajte na %s. Zdá sa, že ste nastavili prehľadávanie adresára na databázy k správe. Avšak %s nemohol nájsť žiadne platné SQLite databázy. Pre vytvorenie prvej databázy použite nižšie uvedený formulár.",
    "no_db2" => "Adresár, ktorý ste zadali, neobsahuje žiadne existujúce databázy k správe a nemá oprávnenie zápisu. To znamená, že pomocou %s nemožno vytvoriť žiadne databázy. Buď povoľte právo zápisu, alebo ručne nahrajte databázy do adresára.",
    "create" => "Vytvoriť",
    "created" => "bola vytvorená",
    "create_tbl" => "Vytvoriť novú tabuľku",
    "create_tbl_db" => "Vytvoriť novú tabuľku v databáze",
    "create_trigger" => "Vytvoriť novú spúšť na tabuľke",
    "create_index" => "Vytváram index na tabuľke",
    "create_index1" => "Vytvoriť index",
    "create_view" => "Vytvoriť nový pohľad na databázu",
    "trigger" => "Spúšť",
    "triggers" => "Spúšte",
    "trigger_name" => "Názov spúšte",
    "trigger_act" => "Akcia spúšte",
    "trigger_step" => "Kroky spúšte (oddelené bodkočiarkou)",
    "when_exp" => "WHEN expression (type expression without 'WHEN')",
    "index" => "Index",
    "indexes" => "Indexy",
    "index_name" => "Názov indexu",
    "name" => "Názov",
    "unique" => "Jedinečný",
    "seq_no" => "Seq. No.",
    "emptied" => "bolo vyprázdnené",
    "dropped" => "bolo odstránené",
    "renamed" => "bolo premenované na",
    "altered" => "bolo úspešne zmenené",
    "inserted" => "vložené",
    "deleted" => "odstránené",
    "affected" => "zmenené",
    "blank_index" => "Názov indexu nesmie byť prázdny.",
    "one_index" => "Musíte určiť aspoň jeden indexový stĺpec.",
    "docu" => "Dokumentácia",
    "license" => "Licencia",
    "proj_site" => "Stránka projektu",
    "bug_report" => "Môže to byť chyba, ktorú je potrebné nahlásiť",
    "return" => "Vrátiť sa",
    "browse" => "Prezerať",
    "fld" => "Pole",
    "fld_num" => "Počet polí",
    "fields" => "Pole",
    "type" => "Typ",
    "operator" => "Operátor",
    "val" => "Hodnota",
    "update" => "Upraviť",
    "comments" => "Komentáre",
    "specify_fields" => "Musíte zadať počet polí v tabuľke.",
    "specify_tbl" => "Musíte zadať názov tabuľky.",
    "specify_col" => "Musíte zadať stĺpec.",
    "tbl_exists" => "Tabuľka s rovnakým názvom už existuje.",
    "show" => "Zobraziť",
    "show_rows" => "Zobrazujem %s riadkov. ",
    "showing" => "Zobrazujem",
    "showing_rows" => "Zobrazujem riadky",
    "query_time" => "(Dotaz zabral %s s)",
    "syntax_err" => "Vyskytol sa problém so syntaxou vášho dopytu (dopyt nebol vykonaný)",
    "run_sql" => "Spustiť SQL dopyt/dopyty na databázu '%s'",
    "recent_queries" => "Nedávne dopyty",
    "full_texts" => "Zobraziť úplné texty",
    "no_full_texts" => "Skrátiť dlhé texty",
    // requires adjustment: multiple tables may get emptied
    "ques_table_empty" => "Naozaj chcete vyprázdniť tabuľku '%s'?",
    // requires adjustment: multiple tables may get emptied and it may also be views
    "ques_table_drop" => "Naozaj chcete odstrániť tabuľku '%s'?",
    "ques_drop_view" => "Naozaj chcete odstrániť zobrazenie '%s'?",
    "ques_row_delete" => "Naozaj chcete odstrániť riadky %s z tabuľky '%s'?",
    "ques_database_delete" => "Naozaj chcete odstrániť databázu '%s'?",
    "ques_column_delete" => "Naozaj chcete odstrániť stĺpce %s z tabuľky '%s'?",
    "ques_index_delete" => "Naozaj chcete odstrániť index '%s'?",
    "ques_trigger_delete" => "Naozaj chcete odstrániť spúšť '%s'?",
    "ques_primarykey_add" => "Naozaj chcete pridať primárny kľúč na stĺpec/stĺpce %s v tabuľke '%s'?",
    "export_struct" => "Exportovať so štruktúrou",
    "export_data" => "Exportovať s dátami",
    "add_drop" => "Pridať DROP TABLE",
    "add_transact" => "Pridať TRANSACTION",
    "fld_terminated" => "Polia ukončené",
    "fld_enclosed" => "Polia uzavreté",
    "fld_escaped" => "Polia escapované",
    "fld_names" => "Názvy polí v prvom riadku",
    "rep_null" => "Nahradiť NULL za",
    "rem_crlf" => "Odstrániť znaky CRLF v poliach",
    "put_fld" => "Do prvého riadka zadajte názvy polí",
    "null_represent" => "NULL reprezentovaný",
    "import_suc" => "Import bol úspešný.",
    "import_into" => "Importovať do",
    "import_f" => "Importovať súbor",
    "max_file_size" => "Maximálna veľkosť súboru",
    "rename_tbl" => "Premenovať tabuľku '%s' na",
    "rows_records" => "riadky začínajúce od záznamu # ",
    "rows_aff" => "riadkov zmenené. ",
    "as_a" => "ako",
    "readonly_tbl" => "'%s' je pohľad, čo znamená, že je výrazom SELECT považovaný za tabuľku iba na čítanie. Nemožno vkladať alebo upravovať záznamy.",
    "chk_all" => "Zaškrtnúť všetko",
    "unchk_all" => "Odškrtnúť všetko",
    "with_sel" => "S vybratými",
    "no_tbl" => "V databáze nie je žiadna tabuľka.",
    "no_chart" => "Ak toto čítate, znamená to, že graf nemohol byť vytvorený. Dáta, ktoré sa snažíte zobraziť, nie sú vhodné pre graf.",
    "no_rows" => "V tabuľke nie sú riadky vo zvolenom rozsahu.",
    "no_sel" => "Nič ste nevybral.",
    "chart_type" => "Typ grafu",
    "chart_bar" => "Stĺpcový graf",
    "chart_pie" => "Koláčový graf",
    "chart_line" => "Čiarový graf",
    "lbl" => "Štítky",
    "empty_tbl" => "Táto tabuľka je prázdna.",
    "click" => "Kliknite tu",
    "insert_rows" => "pre vloženie riadkov.",
    "restart_insert" => "Opakovať vkladanie s",
    "ignore" => "Ignorovať",
    "func" => "Funkcia",
    "new_insert" => "Vložiť ako nový riadok",
    "save_ch" => "Uložiť zmeny",
    "def_val" => "Predvolená hodnota",
    "prim_key" => "Primárny kľúč",
    "tbl_end" => "polia na konci tabuľky",
    "query_used_table" => "Dopyt pre vytvorenie tejto tabuľky",
    "query_used_view" => "Dopyt použitý na vytvorenie tohto zobrazenia",
    "create_index2" => "Vytvoriť index na",
    "create_trigger2" => "Vytvoriť novú spúšť",
    "new_fld" => "Pridávam nové polia do tabuľky '%s'",
    "add_flds" => "Pridať polia",
    "edit_col" => "Upraviť stĺpec '%s'",
    "vac" => "Vysávač",
    "vac_desc" => "Veľké databázy občas potrebujú vysať, aby sa zmenšilo miesto, ktoré zaberajú na serveri. Kliknite na nasledujúce tlačidlo pre vysatie databázy '%s'.",
    "vac_on_empty" => "Znovu vytvoriť databázový súbor na obnovenie nepoužívaného priestoru (vysávač)",
    "event" => "Udalosť",
    "each_row" => "Pre každý riadok",
    "define_index" => "Definovať vlastnosti indexu",
    "dup_val" => "Duplicitné hodnoty",
    "allow" => "Povolené",
    "not_allow" => "Nepovolené",
    "asc" => "Vzostupne",
    "desc" => "Zostupne",
    "warn0" => "Bol si varovaný.",
    "warn_passwd" => "Používate predvolené heslo, čo je nebezpečné. Môžete ho ľahko zmeniť na začiatku %s.",
    "counting_skipped" => "Počítanie záznamov bolo preskočené pre niektoré tabuľky, pretože vaša databáza je porovnateľne veľká a niektoré tabuľky nemajú priradené primárne kľúče, takže odpočítanie môže byť pomalé. Pridajte primárny kľúč do týchto tabuliek alebo %sforce counting%s.",
    "sel_state" => "Výraz SELECT",
    "delimit" => "Oddeľovač",
    "back_top" => "Späť hore",
    "choose_f" => "Vyberte súbor",
    "instead" => "Namiesto",
    "define_in_col" => "Definovať stĺpec indexu",
    "delete_only_managed" => "Môžete odstrániť len databázy spravované týmto nástrojom!",
    "rename_only_managed" => "Môžete premenovať iba databázy spravované týmto nástrojom!",
    "db_moved_outside" => "Buď ste sa pokúsili presunúť databázu do adresára odkiaľ nemôže byť spravovaná, alebo kontrola, či ste tak naozaj urobil, zlyhala kvôli chýbajúcim oprávnením.",
    "extension_not_allowed" => "Rozšírenie, ktoré ste uviedli, nie je v zozname povolených rozšírení. Použite jedno z nasledujúcich rozšírení",
    "add_allowed_extension" => "Rozšírenia môžete pridať do tohto zoznamu pridaním rozšírenia \$allowed_extensions v konfigurácii.",
    "directory_not_writable" => "Samotný databázový súbor je zapisovateľný, ale na zápis do nej musí obsahovať aj adresár obsahujúci zápis. Je to kvôli tomu, že SQLite dáva dočasné súbory na uzamknutie.",
    "tbl_inexistent" => "Tabuľka %s neexistuje",
    "col_inexistent" => "Stĺpec %s neexistuje",
    // errors that can happen when ALTER TABLE fails. You don't necessarily have to translate these.
    "alter_failed" => "Zmena tabuľky %s zlyhala",
    "alter_tbl_name_not_replacable" => "názov tabuľky nemožno nahradiť dočasným názvom",
    "alter_no_def" => "chýba ALTER definícia",
    "alter_parse_failed" => "zlyhal rozbor ALTER definície",
    "alter_action_not_recognized" => "ALTER akcia sa nedá rozpoznať",
    "alter_no_add_col" => "v ALTER výrazu nebol rozpoznaný názov stĺpca pre pridanie",
    "alter_pattern_mismatch" => "Vzorec nezodpovedá pôvodnému CREATE TABLE výrazu",
    "alter_col_not_recognized" => "nemožno rozpoznať nový alebo pôvodný názov stĺpca",
    "alter_unknown_operation" => "Neznáma ALTER operácia!",
    /* Help documentation */
    "help_doc" => "Pomocná dokumentácia",
    "help1" => "Rozšírenia SQLite knižnice",
    "help1_x" => "%s používa rozšírenia knižnice PHP, ktoré umožňujú interakciu s databázami SQLite. V súčasnosti %s podporuje PDO, SQLite3 a SQLiteDatabase. PDO aj SQLite3 sa zaoberajú verziou 3 SQLite, zatiaľ čo SQLiteDatabase sa zaoberá verziou 2. Ak teda vaša inštalácia PHP obsahuje viac ako jedno rozšírenie knižnice SQLite, PDO a SQLite3 budú mať prednosť pri využívaní lepšej technológie. Ak však máte existujúce databázy, ktoré sú verzie 2 systému SQLite, %s bude nútený používať databázu SQLiteDatabase iba pre tieto databázy. Nie všetky databázy musia mať rovnakú verziu. Počas vytvárania databázy sa však použije najviac rozšírené rozšírenie.",
    "help2" => "Vytvorenie novej databázy",
    "help2_x" => "Keď vytvoríte novú databázu, zadané meno sa pripojí s príslušnou príponou (.db, .db3, .sqlite atď.), Ak ju nezahrniete sami. Databáza bude vytvorená v adresári, ktorý ste zadali ako adresár \$directory premennú.",
    "help3" => "Tabuľky vs. zobrazenia",
    "help3_x" => "Na hlavnej stránke databázy je zoznam tabuliek a zobrazení. Keďže zobrazenia sú iba na čítanie, niektoré operácie budú zakázané. Tieto zakázané operácie budú zrejmé z ich vynechania na mieste, kde by sa mali zobraziť na riadku. Ak chcete zmeniť údaje pre zobrazenie, je nutné odstrániť zobrazenie a znova ho vytvoriť zodpovedajúcim SELECT výrazom na ostatných tabuľkách. Viac informácií na <a href='http://en.wikipedia.org/wiki/View_(database)' target='_blank'>http://en.wikipedia.org/wiki/View_(database)</a>",
    "help4" => "Zapisovanie SELECT výrazu pre nove zobrazenie",
    "help4_x" => "Pri vytváraní nového zobrazenia je nutné zapísať SQL SELECT výraz, ktorý bude používať pre svoje dáta. Zobrazenie je jednoducho tabuľka len na čítanie, na ktorú je možné vznášať otázky ako na bežnú tabuľku, nemôže však byť zmenená vkladaním či editáciou stĺpcov a riadkov. Používa sa iba pre pohodlný prístup k dátam.",
    "help5" => "Exportovať štruktúru do SQL súboru",
    "help5_x" => "Počas procesu exportu do súboru SQL sa môžete rozhodnúť zahrnúť dopyty, ktoré vytvárajú tabuľku a stĺpce.",
    "help6" => "Export dat do SQL súboru",
    "help6_x" => "V dialógu exportu do SQL súboru možno zvoliť vloženie otázok, ktoré naplnia tabuľky súčasnými hodnotami v tabuľkách.",
    "help7" => "Pridanie Drop Table do exportovaného SQL súboru",
    "help7_x" => "V dialógu exportu do SQL súboru možno zvoliť vloženie otázok DROP na odstránenie existujúcich tabuliek pred ich pridaním, takže odpadnú problémy pri pokusoch o tvorbu tabuliek, ktoré už existujú.",
    "help8" => "Pridanie Transaction do exportovaného SQL súboru",
    "help8_x" => "V dialógu exportu do SQL súboru možno zvoliť obalenie otázok príkazom TRANSACTION, teda ak dôjde pri importe z exportovaného súboru kedykoľvek k chybe, databázy bude vrátená do pôvodného stavu, čiastočne aktualizované dáta sa do databázy nezapíšu.",
    "help9" => "Pridanie komentárov do exportovaného SQL súboru",
    "help9_x" => "V dialógu exportu do SQL súboru možno zvoliť vloženie komentárov vysvetľujúcich každý krok procesu, aby človek lepšie porozumel, čo vykonáva.",
    "help10" => "Čiastkové indexy",
    "help10_x" => "Čiastkové indexy sú indexy nad podmnožinou riadkov tabuľky špecifikovanej klauzulou WHERE. Všimnite si, že to vyžaduje aspoň SQLite 3.8.0 a databázové súbory s čiastkovými indexmi nebudú čitateľné ani zapisovateľné staršími verziami. Pozrite si <a href='https://www.sqlite.org/partialindex.html' target='_blank'>SQLite dokumentáciu.</a>",
    "help11" => "Maximálna veľkosť nahratých súborov",
    "help11_x" => "Maximálna veľkosť uploadovaných súborov je určená tromi nastaveniami PHP: <em>upload_max_filesize</em>, <em>post_max_size</em> a <em>memory_limit</em>. Najmenší týchto troch obmedzuje maximálnu veľkosť súboru obrázky. Ak chcete nahrať väčšie súbory, upravte tieto hodnoty vo svojom <em>php.ini</em> súboru."
);