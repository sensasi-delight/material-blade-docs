# Material Blade Docs - AI Coding Agent Instructions

## Project Overview

This is a **Laravel-based documentation site** for the Material Blade package (`sensasi-delight/material-blade`), deployed on **Vercel** using a serverless PHP runtime. The site showcases Material Design components as Laravel Blade components, demonstrating their usage with live examples and code snippets.

**Key Architecture Points:**
- Laravel 12 application with Blade templating
- Vercel deployment: All requests route through `api/index.php` → `public/index.php`
- No database required (uses `array` drivers for session/cache in production)
- Depends on `sensasi-delight/material-blade` package (installed from dev-main)

## Critical Developer Workflows

### Running Locally
```powershell
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
# Visit http://localhost:8000
```

### Code Quality
```powershell
# Lint PHP (Laravel Pint) - ALWAYS run before committing
composer lint:fix    # Fix issues
composer lint        # Check only (used in CI)
```

### Deployment
- Automatic deployment via Vercel on push
- CI runs Pint linting on GitHub Actions (see `.github/workflows/on_push.yml`)

## Documentation Page Conventions

### Route Registration Pattern
Routes are **automatically generated** from `app/Enums/DocRoute.php` enum values in `routes/subroutes/doc-routes.php`:
- Enum case `COMPONENTS_BUTTON = 'components.button'` creates route `/components/button`
- Maps to view `resources/views/pages/components/button/index.blade.php`
- Route name matches enum value: `route('components.button')`
- Dots in enum values become slashes in URLs and dots in view paths

**Adding a new doc page:**
1. Add enum case to `app/Enums/DocRoute.php` (e.g., `COMPONENTS_CARD = 'components.card'`)
2. Create view at `resources/views/pages/components/card/index.blade.php`
3. Follow the page template structure (see below)
4. Navigation sidebar auto-updates from enum

### Page Structure Template
Every documentation page follows this structure:

```php
@php
    $pageData = [
        'title' => 'Component Name',
        'metas' => ['description' => '...'],
        'headings' => ['Section 1', 'Section 2'],  // For TOC
        'referenceLinks' => ['https://...'],       // External references
        'componentsProps' => [                      // Component API docs
            'mbc::component-name' => [
                ['propName', 'type', 'default', 'Description'],
            ],
        ],
    ];
@endphp

@extends('layouts.docs', $pageData)

@section('description')
    <x-mbc::typography>Overview content...</x-mbc::typography>
    
    <x-component-preview>
        <!-- Live component demo -->
        @slot('codeSummary')
            <!-- Brief code snippet -->
        @endslot
    </x-component-preview>
@endsection

@section('content')
    @include('pages.components.component-name._sections.variants')
    @include('pages.components.component-name._sections.colors')
@endsection
```

### File Organization Pattern
For each component page (e.g., `alert`):
```
resources/views/pages/components/alert/
├── index.blade.php              # Main page file
├── _sections/                   # Section content (variants, colors, etc.)
│   ├── variants.blade.php
│   ├── severities.blade.php
│   └── icons.blade.php
└── _codes/                      # Code examples
    ├── variants.blade.php       # Full code snippet
    └── variants-summary.blade.php  # Condensed version
```

## Component Demo Patterns

### Basic Component Preview
```blade
<x-component-preview>
    <!-- Rendered component demo -->
    <x-mbc::alert>This is a success Alert.</x-mbc::alert>

    @slot('codeSummary')
        {{-- Code shown by default (collapsed) --}}
    @endslot
    
    @slot('code')
        {{-- Full expandable code --}}
        @include('pages.components.alert._codes.variants')
    @endslot
</x-component-preview>
```

### Code Files Format
Code example files contain **escaped HTML** with Material Blade components:
```blade
&lt;x-mbc::alert variant="standard">The default variant is `standard`&lt;/x-mbc::alert>
&lt;x-mbc::alert variant="outlined">This is an `outlined` Alert.&lt;/x-mbc::alert>
```
**Important:** Always use HTML entities (`&lt;` and `&gt;`) in code example files to prevent actual rendering.

