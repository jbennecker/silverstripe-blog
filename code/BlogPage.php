<?php

/**
 * @method HasManyList BlogCategories()
 */
class BlogPage extends Page
{

    private static $allowed_children = ['BlogPostPage'];

    private static $has_many = [
        'BlogCategories' => BlogCategory::class,
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $config = GridFieldConfig_RecordEditor::create();
        $fields->addFieldToTab(
            'Root.Categories',
            GridField::create('BlogCategories', 'BlogCategories', $this->BlogCategories(), $config)
        );

        return $fields;
    }
}
