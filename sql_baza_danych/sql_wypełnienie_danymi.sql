INSERT INTO accounts (login, password, name, lastname, is_admin) VALUES
("Pazzurro", "Pazzurro1", "Damian", "Kapral", 1),
("Gregori_05", "Gregori1", "Grzegorz", "Nowak", 0),
("Oli123", "Oliwia1", "Oliwia", "Lewandowska", 0);

INSERT INTO categories (category_name) VALUES
("Komedia"),
("Horror"),
("Bajka"),
("Animacja"),
("Sci-Fi"),
("Obyczajowy"),
("Akcja"),
("Komedia");

INSERT INTO movies (title, content, directed_by, lenght, year, admin_id, accounts_id) VALUES
("Prorok", "„Prorok” to film fabularny o Kardynale Wyszyńskim – prymasie Polski, który po trzech latach internowania przez władze komunistyczne ponownie staje na czele Kościoła w Polsce.", "Michał Kondrat", 126, 2022, 1, 2),
("Top Gun: Maveric", "Po ponad 20 latach służby w lotnictwie marynarki wojennej, Pete Maverick Mitchell zostaje wezwany do legendarnej szkoły Top Gun. Ma wyszkolić nowe pokolenie pilotów do niezwykle trudnej misji.", "Joseph Kosinski", 131, 2022, 1, 2),
("EGZORCYZMY SIOSTRY ANN", "Przerażająca historia siostry Ann, młodej zakonnicy, pierwszej w historii kobiety, której Kościół katolicki zezwolił wykonania obrzędu egzorcyzmu.", "Joseph Kosinski", 93, 2022, 1, 3),
("Minionki: Wejście Gru", "Minionki Kevin, Stuart, Bob oraz Otto muszą ratować młodego Gru, który popadł w konflikt z grupą super złoczyńców znaną jako Vicious 6.", "Kyle Balda", 90, 2022, 0, 3),
("BLACK ADAM", "Po blisko pięciu tysiącleciach obdarzony boskimi mocami Black Adam zostaje uwolniony ze swojego ziemskiego grobowca.", "Jaume Collet-Serra", 124, 2022, 0, 2),
("Interstellar", "Byt ludzkości na Ziemi dobiega końca wskutek zmian klimatycznych. Grupa naukowców odkrywa tunel czasoprzestrzenny, który umożliwia poszukiwanie nowego domu.", "Jaume Collet-Serra", 169, 2014, 0, 3);

INSERT INTO movies_has_categories (movies_id, categories_id) VALUES
(1, 6),
(2, 7),
(3, 2),
(4, 3),
(4, 4),
(4, 8),
(5, 7),
(5, 5),
(6, 5);

INSERT INTO rents (date_start, date_end, accounts_id, movies_id) VALUES
('2022-10-28', '2022-12-11', 3, 2);

