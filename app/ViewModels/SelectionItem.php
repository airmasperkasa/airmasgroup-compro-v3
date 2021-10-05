<?php

namespace App\ViewModels;

use Statamic\View\ViewModel;
use Statamic\Facades\Nav;
use Symfony\Component\Yaml\Yaml;

class SelectionItem extends ViewModel
{
    public function data(): array
    {
        // read Yaml file for navbar
        $list = Yaml::parseFile('../resources/blueprints/forms/contact_us.yaml');

        dd($list['sections']['main']['fields'][2]['field']['options']);

        return [
            'items' => "yaga"
        ];
    }
}