## Material Blade Component Usage

All components use the `x-mbc::` namespace:
- `<x-mbc::button label="Text" variant="raised" />`
- `<x-mbc::alert severity="warning">Message</x-mbc::alert>`
- `<x-mbc::icon name="favorite" />`
- `<x-mbc::_assets />` - Required in `<head>` to load Material Design CSS/JS

**Custom documentation components:**
- `<x-h2>`, `<x-h3>` - Styled headings with auto-generated anchor links (use for sections)
- `<x-component-preview>` - Wraps live demos with expandable code display
- `<x-component-props-section>` - Auto-generates component properties table from `$pageData`
- `<x-references-section>` - Renders external reference links

**Component documentation structure:**
- Properties table auto-generated from `$pageData['componentsProps']`
- Each section uses `<x-h2>`, `<x-h3>` custom components for consistent styling
- TOC generated from `$pageData['headings']` array

## Navigation & Routing

Navigation sidebar automatically generated from `DocRoute` enum in `resources/views/layouts/docs/parts/nav.blade.php`:
- Groups routes by prefix (e.g., `components.*`)
- Highlights active route using `request()->route()->named($route)`
- Uses `<x-mbc::drawer>` and `<x-mbc::list>` components

**Edit page link:** Auto-generated GitHub link at bottom of each page using `Route::current()->uri`

## Vercel-Specific Configuration

From `vercel.json`:
- All paths route to `api/index.php` (which loads `public/index.php`)
- Production environment uses `/tmp` for compiled views/cache
- No persistent filesystem - avoid file writes outside `/tmp`

## Common Patterns to Follow

1. **Always use `x-mbc::` components** instead of raw HTML for Material Design elements
2. **Follow the _sections/_codes separation** for maintainability
3. **Update `DocRoute.php` enum** when adding pages (not manual route definitions)
4. **Use `<x-component-preview>` wrapper** for all component demos
5. **Include `referenceLinks` in pageData** to link official Material Design docs
6. **Run `composer lint:fix`** before committing (Pint enforces Laravel conventions)

## Testing Notes

- PHPUnit configured in `phpunit.xml`
- Tests in `tests/Feature` and `tests/Unit`
- Currently minimal test coverage - focus on route generation and view rendering
- **Run tests:** Use `php artisan test` (NOT `./vendor/bin/phpunit` directly)

===

<laravel-boost-guidelines>
=== foundation rules ===

# Laravel Boost Guidelines

The Laravel Boost guidelines are specifically curated by Laravel maintainers for this application. These guidelines should be followed closely to enhance the user's satisfaction building Laravel applications.

## Foundational Context
This application is a Laravel application and its main Laravel ecosystems package & versions are below. You are an expert with them all. Ensure you abide by these specific packages & versions.

- php - 8.4.11
- laravel/framework (LARAVEL) - v12
- laravel/prompts (PROMPTS) - v0
- laravel/mcp (MCP) - v0
- laravel/pint (PINT) - v1
- phpunit/phpunit (PHPUNIT) - v12

## Conventions
- You must follow all existing code conventions used in this application. When creating or editing a file, check sibling files for the correct structure, approach, naming.
- Use descriptive names for variables and methods. For example, `isRegisteredForDiscounts`, not `discount()`.
- Check for existing components to reuse before writing a new one.

## Verification Scripts
- Do not create verification scripts or tinker when tests cover that functionality and prove it works. Unit and feature tests are more important.

## Application Structure & Architecture
- Stick to existing directory structure - don't create new base folders without approval.
- Do not change the application's dependencies without approval.

## Frontend Bundling
- If the user doesn't see a frontend change reflected in the UI, it could mean they need to run `npm run build`, `npm run dev`, or `composer run dev`. Ask them.

## Replies
- Be concise in your explanations - focus on what's important rather than explaining obvious details.

