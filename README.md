# Validate YouTube URLs
This project provides an endpoint in Laravel to validate YouTube links.

📌 **Requirements**
- PHP 8+
- Composer
- Laravel 12
- YouTube API Key (Google API)

🚀 **Installation**
1. Clone this repository:
   ```bash
   git clone https://github.com/JavierTibi/validate_youtube_urls.git

2. Enter the project directory:
    ```bash
    cd validate_youtube_urls

3. Install dependencies with Composer:
    ```bash
    composer install

4. Copy the environment file:
    ```bash
    cp .env.example .env

5. Configure the YouTube API key in the .env file:
    ```bash
    YOUTUBE_API_KEY=your_api_key_here

6. Generate the application key:
    ```bash
    php artisan key:generate

7. Clear configuration cache:
    ```bash
    php artisan config:clear
    php artisan config:cache

8. Start the local server:

    ```bash
    php artisan serve

📡 Endpoint: Validate YouTube Links

    - POST /api/validate-youtube-links

📥 Parameters (JSON Body)

    ```json
    {
    "links": [
        "https://www.youtube.com/watch?v=abcdefg",
        "https://youtu.be/hijklmn"
    ]
    }

📤 Responses

✅ 200 OK (Successful validation)
    ```json
    {
    "message": "Validation successful"
    }

❌ 400 Bad Request (If any link is invalid)
    ```json
    {
    "error": "Invalid format in the links"
    }
🛠 Technologies used

- Laravel 12
- PHP 8+
- Alaouy YouTube API

📄 License This project is licensed under the MIT License.