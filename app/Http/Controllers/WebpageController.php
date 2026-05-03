<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Webpage;
use Illuminate\Support\Facades\Auth;
class WebpageController extends Controller
{
   public function index()
{
    $pages = Webpage::get(); 

    return view('index', compact('pages'));
}
public function add(){
    return view('AdminDashboard.WebPage.addEdit');
}
public function save(Request $request){
    $page = new Webpage([
        'name' => $request->get('page_name'),
        'slug' => $request->get('page_slug'),
        'html' => $request->get('page_content'),
        'status' => $request->get('page_status'),
        'created_by' => Auth::user()->id
    ]);
    $page->save();
    return redirect()->route('webpage.index');
}
    public function edit($id){
    $data = Webpage::find($id);

    return view('AdminDashboard.WebPage.addEdit', [
        'data' => $data
    ]);
}
public function update(Request $request, $id){
    $page = Webpage::find($id);

    $page->name = $request->get('page_name');
    $page->slug = $request->get('page_slug');
    $page->html = $request->get('page_content');
    $page->status = $request->get('page_status');
    $page->updated_by = Auth::id();
    $page->save();
    return redirect()->route('webpage.index');
}
    public function viewDelete($id){
    $page = Webpage::find($id);

    return view('AdminDashboard.WebPage.delete', [
        'page' => $page
    ]);
}
public function delete($id){
    WebPage::where('id', $id)->delete();

    return redirect()->route('webpage.index');
}
public function landing()
{
    $pages = Webpage::all();
    return view('index', compact('pages'));
}
   public function viewPage($page){
    $data = Webpage::where('slug',$page)->firstOrFail();
    $pages = Webpage::all(); 
    return view('dynamic', [
        'data' => $data,
        'pages' => $pages
    ]);
}
}
