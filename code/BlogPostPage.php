<?php

class BlogPostPage extends Page
{

    private static $allowed_children = false;

    private static $can_be_root = false;

    private static $db = [
        'Date' => 'Date',
        'TeaserText' => 'Text',
        'TeaserTitle' => 'Varchar(255)',
    ];

    private static $default_sort = 'Date';

    private static $defaults = [
        'ShowInMenus' => false,
    ];

    private static $has_one = [
        'TeaserImage' => Image::class,
    ];

    private static $many_many = [
        'BlogCategories' => BlogCategory::class,
    ];

    private static $searchable_fields = [
        'Date' => 'Date',
        'Title' => 'Title',
    ];

    private static $show_in_sitetree = false;

    private static $summary_fields = [
        'Date' => 'Date',
        'Title' => 'Title',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab('Root.Blog', DateField::create('Date')->setConfig('showcalendar', true));
        $fields->addFieldToTab('Root.Blog', CheckboxSetField::create('BlogCategories', 'Selected categories', $this->Parent()->BlogCategories()->map('ID', 'Title')));
        $fields->addFieldToTab('Root.Blog', TextField::create('TeaserTitle'));
        $fields->addFieldToTab('Root.Blog', TextareaField::create('TeaserText'));
        $fields->addFieldToTab('Root.Blog', UploadField::create('TeaserImage'));

        return $fields;
    }
}
