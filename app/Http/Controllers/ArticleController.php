<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * @var array
     */
    protected array $articles = [
        1 => [
            'title'=>'First article',
            'content'=>'afhuashihfasfhasfiaihfhahfsahfhaj'
        ],
        2 => [
            'title'=>'Second article',
            'content'=>'gaskkaksajkjkasjhlsajodsadaksd'
        ]
    ];

    /**
     * Display a listing of the resource.
     *
     * @return View
     */

    public function index():View
    {
        return \view('articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return \view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(StoreArticleRequest $request, Article $article): RedirectResponse
    {
        $validated = $request->validated([]);
        $articleItem = $article->create($validated);

        $request->session()->flash('status', 'The article was created!');
        return redirect()->route('articles.show', ['article' => $articleItem->id]);

    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id):View
    {
        return view('articles.show',["article"=>Article::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return \view('articles.edit', ["article"=>Article::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreArticleRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(StoreArticleRequest $request, int $id): RedirectResponse
    {
        $article = (new Article())->findOrFail($id);
        $validated = $request->validated();
        $article->fill($validated);
        $article->save();

        $request->session()->flash('status', "Article updated successfully");
        return redirect()->route('articles.show', ['article' => $article->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int @id
     * @return RedirectResponse
     */
    public function destroy(string $id)
    {
        $article = (new Article())->findOrFail($id);
        $article->delete();
        session()->flash('status', "Article deleted successfully");
        return redirect()->route('home.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return bool
     */
    public function any()
    {
        return $this->count()>0;
    }

}
