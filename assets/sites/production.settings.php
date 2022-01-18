<?php
/**
 * @file
 * Lagoon Drupal 7 production environment configuration file.
 *
 * This file will only be included on production environments.
 * It contains some defaults that the Lagoon team suggests, please edit them as required.
 */

// Show no error messages on the site
$conf['error_level'] = 0;

// Anonymous caching enabled
$conf['cache'] = 1;

// Block caching enabled
$conf['block_cache'] = 1;

// Expiration of cached pages to 3600 seconds (1 hour)
$conf['page_cache_maximum_age'] = 3600;

// Aggregate and compress CSS files off
// Verify existing production site, ideally this is enabled.
$conf['preprocess_css'] = 0;

// Aggregate JavaScript files off
// Verify existing production site, ideally this is enabled.
$conf['preprocess_js'] = 0;

// Disabling stage_file_proxy on production, so that the module can't be enabled even on production
$conf['stage_file_proxy_origin'] = false;
$conf['stage_file_proxy_origin_dir'] = false;
