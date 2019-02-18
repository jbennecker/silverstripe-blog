<?php

/**
 * Class BlogCategory
 *
 * @property string $URLSegment
 * @method BlogPage BlogPage()
 */
class BlogCategory extends DataObject
{

    private static $db = [
        'Title' => 'Varchar',
        "URLSegment" => "Varchar(255)",
    ];

    private static $default_sort = 'Title';

    private static $indexes = [
        "URLSegment" => true,
    ];

    private static $belongs_many_many = [
        'BlogPostPages' => BlogPostPage::class,
    ];

    private static $has_one = [
        'BlogPage' => BlogPage::class,
    ];

    public function getLink()
    {
        return Controller::join_links($this->BlogPage()->Link(), 'category', $this->URLSegment);
    }
}
