<?php

namespace jbennecker\blog;

use PageController;
use SilverStripe\ORM\PaginatedList;

class BlogPageController extends PageController
{

    private static $allowed_actions = [
        'category',
    ];

    private $posts = null;

    private $currentCategorySlug;

    public function PaginatedBlogPosts()
    {
        $posts = $this->posts;
        if (!$posts) {
            $posts = BlogPostPage::get();
        }
        $posts = $posts->sort('Date DESC');

        return new PaginatedList($posts, $this->request);
    }

    public function category($request)
    {
        $slug = $request->param('ID');
        if (!$slug) {
            $this->httpError(404, 'Not Found');
            return;
        }

        $category = BlogCategory::get()->where(['URLSegment' => $slug])->first();
        $posts = BlogPostPage::get()->filter('BlogCategories.ID', $category->ID);
        $this->posts = $posts;
        $this->currentCategorySlug = $category->URLSegment;

        return $this->render();
    }

    public function getCurrentCategorySlug()
    {
        return $this->currentCategorySlug;
    }
}
