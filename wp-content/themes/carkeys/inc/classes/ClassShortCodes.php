<?php
namespace CarkeysTheme;
/**
 * 
 */
class ClassShortCodes
{
	
	public function __construct()
	{
		add_shortcode('select_year', array( $this, 'DpYear' ) );
		add_shortcode('select_make', array( $this, 'DpMake' ) );
		add_shortcode('select_model', array( $this, 'DpModel' ) );

		add_shortcode( 'select_filter_form', array( $this, 'SelectForm' ) );
	}

	
	public function DpYear() 
	{   
		$scodeHtml = '';
		ob_start();
			wp_dropdown_categories(
				array(
					'taxonomy'=> 'car_years', 
					'selected'=> '', 
					'show_option_none'=> 'Year', 
					'hide_empty' => 0, 
					'name' => 'listofoptions', 
					'value_field' => 'slug' 
				)
			);
		$scodeHtml = ob_get_clean();

		return $scodeHtml;
	}


	public function DpMake() 
	{
		$scodeHtml = '';
		ob_start();
			wp_dropdown_categories(
				array(
					'taxonomy'=> 'car_makes', 
					'selected'=> '', 
					'show_option_none'=> 'Make', 
					'hide_empty' => 0, 
					'name' => 'listofoptions', 
					'value_field' => 'slug' 
				)
			);
		$scodeHtml = ob_get_clean();
		return $scodeHtml;
	}


	public function DpModel()
	{

		// wp_dropdown_categories(
		// 	array(
		// 		'taxonomy'=> 'car_models', 
		// 		'selected'=> '', 
		// 		'show_option_none'=> 'Model', 
		// 		'hide_empty' => 0, 
		// 		'name' => 'listofoptions', 
		// 		'value_field' => 'slug' 
		// 	)
		// );
		$scodeHtml = '';
		

		$this_category = get_category(1);
        $cats=get_categories(array('hide_empty' => '0', 'parent'=>$this_category ->cat_ID,'order'=> 'ASC','depth'=> '1'));

        if(!empty($cats)){
        	ob_start();
	            foreach ($cats as $cat) {
	                $newargs = array(
	                        'tax_query' => array(
	                            array(
	                                'taxonomy' => 'category',
	                                'field' => 'name',
	                                'terms' => $cat->name,
	                                        )
	                             )
	                          );
	                echo'<div>';
	                echo '<span class="subhead-title">'.$cat->name.'</span>';
	                $nopostsparent= new wp_query( $newargs );
	                if ($nopostsparent->have_posts()) {
	                    echo '<ul class="cat-arc-links">';
	                while ($nopostsparent->have_posts() ){
	                    $nopostsparent->the_post();
	                       echo'<li><a href="'. get_permalink() .'" class="product-link">'.get_the_title().'</a></li>';
	                }
	                wp_reset_query();
	                echo '</ul></div>';
	             }
	            }
	        $scodeHtml = ob_get_clean();
        }else{
        $newargs = array(
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'name',
                        'terms' => $this_category->name,
                    )
                  )
            );
        	ob_start();
	            $nopostsparent= new \wp_query( $newargs );
	            if ($nopostsparent->have_posts()) {
	              echo '<ul class="cat-arc-links">';
	            while ($nopostsparent->have_posts() ){
	             $nopostsparent->the_post();
	             echo'<li><a href="'. get_permalink() .'" class="product-link">'.get_the_title().'</a></li>';
	            }
	            wp_reset_query();
	                echo '</ul></div>';
	            }
	        $scodeHtml = ob_get_clean();
        }

        return $scodeHtml;
	}

	/*
	* Callback for select_filter_form shortcode
	*/
	public function SelectForm()
	{
		$scodeHtml = '';

		ob_start();
			echo '<div class="select-input">';
				wp_dropdown_categories(
					array(
						'taxonomy'=> 'car_years', 
						'selected'=> '', 
						'show_option_none'=> 'Year', 
						'hide_empty' => 0, 
						'name' => 'car_years', 
						'value_field' => 'term_id' 
					)
				);
			echo '</div>';
		$scodeHtml .= ob_get_clean();

		ob_start();
			echo '<div class="select-input">';
				wp_dropdown_categories(
					array(
						'taxonomy'=> 'car_makes', 
						'selected'=> '', 
						'show_option_none'=> 'Make', 
						'hide_empty' => 0, 
						'name' => 'car_makes', 
						'value_field' => 'term_id' 
					)
				);
			echo '</div>';
		$scodeHtml .= ob_get_clean();

		ob_start();
			echo '<div class="select-input">';
			wp_dropdown_categories(
				array(
					'taxonomy'=> 'car_models', 
					'selected'=> '', 
					'show_option_none'=> 'Model', 
					'hide_empty' => 0, 
					'name' => 'listofoptions', 
					'value_field' => 'term_id' 
				)
			);
			echo '</div>';
		$scodeHtml .= ob_get_clean();

		$scodeHtml = '<form id="filter-form" class="filter-form">'.$scodeHtml.'</form>';

		return $scodeHtml;
	}
	
}