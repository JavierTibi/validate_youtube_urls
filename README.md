Validate YouTube URLs
This project provides an endpoint in Laravel to validate YouTube links.

📌 Requirements

PHP 8+
Composer
Laravel 12
YouTube API Key (Google API)
🚀 Installation

Clone this repository:

bash
Copy
Edit
git clone https://github.com/JavierTibi/validate_youtube_urls.git
Enter the project directory:

bash
Copy
Edit
cd validate_youtube_urls
Install dependencies with Composer:

bash
Copy
Edit
composer install
Copy the environment file:

bash
Copy
Edit
cp .env.example .env
Configure the YouTube API key in the .env file:

ini
Copy
Edit
YOUTUBE_API_KEY=your_api_key_here
Generate the application key:

bash
Copy
Edit
php artisan key:generate
Clear configuration cache:

bash
Copy
Edit
php artisan config:clear
php artisan config:cache
Start the local server:

bash
Copy
Edit
php artisan serve
📡 Endpoint: Validate YouTube Links

POST /api/validate-youtube-links
📥 Parameters (JSON Body)

json
Copy
Edit
{
  "links": [
    "https://www.youtube.com/watch?v=abcdefg",
    "https://youtu.be/hijklmn"
  ]
}
📤 Responses

✅ 200 OK (Successful validation)

json
Copy
Edit
{
  "message": "Validation successful"
}
❌ 400 Bad Request (If any link is invalid)

json
Copy
Edit
{
  "error": "Invalid format in the links"
}
🛠 Technologies used

Laravel 12
PHP 8+
Alaouy YouTube API
📄 License This project is licensed under the MIT License.