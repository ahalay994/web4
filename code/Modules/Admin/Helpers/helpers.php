<?php

use Carbon\Carbon;

if (!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

function value_or_old($entity, $field, $old_key = null)
{
    if (isset($entity) && empty($entity->{$field}) && old($field)) {
        return old($field);
    }

    return isset($entity) ? $entity->{$field} : old($field);
}

function admin_buttons($list): string
{
    $html = '';

    foreach ($list as $item) {
        list($url, $title, $icon, $attributes) = $item;
        $html .= '<a class="btn btn-light" href="'.$url.'" '.Html::attributes($attributes).'><i class="'.$icon.'"></i>'.$title.'</a>';
    }

    $html .= '';

    return $html;
}

function normalizeDate($date): string
{
    return Carbon::createFromTimeString($date)->timezone(env('TIMEZONE'))->format('d.m.Y H:i');
}

function dateWithoutTimeZone($date): string
{
    return Carbon::createFromTimeString($date)->subHours(3)->format('d.m.Y H:i');
}

function el(string $tag, $attributes = null, $content = null) : string
{
    return \Spatie\HtmlElement\HtmlElement::render(...func_get_args());
}

function is_json($string): bool
{
    if (!is_string($string)) {

        return false;
    }

    if (intval($string) === $string) {
        return false;
    }

    $obj = json_decode($string);

    return (json_last_error() == JSON_ERROR_NONE);
}

function render_node($node, $module = 'categories')
{
    // dd($node->page);

    $add = el('a', [
        'href' => route("admin.{$module}.create", ['pid' => $node->id]),
        'title' => 'создать категорию',
        'class' => 'btn btn-default btn-xs',
    ], el('i.fa.fa-plus'))
    ;

    $edit = el('a', [
        'href' => route("admin.{$module}.edit", ['id' => $node->id]),
        'title' => 'редактировать категорию',
        'class' => 'btn btn-default btn-xs',
    ], el('i.fa.fa-pencil'))
    ;

    $delete = el('a', [
        'href' => route("admin.{$module}.delete", ['id' => $node->id]),
        'title' => 'удалить категорию',
        'class' => 'btn btn-danger btn-xs',
        'data-method' => 'delete',
        'data-confirm' => 'Вы уверены?'
    ], el('i.fa.fa-times'))
    ;

    $actions = $node->isRoot()? [$add] : [$add, $edit, $delete];
    $actions = implode('', $actions);


    $li = '<li class="dd-item" data-id="%d">';
    $el = '<div class="pull-right btn-group">%s</div><div class="dd-handle'.($node->isRoot()? ' dd-nodrag':'').'">%s</div>'.PHP_EOL;

    if ($node->isLeaf()) {
        return sprintf($li, $node->id) . sprintf($el, $actions, $node->name) . '</li>'.PHP_EOL;
    } else {
        $html  = sprintf($li, $node->id) . sprintf($el, $actions, $node->name) . PHP_EOL;
        $html .= '<ol class="dd-list">';

        foreach($node->children as $child)
            $html .= render_node($child, $module);

        $html .= '</ol>' . PHP_EOL;
        $html .= '</li>' . PHP_EOL;
    }

    return $html;
}

function sanitize($value, $strip_tags = false, $allowable_tags = null)
{
    $value = str_ireplace('<script>', '', $value);
    $value = str_ireplace('</script>', '', $value);

    if ($strip_tags) {
        $value = strip_tags($value, $allowable_tags);
    }

    return $value;
}
