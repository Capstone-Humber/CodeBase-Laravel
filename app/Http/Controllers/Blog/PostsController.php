<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PostCategoriesRepository;
use App\Repositories\PostsRepository;
use App\Repositories\UserRepository;

class PostsController extends Controller {

    /**
     * @var UserRepository
     */
	protected $usersRepository;
    /**
     * @var PostsRepository
     */
	protected $postsRepository;
   

    /**
     * PostsController constructor.
     *
     * @param PostsRepository $postsRepository
     * @param UserRepository $usersRepository
     *
     */
	public function __construct(PostsRepository $postsRepository, UserRepository $usersRepository) 
    {
		
		$this->usersRepository = $usersRepository;
		$this->postsRepository = $postsRepository;
      

	}
	public function show($id) 
    {
        
		$posts = $this->postsRepository->findActive($id);
        

        $data['post'] = $posts;
        
		return view("blog.post", $data);

	}


    
}
