<?php

return Symfony\CS\Config\Config::create()
    ->setUsingCache(true)
    ->fixers(
        [
            '-concat_without_spaces',
            '-empty_return',
            '-phpdoc_no_empty_return',
            '-phpdoc_params',
            '-phpdoc_to_comment',
            '-single_array_no_trailing_comma',
            'concat_with_spaces',
            'ereg_to_preg',
            'ordered_use',
            'short_array_syntax',
        ]
    )
    ->finder(
        Symfony\CS\Finder\DefaultFinder::create()
            ->in('src')
            ->in('test')
    )
    ;
