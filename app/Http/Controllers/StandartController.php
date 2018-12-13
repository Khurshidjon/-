<?php

namespace App\Http\Controllers;

use App\NewsLike;
use App\Organ;
use App\QuestionsForVoice;
use App\Rank;
use App\Standart;
use App\Voice;
use Illuminate\Cookie\CookieJar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use TCG\Voyager\Models\Post;
class StandartController extends Controller
{
   public function index()
   {
       $posts = Post::latest()->paginate(6);
       return view('front-end.index', [
           'posts' => $posts
       ]);
   }
   public function aboutUs()
   {
       return view('front-end.about-us');
   }
   public function admContact()
   {
       return view('front-end.adm_contact');
   }
   public function admSingle()
   {
       return view('front-end.adm_single');
   }
   public function admStructure()
   {
       return view('front-end.adm_structure');
   }
   public function adminstration()
   {
       $organs = Organ::with('workers')->get();
       return view('front-end.administrations', compact('organs'));
   }
   public function apparat()
   {
       $workers = DB::table('workers')->join('ranks', 'workers.rank_id', '=', 'ranks.id')->where('workers.organ_id',1)->get();

       return view('front-end.apparat', compact('workers'));
   }
   public function documents()
   {
       return view('front-end.documents');
   }
   public function FAQ()
   {
       return view('front-end.FAQ');
   }
   public function faqPost()
   {
       return view('front-end.faq_post');
   }
   public function feedback()
   {
       return view('front-end.feedback');
   }
   public function gallery()
   {
       return view('front-end.gallery');
   }
   public function laws()
   {
       return view('front-end.laws');
   }
   public function leadership()
   {
       return view('front-end.leadership');
   }
   public function metrology()
   {
       return view('front-end.metrology');
   }
   public function news()
   {
       $skip = 2;
       $take = 3;
       $question = QuestionsForVoice::find(1);

       $voice_one = Voice::where('improve_further', 1)->count();
       $voice_two = Voice::where('bad', 2)->count();
       $voice_three = Voice::where('good', 3)->count();
       $voice_four = Voice::where('excellent', 4)->count();
       $all_voice = Voice::count();

       $postsTwice = Post::orderBy('created_at', 'desc')->skip(0)->take(2)->get();
       if (isset($_COOKIE['social_survey'])){
           $social_survey = view('front-end.voice_answer', [
                    'voice_one' => $voice_one,
                    'voice_two' => $voice_two,
                    'voice_three' => $voice_three,
                    'voice_four' => $voice_four,
                    'all_voice' => $all_voice,
               ])->render();
       }else{
           $social_survey = view('front-end.voice')->with(['question' => $question])->render();
       }
       $posts = Post::orderBy('created_at', 'desc')->skip($skip)->take($take)->get();
       $skip += $take;
       return view('front-end.news', [
           'posts' => $posts,
           'postsTwice' => $postsTwice,
           'skip' => $skip,
           'social_survey' => $social_survey,
           'question' => $question,
       ]);
   }
   public function loadMoreNews(Request $request)
   {
       $skip = $request->skip;
       $skip = 1*$skip;
       $take = 2;
       $lang = App::getLocale();

       $posts = Post::orderBy('created_at', 'DESC')
           ->skip($skip)
           ->take($take)
           ->get();

       $skip += $take;

            $result = view('front-end.news-render', [
                'posts' => $posts,
                'lang' => $lang
            ])->render();

            $array = [
                'skip' => (string)$skip,
                'result' => $result,
            ];

       $result = json_encode($array);

       return $result;
   }
   public function newsSingle(Request $request)
   {
       $post = Post::find($request->id);
       if(!isset($_COOKIE['view_count'])){
           $post->featured++;
           setcookie('view_count', 1, time()+60*60*24*30);
       }
       $post->save();
       return view('front-end.news_single', ['post' => $post]);
   }
   public function likeNews(Request $request)
   {
       $like = $request->like;
       $post_id = $request->post_id;
       $uniquie_id = $request->uniquie_id;
       if (!isset($_COOKIE[$post_id])) {
           // normal vote submission code goes here

           $likedPost = new NewsLike();
           $likedPost->news_id = $post_id;
           $likedPost->uniquie_id = $uniquie_id;

           if ($like == 1){
               $likedPost->like_one = 1;
               $likedPost->like_two = 0;
               $likedPost->like_three = 0;
           }elseif ($like == 2){
               $likedPost->like_one = 0;
               $likedPost->like_two = 2;
               $likedPost->like_three = 0;
           }elseif ($like == 3){
               $likedPost->like_one = 0;
               $likedPost->like_two = 0;
               $likedPost->like_three = 3;
           }
           $likedPost->save();

           // then we set a cookie to expire in 30 days

           setcookie($post_id, $uniquie_id, time()+60*60*24*30);

       } else {
           $likedAgain = NewsLike::where('news_id', $post_id)->where('uniquie_id', $_COOKIE[$post_id])->first();
           if ($like == 1){
               $likedAgain->like_one = $like;
               $likedAgain->like_two = 0;
               $likedAgain->like_three = 0;
               $likedAgain->save();
           }elseif ($like == 2){
               $likedAgain->like_one = 0;
               $likedAgain->like_two = $like;
               $likedAgain->like_three = 0;
               $likedAgain->save();
           }elseif ($like == 3){
               $likedAgain->like_one = 0;
               $likedAgain->like_two = 0;
               $likedAgain->like_three = $like;
               $likedAgain->save();
           }
       }
       $one = NewsLike::where('news_id', $post_id)->where('like_one', 1)->count();
       $two = NewsLike::where('news_id', $post_id)->where('like_two', 2)->count();
       $three = NewsLike::where('news_id', $post_id)->where('like_three', 3)->count();
       $array = [
           'one' => $one,
           'two' => $two,
           'three' => $three,
       ];
       $result = json_encode($array);
       return $result;
   }

