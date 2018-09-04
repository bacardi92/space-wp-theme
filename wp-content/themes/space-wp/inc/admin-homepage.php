<?php

add_action('admin_menu', 'register_appereance_homepage');
add_action('admin_enqueue_scripts', 'load_wp_media_files');
function load_wp_media_files($page)
{
    // change to the $page where you want to enqueue the script
    if ($page == 'appearance_page_sp-homepage') {
        // Enqueue WordPress media scripts
        wp_enqueue_media();
        // Enqueue custom script that will interact with wp.media
        wp_enqueue_script('homepageadmin', get_template_directory_uri() . '/assets/admin/js/homepage.js', array('jquery'), '0.1', 1);
    }
}

function register_appereance_homepage()
{
    add_submenu_page('themes.php',
        'Homepage Settings',
        'Homepage Settings',
        'manage_options',
        'sp-homepage',
        'admin_homepage_callback');
}

function admin_homepage_callback()
{
    $prefix = '__home_option_';
    if (isset($_POST['save_sp_homepage'])) {
        foreach ($_POST as $key => $value) {
            if(!is_array($value))
                update_option($prefix . $key, sanitize_text_field($value), 'yes');
            else
                update_option($prefix . $key, $value, 'yes');

        }
    }
    ?>
    <style>
        .sp_admin_input {
            width: 100%;
        }

        label > strong {
            line-height: 2.5;
            font-size: 16px;
        }

        .previewer {
            width: 150px;
            height: 150px;
            overflow: hidden;
        }

        .previewer img {
            height: 150px;
            object-fit: contain;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }
        #sliderItems{
            width: 100%;
            float: left;
        }
        #sliderItems .previewer{
            float: left;
            margin: 15px;
            overflow: hidden;
            border: 1px solid #0282b8;
            background: #fff;
            position: relative;
        }
        #sliderItems .previewer > span.close{
            display: inline-block;
            position: absolute;
            z-index: 10;
            top: 0;
            right: 0;
            cursor: pointer;
        }

        #sliderItems .previewer img {
            height: auto;
            object-fit: contain;
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        div.inside {
            position: relative;
        }

        div.inside input[type="submit"] {
            position: absolute;
            right: 0;
        }

        div.inside h3 {
            margin-top: 50px;
        }

        div.inside textarea {
            width: 100%;
            height: 150px;
        }

        div.inside p.description {
            text-align: right;
        }
    </style>
    <form action="" method="POST">
        <div class="wrap">
            <h2><?php echo get_admin_page_title(); ?></h2>
            <div class="inside">
                <h3>Banner Options</h3>

                <table class="form-table">
                    <tbody>
                    <tr>
                        <th><label>Banner Image</label></th>
                        <td>
                            <div class="previewer">
                                <img src="<?php echo stripslashes((get_option($prefix . 'banner_bg_image') ? get_option($prefix . 'banner_bg_image') : 'https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg')); ?>"/>
                            </div>
                            <br>
                            <button id="upload_banner_bg_image"
                                    class="button button-secondary loadMediaLibrary">Upload Image
                            </button>
                            <button id="remove_banner_bg_image"
                                    class="button button-secondary remove_banner_bg_image"
                                    data-default="https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg">
                                Remove Image
                            </button>
                            <input type="hidden"
                                   class="articleImageUrl"
                                   name="banner_bg_image"
                                   id="banner_bg_image"
                                   value="<?php echo stripslashes(get_option($prefix . 'banner_bg_image')); ?>">
                        </td>
                    </tr>
                    <tr>
                        <th><label>Banner Text</label></th>
                        <td>
                            <input type="text"
                                   name="banner_text"
                                   class="sp_admin_input"
                                   id="banner_text"
                                   value="<?php echo stripslashes(get_option($prefix . 'banner_text')); ?>">
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>Banner Typing Plugin Options</label></th>
                        <td>
                            <label>
                                <strong>Start Phrase</strong>
                            </label>
                            <input type="text"
                                   name="typing_start"
                                   id="typing_start"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'typing_start')); ?>">
                            <p class="description">Type something</p>
                            <label>
                                <strong>Typing Phrase</strong>
                            </label>
                            <input type="text"
                                   name="typing_words"
                                   id="typing_words"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'typing_words')); ?>">
                            <p class="description">Type words comma separated</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>Banner Button Options</label></th>
                        <td>
                            <label>
                                <strong>Button Text</strong>
                            </label>
                            <input type="text"
                                   name="banner_button_text"
                                   id="banner_button_text"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'banner_button_text')); ?>">
                            <p class="description">Type something</p>
                            <label>
                                <strong>Button URL</strong>
                            </label>
                            <input type="text"
                                   name="banner_button_url"
                                   id="banner_button_url"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'banner_button_url')); ?>">
                            <p class="description">Type button url link</p>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <input type="submit" name="save_sp_homepage" value="Save Options" class="button button button-primary">
                <h3>Features Section</h3>
                <table class="form-table">
                    <tbody>
                    <tr>
                        <th><label>Features Label</label></th>
                        <td>
                            <input type="text"
                                   name="features_label_text"
                                   id="features_label_text"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'features_label_text')); ?>">
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>Features Title</label></th>
                        <td>
                            <input type="text"
                                   name="features_title_text"
                                   id="features_title_text"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'features_title_text')); ?>">
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>Features Subtitle</label></th>
                        <td>
                            <input type="text"
                                   name="features_subtitle_text"
                                   id="features_subtitle_text"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'features_subtitle_text')); ?>">
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>Features Tabs</label></th>
                        <td>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <label>On/Off</label>
                                        <input type="checkbox"
                                               name="tab_status_1"
                                               value="checked" <?php echo stripslashes(get_option($prefix . 'tab_status_1')); ?>><br>
                                        <div style="padding: 20px 0;">
                                            <div class="previewer">
                                                <img src="<?php echo(get_option($prefix . 'tab_image_1') ? stripslashes(get_option($prefix . 'tab_image_1')) : 'https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg'); ?>">
                                            </div>
                                            <br>
                                            <button id="upload_banner_bg_image"
                                                    class="button button-secondary loadMediaLibrary">Upload Image
                                            </button>
                                            <button id="remove_banner_bg_image"
                                                    class="button button-secondary remove_banner_bg_image"
                                                    data-default="https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg">
                                                Remove Image
                                            </button>
                                            <input type="hidden"
                                                   class="articleImageUrl"
                                                   name="tab_image_1"
                                                   id="tab_image_1"
                                                   value="<?php echo stripslashes(get_option($prefix . 'tab_image_1')); ?>">
                                        </div>
                                        <label>Tab title</label>
                                        <input type="text"
                                               name="tab_title_1"
                                               value="<?php echo stripslashes(get_option($prefix . 'tab_title_1')); ?>"><br>
                                        <label>Tab Description</label>
                                        <textarea
                                                name="tab_title_description_1"><?php echo stripslashes(get_option($prefix . 'tab_title_description_1')); ?></textarea>
                                    </td>
                                    <td>
                                        <label>On/Off</label>
                                        <input type="checkbox"
                                               name="tab_status_2"
                                               value="checked" <?php echo stripslashes(get_option($prefix . 'tab_status_2')); ?>><br>
                                        <div style="padding: 20px 0;">
                                            <div class="previewer">
                                                <img src="<?php echo(get_option($prefix . 'tab_image_2') ? stripslashes(get_option($prefix . 'tab_image_2')) : 'https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg'); ?>">
                                            </div>
                                            <br>
                                            <button id="upload_banner_bg_image"
                                                    class="button button-secondary loadMediaLibrary">Upload Image
                                            </button>
                                            <button id="remove_banner_bg_image"
                                                    class="button button-secondary remove_banner_bg_image"
                                                    data-default="https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg">
                                                Remove Image
                                            </button>
                                            <input type="hidden"
                                                   class="articleImageUrl"
                                                   name="tab_image_2"
                                                   id="tab_image_2"
                                                   value="<?php echo stripslashes(get_option($prefix . 'tab_image_2')); ?>">
                                        </div>
                                        <label>Tab title</label>
                                        <input type="text"
                                               name="tab_title_2"
                                               value="<?php echo stripslashes(get_option($prefix . 'tab_title_2')); ?>"><br>
                                        <label>Tab Description</label>
                                        <textarea
                                                name="tab_title_description_2"><?php echo stripslashes(get_option($prefix . 'tab_title_description_2')); ?></textarea>
                                    </td>
                                    <td>
                                        <label>On/Off</label>
                                        <input type="checkbox"
                                               name="tab_status_3"
                                               value="checked" <?php echo stripslashes(get_option($prefix . 'tab_status_3')); ?>><br>
                                        <div style="padding: 20px 0;">
                                            <div class="previewer">
                                                <img src="<?php echo(get_option($prefix . 'tab_image_3') ? stripslashes(get_option($prefix . 'tab_image_3')) : 'https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg'); ?>">
                                            </div>
                                            <br>
                                            <button id="upload_banner_bg_image"
                                                    class="button button-secondary loadMediaLibrary">Upload Image
                                            </button>
                                            <button id="remove_banner_bg_image"
                                                    class="button button-secondary remove_banner_bg_image"
                                                    data-default="https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg">
                                                Remove Image
                                            </button>
                                            <input type="hidden"
                                                   class="articleImageUrl"
                                                   name="tab_image_3"
                                                   id="tab_image_3"
                                                   value="<?php echo stripslashes(get_option($prefix . 'tab_image_3')); ?>">
                                        </div>
                                        <label>Tab title</label>
                                        <input type="text"
                                               name="tab_title_3"
                                               value="<?php echo stripslashes(get_option($prefix . 'tab_title_3')); ?>"><br>
                                        <label>Tab Description</label>
                                        <textarea
                                                name="tab_title_description_3"><?php echo stripslashes(get_option($prefix . 'tab_title_description_3')); ?></textarea>
                                    </td>
                                    <td>
                                        <label>On/Off</label>
                                        <input type="checkbox"
                                               name="tab_status_4"
                                               value="checked" <?php echo stripslashes(get_option($prefix . 'tab_status_4')); ?>><br>
                                        <div style="padding: 20px 0;">
                                            <div class="previewer">
                                                <img src="<?php echo(get_option($prefix . 'tab_image_4') ? stripslashes(get_option($prefix . 'tab_image_4')) : 'https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg'); ?>">
                                            </div>
                                            <br>
                                            <button id="upload_banner_bg_image"
                                                    class="button button-secondary loadMediaLibrary">Upload Image
                                            </button>
                                            <button id="remove_banner_bg_image"
                                                    class="button button-secondary remove_banner_bg_image"
                                                    data-default="https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg">
                                                Remove Image
                                            </button>
                                            <input type="hidden"
                                                   class="articleImageUrl"
                                                   name="tab_image_4"
                                                   id="tab_image_4"
                                                   value="<?php echo stripslashes(get_option($prefix . 'tab_image_4')); ?>">
                                        </div>
                                        <label>Tab title</label>
                                        <input type="text"
                                               name="tab_title_4"
                                               value="<?php echo stripslashes(get_option($prefix . 'tab_title_4')); ?>"><br>
                                        <label>Tab Description</label>
                                        <textarea
                                                name="tab_title_description_4"><?php echo stripslashes(get_option($prefix . 'tab_title_description_4')); ?></textarea>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <input type="submit" name="save_sp_homepage" value="Save Options" class="button button button-primary">
                <h3>Space on mobile</h3>
                <table class="form-table">
                    <tbody>
                    <tr>
                        <th><label>Section Label</label></th>
                        <td>
                            <input type="text"
                                   name="mobile_section_label_text"
                                   id="mobile_section_label_text"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'mobile_section_label_text')); ?>">
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>Section Title</label></th>
                        <td>
                            <input type="text"
                                   name="mobile_section_title_text"
                                   id="mobile_section_title_text"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'mobile_section_title_text')); ?>">
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>Section Subtitle</label></th>
                        <td>
                            <input type="text"
                                   name="mobile_section_subtitle_text"
                                   id="mobile_section_subtitle_text"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'mobile_section_subtitle_text')); ?>">
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>Section Background</label></th>
                        <td>
                            <div class="previewer">
                                <img src="<?php echo(get_option($prefix . 'mobile_section_bg') ? stripslashes(get_option($prefix . 'mobile_section_bg')) : 'https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg'); ?>">
                            </div>
                            <br>
                            <button id="upload_banner_bg_image"
                                    class="button button-secondary loadMediaLibrary">Upload Image
                            </button>
                            <button id="remove_banner_bg_image"
                                    class="button button-secondary remove_banner_bg_image"
                                    data-default="https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg">
                                Remove Image
                            </button>
                            <input type="hidden"
                                   class="articleImageUrl"
                                   name="mobile_section_bg"
                                   id="mobile_section_bg"
                                   value="<?php echo stripslashes(get_option($prefix . 'mobile_section_bg')); ?>">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <input type="submit" name="save_sp_homepage" value="Save Options" class="button button button-primary">
                <h3>About Us Section</h3>
                <table class="form-table">
                    <tbody>
                    <tr>
                        <th><label>About us section Label</label></th>
                        <td>
                            <input type="text"
                                   name="about_us_section_label"
                                   id="about_us_section_label"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'about_us_section_label')); ?>">
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>About us section Title</label></th>
                        <td>
                            <input type="text"
                                   name="about_us_section_title"
                                   id="about_us_section_title"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'about_us_section_title')); ?>">
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>About us section text</label></th>
                        <td>
                            <textarea name="about_us_section_text"
                                      id="about_us_section_text"><?php echo stripslashes(get_option($prefix . 'about_us_section_text')); ?></textarea>
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>About us section image</label></th>
                        <td>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="previewer">
                                            <img src="<?php echo(get_option($prefix . 'about_us_image') ? stripslashes(get_option($prefix . 'about_us_image')) : 'https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg'); ?>"/>
                                        </div>
                                        <br>
                                        <button id="upload_banner_bg_image"
                                                class="button button-secondary loadMediaLibrary">Upload Image
                                        </button>
                                        <button id="remove_banner_bg_image"
                                                class="button button-secondary remove_banner_bg_image"
                                                data-default="https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg">
                                            Remove Image
                                        </button>
                                        <input type="hidden"
                                               class="articleImageUrl"
                                               name="about_us_image"
                                               id="about_us_image"
                                               value="<?php echo stripslashes(get_option($prefix . 'about_us_image')); ?>">

                                    </td>
                                    <td>
                                        <div class="previewer">
                                            <img src="<?php echo(get_option($prefix . 'about_us_image_2') ? stripslashes(get_option($prefix . 'about_us_image_2')) : 'https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg'); ?>"/>
                                        </div>
                                        <br>
                                        <button id="upload_banner_bg_image"
                                                class="button button-secondary loadMediaLibrary">Upload Image
                                        </button>
                                        <button id="remove_banner_bg_image"
                                                class="button button-secondary remove_banner_bg_image"
                                                data-default="https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg">
                                            Remove Image
                                        </button>
                                        <input type="hidden"
                                               class="articleImageUrl"
                                               name="about_us_image_2"
                                               id="about_us_image_2"
                                               value="<?php echo stripslashes(get_option($prefix . 'about_us_image_2')); ?>">

                                    </td>
                                    <td>
                                        <div class="previewer">
                                            <img src="<?php echo(get_option($prefix . 'about_us_image_3') ? stripslashes(get_option($prefix . 'about_us_image_3')) : 'https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg'); ?>"/>
                                        </div>
                                        <br>
                                        <button id="upload_banner_bg_image"
                                                class="button button-secondary loadMediaLibrary">Upload Image
                                        </button>
                                        <button id="remove_banner_bg_image"
                                                class="button button-secondary remove_banner_bg_image"
                                                data-default="https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg">
                                            Remove Image
                                        </button>
                                        <input type="hidden"
                                               class="articleImageUrl"
                                               name="about_us_image_3"
                                               id="about_us_image_3"
                                               value="<?php echo stripslashes(get_option($prefix . 'about_us_image_3')); ?>">

                                    </td>
                                    <td>
                                        <div class="previewer">
                                            <img src="<?php echo(get_option($prefix . 'about_us_image_4') ? stripslashes(get_option($prefix . 'about_us_image_4')) : 'https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg'); ?>"/>
                                        </div>
                                        <br>
                                        <button id="upload_banner_bg_image"
                                                class="button button-secondary loadMediaLibrary">Upload Image
                                        </button>
                                        <button id="remove_banner_bg_image"
                                                class="button button-secondary remove_banner_bg_image"
                                                data-default="https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg">
                                            Remove Image
                                        </button>
                                        <input type="hidden"
                                               class="articleImageUrl"
                                               name="about_us_image_4"
                                               id="about_us_image_4"
                                               value="<?php echo stripslashes(get_option($prefix . 'about_us_image_4')); ?>">

                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <input type="submit" name="save_sp_homepage" value="Save Options" class="button button button-primary">
                <h3>Contact Us Section</h3>
                <table class="form-table">
                    <tbody>
                    <tr>
                        <th><label>Contact us section Label</label></th>
                        <td>
                            <input type="text"
                                   name="contact_us_section_label"
                                   id="contact_us_section_label"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'contact_us_section_label')); ?>">
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>Contact us section Title</label></th>
                        <td>
                            <input type="text"
                                   name="contact_us_section_title"
                                   id="contact_us_section_title"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'contact_us_section_title')); ?>">
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>Contact us section text</label></th>
                        <td>
                            <textarea name="contact_us_section_text"
                                      id="contact_us_section_text"><?php echo stripslashes(get_option($prefix . 'contact_us_section_text')); ?></textarea>
                            <p class="description">Type something</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>Office hours</label></th>
                        <td><textarea name="contact_us_section_office_hours"
                                      id="contact_us_section_office_hours"><?php echo stripslashes(get_option($prefix . 'contact_us_section_office_hours')); ?></textarea>
                            <p class="description">Type office hours here</p></td>
                    </tr>
                    <tr>
                        <th><label>Address</label></th>
                        <td>
                            <label><strong>Country</strong></label>
                            <input type="text"
                                   name="contact_us_section_country"
                                   id="contact_us_section_country"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'contact_us_section_country')); ?>">
                            <p class="description">Type Country</p>
                            <label><strong>City</strong></label>
                            <input type="text"
                                   name="contact_us_section_city"
                                   id="contact_us_section_city"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'contact_us_section_city')); ?>">
                            <p class="description">Type City</p>
                            <label><strong>Address</strong></label>
                            <input type="text"
                                   name="contact_us_section_address"
                                   id="contact_us_section_address"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'contact_us_section_address')); ?>">
                            <p class="description">Type Address</p>
                            <label><strong>Phone Number</strong></label>
                            <input type="text"
                                   name="contact_us_section_phone"
                                   id="contact_us_section_phone"
                                   class="sp_admin_input"
                                   value="<?php echo stripslashes(get_option($prefix . 'contact_us_section_phone')); ?>">
                            <p class="description">Type Phone Number</p>
                        </td>
                    </tr>
                    <tr>
                        <th><label>Contact From Background</label></th>
                        <td>
                            <div class="previewer">
                                <img src="<?php echo(get_option($prefix . 'contact_us_bg') ? stripslashes(get_option($prefix . 'contact_us_bg')) : 'https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg'); ?>"/>
                            </div>
                            <br>
                            <button id="upload_banner_bg_image"
                                    class="button button-secondary loadMediaLibrary">Upload Image
                            </button>
                            <button id="remove_banner_bg_image"
                                    class="button button-secondary remove_banner_bg_image"
                                    data-default="https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg">
                                Remove Image
                            </button>
                            <input type="hidden"
                                   class="articleImageUrl"
                                   name="contact_us_bg"
                                   id="contact_us_bg"
                                   value="<?php echo stripslashes(get_option($prefix . 'contact_us_bg')); ?>">

                        </td>
                    </tr>
                    </tbody>
                </table>
                <input type="submit" name="save_sp_homepage" value="Save Options" class="button button button-primary">
                <h3>Bottom Slider Icons</h3>
                <table class="form-table">
                    <tbody>
                    <tr>
                        <th>Slider Icons</th>
                        <td>
                            <?php $slides = get_option($prefix . 'bottom_slides'); ?>
                            <div id="sliderItems">
                                <?php foreach ($slides as $slide): ?>
                                    <?php if ($slide): ?>
                                        <div class="previewer">
                                            <span class="close dashicons dashicons-no"></span>
                                            <input type="hidden" name="bottom_slides[]" value="<?php echo stripslashes($slide); ?>">
                                            <img src="<?php echo($slide ? $slide : 'https://widgetgen.com/wp-content/uploads/2016/08/noimage-300x300_1.jpg'); ?>"/>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <br>
                            <button id="upload_slide_image"
                                    class="button button-secondary">Add Slider Item
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <input type="submit" name="save_sp_homepage" value="Save Options" class="button button button-primary">
    </form>
<?php }