## Documentation Files
- You must only create documentation files if explicitly requested by the user.


=== boost rules ===

## Laravel Boost
- Laravel Boost is an MCP server that comes with powerful tools designed specifically for this application. Use them.

## Artisan
- Use the `list-artisan-commands` tool when you need to call an Artisan command to double check the available parameters.

## URLs
- Whenever you share a project URL with the user you should use the `get-absolute-url` tool to ensure you're using the correct scheme, domain / IP, and port.

## Tinker / Debugging
- You should use the `tinker` tool when you need to execute PHP to debug code or query Eloquent models directly.
- Use the `database-query` tool when you only need to read from the database.

## Reading Browser Logs With the `browser-logs` Tool
- You can read browser logs, errors, and exceptions using the `browser-logs` tool from Boost.
- Only recent browser logs will be useful - ignore old logs.

## Searching Documentation (Critically Important)
- Boost comes with a powerful `search-docs` tool you should use before any other approaches. This tool automatically passes a list of installed packages and their versions to the remote Boost API, so it returns only version-specific documentation specific for the user's circumstance. You should pass an array of packages to filter on if you know you need docs for particular packages.
- The 'search-docs' tool is perfect for all Laravel related packages, including Laravel, Inertia, Livewire, Filament, Tailwind, Pest, Nova, Nightwatch, etc.
- You must use this tool to search for Laravel-ecosystem documentation before falling back to other approaches.
- Search the documentation before making code changes to ensure we are taking the correct approach.
- Use multiple, broad, simple, topic based queries to start. For example: `['rate limiting', 'routing rate limiting', 'routing']`.
- Do not add package names to queries - package information is already shared. For example, use `test resource table`, not `filament 4 test resource table`.

### Available Search Syntax
- You can and should pass multiple queries at once. The most relevant results will be returned first.

1. Simple Word Searches with auto-stemming - query=authentication - finds 'authenticate' and 'auth'
2. Multiple Words (AND Logic) - query=rate limit - finds knowledge containing both "rate" AND "limit"
3. Quoted Phrases (Exact Position) - query="infinite scroll" - Words must be adjacent and in that order
4. Mixed Queries - query=middleware "rate limit" - "middleware" AND exact phrase "rate limit"
5. Multiple Queries - queries=["authentication", "middleware"] - ANY of these terms


=== php rules ===

## PHP

- Always use curly braces for control structures, even if it has one line.

### Constructors
- Use PHP 8 constructor property promotion in `__construct()`.
    - <code-snippet>public function __construct(public GitHub $github) { }</code-snippet>
- Do not allow empty `__construct()` methods with zero parameters.

### Type Declarations
- Always use explicit return type declarations for methods and functions.
- Use appropriate PHP type hints for method parameters.

<code-snippet name="Explicit Return Types and Method Params" lang="php">
protected function isAccessible(User $user, ?string $path = null): bool
{
    ...
}
</code-snippet>

## Comments
- Prefer PHPDoc blocks over comments. Never use comments within the code itself unless there is something _very_ complex going on.

## PHPDoc Blocks
- Add useful array shape type definitions for arrays when appropriate.

## Enums
- Typically, keys in an Enum should be TitleCase. For example: `FavoritePerson`, `BestLake`, `Monthly`.


=== laravel/core rules ===

## Do Things the Laravel Way

- Use `php artisan make:` commands to create new files (i.e. migrations, controllers, models, etc.). You can list available Artisan commands using the `list-artisan-commands` tool.
- If you're creating a generic PHP class, use `artisan make:class`.
- Pass `--no-interaction` to all Artisan commands to ensure they work without user input. You should also pass the correct `--options` to ensure correct behavior.

### Database
- Always use proper Eloquent relationship methods with return type hints. Prefer relationship methods over raw queries or manual joins.
- Use Eloquent models and relationships before suggesting raw database queries
- Avoid `DB::`; prefer `Model::query()`. Generate code that leverages Laravel's ORM capabilities rather than bypassing them.
- Generate code that prevents N+1 query problems by using eager loading.
- Use Laravel's query builder for very complex database operations.

