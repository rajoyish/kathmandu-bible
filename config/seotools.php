<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults' => [
            'title' => 'Kathmandu Bible Institute and Research Center (KBI)', // set false to total remove
            'titleBefore' => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description' => "Discover unparalleled spiritual and ministerial growth at Kathmandu Bible Institute and Research Center (KBI). Founded by Rev. Pastor Devilal Shrestha, KBI trains disciples and ministers of Jesus Christ for God's mission in Nepal. Students from diverse denominations in a community dedicated to impactful ministry. Our programs offer top-tier biblical, theological, missional, historical, and contextual education, emphasizing mission work, servant leadership, and cultural sensitivity.", // set false to total remove
            'separator' => ' | ',
            'keywords' => [
                'kathmandu bible institute',
                'kbi',
                'bible college in nepal kathmandu',
                'certificate in theology c. th. nepal kathmandu',
                'diploma in theology dip. th. nepal kathmandu',
                'bachelor of theology b. th. nepal kathmandu',
                'm.a. christian missions nepal kathmandu',
                'bible institute in nepal kathmandu',
                'pastoral fellowship in nepal kathmandu',
                'bible classes in nepal kathmandu',
                'bible course in nepal kathmandu',
                'biblical class in nepal kathmandu',
                'bible research center nepal kathmandu',
                'christian mission in nepal kathmandu',
                'rev. pastor devilal shrestha',
                'biblical education nepal kathmandu',
                'theological education nepal kathmandu',
                'missional education nepal kathmandu',
                'contextual education nepal kathmandu',
                'theology training nepal kathmandu',
                'ministry challenges nepal kathmandu',
                'spiritual development nepal kathmandu',
                'servant leadership nepal kathmandu',
                'christian denominations nepal kathmandu',
                'certificate in theology c. th. nepal kathmandu',
                'diploma in theology dip. th. nepal kathmandu',
                'bachelor of theology b. th. nepal kathmandu',
                'm.a. christian missions nepal kathmandu',
            ],
            'canonical' => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots' => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google' => null,
            'bing' => null,
            'alexa' => null,
            'pinterest' => null,
            'yandex' => null,
            'norton' => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title' => 'Kathmandu Bible Institute and Research Center (KBI)', // set false to total remove
            'description' => "Discover unparalleled spiritual and ministerial growth at Kathmandu Bible Institute and Research Center (KBI). Founded by Rev. Pastor Devilal Shrestha, KBI trains disciples and ministers of Jesus Christ for God's mission in Nepal. Students from diverse denominations in a community dedicated to impactful ministry. Our programs offer top-tier biblical, theological, missional, historical, and contextual education, emphasizing mission work, servant leadership, and cultural sensitivity.", // set false to total remove
            'url' => false, // Set null for using Url::current(), set false to total remove
            'type' => false,
            'site_name' => false,
            'images' => ['https://ktm-bible.test/images/og-img-kbi.png'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title' => 'Over 9000 Thousand!', // set false to total remove
            'description' => 'For those who helped create the Genki Dama', // set false to total remove
            'url' => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type' => 'WebPage',
            'images' => [],
        ],
    ],
];
