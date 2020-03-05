<?php
/**
 * Font Awesome Kit Setup
 *
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) {
  function fa_custom_setup_kit($kit_url = '') {
    foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
      add_action(
        $action,
        function () use ( $kit_url ) {
          wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
        }
      );
    }
  }
}

fa_custom_setup_kit('https://kit.fontawesome.com/fb8dacd675.js');

/**
 * Font Awesome CDN Setup Webfont
 *
 * This will load Font Awesome from the Font Awesome Free or Pro CDN.
 */
if (! function_exists('fa_custom_setup_cdn_webfont') ) {
  function fa_custom_setup_cdn_webfont($cdn_url = '', $integrity = null) {
    $matches = [];
    $match_result = preg_match('|/([^/]+?)\.css$|', $cdn_url, $matches);
    $resource_handle_uniqueness = ($match_result === 1) ? $matches[1] : md5($cdn_url);
    $resource_handle = "font-awesome-cdn-webfont-$resource_handle_uniqueness";

    foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
      add_action(
        $action,
        function () use ( $cdn_url, $resource_handle ) {
          wp_enqueue_style( $resource_handle, $cdn_url, [], null );
        }
      );
    }

    if($integrity) {
      add_filter(
        'style_loader_tag',
        function( $html, $handle ) use ( $resource_handle, $integrity ) {
          if ( in_array( $handle, [ $resource_handle ], true ) ) {
            return preg_replace(
              '/\/>$/',
              'integrity="' . $integrity .
              '" crossorigin="anonymous" />',
              $html,
              1
            );
          } else {
            return $html;
          }
        },
        10,
        2
      );
    }
  }
}

fa_custom_setup_cdn_webfont(
  'https://pro.fontawesome.com/releases/v5.10.0/css/all.css',
  'sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p'
);

// fa_custom_setup_cdn_webfont(
//   'https://use.fontawesome.com/releases/v5.10.0/css/v4-shims.css'
// );

/**
 * Font Awesome CDN Setup SVG
 *
 * This will load Font Awesome from the Font Awesome Free or Pro CDN.
 */
if (! function_exists('fa_custom_setup_cdn_svg') ) {
  function fa_custom_setup_cdn_svg($cdn_url = '', $integrity = null) {
    $matches = [];
    $match_result = preg_match('|/([^/]+?)\.js$|', $cdn_url, $matches);
    $resource_handle_uniqueness = ($match_result === 1) ? $matches[1] : md5($cdn_url);
    $resource_handle = "font-awesome-cdn-svg-$resource_handle_uniqueness";

    foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
      add_action(
        $action,
        function () use ( $cdn_url, $resource_handle ) {
          wp_enqueue_script( $resource_handle, $cdn_url, [], null );
        }
      );
    }

    if($integrity) {
      add_filter(
        'script_loader_tag',
        function( $html, $handle ) use ( $resource_handle, $integrity ) {
          if ( in_array( $handle, [ $resource_handle ], true ) ) {
            return preg_replace(
              '/^<script /',
              '<script integrity="' . $integrity .
              '" defer crossorigin="anonymous"',
              $html,
              1
            );
          } else {
            return $html;
          }
        },
        10,
        2
      );
    }
  }
}

fa_custom_setup_cdn_svg(
  'https://pro.fontawesome.com/releases/v5.10.0/js/all.js',
  'sha384-G/ZR3ntz68JZrH4pfPJyRbjW+c0+ojii5f+GYiYwldYU69A+Ejat6yIfLSxljXxD'
);

// fa_custom_setup_cdn_svg(
//   'https://use.fontawesome.com/releases/v5.10.0/js/v4-shims.js'
// );

/**
 * Font Awesome Conflict Resolution
 */
if (! function_exists('fa_custom_remove_conflicts') ) {
  function fa_custom_remove_conflicts($blacklist = array()) {
    foreach ( [ 'wp_print_styles', 'admin_print_styles', 'login_head' ] as $action ) {
      add_action(
        $action,
        function() use ( $blacklist ) {
          $collections = array(
            'style'  => wp_styles(),
            'script' => wp_scripts(),
          );

          foreach ( $collections as $key => $collection ) {
            foreach ( $collection->registered as $handle => $details ) {
              if ( FALSE !== array_search(md5($details->src), $blacklist) ) {
                $collection->dequeue([ $handle ]);
              } else {
                foreach ( [ 'before', 'after' ] as $position ) {
                  $data = $collection->get_data($handle, $position);
                  if( $data && is_array($data) &&
                    FALSE !== array_search(
                      md5("\n" . implode("\n", $data) . "\n"),
                      $blacklist)
                    ) {
                    unset( $collection->registered[$handle]->extra[$position] );
                  }
                }
              }
            }
          }
        },
        0
      );
    }
  }
}

fa_custom_remove_conflicts([
  '7ca699f29404dcdb477ffe225710067f',
  '3c937b6d9b50371df1e78b5d70e11512',
]);