### Model Creation
- When creating new models, create useful factories and seeders for them too. Ask the user if they need any other things, using `list-artisan-commands` to check the available options to `php artisan make:model`.

### APIs & Eloquent Resources
- For APIs, default to using Eloquent API Resources and API versioning unless existing API routes do not, then you should follow existing application convention.

### Controllers & Validation
- Always create Form Request classes for validation rather than inline validation in controllers. Include both validation rules and custom error messages.
- Check sibling Form Requests to see if the application uses array or string based validation rules.

### Queues
- Use queued jobs for time-consuming operations with the `ShouldQueue` interface.

### Authentication & Authorization
- Use Laravel's built-in authentication and authorization features (gates, policies, Sanctum, etc.).

### URL Generation
- When generating links to other pages, prefer named routes and the `route()` function.

### Configuration
- Use environment variables only in configuration files - never use the `env()` function directly outside of config files. Always use `config('app.name')`, not `env('APP_NAME')`.

### Testing
- When creating models for tests, use the factories for the models. Check if the factory has custom states that can be used before manually setting up the model.
- Faker: Use methods such as `$this->faker->word()` or `fake()->randomDigit()`. Follow existing conventions whether to use `$this->faker` or `fake()`.
- When creating tests, make use of `php artisan make:test [options] <name>` to create a feature test, and pass `--unit` to create a unit test. Most tests should be feature tests.

### Vite Error
- If you receive an "Illuminate\Foundation\ViteException: Unable to locate file in Vite manifest" error, you can run `npm run build` or ask the user to run `npm run dev` or `composer run dev`.


=== laravel/v12 rules ===

## Laravel 12

- Use the `search-docs` tool to get version specific documentation.
- Since Laravel 11, Laravel has a new streamlined file structure which this project uses.

### Laravel 12 Structure
- No middleware files in `app/Http/Middleware/`.
- `bootstrap/app.php` is the file to register middleware, exceptions, and routing files.
- `bootstrap/providers.php` contains application specific service providers.
- **No app\Console\Kernel.php** - use `bootstrap/app.php` or `routes/console.php` for console configuration.
- **Commands auto-register** - files in `app/Console/Commands/` are automatically available and do not require manual registration.

### Database
- When modifying a column, the migration must include all of the attributes that were previously defined on the column. Otherwise, they will be dropped and lost.
- Laravel 11 allows limiting eagerly loaded records natively, without external packages: `$query->latest()->limit(10);`.

### Models
- Casts can and likely should be set in a `casts()` method on a model rather than the `$casts` property. Follow existing conventions from other models.


=== pint/core rules ===

## Laravel Pint Code Formatter

- You must run `vendor/bin/pint --dirty` before finalizing changes to ensure your code matches the project's expected style.
- Do not run `vendor/bin/pint --test`, simply run `vendor/bin/pint` to fix any formatting issues.


=== phpunit/core rules ===

## PHPUnit Core

- This application uses PHPUnit for testing. All tests must be written as PHPUnit classes. Use `php artisan make:test --phpunit <name>` to create a new test.
- If you see a test using "Pest", convert it to PHPUnit.
- Every time a test has been updated, run that singular test.
- When the tests relating to your feature are passing, ask the user if they would like to also run the entire test suite to make sure everything is still passing.
- Tests should test all of the happy paths, failure paths, and weird paths.
- You must not remove any tests or test files from the tests directory without approval. These are not temporary or helper files, these are core to the application.

### Running Tests
- Run the minimal number of tests, using an appropriate filter, before finalizing.
- To run all tests: `php artisan test`.
- To run all tests in a file: `php artisan test tests/Feature/ExampleTest.php`.
- To filter on a particular test name: `php artisan test --filter=testName` (recommended after making a change to a related file).
</laravel-boost-guidelines>
