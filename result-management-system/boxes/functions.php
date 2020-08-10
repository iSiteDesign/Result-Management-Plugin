<?php

/* Metaboxes */

add_filter( 'cmb_meta_boxes', 'jp_student_informations' );
/**
 * Define the metabox and field configurations.
 *
 * @param  array $meta_boxes
 * @return array
 */
function jp_student_informations( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_jp_';

	/**
	 * Information
	 */
	$meta_boxes['student_information'] = array(
		'id'         => 'student_information',
		'title'      => __( 'Student Information', 'cmb' ),
		'pages'      => array( 'jp_students_result', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		// 'cmb_styles' => true, // Enqueue the CMB stylesheet on the frontend
		'fields'     => array(
			
			array(
				'name' => __( 'Father Name', 'cmb' ),
				'desc' => __( 'student father name (required)', 'cmb' ),
				'id'   => $prefix . 'student_father_name',
				'type' => 'text_medium',
				// 'repeatable' => true,
			),
			
			array(
				'name' => __( 'Class', 'cmb' ),
				'desc' => __( 'student class (required)', 'cmb' ),
				'id'   => $prefix . 'student_class',
				'type' => 'text_medium',
				// 'repeatable' => true,
			),
			
			array(
				'name' => __( 'Student Type', 'cmb' ),
				'desc' => __( 'student type (required)', 'cmb' ),
				'id'   => $prefix . 'student_type',
				'type'    => 'select',
				'options' => array(
					'Regular' => __( 'Regular', 'cmb' ),
					'Irregular'   => __( 'Irregular', 'cmb' ),
				),
				// 'repeatable' => true,
			),
			
			array(
				'name' => __( 'Date OF Birth', 'cmb' ),
				'desc' => __( 'student date of birth (required)', 'cmb' ),
				'id'   => $prefix . 'student_birth_date',
				'type' => 'text_date',
				// 'repeatable' => true,
			),
			
			array(
				'name'    => __( 'Sex', 'cmb' ),
				'desc'    => __( 'Selet student sex (required)', 'cmb' ),
				'id'      => $prefix . 'student_sex',
				'type'    => 'select',
				'options' => array(
					'Male' => __( 'Male', 'cmb' ),
					'Female'   => __( 'Female', 'cmb' ),
				),
			),
			

			array(
				'name' => __( 'Roll No', 'cmb' ),
				'desc' => __( 'student roll no (required)', 'cmb' ),
				'id'   => $prefix . 'student_roll',
				'type' => 'text_medium',
				// 'repeatable' => true,
			),
			
			array(
				'name' => __( 'Reg No', 'cmb' ),
				'desc' => __( 'student registration no (required)', 'cmb' ),
				'id'   => $prefix . 'student_reg',
				'type' => 'text_medium',
				// 'repeatable' => true,
			),


			array(
				'name' => __( 'English Marks', 'cmb' ),
				'desc' => __( 'English Marks (required)', 'cmb' ),
				'id'   => $prefix . 'total_english_marks',
				'type' => 'text_medium',
				// 'repeatable' => true,
			),

			array(
				'name' => __( 'Urdu Marks', 'cmb' ),
				'desc' => __( 'Urdu Marks (required)', 'cmb' ),
				'id'   => $prefix . 'total_urdu_marks',
				'type' => 'text_medium',
				// 'repeatable' => true,
			),

			array(
				'name' => __( 'Math Marks', 'cmb' ),
				'desc' => __( 'Math Marks (required)', 'cmb' ),
				'id'   => $prefix . 'total_math_marks',
				'type' => 'text_medium',
				// 'repeatable' => true,
			),

			array(
				'name' => __( 'Physics Marks', 'cmb' ),
				'desc' => __( 'Physics Marks (required)', 'cmb' ),
				'id'   => $prefix . 'total_physics_marks',
				'type' => 'text_medium',
				// 'repeatable' => true,
			),

			array(
				'name' => __( 'Chemistry Marks', 'cmb' ),
				'desc' => __( 'Chemistry Marks (required)', 'cmb' ),
				'id'   => $prefix . 'total_chemistry_marks',
				'type' => 'text_medium',
				// 'repeatable' => true,
			),

			array(
				'name' => __( 'Bio Marks', 'cmb' ),
				'desc' => __( 'Bio Marks (required)', 'cmb' ),
				'id'   => $prefix . 'total_bio_marks',
				'type' => 'text_medium',
				// 'repeatable' => true,
			),


			array(
				'name' => __( 'Total Marks', 'cmb' ),
				'desc' => __( 'Total Marks (required)', 'cmb' ),
				'id'   => $prefix . 'total_marks',
				'type' => 'text_medium',
				// 'repeatable' => true,
			),

	
		),
	);
	

	// Add other metaboxes as needed

	return $meta_boxes;
}

add_action( 'init', 'student_info_initialize', 9999 );
/**
 * Initialize the metabox class.
 */
function student_info_initialize() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'init.php';

}
