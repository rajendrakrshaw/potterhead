# Potterhead E-Commerce

Potterhead E-Commerce is a Laravel-based e-commerce application that allows users to browse products, add them to a cart, and proceed to checkout using Razorpay for payments. The application features a modern, responsive design with a glass effect for the UI components. It is created for Harry Potter Fans , and those wo loves wizarding world.

## Features

- Product listing with images, descriptions, and prices.
- Add products to the cart with a toast notification.
- View and manage the cart in a modal.
- Checkout with Razorpay integration.
- Store order details in the database after successful payment.
- Display order summary on a thank you page.

## Technologies Used

- Laravel
- Bootstrap 4
- jQuery
- Razorpay

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/rajendrakrshaw/potterhead.git
    cd potterhead-ecommerce
    ```

2. **Install dependencies:**

    ```bash
    composer install
    npm install
    ```

3. **Setup environment variables:**

    Copy the `.env.example` to `.env` and update the necessary configurations.

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database and Razorpay credentials:

    ```env
    RAZORPAY_KEY=your_razorpay_key
    RAZORPAY_SECRET=your_razorpay_secret
    ```

4. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

5. **Run migrations and seed the database:**
   
   - At first go to the dbPHPMYADMIN forlder, there will be the database table exported, import that into your database, then

    ```bash
    php artisan migrate --seed
    ```

6. **Start the development server:**

    ```bash
    php artisan serve
    ```

7. **Compile assets:**

    ```bash
    npm run dev
    ```

## Usage

- Access the application at `http://localhost:8000`.
- Browse the products and add them to the cart.
- Click on "View Cart" to manage your cart.
- Proceed to checkout to make a payment using Razorpay.
- After payment, view the order summary on the thank you page.

## Order Management

After a successful payment, order details are stored in the database. The order includes:

- Order Id
- Customer name
- Email
- Address
- Total amount
- Ordered items (product details and quantities)

## Contributing

Feel free to submit issues or pull requests. Contributions are welcome!

## License

This project is open-source and available under the [MIT License](LICENSE).

## Acknowledgements

- [Laravel](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/)
- [Razorpay](https://razorpay.com/)

