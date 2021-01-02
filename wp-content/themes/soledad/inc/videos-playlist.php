<?php
/**
 * Video Playlist Class
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly


/*-----------------------------------------------------------------------------------*/
# Get Youtube Video data
/*-----------------------------------------------------------------------------------*/
if ( ! class_exists( 'Penci_Video_List' ) ) {

	class Penci_Video_List {


		static $youtube_key = 'AIzaSyAPRocQxSO9mFJE9sbLDXXk_xaS201r50c';
		static $youtube_api_base = 'https://www.googleapis.com/youtube/v3/videos';
		static $vimeo_api_base = 'https://vimeo.com/api/v2/video/';


		public function __construct() {
			if(  is_admin() ){
				add_action( 'wp_ajax_nopriv_penci_save_video_playlist', array( __CLASS__, 'save_video_playlist' ) );
				add_action( 'wp_ajax_penci_save_video_playlist', array( __CLASS__, 'save_video_playlist' ) );

				add_action( 'wp_ajax_nopriv_penci_remove_video_playlist', array( __CLASS__, 'remove_video_playlist' ) );
				add_action( 'wp_ajax_penci_remove_video_playlist', array( __CLASS__, 'remove_video_playlist' ) );
			}
		}

		/**
		 * Save Videos list
		 */
		public static function save_video_playlist() {

			if ( empty( $_POST['nonce'] ) ) {
				wp_send_json_error();
			}

			$videos       = isset( $_POST['videoList'] ) ? $_POST['videoList'] : '';
			$shortcode_id = isset( $_POST['shortcodeId'] ) ? $_POST['shortcodeId'] : '';

			$video_infos = self::get_video_infos( $videos );

			$option_video = get_option( 'penci-shortcode-playlist-' . $shortcode_id );

			if ( $option_video != $video_infos ) {
				update_option( 'penci-shortcode-playlist-' . $shortcode_id, $video_infos );
			}

			wp_send_json_success();

		}

		/**
		 * Remove Videos list
		 */
		public static function remove_video_playlist() {

			if ( empty( $_POST['nonce'] ) ) {
				wp_send_json_error();
			}

			$shortcode_id = isset( $_POST['shortcodeId'] ) ? $_POST['shortcodeId'] : '';

			delete_option( 'penci-shortcode-playlist-' . $shortcode_id );

			wp_send_json_success( 'penci-shortcode-playlist-' . $shortcode_id );

		}


		public static function get_video_infos( $videos ) {
			$videos_list = array();
			if ( empty( $videos ) ) {
				return $videos_list;
			}


			$videos_data = self::get_video_info( $videos );

			if ( empty( $videos_data ) ) {
				return $videos_list;
			}

			$youtube_thumb_base  = 'https://i.ytimg.com/vi/';
			$youtube_player_base = 'https://www.youtube.com/embed/';
			$vimeo_thumb_base    = 'https://i.vimeocdn.com/video/';
			$vimeo_player_base   = 'https://player.vimeo.com/video/';


			foreach ( $videos_data as $video ) {

				if ( empty( $video['id'] ) ) {
					continue;
				}

				if ( 'youtube' == $video['type'] ) {
					$video['thumb'] = $youtube_thumb_base . $video['id'] . '/default.jpg';
					$video['id']    = $youtube_player_base . $video['id'] . '?enablejsapi=1&amp;rel=0&amp;showinfo=0';
				} elseif ( $video['type'] == 'vimeo' ) {
					$video['thumb'] = $vimeo_thumb_base . $video['thumb'];
					$video['id']    = $vimeo_player_base . $video['id'] . '?api=1&amp;title=0&amp;byline=0';
				}

				$videos_list[] = $video;
			}

			return $videos_list;
		}

		/**
		 * Get Videos List data
		 *
		 * @param $videos_list
		 *
		 * @return array
		 */
		public static function get_video_info( $videos_list ) {

			$videos_list = array_filter( $videos_list );
			$videos_ids  = array();

			foreach ( $videos_list as $video ) {
				// Youtube
				if ( preg_match( "#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $video, $matches ) ) {

					$video_id = preg_replace( '/\s+/', '', $matches[0] );

					$videos_ids[] = self::get_youtube_info( $video_id );
				} // Vimeo
				elseif ( preg_match( "/(https?:\/\/)?(www\.)?(player\.)?vimeo\.com\/([a-z]*\/)*([0-9]{6,11})[?]?.*/", $video, $matches ) ) {
					$video_id = preg_replace( '/\s+/', '', $matches[5] );
					$videos_ids[] = self::get_vimeo_info( $video_id );
				}
			}

			return $videos_ids;
		}


		/**
		 * Get Youtube Video data
		 *
		 * @param $vid
		 *
		 * @return null
		 */
		private static function get_youtube_info( $video_id ) {
			$video = array();
			// Build the Api request
			$params = array(
				'part' => 'snippet,contentDetails',
				'id'   => $video_id,
				'key'  => get_theme_mod( 'penci_youtube_api_key' ),
			);



			$api_url = self::$youtube_api_base . '?' . http_build_query( $params );

			$request = wp_remote_get( $api_url );

			// Check if there are errors
			if ( is_wp_error( $request ) ) {
				return null;
			}

			// Prepare the data
			$result = json_decode( wp_remote_retrieve_body( $request ), true );

			// Check if the video title is exists
			if ( empty( $result['items'][0]['snippet']['title'] ) ) {
				return null;
			}

			// Prepare the Video duration
			$video_info = $result['items'][0]['contentDetails'];

			if ( ! empty( $video_info['duration'] ) ) {
				$interval          = new DateInterval( $video_info['duration'] );
				$duration_sec      = $interval->h * 3600 + $interval->i * 60 + $interval->s;
				$time_format       = ( $duration_sec >= 3600 ) ? 'H:i:s' : 'i:s';
				$video['duration'] = gmdate( $time_format, $duration_sec );
			}

			// Video data
			$video['title'] = $result['items'][0]['snippet']['title'];
			$video['id']    = $video_id;
			$video['type']  = 'youtube';

			return $video;
		}

		/**
		 * Get Vimeo Video data
		 *
		 * @param $vid
		 *
		 * @return null
		 */
		private static function get_vimeo_info( $video_id ) {

			$video = array();
			// Build the Api request
			$api_url = self::$vimeo_api_base . $video_id . '.json';
			$request = wp_remote_get( $api_url );

			// Check if there is no any errors
			if ( is_wp_error( $request ) ) {
				return null;
			}

			// Prepare the data
			$result = json_decode( wp_remote_retrieve_body( $request ), true );

			// Check if the video title is exists -
			if ( empty( $result[0]['title'] ) ) {
				return null;
			}

			// Prepare the Video duration
			if ( ! empty( $result[0]['duration'] ) ) {

				$duration_sec      = $result[0]['duration'];
				$time_format       = ( $duration_sec >= 3600 ) ? 'H:i:s' : 'i:s';
				$video['duration'] = gmdate( $time_format, $duration_sec );
			}

			// Prepare the Video thumbnail
			if ( ! empty( $result[0]['thumbnail_small'] ) ) {
				$video_thumb    = @parse_url( $result[0]['thumbnail_small'] );
				$video_thumb    = str_replace( '/video/', '', $video_thumb['path'] );
				$video['thumb'] = $video_thumb;
			}

			// Video data
			$video['title'] = $result[0]['title'];
			$video['id']    = $video_id;
			$video['type']  = 'vimeo';

			return $video;
		}


	}
}


new Penci_Video_List;