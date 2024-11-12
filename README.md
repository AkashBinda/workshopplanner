
# Online Workshopplanner voor Studenten

## Casus

Een universiteit wil een eenvoudige online applicatie waar studenten zich kunnen registreren en inloggen om workshops bij te wonen, zoals trainingen, lezingen en sportactiviteiten. De applicatie moet de volgende functionaliteiten bieden:

1. **Beheerders** kunnen workshops aanmaken, bewerken en verwijderen.
2. **Ingelogde studenten** kunnen workshops bekijken, zich inschrijven en hun eigen inschrijvingen beheren.
3. De applicatie moet een **afgeschermd dashboard** bieden voor ingelogde gebruikers, waar studenten hun inschrijvingen en beheerders alle workshops kunnen beheren.

### Tabellen

1. **Users** - Voor het opslaan van studenten- en beheerdersgegevens.
   - Velden: `id`, `name`, `email`, `password`, `role` (bijv. 'admin' of 'student')
2. **Workshops** - Voor het opslaan van de workshops die door de universiteit worden georganiseerd.
   - Velden: `id`, `title`, `description`, `date`, `location`, `capacity`, `created_at`, `updated_at`
3. **Registrations** - Voor het bijhouden van studentregistraties voor workshops.
   - Velden: `id`, `user_id`, `workshop_id`, `registered_at`

## Leeruitkomsten

- **CRUD-functionaliteit:** De student leert hoe je basis-CRUD-operaties implementeert voor workshops en registraties.
- **Authenticatie en autorisatie:** De student past authenticatie toe om toegang te beperken tot afgeschermde pagina’s en gebruikt rollen (bijv. admin/student) voor autorisatie.
- **Livewire-componenten:** De student gebruikt Livewire om interactieve, dynamische functionaliteiten te implementeren, zoals het live tonen van ingeschreven workshops of het beheren van workshops in het dashboard.
- **Relaties tussen tabellen:** De student leert hoe hij relaties (bijv. `hasMany`, `belongsTo`) implementeert tussen gebruikers, workshops, en registraties.

## Installatie-instructies

Volg deze stappen om het project te klonen en lokaal op te zetten:

1. **Kloon het project vanaf GitHub:**
   ```bash
   git clone <repository-url>
   cd <repository-name>
   ```

2. **Installeer vereiste pakketten met Composer:**
   ```bash
   composer install
   ```

3. **Maak een `.env` bestand:**
   - Dupliceer het `.env.example` bestand naar `.env`:
     ```bash
     cp .env.example .env
     ```
   - Pas de `.env` instellingen aan, zoals databaseconfiguratie, en vul een `APP_KEY` in.

4. **Genereer een app-sleutel:**
   ```bash
   php artisan key:generate
   ```

5. **Installeer npm packages en compileer assets:**
   ```bash
   npm install
   npm run dev
   ```

6. **Voer de migraties uit:**
   - Creëer de vereiste tabellen in de database:
     ```bash
     php artisan migrate
     ```

7. **Start de Laravel server:**
   ```bash
   php artisan serve
   ```

8. **Open het project in je browser:**
   - Ga naar `http://localhost:8000` om de applicatie te bekijken.

Nu ben je klaar om te beginnen met het gebruik van de applicatie en het implementeren van de vereiste functionaliteiten.
