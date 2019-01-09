<?php

return PhpCsFixer\Config::create()
    ->setRules(
        [
            '@PSR2' => true,
            'align_multiline_comment' => true,
            'blank_line_after_opening_tag' => true,
            'cast_spaces' => true,
            'combine_consecutive_issets' => true,
            'combine_consecutive_unsets' => true,
            'escape_implicit_backslashes' => true,
            'include' => true,
            'linebreak_after_opening_tag' => true,
            'lowercase_cast' => true,
            'lowercase_static_reference' => true,
            'multiline_whitespace_before_semicolons' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_blank_lines_after_phpdoc' => true,
            'no_empty_statement' => true,
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'ordered_imports' => ['sort_algorithm' => 'alpha'],
            'ordered_class_elements' =>
                [
                    'order' =>
                        [
                            'use_trait', 'constant_public', 'constant_protected', 'constant_private', 'property_public',
                            'property_protected', 'property_private', 'construct', 'destruct', 'magic', 'phpunit',
                            'method_public', 'method_protected', 'method_private'
                        ],
                    'sortAlgorithm' => 'none'
                ],
            'single_line_comment_style' => true,
            'single_quote' => true
        ]
    );
