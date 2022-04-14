<?php namespace Config;

use Michalsn\Minifier\Adapters\Js\MinifyAdapter;

class Minifier extends \Michalsn\Minifier\Config\Minifier
{
    //--------------------------------------------------------------------
    // Enable minify class
    //--------------------------------------------------------------------
    // Use this variable to turn on and off minification of the assets.
    // This can be useful during app development - for easy debugging.

    public $minify = true;

    //--------------------------------------------------------------------
    // Base URL for assets
    //--------------------------------------------------------------------
    // Use this variable when you want to set absolute path to the asset
    // files. If no other URLs are set, like $baseJsUrl or $baseCssUrl
    // then values set to $dirJS and $dirCss will be added to the final URL.
    //
    // Example values:
    //      https://mydomain.com
    //      https://static.mydomain.com


    public $baseUrl = 'http://localhost:3000';

    //--------------------------------------------------------------------
    // Base JS URL for assets
    //--------------------------------------------------------------------
    // Use this variable when your JS assets are served from subdomain.
    // Bear in mind that in this case variable $dirJs won't be added
    // to the URL.
    //
    // Example value:
    //      https://js.mydomain.com

    public $baseJsUrl = null;

    //--------------------------------------------------------------------
    // Base CSS URL for assets
    //--------------------------------------------------------------------
    // Use this variable when your CSS assets are served from subdomain.
    // Bear in mind that in this case variable $dirCSS won't be added
    // to the URL.
    //
    // Example value:
    //      https://css.mydomain.com

    public $baseCssUrl = null;

    //--------------------------------------------------------------------
    // JS adapter
    //--------------------------------------------------------------------

    public $adapterJs = MinifyAdapter::class;

    //--------------------------------------------------------------------
    // CSS adapter
    //--------------------------------------------------------------------

    public $adapterCss = \Michalsn\Minifier\Adapters\Css\MinifyAdapter::class;

    //--------------------------------------------------------------------
    // JS assets directory
    //--------------------------------------------------------------------

    public $dirJs = './';

    //--------------------------------------------------------------------
    // CSS assets directory
    //--------------------------------------------------------------------

    public $dirCss = './';

    //--------------------------------------------------------------------
    // JS minified assets directory
    //--------------------------------------------------------------------

    public $dirMinJs = './assets/minify/js/';

    //--------------------------------------------------------------------
    // CSS minified assets directory
    //--------------------------------------------------------------------

    public $dirMinCss = './assets/minify/css/';

    //--------------------------------------------------------------------
    // Version assets directory
    //--------------------------------------------------------------------

    public $dirVersion = './assets/minify/';

    //--------------------------------------------------------------------
    // JS tag
    //--------------------------------------------------------------------

    public $tagJs = '<script type="text/javascript" src="%s"></script>';

    //--------------------------------------------------------------------
    // CSS tag
    //--------------------------------------------------------------------

    public $tagCss = '<link rel="stylesheet" href="%s">';

    public $returnType = 'html';
    public $autoDeployOnChange = false;

    //--------------------------------------------------------------------
    // JS files config
    //--------------------------------------------------------------------
    public $js = [
        'app.min.js' => [
            'plugins/jquery/jquery.min.js',
            'plugins/bootstrap/js/bootstrap.min.js',
            'assets/js/adminlte.min.js',
            //'assets/js/demo.js',
            'assets/js/pages/dashboard2.js',
        ],

        'datatable.min.js' => [

        ],
        'datatable_button.min.js' => [

        ],
        'app_chart.min.js' => [

        ],
        'jquery_steps.min.js' => [

        ],
        'notification.min.js' => [

        ],
        'tree.min.js' => [
        ]
    ];

    //--------------------------------------------------------------------
    // CSS files config
    //--------------------------------------------------------------------


    public $css = [
        'app.min.css' => [
            'assets/css/adminlte.css',
            'plugins/fontawesome/css/all.min.css',
        ],
        'datatable.min.css' => [
            'plugins/datatables/jquery.dataTables.css',
            'plugins/datatables/dataTables.bootstrap.css',
        ],
        'datatable_responsive.min' => [
            'plugins/datatables/extensions/Responsive/css/dataTables.responsive.css'
        ],
        'jquery_steps.min.css' => [

        ],
        'tree.min.css' => [

        ]
    ];
}