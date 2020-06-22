<?php
/**
 * Plugin Name:  Upload Folder
 * Plugin URI:   https://github.com/
 * Description:  Activate Upload Folder
 * Version:      1.0.0
 * Author:       Kenan SALTIK
 * Author URI:   https://oneyhosting.com/
 * License:      MIT License
 */

defined( 'ABSPATH' ) || exit;


function fks_populate_upload_path() {
        if ( empty( get_option( 'upload_path' ) ) )
            update_option( 'upload_path', 'media' );
}

fks_populate_upload_path();


function fks_populate_upload_url_path() {
    if ( empty( get_option( 'upload_url_path' ) ) )
        update_option( 'upload_url_path', 'http://wpdevx.com/media' );
}

fks_populate_upload_url_path();
