<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_speaker-program',
		'title' => 'Speaker Program',
		'fields' => array (
			array (
				'key' => 'field_522500598fdb3',
				'label' => 'Speaker Date',
				'name' => 'speaker_date',
				'type' => 'date_picker',
				'instructions' => 'The date of the speaker program.',
				'required' => 1,
				'date_format' => 'yymmdd',
				'display_format' => 'M dd, yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_5225023932d4d',
				'label' => 'Scribe',
				'name' => 'scribe',
				'type' => 'user',
				'instructions' => 'The scribe is the person who takes the notes during the speaker program.',
				'role' => array (
					0 => 'Scribe',
				),
				'field_type' => 'select',
				'allow_null' => 0,
			),
			array (
				'key' => 'field_527440d9a06b9',
				'label' => 'Editor',
				'name' => 'editor',
				'type' => 'user',
				'instructions' => 'The editor is the person who is responsible for posting the content to the website and is often the person to be contacted in case of errors or omissions.',
				'required' => 1,
				'role' => array (
					0 => 'editor',
				),
				'field_type' => 'select',
				'allow_null' => 0,
			),
			array (
				'key' => 'field_5225000a8fdb2',
				'label' => 'Speaker First Name',
				'name' => 'speaker_first_name',
				'type' => 'text',
				'instructions' => 'The speaker’s first, or given, name.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52782ba22d4b0',
				'label' => 'Speaker Last Name',
				'name' => 'speaker_last_name',
				'type' => 'text',
				'instructions' => 'The speaker’s last, or family, name.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_527440f4a06ba',
				'label' => 'Job Title',
				'name' => 'speaker_title',
				'type' => 'text',
				'instructions' => 'The job title, position, or capacity in which the speaker is presenting.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_52744216acd41',
				'label' => 'Organization',
				'name' => 'speaker_company',
				'type' => 'text',
				'instructions' => 'The organization or authority that the speaker is representing.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_527442ab6e982',
				'label' => 'About the Speaker',
				'name' => 'speaker_bio',
				'type' => 'textarea',
				'instructions' => 'Introduce the speaker, providing some background biographical information and evidence of their authority on the subject.	This will be displayed in the call-out box to the right of the program notes.',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_527441cd9d260',
				'label' => 'Email Address',
				'name' => 'speaker_email',
				'type' => 'email',
				'instructions' => 'The speaker’s email address should only be entered here if the speaker has agreed to share their contact information with club members.	 This field is only shown to logged in users.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array (
				'key' => 'field_522501238fdb4',
				'label' => 'Upcoming Speaker Information',
				'name' => 'speaker_program_content',
				'type' => 'wysiwyg',
				'instructions' => 'Displayed prior to the program date.',
				'required' => 1,
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_52744275d7232',
				'label' => 'Program Notes',
				'name' => 'speaker_program_notes',
				'type' => 'wysiwyg',
				'instructions' => 'Displayed after the program date.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5225014c8fdb5',
				'label' => 'Picture Gallery',
				'name' => 'speaker_program_images',
				'type' => 'repeater',
				'instructions' => 'The picture gallery is displayed as thumbnails below “About the Speaker” to the right of the program notes.	Don’t forget to also add a featured picture.',
				'sub_fields' => array (
					array (
						'key' => 'field_529e755f4501c',
						'label' => 'Speaker Program Image',
						'name' => 'speaker_program_image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'id',
						'preview_size' => 'thumbnail',
						'library' => 'all',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'rotary_speakers',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
				0 => 'the_content',
				1 => 'format',
				2 => 'categories',
				3 => 'tags',
				4 => 'send-trackbacks',
			),
		),
		'menu_order' => 0,
	));
}
?>