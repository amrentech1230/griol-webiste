<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', [], null);

    // Cache-bust CSS/JS off the file modification time so browsers always
    // pick up the latest version (avoids stale accordion JS being served).
    $style_path  = get_stylesheet_directory() . '/style.css';
    $script_path = get_template_directory() . '/assets/main.js';
    $style_ver   = file_exists($style_path)  ? filemtime($style_path)  : '1.0';
    $script_ver  = file_exists($script_path) ? filemtime($script_path) : '1.0';

    wp_enqueue_style('griol', get_stylesheet_uri(), ['inter'], $style_ver);
    wp_enqueue_script('griol', get_template_directory_uri() . '/assets/main.js', [], $script_ver, true);
    wp_localize_script('griol', 'griolAjax', [
        'url' => admin_url('admin-ajax.php'),
    ]);
});

// AJAX: Load More Blog Posts
add_action('wp_ajax_griol_load_more',        'griol_load_more_posts');
add_action('wp_ajax_nopriv_griol_load_more', 'griol_load_more_posts');

function griol_load_more_posts() {
    if ( ! isset($_POST['nonce']) || ! wp_verify_nonce($_POST['nonce'], 'griol_load_more') ) {
        wp_send_json_error('Invalid nonce');
    }

    $page  = max(1, intval($_POST['page'] ?? 1));
    $query = new WP_Query([
        'post_type'      => 'post',
        'posts_per_page' => 6,
        'paged'          => $page,
    ]);

    $html = '';
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $cats = get_the_category();
            $cat_slug = $cats ? $cats[0]->slug : '';
            $cat_name = $cats ? esc_html($cats[0]->name) : '';
            $cat_badge = $cat_name ? '<span class="bl-card-cat-badge">' . $cat_name . '</span>' : '';
            $read_time = ceil(str_word_count(strip_tags(get_the_content())) / 200);
            $img_html = has_post_thumbnail()
                ? get_the_post_thumbnail(null, 'medium_large', ['class' => 'bl-card-img', 'loading' => 'lazy'])
                : '<div class="bl-card-img-placeholder"><svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg></div>';
            $html .= '<article class="bl-card" data-cat="' . esc_attr($cat_slug) . '">';
            $html .= '<a href="' . get_permalink() . '" class="bl-card-img-wrap">' . $img_html . $cat_badge . '</a>';
            $html .= '<div class="bl-card-body">';
            $html .= '<div class="bl-card-meta"><span>' . get_the_date('j M Y') . '</span><span class="bl-card-dot"></span><span>' . $read_time . ' min read</span></div>';
            $html .= '<h3 class="bl-card-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
            $html .= '<p class="bl-card-excerpt">' . wp_trim_words(get_the_excerpt(), 18) . '</p>';
            $html .= '<div class="bl-card-footer"><span class="bl-card-author">' . get_the_author() . '</span><a href="' . get_permalink() . '" class="bl-card-link">Read <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a></div>';
            $html .= '</div></article>';
        }
        wp_reset_postdata();
    }

    wp_send_json_success([
        'html'     => $html,
        'maxPages' => $query->max_num_pages,
    ]);
}

// Google Analytics
add_action('wp_head', function () { ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8NRDWQ03WK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-8NRDWQ03WK');
</script>
<?php }, 1);

register_nav_menus(['primary' => 'Primary Menu']);
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

// ── Griol Blog Format Meta Box ──────────────────────────────────────────────
add_action('add_meta_boxes', function () {
    add_meta_box(
        'griol_blog_format',
        'Griol Blog Format',
        'griol_blog_format_render',
        'post',
        'normal',
        'high'
    );
});

// Load the TinyMCE / editor assets on the Post editor screen so wp_editor()
// and the dynamic FAQ editors (wp.editor.initialize / removeEditor) work.
add_action('admin_enqueue_scripts', function ($hook) {
    if ($hook !== 'post.php' && $hook !== 'post-new.php') {
        return;
    }
    $screen = function_exists('get_current_screen') ? get_current_screen() : null;
    if ($screen && $screen->post_type !== 'post') {
        return;
    }
    if (function_exists('wp_enqueue_editor')) {
        wp_enqueue_editor();
    }
    wp_enqueue_script('editor');
});

