# This Repo is follow form Slack training (Julius Bhai Given resources)

## something i need to remember, or what i learn new.

-   In the context of Laravel, "bootstrapping" refers to the process of initializing and setting up the application environment.
-   in 'config/app.php' we can set Application Debug Mode.
-   If you change your application's encryption key, all authenticated user sessions will be logged out of your application, it will no longer be possible to decrypt any data that was encrypted with your previous encryption key.
-   To mitigate this issue, Laravel allows you to list your previous encryption.
-   Migration squashing is only available for the MySQL, PostgreSQL, and SQLite.
-   he following command will roll back the last five migrations: `php artisan migrate:rollback --step=5`
-   While the framework internally uses dozens of service providers, you also have the option to create your own, `bootstrap/providers.php` file.
-   service providers are the most important aspect of the entire Laravel bootstrap process.
-   Dependency injection is: class dependencies are "injected" into the class via the constructor.
-   Remember, controllers, event listeners, middleware, and various other types of classes within Laravel applications are always resolved using the container:



#### Done task for today

-   was reading document 'Meet Laravel'
-   was reading document 'Why Laravel'
-   reading The Application Bootstrap File Basic Document.
-   reading config/app.php Document.
-   reading Gracefully Rotating Encryption Keys.
-   Database: Migrations introduction document reading.
-   Database: Migrations table document reading.
-   Rolling Back Migrations reading documentation.

-   Reading Document about Introduction of Request Lifecycle.
  -  Reading Document HTTP / Console Kernels.
  -  Reading Document Service Providers.
  -  Reading Document Routing.
  -  Reading Document Focus on Service Providers.
-   Reading Document about Service Container.
  -  Reading introduction.
  -  Reading Zero Configuration Resolution.
  -  Reading When to Utilize the Container.
  -  Reading Simple Bindings.
  -  

-   Reading Document about Service Container.
  -   Reading Binding A Singleton.
  -   Reading Binding Scoped Singletons.
  -   Reading Binding Instances.
  -   Reading Binding Interfaces to Implementations.
  -   Reading Contextual Binding.
  -   Reading Binding Primitives.
  -   Reading Binding Typed Variadics.
  -   Tagging.
  -   Extending Binding.
  -   The make Method.
      Automatic Injection.
      Method Invocation and injection.
      Container Event.
      PSR-11
- Reading Document about Service Providers.
- Introduction.
- writing service Providers.
- The register method.
- the binding and singletones properties.
- The Boot method.
- Registering Provisers.
- Deferred Providers. 
     
