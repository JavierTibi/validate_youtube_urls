<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alaouy\Youtube\Youtube;
use Illuminate\Support\Facades\Validator;

class YoutubeController extends Controller
{
    protected $youtube;

    public function __construct()
    {
        $this->youtube = new Youtube(env('YOUTUBE_API_KEY'));
    }

    /**
     * Validate Youtube links
     */
    public function validateYoutubeLinks(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'links' => 'required|array',
            'links.*' => 'url',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $validLinks = [];
        $invalidLinks = [];

        foreach ($request->links as $link) {
            $videoId = $this->extractVideoId($link);
            if ($videoId && $this->youtube->getVideoInfo($videoId)) {
                $validLinks[] = $link;
            } else {
                $invalidLinks[] = $link;
            }
        }

        return response()->json([
            'valid_links' => $validLinks,
            'invalid_links' => $invalidLinks,
        ]);
    }

    private function extractVideoId($url)
    {
        parse_str(parse_url($url, PHP_URL_QUERY), $queryParams);
        return $queryParams['v'] ?? null;
    }
}
