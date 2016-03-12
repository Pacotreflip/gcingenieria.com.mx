<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Validator;

class PostController extends Controller
{
    
    function index(){
        $posts = \App\Models\Post::all();
        return view('back.galeria.index', compact('posts'));
    }
    
    function destroy($id){
        $post = \App\Models\Post::find($id);
   
        unlink(public_path($post->imagens));
        unlink(public_path($post->imagenl));

        $post->delete();
        return redirect('posts');
    }
    
    public function create(){
        return view('back.galeria.create');
    }
    
    private function savePost($input, $pathS, $pathL)
    {
        $post = new \App\Models\Post;
        $post->titulo = $input['titulo'];
        $post->descripcion = $input['descripcion'];
        $post->imagens = $pathS;
        $post->imagenl = $pathL;
   
        $post->save();

        return $post;
    }
    
    public function edit(){
        
    }
    
    public function store()
    {
        $rules = array(
          'titulo'        => 'required|max:50',
          'descripcion'   => 'required|max:100',
          'imagen'        => 'required|image',
          'tags'          => 'required',
        );
        
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {
            return redirect(route('post.create'))
                ->withErrors($validator)
                ->withInput(Input::all());
        }else{
        
        $image = Input::file('imagen');
        $filename  = time() . '.' . $image->getClientOriginalExtension();
        $pathS = public_path('images/portfolio/small/' . $filename);
        $pathL = public_path('images/portfolio/large/' . $filename);
        $rps = 'images/portfolio/small/' . $filename;
        $rpl = 'images/portfolio/large/' . $filename;

        \Intervention\Image\Facades\Image::make($image->getRealPath())->resize(290, 217)->save($pathS);
        \Intervention\Image\Facades\Image::make($image->getRealPath())->save($pathL);
            
            
        $post = $this->savePost(Input::get(), $rps, $rpl);
        
        if(Input::get('tags') != ''){
            $tags = explode(',', Input::get('tags'));
            foreach ($tags as $tag) {
                $tag_ref = \App\Models\Tag::whereClave($tag)->first();
                if (is_null($tag_ref)) {
                    $tag_ref = new \App\Models\Tag();
                    $tag_ref->clave = $tag;
                    $post->tags()->save($tag_ref);
                } else {
                    $post->tags()->attach($tag_ref->id_tag);
                }
            }
        }
        return redirect('post/create')->with('ok','Elemento Insertado Correctamente');        
        
                }
                   }

    function galeria()
    {
        $posts = \App\Models\Post::all();   
        $tags = \App\Models\Tag::all();
        $tagsUsados = [];
        $tagsTotal = [];
        $contTags = 0;
        $contTagsTotal = 0;

        foreach($posts as $p){
            foreach($p->tags as $t){
                $tagsUsados[$contTags] = $t->clave;
                $contTags ++;
            }
        }
        
        foreach($tags as $tag){
            $tagsTotal[$contTagsTotal] = $tag->clave;
            $contTagsTotal ++;
        }
        
        $tagsUsadosNeto = array_intersect($tagsTotal, $tagsUsados);
        
        return view('front.galeria')->with(array('posts' => $posts, 'tags' => $tags, 'tt' => $tagsUsadosNeto));
    }
}
