<?php

namespace App\Http\Controllers;

use App\Organ;
use App\Post;
use App\Rank;
use App\Worker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use RealRashid\SweetAlert\Toaster;
use TCG\Voyager\Models\Category;

class AdminController extends Controller
{
    public function workersIndex()
    {
        $workers = Worker::all();
        return view('vendor.voyager.workers.browse', ['workers' => $workers]);
    }
    public function organsIndex()
    {
        $organs = Organ::all();
        return view('vendor.voyager.organ.browse', compact('organs'));
    }
    public function ranksIndex()
    {
        $ranks = Rank::all();
        return view('vendor.voyager.ranks.browse', compact('ranks'));
    }
    public function postsIndex()
    {
        $posts = Post::all();
        return view('vendor.voyager.news.browse', compact('posts'));
    }
    public function rankCreat()
    {
        return view('vendor.voyager.ranks.add');
    }
    public function workerCreat()
    {
        $ranks = Rank::all();
        $organs = Organ::all();
        return view('vendor.voyager.workers.add', ['organs' => $organs, 'ranks' => $ranks]);
    }
    public function organCreat()
    {
        $organs = Organ::all();
        return view('vendor.voyager.organ.add', compact('organs'));
    }
    public function newsCreat()
    {
        $categories = Category::all();
        return view('vendor.voyager.news.add', compact('categories'));
    }
    public function rankStore(Request $request)
    {
        $request->validate([
                'rank_name_uz'  => ['required','string'],
                'rank_name_en'  => ['required','string'],
                'rank_name_ru'  => ['required','string'],
                'rank_name_cyrl'  => ['required','string'],
            ]);
        $rank = new Rank();
        $rank->rank_name_uz = $request->rank_name_uz;
        $rank->rank_name_en = $request->rank_name_en;
        $rank->rank_name_ru = $request->rank_name_ru;
        $rank->rank_name_cyrl = $request->rank_name_cyrl;
        $rank->save();

        return redirect()->back();
    }
    public function organStore(Request $request)
    {
        $request->validate([
            'organ_name_uz'  => ['required','string'],
            'organ_name_en'  => ['required','string'],
            'organ_name_ru'  => ['required','string'],
            'organ_name_cyrl'  => ['required','string'],
            'address_uz'  => ['required'],
            'address_en' => ['required'],
            'address_ru' => ['required'],
            'address_cyrl' => ['required'],
            'ghazna_name_uz' => ['required','string'],
            'ghazna_name_en' => ['required','string'],
            'ghazna_name_ru' => ['required','string'],
            'ghazna_name_cyrl' => ['required','string'],
            'bank_name_uz' => ['required'],
            'bank_name_en' => ['required'],
            'bank_name_ru' => ['required'],
            'bank_name_cyrl' => ['required'],
            'organ_photo' =>  ['image', 'mimes:jpg,jpeg,png', 'max:3072'],
            'phone_number' => ['required', 'regex:/[0-9]([0-9]|-(?!-))+/'],
            'fax_number' => ['required', 'regex:/[0-9]([0-9]|-(?!-))+/'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:organs'],
            'exat_standart_uz' => ['required', 'string', 'email', 'max:255', 'unique:organs'],
            'SH_X_V' => ['required','numeric'],
            'stir_number' => ['required','numeric'],
            'x_r' => ['required','numeric', 'min:20'],
            'banks_code' => ['required','numeric'],
        ]);
        $filename = $request->file('organ_photo')->store('organs'. '/' .date('FY'), 'public');
        $organ = new Organ();
        $organ->organ_name_uz = $request->organ_name_uz;
        $organ->organ_name_en = $request->organ_name_en;
        $organ->organ_name_ru = $request->organ_name_ru;
        $organ->organ_name_cyrl = $request->organ_name_cyrl;
        $organ->address_uz = $request->address_uz;
        $organ->address_en = $request->address_en;
        $organ->address_ru = $request->address_ru;
        $organ->address_cyrl = $request->address_cyrl;
        $organ->ghazna_name_uz = $request->ghazna_name_uz;
        $organ->ghazna_name_en = $request->ghazna_name_en;
        $organ->ghazna_name_ru = $request->ghazna_name_ru;
        $organ->ghazna_name_cyrl = $request->ghazna_name_cyrl;
        $organ->bank_name_uz = $request->bank_name_uz;
        $organ->bank_name_en = $request->bank_name_en;
        $organ->bank_name_ru = $request->bank_name_ru;
        $organ->bank_name_cyrl = $request->bank_name_cyrl;
        $organ->organ_photo = $filename;
        $organ->phone_number = $request->phone_number;
        $organ->fax_number = $request->fax_number;
        $organ->email = $request->email;
        $organ->SH_X_V = $request->SH_X_V;
        $organ->stir_number = $request->stir_number;
        $organ->x_r = $request->x_r;
        $organ->banks_code = $request->banks_code;
        $organ->exat_standart_uz = $request->exat_standart_uz;
        $organ->save();

        return redirect()->back();
    }
    public function workerStore(Request $request)
    {
        $validatedData = $request->validate([
            'organ_id' => ['required'],
            'rank_id' => ['required'],

            'worker_name_uz' => ['required','string'],
            'worker_name_en' => ['required','string'],
            'worker_name_ru' => ['required','string'],
            'worker_name_cyrl' => ['required','string'],

            'commitment_uz' => ['required'],
            'commitment_en' => ['required'],
            'commitment_ru' => ['required', 'max:255'],
            'commitment_cyrl' => ['required', 'max:255'],

            'biography_uz' => ['required'],
            'biography_en' => ['required'],
            'biography_ru' => ['required'],
            'biography_cyrl' => ['required'],

            'work_address_uz' => ['required'],
            'work_address_en' => ['required'],
            'work_address_ru' => ['required'],
            'work_address_cyrl' => ['required'],

            'worker_photo' => ['image', 'mimes:jpg,jpeg,png', 'max:3072'],
            'phone_number' => ['required', 'regex:/[0-9]([0-9]|-(?!-))+/'],
            'fax_number' => ['required', 'regex:/[0-9]([0-9]|-(?!-))+/'],
            'worker_email' => ['required', 'string', 'email', 'max:255', 'unique:workers'],
        ]);
        $organ_id = $request->get('organ_id');
        $rank_id = $request->get('rank_id');
        $filename = $request->file('worker_photo')->store('workers'. '/' .date('FY'), 'public');
        $worker = new Worker();
        $worker->worker_name_uz = $request->worker_name_uz;
        $worker->worker_name_en = $request->worker_name_en;
        $worker->worker_name_ru = $request->worker_name_ru;
        $worker->worker_name_cyrl = $request->worker_name_cyrl;
        $worker->commitment_uz = $request->commitment_uz;
        $worker->commitment_en = $request->commitment_en;
        $worker->commitment_ru = $request->commitment_ru;
        $worker->commitment_cyrl = $request->commitment_cyrl;
        $worker->biography_uz = $request->biography_uz;
        $worker->biography_en = $request->biography_en;
        $worker->biography_ru = $request->biography_ru;
        $worker->biography_cyrl = $request->biography_cyrl;
        $worker->work_address_uz = $request->work_address_uz;
        $worker->work_address_en = $request->work_address_en;
        $worker->work_address_ru = $request->work_address_ru;
        $worker->work_address_cyrl = $request->work_address_cyrl;
        $worker->worker_photo = $filename;
        $worker->phone_number = $request->phone_number;
        $worker->fax_number = $request->fax_number;
        $worker->organ_id = $organ_id;
        $worker->rank_id = $rank_id;
        $worker->worker_creator_organ = Auth::id();
        $worker->worker_email = $request->worker_email;
        $worker->save();
        return redirect()->back();
    }
    public function organRemove(Organ $organ)
    {
        $organ->delete();
        toast('Organ deleted successfully','success','top-right');
        return redirect()->back();
    }
    public function workerRemove(Worker $worker)
    {
        $worker->delete();
        toast('Worker deleted successfully','success','top-right');
        return redirect()->back();
    }
    public function rankRemove(Rank $rank)
    {
        $rank->delete();
        toast('Ranks deleted successfully','success','top-right');
        return redirect()->back();
    }
    public function postRemove(Post $post)
    {
        $post->delete();
        toast('Post deleted successfully','success','top-right');
        return redirect()->back();
    }
    public function checkSlug(Request $request)
    {
        $slug = Post::where('slug', $request->slug)->first();
        if ($slug or $request->slug == ''){
            return 'error';
        }else{
            return 'ok';
        }
    }
    public function newsStore(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title_uz' => 'required',
            'title_cyrl' => 'required',
            'description_uz' => 'required',
            'description_cyrl' => 'required',
            'body_uz' => 'required',
            'body_cyrl' => 'required',
            'slug' => 'required',
            'post_image' => 'required|image|mimes:jpg,jpeg,png|max:10240',
            /*'meta_keywords_uz' => 'string',
            'meta_keywords_cyrl' => 'string',
            'meta_keywords_ru' => 'string',
            'meta_keywords_en' => 'string',*/
        ]);
        $category_id = $request->get('category_id');
        $status = $request->get('status');
        $filename = $request->file('post_image')->store('posts'.'/'.date('FY'), 'public');
        $post = new Post();
        $post->author_id = Auth::id();
        $post->category_id = $category_id;
        $post->title_uz = $request->title_uz;
        $post->title_cyrl = $request->title_cyrl;
        $post->title_ru = $request->title_ru;
        $post->title_en = $request->title_en;
        $post->description_uz = $request->description_uz;
        $post->description_cyrl = $request->description_cyrl;
        $post->description_ru = $request->description_ru;
        $post->description_en = $request->description_en;
        $post->body_uz = $request->body_uz;
        $post->body_cyrl = $request->body_cyrl;
        $post->body_ru = $request->body_ru;
        $post->body_en = $request->body_en;
        $post->image = $filename;
        $post->slug = $request->slug;
        $post->meta_keywords_uz = $request->meta_keywords_uz;
        $post->meta_keywords_cyrl = $request->meta_keywords_cyrl;
        $post->meta_keywords_ru = $request->meta_keywords_ru;
        $post->meta_keywords_en = $request->meta_keywords_en;
        $post->status = $status;
        $post->save();

        $notification = array(
            'message' => 'News created successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function workerView(Worker $worker)
    {
        return view('vendor.voyager.workers.view', compact('worker'));
    }
    public function rankView(Rank $rank)
    {
        return view('vendor.voyager.ranks.view', compact('rank'));
    }
    public function organView(Organ $organ)
    {
        return view('vendor.voyager.organ.view', compact('organ'));
    }
    public function postView(Post $post)
    {
        return view('vendor.voyager.news.view', compact('post'));
    }
}
