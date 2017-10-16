<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	),
    'customClass' => array(
		'label' => __('Custom Section Class', 'fw'),
		'desc'  => __('Insert custom class to embed this class', 'fw'),
		'type'  => 'text',
	),
    'customId' => array(
		'label' => __('Custom Section Id', 'fw'),
		'desc'  => __('Insert custom id to embed this id', 'fw'),
		'type'  => 'text',
	)
);
