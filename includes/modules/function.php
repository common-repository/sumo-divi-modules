<?php


class cwpds__RenderStyles
{

    public $fields;
    public $render_slug;
    public $props;

    public function __construct($fields, $render_slug, $props)
    {
        $this->fields = $fields;
        $this->render_slug = $render_slug;
        $this->props = $props;
    }

    private function condition($c, $props)
    {
        if ($c[1] === "===") {
            return $props[$c[0]] === $c[2];
        } else if ($c[1] === "!==") {
            return $props[$c[0]] !== $c[2];
        }
    }

    public function static_css($css)
    {

        foreach ($css as $key => $css_field) {

            ET_Builder_Element::set_style($this->render_slug, array(
                'selector' => $css_field[0],
                'declaration' => $css_field[1]
            ));
        }
    }

    public function init_styles()
    {

        $fields = $this->fields;
        $render_slug = $this->render_slug;
        $props = $this->props;


        foreach ($fields as $key => $field) {
            if (isset($field['apply_css'])) {

                $css = $field['apply_css']['css'];
                $selector = $field['apply_css']['selector'];

                if (isset($field['apply_css']['condition'])) {

                    $condition = explode(' ', $field['apply_css']['condition']);

                    $css_condition = $this->condition($condition, $props);

                    if ($css_condition) {
                        if (isset($field['responsive']) && $field['responsive'] === true) {
                            $mobile_enabled = et_pb_get_responsive_status($props[$key . "_last_edited"]);
                            $responsive_value = array(
                                'desktop' => $props[$key] . " !important",
                                'tablet'  => $mobile_enabled ? $props[$key . "_tablet"] . " !important" : '',
                                'phone'  => $mobile_enabled ? $props[$key . "_phone"] . " !important" : '',
                            );

                            $responsive_field = $field['apply_css']['responsive_field'];



                            et_pb_responsive_options()->generate_responsive_css($responsive_value, $selector, $responsive_field, $render_slug);
                        } else {
                            ET_Builder_Element::set_style($render_slug, array(
                                'selector' => $selector,
                                'declaration' => sprintf(
                                    $css,
                                    $props[$key]
                                )
                            ));
                        }
                    }
                } else {
                    if (isset($field['responsive']) && $field['responsive'] === true) {
                        $mobile_enabled = et_pb_get_responsive_status($props[$key . "_last_edited"]);
                        $responsive_value = array(
                            'desktop' => $props[$key] . " !important",
                            'tablet'  => $mobile_enabled ? $props[$key . "_tablet"] . " !important" : '',
                            'phone'  => $mobile_enabled ? $props[$key . "_phone"] . " !important" : '',
                        );

                        $responsive_field = $field['apply_css']['responsive_field'];

                        et_pb_responsive_options()->generate_responsive_css($responsive_value, $selector, $responsive_field, $render_slug);
                    } else {
                        ET_Builder_Element::set_style($render_slug, array(
                            'selector' => $selector,
                            'declaration' => sprintf(
                                $css,
                                $props[$key]
                            )
                        ));
                    }
                }
            }
        }
        return; //void function;
    }
}
