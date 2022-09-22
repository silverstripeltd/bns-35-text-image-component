<?php

<?
php

namespace App\Blocks;

use DNADesign\Elemental\Models\ElementContent;
use Sheadawson\Linkable\Models\Link;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;

class TextAndImageBlock extends ElementContent
{

    private static string $singular_name = 'Text and Image Block';

    private static string $plural_name = 'Text and Image Blocks';

    private static string $table_name = 'TextAndImageBlock';

    private static string $icon = 'font-icon-block-banner';

    private static array $db = [
        'Title' => 'Varchar(50)',
    ];

    private static array $has_one = [
        'Image' => Image::class,
        'ButtonLink' => Link::class,
    ];

    private static array $owns = [
        'Image',
        'ButtonLink'
    ];

    private static array $cares = [
        'ButtonLink',
    ];

    public function getType(): string
    {
        return static::$singular_name;
    }

    public function getCMSFields(): FieldList
    {
        $fields = parent::getCMSFields();

        $fields->removeByName(
            [
                'Image',
            ]
        );

        $fields->addFieldsToTab(
            'Root.Main',
            [
                UploadField::create('Image', 'Featured Image')
            ]
        );

        return $fields;
    }
}

