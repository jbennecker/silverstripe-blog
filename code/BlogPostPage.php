<?php

class BlogPostPage extends Page
{

    private static $can_be_root = false;

    private static $defaults = [
        'ShowInMenus' => false,
    ];

    private static $many_many = [
        'BlogCategories' => BlogCategory::class,
    ];

    private static $has_one = [
        'TeaserImage' => Image::class,
    ];

    private static $db = [
        'Date' => 'Date',
        'TeaserText' => 'Text',
        'TeaserTitle' => 'Varchar',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Main', DateField::create('Date'));

        $fields->addFieldToTab(
            'Root.Categories',
            CheckboxSetField::create(
                'BlogCategories',
                'Selected categories',
                $this->Parent()->BlogCategories()->map('ID', 'Title')
            )
        );

        $fields->addFieldToTab('Root.Teaser', TextField::create('TeaserTitle'));
        $fields->addFieldToTab('Root.Teaser', TextareaField::create('TeaserText'));
        $fields->addFieldToTab('Root.Teaser', UploadField::create('TeaserImage'));

        return $fields;
    }

    public function getMonth()
    {
        $time = strtotime($this->Date);
        return strftime('%b', $time);
    }
}
