<?php

use App\CouponCategory;

function checkActive($path, $active = 'active') {
  if (is_string($path)) {
    return request()->is($path) ? $active : '';
  }
  foreach ($path as $str) {
    if (checkActive($str) == $active)
      return $active;
  }
}

function checked($name, $value, $checked = 'checked') {
    if (app('form')->getValueAttribute($name) == $value)
        return $checked;

    return '';
}

function getCategory() {
    $value = CouponCategory::orderBy('id')->pluck('name', 'id')->toArray();
    return ['' => 'Select Category'] + $value;
}
