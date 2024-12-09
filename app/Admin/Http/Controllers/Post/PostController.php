<?php

namespace App\Admin\Http\Controllers\Post;

use App\Admin\DataTables\Post\PostDataTable;
use App\Http\Controllers\Controller;
use App\Admin\Http\Requests\Post\PostRequest;
use App\Admin\Repositories\Post\PostCatalogueRepositoryInterface;
use App\Admin\Repositories\Post\PostRepositoryInterface;
use App\Admin\Services\Post\PostServiceInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $repository;
    protected $postCatalogueRepository;
    protected $service;

    public function __construct(
        PostRepositoryInterface $repository,
        PostCatalogueRepositoryInterface $postCatalogueRepository,
        PostServiceInterface $service
    ) {
        $this->repository = $repository;
        $this->postCatalogueRepository = $postCatalogueRepository;
        $this->service = $service;
    }

    public function index(PostDataTable $dataTable)
    {
        return $dataTable->render('admin.post.index');
    }

    public function create()
    {
        $postCatalogues = $this->postCatalogueRepository->getFlatTree();
        return view('admin.post.create', compact('postCatalogues'));
    }

    public function store(PostRequest $request)
    {
        $this->service->store($request);
        return redirect()->route('admin.post.index')->with('success', 'Thêm bài viết mới thành công');
    }

    public function edit($id)
    {
        $post = $this->repository->find($id);
        $postCatalogues = $this->postCatalogueRepository->getFlatTree();
        return view('admin.post.edit', compact('post', 'postCatalogues'));
    }

    public function update(PostRequest $request)
    {
        $this->service->update($request);
        return redirect()->route('admin.post.index')->with('success', 'Cập nhật bài viết thành công');
    }

    public function updateStatus(Request $request)
    {
        $data = $request->only('id', 'status');
        $this->repository->update($data['id'], $data);
        return response()->json(['status' => 'success', 'message' => 'Cập nhật trạng thái thành công']);
    }

    public function delete($id)
    {
        $this->repository->delete($id);
        return response()->json(['status' => 'success', 'message' => 'Xóa bài viết thành công']);
    }
}