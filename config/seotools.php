<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Virtual Verbal", // set false to total remove
            'titleBefore'  => "Virtual Verbal", // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Virtual Verbal merupakan portal yang menyajikan konten informatif seputar games dan pop culture dengan pembahasan yang menarik', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ['berita games Indonesia', 'portal games Indonesia', 'situs games Indonesia', 'berita games terbaru', 'media games Indonesia'],
            'canonical'    => null, // Set null for using Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Virtual Verbal', // set false to total remove
            'description' => 'Kamu butuh bacaan seputar games, geeks, technology, hobbies, lifestyle dengan pembahasan yang santai dan menarik? Yuk, pantengin timeline kami.', // set false to total remove
            'url'         => 'https://www.facebook.com/virtualverbal', // Set null for using Url::current(), set false to total remove
            // 'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'website', // website || article || blog
            'site_name'   => 'Virtual Verbal',
            'images'      => ['https://scontent.fcgk6-1.fna.fbcdn.net/v/t1.0-9/80222316_2821866754572734_7581848670333566976_n.jpg'],
            // 'fb:app_id'   => config('services.facebook.client_id'),
            // 'locale'      => '',
            // 'audio'      => '',
            // 'video'      => '',
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary', // summary || summary_large_image || app ||
            'site'        => '@virtualverbal',
            'creator'     => '@virtualverbal',
            'image'       => 'https://pbs.twimg.com/profile_images/861678839730012160/QkgwjgAW_400x400.jpg',
            // 'title'       => '',
            // 'description'       => '',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Virtual Verbal', // set false to total remove
            'description' => 'Virtual Verbal merupakan portal yang menyajikan konten informatif seputar games dan pop culture dengan pembahasan yang menarik', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
            // 'images'      => ["{{ asset('/frontend/assets/img/brand/logovv.png')}}"],
        ],
    ],
];