   public function openDataSingle()
   {
       return view('front-end.open_data_single');
   }
   public function openingData()
   {
       return view('front-end.opening_data');
   }
   public function photoGallery()
   {
       return view('front-end.photo_gallery');
   }
   public function pressService()
   {
       return view('front-end.press_service');
   }
   public function tender()
   {
       return view('front-end.tender');
   }
   public function vacancy()
   {
       return view('front-end.vacancy');
   }
   public function vacancySingle()
   {
       return view('front-end.vacancy_single');
   }
   public function videoBlog()
   {
       return view('front-end.video_blog');
   }
   public function workDays()
   {
       return view('front-end.work_days');
   }
   public function serviceVoice(Request $request)
   {
       $voice = $request->voice;
       $voice_one = Voice::where('improve_further', 1)->count();
       $voice_two = Voice::where('bad', 2)->count();
       $voice_three = Voice::where('good', 3)->count();
       $voice_four = Voice::where('excellent', 4)->count();
       $all_voice = Voice::count();
       if ($all_voice == 0){
           if ($voice == 4){
               $voice_one = 0;
               $voice_two = 0;
               $voice_three = 0;
               $voice_four = 1;
           }elseif ($voice == 3){
               $voice_one = 0;
               $voice_two = 0;
               $voice_three = 1;
               $voice_four = 0;
           }elseif ($voice == 2){
               $voice_one = 0;
               $voice_two = 1;
               $voice_three = 0;
               $voice_four = 0;
           }elseif ($voice == 1){
               $voice_one = 1;
               $voice_two = 0;
               $voice_three = 0;
               $voice_four = 0;
           }
           $all_voice = 1;
       }
       $question_id = $request->question_id;
       $question_voice = new Voice();
       if (!isset($_COOKIE['social_survey'])){
           if ($voice == 4){
               $question_voice->excellent = $voice;
           }elseif ($voice == 3){
               $question_voice->good = $voice;
           }elseif ($voice == 2){
               $question_voice->bad = $voice;
           }elseif ($voice == 1){
               $question_voice->improve_further = $voice;
           }
           $question_voice->question_id = $question_id;
           $question_voice->client_ip = $question_id;
           $question_voice->save();
           setcookie('social_survey', 1, time()+60*60*24*30, '/news', $_SERVER['HTTP_HOST']);

           $item = view('front-end.voice_answer', [
               'voice_one' => $voice_one,
               'voice_two' => $voice_two,
               'voice_three' => $voice_three,
               'voice_four' => $voice_four,
               'all_voice' => $all_voice,
           ])->render();
           return $item;
       }
   }
    public function voiceService(Request $request)
    {   $voice_one = Voice::where('improve_further', 1)->count();
        $voice_two = Voice::where('bad', 2)->count();
        $voice_three = Voice::where('good', 3)->count();
        $voice_four = Voice::where('excellent', 4)->count();
        $all_voice = Voice::count();
        if ($all_voice == ''){
            $all_voice = 1;
        }
        $item = view('front-end.voice_answer', [
            'voice_one' => $voice_one,
            'voice_two' => $voice_two,
            'voice_three' => $voice_three,
            'voice_four' => $voice_four,
            'all_voice' => $all_voice,
        ])->render();
        return $item;
    }
}
