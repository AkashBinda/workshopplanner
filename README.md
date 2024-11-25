
# Online Workshopplanner voor Studenten

## Casus

Een universiteit wil een eenvoudige online applicatie waar studenten zich kunnen registreren en inloggen om workshops bij te wonen, zoals trainingen, lezingen en sportactiviteiten. De applicatie moet de volgende functionaliteiten bieden:

1. **Beheerders** kunnen workshops aanmaken, bewerken en verwijderen.
2. **Ingelogde studenten** kunnen workshops bekijken, zich inschrijven en hun eigen inschrijvingen beheren.
3. De applicatie moet een **afgeschermd dashboard** bieden voor ingelogde gebruikers, waar studenten hun inschrijvingen en beheerders alle workshops kunnen beheren.

### Tabellen (migrations en seeders zijn al gemaakt)
1. **Users** - Voor het opslaan van studenten- en beheerdersgegevens.
   - Velden: `id`, `name`, `email`, `password`, `role` (bijv. 'admin' of 'student')
2. **Workshops** - Voor het opslaan van de workshops die door de universiteit worden georganiseerd.
   - Velden: `id`, `title`, `description`, `date`, `location`, `capacity`, `created_at`, `updated_at`
3. **Registrations** - Voor het bijhouden van studentregistraties voor workshops.
   - Velden: `id`, `user_id`, `workshop_id`, `registered_at`

## Leerdoelen:
1. **Workshopbeheer met CRUD:** De deelnemer implementeert een volledig CRUD-systeem voor workshops met behulp van een resource controller in Laravel. Dit beheergedeelte moet alleen toegankelijk zijn voor gebruikers met de rol admin.
2. **Inschrijvingen met Livewire:** De deelnemer maakt een Livewire-component waarmee studenten zich kunnen inschrijven voor workshops. Dit zorgt voor een dynamische gebruikerservaring zonder paginavernieuwing.
3. **Authenticatie en Rollenbeheer:** De deelnemer implementeert een inlogsysteem waarmee gebruikers zich kunnen aanmelden als student of admin. Afhankelijk van de rol worden zij doorverwezen naar de juiste secties van de applicatie.
4. **Validatie van Invoer:** De deelnemer past standaard Laravel-validaties toe om invoer correct te controleren en te valideren voordat deze wordt opgeslagen.
5. **Succes- en Foutmeldingen:** De deelnemer zorgt ervoor dat gebruikers duidelijke feedback ontvangen via succes- en foutmeldingen bij acties zoals inloggen, inschrijven of bewerken van gegevens.

## Leeruitkomsten

- **CRUD-functionaliteit:** De student leert hoe je basis-CRUD-operaties implementeert voor workshops en registraties. (admin)
- **Authenticatie en autorisatie:** De student past authenticatie toe om toegang te beperken tot afgeschermde pagina’s en gebruikt rollen (bijv. admin/student) voor autorisatie.
- **Livewire-componenten:** De student gebruikt Livewire om interactieve, dynamische functionaliteiten te implementeren. De student laat hierbij zien dat het inschrijven op een workshop via een livewire component gaat. (student)
- **Relaties tussen tabellen:** De student leert hoe hij relaties (bijv. `hasMany`, `belongsTo`) implementeert tussen gebruikers, workshops, en registraties.

## Installatie-instructies

Volg deze stappen om het project te klonen en lokaal op te zetten:

1. **Kloon het project vanaf GitHub:**
   ```
   git clone <repository-url>
   cd <repository-name>
   ```

3. **Installeer vereiste pakketten met Composer:**
   ```
   composer install
   ```

4. **Maak een `.env` bestand:**
   - Dupliceer het `.env.example` bestand naar `.env`:
     copy .env.example .env
   - Pas de `.env` instellingen aan, zoals databaseconfiguratie, en vul een `APP_KEY` in.

5. **Genereer een app-sleutel:**
   ```
   php artisan key:generate
   ```

6. **Voer de migraties en seeder uit:**
   ```
     php artisan migrate
     php artisan db:seed
   ```

7. **Start de Laravel server:**
   ```
   php artisan serve
   ```
   
8. **Open het project in je browser:**
   - Ga naar `http://localhost:8000` om de applicatie te bekijken.

Nu ben je klaar om te beginnen met het gebruik van de applicatie en het implementeren van de vereiste functionaliteiten.
