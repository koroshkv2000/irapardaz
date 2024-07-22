<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;


class LinkController extends Controller
{

    const user_id = 1; // Change this for switch to another user profile
    public function createView()
    {
        return view("createLink");
    }

    public function create(Request $request)
    {
        // Validate data from user
        $request->validate([
            'url' => 'required|url:http,https',
        ]);

        // Generate random string
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 5; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        // Insert new link into Redis
        Redis::set("link:" . $randomString . ".". self::user_id .":view", 0);
        Redis::set("link:" . $randomString . ".". self::user_id .":url", $request->url);

        // redirect to links list
        return redirect("/link/list");
    }

    public function list(Request $request)
    {
        $user_id =  self::user_id;
        $userLinkKeys = Redis::keys("link:*.$user_id:url");
        $links = [];
        foreach ($userLinkKeys as $key){
            $key = explode(":" ,$key)[1];
            $shortCode = explode("." ,$key)[0];
            $url = Redis::get("link:$key:url");
            $view = Redis::get("link:$key:view");
            $links[] = [
                "url"=>$url,
                "shortCode"=>$shortCode,
                "view"=>$view,
            ];
        }



        $links = collect($links)->sortByDesc('view');

        if (!empty($request->c)){
            $links = $links->take($request->c);
        }

        return view("linkList", ["links" => $links]);
    }

    public function shortLink($code)
    {
        //Find link or return Error 404
        $keys = Redis::keys("link:$code*:url");
        if(count($keys) !== 0){
            $key  = explode(":" ,$keys[0])[1];
            Redis::incr("link:$key:view");
            $url = Redis::get("link:$key:url");

            return redirect($url);
        }
        return abort(404);

    }
}
