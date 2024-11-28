# Auraschedule

![Auraschedule](./public/landing-page-dark.png#gh-dark-mode-only)
![Auraschedule](./public/landing-page-light.png#gh-light-mode-only)

## About Auraschedule

Auraschedule is a robust scheduling and subscription platform built using Laravel 11 and Vue.js 3 with TypeScript. This application supports multi-tenancy, subscription-based plans, and service bookings, catering to businesses of all sizes.

## Features

- **Multi-Tenancy**: Auraschedule supports multiple tenants, powered by Spatie's Multitenancy package, allowing multiple businesses to share the platform.
- **Subscription Plans**: Integrated with Stripe via Laravel Cashier for free and paid plans.
- **Service Booking**: Businesses can offer both free and paid services.
- **Vue.js Frontend**: Fully powered by Vue.js 3 with TypeScript for a seamless and modern user experience.
- **Dynamic Routing**: Tighten's Ziggy for consistent frontend-backend route synchronization.
- **Secure API Access**: Managed with Laravel Sanctum.
- **Responsive UI**: Built with TailwindCSS for mobile-friendly layouts.

## Tech Stack

- **Backend**: Laravel 11
- **Frontend**: Vue.js 3 with TypeScript, Inertia.js
- **CSS Framework**: TailwindCSS
- **Subscription**: Stripe (via Laravel Cashier)
- **Multi-Tenancy**: Spatie Laravel Multitenancy
- **Routing**: Tighten Ziggy
- **Database**: MariaDB or SQLite(configured by default)

## Requirements

- PHP ^8.2
- Node.js ^16 and npm
- Composer
- MariaDB or SQLite
- Stripe Account (for payment processing)

### Setting Up Stripe Environment Variables

Edit the `.env` file in the project root directory and add the following environment variables:

```bash
STRIPE_KEY=your-stripe-public-key
STRIPE_SECRET=your-stripe-secret-key
STRIPE_WEBHOOK_SECRET=whsec_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
```

### Listening to Stripe Webhooks

Run Stripe CLI to forward events to your local environment:

```bash
stripe listen --forward-to https://auraschedule.test/stripe/webhook
```

### Testing Stripe

Trigger events to test the subscription flow:

```bash
stripe trigger checkout.session.completed
stripe trigger customer.subscription.created
stripe trigger customer.subscription.updated
```

### Frontend Structure

The frontend is built using Vue.js 3 with TypeScript and Inertia.js. The frontend assets are located in the `resources/js` directory.

#### Key Frontend Directories

- `resources/js/Pages`: Contains Vue components for each page.
- `resources/js/Layouts`: Shared layout components (e.g., AuthenticatedLayout.vue).
- `resources/js/Components`: Reusable Vue components.

#### Compiling Assets

Run `npx vite build` to compile the frontend assets.

### Testing

Run the following command to run the tests:

```bash
composer test
```

## Contribution

This project is developed by Itamar Junior as a solo developer. Contributions are welcome via pull requests on GitHub.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgements

- [Laravel](https://laravel.com)
- [Vue.js](https://vuejs.org)
- [TailwindCSS](https://tailwindcss.com)
- [Spatie Laravel Multitenancy](https://spatie.be/docs/laravel-multitenancy/v2/introduction)
- [Laravel Cashier](https://laravel.com/docs/8.x/billing)

## Contact

If you have any questions or feedback, please don't hesitate to reach out to me on GitHub: [ItamarJunior](https://github.com/codeitamarjr).
For support or collaboration, contact me at [hello@itjunior.dev](mailto:hello@itjunior.dev)
