<?php

namespace jbennecker\blog;

use Page;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

/**
 * @method HasManyList BlogCategories()
 */
class BlogPage extends Page
{

    private static $table_name = 'BlogPage';

    private static $allowed_children = [
        BlogPostPage::class,
    ];

    private static $has_many = [
        'BlogCategories' => BlogCategory::class,
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $config = GridFieldConfig_RecordEditor::create();
        $fields->addFieldToTab('Root.Blog', GridField::create('BlogCategories', 'BlogCategories', $this->BlogCategories(), $config));

        return $fields;
    }
}
