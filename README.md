# 🎯 PHP Design Patterns

Repozytorium zawiera przykłady najważniejszych wzorców projektowych w języku PHP wraz z testami jednostkowymi w PHPUnit.

Każdy wzorzec znajduje się w osobnym katalogu, z kodem źródłowym w `src/` oraz testami w `tests/`.

---

## 📚 Zawarte wzorce

### Creational (Kreacyjne)
- **Singleton** – zapewnia, że klasa ma tylko jedną instancję
- **Factory Method** – pozwala tworzyć obiekty bez bezpośredniego określania ich klas
- **Builder** – oddziela konstrukcję złożonego obiektu od jego reprezentacji
- **Dependency Injection** – wstrzykuje zależności zamiast tworzyć je wewnątrz klasy

### Structural (Strukturalne)
- **Adapter** – umożliwia współpracę niekompatybilnych interfejsów
- **Decorator** – dynamicznie dodaje nowe funkcjonalności do obiektów

### Behavioral (Behawioralne)
- **Strategy** – definiuje rodzinę algorytmów, wymiennych w czasie działania
- **Observer** – powiadamia zależne obiekty o zmianach stanu
- **Command** – zamienia żądania w obiekty

### Inne
- **Repository** – wzorzec architektoniczny do izolowania logiki dostępu do danych

---

## ✅ Uruchamianie testów

1. Zainstaluj zależności:

```
composer install
```

2. Uruchom testy:

```
vendor/bin/phpunit --testdox
```

---

## 📦 Struktura katalogów

```
design-patterns-php/
├── src/           # Kod źródłowy wzorców
├── tests/         # Testy PHPUnit
├── composer.json  # Zależności
└── README.md      # Ten plik
```

---

## 🧠 Autor

Przygotowane jako materiał edukacyjny i pomoc w rozmowach rekrutacyjnych.
