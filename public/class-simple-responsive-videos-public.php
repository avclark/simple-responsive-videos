<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://avclark.com
 * @since      1.0.0
 *
 * @package    Simple_Responsive_Videos
 * @subpackage Simple_Responsive_Videos/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Simple_Responsive_Videos
 * @subpackage Simple_Responsive_Videos/public
 * @author     Adam Clark <adam@avclark.com>
 */
class Simple_Responsive_Videos_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Simple_Responsive_Videos_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Simple_Responsive_Videos_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/simple-responsive-videos-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Simple_Responsive_Videos_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Simple_Responsive_Videos_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/simple-responsive-videos-public.js', array( 'jquery' ), $this->version, false );

	}

	public function embed_wrapper( $content ) {
	  // match any iframes
	  $pattern = '~<iframe.*</iframe>|<embed.*</embed>~';
	  preg_match_all( $pattern, $content, $matches );

	  foreach ($matches[0] as $match) {
	      // wrap matched iframe with div
	      $wrappedframe = '<div class="video-wrap">' . $match . '</div>';

	      //replace original iframe with new in content
	      $content = str_replace($match, $wrappedframe, $content);
	  }

	  return $content;    
	}

}
