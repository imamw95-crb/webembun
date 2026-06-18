<laravel-boost-guidelines>
=== foundation rules ===

# Laravel Boost Guidelines

The Laravel Boost guidelines are specifically curated by Laravel maintainers for this application. These guidelines should be followed closely to ensure the best experience when building Laravel applications.

## Foundational Context

This application is a Laravel application and its main Laravel ecosystems package & versions are below. You are an expert with them all. Ensure you abide by these specific packages & versions.

- php - 8.3
- laravel/framework (LARAVEL) - v13
- laravel/prompts (PROMPTS) - v0
- laravel/boost (BOOST) - v2
- laravel/mcp (MCP) - v0
- laravel/pail (PAIL) - v1
- laravel/pint (PINT) - v1
- phpunit/phpunit (PHPUNIT) - v12

## Skills Activation

This project has domain-specific skills available in `**/skills/**`. You MUST activate the relevant skill whenever you work in that domain—don't wait until you're stuck.

## Conventions

- You must follow all existing code conventions used in this application. When creating or editing a file, check sibling files for the correct structure, approach, and naming.
- Use descriptive names for variables and methods. For example, `isRegisteredForDiscounts`, not `discount()`.
- Check for existing components to reuse before writing a new one.

## Verification Scripts

- Do not create verification scripts or tinker when tests cover that functionality and prove they work. Unit and feature tests are more important.

## Application Structure & Architecture

- Stick to existing directory structure; don't create new base folders without approval.
- Do not change the application's dependencies without approval.

## Frontend Bundling

- If the user doesn't see a frontend change reflected in the UI, it could mean they need to run `npm run build`, `npm run dev`, or `composer run dev`. Ask them.

## Documentation Files

- You must only create documentation files if explicitly requested by the user.

## Replies

- Be concise in your explanations - focus on what's important rather than explaining obvious details.

=== project-specific rules ===

# Embun Sangga Langit (Embun Village) — Project Rules

This is a **villa/glamping booking website** for Embun Sangga Langit, a real venue in Kuningan, West Java (kaki Gunung Ciremai, ±1.200 mdpl).

## Domain Model & Relationships

### Models (7 total)
| Model | Table | Key Relations | Key Scopes/Features |
|-------|-------|---------------|---------------------|
| `Room` | `rooms` | `HasMany bookings`, `HasMany galleries` | `scopeAvailable()`, `scopeFeatured()`, auto-slug on create |
| `Booking` | `bookings` | `BelongsTo room`, `BelongsTo user` | `scopeConfirmed()`, `scopePending()`, overlap-detection query |
| `Gallery` | `galleries` | `BelongsTo room` | `is_featured` flag for homepage display |
| `Facility` | `facilities` | — | `is_active` + `sort_order` controls display order |
| `Testimonial` | `testimonials` | — | `is_active` filter, `rating` (integer 1-5) |
| `Contact` | `contacts` | — | `is_read` flag for admin |
| `User` | `users` | `HasMany bookings` | Filament auth |

### Model Conventions (already established)
- `$fillable` arrays for mass assignment (never use `$guarded`)
- `$casts` for type coercion: `boolean`, `decimal:2`, `date`, `array` (amenities), `integer`
- Global scopes not used — use local scopes: `scopeAvailable()`, `scopeFeatured()`, etc.
- Auto-generate slug on `creating` event via `Str::slug()` in `booted()`
- Room `amenities` is cast to `array` (stored as JSON), accessed as array in views

## Routes & Controllers

### Named Routes (always use `route()` — never hardcode URLs)
- `home` — `/`
- `about` — `/about`
- `contact` — `/contact`
- `contact.store` — POST `/contact`
- `rooms.index` — `/rooms`
- `rooms.show` — `/rooms/{slug}`
- `booking.create` — `/booking/{slug}`
- `booking.store` — POST `/booking`
- `booking.success` — `/booking/success/{booking}`
- `booking.check-availability` — GET `/booking/check-availability/{room}` (AJAX)

