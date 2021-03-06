<?php

namespace Seatsio\Events;

function someLabels($ownLabel, $ownType, $parentLabel = null, $parentType = null, $section = null, $entrance = null)
{
    $labels = new Labels();
    $labels->own = aLabelAndType($ownLabel, $ownType);
    if ($parentLabel) {
        $labels->parent = aLabelAndType($parentLabel, $parentType);
    }
    $labels->section = $section;
    if ($entrance) {
        $labels->entrance = new Entrance();
        $labels->entrance->label = $entrance;
    }
    return $labels;
}

function aLabelAndtype($label, $type)
{
    $labelAndType = new LabelAndType();
    $labelAndType->type = $type;
    $labelAndType->label = $label;
    return $labelAndType;
}