function griol_blog_format_render($post) {
    wp_nonce_field('griol_blog_format_save', 'griol_blog_format_nonce');
    $f = function($key) use ($post) {
        return esc_textarea(get_post_meta($post->ID, '_gbf_' . $key, true));
    };
    $fields = [
        'intro'            => ['Introduction', 'Introduce the topic, why it matters, and what the article covers.'],
        'why_important'    => ['Why Is [Topic] Important?', '2–3 paragraphs on importance and benefits.'],
        'understanding'    => ['Understanding [Topic]', 'Explain the subject in simple, informative language.'],
        'key_factors'      => ['Key Factors to Consider', 'Short paragraphs and bullet points (one per line, start with - ).'],
        'cta_heading'      => ['CTA Heading', 'e.g. Need Professional Fire Door Support?'],
        'cta_text'         => ['CTA Body Text', 'Short supporting sentence for the CTA.'],
        'cta_button_label' => ['CTA Button Label', 'e.g. Get a Quote'],
        'cta_button_url'   => ['CTA Button URL', 'e.g. /contact'],
        'common_issues'    => ['Common [Topic] Issues', 'Common problems, risks, and what to look for.'],
        'best_practices'   => ['Best Practices for [Topic]', 'Practical guidance and actionable recommendations.'],
        'conclusion'       => ['Conclusion', 'Summarise key points and finish with a natural CTA.'],
    ];
    echo '<style>
        .gbf-field{margin-bottom:18px;}
        .gbf-field label{display:block;font-weight:600;margin-bottom:4px;}
        .gbf-field small{color:#666;display:block;margin-bottom:4px;}
        .gbf-field textarea,.gbf-field input[type=text]{width:100%;box-sizing:border-box;}
        .gbf-field textarea{min-height:90px;}
        .gbf-notice{background:#fff8e1;border-left:4px solid #f0a500;padding:10px 14px;margin-bottom:18px;font-size:13px;}
        .gbf-faq-builder{border:1px solid #ddd;border-radius:6px;padding:14px;background:#fafafa;}
        .gbf-faq-row{background:#fff;border:1px solid #e0e0e0;border-radius:5px;padding:12px;margin-bottom:10px;position:relative;}
        .gbf-faq-row input,.gbf-faq-row textarea{width:100%;box-sizing:border-box;margin-top:4px;}
        .gbf-faq-row textarea{min-height:70px;resize:vertical;}
        .gbf-faq-row label{font-size:12px;font-weight:600;color:#555;display:block;}
        .gbf-faq-remove{position:absolute;top:8px;right:8px;background:#e63329;color:#fff;border:none;border-radius:4px;padding:2px 8px;cursor:pointer;font-size:12px;line-height:1.6;}
        .gbf-faq-remove:hover{background:#c0392b;}
        #gbf-add-faq{margin-top:6px;background:#2271b1;color:#fff;border:none;border-radius:4px;padding:7px 14px;cursor:pointer;font-size:13px;}
        #gbf-add-faq:hover{background:#135e96;}
        .gbf-faq-count{font-size:12px;color:#888;margin-left:8px;}
    </style>';
    echo '<div class="gbf-notice">Fill in these fields to use the <strong>Griol Blog Format</strong>. Leave all blank to use the standard post editor content instead.</div>';

    // Content fields that get a full TinyMCE rich-text editor (bullet lists, etc.).
    // cta_heading / cta_button_label stay plain textareas (single-line labels),
    // cta_button_url stays a plain text input.
    $rich_keys = ['intro','why_important','understanding','key_factors','cta_text','common_issues','best_practices','conclusion'];

    foreach ($fields as $key => [$label, $hint]) {
        echo '<div class="gbf-field">';
        echo '<label for="gbf_' . $key . '">' . esc_html($label) . '</label>';
        echo '<small>' . esc_html($hint) . '</small>';
        if (in_array($key, $rich_keys, true)) {
            // Rich-text editor. Editor id 'gbf_<key>' is unique per field;
            // textarea_name keeps the POST key identical to the plain-textarea
            // version ($_POST['gbf_<key>']), so save_post needs no changes here.
            wp_editor(
                get_post_meta($post->ID, '_gbf_' . $key, true), // raw value; wp_editor handles escaping
                'gbf_' . $key,
                [
                    'textarea_name' => 'gbf_' . $key,
                    'media_buttons' => false,
                    'textarea_rows' => 8,
                    'tinymce'       => true,
                    'quicktags'     => true,
                ]
            );
        } elseif ($key === 'cta_button_url') {
            echo '<input type="text" id="gbf_' . $key . '" name="gbf_' . $key . '" value="' . esc_attr(get_post_meta($post->ID, '_gbf_' . $key, true)) . '">';
        } else {
            echo '<textarea id="gbf_' . $key . '" name="gbf_' . $key . '">' . $f($key) . '</textarea>';
        }
        echo '</div>';
    }

    // FAQ Builder UI
    $existing_faqs = json_decode(get_post_meta($post->ID, '_gbf_faq', true) ?: '[]', true);
    if (!is_array($existing_faqs)) $existing_faqs = [];
    ?>
    <div class="gbf-field">
        <label>Frequently Asked Questions</label>
        <small>Click "Add FAQ" to add a question and answer pair.</small>
        <div class="gbf-faq-builder">
            <div id="gbf-faq-rows">
                <?php foreach ($existing_faqs as $i => $item): ?>
                <div class="gbf-faq-row">
                    <button type="button" class="gbf-faq-remove" onclick="gbfRemoveFaqRow(this.closest('.gbf-faq-row'));">&#x2715; Remove</button>
                    <label>Question</label>
                    <input type="text" name="gbf_faq_q[]" value="<?php echo esc_attr($item['q'] ?? ''); ?>" placeholder="e.g. What is a fire door inspection?">
                    <label style="margin-top:8px;">Answer</label>
                    <?php /* Unique id per answer, but keep name="gbf_faq_a[]" so the array POST shape is unchanged. */ ?>
                    <textarea id="gbf_faq_a_<?php echo (int) $i; ?>" name="gbf_faq_a[]" placeholder="Write the answer here..."><?php echo esc_textarea($item['a'] ?? ''); ?></textarea>
                </div>
                <?php endforeach; ?>
            </div>
            <button type="button" id="gbf-add-faq">+ Add FAQ</button>
            <span class="gbf-faq-count" id="gbf-faq-count"><?php echo count($existing_faqs); ?> FAQ(s)</span>
        </div>
    </div>
    <script>
    /*
     * FAQ rich-text answers.
     *
     * TinyMCE inside repeatable rows is more involved than a static editor:
     *  - every answer textarea needs a UNIQUE id (name stays "gbf_faq_a[]" so
     *    the POST array shape is unchanged),
     *  - editors must be initialised via wp.editor.initialize() AFTER the
     *    textarea is in the DOM,
     *  - editors must be torn down with wp.editor.removeEditor() BEFORE their
     *    row is removed, otherwise orphaned TinyMCE instances leak, and
     *  - on submit we call tinymce.triggerSave() so every editor flushes its
     *    HTML back into its textarea before the form posts (WP normally does
     *    this on the classic post form, but we guard it explicitly).
     */
    (function(){
        // Seed the counter past the server-rendered rows so new ids never clash.
        var gbfFaqIdx = <?php echo count($existing_faqs); ?>;

        function gbfInitEditor(id){
            if (window.wp && wp.editor && typeof wp.editor.initialize === 'function') {
                wp.editor.initialize(id, {
                    tinymce: {
                        wpautop: true,
                        toolbar1: 'bold,italic,bullist,numlist,link,unlink,undo,redo'
                    },
                    quicktags: true,
                    mediaButtons: false
                });
            }
        }

        // Initialise editors for the server-rendered (existing) answer fields.
        document.querySelectorAll('#gbf-faq-rows .gbf-faq-row textarea[id^="gbf_faq_a_"]').forEach(function(ta){
            gbfInitEditor(ta.id);
        });

        // Expose remove handler (also used by inline onclick on server rows).
        window.gbfRemoveFaqRow = function(row){
            if (!row) return;
            var ta = row.querySelector('textarea[id^="gbf_faq_a_"]');
            if (ta && window.wp && wp.editor && typeof wp.editor.removeEditor === 'function') {
                wp.editor.removeEditor(ta.id);
            }
            row.remove();
            gbfUpdateCount();
        };

        document.getElementById('gbf-add-faq').addEventListener('click', function(){
            var id = 'gbf_faq_a_' + (gbfFaqIdx++);
            var row = document.createElement('div');
            row.className = 'gbf-faq-row';
            row.innerHTML = '<button type="button" class="gbf-faq-remove" onclick="gbfRemoveFaqRow(this.closest(\'.gbf-faq-row\'));">&#x2715; Remove</button>'
                + '<label>Question</label>'
                + '<input type="text" name="gbf_faq_q[]" placeholder="e.g. How often should fire doors be inspected?">'
                + '<label style="margin-top:8px;">Answer</label>'
                + '<textarea id="' + id + '" name="gbf_faq_a[]" placeholder="Write the answer here..."></textarea>';
            document.getElementById('gbf-faq-rows').appendChild(row);
            gbfInitEditor(id);
            gbfUpdateCount();
            row.querySelector('input').focus();
        });

        // Flush all TinyMCE editors back to their textareas before the post saves.
        var postForm = document.getElementById('post');
        if (postForm) {
            postForm.addEventListener('submit', function(){
                if (window.tinymce && typeof tinymce.triggerSave === 'function') {
                    tinymce.triggerSave();
                }
            });
        }

        window.gbfUpdateCount = function(){
            var n = document.querySelectorAll('.gbf-faq-row').length;
            document.getElementById('gbf-faq-count').textContent = n + ' FAQ(s)';
        };
    })();
    </script>
    <?php
}

add_action('save_post', function ($post_id) {
    if (
        ! isset($_POST['griol_blog_format_nonce']) ||
        ! wp_verify_nonce($_POST['griol_blog_format_nonce'], 'griol_blog_format_save') ||
        defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ||
        ! current_user_can('edit_post', $post_id)
    ) return;

    $keys = ['intro','why_important','understanding','key_factors','cta_heading','cta_text','cta_button_label','cta_button_url','common_issues','best_practices','conclusion'];
    foreach ($keys as $key) {
        if (isset($_POST['gbf_' . $key])) {
            update_post_meta($post_id, '_gbf_' . $key, wp_kses_post(wp_unslash($_POST['gbf_' . $key])));
        }
    }

    // Save FAQ rows as JSON
    $questions = array_map('sanitize_text_field', array_map('wp_unslash', (array) ($_POST['gbf_faq_q'] ?? [])));
    // Answers are now rich text (TinyMCE) — preserve HTML (e.g. bullet lists) with wp_kses_post.
    $answers   = array_map(function ($a) { return wp_kses_post($a); }, array_map('wp_unslash', (array) ($_POST['gbf_faq_a'] ?? [])));
    $faqs = [];
    foreach ($questions as $i => $q) {
        if (trim($q) === '' && trim($answers[$i] ?? '') === '') continue;
        $faqs[] = ['q' => $q, 'a' => $answers[$i] ?? ''];
    }
    update_post_meta($post_id, '_gbf_faq', wp_json_encode($faqs));
});
// ────────────────────────────────────────────────────────────────────────────

add_action('admin_post_griol_contact',        'griol_handle_contact');
add_action('admin_post_nopriv_griol_contact', 'griol_handle_contact');

function griol_handle_contact() {
    if ( ! isset($_POST['_wpnonce']) || ! wp_verify_nonce($_POST['_wpnonce'], 'griol_contact') ) {
        wp_die('Security check failed.');
    }

    $name    = sanitize_text_field($_POST['name']      ?? '');
    $email   = sanitize_email($_POST['email']           ?? '');
    $phone   = sanitize_text_field($_POST['phone']      ?? '');
    $service = sanitize_text_field($_POST['service']    ?? '');
    $address = sanitize_textarea_field($_POST['address'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    $to      = 'info@griolfireprotection.co.uk';
    $subject = 'New Enquiry: ' . ($service ?: 'General');
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\nService: $service\nAddress:\n$address\n\nMessage:\n$message";
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];

    wp_mail($to, $subject, $body, $headers);

    wp_redirect(add_query_arg('enquiry', 'sent', wp_get_referer()));
    exit;
}