### Controller Patterns
- **`HomeController`**: Loads cached homepage data (rooms, facilities, testimonials, galleries) with `Cache::remember()` for 1 hour
- **`RoomController`**: Uses `Cache::remember()` for `otherRooms` on show page (1 hour TTL)
- **`BookingController`**: Math captcha (sum of 2 random numbers stored in session), overlap detection query, syncs to external API after creation
- **Caching convention**: Use `Cache::remember('key', 3600, fn () => ...)` — never cache Eloquent models directly; call `->toArray()` first to avoid `__PHP_Incomplete_Class` errors

### Booking Overlap Detection Query
When checking availability, use this pattern (from `BookingController`):
```php
$overlapping = Booking::where('room_id', $room->id)
    ->whereIn('status', ['pending', 'confirmed'])
    ->where(function ($q) use ($request) {
        $q->whereBetween('check_in', [$request->check_in, $request->check_out])
            ->orWhereBetween('check_out', [$request->check_in, $request->check_out])
            ->orWhere(function ($q2) use ($request) {
                $q2->where('check_in', '<=', $request->check_in)
                    ->where('check_out', '>=', $request->check_out);
            });
    })
    ->exists();
```

## Filament Admin Panel

### Resources (5 total, all flat structure in `app/Filament/Resources/`)
| Resource | Navigation Group | Sort | Icon |
|----------|-----------------|------|------|
| `RoomResource` | Property | 1 | `heroicon-o-building-office` |
| `BookingResource` | Property | 2 | `heroicon-o-calendar-days` |
| `FacilityResource` | — | — | — |
| `TestimonialResource` | — | — | — |
| `ContactResource` | — | — | — |

### Filament Conventions (already established)
- Resources are **flat files** directly in `app/Filament/Resources/` (not in subdirectories)
- Pages are in subdirectories: `{Resource}/Pages/{List/Create/Edit}{Resource}.php`
- Uses Filament v3-style Schema-based forms: `form(Schema $schema): Schema`
- Uses Filament v3-style Table: `table(Table $table): Table`
- Forms use `Grid::make(N)` for multi-column layouts
- Navigation icons use `heroicon-o-*` set
- Booking status badges use color mapping: pending→warning, confirmed→success, cancelled→danger, completed→success
- Payment status badges: unpaid→danger, paid→success, refunded→warning

### External Reservations Page
- `BookingResource` has a custom page `ListExternalReservations` at route `/admin/bookings/external`
- Accessible via "External API Reservations" button in the booking list

## External API Integration

### Service: `app/Services/ExternalApiService.php`
- **Base URL**: `config('services.embun_api.base_url')` — `https://embun.cloudnod.my.id/api`
- **Auth**: X-API-Key header from `config('services.embun_api.api_key')`
- **Methods**: `getReservations(params)`, `createReservation(data)`, `getRooms()`, `mapToExternalRoomId(localRoomName)`
- **Room mapping**: "Pine Dome (Pindom)"→32, "Edelweiss"→33, "Seruni"→34
- **Sync trigger**: `BookingController@store` calls `syncToExternalApi()` after local save
- **Error handling**: Always wrapped in try/catch, logs warnings on failure, never blocks the user flow

## Image System

### Storage & Format
- All images stored in `storage/app/public/` and symlinked to `public/storage`
- **All images converted to WebP** (quality=80) via `php artisan app:optimize-images`
- Image references in views use `.webp` extension
- Directories: `baner/`, `gallery/`, `hero/`, `logo/`, `resto/`, `rooms/`, and `public/images/EMBUN/`
- Hero images: `hero/hero-1.webp` through `hero/hero-3.webp`
- Room images: `rooms/pine-dome.webp`, `rooms/edelweiss.webp`, `rooms/seruni.webp`

### Artisan Command
- `php artisan app:optimize-images` — Converts all JPG/PNG to WebP using GD library (quality=80)
- When adding new images, always convert them to WebP and update view references

## Database

### Performance Indexes (from migration `2026_06_13_001621`)
- `rooms`: composite `rooms_available_featured_sort_idx` (is_available, is_featured, sort_order)
- `bookings`: composite `bookings_dates_idx` (check_in, check_out), `bookings_room_status_idx` (room_id, status)
- `facilities`: composite `facilities_active_sort_idx` (is_active, sort_order)
- `testimonials`: composite `testimonials_active_date_idx` (is_active, created_at)
- `galleries`: composite `galleries_featured_date_idx` (is_featured, created_at)
- `contacts`: `is_read`, `email`

