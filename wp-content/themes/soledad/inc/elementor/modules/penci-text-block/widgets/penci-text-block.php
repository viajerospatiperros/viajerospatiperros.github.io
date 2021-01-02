<?php

namespace PenciSoledadElementor\Modules\PenciTextBlock\Widgets;

use PenciSoledadElementor\Base\Base_Widget;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class PenciTextBlock extends Base_Widget {

	public function get_name() {
		return 'penci-text-block';
	}

	public function get_title() {
		return esc_html__( 'Penci Text Block', 'soledad' );
	}

	public function get_icon() {
		return 'eicon-t-letter';
	}

	public function get_keywords() {
		return array( 'facebook', 'social', 'embed', 'page' );
	}

	/**
	 * Retrieve the list of scripts the image carousel widget depended on.
	 */
	public function get_script_depends() {
		return array( 'penci-facebook-js' );
	}

	protected function _register_controls() {
		parent::_register_controls();

		$this->start_controls_section(
			'section_editor', array(
				'label' => __( 'Text Editor', 'elementor' )
			)
		);

		$this->add_control(
			'editor', array(
				'label'   => '',
				'type'    => Controls_Manager::WYSIWYG,
				'dynamic' => array( 'active' => true ),
				'default' => __( 'Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.', 'elementor' ),

			)
		);

		$this->end_controls_section();
		$this->register_block_title_section_controls();

		$this->start_controls_section(
			'section_style', array(
				'label' => __( 'Text Editor', 'elementor' ),
				'tab'   => Controls_Manager::TAB_STYLE
			)
		);

		$this->add_responsive_control(
			'align', array(
				'label'     => __( 'Alignment', 'elementor' ),
				'type'      => Controls_Manager::CHOOSE,
				'options'   => array(
					'left'    => array(
						'title' => __( 'Left', 'elementor' ),
						'icon'  => 'eicon-text-align-left'
					),
					'center'  => array(
						'title' => __( 'Center', 'elementor' ),
						'icon'  => 'eicon-text-align-center'
					),
					'right'   => array(
						'title' => __( 'Right', 'elementor' ),
						'icon'  => 'eicon-text-align-right'
					),
					'justify' => array(
						'title' => __( 'Justified', 'elementor' ),
						'icon'  => 'eicon-text-align-justify'
					),
				),
				'selectors' => array(
					'{{WRAPPER}} .elementor-text-editor' => 'text-align: {{VALUE}};'
				),
			)
		);

		$this->add_control(
			'text_color', array(
				'label'     => __( 'Text Color', 'elementor' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => array(
					'{{WRAPPER}}' => 'color: {{VALUE}};'
				),
				'scheme'    => array(
					'type'  => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_3,
				)
			)
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(), array(
				'name'   => 'typography',
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
			)
		);

		$text_columns     = range( 1, 10 );
		$text_columns     = array_combine( $text_columns, $text_columns );
		$text_columns[''] = __( 'Default', 'elementor' );

		$this->add_responsive_control(
			'text_columns', array(
				'label'     => __( 'Columns', 'elementor' ),
				'type'      => Controls_Manager::SELECT,
				'separator' => 'before',
				'options'   => $text_columns,
				'selectors' => array(
					'{{WRAPPER}} .elementor-text-editor' => 'columns: {{VALUE}};'
				)
			)
		);

		$this->add_responsive_control(
			'column_gap', array(
				'label'      => __( 'Columns Gap', 'elementor' ),
				'type'       => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'em', 'vw' ],
				'range'      => array(
					'px' => array( 'max' => 100 ),
					'%'  => array( 'max' => 10, 'step' => 0.1 ),
					'vw' => array( 'max' => 10, 'step' => 0.1 ),
					'em' => array( 'max' => 10, 'step' => 0.1 )
				),
				'selectors'  => array( '{{WRAPPER}} .elementor-text-editor' => 'column-gap: {{SIZE}}{{UNIT}};' )
			)
		);

		$this->end_controls_section();

		$this->register_block_title_style_section_controls();

	}

	protected function render() {
		$settings = $this->get_settings();

		$css_class      = 'penci-block-vc penci-text-editor';
		$editor_content = $this->get_settings_for_display( 'editor' );

		$editor_content = $this->parse_text_editor( $editor_content );

		$this->add_render_attribute( 'editor', 'class', array( 'elementor-text-editor', 'elementor-clearfix' ) );

		$this->add_inline_editing_attributes( 'editor', 'advanced' );
		?>
		<div class="<?php echo esc_attr( $css_class ); ?>">
			<?php $this->markup_block_title( $settings, $this ); ?>
			<div class="penci-block_content">
				<div <?php echo $this->get_render_attribute_string( 'editor' ); ?>><?php echo $editor_content; ?></div>
			</div>
		</div>
		<?php
	}
}
