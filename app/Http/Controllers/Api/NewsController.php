<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;

/**
 * @group News
 * 
 * News API
 */
class NewsController extends Controller
{
    /**
     * @OA\Get(
     *      path="/projects",
     *      operationId="getProjectsList",
     *      tags={"Projects"},
     *      summary="Get list of projects",
     *      description="Returns list of projects",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/ProjectResource")
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     */
    
    /**
     * Display a list of all news
     *
     * @return \Illuminate\Http\Response
     * @queryParam num int Number of results (limit). Example: 100
     * @queryParam latest_month boolean Limit results to latest month only. Example: false
     */
    public function index(Request $request)
    {
        if ($request->latest_month === 'true') {
            if (intval($request->num) > 0) {
                return News::where('created_at', '>=', Carbon::now()->subMonth()->toDateTimeString())->limit($request->num)->get();
            }
            return News::where('created_at', '>=', Carbon::now()->subMonth()->toDateTimeString())->get();
        }
        if (intval($request->num) > 0) {
            return News::limit($request->num)->get();
        }
        return News::all();
    }

    /**
     * Display the specified new.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     * @urlParam  id required The UUID of the post.
     */
    public function show($id)
    {
        return News::findOrFail($id);
    }
}