### Cache Driver
- Uses `file` cache driver (not `database` — was changed to avoid unnecessary SQL queries)

## Frontend Architecture

### UI/UX Design System
- **Style**: Organic Biophilic + Minimalism — nature-inspired, clean, warm
- **Color Palette**: pine (#2E4E3F), moss (#4A7A5F), gold (#B8935A), linen (#F7F5F0)
- **Typography**: Playfair Display (headings, serif) + Inter (body)
- **Do not define `@apply` classes inside inline `<style>` tags in Blade views** — Tailwind v4 won't process them. All `@apply` classes must be in `resources/css/app.css`

### React Integration
- React mounts via `#react-root` in Blade layout
- Uses `BlurText.jsx` component from React Bits for animated headlines in hero banner slides
- Entry point: `resources/js/react.jsx`
- Custom event `slide-changed` coordinates active slide between Alpine.js carousel and React
- **After changing React/JSX files, run `npm run build`** to regenerate Vite bundles

### Loading Screen
- Professional page loader with animated logo, progress bar, fade-out transition
- Defined in `layouts/app.blade.php`, CSS in `app.css`, JS in `app.js`
- Min 1.6s display, hides on `window.load` event with 3s max safety timeout

### Scroll & Animation System
- **Scroll Reveal**: Classes `reveal-section`, `reveal-left`, `reveal-right`, `reveal-scale` with Intersection Observer
- **Parallax BG**: `data-parallax-bg` + `data-parallax-speed` attributes
- **Counter Animation**: `data-count-to`, `data-count-duration`, `data-count-suffix` attributes
- **Scroll Progress Bar**: Fixed 3px gradient bar at top
- **Anchor Scroll Offset**: `scroll-padding-top: 80px`
- **Respects `prefers-reduced-motion`** — all animations disabled for accessibility

## Optimization Commands

Run these after making changes:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache
php artisan filament:cache-components
npm run build          # Rebuild Vite assets after CSS/JS changes
composer run optimize  # Runs all above Artisan commands at once
```

For production: `APP_ENV=production`, `APP_DEBUG=false`, `LOG_LEVEL=warning`

## Known Troubleshooting
- **"Access is denied (code: 5)" on storage/views**: `icacls storage /grant "Everyone:(OI)(CI)F" /T`
- **"Unsupported operand types: string * int"**: Stale compiled view — run `php artisan view:clear`
- **`__PHP_Incomplete_Class` errors**: Don't cache Eloquent models directly; use `->toArray()` before caching
- **MethodNotAllowedHttpException**: Stale route cache — run `php artisan route:clear`
- **Stale CSS after editing views**: Run `npm run build` to rebuild Vite assets
- **Browser showing cached error pages**: Use `?cb=N` cache-busting query param or clear browser cache

=== boost rules ===

# Laravel Boost

## Tools

- Laravel Boost is an MCP server with tools designed specifically for this application. Prefer Boost tools over manual alternatives like shell commands or file reads.
- Use `database-query` to run read-only queries against the database instead of writing raw SQL in tinker.
- Use `database-schema` to inspect table structure before writing migrations or models.
- Use `get-absolute-url` to resolve the correct scheme, domain, and port for project URLs. Always use this before sharing a URL with the user.
- Use `browser-logs` to read browser logs, errors, and exceptions. Only recent logs are useful, ignore old entries.

## Searching Documentation (IMPORTANT)

- Always use `search-docs` before making code changes. Do not skip this step. It returns version-specific docs based on installed packages automatically.
- Pass a `packages` array to scope results when you know which packages are relevant.
- Use multiple broad, topic-based queries: `['rate limiting', 'routing rate limiting', 'routing']`. Expect the most relevant results first.
- Do not add package names to queries because package info is already shared. Use `test resource table`, not `filament 4 test resource table`.

### Search Syntax

1. Use words for auto-stemmed AND logic: `rate limit` matches both "rate" AND "limit".
2. Use `"quoted phrases"` for exact position matching: `"infinite scroll"` requires adjacent words in order.
3. Combine words and phrases for mixed queries: `middleware "rate limit"`.
4. Use multiple queries for OR logic: `queries=["authentication", "middleware"]`.

## Artisan

- Run Artisan commands directly via the command line (e.g., `php artisan route:list`). Use `php artisan list` to discover available commands and `php artisan [command] --help` to check parameters.
- Inspect routes with `php artisan route:list`. Filter with: `--method=GET`, `--name=users`, `--path=api`, `--except-vendor`, `--only-vendor`.
- Read configuration values using dot notation: `php artisan config:show app.name`, `php artisan config:show database.default`. Or read config files directly from the `config/` directory.

## Tinker

- Execute PHP in app context for debugging and testing code. Do not create models without user approval, prefer tests with factories instead. Prefer existing Artisan commands over custom tinker code.
- Always use single quotes to prevent shell expansion: `php artisan tinker --execute 'Your::code();'`
  - Double quotes for PHP strings inside: `php artisan tinker --execute 'User::where("active", true)->count();'`

=== php rules ===

# PHP

- Always use curly braces for control structures, even for single-line bodies.
- Use PHP 8 constructor property promotion: `public function __construct(public GitHub $github) { }`. Do not leave empty zero-parameter `__construct()` methods unless the constructor is private.
- Use explicit return type declarations and type hints for all method parameters: `function isAccessible(User $user, ?string $path = null): bool`
- Use TitleCase for Enum keys: `FavoritePerson`, `BestLake`, `Monthly`.
- Prefer PHPDoc blocks over inline comments. Only add inline comments for exceptionally complex logic.
- Use array shape type definitions in PHPDoc blocks.

=== deployments rules ===

# Deployment

- Laravel can be deployed using [Laravel Cloud](https://cloud.laravel.com/), which is the fastest way to deploy and scale production Laravel applications.

=== laravel/core rules ===

# Do Things the Laravel Way

- Use `php artisan make:` commands to create new files (i.e. migrations, controllers, models, etc.). You can list available Artisan commands using `php artisan list` and check their parameters with `php artisan [command] --help`.
- If you're creating a generic PHP class, use `php artisan make:class`.
- Pass `--no-interaction` to all Artisan commands to ensure they work without user input. You should also pass the correct `--options` to ensure correct behavior.

### Model Creation

- When creating new models, create useful factories and seeders for them too. Ask the user if they need any other things, using `php artisan make:model --help` to check the available options.

## APIs & Eloquent Resources

- For APIs, default to using Eloquent API Resources and API versioning unless existing API routes do not, then you should follow existing application convention.

## URL Generation

- When generating links to other pages, prefer named routes and the `route()` function.

## Testing

- When creating models for tests, use the factories for the models. Check if the factory has custom states that can be used before manually setting up the model.
- Faker: Use methods such as `$this->faker->word()` or `fake()->randomDigit()`. Follow existing conventions whether to use `$this->faker` or `fake()`.
- When creating tests, make use of `php artisan make:test [options] {name}` to create a feature test, and pass `--unit` to create a unit test. Most tests should be feature tests.

## Vite Error

- If you receive an "Illuminate\Foundation\ViteException: Unable to locate file in Vite manifest" error, you can run `npm run build` or ask the user to run `npm run dev` or `composer run dev`.

=== pint/core rules ===

# Laravel Pint Code Formatter

- If you have modified any PHP files, you must run `vendor/bin/pint --dirty --format agent` before finalizing changes to ensure your code matches the project's expected style.
- Do not run `vendor/bin/pint --test --format agent`, simply run `vendor/bin/pint --format agent` to fix any formatting issues.

=== phpunit/core rules ===

# PHPUnit

- This application uses PHPUnit for testing. All tests must be written as PHPUnit classes. Use `php artisan make:test --phpunit {name}` to create a new test.
- If you see a test using "Pest", convert it to PHPUnit.
- Every time a test has been updated, run that singular test.
- When the tests relating to your feature are passing, ask the user if they would like to also run the entire test suite to make sure everything is still passing.
- Tests should cover all happy paths, failure paths, and edge cases.
- You must not remove any tests or test files from the tests directory without approval. These are not temporary or helper files; these are core to the application.

## Running Tests

- Run the minimal number of tests, using an appropriate filter, before finalizing.
- To run all tests: `php artisan test --compact`.
- To run all tests in a file: `php artisan test --compact tests/Feature/ExampleTest.php`.
- To filter on a particular test name: `php artisan test --compact --filter=testName` (recommended after making a change to a related file).

</laravel-boost-guidelines>
