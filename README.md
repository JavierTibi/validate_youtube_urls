# Validate YouTube URLs

Este proyecto proporciona un endpoint en Laravel para validar enlaces de YouTube.

## 📌 Requisitos
- PHP 8+
- Composer
- Laravel 12
- Clave de API de YouTube (Google API)

## 🚀 Instalación
1. Clona este repositorio:
   ```sh
   git clone https://github.com/JavierTibi/validate_youtube_urls.git
   ```
2. Ingresa al directorio del proyecto:
   ```sh
   cd validate_youtube_urls
   ```
3. Instala las dependencias con Composer:
   ```sh
   composer install
   ```
4. Copia el archivo de entorno:
   ```sh
   cp .env.example .env
   ```
5. Configura la clave de API de YouTube en el archivo `.env`:
   ```env
   YOUTUBE_API_KEY=tu_api_key_aqui
   ```
6. Genera la clave de aplicación:
   ```sh
   php artisan key:generate
   ```
7. Limpia caché de configuración:
   ```sh
   php artisan config:clear
   php artisan config:cache
   ```
8. Inicia el servidor local:
   ```sh
   php artisan serve
   ```

## 📡 Endpoint: Validar enlaces de YouTube
### `POST /api/validate-youtube-links`

#### 📥 **Parámetros** (JSON Body)
```json
{
  "links": [
    "https://www.youtube.com/watch?v=abcdefg",
    "https://youtu.be/hijklmn"
  ]
}
```

#### 📤 **Respuestas**
✅ **200 OK** (Validación exitosa)
```json
{
  "message": "Validación correcta"
}
```

❌ **400 Bad Request** (Si algún link no es válido)
```json
{
  "error": "Formato inválido en los links"
}
```

## 🛠 Tecnologías usadas
- Laravel 12
- PHP 8+
- Alaouy YouTube API

## 📄 Licencia
Este proyecto está bajo la licencia MIT.

