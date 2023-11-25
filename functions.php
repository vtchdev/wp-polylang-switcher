function custom_polylang_language_switcher_shortcode() {
    ob_start();

    $languages = pll_the_languages(array('raw' => 1));

    if ($languages) {
        echo '<div class="polylang-language-switcher">';
        echo '<ul>';

        foreach ($languages as $language) {
            $slug = $language['slug'];
            $name = $language['name'];
            $url = $language['url'];
            $current = $language['current'] ? 'current-language' : '';

            echo '<li class="' . esc_attr($current) . '">';
            echo '<a href="' . esc_url($url) . '">' . esc_html($name) . '</a>';
            echo '</li>';
        }

        echo '</ul>';
        echo '</div>';
    }

    return ob_get_clean();
}
add_shortcode('polylang_language_switcher', 'custom_polylang_language_switcher_shortcode');
