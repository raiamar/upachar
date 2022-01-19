<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Page;
use App\Faq ;
use App\Contact;
use App\Testimonial;
use Illuminate\Support\Facades\DB;
use Response;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }

    public function contactUs()
    {
        $contact = Contact::all();
        return view('contact.index',compact('contact'));
    }

    public function becomeavendor(Request $request)
    {
       if ($files = $request->file('image')) {
       // Define upload path
           $destinationPath = public_path('/img/'); // upload path
 // Upload Orginal Image
           $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $image);
           $insert['image'] = "$image";
        // Save In Database
        // $imagemodel->photo_name="$image";
        // dd($image);
       }
        DB::table('becomeavendor')
            ->where('id', 1)
            ->update([
            'h1' => $request->h1,
            'h2' => $request->h2,
            'url' => $request->url,
            'image' => $image,
            'about2' => $request->about2,
            'af1' => $request->af1,
            'afs1' => $request->afs1,
            'af2' => $request->af2,
            'afs2' => $request->afs2,
            'af3' => $request->af3,
            'afs3' => $request->afs3,
            'af4' => $request->af4,
            'afs4' => $request->afs4,
            'af5' => $request->af5,
            'afs5' => $request->afs5,
            'af6' => $request->af6,
            'afs6' => $request->afs6,
            'about1' => $request->about1,
            'f1text' => $request->f1text,
            'f1subtext' => $request->f1subtext,
            'f2text' => $request->f2text,
            'f2subtext' => $request->f2subtext,
            'f3text' => $request->f3text,
            'f3subtext' => $request->f3subtext,
            'f4text' => $request->f4text,
            'f4subtext' => $request->f4subtext,
        ]);
        flash('Page has been Updated successfully')->success();
        return redirect()->back();
    }
    public function testimonialupdate_status(Request $request)
    {
    //    dd($request->id);
            try {
                DB::table('testimonial')
                    ->where('id', $request->cid)
                    ->update([
                        'status' => $request->status,
                    ]);
                    return Response::json('Status Changed');
            } catch (\Exception $e) {
                        $bug = $e->getMessage();
                        return Response::json(['error' => $bug],404);
                    }
    }
    // public function createtestimonial()
    // {
    //     return view('pages.create');
    // }
    public function testimonialstore(Request $request)
    {
        if ($files = $request->file('image')) {
            $destinationPath = public_path('/img/');
            $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $image);
            $insert['image'] = "$image";
        }
         DB::table('testimonial')->insert([
             'name' => $request->name,
             'title' => $request->title,
             'about' => $request->about,
             'image' => $image,
             'status' => $request->status,
         ]);
         flash('Testional has been Added successfully')->success();
         return redirect()->route('pages.testimonialindex');
     }


     public function testimonialedit($id)
     {
         $flash_deal = DB::table('testimonial')->where('id', $id)->first();
         return view ('testimonial.edit',compact('flash_deal'));
     }
     public function testimonialupdate(Request $request, $id)
     {
        if ($files = $request->file('image')) {
            // Define upload path
                $destinationPath = public_path('/img/');
            // Upload Orginal Image
                $image = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $fullpath = 'img/'.$image;
                $files->move($destinationPath, $image);
                $insert['image'] = "$image";

                DB::table('testimonial')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'title' =>$request->title,
                    'about' =>$request->about,
                    'image' => $fullpath,
                    // 'image' => $image,
                    'status' => $request->status,
                ]);
            }else{
                DB::table('testimonial')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'title' =>$request->title,
                    'about' =>$request->about,
                    'status' => $request->status,
                ]);
            }
        


                flash('Testional has been Updated successfully')->success();
                return redirect()->route('pages.testimonialindex');
     }


     public function testimonial_delete($id)
     {
            DB::table('testimonial')
                ->where('id', $id)
                ->delete();
                flash('Testimonial deleted successfully')->success();
                return redirect()->back();
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page;
        $page->title = $request->title;
        if (Page::where('slug', preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug)))->first() == null) {
            $page->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
            $page->content = $request->content;
            $page->meta_title = $request->meta_title;
            $page->meta_description = $request->meta_description;
            $page->keywords = $request->keywords;
            if ($request->hasFile('meta_image')) {
                $page->meta_image = $request->meta_image->store('uploads/custom-pages');;
            }
            $page->save();
            flash('New page has been created successfully')->success();
            return redirect()->route('pages.index');
        }
        flash('Slug has been used already')->warning();
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::where('slug', $id)->first();
        if($page != null){
            return view('pages.edit', compact('page'));
        }
        abort(404);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);
        $page->title = $request->title;
        if (Page::where('slug', preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug)))->first() != null) {
            $page->slug = preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(' ', '-', $request->slug));
            $page->content = $request->content;
            $page->meta_title = $request->meta_title;
            $page->meta_description = $request->meta_description;
            $page->keywords = $request->keywords;
            if ($request->hasFile('meta_image')) {
                $page->meta_image = $request->meta_image->store('uploads/custom-pages');;
            }
            $page->save();
            flash('New page has been created successfully')->success();
            return redirect()->route('pages.index');
        }
        flash('Slug has been used already')->warning();
        return back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Page::destroy($id)){
            flash('Page has been deleted successfully')->success();
            return redirect()->back();
        }
        return back();
    }
    public function show_custom_page($slug){
        $page = Page::where('slug', $slug)->first();
        if($page != null){
            return view('frontend.custom_page', compact('page'));
        }
        abort(404);
    }



    // for faq
    public function faqstore(Request $request)
    {
         DB::table('faqs')->insert([
             'question' => $request->question,
             'answer' => $request->answer,
             'position' => $request->position,
             'status' => $request->status,
         ]);
         flash('FAQ has been Added successfully')->success();
         return redirect()->route('pages.faqindex');
     }

     public function faqupdate_status(Request $request)
     {
     //    dd($request->id);
             try {
                 DB::table('faqs')
                     ->where('id', $request->cid)
                     ->update([
                         'status' => $request->status,
                     ]);
                     return Response::json('Status Changed');
             } catch (\Exception $e) {
                         $bug = $e->getMessage();
                         return Response::json(['error' => $bug],404);
                     }
     }


     public function faqedit($id)
     {
         $flash_deal = DB::table('faqs')->where('id', $id)->first();
         return view ('faq.edit',compact('flash_deal'));
     }
     public function faqupdate(Request $request, $id)
     {
            DB::table('faqs')
                ->where('id', $id)
                ->update([
                    'question' => $request->question,
                    'answer' =>$request->answer,
                    'position' =>$request->position,
                    'status' => $request->status,
                ]);
                flash('FAQ has been Updated successfully')->success();
                return redirect()->route('pages.faqindex');
     }

     public function faqdelete($id)
     {
         if(Faq::destroy($id)){
             flash('Page has been deleted successfully')->success();
             return redirect()->back();
         }
         return back();
     }
}